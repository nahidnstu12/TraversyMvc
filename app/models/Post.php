<?php

class Post{
    private $db;

    function __construct()
    {
        $this->db = new Database;
    }
    public function getPosts(){
        $this->db->query("select * from users");
        return $this->db->resultSet();
    }
}