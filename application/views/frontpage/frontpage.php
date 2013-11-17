<!-- Section #1 -->
  <section id="intro" data-speed="6" data-type="background">
    <div class="container">
      <h1>Permudah Kehidupanmu.</h1>
        <p><strong>Jurnal.me</strong> adalah catatan online untuk menulis cerita, kegiatan, dan mimpi-mu.</p>
        <div>
          <div class="col-lg-3 col-md-3">
          </div>
          <div class="col-lg-6 col-md-6">
            <form action="#">
              <input type="text" class="form-control input-lg cta" id="front_name" placeholder="Siapa Namamu?" autocomplete="off" required>
              <br>
              <a class="btn btn-lg btn-primary" data-toggle="modal" href="#daftar" role="button">
                <small><i class="fa fa-thumbs-o-up"></i></small> Aku Tertarik </a>
            </form>
            <p class="login-front">Pengguna lama? <a href="<?php echo base_url();?>app/" >Masuk</a></p>
          </div>
          <div class="col-lg-3 col-md-3">
          </div>
        </div>
      </div>
  </section>
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-12">
          <h1 style="text-align: center;">Buat apa sih <strong>Jurnal.me</strong> itu?</h1>
        </div>
        <br><br>
        <div class="col-lg-4">
          <img src="<?php echo base_url(); ?>/assets/img/frontend/calendar.png" alt="Generic placeholder image">
          <h2>Mengatur Jadwal-mu</h2>
          <p>Semua kegiatanmu akan lebih baik apabila kamu membuat jadwalnya lebih dahulu. Dengan Jurnal.me semuanya akan lebih mudah dari sebelumnya!</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="<?php echo base_url(); ?>/assets/img/frontend/file.png" alt="Generic placeholder image">
          <h2>Mencatat Kegiatan-mu</h2>
          <p>Catat semua yang terjadi di kehidupanmu. Dari hal yang kamu lihat, yang kamu suka, liburan bersama teman, dan semua hal yang kamu alami.</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="<?php echo base_url(); ?>/assets/img/frontend/paste.png" alt="Generic placeholder image">
          <h2>Menyusun Semuanya</h2>
          <p>Semua catatan hidup, jadwal, dan yang hal yang kamu suka akan tersusun rapi dan kamu tidak akan kebingungan lagi menemukan hal yang kamu senangi!</p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

      <hr class="featurette-divider">
      <!-- FOOTER -->
      <footer class="hidden-xs">
      <p class="pull-right"><a href="#"><i class="icon-chevron-up"></i> Kembali ke atas</a></p>
      <p>&copy; 2013 <strong>Galih Pratama</strong></p>
      </footer>
      <footer class="hidden-lg hidden-md hidden-sm">
      &copy; 2013 <strong>Galih Pratama</strong> 
      </footer>
    </div><!-- /.container -->

  <!-- Registration -->
  <div class="modal fade" id="daftar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Daftar Akun <strong>Jurnal.me</strong></h4>
        </div>
        <form role="form" action="<?php echo base_url();?>register" method="post" accept-charset="UTF-8">
          <div class="modal-body">
              <div align="center">
                <img src="<?php echo base_url(); ?>/assets/img/frontend/login-image.jpg" class="img-rounded" width="100%">
              </div>
              <br>
              <div class="form-group">
                <input required readonly type="text" class="form-control input-lg" id="modal_name" name="users_name" placeholder="Nama Lengkap">
              </div>
              <div class="form-group">
                <input required type="text" class="form-control input-lg" id="users_mail" name="users_mail" placeholder="Email">
              </div>
              <div class="form-group">
                <input required type="password" class="form-control input-lg" id="users_pass" name="users_pass" placeholder="Password">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Daftar</button>
              </div>
            </form>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
