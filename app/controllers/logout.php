<?php
class Logout extends Controller
{
    function index()
    {
        $user = $this->loadModel('user');

        if ($user->isLoggedIn()) {
            $user -> logout();
            header("Location:" . ROOT . "login");
        } else {
            $data['title'] = 'Login | ' . WEBSITE_NAME;
            $this->loadView('login', $data);
        }
        
    }
}
