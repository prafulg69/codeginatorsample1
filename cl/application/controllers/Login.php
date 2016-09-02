<?php
/*change the file status vsdgbdfhhehr */
class Login extends CI_controller{
 
 public function index(){
 	
 	$this->load->view('login');
 }

 public function checklogin(){

 	$this->form_validation->set_rule('email','email','required | valid_email');
 	$this->form_validation->set_rule('pass','pass','required');
    if($this->form_validation->run() == false {
    $this->load->view('login');
 }
 else
 {

 }

 }
}



?>

F:\workspace\Project1\scotch-box\public\cl