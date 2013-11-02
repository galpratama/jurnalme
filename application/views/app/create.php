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
<h1>
  <i class="fa fa-book"></i> <input class="edit-header" type="text" placeholder="Judul Catatan...">

  <span class="pull-right">
    <a class="btn btn-primary btn-small">
      <i class="fa fa-save icon-white"></i> Simpan
    </a>
  </span>
</h1>
<hr>
    <textarea name="edit" height="30"></textarea>
</div>