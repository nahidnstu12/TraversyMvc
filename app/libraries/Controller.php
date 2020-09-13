<?php
/* 
* Base Controller
* Loads the model and views
*/

class Controller{
    // load model
    function model($model){
        require_once "../app/models/$model.php";

        return new $model;
    }

    // load view
    function view($view,$data=[]){
        if(file_exists("../app/views/$view.php")){
            require_once "../app/views/$view.php";
        }else{
            die("View does not exists");
        }
    }
}

?>