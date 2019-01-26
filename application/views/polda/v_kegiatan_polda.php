<body class="skin-blue fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Elite admin</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo base_url();?>C_polda/index">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="<?php echo base_url();?>assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="<?php echo base_url();?>assets/images/logo-polri.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <img src="<?php echo base_url();?>assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                         <!-- Light Logo text -->    
                         <img src="<?php echo base_url();?>assets/images/POLRI.png" style="width:110px"     class="light-logo mt-2" alt="homepage" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item">
                            <form class="app-search d-none d-md-block d-lg-block">
                                <input type="text" class="form-control" placeholder="Search & enter">
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url();?>assets/images/users/1.jpg" alt="user" class=""> <span class="hidden-md-down"><?php echo $this->session->userdata('email');?><i class="fa fa-angle-down"></i></span> </a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                                <!-- text-->
                                <div class="dropdown-divider"></div>
                                <!-- text-->
                                <a href="<?php echo base_url();?>C_login/logout" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                                <!-- text-->
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End User Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item right-side-toggle"> <a class="nav-link  waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="user-pro"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><img src="<?php echo base_url();?>assets/images/users/1.jpg" alt="user-img" class="img-circle"><span class="hide-menu"><?php echo $this->session->userdata('email');?></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="javascript:void(0)"><i class="ti-settings"></i> Account Setting</a></li>
                                <li><a href="<?php echo base_url();?>C_login/logout"><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                        </li>
                        <li class="nav-small-cap">--- Kepolisian Negara Republik Indonesia</li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-address-book"></i><span class="hide-menu">Kegiatan</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url();?>C_polda/viewKegiatan">Program/Kegiatan Polres</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Dashboard 1</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard 1</li>
                            </ol>
                            
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Info box -->
                <!-- ============================================================== -->
                <div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Data Kegiatan Polres</h4>
								
								<div class="table-responsive m-t-10">
									<table id="table" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
										<thead>
											<tr>
												<th> No </th>
												<th>No Induk</th>
												<th>Kode Kegiatan</th>
												<th>Program/Kegiatan</th>
												<th>Total Anggaran Terpakai</th>
												
											</tr>
										</thead>

										<tbody id="myForm">
											<?php 
                                        $no=1;
                                        foreach($total as $val){?>
											<tr>
												<td>
													<?php echo $no++;?>
												</td>
												<td>
													<?php echo $val->no_induk;?>
												</td>
												<td>
													<?php echo $val->kode_kegiatan;?>
												</td>
												<td>
													<?php echo $val->program_kegiatan;?>
												</td>
												<td>
													<?php echo number_format($val->total);?>
												</td>
												
												
											</tr>
										</tbody> 
										 <?php }?>
									</table>

								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Modal Tambah -->
				<form id="form">
					<div class="modal fade" id="form-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
					 aria-hidden="true">
						<div class="modal-dialog modal-lg" role="document">
							<div class="modal-content block3">
								<div class="alert alert-danger print-error-msg" style="display:none">
								</div>
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="form-group row">
										<label class="col-md-2 col-form-label">Kode Akun</label>
										<div class="col-md-10">
											<select name="no_induk" id="no_induk" class="form-control">
											<option value="none" selected="selected"> --Pilih Opsi-- </option>
										<?php 
										foreach($no_induk as $val){?>
												<option value="<?php echo $val->no_induk;?>""><?php echo $val->no_induk;?> </option>
										<?php }?>
											</select>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-md-2 col-form-label">Kode Kegiatan</label>
										<div class="col-md-10">
											<select name="kode_kegiatan" id="kode_kegiatan" onchange="auto_complete()" class="form-control">
												<option value="none" selected="selected"> --Pilih Opsi-- </option>
											<?php
											foreach($laporan as $val){?>
												<option value="<?php echo $val->kode_kegiatan;?>"><?php echo $val->kode_kegiatan;?></option>
											<?php } ?>
											</select>
											
										</div>
									</div>
									<div class="form-group row">
										<label class="col-md-2 col-form-label">Program/Kegiatan</label>
										<div class="col-md-10">
											<input type="text" name="program_kegiatan" id="program_kegiatan" class="form-control" placeholder="Program/Kegiatan">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-md-2 col-form-label">Amount</label>
										<div class="col-md-10">
											<input type="text" name="amount" id="amount" class="form-control" placeholder="Amount">
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<input type="hidden" name="id" id="id">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<button type="button" type="submit" onclick="save_data()" id="tambahData" class="btn btn-info">Save</button>
								</div>
							</div>
						</div>
					</div>
				</form>
                <!-- ============================================================== -->
                <!-- End Info box -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Over Visitor, Our income , slaes different and  sales prediction -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
				<!-- ============================================================== -->
				<!-- .right-sidebar -->
				<div class="right-sidebar">
					<div class="slimscrollright">
						<div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
						<div class="r-panel-body">
							<ul id="themecolors" class="m-t-20">
								<li><b>With Light sidebar</b></li>
								<li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme">1</a></li>
								<li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a></li>
								<li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
								<li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme working">4</a></li>
								<li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a></li>
								<li><a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme">6</a></li>
								<li class="d-block m-t-30"><b>With Dark sidebar</b></li>
								<li><a href="javascript:void(0)" data-skin="skin-default-dark" class="default-dark-theme ">7</a></li>
								<li><a href="javascript:void(0)" data-skin="skin-green-dark" class="green-dark-theme">8</a></li>
								<li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a></li>
								<li><a href="javascript:void(0)" data-skin="skin-blue-dark" class="blue-dark-theme">10</a></li>
								<li><a href="javascript:void(0)" data-skin="skin-purple-dark" class="purple-dark-theme">11</a></li>
								<li><a href="javascript:void(0)" data-skin="skin-megna-dark" class="megna-dark-theme ">12</a></li>
							</ul>

						</div>
					</div>
				</div>
			
                
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            © 2018 Eliteadmin by themedesigner.in
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url();?>assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="<?php echo base_url();?>assets/node_modules/popper/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url();?>dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url();?>dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url();?>dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url();?>dist/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src="<?php echo base_url();?>assets/node_modules/raphael/raphael-min.js"></script>
    <script src="<?php echo base_url();?>assets/node_modules/morrisjs/morris.min.js"></script>
    <script src="<?php echo base_url();?>assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- Popup message jquery -->
    <script src="<?php echo base_url();?>assets/node_modules/toast-master/js/jquery.toast.js"></script>
    <!-- Chart JS -->
    <script src="<?php echo base_url();?>dist/js/dashboard1.js"></script>
    <script src="<?php echo base_url();?>assets/node_modules/toast-master/js/jquery.toast.js"></script>
    <script>
		$(document).ready(function() {
        $('#table').DataTable();
        $(document).ready(function() {
            var table = $('#table').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#table tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#table').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    

		var save_method;
		var table;

		// function add_data() {
		// 	save_method = 'add';
		// 	$('#form')[0].reset();
		// 	$('#form-modal').modal('show');
		// }

		function save_data() {
			var url;

			if (save_method == 'add') {
				url = '<?php echo base_url();?>C_pusat/tambahPolda';
			} else {
				url = '<?php echo base_url();?>C_pusat/updatePolda';
			}
			$.ajax({
				url: url,
				type: 'POST',
				data: $('#form').serialize(),
				dataType: 'JSON',
				success: function (data) {
					$('#form-modal').modal('hide');
					// swal('Berhasil','Berhasil Menambahkan Data','Success');
					// alert('berhasil');
					location.reload();
				},
				error: function (jqXHR, textStatus, errorThrown) {
					alert('Gagal Tambah Data');
				}
			});
		}

		function edit_data(id) {
			save_method = 'update';
			$('#form')[0].reset();

			$.ajax({
				url: "<?php echo base_url();?>C_pusat/editPolda/" + id,
				type: 'GET',
				dataType: 'JSON',
				success: function (data) {
					$('[name="id"]').val(data.id);
					$('[name="detail_kegiatan"]').val(data.detail_kegiatan);
					$('[name="ammount"]').val(data.ammount);
					$('[name="bukti_transaksi"]').val(data.bukti_transaksi);

					$('#form-modal').modal('show');
					$('.modal-title').text('Edit Data');

				},
				error: function (jqXHR, textStatus, errorThrown) {
					alert('error');
				}
			});
		}

		function delete_data(id) {
			if (confirm('Apakah Yakin Ingin Hapus Data Ini?')) {

				$.ajax({
					url: '<?php echo base_url();?>C_pusat/deletePolda/' + id,
					type: 'POST',
					dataType: 'JSON',
					success: function (data) {
						location.reload();
					},
					error: function (jqXHR, textStatus, errorThrown) {
						alert('Gagal Menghapus Data');
					}
				});
			}
		}

	</script>
</body>

</html>