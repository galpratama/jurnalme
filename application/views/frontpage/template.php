<?php /*

# Informasi
File ini adalah file Sistem Template yang digunakan nantinya di setiap controller
Mohon untuk tidak mengubah file ini

# Perhatian
Apabila ingin diimplementasikan ke controller yang lain, anda tinggal mengubah dari (contoh):
`frontpage/include/header ` menjadi ` admin/include/header `

*/ ?>


<!-- Header ini berisi : CSS, Meta Tag -->
<?php $this->load->view('frontpage/include/header'); ?>

<!-- Berisi Navigasi Halaman Utama -->
<?php $this->load->view('frontpage/include/nav'); ?>

<!-- Digunakan untuk me-load View -->
<?php $this->load->view('frontpage/'. $view); ?>

<!-- Footer ini berisi : Javascript -->
<?php $this->load->view('frontpage/include/footer'); ?>	