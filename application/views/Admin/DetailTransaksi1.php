	<?php

	$data['alamat']="<li class='active'><a href='".site_url('Dashboard')."'>Dashboard</a></li>";

	$this->load->view('Admin/Header',$data); ?>

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
													<img id="avatar" class="editable img-responsive" alt="Alex's Avatar" src="<?php echo base_url().'assetsadmin/'; ?>images/avatars/profile-pic.jpg" />
												</span>

												<div class="space-4"></div>

												<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
													<div class="inline position-relative">
															<span class="white">Alex M. Doe</span>
														</a>

													

													</div>
												</div>
											</div>

											<div class="space-6"></div>

											<div class="profile-contact-info">
													<button style="width: 300px;height: 70px" class="btn btn-app btn-danger btn-sm">
											<i class="ace-icon fa fa-trash-o bigger-200"></i>
											Delete
										</button>
											</div>

											<div class="hr hr12 dotted"></div>


											<div class="hr hr16 dotted"></div>
										</div>

										<div class="col-xs-12 col-sm-9">
											

											<div class="space-12"></div>

											<div class="profile-user-info profile-user-info-striped">
												<div class="profile-info-row">
													<div class="profile-info-name"> Username </div>

													<div class="profile-info-value">
														<span class="editable" id="username">alexdoe</span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Email </div>

													<div class="profile-info-value">
														<i class="fa fa-map-marker light-orange bigger-110"></i>
														<span class="editable" id="country">Netherlands</span>
														
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Nama </div>

													<div class="profile-info-value">
														<span class="editable" id="age">38</span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Tanggal lahir </div>

													<div class="profile-info-value">
														<span class="editable" id="signup">2010/06/20</span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Status  </div>

													<i class="fa fa-map-marker light-orange bigger-110"></i>
														<span class="editable" id="country">Netherlands</span>
														
												</div>


												<div class="profile-info-row">
													<div class="profile-info-name"> Waktu Registrasi </div>

													<div class="profile-info-value">
														<span class="editable" id="about">Editable as WYSIWYG</span>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>

								<div class="hide">
									<div id="user-profile-2" class="user-profile">
										<div class="tabbable">
											<ul class="nav nav-tabs padding-18">
												<li class="active">
													<a data-toggle="tab" href="#home">
														<i class="green ace-icon fa fa-user bigger-120"></i>
														Profile
													</a>
												</li>

												<li>
													<a data-toggle="tab" href="#feed">
														<i class="orange ace-icon fa fa-rss bigger-120"></i>
														Activity Feed
													</a>
												</li>

												<li>
													<a data-toggle="tab" href="#friends">
														<i class="blue ace-icon fa fa-users bigger-120"></i>
														Friends
													</a>
												</li>

												<li>
													<a data-toggle="tab" href="#pictures">
														<i class="pink ace-icon fa fa-picture-o bigger-120"></i>
														Pictures
													</a>
												</li>
											</ul>

											
										</div>
									</div>
								</div>

							

											<div class="space"></div>

										
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