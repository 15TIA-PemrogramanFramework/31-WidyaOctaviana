<?php

$data['alamat']="<li class='active'><a href='".site_url('Dashboard/Admin')."'>Admin</a></li>";
$data['alamatactive']="anggota";

$this->load->view('Admin/Header',$data); ?>
<style type="text/css">
	.tulisan{
		color: red;
	}
</style>
<div>
	<div id="user-profile-3" class="user-profile row">
		<div class="col-sm-offset-1 col-sm-10">

			<img id="avatar" style="display:none" class="editable img-responsive" alt="Foto" src="<?php echo base_url().'assets/image/'.$foto; ?>" />

			<div class="space"></div>


			<form class="form-horizontal" action="<?php echo $action1 ?>"  method="post" enctype="multipart/form-data" >

				<div class="tabbable">
					<ul class="nav nav-tabs padding-16">
						<li class="active">
							<a data-toggle="tab" href="#edit-basic">
								<i class="green ace-icon fa fa-pencil-square-o bigger-125"></i>
								Basic Info
							</a>
						</li>

						<li>
							<a data-toggle="tab" href="#edit-password">
								<i class="blue ace-icon fa fa-key bigger-125"></i>
								Password
							</a>
						</li>
					</ul>



					<div class="tab-content profile-edit-tab-content">
						<div id="edit-basic" class="tab-pane <?php echo $editdata ?>">

			<input type="hidden" name="username" value="<?php echo 	$this->session->userdata('admin')->username ?>">
			<input type="hidden" name="emaildulu" value="<?php echo 	$this->session->userdata('admin')->email ?>">

							<input type="hidden" name="gambardulu" value="<?php echo $foto ?>">
							<h4 class="header blue bolder smaller">General</h4>

							<div class="row">
								<div class="col-xs-12 col-sm-4">
									<input type="file" name="gambar" />
								</div>

								<div class="vspace-12-sm"></div>

								<div class="col-xs-12 col-sm-8">
									<div class="form-group">
										<label class="col-sm-4 control-label no-padding-right" for="form-field-username">Nama</label>

										<div class="col-sm-8">
				<input class="col-xs-12 col-sm-10" 	name="nama"
											type="text" id="form-field-username" placeholder="nama" value="<?php echo $nama ?>"
											/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-4 control-label no-padding-right" for="form-field-date">Tanggal Lahir</label>

										<div class="col-sm-8">
											<div class="input-medium">
												<div class="input-group">
								<input value="<?php echo $tanggal_lahir?>" name="tanggal_lahir"
													class="input-medium date-picker" id="form-field-date" type="text" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" />
													<span class="input-group-addon">
														<i class="ace-icon fa fa-calendar"></i>
													</span>
												</div>
											</div>
										</div>
									</div>


									<div class="form-group">
										<label class="col-sm-4 control-label no-padding-right" for="form-field-email">Email</label>

										<div class="col-sm-8">
											<span class="input-icon input-icon-right">
												<input name="email" value="<?php echo $email ?>" type="email" id="form-field-email" value="alexdoe@gmail.com" />
												<i class="ace-icon fa fa-envelope" ></i>
												<div class="tulisan"><?php echo form_error('email'); ?></div>
											</span>
										</div>
									</div>



								</div>
							</div>

							<hr />





							<div class="space-4"></div>
							<div class="clearfix form-actions">
								<div class="col-md-offset-3 col-md-9">
									<button class="btn btn-info" type="submit">
										<i class="ace-icon fa fa-check bigger-110"></i>
										Save
									</button>
									

								</div>
							</div>
</form>
						</div>



						<div id="edit-password" class="tab-pane <?php echo $editpass ?>">
							<div class="space-10"></div>

							<form action="<?php echo $action2 ?>" method="POST">
			<input type="hidden" name="username" value="<?php echo 	$this->session->userdata('admin')->username ?>">
			<input type="hidden" name="passworddulu" value="<?php echo 	$this->session->userdata('admin')->password ?>">

								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-pass1">Password sebelumnya</label>

									<div class="col-sm-9">
										<input type="password" id="form-field-pass1"  name="passwordlama"  />
										<div class="tulisan"><?php echo $kata; ?></div>
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-pass1">New Password</label>

									<div class="col-sm-9">
										<input type="password" id="form-field-pass1"  name="password" value="<?php echo $password ?>" />
										<div class="tulisan"><?php echo form_error('password'); ?></div>
									</div>
								</div>

								<div class="space-4"></div>

								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-pass2">Ulangi Password</label>

									<div class="col-sm-9">
										<input value="<?php echo $repassword ?>" type="password" id="form-field-pass2" name="repassword"/>
										<div class="tulisan"><?php echo form_error('repassword'); ?></div>
									</div>
								</div>

								<div class="clearfix form-actions">
									<div class="col-md-offset-3 col-md-9">
										<button class="btn btn-info" type="submit">
											<i class="ace-icon fa fa-check bigger-110"></i>
											Save
										</button>


									</div>
								</div>
							</div>
</form>


							
						</div>
					</div>



				</div><!-- /.span -->
			</div><!-- /.user-profile -->
		</div>
		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="<?php echo base_url().'assetsadmin/'; ?>js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="<?php echo base_url().'assetsadmin/'; ?>js/jquery-1.11.3.min.js"></script>
<![endif]-->
<script type="text/javascript">
	if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url().'assetsadmin/'; ?>js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="<?php echo base_url().'assetsadmin/'; ?>js/bootstrap.min.js"></script>

<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="<?php echo base_url().'assetsadmin/'; ?>js/excanvas.min.js"></script>
		<![endif]-->
		<script src="<?php echo base_url().'assetsadmin/'; ?>js/jquery-ui.custom.min.js"></script>
		<script src="<?php echo base_url().'assetsadmin/'; ?>js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo base_url().'assetsadmin/'; ?>js/jquery.gritter.min.js"></script>
		<script src="<?php echo base_url().'assetsadmin/'; ?>js/bootbox.js"></script>
		<script src="<?php echo base_url().'assetsadmin/'; ?>js/jquery.easypiechart.min.js"></script>
		<script src="<?php echo base_url().'assetsadmin/'; ?>js/bootstrap-datepicker.min.js"></script>
		<script src="<?php echo base_url().'assetsadmin/'; ?>js/jquery.hotkeys.index.min.js"></script>
		<script src="<?php echo base_url().'assetsadmin/'; ?>js/bootstrap-wysiwyg.min.js"></script>
		<script src="<?php echo base_url().'assetsadmin/'; ?>js/select2.min.js"></script>
		<script src="<?php echo base_url().'assetsadmin/'; ?>js/spinbox.min.js"></script>
		<script src="<?php echo base_url().'assetsadmin/'; ?>js/bootstrap-editable.min.js"></script>
		<script src="<?php echo base_url().'assetsadmin/'; ?>js/ace-editable.min.js"></script>
		<script src="<?php echo base_url().'assetsadmin/'; ?>js/jquery.maskedinput.min.js"></script>

		<!-- ace scripts -->
		<script src="<?php echo base_url().'assetsadmin/'; ?>js/ace-elements.min.js"></script>
		<script src="<?php echo base_url().'assetsadmin/'; ?>js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {

				

				///////////////////////////////////////////
				$('#user-profile-3')
				.find('input[type=file]').ace_file_input({
					style:'well',
					btn_choose:'Ganti Foto',
					btn_change:null,
					no_icon:'ace-icon fa fa-picture-o',
					thumbnail:'large',
					droppable:true,
					
					allowExt: ['jpg', 'jpeg', 'png', 'gif'],
					allowMime: ['image/jpg', 'image/jpeg', 'image/png']
				})
			
				.end().find('.date-picker').datepicker().next().on(ace.click_event, function(){
					$(this).prev().focus();
				})
				

				$('#user-profile-3').find('input[type=file]').ace_file_input('show_file_list', [{type: 'image', name: $('#avatar').attr('src')}]);


				////////////////////
				//change profile
				
				
				
				
			});
		</script>
	</body>
	</html>