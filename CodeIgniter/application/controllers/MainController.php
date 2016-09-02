<?php

class MainController extends CI_Controller { 
	public function __construct()
	{
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');  
        $this->load->helper('array');                  /***** LOADING HELPER TO AVOID PHP ERROR ****/
        $this->load->model('Studentmodel'); /* LOADING MODEL * Welcome_model as welcome */
    }


/*------Add the student detail ---*/
public function addStudentView()
{
	     $data['cource']=$this->Studentmodel->cource();
       $data['Skills']=$this->Studentmodel->Skills();
       $this->load->view('students/addStudentView',$data);
 

}

public function studentdata(){
      echo "inside studentdata";  
    $this->load->view('students/search');
    //$this->load->model('searchdata');
}

/*----search data from the database----*/
public function searchdata()
{
  
  echo "inside searchdata";  
  log_message('debug', ' inside searchdata controller');
  $data['val'] = $this->Studentmodel->searchdata();
  $this->load->view('students/searchview',$data);
}

/*-----index view---*/
public function index()
{
	$this->Studentmodel->get_members();
  $data['val']=$this->Studentmodel->get_members();
	$this->load->view('students/studentView',$data);
}


public function addUser()
  {
  	  $data=array(
  	  'fname' =>$this->input->post('fname'),
      'lname' =>$this->input->post('lname'),
      'email' =>$this->input->post('email'),
      'addr' =>$this->input->post('addr'),
      'mobile_no' =>$this->input->post('mobile_no'),
      'zipcode' =>$this->input->post('zipcode'),
      'city' =>$this->input->post('city'),
      'state' =>$this->input->post('state'),
      'country' =>$this->input->post('country'),
      'courses' =>$this->input->post('course_name'),
       'skills' =>$this->input->post('skills')
     );
     $this->Studentmodel->add_user($data);
    }

public function editview($id)
    {
    $this->load->model('Studentmodel');
    $data = $this->Studentmodel->getStudentRecord($id);
    $this->load->view('students/editview',$data);
    }
     

}
?>