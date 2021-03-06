<?php if (!defined('BASEPATH')) die();

/* 

## Controller ini menggunakan Sistem Template

- Buat 1 controller dan buat folder di "/application/views/" dengan nama yang sama
   (
      Nama Controller : frontpage 
      -> Buat *file* frontpage.php di /application/controllers/
      -> Buat *folder* /frontpage/ di /application/views/
   )

- Letakkan file view tersebut di dalam folder yang sudah dibuat tadi
   (
      Nama Controller : frontpage 
      -> Simpan file views yang telah dibuat di /appplication/views/frontpage/
   )
  
- Untuk memanggil view yang sudah dibuat, gunakan fungsi: 
   ` $data['view'] = 'nama_view_yang_sudah_dibuat'; `

*/

class App extends Main_Controller {

   function __construct()
   {
     parent::__construct();
      $this->load->model('app_model');
      $this->load->model('login_model');
      $this->load->helper('gravatar');
   }

   public function index()
   {
      if(!$this->session->userdata('is_logged_in')) redirect('app/login');

      $data['notebooks'] = $this->app_model->notebooks_get($this->session->userdata('users_id'));
      
      $data['title'] = 'Beranda';
      $data['view']  = 'app';

      $data['notes'] = $this->app_model->notes_get($this->session->userdata('users_id'));

      $this->load->view('app/template', $data);
   }
   
   public function users()
   {
      if(!$this->session->userdata('is_logged_in')) redirect('app/login');
      if($this->session->userdata('users_role') == 'user') redirect('app');

      $data['notebooks'] = $this->app_model->notebooks_get($this->session->userdata('users_id'));
      
      $data['title'] = 'Manajemen Pengguna';
      $data['view']  = 'users';
      
      $data['users'] = $this->app_model->users_get(); 

      $this->load->view('app/template', $data);
   }
   
   public function users_update() 
   {    
        $data['users_name'] = $this->input->post('users_name');
        $data['users_pass'] = $this->input->post('users_pass');
        $data['users_mail'] = $this->input->post('users_mail');
        $data['users_role'] = $this->input->post('users_role');

        $this->app_model->users_update($this->uri->segment(3),$data);

        redirect('app/users');
   }
   
   public function users_manage() 
   {    
        $data['users_name'] = $this->input->post('users_name');
        $data['users_pass'] = $this->input->post('users_pass');
        $data['users_mail'] = $this->input->post('users_mail');

        $this->app_model->users_update($this->session->userdata('users_id'),$data);
        
        $this->session->set_userdata('users_name',$data['users_name']);
        $this->session->set_userdata('users_mail',$data['users_mail']);
        $this->session->set_userdata('users_pass',$data['users_pass']);

        redirect($this->input->post('ref_url'));
   }
   
   public function users_insert() 
   {    
        $data['users_name'] = $this->input->post('users_name');
        $data['users_pass'] = $this->input->post('users_pass');
        $data['users_mail'] = $this->input->post('users_mail');
        $data['users_role'] = $this->input->post('users_role');

        $this->app_model->users_insert($data);

        redirect('app/users');
   }
   
   public function users_delete() 
   {
       $this->app_model->users_delete($this->uri->segment(3));
       redirect('app/users');
   }
   
   public function notes()
   {
      if(!$this->session->userdata('is_logged_in')) redirect('app/login');

      $data['notebooks'] = $this->app_model->notebooks_get($this->session->userdata('users_id'));
      
      $data['title'] = 'Catatan';
      $data['view']  = 'notes';

      $data['notes'] = $this->app_model->notes_only_get($this->uri->segment(3),$this->session->userdata('users_id'));

      $this->load->view('app/template', $data);
   }
   
   public function notebooks()
   {
      if(!$this->session->userdata('is_logged_in')) redirect('app/login');
      
      if(!$this->uri->segment(3)) redirect('app');

      $data['notebooks'] = $this->app_model->notebooks_get($this->session->userdata('users_id'));
      
      $data['title'] = 'Beranda';
      $data['view']  = 'app';

      $data['notes'] = $this->app_model->notes_get($this->session->userdata('users_id'), $this->uri->segment(3));
      $data['notebooks_title'] = $this->app_model->notebooks_get_name($this->uri->segment(3));
      
      $data['notebooks_notes_count'] = $this->app_model->notebooks_notes_count($this->uri->segment(3));
      
      $this->load->view('app/template', $data);
   }
   
   public function trash()
   {
      if(!$this->session->userdata('is_logged_in')) redirect('app/login');

      $data['notebooks'] = $this->app_model->notebooks_get($this->session->userdata('users_id'));
      
      $data['title'] = 'Dihapus';
      $data['view']  = 'app';

      $data['notes'] = $this->app_model->notes_trash_get($this->session->userdata('users_id'));

      $this->load->view('app/template', $data);
   }

   public function create()
   {
      if(!$this->session->userdata('is_logged_in')) redirect('app/login');

      $data['notebooks'] = $this->app_model->notebooks_get($this->session->userdata('users_id'));

      $data['title'] = 'Buat Catatan Baru';
      $data['view']  = 'create';

      $this->load->view('app/template', $data);
   }
   
   public function edit()
   {
      if(!$this->session->userdata('is_logged_in')) redirect('app/login');
      
      if(!$this->uri->segment(3)) redirect('app');

      $data['notebooks'] = $this->app_model->notebooks_get($this->session->userdata('users_id'));

      $data['title'] = 'Edit Catatan';
      $data['view']  = 'edit';
      
      $data['notes'] = $this->app_model->notes_only_get($this->uri->segment(3),$this->session->userdata('users_id'));

      $this->load->view('app/template', $data);
   }

   public function login()
   {
      if($this->session->userdata('is_logged_in')) redirect('app');

      $data['title'] = 'Login';
      $data['view']  = 'login';

      // set rules form validation
      $this->form_validation->set_rules('users_mail', 'Email', 'required|trim|valid_email|xss_clean');
      $this->form_validation->set_rules('users_pass', 'Password', 'required|xss_clean');
      $this->form_validation->set_error_delimiters('<span class="error">', '</span>');

      // jika form validation false maka load login form
      if($this->form_validation->run()==FALSE)
      {
        $this->load->view('app/template', $data);
      }

      // jika tidak jalankan login check
      else
      {
        $users_mail = $this->input->post('users_mail');
        $users_pass = $this->input->post('users_pass');

        // pengecekan data yg disubmit ke database
        $cek = $this->login_model->users_get($users_mail, $users_pass);

        // jika tidak inisialisasi data yg disubmit ke session
        if($cek != 0)
        {
          
          $users_data_get = $this->login_model->users_data($users_mail);

          $users_id = $users_data_get->users_id;
          $users_name = $users_data_get->users_name;
          $users_role = $users_data_get->users_role;

          $this->session->set_userdata('is_logged_in', TRUE);
          $this->session->set_userdata('users_id',$users_id);
          $this->session->set_userdata('users_name',$users_name);
          $this->session->set_userdata('users_pass',$users_pass);
          $this->session->set_userdata('users_mail',$users_mail);
          $this->session->set_userdata('users_role',$users_role);
         
         redirect('app');
        }
        // jika tidak sesuai maka tampilkan error dan kembalikan ke hal sebelumnya
        else
        {
          echo 
          "
            <script>
              alert('Login Gagal: Cek Email dan Password anda');
              history.go(-1);
            </script>
          ";      
        }
      }
      
   }

   public function logout()
   {
      // hapus session
      $this->session->sess_destroy();
      //redirect
      redirect('app');
   }
   
   public function notes_insert() {
       
       if ($this->input->post('notes_notebooks_id') == 0) 
       {
         echo 
          "
            <script>
              alert('Simpan Gagal : Pilih Jurnal Terlebih Dahulu');
              history.go(-1);
            </script>
          ";      
       }
       else 
       {

	       $data['notes_title'] = $this->input->post('notes_title');
	       $data['notes_date'] = date( 'j F Y - G:i:s' );
	       $data['notes_color'] = $this->input->post('notes_color');
	       $data['notes_content'] = $this->input->post('notes_content');
	       $data['notes_status'] = 1;
	       $data['notes_fav'] = 0;
	       $data['notes_notebooks_id'] = $this->input->post('notes_notebooks_id');
	       $data['notes_users_id'] = $this->session->userdata('users_id');
	       
	       $this->app_model->notes_insert($data);
	       
	       redirect('app');
	    }
          
   }
   
    public function notes_update() {
       
       if ($this->input->post('notes_notebooks_id') == 0) 
       {
         echo 
          "
            <script>
              alert('Simpan Gagal : Pilih Jurnal Terlebih Dahulu');
              history.go(-1);
            </script>
          ";      
       }
       else 
       {

	       $data['notes_title'] = $this->input->post('notes_title');
	       $data['notes_date'] = date( 'j F Y - G:i:s' );
	       $data['notes_color'] = $this->input->post('notes_color');
	       $data['notes_content'] = $this->input->post('notes_content');
	       $data['notes_notebooks_id'] = $this->input->post('notes_notebooks_id');
	       
	       $this->app_model->notes_update($this->uri->segment(3),$data);
	       
	       redirect('app');
	    }
          
   }
   
   public function notes_delete() 
   {
       $this->app_model->notes_delete($this->uri->segment(3));
       redirect('app/notebooks/'.$this->uri->segment(4));
   }
   
   public function notes_terminate() 
   {
       $this->app_model->notes_terminate($this->uri->segment(3));
       redirect('app/trash/');
   }
   
   public function notes_restore() 
   {
       $this->app_model->notes_restore($this->uri->segment(3));
       redirect('app/notes/'.$this->uri->segment(3));
   }
   
   public function notebooks_insert() 
   {
       
    $data['notebooks_name'] = $this->input->post('notebooks_name');
    $data['notebooks_user_id'] = $this->session->userdata('users_id');

    $this->app_model->notebooks_insert($data);

    redirect($this->input->post('ref_url'));
          
   }
   
   public function notebooks_rename() 
   {
       $this->app_model->notebooks_rename($this->uri->segment(3),$this->input->post('notebooks_name'));
       redirect('app/notebooks/'.$this->uri->segment(3));
   }
   
   public function notebooks_delete() 
   {
       $this->app_model->notebooks_delete($this->uri->segment(3));
       redirect('app');
   }
      
}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
