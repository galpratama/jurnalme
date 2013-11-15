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
  
  public function notebooks_notes_count($notebooks_id)
  {
   $this->db->select('notes_notebooks_id');
   $this->db->from('tbl_notes');
   $this->db->where('notes_notebooks_id', $notebooks_id);

   $query = $this->db->get();
   $row = $query->num_rows();
   return $row;
  }
  
  public function notebooks_rename($notebooks_id,$notebooks_name) {
      $data['notebooks_id'] = $notebooks_id;
      $data['notebooks_name'] = $notebooks_name;
      
      $this->db->where('notebooks_id',$notebooks_id);
      $this->db->update('tbl_notebooks',$data);
  }
  
  public function notebooks_delete($notebooks_id) {
      $this->db->where('notebooks_id',$notebooks_id);
      $this->db->delete('tbl_notebooks');
  }
  
  public function notes_get($users_id,$notebooks_id = null)
  {
   $this->db->select('*');
   $this->db->from('tbl_notes');
   $this->db->where('notes_users_id', $users_id);
   $this->db->where('notes_status', TRUE);
   $this->db->order_by('notes_id','desc');

   if ($notebooks_id !== null) {
     $this->db->where('notes_notebooks_id', $notebooks_id);
   }

   $query = $this->db->get();
   
   return $query;
  }
  
  public function notes_update($notes_id,$data) 
  {
      $this->db->where('notes_id',$notes_id);
      $this->db->update('tbl_notes',$data);
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
  
  public function notes_trash_get($users_id) {
   $this->db->select('*');
   $this->db->from('tbl_notes');
   $this->db->where('notes_users_id', $users_id);
   $this->db->where('notes_status', FALSE);
   
   $query = $this->db->get();
   
   return $query;
  }
  
  public function notes_insert($data)
  {
   $this->db->insert('tbl_notes', $data);
   return;
  }
  
  public function notes_delete($notes_id) {
      $data['notes_status'] = FALSE;
      
      $this->db->where('notes_id',$notes_id);
      $this->db->update('tbl_notes',$data);
  }
  
  public function notes_terminate($notes_id) {
      $data['notes_status'] = FALSE;
      
      $this->db->where('notes_id',$notes_id);
      $this->db->delete('tbl_notes');
  }
  
  public function notes_restore($notes_id) {
      $data['notes_status'] = TRUE;
      
      $this->db->where('notes_id',$notes_id);
      $this->db->update('tbl_notes',$data);
  }
  

  public function notebooks_insert($data)
  {
   $this->db->insert('tbl_notebooks', $data);
   return;
  }
  
  public function users_get()
  {
   $this->db->select('*');
   $this->db->from('tbl_users');

   $query = $this->db->get();
   
   return $query;
  }
  
  public function users_delete($users_id) 
  {
      $this->db->where('users_id',$users_id);
      $this->db->delete('tbl_users');
  }
  
  public function users_update($users_id,$data) 
  {
      $this->db->where('users_id',$users_id);
      $this->db->update('tbl_users',$data);
  }
  
  public function users_insert($data)
  {
   $this->db->insert('tbl_users', $data);
   return;
  }
  
}  

?>