<?php

class Home extends Controller
{
    function index()
    {
        //Create an instance of user model
        $user = $this->loadModel('user');

        //Check if the user is logged in
        if ($user->isLoggedIn()) {
            //may need global
            //$data=$user->getData();
            //bring user data by getData() method from user model that uses list controller and task controller to get data
            

            $data['title'] = 'Home | ' . WEBSITE_NAME;
            
            $this->loadView('index', $data);
            
        }else{
            header("Location:" . ROOT . "login");
        }


        
    }
    private function h()
    {
    }
}
