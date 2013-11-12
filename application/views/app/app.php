<div class="container notebook-container">
  <h1>	
    <i class="fa fa-book"></i> 
      <span id="judul-jurnal">
        <?php if ($this->uri->segment(2) !== "notebooks") { ?>
          <b> Semua Catatan </b>
        <?php } else { ?>
          <b> Jurnal </b> <?php echo $notebooks_title;?>
          <a href="" id="edit-judul-jurnal" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
          <a href="" id="hapus-judul-jurnal" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>
        <?php } ?>

      </span>
      <span class="pull-right">
        <a class="btn btn-warning btn-small" href="<?php echo base_url();?>app/create">
          <i class="fa fa-plus icon-white"></i> Buat Catatan Baru
      </a>
      </span>
  </h1>
<hr>
<div id="pin-outer">
  <?php
    foreach ($notes->result() as $notes)
    {
      ?>
        <div class="col-lg-4 pin note-bungkus pin-inner">
          <a href="/"><h2><?php echo $notes->notes_title;?></h2></a>
          <p class="post-snippet">
            <b><i class="fa fa-clock-o"></i> <?php echo $notes->notes_date;?></b> &middot; <i class="fa fa-book"></i> <b><?php echo $notes->notes_notebooks_id;?></b>
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
