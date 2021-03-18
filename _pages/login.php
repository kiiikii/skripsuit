<?php 
	$setTemplate = false;
	// checking if there's any process login
	if (isset($_POST['login'])) {
		$namauser = $_POST['namauser'];
		$sandiuser = $_POST['sandiuser'];
		$db->where("namauser", $namauser);
		$db->where("sandiuser", $sandiuser);
		$data = $db->ObjectBuilder()->getOne('admin');
		if ($db->count>0) {
			$ses->set("sign-in", true);
			$ses->set("namauser", $data->namauser);
			$ses->set("idad", $data->idad);
			$ses->set("info", '<div class="alert alert-success alert-dismissible" style="width:500px;">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <i class="icon fas fa-check"></i>Welcome Home '.$data->namauser.'
                </div>');
			redirect(url("beranda"));
		} else {
			$ses->set("sign-in", false);
			$ses->set("info", '<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fas fa-ban"></i>Error !</h4>
                 incorrect username and password
                </div>');
			redirect(url("login"));
		}		
	}
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
		</div><!-- /.login-logo -->
		<div class="card">
	    <div class="card-body login-card-body">
	    	<p class="login-box-msg">Sign in to start your session</p>
	    	<!-- storing session if username or password incorrect -->
	    	<?= $ses->pull('info') ?>
				<!-- This is Form Action to Login -->
	    	<form method="post">
	        <div class="input-group mb-3">
	        	<input type="text" class="form-control" name="namauser" placeholder="username">
	        			<div class="input-group-append">
	            			<div class="input-group-text">
	              				<span class="fas fa-envelope"></span>
	            			</div>
	          			</div>
	        		</div>
	        		<div class="input-group mb-3">
	          			<input type="password" class="form-control" name="sandiuser" placeholder="password">
	          			<div class="input-group-append">	            			
	            			<div class="input-group-text">	              
	              				<span class="fas fa-lock"></span>
	            			</div>
	          			</div>
	        		</div>
	        		<div class="row">	          			
	          		<!-- /.col -->
	        			<div class="col-12">	        			
	        				<button type="submit" name="login" class="btn btn-primary btn-block">Sign In</button>
	        			</div><!-- /.col -->
	        		</div>
	      		</form>
	    	</div><!-- /.login-card-body -->
	  	</div>
	</div><!-- /.login-box -->
	<?php include '_layouts/javascript.php'; ?>
	</body>
</html>