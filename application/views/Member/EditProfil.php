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
<style type="text/css">
	.tulisan{
		color: red;
	}
</style>

<?php 
	$member=$this->session->userdata('member');

	$status=$this->session->userdata('status');

	 ?>
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">

		            <!--      Wizard container        -->
		            <div class="wizard-container">

		                <div class="card wizard-card" data-color="orange" id="wizardProfile">
		                   
		                <!--        You can switch " data-color="orange" "  with one of the next bright colors: "blue", "green", "orange", "red", "azure"          -->

		                    	

								<div class="wizard-navigation">
									
									<ul>
			                            <li>
											<a href="#about" data-toggle="tab">
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
														<img src="<?php echo base_url().'assets/image/'.$foto; ?>" class="picture-src" id="wizardPicturePreview" title="" />
														
														<input type="file" id="wizard-picture" name="gambar_barang" value="<?php echo $foto ?>">
														<input type="hidden" name="gambar_barang2" value="<?php echo $foto ?>">
													</div>
													<h6>Choose Picture</h6>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label>Nama<small>(required)</small></label>
													<input name="nama" type="text" value="<?php echo $nama ?>" class="form-control" placeholder="jaswenny...">
													<div class="tulisan"><?php echo form_error('nama'); ?></div>
													
												</div>
												<div class="form-group">
													<label>Tanggal lahir<small>(required)</small></label>
													<input value="<?php echo $tanggal_lahir ?>" name="tanggal_lahir" type="text" class="form-control" placeholder="dd/mm/yyyy...">
												</div>


											</div>
											<div class="col-sm-10 col-sm-offset-1">
												<div class="form-group">
													<label>No Handphone <small>(required)</small></label>
													<input value="<?php echo $no_hp ?>" name="no_hp" type="text" class="form-control" placeholder="082288278801">
												</div>
												<div class="form-group">
													<label>Alamat <small>(required)</small></label>
													<input value="<?php echo $alamat ?>" name="alamat" type="text" class="form-control" placeholder="Pekanbaru,jundul">
												</div>
												
												
											</div>
										</div>
		                            </div>
		                <input type="hidden" name="usernamelama" value="<?php echo $member->username?>">
		                            
		                        </div>
		                        <div class="wizard-footer">
		                            <div class="pull-right">
		                                <input type='button' class='btn btn-next btn-fill btn-warning btn-wd' name='next' value='Next' />
		                                <input type='submit' class='btn btn-finish btn-fill btn-warning btn-wd' name='finish' value='<?php echo $button ?>' />
		                                
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
<script type="text/javascript">
	function cekvalidasiusername(x) {

        var y = "";
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                y = this.responseText;
                var z = y.split("=", 5);

                if ((z[1] == "tidak") || (x == "")) {
                    document.getElementById('usernamevalid').style.color = "red";
                    document.getElementById('usernamevalid').innerHTML = 'tidak valid';

                } else {
                    document.getElementById('usernamevalid').style.color = "blue";
                    document.getElementById('usernamevalid').innerHTML = 'valid';
                }
            }
        };
        xmlhttp.open("GET", "ajax_validasi_username.jsp?username=" + x, true);
        xmlhttp.send();

    }
</script>