<?php 
	
	$setTemplate = false;
?>

<!DOCTYPE html>
<html>

	<head>

		<title>E-TPU Admin Login</title>

		<?php include '_layouts/head.php'; ?>

		<!-- icheck bootstrap -->
		<link rel="stylesheet" href="<?= templates() ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">

	</head>
	<body class="hold-transition login-page">

	<div class="login-box">

		<div class="login-logo">

	 		<a href="#"><b>E-TPU</b>Login</a>
		</div>

	  	<!-- /.login-logo -->
		<div class="card">

	    	<div class="card-body login-card-body">

	    		<p class="login-box-msg">Sign in to start your session</p>
				
				<!-- This is Form Action to Login -->
	    		<form method="post">

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

	<?php include '_layouts/javascript.php'; ?>

	</body>
</html>