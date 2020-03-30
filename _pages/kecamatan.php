<?php 
	
	$title = "Kecamatan";
	$judul = $title;
	$url = "kecamatan";

	if (isset($_POST['save'])) {

		$file = upload('gjkec', 'gjson');

		if ($file != false) {
			
			$data['gjkec'] = $file;
		}
		
		if ($_POST['idkec'] == '') {
			
			$data['kode'] = $_POST['kode'];
			$data['nama'] = $_POST['nama'];
			$db->insert("kecamatan", $data);
			?>
			
			<script>
				
				window.alert('data has been added');
				window.location.href = "<?= url('kecamatan') ?>";
			</script>

			<?php 
		} else {

			$data['kode'] = $_POST['kode'];
			$data['nama'] = $_POST['nama'];
			$db->where('idkec', $_POST['idkec']);
			$db->update("kecamatan", $data);
			?>
			
			<script>
				
				window.alert('data has been updated');
				window.location.href = "<?= url('kecamatan') ?>";
			</script>

			<?php
		}
	}

	if (isset($_GET['delete'])) {
		
		$db->where('idkec', $_GET['id']);
		$db->delete('kecamatan');

		?>
		<script>
				
			window.alert('data has been deleted');
			window.location.href = "<?= url('kecamatan') ?>";
		</script>

		<?php
	}

	if (isset($_GET['add']) OR isset($_GET['edit'])) {
	
		$idkec = "";
		$kode = "";
		$nama = "";
		$gjkec = "";

		if (isset($_GET['edit']) AND isset($_GET['id'])) {
			
			$id = $_GET['id'];
			$db->where('idkec', $id);
			$row = $db->ObjectBuilder()->getOne('kecamatan');
			if ($db->count>0) {
				
				$idkec = $row->idkec;
				$kode = $row->kode;
				$nama = $row->nama;
				$gjkec = $row->gjkec;
			}
		}
?>

	<!-- for inserting a data -->
		<?= start_content('Form Kecamatan') ?>

			<form method="post" enctype="multipart/form-data">

				<?= input_hidden('idkec', $idkec) ?>
				<div class="form-group">
					
					<label>Kode</label>
					<?= input_text('kode', $kode) ?>
				</div>

				<div class="form-group">
					
					<label>Nama Kecamatan</label>
					<?= input_text('nama', $nama) ?>
				</div>

				<div class="form-group">
					
					<label>GeoJSON</label>
					<?= input_file('gjkec', $gjkec) ?>
				</div>

				<div class="form-group">
					
					<button type="submit" name="save" class="btn btn-info"><i class="fa fa-save"></i> Save</button>
					<a href="<?= url($url) ?>" class="btn btn-danger"><i class="fa fa-reply"></i> Back</a>

				</div>
			</form>
		<?= close_content() ?>

	<?php } else { ?>

	<!-- for reading a data  -->
		<?= start_content('Data Kecamatan') ?>
			
			<a href="<?= url($url . '&add') ?>" class="btn btn-success" style="width: 150px;"><i class="fa fa-plus"></i></a>

			<hr>
			<table class="table table-hover">
						
				<thead>
							
					<tr>
								
						<th>No</th>
						<th>Kode</th>
						<th>Nama Kecamatan</th>
						<th>GeoJSON</th>
						<th>Action</th>
					</tr>
				</thead>

				<tbody>
							
					<?php 

						$no = 1;
						$getdata = $db->ObjectBuilder()->get('kecamatan');
						foreach ($getdata as $row) {
										
							?>
								<tr>
											
									<td><?= $no; ?></td>
									<td><?= $row->kode; ?></td>
									<td><?= $row->nama; ?></td>
									<td><a href="<?=assets('unggah/gjson/'.$row->gjkec)?>" target="_BLANK"><?= $row->gjkec; ?></a></td>
									<td>
										
										<a href="<?= url($url. '&edit&id=' .$row->idkec)?>" class="btn btn-info"><i class="fa fa-edit"></i></a>
										<a href="<?= url($url. '&delete&id=' .$row->idkec)?>" class="btn btn-danger" onclick="return confirm('Delete Data ?')"><i class="fa fa-trash"></i></a>
									</td>
								</tr>
							<?php

							$no++;
						}
					?>
				</tbody>
			</table>
		<?= close_content() ?>
	<?php } ?>
