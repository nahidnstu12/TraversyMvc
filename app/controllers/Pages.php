<?php

class Pages extends Controller{

    function __construct()
    {
        /* setting model class
        * $this->postModel = $this->model('Post');
        */
    }
    function index(){
        $data = [
            "title" => "TraversyMVC",
        ];
        $this->view('Pages/index',$data);
    }
    function about(){
        $data = [];
        $this->view("Pages/about");
    }
    
}