<?php
    /* 
        App Core Class
        Creates URL & loads controller
        URL format - /controller/method/params
     */
    

    class Core{
        protected $currentController = 'Pages';
        protected $currentMethod = 'index';
        protected $params = [];

        function __construct()
        {
            $url = $this->getUrl();

            // look in controller for first value
            if(file_exists('../app/controllers/'. ucwords($url[0]) . '.php')){

                // if exist,set controller
                $this->currentController = ucwords($url[0]);

                // unset 0 index
                unset($url[0]);
            }

            //require the controller
            require_once "../app/controllers/$this->currentController.php";

            // instantiate controller class
            $this->currentController = new $this->currentController;

            // check second part of url
            if(isset($url[1])){
                if(method_exists($this->currentController,$url[1])){
                    $this->currentMethod = $url[1];
                    unset($url[1]);
                }
            }

            // get params
            $this->params = $url ? array_values($url) : [];
            call_user_func_array([$this->currentController,$this->currentMethod],$this->params);           

        }
        function getUrl(){

            // $url = $_GET['url'];

            if(isset($_GET['url'])){

                $url = rtrim($_GET['url'],'/');
                $url = filter_var($url,FILTER_SANITIZE_URL);
                $url = explode('/',$url);

                return $url;
            }
        }
    }
?>