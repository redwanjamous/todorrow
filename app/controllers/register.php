<?php

class Register extends Controller
{
    function index()
    {
        $user = $this->loadModel('user');

        if ($user->isLoggedIn()) {
            header("Location:" . ROOT . "home");
        } else {
            if (isset($_POST['register'])) {
                $register = $user->register($_POST);
                if ($register !== true) {
                    $data['title'] = 'Register | ' . WEBSITE_NAME;
                    $data['email'] = $_POST['email'];
                    $data['first_name'] = $_POST['first_name'];
                    $data['last_name'] = $_POST['last_name'];
                    $data['error'] = $register;
                    $this->loadView('register', $data);
                    $this->loadView('alert', $data);
                } else {
                    header("Location:" . ROOT . "home");
                }
            } else {
                $data['title'] = 'Register | ' . WEBSITE_NAME;
                $this->loadView('register', $data);
            }
        }
    }
}
