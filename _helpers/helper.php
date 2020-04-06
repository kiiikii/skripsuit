<?php

	function base_url($a = '') {

		$getbase_url = $GLOBALS['seturi']['base'];
		return $getbase_url . $a;
	}

	function assets($a = '') {

		$getbase_assets = $GLOBALS['seturi']['assets'];
		return base_url($getbase_assets . $a);
	}

	function url($a = '', $b = '') {

		return base_url($b . '?halaman=' . $a);
	}

	function templates($a = '') {

		return assets($GLOBALS['template'] . $a);
	}

	function redirect($a=''){
  		
  		header("location: ".$a);
  		exit;
  	}


	function start_content($title = '') {

		return '
			
			<!-- Main content -->
    		<section class="content">

		      <!-- Default box -->
		      <div class="card">
				
		        <div class="card-header">

		          <h3 class="card-title">'.$title.'</h3>
				  
				  <!-- tools box -->
		          <div class="card-tools">

		            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
		              <i class="fas fa-minus"></i></button>
		            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
		              <i class="fas fa-times"></i></button>
		          </div>
		          <!-- /. tools -->
		        </div>

		        <div class="card-body pad">';
	}

	function close_content() {

		return '

				</div><!-- /.card-body -->

      		</div><!-- /.card -->

    	</section>';
	}