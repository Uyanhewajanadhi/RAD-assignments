<?php 

class ActivityModel extends CI_Model{ 

    public function __construct() { 
        parent::__construct(); 
    } 

    function displayUsers(){
        $query = $this->db->get('user');
        return $query->result();
    }

    function deleteUsers($id){
        //echo '<script>console.log("id: '.$id.'")</script>';
        $query = "delete from user where id='".$id."'";
        $this->db->query($query);
    }

    function displayUserById($id){
        //echo '<script>console.log("id: '.$id.'")</script>';
        $query = "select * from user where id='".$id."'";
        $results = $this->db->query($query);
        return $results->result();
    }

    function updateUser($id, $name, $email, $mobile){
        $query = "update user set name='".$name."', email='".$email."', mobile='".$mobile."' WHERE id='".$id."'";
        $this->db->query($query);
    }
 }
?>