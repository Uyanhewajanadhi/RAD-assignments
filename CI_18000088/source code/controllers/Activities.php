<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activities extends CI_Controller {
	public function __construct() { 
        parent::__construct(); 

        $this->load->database(); 
        $this->load->helper('url');
        $this->load->library('Pdf');
        $this->load->model('ActivityModel');
    }
    
    public function displaydata(){         
        $data = [];
        $result['data']=$this->ActivityModel->displayUsers();
        $this->load->view('activity_form', $result); 
    }

    public function deleteData(){        
        $id=$this->input->get('id');
        $this->ActivityModel->deleteUsers($id);
        redirect("Activities/displaydata");        
    }
    
    public function updateData(){        
        $id=$this->input->get('id');
        $result['userData']=$this->ActivityModel->displayUserById($id);
        $this->load->view('updateData_form', $result); 

        if($this->input->post('save')){
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $mobile = $this->input->post('mobile'); 
            
            $this->ActivityModel->updateUser($id, $name, $email, $mobile);
            redirect("Activities/displaydata"); 
        }
               
    }

    public function generate_pdf() {
        //load pdf library
        $this->load->library('Pdf');

        //get user data
        $result['data']=$this->ActivityModel->displayUsers();

        //pass results to view
        $this->load->view('gen_pdf', $result);
    }
}
?>