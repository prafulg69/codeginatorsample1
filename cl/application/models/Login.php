<?php
class Login extends CI_Model{
	
public function login($email,$pass) {
	
$this->db->select('email , pass');.
$this->load->from('test');
$this->db->where('email',$email);
$this->db->where('pass',$pass);

$query = $this->db->get();

if($query->num_rows() == 1){

return true;
}else
{
	return false;
}
}

}



?>