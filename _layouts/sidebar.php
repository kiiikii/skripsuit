	<!-- Main Sidebar Container -->
	<aside class="main-sidebar sidebar-dark-primary elevation-4">
		
		<!-- Brand Logo -->
		<a href="<?= templates() ?>index3.html" class="brand-link">

			<img src="<?= templates() ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
			<span class="brand-text font-weight-light">E-TPU Admin</span>
		</a>

		<!-- Sidebar -->
    	<div class="sidebar">

			<!-- Sidebar user (optional) 
      		<div class="user-panel mt-3 mb-3 d-flex">

      			<div class="image">

      				<img src="<?= templates() ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      			</div>

      			<div class="info">

      				<p style="color: white;" class="d-block"><?= $ses->get('namauser') ?></p>
      			</div>
      		</div> -->
    	
	    	<!-- Sidebar Menu -->
	    	<nav class="mt-2">

	    		<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

	    			<!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
	    			<li class="nav-item">

						<a href="<?= url('beranda') ?>" class="nav-link">
	    					
	    					<i class="nav-icon fas fa-tachometer-alt"></i>
	    					<p>Beranda</p>
	    				</a>
	    			</li>

	    			<li class="nav-item has-treeview">

	    				<a href="#" class="nav-link">

	    					<i class="nav-icon fas fa-folder"></i>

	              			<p>Form Data</p>
	    				</a>

	    				<ul class="nav nav-treeview">
	    					
	    					<li class="nav-item">

	    						<a href="<?= url('kecamatan') ?>" class="nav-link">

	    							<i class="nav-icon fas fa-map-marker"></i>
	    							<p>Kecamatan</p>
	    						</a>
	    					</li>

	    					<li class="nav-item">

	    						<a href="<?= url('kuburan') ?>" class="nav-link">

	    							<i class="nav-icon fas fa-map-marker"></i>
	    							<p>Kuburan</p>
	    						</a>
	    					</li>
	    				</ul>
	    			</li>

	    			<li class="nav-item has-treeview">

						<a href="#" class="nav-link">
	    					
	    					<i class="nav-icon fas fa-map"></i>
	    					<p>Leaflet</p>
	    				</a>

	    				<ul class="nav nav-treeview">

	    					<li class="nav-item">

	    						<a href="<?= url('standard') ?>" class="nav-link">

	    							<i class="nav-icon fas fa-map-marker"></i>
	    							<p>Standard Map</p>
	    						</a>
	    					</li>
	    				</ul>
	    			</li>

	    			<li class="nav-item">

						<a href="<?= url('logout') ?>" class="nav-link">

							<i class="nav-icon fa-fw fas fa-sign-out-alt"></i>
							<p>Sign Out</p>
						</a>
	    			</li>
	    		</ul>
	    	</nav>
	    	<!-- /.sidebar-menu -->
    	</div>
    	<!-- /.sidebar -->
	</aside>