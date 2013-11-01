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

   public function index()
   {
      $data['title'] = 'Beranda';
      $data['view']  = 'app';
      $this->load->view('app/template', $data);
   }

   public function login()
   {
      $data['title'] = 'Login';
      $data['view']  = 'login';
      $this->load->view('app/template', $data);
   }

   public function edit()
   {
      $data['title'] = 'Edit';
      $data['view']  = 'edit';
      $this->load->view('app/template', $data);
   }
      
}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
