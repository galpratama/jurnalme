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

class Frontpage extends Main_Controller {

   function __construct()
   {
     parent::__construct();
      $this->load->model('app_model');
   }

   public function index()
	{
      $data['title'] = 'Beranda';
      $data['view']  = 'frontpage';

      if($this->session->userdata('is_logged_in')) redirect('app');

      $this->load->view('frontpage/template', $data);
	}

   public function register() 
   {    
        $data['users_name'] = $this->input->post('users_name');
        $data['users_pass'] = $this->input->post('users_pass');
        $data['users_mail'] = $this->input->post('users_mail');
        $data['users_role'] = 'user';

        $this->app_model->users_insert($data);

        redirect('app');
   }
      
}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
