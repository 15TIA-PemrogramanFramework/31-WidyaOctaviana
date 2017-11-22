	<?php

	$data['alamat']="<li class='active'><a href='".site_url('Dashboard/Admin')."'>Admin</a></li>";
$data['alamatactive']="anggota";

	$this->load->view('Admin/Header',$data); ?>
	<link rel="stylesheet" href="<?php echo base_url().'assetsadmin/'; ?>css/jquery-ui.min.css" />

<?php 
$adminlogin=$this->session->userdata('admin');
 ?>

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
								<img id="avatar" class="editable img-responsive" alt="Alex's Avatar" src="<?php echo base_url().'assets/image/'.$admin->foto; ?>" />
							</span>

							<div class="space-4"></div>

							<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
								<div class="inline position-relative">
									<span class="white"><?php echo $admin->username ?></span>
								</a>



							</div>
						</div>
					</div>

					<div class="space-6"></div>

<?php $statuhapus=false;
if($adminlogin->status=="pemilik"){
	$statuhapus=true;
}else if(($adminlogin->status=="admin")&&($admin->status!="pemilik")&&($admin->status!="admin")){
	$statuhapus=true;
}else{
	$statuhapus=false;
}
?>
<?php if($statuhapus==true){ ?>
					<div class="profile-contact-info">
						<button  id="id-btn-dialog2" style="width: 300px;height: 70px" class="btn btn-app btn-danger btn-sm">
							<i class="ace-icon fa fa-trash-o bigger-200"></i>
							Delete
						</button>
					</div>
<?php } ?>


					<div class="hr hr12 dotted"></div>


					<div class="hr hr16 dotted"></div>
				</div>

				<div class="col-xs-12 col-sm-9">


					<div class="space-12"></div>

					<div class="profile-user-info profile-user-info-striped">
						<div class="profile-info-row">
							<div class="profile-info-name"> Username </div>

							<div class="profile-info-value">
								<span class="editable" id="username"><?php echo $admin->username ?></span>
							</div>
						</div>

						<div class="profile-info-row">
							<div class="profile-info-name"> Email </div>

							<div class="profile-info-value">

								<span class="editable" id="country"><?php echo $admin->email ?></span>

							</div>
						</div>

						<div class="profile-info-row">
							<div class="profile-info-name"> Nama </div>

							<div class="profile-info-value">
								<span class="editable" id="age"><?php echo $admin->nama ?></span>
							</div>
						</div>

						<div class="profile-info-row">
							<div class="profile-info-name"> Tanggal lahir </div>

							<div class="profile-info-value">
								<span class="editable" id="signup"><?php echo $admin->tanggal_lahir ?></span>
							</div>
						</div>

						<div class="profile-info-row">
							<div class="profile-info-name"> Status  </div>
							<div class="profile-info-value">
								<span class="editable" id="country"><?php echo $admin->status ?></span>
							</div>

						</div>


						<div class="profile-info-row">
							<div class="profile-info-name"> Waktu Registrasi </div>

							<div class="profile-info-value">
								<span class="editable" id="about"><?php echo $admin->waktu_regis ?></span>
							</div>
						</div>

						






					</div>



 <?php if ($adminlogin->status=="pemilik"): ?>
 <div class="col-xs-12 col-sm-4">
					<div class="space visible-xs"></div>
					<h4 class="header blue lighter less-margin">Ubah Status</h4>

					<div class="space-6"></div>
					<form action="<?php echo site_url('Dashboard/EditStatusAdmin_aksi') ?>" method="post">
						<input type="hidden" name="username" value="<?php echo $admin->username ?>">
						<fieldset>
							<select class="form-control" id="form-field-select-1" name="status">
<option value="karyawan" <?php if($admin->status=="karyawan"){ echo "selected" ;} ?> >Karyawan</option>
								<option value="admin" <?php if($admin->status=="admin"){ echo "selected" ;} ?> >Admin</option>
								<option value="pemilik" <?php if($admin->status=="pemilik"){ echo "selected" ;} ?> >Pemilik</option>


							</select>
							<input type="hidden" name="halaman"  value="">
							<input type="hidden" name="id_transaksi" value="">
						</fieldset>
						<div class="hr hr-dotted"></div>
						<div class="clearfix">

							<button class="pull-right btn btn-sm btn-primary btn-white btn-round" type="Submit">
								Ubah
								<i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>


							</button>
						</div>
					</form>
				</div>	
 <?php endif ?>





				</div>
				
			</div>
		</div>








		<div id="dialog-confirm" class="hide">
			<div class="alert alert-info bigger-110">
				Data Karyawan Yang dihapus tidak bisa dikembalikan.
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


<?php $this->load->view('Admin/Footer') ?>

<script src="<?php echo base_url().'assetsadmin/'; ?>/js/jquery-2.1.4.min.js"></script>




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
						title: "<div class='widget-header'><h4 class='smaller'><i class='ace-icon fa fa-exclamation-triangle red'></i> hapus Karyawan?</h4></div>",
						title_html: true,
						buttons: [
						{
							html: "<i class='ace-icon fa fa-trash-o bigger-110'></i>&nbsp;  Hapus",
							"class" : "btn btn-danger btn-minier",
							click: function() {
								window.location.href = "<?php echo site_url('Dashboard/DeleteAdmin/'.$admin->username) ?>";
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


		
		

