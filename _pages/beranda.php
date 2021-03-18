<?php 
	$title = "Beranda";
	$judul = $title;
	$jsfile = 'leaflet';
	$kecamatan = $db->get('kecamatan');
	$kuburan = $db->get('kuburan');
	$jenazah = $db->get('jenazah');
	$lahan = $db->get('lahan');
	$countkec = $db->getValue("kecamatan", "count(*)");
	$countkub = $db->getValue("kuburan", "count(*)");
	$countje = $db->getValue("jenazah", "count(*)");
	$countla = $db->getValue("lahan", "count(*)");
?>

		<div class="container-fluid">
        	<div class="row">
        		<div class="col-md-3 col-sm-6 col-12">
            		<div class="info-box">            
            			<span class="info-box-icon bg-info"><i class="far fa-building"></i></span>
            			<div class="info-box-content">                
                			<span class="info-box-text">Kecamatan</span>
                			<span class="info-box-number"><?= $countkec ?></span>
                			<a href="<?= url('kecamatan') ?>" class="small-box-footer text-info">More info <i class="fas fa-arrow-circle-right"></i></a>
            			</div><!-- /.info-box-content -->
            		</div><!-- /.info-box -->
          		</div><!-- /.col -->
        		<div class="col-md-3 col-sm-6 col-12">
            		<div class="info-box">
            			<span class="info-box-icon bg-success"><i class="fas fa-map-marker"></i></span>
            			<div class="info-box-content">                
                			<span class="info-box-text">Kuburan</span>
                			<span class="info-box-number"><?= $countkub ?></span>
                			<a href="<?= url('kuburan') ?>" class="small-box-footer text-success">More info <i class="fas fa-arrow-circle-right"></i></a>
			            </div><!-- /.info-box-content -->
		            </div><!-- /.info-box -->
        		</div><!-- /.col -->
		        <div class="col-md-3 col-sm-6 col-12">		        
		            <div class="info-box">		            	
		            	<span class="info-box-icon bg-warning"><i class="fas fa-user"></i></span>
		            	<div class="info-box-content">		                
		                	<span class="info-box-text">Almarhum / mah</span>
		                	<span class="info-box-number"><?= $countje ?></span>
		                	<a href="<?= url('almarhum') ?>" class="small-box-footer text-warning">More info <i class="fas fa-arrow-circle-right"></i></a>
		            	</div><!-- /.info-box-content -->
		            </div><!-- /.info-box -->
		        </div><!-- /.col -->
		        <div class="col-md-3 col-sm-6 col-12">		        
		            <div class="info-box">		            	
		            	<span class="info-box-icon bg-danger"><i class="fas fa-chart-pie"></i></span>
		            	<div class="info-box-content">		                
		                	<span class="info-box-text">Lahan</span>
		                	<span class="info-box-number"><?= $countla ?></span>
		                	<a href="<?= url('kontur') ?>" class="small-box-footer text-danger">More info <i class="fas fa-arrow-circle-right"></i></a>
		            	</div><!-- /.info-box-content -->
		            </div><!-- /.info-box -->
		        </div><!-- /.col -->
        	</div><!-- /.row -->

		<?= start_content('Beranda') ?>
					<?= $ses->pull("info") ?>
					<div id="mapid"></div>
		<?= close_content() ?>


