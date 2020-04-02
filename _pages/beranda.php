<?php 
	
	$title = "Beranda";
	$judul = $title;
	$jsfile = 'leaflet';
?>

<?= start_content('Beranda') ?>
			
			<?= $ses->pull("info") ?>
			<div id="mapid"></div>
<?= close_content() ?>
