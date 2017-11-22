	<?php

	$data['alamat']="<li class='active'><a href='".site_url('Dashboard/Barang')."'>Barang</a></li>";
$data['alamatactive']="barang";

	$this->load->view('Admin/Header',$data); ?>
	<link rel="stylesheet" href="<?php echo base_url().'assetsadmin/'; ?>css/jquery-ui.min.css" />


						<div class="page-header">
							<h1>
								User Profile Page
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									3 styles with inline editable feature
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="clearfix">
									

									
								</div>

								

								<div>
									<div id="user-profile-1" class="user-profile row">
										<div class="col-xs-12 col-sm-3 center">
											<div>
												<span class="profile-picture">
													<img id="avatar" class="editable img-responsive" alt="Alex's Avatar" src="<?php echo base_url().'assets/image/'.$barang->gambar_barang; ?>" />
												</span>

												<div class="space-4"></div>

												<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
													<div class="inline position-relative">
															<span class="white"><?php echo $barang->nama_barang?></span>
														</a>

													

													</div>
												</div>
											</div>

											<div class="space-6"></div>

											<div class="profile-contact-info">
													<button id="id-btn-dialog2" style="width: 100px;height: 70px" class="btn btn-app btn-danger btn-sm">
											<i class="ace-icon fa fa-trash-o bigger-200"></i>
											Delete
										</button>
										<a href="<?php echo site_url('Dashboard/EditBarang/'.$barang->id_barang) ?>">
											<button style="width: 100px;height: 70px" class="btn btn-app btn-primary btn-sm">
											<i class="ace-icon fa fa-pencil-square-o bigger-200"></i>
											Edit
										</button>
										</a>
											</div>

											<div class="hr hr12 dotted"></div>

											<div class="hr hr16 dotted"></div>
										</div>

										<div class="col-xs-12 col-sm-9">
											

											<div class="space-12"></div>

											<div class="profile-user-info profile-user-info-striped">
												<div class="profile-info-row">
													<div class="profile-info-name"> Nama Barang </div>

													<div class="profile-info-value">
														<span class="editable" id="username"><?php echo $barang->nama_barang ?></span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Harga Barang </div>

													<div class="profile-info-value">
														
														<span class="editable" id="country"><?php echo $barang->harga_barang ?></span>
														
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Stok Barang </div>

													<div class="profile-info-value">
														<span class="editable" id="age"><?php echo $barang->stok_barang ?></span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Total Pembelian </div>

													<div class="profile-info-value">
					<span class="editable" id="signup">
<?php if ($jumlahjual->jumlahjual==null): ?>
	<?php echo "0" ;?>
<?php endif ?>
<?php if ($jumlahjual->jumlahjual!=null): ?>
	<?php echo $jumlahjual->jumlahjual; ?>
<?php endif ?>
														</span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Detail Barang  </div>

													
														<span class="editable" id="country"><?php echo $barang->detail_barang ?></span>
														
												</div>

											
											</div>

										</div>
									</div>
								</div>

							


									

										

										<div id="dialog-confirm" class="hide">
											<div class="alert alert-info bigger-110">
												Data Barang Yang dihapus tidak bisa dikembalikan.
											</div>

											<div class="space-6"></div>
											<p class="bigger-110 bolder center grey">
												<i class="ace-icon fa fa-hand-o-right blue bigger-120"></i>
												Apakah anda Yakin?
											</p>
										</div><!-- #dialog-confirm -->
								



										
										</div><!-- /.span -->
									</div><!-- /.user-profile -->
								</div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->



		<script src="<?php echo base_url().'assetsadmin/'; ?>/js/jquery-2.1.4.min.js"></script>

	
		
		<script src="<?php echo base_url().'assetsadmin/'; ?>/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->
		<script src="<?php echo base_url().'assetsadmin/'; ?>/js/jquery-ui.min.js"></script>
	

		

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			
			
			
			
				//override dialog's title function to allow for HTML titles
				$.widget("ui.dialog", $.extend({}, $.ui.dialog.prototype, {
					_title: function(title) {
						var $title = this.options.title || '&nbsp;'
						if( ("title_html" in this.options) && this.options.title_html == true )
							title.html($title);
						else title.text($title);
					}
				}));
			
				
			
			
				$( "#id-btn-dialog2" ).on('click', function(e) {
					e.preventDefault();
				
					$( "#dialog-confirm" ).removeClass('hide').dialog({
						resizable: false,
						width: '320',
						modal: true,
						title: "<div class='widget-header'><h4 class='smaller'><i class='ace-icon fa fa-exclamation-triangle red'></i> hapus Barang?</h4></div>",
						title_html: true,
						buttons: [
							{
								html: "<i class='ace-icon fa fa-trash-o bigger-110'></i>&nbsp;  Hapus",
								"class" : "btn btn-danger btn-minier",
								click: function() {
									window.location.href = "<?php echo site_url('Dashboard/DeleteBarang/'.$barang->id_barang) ?>";
								}
							}
							,
							{
								html: "<i class='ace-icon fa fa-times bigger-110'></i>&nbsp; Cancel",
								"class" : "btn btn-minier",
								click: function() {
									$( this ).dialog( "close" );
								}
							}
						]
					});
				});
			
			
				
					
			});
		</script>
<?php $this->load->view('Admin/Footer') ?>

