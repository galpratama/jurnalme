<!-- Letakkan file JS yang akan di Include disini -->

<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/jquery-ui.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/lodash.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/init.js') ?>"></script>
<script src="<?php echo base_url('assets/js/custom.js') ?>"></script>
<script src="<?php echo base_url('assets/js/holder.js') ?>"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      
    $('input').keyup(function(){ // run anytime the value changes
      var name = $('#front_name').val(); // get value of field
      $('#modal_name').val(name); // add them and output it
    });

  });
  </script>