<?php

class Pages extends Controller{

    function __construct()
    {
        // echo "page loaded";
    }
    function index(){
        $this->view('Pages/index');
    }
    function about($id){
        echo $id;
    }
}