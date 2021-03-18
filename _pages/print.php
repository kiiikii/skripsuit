<?php
	$title = "Surat";
	$judul = $title;
	$url = "print";

	// read data from form
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$tanggal = $_POST['tanggal'];
	$wali = $_POST['wali'];

	// include and read template file
	$document = file_get_content("assets/surat/surat.rtf");
	
	// convert into string
	$document = str_replace("#NAMA", $nama, $document);
	$document = str_replace("#ALAMAT", $alamat, $document);
	$document = str_replace("#TANGGAL", $tanggal, $document);
	$document = str_replace("#WALI", $wali, $document);

	// header for open file .rtf
	header("Content-type: application/msword");
	header("Content-disposition: inline; filename=surat.doc");
	header("Content-length: ".strlen($document));
	echo $document;
?>

		<?= start_content('Form surat') ?>
			<form method="post">
				<div class="form-group">
					<label>luas tanah</label>
					<?= input_text('nama', $nama, '', 'required') ?>
				</div>
				<div class="form-group">
					<label>luas tanah</label>
					<?= input_text('alamat', $alamat, '', 'required') ?>
				</div>
				<div class="form-group">
					<label>luas tanah</label>
					<?=input_date('tanggal', $tanggal, '', 'required') ?>
				</div>
				<div class="form-group">
					<label>luas tanah</label>
					<?= input_text('wali', $wali, '', 'required') ?>
				</div>
				<div class="form-group">
					<button type="submit" value="print" class="btn btn-info"><i class="fa fa-print"></i></button>
				</div>
			</form>
		<?= close_content() ?>
