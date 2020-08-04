<?php 

class RegistrationModel extends CI_Model{ 

    public function __construct() { 
        parent::__construct(); 
    } 

    function saveRecords($name, $email, $mobile, $password){
        $query = "insert into user (name, email, mobile, password) VALUES ('$name', '$email', '$mobile', '$password')";
        $this->db->query($query);
    }
    
} 

?>