<style>

.bootstrap-datetimepicker-widget.dropdown-menu {
/*  margin: 2px 0;*/
/*padding: 2px;*/
width: 27em ;

}

</style>
<div id="content" class="content">
<!-- begin breadcrumb -->
<ol class="breadcrumb pull-right">
<li><a href="javascript:;">Home</a></li>
<li><a href="javascript:;">Form Stuff</a></li>
<li class="active">Form Elements</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header"> <small><!--header small text goes here...--></small></h1>
<!-- end page-header -->

<!-- begin row -->
<div class="row">
<!-- begin col-6 -->
<div class="col-md-12">
<!-- begin panel -->
<div class="panel panel-inverse" data-sortable-id="form-stuff-1">
<div class="panel-heading">
<div class="panel-heading-btn">
<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
</div>
<h4 class="panel-title">Report</h4>
</div>
<div class="panel-body">
<form class="form-horizontal" action="<?php echo base_url(); ?>PayslipCtr/view_report/" method="post" enctype="multipart/form-data">
<div class="col-md-12">

<div class="row">
<legend>Choose your Report</legend>
<div class="form-group">
<div class="col-md-4">
<select class="form-control selectpicker" name="report" id="report">
<option value="Employee List">Employee List</option>
<option value="Attendance List">Attendance List</option>
<option value="Salary details">Salary details</option>
<option value="shift settings">shift settings</option>
</select>
</div>
</div>
</div>
</form>
<div class="row" id="employeeTable">
<h3 style="text-align:center;">Employee List</h3>
<div class="table-responsive">
<table id="eTable" class="table table-striped table-bordered table-hover" cellspacing="0" width=100%>
<thead>


<th>ID</th>
<th>Title</th>
<th>First name</th>
<th>Last name</th>
<th>DOB</th>
<th>Gender</th>
<th>Designation</th>
<th>Department</th>
<th>joining date</th>
<th>account number</th>
<th>bank name</th>
<th>branch name</th>
<th>IFSC code</th>
<th>Address</th>
<th>Town/City</th>
<th>State</th>
<th>Country</th>
<th>Zipcode</th>
<th>Landline No.</th>
<th>Mobile No.</th>
<th>Email</th>
<th>Profile</th>
<th>Proof</th>
</thead>
<tbody>

<?php foreach($this->ps_model->view_employee_list() as $row) { ?>
<!--<tr data-toggle="modal" data-target="#modal1">-->
<tr>

<input type="hidden" name="getid" value="<?php echo $row['ID'];?>">
<td><?php echo $row['EMP_ID'];?></td>
<td><?php echo $row['EMP_TITLE'];?></td>
<td><?php echo $row['EMP_FIRST_NAME'];?></td>
<td><?php echo $row['EMP_LAST_NAME'];?></td>
<td><?php echo $row['EMP_DOB'];?></td>
<td><?php echo $row['EMP_GENDER'];?></td>
<td><?php echo $row['EMP_DESIGNATION'];?></td>
<td><?php echo $row['EMP_DEPARTMENT'];?></td>
<td><?php echo $row['EMP_JOINING_DATE'];?></td>
<td><?php echo $row['EMP_ACCOUNT_NUM'];?></td>
<td><?php echo $row['EMP_BANK_NAME'];?></td>
<td><?php echo $row['EMP_BRANCH_NAME'];?></td>
<td><?php echo $row['EMP_IFSC_CODE'];?></td>
<td><?php echo $row['EMP_ADDRESS'];?></td>
<td><?php echo $row['EMP_TOWN_CITY'];?></td>
<td><?php echo $row['EMP_STATE'];?></td>
<td><?php echo $row['EMP_COUNTRY'];?></td>
<td><?php echo $row['EMP_ZIPCODE'];?></td>
<td><?php echo $row['EMP_LANDLINE_NUM'];?></td>
<td><?php echo $row['EMP_MOBILE_NUM'];?></td>
<td><?php echo $row['EMP_EMAIL'];?></td>
<td><img class="" id="_image" name="_image" src="<?php echo base_url('application/uploads/'.$row['EMP_PROFILE']) ; ?>"  width="110px" height="90px"   > </td>
<td><img class="" id="_image" name="_image" src="<?php echo base_url('application/uploads/'.$row['EMP_ID_PROOF']); ?>"   width="110px" height="90px"   ></td>
</tr>
<?php }?>
</tbody>
</table>
</div>
</div>
<!---END EMPLOYEE TABLE-->

<div class="row" id="attendanceTable">
<h3>Attendance List</h3>
<div class="row">
<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
<div class="col-md-3">
<label class="col-md-3 control-label">Name:</label>
<div class="col-md-9">
<select class="form-control selectpicker" name="month" id="attendancename">
  <option value="">Select Employee</option>
	   
		<?php foreach($this->ps_model->empdetails() as $row){ ?>
	      
		<option  value="<?php echo $row['EMP_FIRST_NAME'] ?>" ><?php echo $row['EMP_FIRST_NAME'] ?></option>
	       <?php } ?>
</select>
</div>

</div>
<div class="col-md-3">
<label class="col-md-3 control-label">year:</label>

<div class="col-md-9">
<select class="form-control selectpicker" name="month" id="attendanceyear">
<option value="">select</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
</select>
</div>
</div>
<div class="col-md-3">
<label class="col-md-3 control-label">Month:</label>
<div class="col-md-9">
<select class="form-control selectpicker" name="month" id="attendancemonth">
<option value="">select</option>
<option value="jan">january</option>
<option value="feb">febraury</option>
<option value="mar">march</option>
<option value="apr">april</option>
<option value="may">may</option>
<option value="jun">june</option>
<option value="jul">july</option>
<option value="aug">august</option>
<option value="sep">september</option>
<option value="oct">october</option>
<option value="nov">november</option>
<option value="dec">december</option>
</select>
</div>
</div>
<div class="col-md-3">
<input type="button" class="btn btn-primary btn-info" value="Find" id="search_attendance">
</div>
</form>
</div>
<br>
<div class="row">
<div class="table-responsive">
<table id="aTable" class="table table-striped table-bordered table-hover" cellspacing="0" width=100%>
<thead>
<tr>
<th>Name</th>
<th>Date</th>
<th>Status</th>
</tr>
</thead>
<tbody id="abody">

<?php foreach($this->ps_model->view_attendance_list() as $row) { ?>
<tr>

<td><?php echo $row['SFT_EMP_NAME'];?></td>
<td><?php echo $row['SFT_DATE'];?></td>
<td><?php echo $row['SFT_STATUS'];?></td>
</tr>
<?php }?>
</tbody>
</table>
</div>
</div>

</div>
<!--END ATTENDANCE TABLE-->

<div class="row" id="salaryTable">
<h3>Salary Details</h3>
<div class="row">
<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
<div class="col-md-3">
<label class="col-md-3 control-label">Name:</label>
<div class="col-md-9">
<select class="form-control selectpicker" name="month" id="salaryname">
  <option value="">Select Employee</option>
	   
		<?php foreach($this->ps_model->empdetails() as $row){ ?>
	      
		<option  value="<?php echo $row['EMP_FIRST_NAME'] ?>" ><?php echo $row['EMP_FIRST_NAME'] ?></option>
	       <?php } ?>

</select>
</div>
</div>
<div class="col-md-3">
<label class="col-md-3 control-label">year:</label>
<div class="col-md-9">
<select class="form-control selectpicker" name="month" id="salaryyear">
<option value="">Select an option</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
</select>
</div>
</div>
<div class="col-md-3">
<label class="col-md-3 control-label">Month:</label>
<div class="col-md-9">
<select class="form-control selectpicker" name="month" id="salarymonth">
<option value="">Select an option</option>
<option value="jan">january</option>
<option value="feb">febraury</option>
<option value="mar">march</option>
<option value="apr">april</option>
<option value="may">may</option>
<option value="jun">june</option>
<option value="jul">july</option>
<option value="aug">august</option>
<option value="sep">september</option>
<option value="oct">october</option>
<option value="nov">november</option>
<option value="dec">december</option>
</select>
</div>

</div>
<div class="col-md-3">
<input type="button" class="btn btn-info btn-md" value="Find" id="search_salary">
</div>
</form>
</div><br>
<div class="row">
<div class="table-responsive">
<table id="sTable" class="table table-striped table-bordered table-hover table-condensed" cellspacing="0" width=100%>
<thead>

<th>Name</th>
<th>Id</th>
<th>Department</th>
<th>Salary paid</th>
<th>Total Working Days</th>
<th>Worked Days</th>
<th>Basic Salary</th>
<th>HRA</th>
<th>DA</th>
<th>TA</th>
<th>Incentive</th>
<th>Increment</th>
<th>Gross Earnings</th>
<th>PF Amount</th>
<th>ESI</th>
<th>LOP</th>
<th>Advance salary paid</th>
<th>Other deduction</th>
<th>Gross deductions</th>
<th>Net-Salary</th>

</thead>
<tbody id="sbody">

<?php foreach($this->ps_model->view_salary_list() as $row) { ?>
<!--<tr data-toggle="modal" data-target="#modal1">-->
<tr>


<td><?php echo $row['EMP_NAME'];?></td>
<td><?php echo $row['EMP_ID'];?></td>
<td><?php echo $row['EMP_DEPARTMENT'];?></td>
<td><?php echo $row['SALARY_PAID'];?></td>
<td><?php echo $row['TOTAL_WORKING_DAYS'];?></td>
<td><?php echo $row['WORKED_DAYS'];?></td>
<td><?php echo $row['BASIC_SALARY'];?></td>
<td><?php echo $row['HRA'];?></td>
<td><?php echo $row['DA'];?></td>
<td><?php echo $row['TRAVELLING_ALLOWANCE'];?></td>
<td><?php echo $row['INCENTIVE'];?></td>
<td><?php echo $row['INCREMENT'];?></td>
<td><?php echo $row['GROSS_EARNINGS'];?></td>
<td><?php echo $row['PF'];?></td>
<td><?php echo $row['ESI'];?></td>
<td><?php echo $row['LOP'];?></td>
<td><?php echo $row['ADVANCE_SALARY'];?></td>
<td><?php echo $row['OTHER_DEDUCTIONS'];?></td>
<td><?php echo $row['GROSS_DEDUCTIONS'];?></td>
<td><?php echo $row['NET_AMOUNT'];?></td>
</tr>
<?php }?>
</tbody>
</table>
</div>
</div>
</div>

<!--END SALARY TABLE-->
<div class="row" id="shiftTable">
<h3>Shift Setting details</h3>
<div class="row">
<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
<div class="col-md-3">
<label class="col-md-3 control-label">Name:</label>
<div class="col-md-9">
<select class="form-control selectpicker" name="month" id="shiftname">
  <option value="">Select Employee</option>
	   
		<?php foreach($this->ps_model->empdetails() as $row){ ?>
	      
		<option  value="<?php echo $row['EMP_FIRST_NAME'] ?>" ><?php echo $row['EMP_FIRST_NAME'] ?></option>
	       <?php } ?>

</select>
</div>

</div>
<div class="col-md-3">
<label class="col-md-3 control-label">year:</label>

<div class="col-md-9">
<select class="form-control selectpicker" name="month" id="shiftyear">
<option value="">select</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
</select>
</div>
</div>
<div class="col-md-3">
<label class="col-md-3 control-label">Month:</label>
<div class="col-md-9">
<select class="form-control selectpicker" name="month" id="shiftmonth">
<option value="">select</option>
<option value="jan">january</option>
<option value="feb">febraury</option>
<option value="mar">march</option>
<option value="apr">april</option>
<option value="may">may</option>
<option value="jun">june</option>
<option value="jul">july</option>
<option value="aug">august</option>
<option value="sep">september</option>
<option value="oct">october</option>
<option value="nov">november</option>
<option value="dec">december</option>
</select>
</div>
</div>
<div class="col-md-3">
<input type="button" class="btn btn-primary btn-info" value="Find" id="search_shift">
</div>
</form>
</div>
<br>
<div class="table-responsive">
<table id="shTable" class="table table-striped table-bordered table-hover table-condensed" cellspacing="0" width=100%>
<thead>

<th>Name</th>
<th>Date</th>
<th>Morning start time</th>
<th>Morning end time</th>
<th>Evening start time</th>
<th>Evening end time</th>
<th>Break hour</th>
<th>Working hour</th>
<th>Status</th>
</thead>	
<tbody id="shbody">

<?php foreach($this->ps_model->view_shiftsettings_list() as $row) { ?>
<!--<tr data-toggle="modal" data-target="#modal1">-->
<tr>

<td><?php echo $row['SFT_EMP_NAME'];?></td>
<td><?php echo $row['SFT_DATE'];?></td>
<td><?php echo $row['SFT_MRNG_STRATTIME'];?></td>
<td><?php echo $row['SFT_MRNG_ENDTIME'];?></td>
<td><?php echo $row['SFT_EVE_STARTTIME'];?></td>
<td><?php echo $row['SFT_EVE_ENDTIME'];?></td>
<td><?php echo $row['SFT_BREAK_HOUR'];?></td>
<td><?php echo $row['SFT_WORKING_HOUR'];?></td>
<td><?php echo $row['SFT_STATUS'];?></td>


</tr>
<?php }?>
</tbody>
</table>
</div>
</div>
<!--END SHIFT TABLE-->

</div>






<!-- end panel -->
</div>
<!-- end col-6 -->

<!-- begin row -->



<!-- begin row -->

</div>
<!-- end #content -->
<!-- begin scroll to top btn -->

<!-- end scroll to top btn -->
</div>
<!-- end page container -->




<script>


// $(document).ready(function() {
// var t = $('#eTable').DataTable( {

// "columnDefs": [ {

// "searchable": false,
// "orderable": false,
//"class": "index",

// "targets": 0
// } ],

// "scrollX": true,
// "order": [[ 1, 'asc' ]]		

// } );

// t.on( 'order.dt search.dt', function () {
// t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
// cell.innerHTML = i+1;
// } );
// } ).draw();

// } );

// $(document).ready(function() {
// var t = $('#aTable').DataTable( {

// "columnDefs": [ {

// "searchable": false,
// "orderable": false,
//"class": "index",

// "targets": 0
// } ],

// "scrollX": true,
// "order": [[ 1, 'asc' ]]		

// } );

// t.on( 'order.dt search.dt', function () {
// t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
// cell.innerHTML = i+1;
// } );
// } ).draw();

// } );



// $(document).ready(function() {
// var t = $('#sTable').DataTable( {

// "columnDefs": [ {

// "searchable": false,
// "orderable": false,
//"class": "index",

// "targets": 0
// } ],

// "scrollX": true,
// "order": [[ 1, 'asc' ]]


// } );

// t.on( 'order.dt search.dt', function () {
// t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
// cell.innerHTML = i+1;
// } );
// } ).draw();

// } );


// $(document).ready(function() {
// var t = $('#shTable').DataTable( {

// "columnDefs": [ {

// "searchable": false,
// "orderable": false,
//"class": "index",
//
// "targets": 0
// } ],

// "scrollX": true,
// "order": [[ 1, 'asc' ]]


// } );

// t.on( 'order.dt search.dt', function () {
// t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
// cell.innerHTML = i+1;
// } );
// } ).draw();

// } );
</script>


<script>

$('.selectpicker').selectpicker({
style: 'btn-white',
});


$(document).ready(function(){
$("#search_attendance").click(function(){
var month=$("#attendancemonth").val();
var year=$("#attendanceyear").val();
var name=$("#attendancename").val();
console.log(month);
console.log(year);
console.log(name);

$.ajax({
type:"post",
url:"<?php echo site_url() ?>" + "PayslipCtr/attendance_monthwise",
data:{month:month,year:year,name:name},
success :function(data) {
//$('.selectpicker').selectpicker('refresh');
$("#attendancename").val('').selectpicker('refresh');
$("#attendanceyear").val('').selectpicker('refresh');
$("#attendancemonth").val('').selectpicker('refresh');
$('#abody').html(data);


}
});
});
});
$(document).ready(function(){

$("#search_salary").click(function(){

var name=$("#salaryname").val();
var year=$("#salaryyear").val();
var month=$("#salarymonth").val();

console.log(name);
console.log(year);
console.log(month);

$.ajax({
type:"post",
url:"<?php echo site_url() ?>" + "PayslipCtr/salary_monthwise",
data:{month:month,year:year,name:name},
success :function(data) {
$("#salaryname").val('').selectpicker('refresh');
$("#salaryyear").val('').selectpicker('refresh');
$("#salarymonth").val('').selectpicker('refresh');
$('#sbody').html(data);
}
});
});
});

$(document).ready(function(){

$("#search_shift").click(function(){

var name=$("#shiftname").val();
var year=$("#shiftyear").val();
var month=$("#shiftmonth").val();

console.log(name);
console.log(year);
console.log(month);

$.ajax({
type:"post",
url:"<?php echo site_url() ?>" + "PayslipCtr/shift_monthwise",
data:{month:month,year:year,name:name},
success :function(data) {
$("#shiftname").val('').selectpicker('refresh');
$("#shiftyear").val('').selectpicker('refresh');
$("#shiftmonth").val('').selectpicker('refresh');
$('#shbody').html(data);
}
});
});
});


$("#attendanceTable").hide();
$("#salaryTable").hide();
$("#shiftTable").hide();
$(function() {
$("#report").change(function() {
console.log($(this).val());
if ($(this).val() === 'Employee List')
{
//alert(); exit;
$("#employeeTable").show();
$("#attendanceTable").hide();
$("#salaryTable").hide();
$("#shiftTable").hide();
}

else if($(this).val() === 'Attendance List')
{
//alert(); exit;
$("#attendanceTable").show();
$("#employeeTable").hide();
$("#salaryTable").hide();
$("#shiftTable").hide();
}
else if($(this).val() === 'Salary details')
{
//alert(); exit;
$("#salaryTable").show();
$("#attendanceTable").hide();
$("#employeeTable").hide();
$("#shiftTable").hide();
}
else if($(this).val() === 'shift settings')
{
//alert(); exit;
$("#salaryTable").hide();
$("#attendanceTable").hide();
$("#employeeTable").hide();
$("#shiftTable").show();
}

});
});

</script>
</body>


</html>

