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
      <a class="navbar-brand" href="<?php echo base_url();?>app/"><img src="<?php echo base_url(); ?>/assets/img/jurnalme-logo.png" style="height: 23px;" alt=""></a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-book"></i> Jurnal Saya</a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#"><i class="fa fa-book"></i> Personal</a></li>
            <li><a href="#"><i class="fa fa-book"></i> Work</a></li>
          </ul>
        </li>
        <li><a href="#" data-toggle="modal" data-target="#buatjurnal"><i class="fa fa-plus-circle"></i> Tambah Jurnal</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img class="img-circle" src="<?php echo gravatar('hanamura.iost@gmail.com', 20 ); ?>" alt=""> Galih Pratama <b class="caret"></b></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="https://en.gravatar.com/" target="_blank">Ganti Foto</a></li>
            <li><a href="#" data-toggle="modal" data-target="#bantuan">Bantuan</a></li>
            <li><a href="#" data-toggle="modal" data-target="#akun">Pengaturan Akun</a></li>
            <li class="divider"></li>
            <li><a href="#">Keluar</a></li>
          </ul>
        </li>
      </ul>
        <?php
        if ($this->uri->segment(2) == '' || $this->uri->segment(2) == 'journal') { ?> 

            <form class="navbar-form navbar-right">
              <div class="form-group">
                <input type="text" placeholder="Cari Catatan" id="search-catatan" style="width: 200px;" class="form-control pencarian">
              </div>
            </form>

        <?php } ?>
        
    </div><!--/.nav-collapse -->

  </div>
</div>

<?php } ?>