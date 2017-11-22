	<?php

	$data['alamat']="<li class='active'><a href='".site_url('Dashboard')."'>Dashboard</a></li>";
$data['alamatactive']="dashboard";


	$this->load->view('Admin/Header',$data); ?>
	<div class="page-content">

		<?php 
		$banyaktransaksi=count($semuatransaksi);
		$halaman='Dashboard';

		if ($banyaktransaksi>5) {
			$banyaktransaksi=5;
		}

		?>
		<div class="row">
			<div class="col-xs-12">
				<div class="row">
					<div class="col-xs-12">
						<table id="simple-table" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>Username</th>
									<th class="detail-col">Bukti Transaksi</th>
									<th><i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>Tanggal Transaksi</th>
									<th>Total Transaksi</th>
									<th class="hidden-480">Alamat Tujuan</th>

									<th>

										Nomor Handphone
									</th>
									<th class="hidden-480">Kode Pembayaran</th>

									<th>Status Bukti</th>
								</tr>
							</thead>

							<tbody>
								<?php for($i=0;$i<$banyaktransaksi;$i++){ 
									$transaksi=$semuatransaksi[$i];
									?>
									<tr>

										<td>
											<a href="<?php echo site_url('Dashboard/ProfilMember/'.$transaksi->username) ?>"><?php echo $transaksi->username ?></a>	
											
												

											</td>
										<td class="center">

											<?php if($transaksi->bukti_transaksi!='belum'){ ?>
											<div class="action-buttons">
												<a href="#" class="green bigger-140 show-details-btn" title="Show Details">
													<i class="ace-icon fa fa-angle-double-down"></i>
													<span class="sr-only">Details</span>
												</a>
											</div>
											<?php }else{echo "Belum Upload"; }?>
										</td>

										<td>
											<a href="#"><?php echo $transaksi->tanggal_transaksi; ?></a>
										</td>
										<td><?php echo $transaksi->total_transaksi ?></td>
										<td class="hidden-480"><?php echo $transaksi->alamat_tujuan ?></td>
										<td><?php echo $transaksi->nohp ?></td>

										<td class="hidden-480">
											<?php echo $transaksi->kode_pembayaran ?>
										</td>
										<?php 
										$status=$transaksi->validasi_bukti;
										$class="";
										if($status=='valid'){
											$class="label label-sm label-success";
										}else if ($status=='tidak valid') {
											$class="label label-sm label-danger";
										}else{
											$class="label label-sm label-warning";
										}
										?>
										<td>
											<span class="<?php echo($class)?>">
												<?php echo $transaksi->validasi_bukti; ?>
											</span>

										</td>

									</tr>

									<tr class="detail-row">
										<td colspan="8">

											<div class="table-detail">
												<div class="row">
													<div class="col-xs-12 col-sm-6">
														<div class="text-center">
															<img height="300" width="300PX"  class="thumbnail inline no-margin-bottom" alt="Bukti transaksi belum diupload" src="<?php echo base_url().'assets/image/'.$transaksi->bukti_transaksi; ?>"/>
															<br />
														</div>
													</div>

													<div class="col-xs-12 col-sm-3">
														<div class="space visible-xs"></div>
														<h4 class="header blue lighter less-margin">Validasi Bukti</h4>

														<div class="space-6"></div>
														<form action="<?php echo site_url('Transaksi/updateStatus') ?>" method="post">
															<fieldset>
																<select class="form-control" id="form-field-select-1" name="validasi_bukti">
																	<option value="tidak Valid">Tidak Valid</option>
																	<option value="valid">Valid</option>

																</select>
																<input type="hidden" name="halaman"  value="<?php echo($halaman) ?>">
																<input type="hidden" name="id_transaksi" value="<?php echo $transaksi->id_transaksi; ?>">
															</fieldset>
															<div class="hr hr-dotted"></div>
															<div class="clearfix">

																<button class="pull-right btn btn-sm btn-primary btn-white btn-round" type="Submit">
																	Submit
																	<i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>


																</button>
															</div>
														</form>
													</div>
												</div>
											</div>
										</td>
									</tr>

									<?php } ?>
								</tbody>
							</table>
						</div><!-- /.span -->
					</div><!-- /.row -->
					<div class="hr hr-18 dotted hr-double"></div>
					<!-- PAGE CONTENT ENDS -->
				</div><!-- /.col -->
				<div class="col-sm-6">
					<div class="widget-box transparent" id="recent-box">
						<div class="widget-header">
							<h4 class="widget-title lighter smaller">
								<i class="ace-icon fa fa-rss orange"></i>Anggota Terbaru
							</h4>

	<?php 
		$banyakmember=count($semuamember);
		

		if ($banyakmember>9) {
			$banyakmember=9;
		}

		?>
							<div class="widget-toolbar no-border">
								<ul class="nav nav-tabs" id="recent-tab">


									<li class="active">
										<a data-toggle="tab" href="#member-tab">Members</a>
									</li>

									<li>
										<a data-toggle="tab" href="#karyawan-tab">Karyawan</a>
									</li>
								</ul>
							</div>
						</div>

						<div class="widget-body">
							<div class="widget-main padding-4">
								<div class="tab-content padding-8">


									<div id="member-tab" class="tab-pane active">
										<div class="clearfix">
												<?php for($i=0;$i<$banyakmember;$i++){ 
									$member=$semuamember[$i];
									?>
											<div class="itemdiv memberdiv">
												<div class="user">
								<img alt="foto" src="<?php echo base_url().'assets/image/'.$member->foto; ?>" />
												</div>

												<div class="body">
													<div class="name">
														<a href="<?php echo site_url('Dashboard/ProfilMember/'.$member->username) ?>"><?php echo $member->username ?></a>	
													</div>

													<div class="time">
														<i class="ace-icon fa fa-clock-o"></i>
													</div>

													
												</div>
											</div>

<?php } ?>
</div>
										<div class="space-4"></div>

										<div class="center">
											<i class="ace-icon fa fa-users fa-2x green middle"></i>

											&nbsp;
											<a href="<?php echo site_url('Dashboard/Member') ?>" class="btn btn-sm btn-white btn-info">
												Lihat Semua Anggota &nbsp;
												<i class="ace-icon fa fa-arrow-right"></i>
											</a>
										</div>

										<div class="hr hr-double hr8"></div>
									</div>



<?php 
		$banyakkaryawan=count($semuakaryawan);
		

		if ($banyakkaryawan>9) {
			$banyakkaryawan=9;
		}

		?>



<div id="karyawan-tab" class="tab-pane">
										<div class="clearfix">
												<?php for($i=0;$i<$banyakkaryawan;$i++){ 
									$Karyawan=$semuakaryawan[$i];
									?>
											<div class="itemdiv memberdiv">
												<div class="user">
													<img alt="foto" src="<?php echo base_url().'assets/image/'.$Karyawan->foto; ?>" />
												</div>

												<div class="body">
													<div class="name">
														<a href="<?php echo site_url('Dashboard/ProfilAdmin/'.$Karyawan->username) ?>"><?php echo $Karyawan->username ?></a>
														
													</div>

													<div class="time">
														<i class="ace-icon fa fa-clock-o"></i>
													</div>

													<div>
														<span class="label label-warning label-sm">pending</span>

														<div class="inline position-relative">
															<button class="btn btn-minier btn-yellow btn-no-border dropdown-toggle" data-toggle="dropdown" data-position="auto">
																<i class="ace-icon fa fa-angle-down icon-only bigger-120"></i>
															</button>

															<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																<li>
																	<a href="#" class="tooltip-success" data-rel="tooltip" title="Approve">
																		<span class="green">
																			<i class="ace-icon fa fa-check bigger-110"></i>
																		</span>
																	</a>
																</li>

																<li>
																	<a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject">
																		<span class="orange">
																			<i class="ace-icon fa fa-times bigger-110"></i>
																		</span>
																	</a>
																</li>

																<li>
																	<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																		<span class="red">
																			<i class="ace-icon fa fa-trash-o bigger-110"></i>
																		</span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>

<?php } ?>
</div>
										<div class="space-4"></div>

										<div class="center">
											<i class="ace-icon fa fa-users fa-2x green middle"></i>

											&nbsp;
											<a href="<?php echo site_url('Dashboard/Admin') ?>" class="btn btn-sm btn-white btn-info">
												Lihat semua Karyawan &nbsp;
												<i class="ace-icon fa fa-arrow-right"></i>
											</a>
										</div>

										<div class="hr hr-double hr8"></div>
									</div>




								</div>
							</div><!-- /.widget-main -->
						</div><!-- /.widget-body -->
					</div><!-- /.widget-box -->
				</div><!-- /.col -->


				<div class="col-sm-6">
					<div class="widget-box transparent" id="recent-box">
						<div class="widget-header">
							<h4 class="widget-title lighter smaller">
								<i class="ace-icon fa fa-rss orange"></i>Komentar Terbaru
							</h4>

							<div class="widget-toolbar no-border">
								<ul class="nav nav-tabs" id="recent-tab">


									<li class="active">
										<a data-toggle="tab" href="#komentar-tab">Komentar</a>
									</li>

									<li>
										<a data-toggle="tab" href="#testimoni-tab">Testimoni</a>
									</li>
								</ul>
							</div>
						</div>

						<div class="widget-body">
							<div class="widget-main padding-4">
								<div class="tab-content padding-8">


									<div id="komentar-tab" class="tab-pane active">
										<div class="comments">


<?php 
		$banyakkomentar=count($semuakomentar);
		

		if ($banyakkomentar>3) {
			$banyakkomentar=3;
		}

		?>

		<?php for($i=0;$i<$banyakkomentar;$i++){ 
									$komentar=$semuakomentar[$i];
									?>
<div class="itemdiv commentdiv">
												<div class="user">
													<img alt="Joe's Avatar" src="<?php echo base_url().'assets/image/'.$komentar->foto; ?>" />
												</div>

												<div class="body">
													<div class="name">
														<a href="<?php echo site_url('Dashboard/ProfilMember/'.$komentar->username) ?>"><?php echo $komentar->username ?></a>
														
													</div>

													<div class="time">
														<i class="ace-icon fa fa-clock-o"></i>
													</div>

													<div class="text">
														<i class="ace-icon fa fa-quote-left"></i>
														<?php echo $komentar->isi_komentar; ?> &hellip;
													</div>
												</div>

												<div class="tools">
													<div class="action-buttons bigger-125">
														<a href="#">
															<i class="ace-icon fa fa-pencil blue"></i>
														</a>

														<a href="#">
															<i class="ace-icon fa fa-trash-o red"></i>
														</a>
													</div>
												</div>
											</div>
											<?php } ?>
										</div>

										<div class="hr hr8"></div>

										<div class="center">
											<i class="ace-icon fa fa-comments-o fa-2x green middle"></i>

											&nbsp;
											<a href="<?php echo site_url('Dashboard/Komentar') ?>" class="btn btn-sm btn-white btn-info">
												Lihat Semua Komentar &nbsp;
												<i class="ace-icon fa fa-arrow-right"></i>
											</a>
										</div>

										<div class="hr hr-double hr8"></div>
									</div><!-- /.#member-tab -->


									<div id="testimoni-tab" class="tab-pane">
										<?php 
		$banyaktesti=count($semuatesti);
		

		if ($banyaktesti>3) {
			$banyaktesti=3;
		}

		?>

		
										<div class="comments">
											<?php for($i=0;$i<$banyaktesti;$i++){ 
									$testi=$semuatesti[$i];
									?>
											<div class="itemdiv commentdiv">
												<div class="user">
													<img alt="Bob Doe's Avatar" src="<?php echo base_url().'assets/image/'.$testi->foto; ?>" />
												</div>

												<div class="body">
													<div class="name">
														<a href="<?php echo site_url('Dashboard/ProfilMember/'.$testi->username) ?>"><?php echo $testi->username ?></a>
													
													</div>

													<div class="time">
														<i class="ace-icon fa fa-clock-o"></i>
													</div>

													<div class="text">
														<i class="ace-icon fa fa-quote-left"></i>
<?php echo $testi->isi_testimoni ?>													</div>
												</div>

												<div class="tools">
													<div class="inline position-relative">
														<button class="btn btn-minier bigger btn-yellow dropdown-toggle" data-toggle="dropdown">
															<i class="ace-icon fa fa-angle-down icon-only bigger-120"></i>
														</button>

														<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
															<li>
																<a href="#" class="tooltip-success" data-rel="tooltip" title="Approve">
																	<span class="green">
																		<i class="ace-icon fa fa-check bigger-110"></i>
																	</span>
																</a>
															</li>

															<li>
																<a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject">
																	<span class="orange">
																		<i class="ace-icon fa fa-times bigger-110"></i>
																	</span>
																</a>
															</li>

															<li>
																<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																	<span class="red">
																		<i class="ace-icon fa fa-trash-o bigger-110"></i>
																	</span>
																</a>
															</li>
														</ul>
													</div>
												</div>
											</div>

										<?php } ?>

										</div>

										<div class="hr hr8"></div>

										<div class="center">
											<i class="ace-icon fa fa-comments-o fa-2x green middle"></i>

											&nbsp;
											<a href="<?php echo site_url('Dashboard/Testimoni') ?>" class="btn btn-sm btn-white btn-info">
												Lihat Semua Testimoni &nbsp;
												<i class="ace-icon fa fa-arrow-right"></i>
											</a>
										</div>

										<div class="hr hr-double hr8"></div>
									</div>
								</div>
							</div><!-- /.widget-main -->
						</div><!-- /.widget-body -->
					</div><!-- /.widget-box -->
				</div><!-- /.col -->	



			</div><!-- /.row -->
		</div><!-- /.page-content -->
	</div>
</div><!-- /.main-content -->

<div class="footer">
	<div class="footer-inner">
		<div class="footer-content">
			<span class="bigger-120">
				<span class="blue bolder">Ace</span>
				Application &copy; 2013-2014
			</span>

			&nbsp; &nbsp;
			<span class="action-buttons">
				<a href="#">
					<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
				</a>

				<a href="#">
					<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
				</a>

				<a href="#">
					<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
				</a>
			</span>
		</div>
	</div>
</div>

<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
	<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
</a>
</div><!-- /.main-container -->

<!-- basic scripts -->
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
<script src="<?php echo base_url().'assetsadmin/'; ?>js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url().'assetsadmin/'; ?>js/jquery.dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url().'assetsadmin/'; ?>js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url().'assetsadmin/'; ?>js/buttons.flash.min.js"></script>
<script src="<?php echo base_url().'assetsadmin/'; ?>js/buttons.html5.min.js"></script>
<script src="<?php echo base_url().'assetsadmin/'; ?>js/buttons.print.min.js"></script>
<script src="<?php echo base_url().'assetsadmin/'; ?>js/buttons.colVis.min.js"></script>
<script src="<?php echo base_url().'assetsadmin/'; ?>js/dataTables.select.min.js"></script>

<!-- ace scripts -->
<script src="<?php echo base_url().'assetsadmin/'; ?>js/ace-elements.min.js"></script>
<script src="<?php echo base_url().'assetsadmin/'; ?>js/ace.min.js"></script>

<!-- inline scripts related to this page -->
<script type="text/javascript">

	jQuery(function($) {
					//initiate dataTables plugin
					
					
					//And for the first simple table, which doesn't have TableTools or dataTables
					//select/deselect all rows according to table header checkbox
					var active_class = 'active';
					$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
						var th_checked = this.checked;//checkbox inside "TH" table header
						
						$(this).closest('table').find('tbody > tr').each(function(){
							var row = this;
							if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
							else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
						});
					});
					
					//select/deselect a row when the checkbox is checked/unchecked
					$('#simple-table').on('click', 'td input[type=checkbox]' , function(){
						var $row = $(this).closest('tr');
						if($row.is('.detail-row ')) return;
						if(this.checked) $row.addClass(active_class);
						else $row.removeClass(active_class);
					});

					

					/********************************/
					//add tooltip for small view action buttons in dropdown menu
					$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
					
					//tooltip placement on right or left
					function tooltip_placement(context, source) {
						var $source = $(source);
						var $parent = $source.closest('table')
						var off1 = $parent.offset();
						var w1 = $parent.width();

						var off2 = $source.offset();
						//var w2 = $source.width();

						if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
						return 'left';
					}
					
					
					
					
					/***************/
					$('.show-details-btn').on('click', function(e) {
						e.preventDefault();
						$(this).closest('tr').next().toggleClass('open');
						$(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
					});
					/***************/
					
					
					
					
					
					/**
					//add horizontal scrollbars to a simple table
					$('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
					  {
						horizontal: true,
						styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
						size: 2000,
						mouseWheelLock: true
					  }
					).css('padding-top', '12px');
					*/


				})
			</script>
		</body>
		</html>
