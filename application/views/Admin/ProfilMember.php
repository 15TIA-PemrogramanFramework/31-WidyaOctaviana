	<?php

	$data['alamat']="<li class='active'><a href='".site_url('Dashboard/Member')."'>Member</a></li>";
$data['alamatactive']="anggota";

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
													<img id="avatar" class="editable img-responsive" alt="Alex's Avatar" src="<?php echo base_url().'assets/image/'.$member->foto; ?>" />
												</span>

												<div class="space-4"></div>

												<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
													<div class="inline position-relative">
															<span class="white"><?php echo $member->nama ?></span>
														</a>

													

													</div>
												</div>
											</div>

											<div class="space-6"></div>

											<div class="profile-contact-info">
													<button id="id-btn-dialog2" style="width: 300px;height: 70px" class="btn btn-app btn-danger btn-sm">
											<i class="ace-icon fa fa-trash-o bigger-200"></i>
											Delete
										</button>
											</div>

											<div class="hr hr12 dotted"></div>

											<div class="clearfix">
												<div class="grid2" style="width: 90px">
													<a href="<?php echo site_url('Dashboard/TransaksiMember/'.$member->username) ?>">
													<span class="bigger-175 blue">
														<?php print $bTransaksi; ?></span>
													<br />
													Transaksi </a>
												</div>

												<div class="grid2" style="width: 90px">
													<a href="<?php echo site_url('Dashboard/TestimoniMember/'.$member->username) ?>">
													<span class="bigger-175 blue"><?php echo $bTestimoni ?></span>

													<br />
													Testimoni </a>
												</div>

												<div class="grid2" style="width: 90px">
													<a href="<?php echo site_url('Dashboard/KomentarMember/'.$member->username) ?>">
													<span class="bigger-175 blue"><?php echo $bKomentar ?></span>

													<br />
													Komentar</a>
												</div>
											</div>

											<div class="hr hr16 dotted"></div>
										</div>

										<div class="col-xs-12 col-sm-9">
											

											<div class="space-12"></div>

											<div class="profile-user-info profile-user-info-striped">
												<div class="profile-info-row">
													<div class="profile-info-name"> Username </div>

													<div class="profile-info-value">
														<span class="editable" id="username"><?php echo $member->username ?></span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Email </div>

													<div class="profile-info-value">
														
														<span class="editable" id="country"><?php echo $member->email ?></span>
														
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Nama </div>

													<div class="profile-info-value">
														<span class="editable" id="age"><?php echo $member->nama ?></span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Tanggal lahir </div>

													<div class="profile-info-value">
														<span class="editable" id="signup"><?php echo $member->tanggal_lahir ?></span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Alamat  </div>

													<i class="fa fa-map-marker light-orange bigger-110"></i>
														<span class="editable" id="country"><?php echo $member->alamat ?></span>
														
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Nomor Handphone </div>

													<div class="profile-info-value">
														<span class="editable" id="about"><?php echo $member->no_hp ?></span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Waktu Registrasi </div>

													<div class="profile-info-value">
														<span class="editable" id="about"><?php echo $member->waktu_regis ?></span>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>

							


									

										

										<div id="dialog-confirm" class="hide">
											<div class="alert alert-info bigger-110">
												Data Member Yang dihapus tidak bisa dikembalikan.
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
						title: "<div class='widget-header'><h4 class='smaller'><i class='ace-icon fa fa-exclamation-triangle red'></i> hapus Member?</h4></div>",
						title_html: true,
						buttons: [
							{
								html: "<i class='ace-icon fa fa-trash-o bigger-110'></i>&nbsp;  Hapus",
								"class" : "btn btn-danger btn-minier",
								click: function() {
									window.location.href = "<?php echo site_url('Dashboard/DeleteMember/'.$member->username) ?>";
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

