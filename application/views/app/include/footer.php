<?php
  if ($this->uri->segment(2) != "login") {
  
  foreach ($notebooks->result() as $notebooks)
  {
    ?>
        <div class="modal fade" id="deletenotebooks<?php echo $notebooks->notebooks_id;?>" role="dialog" aria-labelledby="notebooks<?php echo $notebooks->notebooks_id;?>Label" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Hapus Jurnal <b><?php echo $notebooks->notebooks_name;?></b></h4>
              </div>
              <div class="modal-body">
                <p>Apakah kamu yakin ingin menghapus <b><?php echo $notebooks->notebooks_name;?></b> beserta isinya? <strong class="text-danger">Aksi ini tidak bisa dibatalkan!</strong></p>
              </div>
              <div class="modal-footer">
                <a href="<?php echo base_url();?>notebooks_delete/<?php echo $notebooks->notebooks_id;?>" class="btn btn-default" data-dismiss="modal">Hapus</a>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Batalkan</button>
              </div>
             </div>
             
            </div>
          </div>

          <div class="modal fade" id="editnotebooks<?php echo $notebooks->notebooks_id;?>" role="dialog" aria-labelledby="notebooks<?php echo $notebooks->notebooks_id;?>Label" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Sunting Jurnal <b><?php echo $notebooks->notebooks_name;?></b></h4>
              </div>
              <div class="modal-body">
                <p>Apakah kamu yakin ingin menghapus <b><?php echo $notebooks->notebooks_name;?></b> beserta isinya? <strong class="text-danger">Aksi ini tidak bisa dibatalkan!</strong></p>
              </div>
              <div class="modal-footer">
                <a href="<?php echo base_url();?>notebooks_delete/<?php echo $notebooks->notebooks_id;?>" class="btn btn-default" data-dismiss="modal">Hapus</a>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Batalkan</button>
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

		<div class="panel-group" id="accordion">
		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
		          Collapsible Group Item #1
		        </a>
		      </h4>
		    </div>
		    <div id="collapseOne" class="panel-collapse collapse in">
		      <div class="panel-body">
		        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
		      </div>
		    </div>
		  </div>
		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
		          Collapsible Group Item #2
		        </a>
		      </h4>
		    </div>
		    <div id="collapseTwo" class="panel-collapse collapse">
		      <div class="panel-body">
		        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
		      </div>
		    </div>
		  </div>
		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
		          Collapsible Group Item #3
		        </a>
		      </h4>
		    </div>
		    <div id="collapseThree" class="panel-collapse collapse">
		      <div class="panel-body">
		        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
		      </div>
		    </div>
		  </div>
		  
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->


<?php } ?>

<!-- JS -->
<?php $this->load->view('app/include/js'); ?>


</body>
</html>
