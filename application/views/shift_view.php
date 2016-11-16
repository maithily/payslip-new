<style>
.bootstrap-select > .dropdown-toggle {
    width:85%!important;
}
.bootstrap-datetimepicker-widget.dropdown-menu {
    width: 27em ;
}

</style>
    <div id="content" class="content">
	<!-- begin breadcrumb -->
	<ol class="breadcrumb pull-right">
	    <li><a href="javascript:;">Home</a></li>
	    <li><a href="javascript:;">Page Options</a></li>
	    <li class="active">Blank Page</li>
	</ol>
	<!-- end breadcrumb -->
	<!-- begin page-header -->
	<h1 class="page-header">Shift Settings <small></small></h1>
	<!-- end page-header -->
	<div class="panel panel-inverse">
	    <div class="panel-heading">
		<div class="panel-heading-btn">
		    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
		    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
		    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
		    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
		</div>
		<h4 class="panel-title">Shift Settings</h4>
	    </div>
	    <div class="panel-body">
	    <!--<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">&times;</a><?php echo $status; ?></div>-->
		<form id="form_validation" method="post" action="<?php echo base_url('payslipCtr/getShiftDetailsNew');?>" enctype="multipart/form-data" role="form">
		    <div class="well">
			<div class="form-inline">
			    <legend>Working Duration</legend>
			    <div class="form-group col-md-3">
				<label>Employee Name: </label><br>
				<select name="emp_name" id="emp_name" class="form-control selectpicker" data-style="btn-white">
				    <option disabled selected hidden>Select Employee</option>
				   <?php foreach($this->ps_model->empdetails() as $row){ ?>
	      
		<option  value="<?php echo $row['EMP_FIRST_NAME'] ?>" ><?php echo $row['EMP_FIRST_NAME'] ?></option>
	       <?php } ?>
				</select>
			    </div>
			    <div class="form-group col-md-3">
				<label>Date : </label> 
				<div class="input-group date">
				    <input type='text' id="dailyDate" name="dailyDate" class="form-control datetimepicker1"/>
				    <span class="input-group-addon">
					<span class="glyphicon glyphicon-calendar"></span>
				    </span>
				</div>
			    </div>
			    
			    <div class="form-group col-md-5">
				    <div class="col-md-3" id="CL">
					<label>CL Leave : </label> <br>
					<input type="checkbox" name="clLeave" value="TRUE" id="clChkBox" class="clearVal1">
					    
				    </div>
				    <div class="col-md-4" id="LOP">
					<label>LOP Leave : </label> <br>
					<input type="checkbox" name="lopLeave" value="TRUE" id="lopChkBox" class="clearVal1">
				    </div>
			    </div><br><br><br><br>
			</div>
		    </div>
		    <input type="hidden" name="present" value="Present">
		    <input type="hidden" name="LOP" value="LOP">
		    <input type="hidden" name="CL" value="CL">
		  		    <div class="well">
		    <div class="row">
			<div id="details">
			<div class="col-md-3">
			    <label>Mrng Start Time :</label> 
			    <div class="input-group bootstrap-timepicker timepicker">
				<input id="timepicker1" type="text" name="mrngStartTime" class="form-control input-small timepicker1 clearVal">
				<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
			    </div>
			</div>
			<div class="col-md-3">
			    <label>Mrng End Time : </label> 
			    <div class="input-group bootstrap-timepicker timepicker">
				<input id="timepicker2" type="text" name="mrngEndTime" class="form-control input-small timepicker1 clearVal">
				<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
			    </div>
			</div>
			<div class="col-md-3">
			    <label>Eve Start Time : </label> 
				<div class="input-group bootstrap-timepicker timepicker">
				    <input id="timepicker3" type="text" name="eveStartTime" class="form-control input-small timepicker1 clearVal">
				    <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
				</div>
			</div>
			<div class="col-md-3">
			    <label>Eve End Time : </label> 
				<div class="input-group bootstrap-timepicker timepicker">
				    <input id="timepicker4" type="text" name="eveEndTime" class="form-control input-small timepicker1 clearVal">
				    <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
				</div>
			</div>
		    </div>
		    </div>
		    <br>
		    <div class="row">
			<div class="col-md-3">
			    <label>Breaks : </label> 
			    <input placeholder="Location" name="breakTime" id="breakTime" class="form-control input-md clearVal" onchange="getSubVal($(this));" type="text">
			</div>
			<div class="col-md-3">
			    <label>Work Hrs: </label> 
			    <input placeholder="Work Hours" name="workHours" id="workHours"  class="form-control input-md total clearVal" type="text">
			</div>
			<div class="col-md-3">
			    <label>Select Status : </label> <br>
				<select class="form-control" name="status" id="status">
				      <option value="Present">Present</option>
				    <option value="Half-Day">Half-Day</option>
				    <option value="LOP">LOP</option>
				    <option value="Second_Saturday">Second Saturday</option>
				    <option value="Fourth_Saturday">Fourth Saturday</option>
				    <option value="Festival_Holidays">Festival Holiday</option>
				    <option value="Sunday">Sunday</option>
				</select>	
			</div>
			<div class="col-md-3">
			    <label>Remarks : </label> <br>
			    <textarea style="width: 233px; height: 36px;" name="remarks" id="remarks" ></textarea>
			</div>
		    </div>
		    </div>

		    <div class="col-md-6 col-md-offset-4" style="padding-bottom: 15px;">
			<input name="firstVal" id="firstVal" class="get_sum" type="hidden">
			<input name="secondVal" id="secondVal" class="get_sum" type="hidden">
			<input name="id_val" id="id_val" class="" type="hidden">
			<div class="row">
			    <div class="col-md-4">
				<input type="submit" name="save" id="Submit" value="Submit" class="btn btn-sm btn-success submit">
				<input type="button" name="report" value="Report" id="Report" class="btn btn-sm btn-primary">
			    </div>
			</div>
		    </div>
		</form>
	    </div>
	</div>
    </div>
    <script>
    $(document).ready(function() {
    $('#form_validation').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
	    valid: 'glyphicon glyphicon-ok',
	    invalid: 'glyphicon glyphicon-remove',
	    validating: 'glyphicon glyphicon-refresh'
	},
        fields: {
           
	    dailyDate: {
		trigger: 'blur',
                validators: {
                    notEmpty: {
                       message: 'Cannot be empty'
                    }
                }
            }
        }
	});
    });
    </script>
    <script>
	$(document).ready(function()
	{
	    $("#todate").hide();
	  });
	$(function() {              
	    $('.datetimepicker1').datepicker({
		  format: 'dd/M/yyyy'
	    });
	    
	    $('.timepicker1').timepicker({
		defaultTime:false,
		//showInputs:false,
	    });
	    
	    $('#timepicker1,#timepicker2,#timepicker3,#timepicker4').on('change',function() 
	    {
		var start_time = $('#timepicker1').val();
		var end_time = $('#timepicker2').val();
		var startTime=moment(start_time, "HH:mm A");
		var endTime=moment(end_time, "HH:mm A");
		var duration = moment.duration(endTime.diff(startTime));
		var hours = parseInt(duration.asHours());
		var minutes = parseInt(duration.asMinutes())-hours*60;
		var diff = hours+':'+minutes;
		$('#firstVal').val(diff);
		
		var evestart_time = $('#timepicker3').val();
		var eveend_time = $('#timepicker4').val();
		var evestartTime=moment(evestart_time, "HH:mm A");
		var eveendTime=moment(eveend_time, "HH:mm A");
		var eveduration = moment.duration(eveendTime.diff(evestartTime));
		var evehours = parseInt(eveduration.asHours());
		var eveminutes = parseInt(eveduration.asMinutes())-evehours*60;
		var evediff = evehours+':'+eveminutes;
		$('#secondVal').val(evediff);
		
		getTotalWorkHours();
	    });

	});
	
	function getTotalWorkHours(){
	    var firstVal = $('#firstVal').val();
	    var secondVal = $('#secondVal').val();
	    var totalh =0;
	    var totalm =0;
	    $('.get_sum').each(function() {
		if (($(this).val())) {
		    var h = parseInt(($(this).val()).split(':')[0]);
		    var m = parseInt(($(this).val()).split(':')[1]);
		    totalh += h;
		    totalm += m;
		}
	    });
	    totalh += Math.floor(totalm / 60);
	    totalm = totalm % 60;
	    $('.total').val(totalh.toString() + '.' + totalm.toString());
	    getSubVal($this);
	}
	
	function getSubVal($this){
	    var CurrVal = $this.val();
	    var CurrValSplit = CurrVal.split(':');
	    var hourVal = CurrValSplit[0];
	    var minVal = CurrValSplit[1];
	    var realTime = $('.total').val();
	    var duration = moment.duration({hours: hourVal, minutes: minVal})
	    var sub = moment(realTime, 'hh:mm').subtract(duration).format('hh:mm');
	    $('.total').val(sub);
	}
	
	$('#clChkBox').change(function(){
	    if($(this).attr('checked')){
		  $(this).val('TRUE');
                  $('.clearVal').val('');
		  $('#LOP').addClass('hide');
		  $('#details').addClass('hide');
	     }else{
		  $(this).val('FALSE');
		  $('#LOP').removeClass('hide');
		  $('#details').removeClass('hide');
	     }
	});
	
	$('#lopChkBox').change(function(){
	    if($(this).attr('checked')){
		$(this).val('TRUE');
		$('#CL').addClass('hide');
		$('#todate').show();
		$('#details').addClass('hide');
	    }else{
		$(this).val('FALSE');
		$('#CL').removeClass('hide');
		$('#todate').hide();
		$('#details').removeClass('hide');
	    }
	});
	
	$('#dailyDate').blur(function(){
	    var currentVal = $(this).val();
	    var emp_name = $('#emp_name').val();
	    var mode = 'Add';
	    var todate=$("#dailyDate1").val();
	    $.ajax({
		type:'POST',
		url: "<?php echo base_url('PayslipCtr/getShiftDetails'); ?>",
		dataType:"json",
		data:{currentVal:currentVal,emp_name:emp_name,mode:mode,todate:todate},                    
		success: function (json) {
		    console.log(json);
		    if(json == 'Add' ){
			$('.submit').val('Submit');
                        $("#clChkBox").prop('checked', false); 
                        $("#lopChkBox").prop('checked', false); 
			$('.clearVal').val('');
		    }else{
			$('#timepicker1').val(json[0].SFT_MRNG_STRATTIME);
			$('#timepicker2').val(json[0].SFT_MRNG_ENDTIME);
			$('#timepicker3').val(json[0].SFT_EVE_STARTTIME);
			$('#timepicker4').val(json[0].SFT_EVE_ENDTIME);
			$('#breakTime').val(json[0].SFT_BREAK_HOUR);
			$('#workHours').val(json[0].SFT_WORKING_HOUR);
			$('#numOfDays').val(json[0].SFT_DAY);
                        $('#remarks').val(json[0].SFT_REMARKS);
			$('#status').val(json[0].SFT_STATUS);
			$('#Submit').val('Update');
			$('#id_val').val(json[0].SFT_ID);
                        if((json[0].SFT_CL_LEAVE)=='TRUE')
			{
			$("#clChkBox").prop('checked', true); 
			}
			 if((json[0].SFT_LOP_LEAVE)=='TRUE')
			{
			$("#lopChkBox").prop('checked', true); 
			}
		    }
		},
	    })
	});
	
	$('#Report').on('click',function(){
	    $var = $('#emp_name').val();
	    
	    //alert($var);
	    window.location.href = "<?php echo base_url();?>PayslipCtr/showRecord/"+$var;
	});
	
    </script>