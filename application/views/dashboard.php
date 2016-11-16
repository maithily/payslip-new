<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/color-admin-v1.6/admin/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Mar 2015 08:04:57 GMT -->
<head>
	<meta charset="utf-8" />
	<title>Employee Payslip</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="<?php echo site_url ('application/assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css');?>" rel="stylesheet" />
	<link href="<?php echo site_url ('application/assets/plugins/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" />
	<link href="<?php echo site_url ('application/assets/plugins/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" />
	<link href="<?php echo site_url ('application/assets/css/animate.min.css');?>" rel="stylesheet" />
	<link href="<?php echo site_url ('application/assets/css/style.min.css');?>" rel="stylesheet" />
	<link href="<?php echo site_url ('application/assets/css/style-responsive.min.css');?>" rel="stylesheet" />
	<link href="<?php echo site_url ('application/assets/css/theme/default.css');?>" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="<?php echo site_url ('application/assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.css');?>" rel="stylesheet" />
	<link href="<?php echo site_url ('application/assets/plugins/bootstrap-datepicker/css/datepicker.css');?>" rel="stylesheet" />
	<link href="<?php echo site_url ('application/assets/plugins/bootstrap-datepicker/css/datepicker3.css');?>" rel="stylesheet" />
    <link href="<?php echo site_url ('application/assets/plugins/gritter/css/jquery.gritter.css');?>" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?php echo site_url ('application/assets/plugins/pace/pace.min.js');?>"></script>
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
							<img src="<?php echo base_url('application/assets/img/user-13.jpg');?>" alt="" /> 
							<span class="hidden-xs">Admin</span> <b class="caret"></b>
						</a>
						<ul class="dropdown-menu animated fadeInLeft">
							
<li><a href="<?php echo site_url('payslipCtr/cpassword');?>">Change Password</a></li>
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
					
					<li class="has-sub">
					    <a href="javascript:;">
						<b class="caret pull-right"></b>
						  <i class="fa fa-building"></i> 
						  <span>Employee</span>
					    </a>
					    <ul class="sub-menu">
						<li><a href="<?php echo base_url('PayslipCtr/addEmp')?>">Add Employee</a></li>
						
						<li><a href="<?php echo base_url('PayslipCtr/employee_list')?>">Employee List</a></li>
						
						
						
						
					    </ul>
					</li>
					<li class="has-sub">
					    <a href="javascript:;">
						<b class="caret pull-right"></b>
						  <i class="fa fa-building"></i> 
						  <span>Attendance</span>
					    </a>
					    <ul class="sub-menu">
						<li><a href="<?php echo base_url('PayslipCtr/attendance')?>">Daily Attendance</a></li>
						
						<li><a href="<?php echo base_url('PayslipCtr/attendanceLog')?>">Attendance Log</a></li>     
                                                 <li class="hide"><a href="<?php echo base_url('PayslipCtr/leave_Status')?>">Leave Status</a></li>
						
					    </ul>
					</li>
					
					<li class="has-sub">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-laptop"></i>
						    <span>Increment/Decrement</span>
					    </a>
						<ul class="sub-menu">
							<li><a href="<?php echo base_url('PayslipCtr/increment');?>">Inc/Dec</a></li>
							
						</ul>

					</li>
					<li class="has-sub">
					    <a href="#">
						<b class="caret pull-right"></b>
						<i class="fa fa-user"></i>
						<span>Payroll</span>
					    </a>
					      <ul class="sub-menu">
						<li><a href="<?php echo base_url('PayslipCtr/payroll')?>">Payroll Calculation</a></li>
						
					    </ul>
					</li>
					<li class="has-sub">
					    <a href="#">
						<b class="caret pull-right"></b>
						<i class="fa fa-user"></i>
						<span>Payslip</span>
					    </a>
					      <ul class="sub-menu">
						
                                          <li><a href="<?php echo base_url('PayslipCtr/manual_payslip')?>">Manual Payslip Generation</a></li>
					    </ul>
					</li>
					<li class="has-sub">
					    <a href="#">
						<b class="caret pull-right"></b>
						<i class="fa fa-user"></i>
						<span>Reports</span>
					    </a>
                                    <ul class="sub-menu">
					   <li><a href="<?php echo site_url('PayslipCtr/attendance_details')?>">Attendance</a></li>
					    <li><a href="<?php echo site_url('PayslipCtr/employee_report')?>">Employee List</a></li>
					<li><a href="<?php echo site_url('PayslipCtr/payroll_report')?>">Payroll Report</a></li>

					    </ul>
					   
					</li>
					<li class="has-sub">
					    <a href="#">
						<b class="caret pull-right"></b>
						<i class="fa fa-user"></i>
						<span>Master Settings</span>
					    </a>
					    <ul class="sub-menu"> 
<li><a href="<?php echo site_url('PayslipCtr/inc_dec')?>">Inclusion deduction</a></li>
					    <li><a href="<?php echo site_url('PayslipCtr/master_department_view')?>">Department</a></li>
						<li><a href="<?php echo site_url('PayslipCtr/master_shift')?>">shift setting master</a></li>
						<li><a href="<?php echo base_url('PayslipCtr/holiday')?>">Holiday Master </a></li>
						<li><a href="<?php echo base_url('PayslipCtr/calendar');?>">Calendar Master</a></li>
                                                
					    </ul>
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
		<!-- end #sidebar -->
		
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Home</a></li>
				<li class="active">Dashboard</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Dashboard </h1>
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">
				<!-- begin col-3 -->
				<div class="col-md-3 col-sm-6">
					<div class="widget widget-stats bg-green">
						<div class="stats-icon"><i class="fa fa-desktop"></i></div>
						<div class="stats-info">
							<h4>TOTAL EMPLOYEE</h4>
							<p><?php echo $total_employee; ?></p>	
						</div>
						<div class="stats-link">
							<a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-md-3 col-sm-6">
					<div class="widget widget-stats bg-blue">
						<div class="stats-icon"><i class="fa fa-chain-broken"></i></div>
						<div class="stats-info">
							<h4>TOTAL EMPLOYEE</h4>
							<p><?php echo $total_employee; ?></p>	
						</div>
						<div class="stats-link">
							<a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-md-3 col-sm-6">
					<div class="widget widget-stats bg-purple">
						<div class="stats-icon"><i class="fa fa-users"></i></div>
						<div class="stats-info">
							<h4>TOTAL EMPLOYEE</h4>
							<p><?php echo $total_employee; ?></p>	
						</div>
						<div class="stats-link">
							<a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				
				<!-- end col-3 -->
			</div>
			<!-- end row -->
			<!-- begin row -->
			<!-- end row -->
		</div>
		<!-- end #content -->
		
    
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<!--<script src="<?php echo site_url ('application/assets/plugins/pace/pace.min.js');?>"></script>-->
	<script src="<?php echo site_url ('application/assets/plugins/jquery/jquery-1.9.1.min.js');?>"></script>
	<script src="<?php echo site_url ('application/assets/plugins/jquery/jquery-migrate-1.1.0.min.js');?>"></script>
	<script src="<?php echo site_url ('application/assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js');?>"></script>
	<script src="<?php echo site_url ('application/assets/plugins/bootstrap/js/bootstrap.min.js');?>"></script>
	<!--[if lt IE 9]>
		<script src="<?php echo site_url ('application/assets/crossbrowserjs/html5shiv.js');?>"></script>
		<script src="<?php echo site_url ('application/assets/crossbrowserjs/respond.min.js');?>"></script>
		<script src="<?php echo site_url ('application/assets/crossbrowserjs/excanvas.min.js');?>"></script>
	<![endif]-->
	<script src="<?php echo site_url ('application/assets/plugins/slimscroll/jquery.slimscroll.min.js');?>"></script>
	<script src="<?php echo site_url ('application/assets/plugins/jquery-cookie/jquery.cookie.js');?>"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="<?php echo site_url ('application/assets/plugins/gritter/js/jquery.gritter.js');?>"></script>
	<script src="<?php echo site_url ('application/assets/plugins/flot/jquery.flot.min.js');?>"></script>
	<script src="<?php echo site_url ('application/assets/plugins/flot/jquery.flot.time.min.js');?>"></script>
	<script src="<?php echo site_url ('application/assets/plugins/flot/jquery.flot.resize.min.js');?>"></script>
	<script src="<?php echo site_url ('application/assets/plugins/flot/jquery.flot.pie.min.js');?>"></script>
	<script src="<?php echo site_url ('application/assets/plugins/sparkline/jquery.sparkline.js');?>"></script>
	<script src="<?php echo site_url ('application/assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.min.js');?>"></script>
	<script src="<?php echo site_url ('application/assets/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js');?>"></script>
	<script src="<?php echo site_url ('application/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js');?>"></script>
	<script src="<?php echo site_url ('application/assets/js/dashboard.min.js');?>"></script>
	<script src="<?php echo site_url ('application/assets/js/apps.min.js');?>"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();
			Dashboard.init();
		});
	</script>
	
</body>

</html>

