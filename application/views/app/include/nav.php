<!-- Berikut ini adalah Template untuk Navigasi -->
<?php

if ($this->uri->segment(2) != 'login') {
?>
<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url();?>app/"><img src="<?php echo base_url(); ?>/assets/img/jurnalme-logo.png" style="height: 20px;" alt=""></a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-book"></i> Jurnal Saya</a>
          <ul class="dropdown-menu" role="menu">
            <?php
  	          foreach ($notebooks->result() as $notebooks)
  	          {
  	            ?>
  	              <li>
  	                <a tabindex="-1" href="<?php echo base_url();?>app/notebooks/<?php echo $notebooks->notebooks_id;?>"> 
  	                  <i class="fa fa-book"></i> <?php echo $notebooks->notebooks_name;?> 
  	                </a>
  	              </li>
  	            <?php
  	          }
  	        ?>
            <li class="divider"></li>
            <li><a href="<?php echo base_url();?>app/trash/"><i class="fa fa-trash-o"></i> Dihapus</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-plus-circle"></i> Tambah Jurnal</a>
          <div class="dropdown-menu dropdown-form" role="menu">
            <form action="<?php echo base_url();?>app/notebooks_insert" method="post" accept-charset="UTF-8">
        	   <i> <small> Contoh: Personal, Work </small></i>
          	 <br>	
              <div class="input-group">
              	<input type="hidden" name="ref_url" value="<?php echo $_SERVER['REQUEST_URI'];?>">
                <input required type="text" name="notebooks_name" class="form-control" style="width: 200px;" placeholder="Nama Jurnal">
                <span class="input-group-btn">
                  <button class="btn btn-default btn-primary" type="submit"><i class="fa fa-plus"></i></button>
                </span>
              </div><!-- /input-group -->  
            </form>
          </div>
        </li>
        <?php if ($this->session->userdata('users_role') == 'admin') { ?>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-dashboard"></i> Admin Area</a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="<?php echo base_url();?>app/users/"><i class="fa fa-user"></i> Pengguna</a></li>
            </ul>
          </li>
        <?php } ?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
        <?php 
          $users_mail = $this->session->userdata('users_mail');
          $users_name = $this->session->userdata('users_name');
         ?>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img class="img-circle" src="<?php echo gravatar($users_mail, 20 ); ?>" alt=""> <?php echo $users_name; ?> <b class="caret"></b></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="https://en.gravatar.com/" target="_blank">Ganti Foto</a></li>
            <li><a href="#" data-toggle="modal" data-target="#akun">Pengaturan Akun</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo base_url();?>app/logout">Keluar</a></li>
          </ul>
        </li>
      </ul>
            <form class="navbar-form navbar-right">
              <div class="form-group">
                <input type="text" placeholder="Cari Catatan" id="search-catatan" style="width: 200px;" class="form-control pencarian">
              </div>
            </form>
    </div><!--/.nav-collapse -->
  </div>
</div>
<?php } ?>