<!-- TinyMCE 4.x -->
 
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
 
tinymce.init({
  selector: "textarea",
  
  // ===========================================
  // INCLUDE THE PLUGIN
  // ===========================================
	
  plugins: [
    "advlist autolink lists link image charmap print preview anchor",
    "searchreplace visualblocks code fullscreen emoticons",
    "insertdatetime media table contextmenu paste jbimages"
  ],
	
  // ===========================================
  // PUT PLUGIN'S BUTTON on the toolbar
  // ===========================================
	
  toolbar: "jbimages | emoticons | insertfile undo redo | styleselect | bold italic underline strikethrough | hr | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
	
  // ===========================================
  // SET RELATIVE_URLS to FALSE (This is required for images to display properly)
  // ===========================================
	
  relative_urls: false,

  height: 300
	
});
 
</script>
<!-- /TinyMCE -->

<div class="container notebook-container">
<div class="pull-right menu-button">
  <a class="btn btn-primary btn-sm">
    <i class="fa fa-save icon-white"></i> Simpan
  </a>
  <a class="btn btn-danger btn-sm" href="javascript:history.back()">
    <i class="fa fa-trash-o icon-white"></i>
  </a>
</div>
<div class="pull-right menu-button">
  <div class="bfh-selectbox">
  <input type="hidden" name="selectbox3" value="12">
  <a class="bfh-selectbox-toggle" role="button" data-toggle="bfh-selectbox" href="#">
    <span class="bfh-selectbox-option bfh-selectbox-medium" data-option="12">&nbsp; <i class="fa fa-book"></i> Pilih Jurnal</span>
    <b class="caret"></b>
  </a>
  <div class="bfh-selectbox-options">
    <input type="text" class="bfh-selectbox-filter">
    <div role="listbox">
      <ul role="option">
        <?php
          foreach ($notebooks->result() as $notebooks)
          {
            ?>
              <li>
                <a tabindex="-1" href="#" data-option="<?php echo $notebooks->notebooks_id;?>"> 
                  &nbsp; <i class="fa fa-book"></i> <?php echo $notebooks->notebooks_name;?> 
                </a>
              </li>
            <?php
          }
        ?>
      </ul>
    </div>
  </div>
</div>
</div>
<div class="pull-right menu-button">
  <div class="bfh-selectbox">
  <input type="hidden" name="selectbox3" value="12">
  <a class="bfh-selectbox-toggle" role="button" data-toggle="bfh-selectbox" href="#">
    <span class="bfh-selectbox-option" data-option="white">&nbsp; <i class="fa fa-square-o"></i> Putih &nbsp; </span>
    <b class="caret"></b>
  </a>
  <div class="bfh-selectbox-options">
    <div role="listbox">
      <ul role="option">
         <li><a tabindex="-1" href="#" data-option="white">&nbsp; <i class="fa fa-square-o text-white"></i> Putih &nbsp; </a></li>
        <li><a tabindex="-1" href="#" data-option="blue">&nbsp; <i class="fa fa-square text-blue"></i> Biru &nbsp; </a></li>
        <li><a tabindex="-1" href="#" data-option="brown">&nbsp; <i class="fa fa-square text-brown"></i> Coklat &nbsp; </a></li>
        <li><a tabindex="-1" href="#" data-option="red">&nbsp; <i class="fa fa-square text-red"></i> Merah &nbsp; </a></li>
        <li><a tabindex="-1" href="#" data-option="pink">&nbsp; <i class="fa fa-square text-pink"></i> Pink &nbsp; </a></li>
        <li><a tabindex="-1" href="#" data-option="green">&nbsp; <i class="fa fa-square text-green"></i> Hijau &nbsp; </a></li>
        <li><a tabindex="-1" href="#" data-option="black">&nbsp; <i class="fa fa-square text-black"></i> Hitam &nbsp; </a></li>
      </ul>
    </div>
  </div>
</div>
</div>

<h1>
  <i class="fa fa-book"></i> <input class="edit-header" type="text" placeholder="Judul Catatan...">
</h1>

<hr>
    <textarea name="edit" height="30"></textarea>
</div>