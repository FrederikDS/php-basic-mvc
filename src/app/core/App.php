<?php

class App
{

    //properties hold the default controller and method
    //will refer to home/index
    protected $controller = 'home'; 
    protected $method = 'index';
    protected $params = [];


    public function __construct()
    {
        //first parse the URL and return an array
        $url = $this->parseUrl();
        

        // Init the controller--------------------------------------------
        // check if the controller passed in the url exists
        if(file_exists('../app/controllers/'. $url[0] .'.php'))
        {
            //if exist assign to the controller var
            $this->controller = $url[0];
            unset($url[0]); //remove from array
        }

        // load the contoller in
        require_once '../app/controllers/'. $this->controller .'.php';

        // echo $this->controller;
        // create the controller object
        $this->controller = new $this->controller;
        // ----------------------------------------------------------------

        // Init the method passed by the URL ------------------------------
        // Check if a method name is passed in the url
        if(isset($url[1]))
        {
            //check if the method exists in the controller
            if(method_exists($this->controller, $url[1]))
            {
                //assign method name to property
                $this->method = $url[1];
                unset($url[1]); //remove from the array
            }
        }
        // ----------------------------------------------------------------

        // Init the params passed in the URL ------------------------------
        // GET => params are passed in the URL 
        // check if the url array still contains items, those are the params passed to the method
        // POST => params are passed in the body of the request
        switch($_SERVER['REQUEST_METHOD'])
        {
            case 'GET':
                //if htaccess rewrite works properly can use this
                // $this->params = $url ? array_values($url) : [];

                //temp work around till the htaccess rewrite works fine
                foreach($_GET as $key => $value)
                {
                    $this->params[$key] = $value;
                }
                break;
            case 'POST': 
                //loop through the post data
                //add key=>value to the arrays
                foreach($_POST as $key => $value)
                {
                    $this->params[$key] = $value;
                }
                break;
            default:
                break;
        }
        // ----------------------------------------------------------------

        
        //call the controller method passed, params can be associative array
        call_user_func(array($this->controller,$this->method), $this->params);
        
        // call_user_func_array only works with an indexed array as params
        // call_user_func_array([$this->controller, $this->method], $this->params);    

    }


    // Parses the URL and returns an array
    // The url is rewriten by the Apache2 Rewrite engine based on the .htaccess file
    // example http://host/conroller/method/arg1/arg2... to http://host/index.php?url=controller/method/arg1/arg2...
    // rewrite is done to make $_GET['url'] work
    // out of the url return an array of strings
    // url[0] = controller
    // url[1] = method
    // url[..] = args
    protected function parseUrl()
    {
        if(isset($_GET['url']))
        {
            return $url = explode('/',filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }

}