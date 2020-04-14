<?php 
	
	$title = "Kuburan";
	$judul = $title;
	$url = "kuburan";

	if (isset($_POST['save'])) {

		//$file = upload('gjkec', 'gjson');
		//
		//if ($file != false) {
		//	
		//	$data['gjkec'] = $file;
		//}

		$data['idkec'] = $_POST['idkec'];
		$data['namakub'] = $_POST['namakub'];
		$data['alamat'] = $_POST['alamat'];
		$data['lat'] = $_POST['lat'];
		$data['lng'] = $_POST['lng'];
		$data['deskripsi'] = $_POST['deskripsi'];

		if ($_POST['idkub'] == '') {
			
			$exec = $db->insert("kuburan", $data);
			$info = '<div class="alert alert-success alert-dismissible" style="width:500px;">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <i class="icon fas fa-check"></i>data has been added
                </div>';

		} else {

			//$data['kode'] = $_POST['kode'];
			//$data['nama'] = $_POST['nama'];
			$db->where('idkub', $_POST['idkub']);
			$exec = $db->update("kuburan", $data);
			$info = '<div class="alert alert-success alert-dismissible" style="width:500px;">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <i class="icon fas fa-check"></i>data has been updated
                </div>';
		}

		if ($exec) {
			
			$ses->set('info', $info);

		} else {

			$ses->set("info", '<div class="alert alert-danger alert-dismissible" style="width:500px;">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <i class="icon fas fa-check"></i>failed to process
                </div>');
		}

		redirect(url($url));
	}

	if (isset($_GET['delete'])) {

		$setTemplate = false;

		// delete file inside the folder
		//$db->where('idkec', $_GET['id']);
		//$get = $db->ObjectBuilder()->getOne('kecamatan');
		//$gjkec = $get->gjkec;
		//unlink('assets/unggah/gjson/'.$gjkec);
		// end of deleted file inside thr folder
		
		$db->where('idkub', $_GET['id']);
		$exec = $db->delete('kuburan');
		$info = '<div class="alert alert-success alert-dismissible" style="width:500px;">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <i class="icon fas fa-check"></i>data has been deleted
                </div>';

        if ($exec) {
			
			$ses->set('info', $info);

		} else {

			$ses->set("info", '<div class="alert alert-danger alert-dismissible" style="width:500px;">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <i class="icon fas fa-check"></i>failed to process
                </div>');
		}

		redirect(url($url));
	}

	if (isset($_GET['add']) OR isset($_GET['edit'])) {
	
		$idkub = "";
		$idkec = "";
		$namakub = "";
		$alamat = "";
		$lat = "";
		$lng = "";
		$deskripsi = "";
		$marker = "";

		if (isset($_GET['edit']) AND isset($_GET['id'])) {
			
			$id = $_GET['id'];
			$db->where('idkub', $id);
			$row = $db->ObjectBuilder()->getOne('kuburan');
			if ($db->count>0) {
				
				$idkub = $row->idkub;
				$idkec = $row->idkec;
				$namakub = $row->namakub;
				$alamat = $row->alamat;
				$lat = $row->lat;
				$lng = $row->lng;
				$deskripsi = $row->deskripsi;
				$marker = $row->marker;
			}
		}
?>

	<!-- for inserting a data -->
		<?= start_content('Form Kuburan') ?>

			<form method="post" enctype="multipart/form-data">

				<?= input_hidden('idkub', $idkub) ?>

				<div class="form-group">

					<label>Nama Kecamatan</label>

					<div class="row">

						<div class="col-md-2">

							<?php 

								$op[''] = "select kecamatan";
								foreach($db->ObjectBuilder()->get('kecamatan') as $row) {

									$op[$row->idkec] = $row->nama;
								}
							?>

							<?= select('idkec', $op, $idkec) ?>
						</div>
					</div>
				</div>

				<div class="form-group">

					<label>Nama Kuburan</label>	

					<div class="row">

						<div class="col-md-3">

						<?= input_text('namakub', $namakub, '', 'required') ?>
						</div>
					</div>
				</div>

				<div class="form-group">

					<label>Alamat</label>
					
					<div class="row">

						<div class="col-md-5">
							
							<?= input_text('alamat', $alamat, '', 'required') ?>
						</div>
					</div>
				</div>

				<div class="form-group">

					<label>Latitude dan Longitude</label>
					
					<div class="row">

						<div class="col-md-2">

							<?= input_text('lat', $lat, '', 'required') ?>
						</div>
							
						<div class="col-md-2">

							<?= input_text('lng', $lng, '', 'required') ?>
						</div>
					</div>
				</div>

				<div class="form-group">
					
					<div class="row">

						<div class="col-md-5">

							<label>Deskripsi</label>
							<div class="mb-3">

								<?= textarea('deskripsi', $deskripsi, 'textarea', 'style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"', 'required') ?>
							</div>

							<p class="text-sm mb-0">

								Editor <a href="https://github.com/bootstrap-wysiwyg/bootstrap3-wysiwyg">Documentation and license information.</a>
							</p>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					
					<div class="row">

						<div class="col-md-3">

							<label>Marker</label>
							<?= input_file('marker', $marker) ?>
						</div>
					</div>	
				</div>

				<div class="form-group">
					
					<button type="submit" name="save" class="btn btn-info"><i class="fa fa-save"></i></button>
					<span class="col-md-12">
						
						<a href="<?= url($url) ?>" class="btn btn-danger"><i class="fa fa-reply"></i></a>
					</span>
				</div>
			</form>
		<?= close_content() ?>

	<?php } else { ?>

	<!-- for reading a data  -->
		<?= start_content('Data Kuburan') ?>
			
			<a href="<?= url($url . '&add') ?>" class="btn btn-success" style="width: 150px;"><i class="fa fa-plus"></i></a>

			<hr>

			<?= $ses->pull("info") ?>

			<table id="kuburan" class="table table-bordered table-striped">
						
				<thead>
							
					<tr>
								
						<th>No</th>
						<th>Nama Kecamatan</th>
						<th>Nama Kuburan</th>
						<th>Alamat</th>
						<th>Latitude</th>
						<th>Longitude</th>
						<th>Deskripsi</th>
						<th>Marker</th>
						<th>Action</th>
					</tr>
				</thead>

				<tbody>
							
					<?php 

						$no = 1;
						$db->join('kecamatan b', 'a.idkec = b.idkec', 'LEFT');
						$getdata = $db->ObjectBuilder()->get('kuburan a');
						foreach ($getdata as $row) {
										
							?>
								<tr>
											
									<td><?= $no; ?></td>
									<td><?= $row->nama; ?></td>
									<td><?= $row->namakub; ?></td>
									<td><?= $row->alamat; ?></td>
									<td><?= $row->lat; ?></td>
									<td><?= $row->lng; ?></td>
									<td><?= $row->deskripsi; ?></td>
									<td><?= $row->marker; ?></td>
									<td>
										
										<a href="<?= url($url. '&edit&id=' .$row->idkub)?>" class="btn btn-info"><i class="fa fa-edit"></i></a>
										<a href="<?= url($url. '&delete&id=' .$row->idkub)?>" class="btn btn-danger" onclick="return confirm('Delete Data ?')"><i class="fa fa-trash"></i></a>
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