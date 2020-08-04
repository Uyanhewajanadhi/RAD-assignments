<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {
    
    public function __construct() { 
        parent::__construct(); 

        $this->load->database(); 
        $this->load->helper('url');
        $this->load->model('RegistrationModel');

        //self::displayData();
    }
    
    public function submitData() { 
        $this->load->view('registration_form'); 

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
        

        if($this->input->post('save')){
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $countryCode = $this->input->post('countryCode');
            $mainNum = $this->input->post('mobile'); 
            $mobile = $countryCode."-".$mainNum;
            $password = $this->input->post('password'); 
            
            //encrypt
            $encryptedPW = openssl_encrypt($password, $ciphering, 
            $encryption_key, $options, $encryption_iv); 
           
            $this->RegistrationModel->saveRecords($name, $email, $mobile, $encryptedPW);   
            redirect("Registration/submitData");          
        }        
    }

}

?>