<title>Add Employee</title>

<div id="content" class="content">
<!-- begin breadcrumb -->
<ol class="breadcrumb pull-right">
<li><a href="javascript:;">Home</a></li>
<li><a href="javascript:;">Form Stuff</a></li>
<li class="active">Form Elements</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h2 class="page-header">ADD EMPLOYEE <small><!--header small text goes here...--></small></h2>
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
<form class="form-horizontal" action="<?php echo base_url(); ?>PayslipCtr/insert_employee_list/" id="form-validation" method="post" enctype="multipart/form-data">
<div class="well">
<legend>Main Details</legend>
<div class="row">
<div class="col-md-12">
	<div class="col-md-6">
		<div class="form-group">
			<label class="col-md-3 control-label">Employee Id :</label>
				<div class="col-md-9">
					<?php foreach($this->ps_model->get_employee_id() as $row){ ?>
					<input type="text" class="form-control" name="emp_id" value="<?php echo $row['employee_id']; ?>" disabled/>
					<?php } ?>
				</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label">Title :</label>
			<div class="col-md-9">
				<select class="form-control selectpicker" name="emp_title">
					<option value="">select an option</option>
						<option>Mr.</option>
						<option>Ms.</option>
						<option>Mrs.</option>
						
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label">First Name :</label>
			<div class="col-md-9">
				<input type="text" class="form-control" style="text-transform: capitalize;" name="emp_first_name"placeholder="First Name"  />
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label">Last Name :</label>
			<div class="col-md-9">
				<input type="text" class="form-control" style="text-transform: capitalize;" name="emp_last_name" placeholder="Last Name"  />
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
						<input type='text' name="emp_dob" class="form-control datetimepicker"/>
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
					<input type="radio" name="emp_gender" value="Male">Male
			  </label>
			</div>
			<div class="col-md-5">
			   <label class="radio-inline">
					<input type="radio" name="emp_gender" value="Female">Female
			  </label>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label">Designation :</label>
			<div class="col-md-9">
				<select class="form-control selectpicker" name="emp_designation">
					<option value="">Select an option</option>
						<?php foreach($this->ps_model->master_designation() as $row){ ?>
						<option value="<?php echo $row['designation'];?>"><?php echo $row['designation'];?></option>
						<?php } ?>	
						
				</select>
			</div>
		</div>
                <div class="form-group">
			<label class="col-md-3 control-label">Shift :</label>
			<div class="col-md-9">
				<select class="form-control selectpicker" name="emp_shift">
				    <option value="" selected disabled hidden>Select an option</option>
				    <option value="Morning">Morning</option>
				    <option value="Evening">Evening</option>
				</select>
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-3 control-label">Department :</label>
			<div class="col-md-9">
				<select class="form-control selectpicker" name="emp_department">
						<option value="">Select an option</option>
						<?php foreach($this->ps_model->master_department() as $row){ ?>
						<option value="<?php echo $row['department'];?>"><?php echo $row['department'];?></option>
						<?php } ?>								

						
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label">Joining Date :</label>
			<div class="col-md-9">
				<div class='input-group date'>
						   <input type='text' name="emp_joining_date" class="form-control datetimepicker"/>
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
				<input type="text" class="form-control" style="text-transform: uppercase;" name="emp_bank_name" placeholder="Bank name"  />
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label">Account No :</label>
			<div class="col-md-9">
				<input type="text" class="form-control" name="emp_account_num" placeholder="Account no"  />
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label">IFSC Code :</label>
			<div class="col-md-9">
				<input type="text" style="text-transform: uppercase;" class="form-control" name="emp_ifsc_code" placeholder="IFSC Code"  />
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-md-3 control-label">Branch Name :</label>
			<div class="col-md-9">
				<input type="text" class="form-control" style="text-transform: uppercase;" name="emp_branch_name" placeholder="Branch name"  />
			</div>
		</div>
		
		
			<div class="form-group">
		<label class="control-label col-md-3">Photo:</label>
		 <div class="col-md-9">
		 <img id="previewing" src="<?php echo base_url();?>application/assets/img/a.png"  name="profile" width="130px" height="100px">
		 <p></p>
		 <div class="input-group  col-md-9">
		 <label class="input-group-btn">
		  <span class="btn btn-info">Browse<input type="file"  name="emp_profile" style="display: none;"  onchange="showimage(this);"></span>
		  </label>
		  <input type="text" required="" name="" class="form-control" readonly  >
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
				<textarea  style="width: 100%;text-transform: capitalize;" rows="3" cols="30" name="emp_address"> </textarea> 
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-md-3 control-label">Town/city :</label>
			<div class="col-md-9">
				<input type="text" class="form-control" style="text-transform: capitalize;" placeholder="Town/City" name="emp_town" />
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-md-3 control-label">State :</label>
			<div class="col-md-9">
				<input type="text" class="form-control" style="text-transform: capitalize;" placeholder="State" name="emp_state"  />
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-md-3 control-label">Country :</label>
			<div class="col-md-9">
				<select class="form-control selectpicker" name="emp_country">
					
				    <option value="India">India</option>
				    <option value="Dubai">Dubai</option>
				    <option value="Canada">Canada</option>
				    <option value="Newzland">Newzland</option>
				    <option value="France">France</option>
						
				</select>
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-md-3 control-label">Zip code :</label>
			<div class="col-md-9">
				<input type="text" class="form-control" placeholder="Zip code" name="emp_zipcode" />
			</div>
		</div>
		
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label class="col-md-3 control-label">Landline No :</label>
			<div class="col-md-9">
				<input type="text" class="form-control" placeholder="Landlineno" name="emp_landline_no" />
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-md-3 control-label">Mobile No :</label>
			<div class="col-md-9">
				<input type="text" class="form-control" placeholder="Mobile no" name="emp_mobile_no" />
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-md-3 control-label">Email:</label>
			<div class="col-md-9">
				<input type="email" class="form-control" placeholder="Email"  name="emp_email" />
			</div>
		</div>
		
					<div class="form-group">
		<label class="control-label col-md-3">Profile :</label>
		 <div class="col-md-9">
		 <img id="previewing1" src="<?php echo base_url();?>application/assets/img/a.png"  name="profile" width="130px" height="100px">
		 <p></p>
		 <div class="input-group  col-md-9">
		 <label class="input-group-btn">
		  <span class="btn btn-info">Browse<input type="file"  name="emp_id_proof" id="emp_proof" style="display: none;"  onchange="showimage1(this);"></span>
		  </label>
		  <input type="text" required="" name="" class="form-control" readonly  >
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
$(document).ready(function() {
$('#form-validation').bootstrapValidator({
feedbackIcons: {
valid: 'glyphicon glyphicon-ok',
invalid: 'glyphicon glyphicon-remove',
validating: 'glyphicon glyphicon-refresh'
},
fields: {
emp_id:
{
validators:
{
notEmpty:
{
message: 'The employee id is required and cannot be empty'	
},

} 
},

emp_title:
{
validators:
{
notEmpty:
{
message: 'Select any one'
},
}
},

emp_first_name:
{
validators:
{
notEmpty:
{
message: 'The first name is required and cannot be empty'	
},
regexp:{
regexp: /^[a-z\s]+$/i,
message:'The full name should have alphabet and spaces only'
}
} 
},
emp_last_name:
{
validators:
{
notEmpty:
{
message: 'The last name is required and cannot be empty'	
},
regexp:{
regexp: /^[a-z\s]+$/i,
message:'The name should have alphabet and spaces only'
}
} 
},

emp_dob :
{
trigger: 'blur',
validators:
{
notEmpty:
{
message: 'Cannot be empty'	
},

}
},

emp_gender :
{
validators:
{
notEmpty:
{
message: 'Cannot be empty'	
},

}
},

emp_designation:
{
validators:
{
notEmpty:
{
message: 'Select any one'
}
}
},
emp_shift:
{
validators:
{
notEmpty:
{
message: 'Select any one'
}
}
},

emp_department:
{
validators:
{
notEmpty:
{
message: 'Select any one'
}
}
},

emp_joining_date:
{
trigger: 'blur',
validators:
{
notEmpty:
{
message: 'Cannot be empty'	
},

}
},

emp_account_num:
{
validators:
{
notEmpty:
{
message: 'Account number cannot be empty'	
},
stringLength: {
min:7,
max: 13,
message:'Account number should be 13 digits'
},
regexp:{
regexp: /^[0-9]{1,13}$/,
message:'Account number should contain only numbers'	
}

}
},


emp_ifsc_code:
{
validators:
{
notEmpty:
{
message: 'IFSC code cannot be empty'	
},
stringLength: {
min:7,
max: 13,
message:'IFSC Code should be 13 digits'
},
regexp: {
    regexp:  /^[a-zA-Z0-9_-][a-zA-Z0-9 ._/\,-]*$/,
    message: 'IFSC code should contain alphanumerics only'
},


}
},

emp_bank_name:
{
validators:
{
notEmpty:
{
message: 'The Bank name is required and cannot be empty'	
},
regexp:{
regexp: /^[a-z\s]+$/i,
message:'The Bank Name should have alphabet and spaces only'
}
}
},

emp_branch_name:
{
validators:
{
notEmpty:
{
message: 'The Branch name is required and cannot be empty'	
},
regexp:{
regexp: /^[a-z\s]+$/i,
message:'The Branch name should have alphabet and spaces only'
}
} 

},

emp_profile:
{
trigger: 'blur',
validators:{
notEmpty: {
message: 'Image is must. cannot be empty'	
},

}
},

emp_country: {
validators: {
notEmpty: {
message: 'Select any one'
}
}
},

emp_zipcode :
{
validators:
{
notEmpty:
{
message: 'Zipcode cannot be empty'	
},
regexp:{
regexp:/^(\d{6})?$/,
message:'Zipcode should contain only numbers'	
}

}
},


emp_mobile_no:
{
validators:
{
notEmpty:
{
message: 'Mobile number cannot be empty'	
},
stringLength: {
max: 10,
message:'Phone number should be 10 digits'},
regexp:{
regexp: /^(\+91[\-\s]?)?[0]?(91)?[789]\d{9}$/,
message:'Phone number should contain only numbers'	
}

}
},

emp_email: {
validators: {
notEmpty: {
message: 'The email address is required and cannot be empty'
},
regexp: {
regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
message: 'The value is not a valid email address'
}
}
},

emp_address:
{
validators:
{
notEmpty:
{
message: 'The Address is required and cannot be empty'	
},
//  regexp:{
//   regexp: /^[a-z\s]+$/i,
//	message:'The full name should have alphabet and spaces only'
//}
} 

},

emp_state:
{
validators:
{
notEmpty:
{
message: 'The state is required and cannot be empty'	
},
//  regexp:{
//   regexp: /^[a-z\s]+$/i,
//	message:'The full name should have alphabet and spaces only'
//}
} 

},

emp_town:
{
validators:
{
notEmpty:
{
message: 'The town is required and cannot be empty'	
},
//  regexp:{
//   regexp: /^[a-z\s]+$/i,
//	message:'The full name should have alphabet and spaces only'
//}
} 

},


emp_city:
{
validators:
{
notEmpty:
{
message: 'The City is required and cannot be empty'	
},
//  regexp:{
//   regexp: /^[a-z\s]+$/i,
//	message:'The full name should have alphabet and spaces only'
//}
} 

},

emp_id_proof:
{
trigger: 'blur',
validators:{
notEmpty: {
message: 'Image is must. cannot be empty'	
},

}
},


},
});
});
</script>




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
if( log ) console.log(log);
}

});
});
});





</script>
</body>


</html>

