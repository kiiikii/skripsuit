<?php
	
	$title = "Kuburan";
	$judul = $title;
	$url = "kuburan";
?>

	<!-- for inserting a data -->
		<?= start_content('Form Kuburan') ?>

			<form method="post">
				
				<div class="form-group">
					
					<label>Nama Kuburan</label>
				</div>

				<div class="form-group">
					
					<label>Alamat</label>
				</div>

				<div class="form-group">
					
					<label>GeoJSON</label>
				</div>

				<div class="form-group">
					
					<label>Deskripsi</label>
				</div>

				<div class="form-group">
					
					<button type="submit" name="save" class="btn btn-info"><i class="fa fa-save"></i></button>
					<a href="<?= url($url) ?>" class="btn btn-danger"><i class="fa fa-reply"></i></a>
				</div>
			</form>
		<? close_content() ?>


	<!-- for reading a data -->
		<?= start_content('Data Kuburan') ?>

			<a href="<?= url($url . '&add') ?>" class="btn btn-success" style="width: 150px;"><i class="fa fa-plus"></i></a>
			
			<hr>
			<table>
				
				<thead>
					
					<tr>
						
						<th>No</th>
						<th>Nama Kuburan</th>
						<th>Alamat</th>
						<th>GeoJson</th>
						<th>Deskripsi</th>
						<th>Action</th>
					</tr>
				</thead>

				<tbody>
					
					<tr>
						
						
					</tr>
				</tbody>
			</table>
		<?= close_content() ?>