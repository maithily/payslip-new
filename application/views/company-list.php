	    
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Company Details</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
        <link href="<?php echo site_url('application/assets/plugins/DataTables/css/data-table.css');?>" rel="stylesheet" />
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="<?php echo site_url('application/assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css');?>" rel="stylesheet" />
	<link href="<?php echo site_url('application/assets/plugins/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" />
	<link href="<?php echo site_url('application/assets/plugins/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" />
	<link href="<?php echo site_url('application/assets/css/animate.min.css');?>" rel="stylesheet" />
	<link href="<?php echo site_url('application/assets/css/style.min.css');?>" rel="stylesheet" />
	<link href="<?php echo site_url('application/assets/css/style-responsive.min.css');?>" rel="stylesheet" />
	<link href="<?php echo site_url('application/assets/css/theme/default.css');?>" rel="stylesheet" id="theme" />
        <link href="<?php echo site_url('application/assets/plugins/bootstrap-datepicker/css/datepicker.css');?>" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?php echo site_url('application/assets/plugins/pace/pace.min.js');?>"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		<div id="header" class="header navbar navbar-default navbar-fixed-top">
			<!-- begin container-fluid -->
			<div class="container-fluid">
				<!-- begin mobile sidebar expand / collapse button -->
				<div class="navbar-header">
				    <a href="#" class="navbar-brand"><span class="navbar-logo"></span> Color Admin</a>
					<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
					    <span class="icon-bar"></span>
					    <span class="icon-bar"></span>
					    <span class="icon-bar"></span>
					</button>
				</div>
				<!-- end mobile sidebar expand / collapse button -->
				
				<!-- begin header navigation right -->
				<ul class="nav navbar-nav navbar-right">
					<li>
					    <form class="navbar-form full-width">
						<div class="form-group">
						    <input type="text" class="form-control" placeholder="Enter keyword" />
						    <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
						</div>
					    </form>
					</li>
					<li class="dropdown">
					    <a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
						<i class="fa fa-bell-o"></i>
						<span class="label">5</span>
					    </a>
					    <ul class="dropdown-menu media-list pull-right animated fadeInDown">
                            <li class="dropdown-header">Notifications (5)</li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><i class="fa fa-bug media-object bg-red"></i></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">Server Error Reports</h6>
                                        <div class="text-muted f-s-11">3 minutes ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><img src="assets/img/user-1.jpg" class="media-object" alt="" /></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">John Smith</h6>
                                        <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                        <div class="text-muted f-s-11">25 minutes ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><img src="assets/img/user-2.jpg" class="media-object" alt="" /></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">Olivia</h6>
                                        <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                        <div class="text-muted f-s-11">35 minutes ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><i class="fa fa-plus media-object bg-green"></i></div>
                                    <div class="media-body">
                                        <h6 class="media-heading"> New User Registered</h6>
                                        <div class="text-muted f-s-11">1 hour ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><i class="fa fa-envelope media-object bg-blue"></i></div>
                                    <div class="media-body">
                                        <h6 class="media-heading"> New Email From John</h6>
                                        <div class="text-muted f-s-11">2 hour ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-footer text-center">
                                <a href="javascript:;">View more</a>
                            </li>
						</ul>
					</li>
					<li class="dropdown navbar-user">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
							<img src="assets/img/user-13.jpg" alt="" /> 
							<span class="hidden-xs">Admin</span> <b class="caret"></b>
						</a>
						<ul class="dropdown-menu animated fadeInLeft">
							
							<li><a href="<?php echo site_url('PayslipCtr/logout');?>">Log Out</a></li>
						</ul>
					</li>
				</ul>
				<!-- end header navigation right -->
			</div>
			<!-- end container-fluid -->
		</div>
		<!-- end #header -->
		
		<!-- begin #sidebar -->
		 <div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				
				 <ul class="nav">
					<li class="nav-header"></li>
					<li class="has-sub">
					    <a href="javascript:;">
						<b class="caret pull-right"></b>
						  <i class="fa fa-building"></i> 
						  <span>Company</span>
					    </a>
					    <ul class="sub-menu">
						<li><a href="<?php echo base_url('payslipCtr/company')?>">New Company</a></li>
						<li><a href="<?php echo base_url('payslipCtr/Cdetails')?>">Company Details</a></li>
						<li><a href="<?php echo base_url('payslipCtr/openCompany')?>">Open Company</a></li>
					    </ul>
					</li>
					<li class="has-sub">
					    <a href="#">
						<b class="caret pull-right"></b>
						<i class="fa fa-user"></i>
						<span>Payslip</span>
					    </a>
					      <ul class="sub-menu">
						<li><a href="<?php echo base_url('payslipCtr/payroll_payslip')?>">Payroll Payslip</a></li>
						<li><a href="<?php echo base_url('payslipCtr/Cdetails')?>">Manual Payslip</a></li>
					    </ul>
					</li>
					<li class="has-sub">
					    <a href="<?php echo base_url('payslipCtr/employee')?>">
					       
						<i class="fa fa-user"></i>
						<span>Employee Details</span>
					       
					    </a>
					</li>
					<li class="has-sub">
						<a href="<?php echo base_url('payslipCtr/viewEmployees')?>">
						   
						    <i class="fa fa-user"></i>
						    <span>Employee Add</span>
						   
					        </a>
						
					</li>
					
			        <!-- begin sidebar minify button -->
					<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
			        <!-- end sidebar minify button -->
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>

            <!-- begin #content -->
	    <div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Company</a></li>
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<h1 class="page-header">Employee<small> You may view Employee details here...</small></h1>
		<!-- end page-header -->
		<!-- begin row -->
		<div class="row">
		    <!-- begin col-10 -->
		    <div class="col-md-12">
			<!-- begin panel -->
			<div class="panel panel-inverse">
			    <div class="panel-heading">
				<div class="panel-heading-btn">
				    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
				    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
				    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
				</div>
				<h4 class="panel-title">Company View</h4>
			    </div>
			    <div class="panel-body" id="form_validation">
				<p>
				<a class="btn btn-primary btn-sm" href="<?php echo site_url('payslipCtr/company')?>"><i class="fa fa-plus fa-1x"></i> <span class="f-s-14 f-w-500">Add </span></a>
				</p>
				<div class="table-responsive" style="border: none">
				    <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
					<thead>
					    <tr>
						<th>Company Name</th>
						<th>Legal Name</th>
						<th>Address</th>
                                                <th>City</th>
						<th>State</th>
						<th>Zipcode</th>
                                                <th>Phone</th>
						<th>Email</th>
						<th>Website</th>
                                              
					    </tr>
					</thead>
					<tbody>
					    <?php foreach($this->ps_model->companyDetails() as $row)
						{ ?>
						<tr class="even gradeC">
						    <td>
							<?php echo $row['name'];?>
						    </td>					    
						    <td>
							<?php echo $row['lname'];?>
						    </td>
						    <td>
							<?php echo $row['address'];?>
						    </td>
                                                    <td>
							<?php echo $row['city'];?>
						    </td>
						    <td>
							<?php echo $row['state'];?>
						    </td>
						    <td>
							<?php echo $row['zipcode'];?>
						    </td>
						    <td>
							<?php echo $row['phone'];?>
						    </td>
						    <td>
							<?php echo $row['email'];?>
						    </td>
						    <td>
							<?php echo $row['website'];?>
						    </td>
						
						</tr>
					    <?php }?>
					</tbody>
				    </table>
				</div>
			    </div>
			</div>
			<!-- end panel -->
		    </div>
		    <!-- end col-10 -->
		</div>
		<!-- end row -->
	    </div>
	    <!-- end #content -->
	    <!-- begin scroll to top btn -->
	    <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
	    <!-- end scroll to top btn -->
	</div>
	<!-- end page container -->

	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?php echo site_url('application/assets/plugins/jquery/jquery-1.9.1.min.js');?>"></script>
	<script src="<?php echo site_url('application/assets/plugins/jquery/jquery-migrate-1.1.0.min.js');?>"></script>
	<script src="<?php echo site_url('application/assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js');?>"></script>
	<script src="<?php echo site_url('application/assets/plugins/bootstrap/js/bootstrap.min.js');?>"></script>
        <script src="<?php echo site_url('application/assets/js/jquery.dataTables.min.js');?>"></script>
        <script src="<?php echo site_url('application/assets/plugins/DataTables/js/jquery.dataTables.js');?>"></script>
	<script src="<?php echo site_url('application/assets/plugins/DataTables/js/dataTables.autoFill.js');?>"></script>
	<script src="<?php echo site_url('application/assets/plugins/DataTables/js/dataTables.colReorder.js');?>"></script>
	<script src="<?php echo site_url('application/assets/plugins/DataTables/js/dataTables.colVis.js');?>"></script>
	<script src="<?php echo site_url('application/assets/plugins/DataTables/js/dataTables.fixedHeader.js');?>"></script>
	<script src="<?php echo site_url('application/assets/plugins/DataTables/js/dataTables.keyTable.js');?>"></script>
	<script src="<?php echo site_url('application/assets/plugins/DataTables/js/dataTables.tableTools.js');?>"></script>
	<script src="<?php echo site_url('application/assets/plugins/DataTables/js/dataTables.responsive.js');?>"></script>
	<script src="<?php echo site_url('application/assets/plugins/DataTables/js/dataTables.buttons.min.js');?>"></script>
	<script src="<?php echo site_url('application/assets/plugins/DataTables/js/buttons.print.min.js');?>"></script>
	<script src="<?php echo site_url('application/assets/plugins/DataTables/js/buttons.html5.min.js');?>"></script>
	<!--[if lt IE 9]>
		<script src="<?php echo site_url('application/assets/crossbrowserjs/html5shiv.js');?>"></script>
		<script src="<?php echo site_url('application/assets/crossbrowserjs/respond.min.js');?>"></script>
		<script src="<?php echo site_url('application/assets/crossbrowserjs/excanvas.min.js');?>"></script>
	<![endif]-->
	<script src="<?php echo site_url('application/assets/plugins/slimscroll/jquery.slimscroll.min.js');?>"></script>
	<script src="<?php echo site_url('application/assets/plugins/jquery-cookie/jquery.cookie.js');?>"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="<?php echo site_url('application/assets/js/login-v2.demo.min.js');?>"></script>
	<script src="<?php echo site_url('application/assets/js/apps.min.js');?>"></script>
        	<script src="<?php echo site_url('application/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js');?>"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	<script>
    
    $(document).ready(function()
    {
	$("#data-table").DataTable();
    });
    
</script>

<script>
    $(document).ready(function() {
        App.init();
        TableManageTableTools.init();
    });
</script>


</body>

<!-- Mirrored from seantheme.com/color-admin-v1.6/admin/html/form_elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Mar 2015 08:08:50 GMT -->
</html>

