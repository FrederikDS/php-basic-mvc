<?php

// controller base class
abstract class Controller
{

    //inheriting classes must implement index
    abstract public function index();

    //loads the model & returns ref to a new created object model
    public function model($model, ...$args)
    {
        require_once '../app/models/'. $model . '.php';
        return new $model(...$args); 
    }

    //loads the view, passes the data to the view as an array
    public function view($view, $data = [] )
    {
        require_once '../app/views/' . $view . '.php';
    }

}