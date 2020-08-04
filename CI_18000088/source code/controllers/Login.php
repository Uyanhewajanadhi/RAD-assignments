<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct() { 
        parent::__construct(); 

        $this->load->database(); 
        $this->load->helper('url');
        $this->load->model('LoginModel');
        $this->load->library('session');
    }
    
    public function login() { 
        $this->load->view('login_form'); 

        //password encrypt
        // Store the cipher method 
        $ciphering = "AES-128-CTR"; 
        // Non-NULL Initialization Vector for encryption 
        $encryption_iv = '1234567891011121';         
        // Store the encryption key 
        $encryption_key = "jay123"; 
        // Use OpenSSl Encryption method 
        $iv_length = openssl_cipher_iv_length($ciphering); 
        $options = 0; 
        
        if($this->input->post('signin')){            
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            
            //encrypt password
            $encryptedPW = openssl_encrypt($password, $ciphering, 
            $encryption_key, $options, $encryption_iv); 

            $result['data']=$this->LoginModel->login($email, $encryptedPW);
            
            if(count($result['data']) == 0){
                echo '<script>alert("Incorrect Email/Password. Please try again");</script>';
            }else{
                $this->session->set_userdata('email', $email); 
                redirect("Activities/displaydata");     
            }
        }  
    }
}
?>