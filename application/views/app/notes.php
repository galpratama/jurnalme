<?php $notes = $notes->row(); ?>
<div class="container notebook-container">
  <h2>	
    <i class="fa fa-edit"></i>
      <span id="judul-jurnal">
          <b><?php echo $notes->notes_title;?></b>
      </span>
      <span class="pull-right">
        <a class="btn btn-warning btn-small" href="javascript:history.back()">
          <i class="fa fa-chevron-left icon-white"></i> Kembali
        </a>
        <a href="<?php echo base_url();?>app/edit/<?php echo $notes->notes_id;?>" class="btn btn-primary btn-small"><i class="fa fa-pencil"></i> Edit</a>
        <a href="#" data-toggle="modal" data-target="#deletenotebooks" class="btn btn-danger btn-small"><i class="fa fa-trash-o"></i> Hapus</a>
        
      </span>
  </h2>
  <span class="pull-right">
    &nbsp;&nbsp;&nbsp;
    <b><i class="fa fa-clock-o"></i> <?php echo $notes->notes_date;?></b> &middot; <i class="fa fa-book"></i> <b><?php echo $notes->notes_notebooks_id;?></b>
  </span>
<hr>
<div id="pin-outer col-lg-12">
  <div class="note-bungkus notes notes-<?php echo $notes->notes_color;?>">
    <p>
      <?php echo $notes->notes_content;?>
    </p>
  </div>
</div>
