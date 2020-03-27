	<!-- Navbar -->
	<nav class="main-header navbar navbar-expand navbar-white navbar-light">
		
		<!-- left navbar link -->
		<ul class="navbar-nav">
			
			<li class="navbar-nav">
				
				<a class="nav-link" data-widget="pushmenu" href="#" role="button">
					
					<i class="fas fa-bar"></i>
				</a>
			</li>

			<li class="nav-item d-none d-sm-inline-block">
				
				<a href="<?= url('beranda') ?>" class="nav-link">Home</a>
			</li>

			<li class="nav-item d-none d-sm-inline-block">
				
				<a href="#" class="nav-link">Contact</a>
			</li>
		</ul>

		<!-- SEARCH FORM -->
		<form class="form-inline ml-3">

			<div class="input-group input-group-sm">
				
				<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">

				<div class="input-group-append">

					<button class="btn btn-navbar" type="submit">
						
						<i class="fas fa-search"></i>
					</button>
				</div>
			</div>
		</form>

		<!-- Right navbar links -->
		<ul class="navbar-nav ml-auto">

			<li class="nav-item dropdown">

				<a class="nav-link" data-toggle="dropdown" href="#" data-slide="true" href="#" role="button">
					<span><?= $ses->get('namauser') ?></span>
					<!-- <i class="fas fa-user fa-fw"></i> -->
				</a>
			
				<!-- Dropdown - User Information -->
				<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
					
					<a href="#" class="dropdown-item">
						
						<i class="fas fa-user fa-fw"></i>
						<span  class="float-right">Profile</span>
					</a>
					
					<a class="dropdown-item" href="<?= url('logout') ?>">
						
						<i class="fas fa-sign-out-alt fa-fw"></i>
						<span  class="float-right">Sign Out</span>
					</a>
				</div>
			</li>
		</ul>
	</nav> <!-- /.navbar -->