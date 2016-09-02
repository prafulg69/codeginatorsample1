<?php 

class Studentmodel extends CI_Model {

function get_members() 
{
        //$query = $this->db->get('student');
        $this->db->select('*');
       $this->db->from('student');
        $this->db->join('address', 'address.zipcode = student.zipcode');
        $query = $this->db->get();
        return $query->result();
    }

    /*----courselist---*/
function add_user($data)
  {
        $this->db->trans_start();
        $this->db->insert('address',elements(array('zipcode', 'city', 'state','country'), $data));
        $cource_id=$this->getLastInsertId();      
        $this->db->insert('student', elements(array('fname', 'lname', 'email','addr','mobile_no','zipcode'), $data));
        if (is_array($data['courses']) && count($data['courses']) > 0) {
        $cource=$this->prepareStudentCourses($this->getLastInsertId(),$data['courses']);
        $this->db->insert_batch('student_cource', $cource);
        }
        if (is_array($data['skills']) && count($data['skills']) > 0) {
        $skills=$this->prepareStudentskills($this->getLastInsertId(),$data['skills']);
        $this->db->insert_batch('skills', $skills);
        }
        $this->db->trans_complete();
        return TRUE;
      }

       function prepareStudentCourses($studentid, $courses){
        $counter=0;
       foreach ($courses as  $c => $value) {
             $data [$counter++]= array(
                's_id' => $studentid,
                'cource_id' => $value);
        }
  
        return $data;
    }

    function prepareStudentskills($studentid,$skills){
        $counter=0;
        foreach ($skills as  $a => $value) {
            if($value !=null) {
             $data [$counter++]= array(
                's_id' => $studentid,
                'skills_name' => $value);
        }
  
}


        return $data;
    }

function getLastInsertId(){
            $id=0;
            $query=$this->db->query("select LAST_INSERT_ID() as lastInsertID");
           $val=$query->result();
            foreach($val as $v)
            {
                $id=$v->lastInsertID;
            }
            return $id;
    }
function cource()
    {
    $query=$this->db->query("SELECT * FROM cource");
    return $query->result(); 
   
    }


function skills()
    {
    $query=$this->db->query("SELECT * FROM skills");
    return $query->result(); 
   
    }

function searchdata()
  {
    
    log_message('debug', ' inside searchdata');
    $s_id = $this->input->post('s_id');
    $this->db->like('s_id',$s_id);
    $query=$this->db->get('student');
    return $query->result();
  }
   
   /*  function getStudentRecord($s_id)
    {
        
    $this->db->where('s_id',$s_id);
    $query=$this->db->get('student');
    $this->db->join('skills', 'student.s_id=skill.s_id');
    return $query->result();
    }
  


    function getStudentskills($s_id)
    {
     $this->db->where()
    }


*/
function getStudentRecord($id)
    {
        $this->db->select('*');
        $this->db->from('student s');
        $this->db->where('s.s_id',$id);
        //log_message('debug','get Student SQL'.$this->db->get_compiled_select());
        $query = $this->db->get();
        $data['student']= $query->result();
        $data['skills'] = $this->getStudentSkills($id);
        //$data ['courses'] = $this-> getStudentCourses ($id);
        return $data;
}

 function getStudentSkills($id)
 {
        //$this->db->flush_cache();
        $this->db->select('*');
        $this->db->from('student s');
        $this->db->where('s.s_id',$id);
        //log_message('debug','Inside get Student Skills');
        $this->db->join('skills', 'skills.s_id=s.s_id','left');
        //log_message('debug','get Student SQL'.$this->db->get_compiled_select());
        $query = $this->db->get();
        return $query->result();
    }
/*
function getStudentCourses($id)
{
        //log_message('debug','Inside get Student Courses');
        //$this->db->flush_cache();
        $this->db->select('*');
        $this->db->from('student s');
        $this->db->where('s.s_id',$id);
        $this->db->join('student_cource scu', 'scu.s_id=s.s_id','left');
        $this->db->join('cource cu', 'cu.cource_id=scu.cource_id','left');
        //log_message('debug','get Student SQL'.$this->db->get_compiled_select());
        $query = $this->db->get();
        return $query->result();
}

*/



/*-----Delete Data from the database----*/
 
 /*function delete_data($s_id)
    {  
    $this->db->where('s_id', $s_id);
    $this->db->delete('student');
    $this->session->set_flashdata('message', 'Your data deleted Successfully..');
    }
*/

}
?>