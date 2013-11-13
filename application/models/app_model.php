<?php if(!defined('BASEPATH')) exit();

class App_model extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }
  
  public function notebooks_get($users_id)
  {
   $this->db->select('*');
   $this->db->from('tbl_notebooks');
   $this->db->where('notebooks_user_id', $users_id);

   $query = $this->db->get();
   
   return $query;
  }
  
  public function notebooks_get_name($notebooks_id)
  {
   $this->db->select('notebooks_name');
   $this->db->from('tbl_notebooks');
   $this->db->where('notebooks_id', $notebooks_id);

   $query = $this->db->get();
   $row = $query->row();
   return $row->notebooks_name;
  }

  public function notes_get($users_id,$notebooks_id = null)
  {
   $this->db->select('*');
   $this->db->from('tbl_notes');
   $this->db->where('notes_users_id', $users_id);
   $this->db->where('notes_status', TRUE);

   if ($notebooks_id !== null) {
     $this->db->where('notes_notebooks_id', $notebooks_id);
   }

   $query = $this->db->get();
   
   return $query;
  }
  
  public function notes_only_get($notes_id,$users_id)
  {
   $this->db->select('*');
   $this->db->from('tbl_notes');
   $this->db->where('notes_users_id', $users_id);
   $this->db->where('notes_id', $notes_id);
   $this->db->where('notes_status', TRUE);

   $query = $this->db->get();
   
   return $query;
  }
  
  public function notes_insert($data)
  {
   $this->db->insert('tbl_notes', $data);
   return;
  }
  
  public function notebooks_insert($data)
  {
   $this->db->insert('tbl_notebooks', $data);
   return;
  }
  
}  

?>