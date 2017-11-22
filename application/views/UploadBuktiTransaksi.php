$<?php $this->load->view('header') ?>

<section>
<div class="container">


		<link rel="stylesheet" href="<?php echo base_url()."assetsadmin/"; ?>css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo base_url().'assetsadmin/'; ?>font-awesome/4.5.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="<?php echo base_url().'assetsadmin/'; ?>css/fonts.googleapis.com.css" />
<link rel="stylesheet" href="<?php echo base_url().'assetsadmin/'; ?>css/ace1.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		



									<hr />
									<div class="row">
										<div class="col-sm-4">
											<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">Upload Bukti Pembayaran</h4>

													<div class="widget-toolbar">
														<a href="#" data-action="collapse">
															<i class="ace-icon fa fa-chevron-up"></i>
														</a>

														
													</div>
												</div>

												<div class="widget-body">
													<div class="widget-main">
														<div class="form-group">
															<div class="col-xs-12">
																<input multiple="" type="file" id="id-input-file-3" />
															</div>
														</div>

														<label>
															
															<span class="lbl"> Allow only images</span>
														</label>
													</div>
												</div>
											</div>
										</div>

									</div>

								

			
		<script src="<?php echo base_url().'assetsadmin/'; ?>js/jquery-2.1.4.min.js"></script>

	
		<script src="<?php echo base_url().'assetsadmin/'; ?>js/ace-elements.min.js"></script>
		<script src="<?php echo base_url().'assetsadmin/'; ?>js/ace.min.js"></script>

		<script type="text/javascript">
			jQuery(function($) {
				
			
			
				
				$('#id-input-file-1 , #id-input-file-2').ace_file_input({
					no_file:'No File ...',
					btn_choose:'Choose',
					btn_change:'Change',
					droppable:false,
					onchange:null,
					thumbnail:false //| true | large
					//whitelist:'gif|png|jpg|jpeg'
					//blacklist:'exe|php'
					//onchange:''
					//
				});
				//pre-show a file name, for example a previously selected file
				//$('#id-input-file-1').ace_file_input('show_file_list', ['myfile.txt'])
			
			
				$('#id-input-file-3').ace_file_input({
					style: 'well',
					btn_choose: 'Upload Bukti Pembayaran Disini',
					btn_change: null,
					no_icon: 'ace-icon fa fa-cloud-upload',
					droppable: true,
					whitelist:'gif|png|jpg|jpeg',
					thumbnail: 'small'//large | fit
					//,icon_remove:null//set null, to hide remove/reset button
					/**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
					/**,before_remove : function() {
						return true;
					}*/
					,
					
					preview_error : function(filename, error_code) {
						//name of the file that failed
						//error_code values
						//1 = 'FILE_LOAD_FAILED',
						//2 = 'IMAGE_LOAD_FAILED',
						//3 = 'THUMBNAIL_FAILED'
						//alert(error_code);
					}
			
				}).on('change', function(){
					//console.log($(this).data('ace_input_files'));
					//console.log($(this).data('ace_input_method'));
				});
				
				
			});
		</script>
	</body>
</html>
