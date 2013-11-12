<?php if(!defined('BASEPATH')) exit();

class Login_model extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }
  
  
  public function users_get($users_mail, $users_pass, $users_role)
  {
    $this->db->select('*');
    $this->db->from('tbl_users');
    $this->db->where('users_mail', $users_mail);
    $this->db->where('users_pass', $users_pass);
    $this->db->where('users_role', $users_role);
    $query = $this->db->get();
    
    return $query->num_rows();
  }
  
  
  public function users_data($users_mail)
  {
   $this->db->select('users_mail');
   $this->db->select('users_name');
   $this->db->select('users_id');
   $this->db->from('tbl_users');
   $this->db->where('users_mail', $users_mail);
   $query = $this->db->get();
   
   return $query->row();
  }
  
}  

?>