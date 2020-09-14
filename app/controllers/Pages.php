<?php

class Pages extends Controller{

    function __construct()
    {
        // echo "page loaded";
        $this->postModel = $this->model('Post');
    }
    function index(){
        $posts = $this->postModel->getPosts();
        $data = [
            "posts"=>$posts
        ];
        $this->view('Pages/index',$data);
    }
    function about($id){
        echo $id;
    }
}