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
                  <p class="login-front">Pengguna lama? <a data-toggle="modal" href="#login" >Masuk</a></p>
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
      <p>&copy; 2013 <strong>Galih Pratama</strong> &middot; Powered by <strong>RAG Creative Development</strong> &middot; <a href="#">Tentang</a> &middot; <a href="#">FAQ</a></p>
      </footer>
      <footer class="hidden-lg hidden-md hidden-sm">
      &copy; 2013 <strong>Galih Pratama</strong> 
      </footer>
    </div><!-- /.container -->

    <!-- Login -->
  <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Masuk ke <strong>Jurnal.me</strong></h4>
        </div>
        <form role="form">
          <div class="modal-body">
              <div align="center">
                <img src="<?php echo base_url(); ?>/assets/img/frontend/login-image.jpg" class="img-rounded" width="100%">
              </div>
              <br>
              <div class="form-group">
                <input type="email" class="form-control input-lg" id="login_email" name="login_email" placeholder="Alamat Email">
              </div>
              <div class="form-group">
                <input type="password" class="form-control input-lg" id="login_password" name="login_password" placeholder="Password">
              </div>
              <div class="form-group">
                <button type="button" class="btn btn-primary btn-lg btn-block">Masuk</button>
              </div>
            </form>
          <div class="modal-footer">
            <a href="">Lupa Password </a> &middot; <a href="">Bantuan</a>
          </div>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <!-- Registration -->
  <div class="modal fade" id="daftar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Daftar Akun <strong>Jurnal.me</strong></h4>
        </div>
        <form role="form">
          <div class="modal-body">
              <div align="center">
                <img src="<?php echo base_url(); ?>/assets/img/frontend/login-image.jpg" class="img-rounded" width="100%">
              </div>
              <br>
              <div class="form-group">
                <input type="text" class="form-control input-lg" id="register_name" name="register_name" placeholder="Nama Lengkap">
              </div>
              <div class="form-group">
                <input type="text" class="form-control input-lg" id="register_email" name="register_email" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="password" class="form-control input-lg" id="register_password" name="register_password" placeholder="Password">
              </div>
              <div class="form-group">
                <input type="password" class="form-control input-lg" id="register_repeat_password" name="register_repeat_password" placeholder="Ulangi Password">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Daftar</button>
              </div>
            </form>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
