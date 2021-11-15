<?php
class App
{
    //Set default call if no url provided
    private $controller = "home";
    private $method = "index";
    private $params = [];

    public function __construct()
    {
        $url = $this->splitURL();

        //Check if the controller specified in the URL exists
        if (file_exists('../app/controllers/' . strtolower($url[0]) . '.php')) {
            $this->controller = strtolower($url[0]); //Set the controller as specified
            unset($url[0]);
        }

        //Instanciate an object of the controller
        require_once('../app/controllers/' . $this->controller . '.php');
        $this->controller = new $this->controller;

        //Check if the method specified in the URL exists
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1]) && isAccessible($this->controller, $url[1])) {
                $this->method = $url[1]; //Set the method as specified
                unset($url[1]);
            }
        }

        //Assign the remaining items in the url to params property
        $this->params = array_values($url);

        //Call the method of the instanciated object
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    private function splitURL()
    {
        $url = isset($_GET['url']) ? $_GET['url']: 'home';
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = trim($url);
        $url = explode('/', $url);
        return $url;
    }
}
