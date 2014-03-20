<?php

class Get_password extends CI_Controller
{
public function index($rs=FALSE)
  {
      $this->load->database();
    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');
  
    $this->form_validation->set_rules('password', 'Password', 'trim|required|matches[passconf]|md5');
      $this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|');
 
   if ($this->form_validation->run() == FALSE)
     {
                  echo form_open();
                  $this->load->view('gp_form');
    }
   else
    {
            $query=$this->db->get_where('faculty_account', array('rs' => $rs), 1);
 
       if ($query->num_rows() == 0)
       {
       echo "<script> alert('Invalid Request'); history.go(-1); </script>";
       }  
      else
      {
      $data = array(
            'password' => $this->input->post('password'),
            'rs' => ''
      );
     
      $where=$this->db->where('rs', $rs);
     
      $where->update('faculty_account',$data);
     
      echo "<script> alert('Congratutaltions'); history.go('-1'); </script>";
      
      }
   
  }

 }
     
}