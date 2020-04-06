<!-- jQuery -->
<script src="<?= templates() ?>plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap 4 -->
<script src="<?= templates() ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- DataTables -->
<script src="<?= templates() ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= templates() ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= templates() ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= templates() ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<!-- Sweet Alert 2 -->
<script src="<?= templates() ?>plugins/sweetalert2/sweetalert2.min.js"></script>

<!-- Toastr -->
<script src="<?= templates() ?>plugins/toastr/toastr.min.js"></script>

<!-- AdminLTE App -->
<script src="<?= templates() ?>dist/js/adminlte.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="<?= templates() ?>dist/js/demo.js"></script>

<!-- Summernote -->
<script src="<?= templates() ?>plugins/summernote/summernote-bs4.min.js"></script>

<!-- page script -->
<script type="text/javascript">
	
	$(function () {

	    $("#kuburan").DataTable({
	      "responsive": true,
	      "autoWidth": false,
	    });

	    // Summernote
    	$('.textarea').summernote();
	});
</script>