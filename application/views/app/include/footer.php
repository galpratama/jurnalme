<?php
  if ($this->uri->segment(2) != "login") {
  
  foreach ($notebooks->result() as $notebooks)
  {
    ?>
        <div class="modal fade" id="deletenotebooks<?php echo $notebooks->notebooks_id;?>" role="dialog" aria-labelledby="notebooks<?php echo $notebooks->notebooks_id;?>Label" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="modal-title text-center" id="myModalLabel">Hapus Jurnal <b><?php echo $notebooks->notebooks_name;?> ?</b></h3>
                <p class="text-center">Apakah kamu yakin ingin menghapus <b><?php echo $notebooks->notebooks_name;?></b> beserta isinya? <br><strong class="text-danger">Aksi ini tidak bisa dibatalkan!</strong></p>
                <a href="<?php echo base_url();?>app/notebooks_delete/<?php echo $notebooks->notebooks_id;?>" class="btn btn-danger btn-block btn-lg" data-dismiss="modal">Hapus</a>
              </div>
             </div>
             
            </div>
          </div>

          <div class="modal fade" id="editnotebooks<?php echo $notebooks->notebooks_id;?>" role="dialog" aria-labelledby="notebooks<?php echo $notebooks->notebooks_id;?>Label" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">

              <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="modal-title text-center" id="myModalLabel">Ganti Nama Jurnal</h3>
                <br>
                  <p>
                    <input type="text" name="notebooks_name" id="inputNotebooks_name" class="form-control input-center input-lg" value="<?php echo $notebooks->notebooks_name;?>" required="required" pattern="" title="">
                  </p>
                  <a href="<?php echo base_url();?>notebooks_delete/<?php echo $notebooks->notebooks_id;?>" class="btn btn-block btn-primary" data-dismiss="modal">Ganti Nama</a>
              </div>
             </div>
             
            </div>
          </div>
    <?php
  } 
?>


    <!-- Modal -->
<div class="modal fade" id="akun" tabindex="-1" role="dialog" aria-labelledby="akunLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Akun</h4>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
  </div>

<?php } ?>

<!-- JS -->
<?php $this->load->view('app/include/js'); ?>


</body>
</html>
