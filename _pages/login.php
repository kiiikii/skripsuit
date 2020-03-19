<?php 

	$setTemplate = false;
	#if (isset($_POST['login'])) {
	#	
	#	$session::set('logged', true);
	#	echo $session->get('logged');
	#	redirect(url('beranda'));
	#}
	#
	#echo $session->get('logged'). 'sss';
?>

<!DOCTYPE html>
<html>

	<head>

		<meta charset="utf-8">

		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>E-TPU Admin Login</title>

		<!-- Tell the browser to be responsive to screen width -->
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<?= include '_layouts/head.php' ?>

		<!-- icheck bootstrap -->
		<link rel="stylesheet" href="<?= templates() ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">

	</head>
	<body class="hold-transition login-page">

	<div class="login-box">

		<div class="login-logo">

	 		<a href="<?= templates() ?>index2.html"><b>E-TPU</b>Login</a>
		</div>

	  	<!-- /.login-logo -->
		<div class="card">

	    	<div class="card-body login-card-body">

	    		<p class="login-box-msg">Sign in to start your session</p>
				
				<!-- This is Form Action to Login -->
	    		<form action="../../index3.html" method="post">

	        		<div class="input-group mb-3">

	        			<input type="email" class="form-control" placeholder="Email">

	        			<div class="input-group-append">
	            
	            			<div class="input-group-text">

	              				<span class="fas fa-envelope"></span>
	            			</div>
	          			</div>
	        		</div>

	        		<div class="input-group mb-3">
	          			
	          			<input type="password" class="form-control" placeholder="Password">
	          
	          			<div class="input-group-append">
	            			
	            			<div class="input-group-text">
	              
	              				<span class="fas fa-lock"></span>
	            			</div>
	          			</div>
	        		</div>

	        		<div class="row">
	          			
	          			<!-- /.col -->
	        			<div class="col-12">
	        				
	        				<button type="submit" class="btn btn-primary btn-block">Sign In</button>
	        			</div><!-- /.col -->
	        		</div>
	      		</form>
	    	</div><!-- /.login-card-body -->
	  	</div>
	</div><!-- /.login-box -->

	<?php include '_layouts/javascript.php' ?>

	</body>
</html>