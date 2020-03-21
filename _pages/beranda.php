<?php 
	
	$title = "Beranda";
	$judul = $title;
	
?>

<?= start_content('Beranda') ?>
			
			<?= $ses->pull("info") ?>
			Selamat datang Admin !
<?= close_content() ?>
