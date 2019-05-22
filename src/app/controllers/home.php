<?php


//Home class is the defualt called by the controller
class Home extends Controller
{

    public function index()
    {
        //no need to set a model, maybe check for a cookie to check if user exists?
        
        $this->view('home/index');
    }
     
}