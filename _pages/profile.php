<?php 
	
	$title = "Admin";
	$judul = $title;
    $url = "profile";

    // logic for Update ADMIN
    $data = $db->ObjectBuilder()->getOne('admin');
    
?>

		<?= profile_open('Admin Profile') ?>
                            
                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">

						    <div class="card-body box-profile">
                            
                                <div class="text-center">
                              
                                    <img class="profile-user-img img-fluid img-circle" src="<?= templates() ?>dist/img/user4-128x128.jpg" alt="User profile picture">
							    </div>
			
							    <h3 class="profile-username text-center"><?= $ses->get('namauser') ?></h3>
						    </div>
						    <!-- /.card-body -->
						</div>
						<!-- /.card -->
			
						<!-- About Me Box -->
						<div class="card card-primary">
							
							<div class="card-header">
						
								<h3 class="card-title">About Me</h3>
							</div>

							<!-- /.card-header -->
							<div class="card-body">
							
								<strong><i class="fas fa-book mr-1"></i> Education</strong>
			
								<p class="text-muted">

									<?= $data->edukasi ?>
								</p>
			
								<hr>
			
								<strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
			
								<p class="text-muted">

									<?= $data->lokasi ?>
								</p>
			
								<hr>
			
								<strong><i class="far fa-file-alt mr-1"></i> Experience</strong>
			
								<p class="text-muted">

									<?= $data->pengalaman ?>
								</p>
							</div>
							<!-- /.card-body -->
						</div>
						<!-- /.card -->
					</div>
					<!-- /.col -->
					  
					<div class="col-md-9">
						
						<div class="card">

							<!-- card header -->
							<div class="card-header p-2">
							
								<ul class="nav nav-pills">

								  	<li class="nav-item"><a class="nav-link active disabled" href="#">Settings</a></li>
								</ul>
							</div>
						  	<!-- /.card-header -->
						  
							<div class="card-body">
							
								<div class="tab-content">

									<div class="active tab-pane">
								
										<form class="form-horizontal">
								  
											<div class="form-group row">
											
												<label for="inputName" class="col-sm-2 col-form-label">Name</label>
												
												<div class="col-sm-10">
												
													<?= $data->namauser ?>
												</div>
											</div>
											  
											<div class="form-group row">
									
												<label for="inputEmail" class="col-sm-2 col-form-label">Education</label>
									
												<div class="col-sm-10">
									
													<?= $data->edukasi ?>
												</div>
											</div>
								
											<div class="form-group row">
								
												<label for="inputName2" class="col-sm-2 col-form-label">Location</label>
								
												<div class="col-sm-10">
									
													<?= $data->lokasi ?>
												</div>
											</div>

											<div class="form-group row">

												<label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>

												<div class="col-sm-10">
												
													<?= $data->pengalaman ?>
												</div>
											</div>

								  			<div class="form-group row">
											
												<div class="offset-sm-2 col-sm-10">
									
													<a href="#modal-fade2" class="btn btn-info" data-toggle="modal" title="Edit Profile"><i class="fa fa-edit"></i></a>

													<span class="col-md-12">
						
														<a href="<?= url('beranda') ?>" class="btn btn-danger"><i class="fa fa-reply"></i></a>
													</span>
												</div>
								  			</div>
										</form>
									</div>
									<!-- /.tab-pane -->
								</div>
								<!-- /.tab-content -->
							</div>
							<!-- /.card-body -->
						</div>
						<!-- /.nav-tabs-custom -->

						<!-- Modal -->
						<div id="modal-fade2" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
							
							<div class="modal-dialog">
								
								<div class="modal-content">
									
									<div class="modal-header">
										
										<h2 class="modal-title">Update Profile</h2>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									</div>

									<div class="modal-body">

										<form method="post" class="form-horizontal" enctype="multipart/form-data">
										
											<div class="form-group row">

												<label for="inputPicture" class="col-sm-2 col-form-label">Picture</label>
													
												<div class="col-sm-10">

													<?= input_file('', '') ?>
												</div>
											</div>

											<div class="form-group row">
								
												<label for="inputName2" class="col-sm-2 col-form-label">Location</label>
								
												<div class="col-sm-10">
									
													<?= input_text('', '', '', 'required') ?>
												</div>
											</div>

											<div class="form-group row">

												<label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>

												<div class="col-sm-10">
												
													<?= textarea('', '', 'textarea', 'style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #000000; padding: 10px;"', 'required') ?>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
		<?= profile_close() ?>