<div class="container notebook-container">
  <h1>	
      <span id="judul-jurnal">
        <?php if (!$this->uri->segment(2)) { ?>
          <i class="fa fa-book"></i> 
          <b> Semua Catatan </b>
        <?php } else if ($this->uri->segment(2) == "trash") { ?>
        <i class="fa fa-trash-o"></i> 
        <b> Keranjang Sampah </b>
        <?php } else { ?>
          <i class="fa fa-book"></i> 
          <b> Jurnal </b> <?php echo $notebooks_title;?>
          <a href="#" data-toggle="modal" data-target="#editnotebooks<?php echo $this->uri->segment(3);?>" id="edit-judul-jurnal" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
          <a href="#" data-toggle="modal" data-target="#deletenotebooks<?php echo $this->uri->segment(3);?>" id="hapus-judul-jurnal" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>
        <?php } ?>

      </span>
      <span class="pull-right">
        <a class="btn btn-warning btn-small" href="<?php echo base_url();?>app/create">
          <i class="fa fa-plus icon-white"></i> Buat Catatan Baru
      </a>
      </span>
  </h1>
<hr>

<?php
  $notes_message = $notes->num_rows();
  if (empty($notes_message)) {
    ?>
    <br>
    <h1 class="text-center">
    <br>
      <small>
        Sepertinya belum ada apa-apa disini
        <br>
        <?php
          if ($this->uri->segment(2) != "trash") 
          {
           ?>
              <a href="<?php echo base_url();?>app/create/"><i class="fa fa-edit"></i> Buat catatan baru</a>
           <?php
          }
        ?>
      </small>
    </h1>
    <br>
    <br>
    <?php
  }

?>

<div id="pin-outer">

  <?php
    foreach ($notes->result() as $notes)
    {
      ?>
        <div class="col-lg-4 pin note-bungkus pin-inner">
        <?php if ($this->uri->segment(2) == "trash") { ?>
          <h3> 
            <i class="fa fa-trash-o"></i>  <?php echo $notes->notes_title;?>
            <span class="pull-right btn-group">
              <a href="<?php echo base_url();?>app/notes_restore/<?php echo $notes->notes_id;?>" class="btn btn-success btn-sm"><i class="fa fa-retweet"></i> Kembalikan</a>
              <a href="<?php echo base_url();?>app/notes_terminate/<?php echo $notes->notes_id;?>" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a>
            </span>
          </h3>
        <?php } else { ?>
          <a href="<?php echo base_url();?>app/notes/<?php echo $notes->notes_id;?>"><h2><?php echo $notes->notes_title;?></h2></a>
        <?php } ?>

        <?php 
          $this->db->where('notebooks_id', $notes->notes_notebooks_id);
          $notebooks_query = $this->db->get('tbl_notebooks');
          $notebooks_name = $notebooks_query->row();
          $notebooks_name = $notebooks_name->notebooks_name;
        ?>
          <p class="post-snippet">
            <b><i class="fa fa-clock-o"></i> <?php echo $notes->notes_date;?></b> &middot; <i class="fa fa-book"></i> <b><?php echo $notebooks_name;?></b>
          </p>
          <br>
          <div class="note-bungkus notes notes-<?php echo $notes->notes_color;?>">
            <p>
              <?php echo $notes->notes_content;?>
            </p>
          </div>
        </div>
      <?php
    }
  ?>
  
</div>

<?php
  if ($this->uri->segment(2) != "login") {
  
  foreach ($notebooks->result() as $notebooks)
  { 
    ?>
        <div class="modal fade" id="deletenotebooks<?php echo $notebooks->notebooks_id;?>" role="dialog" aria-labelledby="notebooks<?php echo $notebooks->notebooks_id;?>Label" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-body">
              <?php
                if ($notebooks_notes_count < 1) 
                {
                  ?>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 class="modal-title text-center" id="myModalLabel">Hapus Jurnal <b><?php echo $notebooks->notebooks_name;?> ?</b></h3>
                    <p class="text-center">Apakah kamu yakin ingin menghapus <b><?php echo $notebooks->notebooks_name;?></b> beserta isinya? <br><strong class="text-danger">Aksi ini tidak bisa dibatalkan!</strong></p>
                    <a href="<?php echo base_url();?>app/notebooks_delete/<?php echo $notebooks->notebooks_id;?>" class="btn btn-danger btn-block btn-lg">Hapus</a>
                  <?php
                }
                else
                {
                  ?>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 class="modal-title text-center" id="myModalLabel"> Jurnal <b><?php echo $notebooks->notebooks_name;?></b> tidak bisa dihapus.</h3>
                    <p class="text-center"><strong class="text-danger"> Kamu harus mengosongkan jurnal terlebih dahulu.</strong></p>
                    <p><small>* pindahkan catatan ke jurnal lain, atau hapus secara permanen catatan-nya</small></p>
                  <?php
                }
              ?>
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
                  <form action="<?php echo base_url(); ?>app/notebooks_rename/<?php echo $notebooks->notebooks_id;?>" method="post">
                    <p>
                      <input type="text" name="notebooks_name" id="inputNotebooks_name" class="form-control input-center input-lg" value="<?php echo $notebooks->notebooks_name;?>" required="required">
                    </p>
                    <button type="submit" class="btn btn-block btn-primary">Ganti Nama</button>
                  </form>
              </div>
             </div>
             
            </div>
          </div>
    <?php } }  ?>