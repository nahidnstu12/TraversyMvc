<?php 

class User{

    public function __construct(){
        $this->db = new Database;
      }
    
    public function register($data){
        $this->db->query('INSERT INTO users (username, email, password) VALUES(:name, :email, :password)');
        // Bind values
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
  
        // Execute
        if($this->db->execute()){
          return true;
        } else {
          return false;
        }
    }
    // Login
    public function login($email,$pass){
        $this->db->query("select * from users where email=:email");
        $this->db->bind(":email",$email);
        $row = $this->db->single();

        $has_pass = $row->password;
        if(password_verify($pass,$has_pass)){
            return $row;
        }else{
            return false;
        }
    }

    // Find user by email
    public function findUserByEmail($email){
        $this->db->query('SELECT * FROM users WHERE email = :email');
        // Bind value
        $this->db->bind(':email', $email);
  
        $row = $this->db->single();
  
        // Check row
        if($this->db->rowCount() > 0){
          return true;
        } else {
          return false;
        }
      }


}

?>