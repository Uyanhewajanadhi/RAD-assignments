<?php 

class LoginModel extends CI_Model{ 

    public function __construct() { 
        parent::__construct(); 
    } 

    function login($email, $password){
        $query = "select * from user where email='".$email."' and password='".$password."'";
        $results = $this->db->query($query);
        
        return $results->result();

    }
 }
?>