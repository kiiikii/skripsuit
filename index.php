<?php
	include '_loaders.php';
	$setTemplate = true;
	if(isset($_GET['halaman'])){
    	$halaman=$_GET['halaman'];
  	} else {
    	$halaman='beranda';
  	}
	ob_start();
	$file='_pages/'.$halaman.'.php';
  	if(!file_exists($file)){
    	include '_pages/error.php';
  	} else {
    	include $file;
  	}
  	$content = ob_get_contents();
  	ob_end_clean();
  	if($setTemplate == true){
  		if ($ses->get("sign-in") !== true) {
  			redirect(url('login'));
  		}
?>

<!DOCTYPE html>
<html>
	<?php include '_layouts/head.php'; ?>
	<body class="hold-transition sidebar-mini layout-footer-fixed layout-fixed layout-navbar-fixed">
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
				<?php echo $content; ?><!-- /.content -->			
			</div><!-- /.content-wrapper -->
	  		<?php  
	  			include '_layouts/footer.php';
	  			include '_layouts/javascript.php';
	  		?>
		</div>
	</body>
</html>
<?php 
	} else {
		echo $content;
	}
	if (isset($jsfile)) {
		include '_pages/js/' .$jsfile. '.php';
	}
?>