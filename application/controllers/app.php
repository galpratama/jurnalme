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
      $this->load->model('login_model');
      $this->load->helper('gravatar');
   }

   public function index()
   {
      $data['title'] = 'Beranda';
      $data['view']  = 'app';

      if(!$this->session->userdata('is_logged_in')) redirect('app/login');

      $this->load->view('app/template', $data);
   }

   public function create()
   {
      $data['title'] = 'Buat Catatan Baru';
      $data['view']  = 'create';
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
        $users_role = $this->input->post('users_role');

        // pengecekan data yg disubmit ke database
        $cek = $this->login_model->users_get($users_mail, $users_pass, $users_role);

        // jika tidak inisialisasi data yg disubmit ke session
        if($cek != 0)
        {
          $this->session->set_userdata('is_logged_in', TRUE);
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
      redirect('app/login');
   }
      
}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
