    <!-- Modal -->
<div class="modal fade" id="akun" tabindex="-1" role="dialog" aria-labelledby="akunLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form class="form-horizontal" role="form" method="post" action="<?php echo base_url(); ?>app/users_manage/">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Pengaturan Akun</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="input_name" class="col-sm-2 control-label">Nama</label>
            <div class="col-sm-10">
              <input required name="users_name" type="text" class="form-control" id="input_name" placeholder="Nama" value="<?php echo $this->session->userdata('users_name');?>">
            </div>
          </div>
          <div class="form-group">
            <label for="input_email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input required name="users_mail" type="email" class="form-control" id="input_email" placeholder="Email" value="<?php echo $this->session->userdata('users_mail');?>">
            </div>
          </div>
          <div class="form-group">
            <label for="input_password" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
              <input required name="users_pass" type="password" class="form-control" id="input_password" placeholder="Password" value="<?php echo $this->session->userdata('users_pass');?>">
            </div>
          </div>
       </div>
       <div class="modal-footer">
      <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
       </div>
     <input type="hidden" name="ref_url" value="<?php echo $_SERVER['REQUEST_URI'];?>">
     </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
  </div>

<!-- JS -->
<?php $this->load->view('app/include/js'); ?>


</body>
</html>
