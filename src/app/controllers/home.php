<?php


//Home class is the defualt called by the controller
class Home extends Controller
{

    // public function index($name = '')
    public function index()
    {
        // $user = $this->model('User');
        // $user->name = $name;
        
        // $this->view('home/index', ['name' => $user->name]); //directory path
        $this->view('home/index');
    }
     
}