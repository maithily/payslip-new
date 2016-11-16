<title>Update Employee</title>
<div id="content" class="content">
<!-- begin breadcrumb -->
<ol class="breadcrumb pull-right">
<li><a href="javascript:;">Home</a></li>
<li><a href="javascript:;">Form Stuff</a></li>
<li class="active">Form Elements</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h2 class="page-header">UPDATE EMPLOYEE <small><!--header small text goes here...--></small></h2>
<!-- end page-header -->

<!-- begin row -->
<div class="row">
<!-- begin col-12 -->
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
<h4 class="panel-title">Employee Details</h4>
</div>
<div class="panel-body">
<form class="form-horizontal" action="<?php echo base_url('PayslipCtr/update_employee_list/'.$result[0]['ID']);?>" id="form-validation" method="post" enctype="multipart/form-data">
<div class="well">
<legend>Main Details</legend>
<div class="row">
<div class="col-md-12">
<div class="col-md-6">
<div class="form-group">
<label class="col-md-3 control-label">Employee Id :</label>
<div class="col-md-9">
<input type="text" class="form-control" name="emp_id" value="<?php echo $result[0]['EMP_ID']; ?>"/>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">Title :</label>
<div class="col-md-9">
<select class="form-control selectpicker" name="emp_title">
<option value="">select an option</option>
<option value="Mr." <?php if ($result[0]['EMP_TITLE'] === 'Mr.') {echo ' selected="selected"' ;} ?> >Mr.</option>
<option value="Ms." <?php if ($result[0]['EMP_TITLE'] === 'Ms.') {echo ' selected="selected"';} ?> >Ms.</option>
<option value="Mrs." <?php if ($result[0]['EMP_TITLE']=== 'Mrs.') {echo ' selected="selected"' ;} ?> >Mrs.</option>
	
</select>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">First Name :</label>
<div class="col-md-9">
<input type="text" class="form-control" style="text-transform: capitalize;" name="emp_first_name" value="<?php echo $result[0]['EMP_FIRST_NAME']; ?>" />
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">Last Name :</label>
<div class="col-md-9">
<input type="text" class="form-control" style="text-transform: capitalize;" name="emp_last_name" value="<?php echo $result[0]['EMP_LAST_NAME']; ?>"   />
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">Date Of Birth :</label>
<!--<div class="col-md-9">
<input type="text" class="form-control" placeholder=""  />
</div>-->
<div class="col-md-9">
<!--<div class="input-group date " id="datetimepicker1" data-date-format="dd-mm-yyyy">
   <input type="text" name="interview_timing" class='datetimepicker1'  class="form-control" placeholder="Select Date" />
   <span class="input-group-addon"><i class="fa fa-calendar r"></i></span>
</div>-->
<div class='input-group date'>
	<input type='text' name="emp_dob" class="form-control datetimepicker" value="<?php echo $result[0]['EMP_DOB']; ?>"/>
<span class="input-group-addon">
	<span class="glyphicon glyphicon-calendar"></span>
</span>
</div> 
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">Gender :</label>

<div class="col-md-4">
<label class="radio-inline"> 
<input type="radio" name="emp_gender" value="Male" <?php if ($result[0]['EMP_GENDER']=='Male') echo 'checked="checked"' ?> >Male
</label>
</div>
<div class="col-md-5">
<label class="radio-inline">
<input type="radio" name="emp_gender" value="Female" <?php  if ($result[0]['EMP_GENDER']=='Female') echo 'checked="checked"' ?> >Female
</label>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">Designation :</label>
<div class="col-md-9">
<select class="form-control selectpicker" name="emp_designation">
		<option value="" selected disabled hidden>Select an option</option>
		<option value="Trainee Developer" <?php if ($result[0]['EMP_DESIGNATION'] === 'Trainee Developer') {echo ' selected="selected"' ;} ?> >Trainee developer  </option>
		<option value="Junior Developer" <?php if ($result[0]['EMP_DESIGNATION'] === 'Junior Developer') {echo ' selected="selected"' ;} ?> >Junior Developer </option>
		<option value="Programmer Analyst" <?php if ($result[0]['EMP_DESIGNATION'] === 'Programmer Analyst') {echo ' selected="selected"' ;} ?> >Programmer Analyst </option>														
		<option value="Senior Consultant" <?php if ($result[0]['EMP_DESIGNATION'] === 'Senior Consultant') {echo ' selected="selected"' ;} ?> >Senior Consultant </option>	
<option value="Data Entry Operator" <?php if ($result[0]['EMP_DESIGNATION'] === 'Data Entry Operator') {echo ' selected="selected"' ;} ?>>Data Entry Operator</option>
						<option value="HR" <?php if ($result[0]['EMP_DESIGNATION'] === 'HR') {echo ' selected="selected"' ;} ?>>HR</option>
			
</select>
</div>
</div>

 <div class="form-group">
			<label class="col-md-3 control-label">Shift :</label>
			<div class="col-md-9">
				<select class="form-control" name="emp_shift">
				    <option value="" selected disabled hidden>Select an option</option>
				    <option value="Morning" <?php if ($result[0]['EMP_SHIFT'] === 'Morning') {echo ' selected="selected"' ;} ?> >Morning</option>
				    <option value="Evening" <?php if ($result[0]['EMP_SHIFT'] === 'Evening') {echo ' selected="selected"' ;} ?> >Evening</option>
				</select>
			</div>
		</div>

<div class="form-group">
<label class="col-md-3 control-label">Department :</label>
<div class="col-md-9">
<select class="form-control selectpicker" name="emp_department">
<option value="Select an option" selected disabled hidden>Select an option</option>
<option value="IT Department" <?php if ($result[0]['EMP_DEPARTMENT'] === 'IT Department') {echo ' selected="selected"' ;} ?>>IT Department</option>
<option value="HR Department" <?php if ($result[0]['EMP_DEPARTMENT'] === 'HR Department') {echo ' selected="selected"' ;} ?>>HR Department</option>
<option value="Data Entry" <?php if ($result[0]['EMP_DEPARTMENT'] === 'Data Entry') {echo ' selected="selected"' ;} ?>>Data Entry</option>

</select>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">Joining Date :</label>
<div class="col-md-9">
<div class='input-group date'>
	   <input type='text' name="emp_joining_date" class="form-control datetimepicker" value="<?php echo $result[0]['EMP_JOINING_DATE']; ?>"/>
   <span class="input-group-addon">
	   <span class="glyphicon glyphicon-calendar"></span>
   </span>
</div>
</div>
</div>
</div>
<div class="col-md-6">

<div class="form-group">
<label class="col-md-3 control-label">Bank Name :</label>
<div class="col-md-9">
<input type="text" class="form-control" style="text-transform: uppercase;" name="emp_bank_name" placeholder="Bank name" value="<?php echo $result[0]['EMP_BANK_NAME']; ?>"   />
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">Account No :</label>
<div class="col-md-9">
<input type="text" class="form-control" name="emp_account_num" placeholder="Account no" value="<?php echo $result[0]['EMP_ACCOUNT_NUM']; ?>" />
</div>
</div>

<div class="form-group">
<label class="col-md-3 control-label">IFSC Code :</label>
<div class="col-md-9">
<input type="text" class="form-control" style="text-transform: uppercase;" name="emp_ifsc_code" placeholder="IFSC Code" value="<?php echo $result[0]['EMP_IFSC_CODE']; ?>"   />
</div>
</div>

<div class="form-group">
<label class="col-md-3 control-label">Branch Name :</label>
<div class="col-md-9">
<input type="text" class="form-control" style="text-transform: uppercase;" name="emp_branch_name" placeholder="Branch name"  value="<?php echo $result[0]['EMP_BRANCH_NAME']; ?>" />
</div>
</div>
<div class="form-group">
   <label class="control-label col-md-3">Photo :</label>
   <div class="col-md-9">
    <img id="previewing" src="<?php echo base_url('application/uploads/'.$result[0]['EMP_PROFILE']); ?>"  name="profile" width="130px" height="100px">
    <p></p>
    <div class="input-group  col-md-9">
    <label class="input-group-btn">
	<input type="hidden" value="<?php echo $result[0]['EMP_PROFILE']; ?>"  name="old_emp_profile"/>
     <span class="btn btn-info">Browse<input type="file"  name="emp_profile" style="display: none;"  onchange="showimage(this);" id="emp_profile"></span>
    </label>
    <input type="text" required="" name="" value="<?php echo $result[0]['EMP_PROFILE']; ?>" class="form-control" readonly  >
    </div>
   </div>
  </div>

</div>
</div>
</div>

</div>
<div class="well">
<legend>Contact Details</legend>
<div class="row">
<div class="col-md-12">
<div class="col-md-6">
<div class="form-group">
<label class="col-md-3 control-label">Address :</label>
<div class="col-md-9">
<textarea  style="width: 100%;text-transform: capitalize;" rows="3" cols="30" name="emp_address"><?php echo $result[0]['EMP_ADDRESS']; ?> </textarea> 
</div>
</div>

<div class="form-group">
<label class="col-md-3 control-label">Town/city :</label>
<div class="col-md-9">
<input type="text" class="form-control" style="text-transform: capitalize;" placeholder="Town/City" name="emp_town" value="<?php echo $result[0]['EMP_TOWN_CITY']; ?>"/>
</div>
</div>

<div class="form-group">
<label class="col-md-3 control-label">State :</label>
<div class="col-md-9">
<input type="text" class="form-control" style="text-transform: capitalize;" placeholder="State" name="emp_state" value="<?php echo $result[0]['EMP_STATE']; ?>" />
</div>
</div>

<div class="form-group">
<label class="col-md-3 control-label">Country :</label>
<div class="col-md-9">
<select class="form-control selectpicker" name="emp_country">

<option value="India" <?php if ($result[0]['EMP_COUNTRY'] === 'india') {echo ' selected="selected"' ;} ?>>India</option>
<option value="Dubai" <?php if ($result[0]['EMP_COUNTRY'] === 'dubai') {echo ' selected="selected"' ;} ?>>Dubai</option>

	
</select>
</div>
</div>

<div class="form-group">
<label class="col-md-3 control-label">Zip code :</label>
<div class="col-md-9">
<input type="text" class="form-control" placeholder="Zip code" name="emp_zipcode" value="<?php echo $result[0]['EMP_ZIPCODE']; ?>"/>
</div>
</div>

</div>
<div class="col-md-6">
<div class="form-group">
<label class="col-md-3 control-label">Landline No :</label>
<div class="col-md-9">
<input type="text" class="form-control" placeholder="Landlineno" name="emp_landline_no" value="<?php echo $result[0]['EMP_LANDLINE_NUM']; ?>" />
</div>
</div>

<div class="form-group">
<label class="col-md-3 control-label">Mobile No :</label>
<div class="col-md-9">
<input type="text" class="form-control" placeholder="Mobile no" name="emp_mobile_no"  value="<?php echo $result[0]['EMP_MOBILE_NUM']; ?>"/>
</div>
</div>

<div class="form-group">
<label class="col-md-3 control-label">Email:</label>
<div class="col-md-9">
<input type="email" class="form-control" placeholder="Email"  name="emp_email"  value="<?php echo $result[0]['EMP_EMAIL']; ?>"/>
</div>
</div>

<div class="form-group">
   <label class="control-label col-md-3">Profile :</label>
   <div class="col-md-9">
    <img id="previewing1" src="<?php echo base_url('application/uploads/'.$result[0]['EMP_ID_PROOF']); ?>"  height="100px"  width="130px">
    <p></p>
    <div class="input-group  col-md-9">
    <label class="input-group-btn">
	<input type="hidden" value="<?php echo $result[0]['EMP_ID_PROOF']; ?>"  name="old_emp_id_proof"/>
     <span class="btn btn-info">Browse<input type="file" id="emp_proof" name="emp_id_proof" style="display: none;"  onchange="showimage1(this);"></span>
    </label>
    <input type="text" required="" name="" value="<?php echo $result[0]['EMP_ID_PROOF']; ?>" class="form-control" readonly  >
    </div>
   </div>
  </div>
</div>
</div>
</div>
</div>

<div class="form-group">
<div class="col-md-7 col-md-offset-5">
<button type="submit" class="btn btn-md btn-success">Save</button>
</div>
</div>

</form>

</div>
<!--end panel body-->
</div>
<!-- end panel -->
</div>
<!-- end col-12 -->



</div>
<!-- end #content -->



<!-- begin scroll to top btn -->
<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
<!-- end scroll to top btn -->
</div>
<!-- end page container -->






<script>
$('.selectpicker').selectpicker({
style: 'btn-white',
});

$(function() {              
// Bootstrap DateTimePicker v4
$('.datetimepicker').datepicker({
format: 'dd/M/yyyy'
});
});


function showimage(input){
var preimage = new FileReader();
preimage.onload = function(e) {
$('#previewing').attr('src', e.target.result);
$('#previewing').attr('src', e.target.result);
}
preimage.readAsDataURL(input.files[0]);
}

function showimage1(input){
var preimage = new FileReader();
preimage.onload = function(e) {
$('#previewing1').attr('src', e.target.result);
$('#previewing1').attr('src', e.target.result);
}
preimage.readAsDataURL(input.files[0]);
}








$(function() {
// We can attach the `fileselect` event to all file inputs on the page
$(document).on('change', ':file', function() {
var input = $(this),
numFiles = input.get(0).files ? input.get(0).files.length : 1,
label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
input.trigger('fileselect', [numFiles, label]);
});

// We can watch for our custom `fileselect` event like this
$(document).ready( function() {
$(':file').on('fileselect', function(event, numFiles, label) {

var input = $(this).parents('.input-group').find(':text'),
log = numFiles > 1 ? numFiles + ' files selected' : label;

if( input.length ) {
input.val(log);
} else {
if( log ) alert(log);
}

});
});
});





</script>
</body>

<!-- Mirrored from seantheme.com/color-admin-v1.6/admin/html/form_elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Mar 2015 08:08:50 GMT -->
</html>

