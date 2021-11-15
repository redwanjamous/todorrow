<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ASSETS ?>css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?= ASSETS ?>js/main.js"></script>
    <title><?= $data['title'] ?></title>
</head>


<body>
    <header class="panel">
        <p class="logo">
            <?= WEBSITE_NAME ?>
        </p>
        <div class="menu">
            <div class="menu-line"></div>
            <div class="menu-line"></div>
            <div class="menu-line"></div>
        </div>
        <div class="sidebar">
            <div>
                <a href="<?=ROOT?>login">Login</a>
                <a href="<?=ROOT?>register">Register</a>
                <footer><span>&#169</span>2021 Redwan Jamous. All rights reserved.</footer>
            </div>
        </div>
    </header>

    <div class="main-section">
        <div class="container">
            <p class="title">REGISTER</p>
            <main class="main">
                <form class="form" action="" method="post">
                    <div class="form-fields">
                        <div class="form-item">
                            <label for="fname">First Name</label>
                            <input type="text" name="first_name" id="fname" value="<?= (isset($data['first_name'])) ? $data['first_name'] : ""; ?>">
                        </div>

                        <div class="form-item">
                            <label for="lname">Last Name</label>
                            <input type="text" name="last_name" id="lname" value="<?= (isset($data['last_name'])) ? $data['last_name'] : ""; ?>">
                        </div>
                    </div>
                    <div class="form-fields">
                        <div class="form-item">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" value="<?= (isset($data['email'])) ? $data['email'] : ""; ?>">
                        </div>

                        <div class="form-item">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password">
                        </div>
                    </div>
                    <div class="form-item btn">
                        <input type="submit" value="REGISTER" name="register" class="submit">
                    </div>

                </form>
            </main>
        </div>
    </div>
</body>

</html>