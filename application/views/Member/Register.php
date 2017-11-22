<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url().'assets2/'; ?>img/apple-icon.png" />
	<link rel="icon" type="image/png" href="<?php echo base_url().'assets2/'; ?>img/favicon.png" />
	<title>Paper Bootstrap Wizard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<!-- CSS Files -->
    <link href="<?php echo base_url().'assets2/'; ?>css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url().'assets2/'; ?>css/paper-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="<?php echo base_url().'assets2/'; ?>css/demo.css" rel="stylesheet" />

	<!-- Fonts and Icons -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
	<link href="<?php echo base_url().'assets2/'; ?>css/themify-icons.css" rel="stylesheet">
</head>

<body>
	<div class="image-container set-full-height" style="background-image: url('<?php echo base_url().'assets2/'; ?>/img/paper-1.jpeg')">
	    <!--   Creative Tim Branding   -->
	    <a href="http://creative-tim.com">
	         <div class="logo-container">
	            <div class="logo">
	                <img  width="100px" height="80px" src="<?php echo base_url().'assets/'; ?>image/jewe.jpg">
	            </div>
	            <div class="Branding">
	                
	            </div>
	        </div>
	    </a>

		<!--  Made With Paper Kit  -->
		<a href="http://demos.creative-tim.com/paper-kit?ref=paper-bootstrap-wizard" class="made-with-pk">
			<div class="brand">PK</div>
			<div class="made-with">Made with <strong>Paper Kit</strong></div>
		</a>

	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">

		            <!--      Wizard container        -->
		            <div class="wizard-container">

		                <div class="card wizard-card" data-color="orange" id="wizardProfile">
		                   
		                <!--        You can switch " data-color="orange" "  with one of the next bright colors: "blue", "green", "orange", "red", "azure"          -->

		                    	<div class="wizard-header text-center">
		                        	<h3 class="wizard-title">Create your profile</h3>
									<p class="category">This information will let us know more about you.</p>
		                    	</div>

								<div class="wizard-navigation">
									<div class="progress-with-circle">
									     <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="3" style="width: 21%;"></div>
									</div>
									<ul>
			                            <li>
											<a href="#about" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-user"></i>
												</div>
												Akun
											</a>
										</li>
			                          
			                            <li>
											<a href="#address" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-user"></i>
												</div>
											Data Diri
											</a>
										</li>
			                        </ul>
								</div>
<?php
	echo form_open_multipart("$action");
	?>
		                        <div class="tab-content">
		                            <div class="tab-pane" id="about">
		                            	<div class="row">
											<h5 class="info-text"> Please tell us more about yourself.</h5>
											<div class="col-sm-4 col-sm-offset-1">
												<div class="picture-container">
													<div class="picture">
														<img src="<?php echo base_url().'assets2/'; ?>img/default-avatar.jpg" class="picture-src" id="wizardPicturePreview" title="" />
														
														<input type="file" id="wizard-picture" name="foto">
													</div>
													<h6>Choose Picture</h6>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label>Username<small>(required)</small></label>
													<input name="username" type="text" class="form-control" placeholder="jaswenny...">
													
												</div>
												<div class="form-group">
													<label>Password<small>(required)</small></label>
													<input name="password" type="password" class="form-control" placeholder="password...">
												</div>
											</div>
											<div class="col-sm-10 col-sm-offset-1">
												<div class="form-group">
													<label>Email <small>(required)</small></label>
													<input name="email" type="email" class="form-control" placeholder="jaswenny15ti@mahasiswa.pcr.ac.id">
												</div>
											</div>
										</div>
		                            </div>
		                           
		                            <div class="tab-pane" id="address">
		                                <div class="row">
		                                    <div class="col-sm-12">
		                                        <h5 class="info-text"> Are you living in a nice area? </h5>
		                                    </div>
		                                    <div class="col-sm-7 col-sm-offset-1">
		                                    	<div class="form-group">
		                                            <label>Nama Lengkap</label>
		                                            <input type="text" class="form-control" placeholder="Jaswenny Huang" name="nama" value="">

		                                        </div>
		                                    </div>
		                                    <div class="col-sm-3">
		                                        <div class="form-group">
		                                            <label>Tanggal lahir</label>
		                                            <input type="Date" class="form-control" placeholder="dd/mm/yyyy" name="tanggal_lahir">
		                                        </div>
		                                    </div>
		                                    <div class="col-sm-5 col-sm-offset-1">
		                                        <div class="form-group">
		                                            <label>Alamat</label>
		                                            <input type="text" class="form-control" placeholder="New York..." name="alamat">
		                                        </div>
		                                    </div>
		                                    <div class="col-sm-5">
		                                        <div class="form-group">
		                                            <label>Nomor Handphone</label><br>
		                                           <input type="text" class="form-control" placeholder="082173138123" name="no_hp">
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="wizard-footer">
		                            <div class="pull-right">
		                                <input type='button' class='btn btn-next btn-fill btn-warning btn-wd' name='next' value='Next' />
		                                <input type='submit' class='btn btn-finish btn-fill btn-warning btn-wd' name='finish' value='Finish' />
		                                
		                            </div>
</form>
		                            <div class="pull-left">
		                                <input type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='Previous' />
		                            </div>
		                            <div class="clearfix"></div>
		                        </div>
		                  <?php echo form_close(); ?>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	    	</div><!-- end row -->
		</div> <!--  big container -->

	    <div class="footer">
	        <div class="container text-center">
	           Made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>. Free download <a href="http://www.creative-tim.com/product/paper-bootstrap-wizard">here.</a>
	        </div>
	    </div>
	</div>

</body>

	<!--   Core JS Files   -->
	<script src="<?php echo base_url().'assets2/'; ?>js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url().'assets2/'; ?>js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url().'assets2/'; ?>js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="<?php echo base_url().'assets2/'; ?>js/paper-bootstrap-wizard.js" type="text/javascript"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="<?php echo base_url().'assets2/'; ?>js/jquery.validate.min.js" type="text/javascript"></script>

</html>
