<!-- Letakkan file JS yang akan di Include disini -->

<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.fastLiveFilter.js') ?>"></script>
<script src="<?php echo base_url('assets/js/jquery-ui.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/lodash.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap-formhelpers.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/masonry.pkgd.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/init.js') ?>"></script>
<script src="<?php echo base_url('assets/js/custom.js') ?>"></script>
<script src="<?php echo base_url('assets/js/holder.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/hilitor.js') ?>"></script>
<script type="text/javascript">

  var highlightsearch;

  document.addEventListener("DOMContentLoaded", function() {
    highlightsearch = new Hilitor("pin-outer");
    highlightsearch.setMatchType("left");
  }, false);

  document.getElementById("search-catatan").addEventListener("keyup", function() {
    highlightsearch.apply(this.value);
  }, false);

</script>
