<?php 
	
	$title = "Kecamatan";
	$judul = $title;
	$url = "kecamatan";
	$id = "";
	$kode = "";
	$nama = "";
?>

<!-- for inserting a data -->
	<?= start_content('Form Kecamatan') ?>

		<form method="post">

			<?= input_hidden('id', $id) ?>
			<div class="form-group">
				
				<label>Kode</label>
				<?= input_text('kode', $kode) ?>
			</div>

			<div class="form-group">
				
				<label>Nama Kecamatan</label>
				<?= input_text('nama', $nama) ?>
			</div>

			<div class="form-group">
				
				<button type="submit" name="save" class="btn btn-info"><i class="fa fa-save"></i> Save</button>
				<a href="<?= url($url) ?>" class="btn btn-danger"><i class="fa fa-reply"></i> Back</a>

			</div>
		</form>
	<?= close_content() ?>

<!-- for reading a data  -->
	<?= start_content('Data Kecamatan') ?>
		
		<a href="<?= url($url . '&tambah') ?>" class="btn btn-success" style="width: 150px;"><i class="fa fa-plus"></i> Tambah</a>

		<hr>
		<table class="table table-hover">
					
			<thead>
						
				<tr>
							
					<th>No</th>
					<th>Kode</th>
					<th>Nama Kecamatan</th>
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
								<td>
									
									<a href="<?= url($url. '&edit&id=' .$row->id)?>" class="btn btn-info"><i class="fa fa-edit"></i> edit</a>
									<a href="<?= url($url. '&delete&id=' .$row->id)?>" class="btn btn-danger" onclick="return confirm('Delete Data ?')"><i class="fa fa-trash"></i> delete</a>
								</td>
							</tr>
						<?php

						$no++;
					}
				?>
			</tbody>
		</table>
	<?= close_content() ?>
