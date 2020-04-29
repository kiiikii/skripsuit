<?php  
	
	$title = "Kontur tanah";
	$judul = $title;
	$url = "kontur";

	if (isset($_POST['save'])) {

		$file = upload('gbrlahan', 'gbrlahan');

		if ($file != false) {
			
			$data['gbrlahan'] = $file;

			if ($_POST['gbrlahan'] != '') {
				
				// delete file inside a folder
				$db->where('idlahan', $_GET['id']);
				$get = $db->ObjectBuilder()->getOne('lahan');
				$gbrlahan = $get->gbrlahan;
				unlink('assets/unggah/gbrlahan/' .$gbrlahan);
				// end delete file inside a folder
			}
		}
		
		$data['idkub'] = $_POST['idkub'];
		$data['luas'] = $_POST['luas'];

		if ($_POST['idlahan'] == '') {
			
			$exec = $db->insert("lahan", $data);
			$info = '<div class="alert alert-success alert-dismissible" style="width:500px;">
                	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                	<i class="icon fas fa-check"></i>data has been added
                	</div>';

		} else {

			$db->where('idlahan', $_POST['idlahan']);
			$exec = $db->update("lahan", $data);
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

		// delete file inside a folder
		$db->where('idlahan', $_GET['id']);
		$get = $db->ObjectBuilder()->getOne('lahan');
		$gbrlahan = $get->gbrlahan;
		unlink('assets/unggah/gbrlahan/' .$gbrlahan);
		// end delete file inside a folder

		$db->where('idlahan', $_GET['id']);
		$exec = $db->delete("lahan");
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

		$idlahan = "";
		$idkub = "";
		$luas = "";
		$gbrlahan = "";

		if (isset($_GET['edit']) AND isset($_GET['id'])) {

			$id = $_GET['id'];
			$db->where('idlahan', $id);
			$row = $db->ObjectBuilder()->getOne('lahan');
			if ($db->count>0) {
				
				$idlahan = $row->idlahan;
				$idkub = $row->idkub;
				$luas = $row->luas;
				$gbrlahan = $row->gbrlahan;
			}
		}
?>
	
	<!-- for inserting a data -->
		<?= start_content('Form kontur tanah') ?>
				<form method="post" enctype="multipart/form-data">
					
					<?= input_hidden('idlahan', $idlahan) ?>

					<div class="form-group">

						<label>Nama kuburan</label>

						<div class="row">

							<div class="col-md-2">
								
								<?php  

									$op[''] = "select kuburan";
									foreach ($db->ObjectBuilder()->get('kuburan') as $row) {
										
										$op[$row->idkub] = $row->namakub;
									}
								?>

								<?= select('idkub', $op, $idkub) ?>
							</div>
						</div>
					</div>

					<div class="form-group">

						<label>luas tanah</label>
						<?= input_text('luas', $luas, '', 'required') ?>
					</div>

					<div class="form-group">

						<label>Gambar tanah</label>
						<?= input_file('gbrlahan', $gbrlahan) ?>
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
		
		<div class="row">
			
			<div class="col-md-12">
				
				<canvas id="donutChart" style="height: 300px;"></canvas>
			</div>
		</div>
			
		<!-- <div id="donut-chart" style="height: 300px;"></div> -->
		
		<br>

	<!-- for reading a data  -->

		<?= start_content('Data kontur tanah') ?>

			<a href="<?= url($url . '&add') ?>" class="btn btn-success" style="width: 150px;"><i class="fa fa-plus"></i></a>

			<hr>

			<?= $ses->pull("info") ?>

			<table id="tnh" class="table table-bordered table-striped">
				
				<thead>
					
					<tr>
						
						<th>No</th>
						<th>Nama kuburan</th>
						<th>luasan tanah</th>
						<th>Gambar kontur tanah</th>
						<th>Action</th>
					</tr>
				</thead>

				<tbody>

					<?php 

						$no = 1;
						$db->join('kuburan b', 'a.idkub = b.idkub', 'LEFT');
						$getdata = $db->ObjectBuilder()->get('lahan a');
						foreach ($getdata as $row) {
					?>

					<tr>

						<td class="text-center"><?= $no ?></td>
						<td class="text-center"><?= $row->namakub ?></td>
						<td class="text-center"><?= $row->luas ?></td>
						<td class="text-center"><?= ($row->gbrlahan == ''?'-':'<img src="'.assets('unggah/gbrlahan/'.$row->gbrlahan).'"') ?></td>
						<td>

							<a href="<?= url($url. '&edit&id=' .$row->idlahan)?>" class="btn btn-info"><i class="fa fa-edit"></i></a>
							<a href="<?= url($url. '&delete&id=' .$row->idlahan)?>" class="btn btn-danger" onclick="return confirm('Delete Data ?')"><i class="fa fa-trash"></i></a>
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