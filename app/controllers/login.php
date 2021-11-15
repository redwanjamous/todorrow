<?php

class Login extends Controller
{
    function index()
    {
        $user = $this->loadModel('user');

        if ($user->isLoggedIn()) {
            header("Location:" . ROOT . "home");
        } else {
            if (isset($_POST['login'])) {
                $login = $user->login($_POST);
                if ($login !== true) {
                    $data['title'] = 'Login | ' . WEBSITE_NAME;
                    $data['email'] = $_POST['email'];
                    $data['error'] = $login;
                    $this->loadView('login', $data);
                    $this->loadView('alert', $data);
                } else {
                    header("Location:" . ROOT . "home");
                }
                
            } else {
                $data['title'] = 'Login | ' . WEBSITE_NAME;
                $this->loadView('login', $data);
            }
        }
    }
}
