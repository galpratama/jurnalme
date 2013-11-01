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
    "searchreplace visualblocks code fullscreen",
    "insertdatetime media table contextmenu paste jbimages"
  ],
	
  // ===========================================
  // PUT PLUGIN'S BUTTON on the toolbar
  // ===========================================
	
  toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
	
  // ===========================================
  // SET RELATIVE_URLS to FALSE (This is required for images to display properly)
  // ===========================================
	
  relative_urls: false
	
});
 
</script>
<!-- /TinyMCE -->

<div class="container notebook-container">
<h1>
  <i class="fa fa-book"></i> <b>Jurnal</b> Personal

  <span class="pull-right">
    <a class="btn btn-warning btn-small">
      <i class="fa fa-plus icon-white"></i> Buat Jurnal Baru
    </a>
  </span>
</h1>
<hr>
    <textarea name="edit"></textarea>
</div>