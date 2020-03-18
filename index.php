<?php 

	include '_loader.php';
	
	if (isset($_GET['halaman'])) {
		
		$halaman = $_GET['halaman'];
	} else {

		$halaman = 'beranda';
	}

	ob_start();

	$file = '_pages/' . $halaman . '.php';

	if (!file_exists($file)) {
		
		include '_pages/error.php';
	} else {

		include $file;
	}

	$halaman = ob_get_contents();

	ob_end_clean();
?>

<!DOCTYPE html>
<html>

	<?php include '_layouts/head.php'; ?>

	<body class="hold-transition sidebar-mini">

		<!-- Site wrapper -->
		<div class="wrapper">

			<?php 

				include '_layouts/header.php';
				include '_layouts/sidebar.php';
			?>

		<!-- Content Wrapper. Contains page content -->
  		<div class="content-wrapper">

		    <!-- Content Header (Page header) -->
		    <section class="content-header">

		     	<div class="container-fluid">

		        	<div class="row mb-2">

		          		<div class="col-sm-6">

		            		<h1><?= $judul ?></h1>
		          		</div>

		          		<div class="col-sm-6">

		            		<ol class="breadcrumb float-sm-right">

		              			<li class="breadcrumb-item"><a href="#">Home</a></li>
		              			<li class="breadcrumb-item active"><?= $judul ?></li>
		            		</ol>
		          		</div>
		        	</div>
		      	</div><!-- /.container-fluid -->
		    </section>

		    <?php echo $halaman; ?><!-- /.content -->

  		</div><!-- /.content-wrapper -->

  		<?php  

  			include '_layouts/footer.php';
  			include '_layouts/javascript.php';
  		?>
		</div>
	</body>
</html>