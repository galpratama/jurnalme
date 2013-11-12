<?php if(!defined('BASEPATH')) exit();

class App_model extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }
  
  public function notebooks_get($users_id)
  {
   $this->db->select('notebooks_id');
   $this->db->select('notebooks_name');
   $this->db->select('notebooks_user_id');

   $this->db->from('tbl_notebooks');

   $this->db->where('notebooks_user_id', $users_id);

   $query = $this->db->get();
   
   return $query;
  }
  
}  

?>