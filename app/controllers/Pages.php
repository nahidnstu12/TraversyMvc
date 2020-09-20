<?php

class Pages extends Controller{

    function __construct()
    {
      
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