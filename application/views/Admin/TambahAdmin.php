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

			<img id="avatar" style="display:none" class="editable img-responsive" alt="Foto" 

 			src="<?php echo base_url().'assetsadmin/'?>/images/avatars/profile-pic.jpg" />

			<div class="space"></div>


			<form class="form-horizontal" action="<?php echo $action ?>"  method="post" enctype="multipart/form-data" >

				<div class="tabbable">
				<div class="tab-content profile-edit-tab-content">
						<div>
<input type="hidden" name="gambardulu" value="profile-pic.jpg">
						
							<h4 class="header blue bolder smaller">Form Pendaftaran </h4>

							<div class="row">
								<div class="col-xs-12 col-sm-4">
									<input type="file" name="gambar" />
								</div>

								<div class="vspace-12-sm"></div>

								<div class="col-xs-12 col-sm-8">
									<div class="form-group">
										<label class="col-sm-4 control-label no-padding-right" for="form-field-username">Username</label>

										<div class="col-sm-8">
											<input class="col-xs-12 col-sm-10" 	name="username"
											type="text" id="form-field-username" placeholder="Username" value="<?php echo $username ?>"
											/>
										</div>
										<div class="tulisan"><?php echo form_error('username'); ?></div>
									</div>
								
								<div class="form-group">
										<label class="col-sm-4 control-label no-padding-right" for="form-field-username">Nama</label>

										<div class="col-sm-8">
											<input class="col-xs-12 col-sm-10" 	name="nama"
											type="text" id="form-field-username" placeholder="nama" value="<?php echo $nama ?>"
											/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-4 control-label no-padding-right" for="form-field-email">Email</label>

										<div class="col-sm-8">
											<span class="input-icon input-icon-right">
												<input name="email" value="<?php echo $email ?>" type="email" id="form-field-email" placeholder="alexdoe@gmail.com" />
												<i class="ace-icon fa fa-envelope" ></i>
												<div class="tulisan"><?php echo form_error('email'); ?></div>
											</span>
										</div>
									</div>

								</div>
							</div>

							<hr />





						
					</div>



					
<hr />
															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-date">tanggal lahir</label>

																<div class="col-sm-9">
																	<div class="input-medium">
																		<div class="input-group">
																			<input 
																			name="tanggal_lahir"
															value="<?php echo $tanggal_lahir ?>" 
																			class="input-medium date-picker" id="form-field-date" type="text" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" />
																			<span class="input-group-addon">
																				<i class="ace-icon fa fa-calendar"></i>
																			</span>
																		</div>
																	</div>
																</div>
															</div>

															<div class="space-4"></div>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right">Status</label>

																<div class="col-sm-9">
																	<label class="inline">
																		<input  type="radio" class="ace"
	name="status" value="karyawan" <?php if($status="karyawan"){echo "checked";} ?>
																		 />
																		<span class="lbl middle"> Karyawan</span>
																	</label>

																	&nbsp; &nbsp; &nbsp;
																	<label class="inline">
<input <?php if($status="admin"){echo "checked";} ?> type="radio" class="ace"
																		name="status" value="admin"
																		 />
																		<span class="lbl middle"> Admin</span>
																	</label>


																	&nbsp; &nbsp; &nbsp;
																	<label class="inline">
		<input <?php if($status="karyawan"){echo "pemilik";} ?> name="status" value="pemilik"
																		 type="radio" class="ace" />
																		<span class="lbl middle"> Pemilik</span>
																	</label>
																</div>
															</div>

															<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-username">Password</label>

										<div class="col-sm-7">
											<input class="col-xs-12 col-sm-10" 	name="password"
											type="password" id="form-field-username"  value="<?php echo $password ?>"
											/>
											<div class="tulisan"><?php echo form_error('password'); ?></div>
										</div>
									</div>
								
								<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-username">Re- password</label>

										<div class="col-sm-7">
											<input class="col-xs-12 col-sm-10" 	name="repassword"
											type="password" id="form-field-username" placeholder="nama" value="<?php echo $repassword ?>"
											/>
											<div class="tulisan"><?php echo form_error('repassword'); ?></div>
										</div>
									</div>



														
	<div class="space-4"></div>
							<div class="clearfix form-actions">
								<div class="col-md-offset-3 col-md-9">
									<button class="btn btn-info" type="submit">
										<i class="ace-icon fa fa-check bigger-110"></i>
										Daftar
									</button>
									

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