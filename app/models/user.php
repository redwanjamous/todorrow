<?php
class User
{
    function login($POST)
    {
        if (
            isset($POST['email']) &&
            isset($POST['password'])
        ) {
            // Input sanitizing
            $POST['email'] = htmlspecialchars($POST['email']);
            $POST['password'] = htmlspecialchars($POST['password']);

            // Return error message for invalid input
            if (!is_valid_email($POST['email']) || !is_valid_password($POST['password'])) {
                return 'Invalid email or password';
            }
            
            // Get user from the database
            $db = new Database();
            $sql = 'SELECT * FROM users WHERE email = :email AND password = :password';
            $stmt = $db->prepare($sql);
            $result = $stmt->execute([  'email'     => $POST['email'],
                                        'password'  => md5($POST['password'])]);

            if($result){
                $user = $stmt->fetchAll();
                if(count($user) == 1){
                    $this->regenerateToken($user[0]['email']);
                    return true;
                }
            }

        }
        return 'Invalid email or password';
    }

    function register($POST)
    {
        if (
            isset($POST['first_name']) &&
            isset($POST['last_name']) &&
            isset($POST['email']) &&
            isset($POST['password'])
        ) {

            // Input sanitizing
            $POST['first_name'] = htmlspecialchars($POST['first_name']);
            $POST['last_name'] = htmlspecialchars($POST['last_name']);
            $POST['email'] = htmlspecialchars($POST['email']);
            $POST['password'] = htmlspecialchars($POST['password']);


            // Return error message for invalid input
            if (!is_valid_email($POST['email'])) {
                return 'Invalid Email';
            } elseif (!is_valid_password($POST['password'])) {
                return 'Password must contain at least 8 characters, one uppercase letter, one lowercase letter, one number and a special character';
            } elseif ($this -> is_registered($POST['email'])) {
                return 'Email is already registered, please log in';
            }

            // Generate a token
            $token = $this->generateToken($POST['email']);

            // Add user to the database
            $db = new Database();
            $sql = 'INSERT INTO users ( email, password, first_name, last_name, tokenKey, tokenValue, expiry) VALUES (:email, :password, :first_name, :last_name, :tokenKey, :tokenValue, :expiry)';
            $stmt = $db->prepare($sql);
            $result = $stmt->execute([
                'email'         =>  $POST['email'],
                'password'      => md5($POST['password']),
                'first_name'    => $POST['first_name'],
                'last_name'     => $POST['last_name'],
                'tokenKey'      => $token['key'],
                'tokenValue'    => $token['value'],
                'expiry'        => COOKIE_EXPIRY
            ]);

            // Assign the new token to the cookie
            setcookie(COOKIE_NAME, $token['key'] . ':' . $token['value'], COOKIE_EXPIRY, COOKIE_PATH, httponly:true);
            
        }
        return true;
    }

    function logout(){
        setcookie(COOKIE_NAME,"", time() - 3600); // Delete the cookie
    }

    function isLoggedIn()
    {
        //Check if there is an existing session
        if (isset($_COOKIE[COOKIE_NAME])) {
            list($token['key'], $token['value']) = explode(':', $_COOKIE[COOKIE_NAME]);

            // Validate session
            $db = new Database(); // Establish a DB connection
            $sql = 'SELECT * FROM users WHERE tokenKey = ?';
            $stmt = $db->prepare($sql);
            $result = $stmt->execute([$token['key']]);
            if ($result) {
                $user = $stmt->fetch();
                if(is_array($user)){

                if ($user['tokenValue'] != $token['value']) {
                    //fail because of invalid token value
                    return false;
                } elseif ($user['expiry'] < time()) {
                    // fail: session expired
                    return false;
                } elseif (md5(SALT . $user['email'] . SALT) != $token['key']) {
                    //fail: invalid token key
                    return false;
                } else {
                    //success
                    return $this->regenerateToken($user['email']);
                }
            }
            }
        } else return false; // Return false if the cookie is not set
    }

    function regenerateToken($email)
    {
        $token = $this->generateToken($email); // Get a new token

        // Establish a DB connection and update the token value
        $db = new Database();
        $sql = 'UPDATE users SET tokenValue = ? WHERE email = ?';
        $stmt = $db->prepare($sql);
        $result = $stmt->execute([$token['value'], $email]);

        if ($result) {
            // Get cookie expiry time
            $sql = 'SELECT expiry FROM users WHERE email = ?';
            $stmt = $db->prepare($sql);
            $stmt->execute([$email]);
            $result = $stmt->fetch();

            setcookie(COOKIE_NAME, $token['key'] . ':' . $token['value'], $result['expiry'],COOKIE_PATH, "", true, true); // Assign the new token to the cookie
            
            return true;
        }
        return false;
    }

    function generateToken($email)
    {
        $token['key']      = md5(SALT . $email . SALT); // Generate an identifier by hashing the result of concatenation between user's email and a predefined salt
        $token['value']    = md5(uniqid(rand(), true)); // Generate the value of the token
        return $token;
    }

    function is_registered($email){
        $db = new Database();
        $sql = 'SELECT email FROM users WHERE email = ?';
        $stmt = $db->prepare($sql);
        $result = $stmt->execute([$email]);
        if($result){
            $user = $stmt->fetchAll();
            if(count($user) == 1){
                return true;
            } else return false;
        }
    }
}
