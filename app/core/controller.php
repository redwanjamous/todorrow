<?php
class Controller
{
    protected function loadView($view, $data = [])
    {
        if (file_exists('../app/views/' . $view . '.php')) {
            require_once('../app/views/' . $view . '.php');
        } else {
            require_once('../app/views/404.php');
        }
    }

    protected function loadModel($model)
    {
        if (file_exists('../app/models/' . $model . '.php')) {
            require_once('../app/models/' . $model . '.php');
            
            return $model = new $model;
        }
       
        return false;
    }
}
