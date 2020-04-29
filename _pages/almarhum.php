<?php 
	
	$title = "Almarhum";
	$judul = $title;
	$url = "almarhum";
	
	if (isset($_POST['save'])) {
		
		$data['idkub'] = $_POST['idkub'];
		$data['namaje'] = $_POST['namaje'];
		$data['lahir'] = $_POST['lahir'];
		$data['mati'] = $_POST['mati'];

		if ($_POST['idje'] == "") {
			
			$exec = $db->insert("jenazah", $data);
			$info = '<div class="alert alert-success alert-dismissible" style="width:500px;">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <i class="icon fas fa-check"></i>data has been added
                </div>';

		} else {

			$db->where('idje', $_POST['idje']);
			$exec = $db->update("jenazah", $data);
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

		$db->where("idje", $_GET['id']);
		$exec = $db->delete("jenazah");
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

	elseif(isset($_GET['add']) OR isset($_GET['edit'])) {

		$idje = "";
		$idkub = "";
		$namaje = "";
		$lahir = date('Y-m-d');
		$mati = date('Y-m-d');

		if (isset($_GET['edit']) AND isset($_GET['id'])) {
			
			$id = $_GET['id'];
			$db->where('idje', $id);
			$row = $db->ObjectBuilder()->getOne('jenazah');
			if ($db->count>0) {
				
				$idje = $row->idje;
				$idkub = $row->idkub;
				$namaje = $row->namaje;
				$lahir = $row->lahir;
				$mati = $row->mati;
			}
		}
?>

	<!-- for inserting a data -->
		<?= start_content('Form data Almarhum / Almarhumah') ?>

			<form method="post">

				<?= input_hidden('idje', $idje) ?>

				<div class="form-group">

					<label>Nama Kuburan</label>

					<div class="row">

						<div class="col-md-2">

							<?php 

								$op[''] = "select kuburan";
								foreach($db->ObjectBuilder()->get('kuburan') as $row) {

									$op[$row->idkub] = $row->namakub;
								}
							?>

							<?= select('idkub', $op, $idkub) ?>
						</div>
					</div>
				</div>

				<div class="form-group">
					
					<label>Nama almarhum / almarhumah</label>
					<?= input_text('namaje', $namaje, '', 'required') ?>
				</div>

				<div class="form-group">
					
					<label>Tanggal lahir</label>
					<?=input_date('lahir',$lahir, '', 'required') ?>
				</div>
				
				<div class="form-group">
					
					<label>Wafat</label>
					<?=input_date('mati', $mati, '', 'required') ?>
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

	<!-- for reading a data -->
		<?= start_content('Data Almarhum / Almarhumah') ?>

			<a href="<?= url($url . '&add') ?>" class="btn btn-success" style="width: 150px;"><i class="fa fa-plus"></i></a>

			<hr>

			<?= $ses->pull("info") ?>

			<table id="jenazah" class="table table-bordered table-striped">

				<thead>
							
					<tr>
								
						<th>No</th>
						<th>Dikebumikan di</th>
						<th>Nama almarhum</th>
						<th>Tanggal Lahir</th>
						<th>Tanggal wafat</th>
						<th>Action</th>
					</tr>
				</thead>

				<tbody>

					<?php 

						$no = 1;
						$db->join('kuburan b', 'a.idkub = b.idkub', 'LEFT');
						$getdata = $db->ObjectBuilder()->get('jenazah a');
						foreach ($getdata as $row) {										
					?>

					<tr>

						<td class="text-center"><?= $no ?></td>
						<td class="text-center"><?= $row->namakub ?></td>
						<td class="text-center"><?= $row->namaje ?></td>
						<td class="text-center"><?= $row->lahir ?></td>
						<td class="text-center"><?= $row->mati ?></td>
						<td>

							<a href="<?= url($url. '&edit&id=' .$row->idje)?>" class="btn btn-info"><i class="fa fa-edit"></i></a>
							<a href="<?= url($url. '&delete&id=' .$row->idje)?>" class="btn btn-danger" onclick="return confirm('Delete Data ?')"><i class="fa fa-trash"></i></a>
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