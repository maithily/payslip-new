<title>Master Shift</title>

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
<h4 class="panel-title">Shift Settings</h4>
</div>
<div class="panel-body">
<div class="well">	
<legend>Add Shift</legend>
<div class="row">
	<form action="<?php echo base_url('payslipCtr/master_insert_shift');?>" method="post">
	
		<div class="">
			<table class="table table-responsive table-bordered">
			<thead class="thead-default">
				<tr>
				  <th>Select</th>
				  <th>Shift Name</th>
				  <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Start Time</th>
				  <th> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  End Time</th>
 <th>Created date/time</th>
				  <th>Update date/time</th>
				</tr>
			</thead>
			<tbody>
			  <tr>
				<th scope="row"><input type="checkbox" name="mrng" value="morning" id="mrng"></th>
				<td>Morning</td>
				<td>
					<div class="col-md-8">
						<div class="input-group bootstrap-timepicker timepicker">
						    
						    <input id="timepicker1" type="text" name="mrngStartTime" class="form-control input-small timepicker1 numberfield1" value="<?php echo $result[0]['mrng_start_time'];?>" disabled >
						    <input type="hidden" value="<?php echo $result[0]['mrng_start_time'];?>" name="mrng_start">
						    
						<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
						</div>
					</div>
				</td>
				
				<td>
					<div class="col-md-8">
						<div class="input-group bootstrap-timepicker timepicker">
							
								<input id="timepicker2" type="text" name="mrngEndTime" class="form-control input-small timepicker1 numberfield1" value="<?php echo $result[0]['mrng_end_time'];?>" disabled >
							    <input type="hidden" value="<?php echo $result[0]['mrng_end_time'];?>" name="mrng_end">
							 <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
						</div>
				    </div>
				</td>
<td>
					<?php foreach($this->ps_model->master_shift_time() as $row)
					{
							 echo $row['cr_date'];
					
					?>
					
				</td>
				<td>
					<?php
					 echo $row['up_date'];
					}
					?>
				</td>
			  </tr>
			  
			 
			  <tr>
				<th scope="row"> <input type="checkbox" name="evening" value="evening" id="evening"></th>
				<td>Evening</td>
				<td>
					 <div class="col-md-8"><div class="input-group bootstrap-timepicker timepicker">
						  
							<input id="timepicker5" type="text" name="eveStartTime" class="form-control input-small timepicker1 numberfield3" value="<?php echo $result[0]['afternoon_start_time'];?>" disabled>
							<input type="hidden" value="<?php echo $result[0]['afternoon_start_time'];?>" name="aftn_start">
						 <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
						 </div>
				       </div>
				</td>
				<td>   <div class="col-md-8"><div class="input-group bootstrap-timepicker timepicker">
				 
							<input id="timepicker6" type="text" name="eveEndTime" class="form-control input-small timepicker1 numberfield3" value="<?php echo $result[0]['afternoon_end_time'];?>" disabled>
							<input type="hidden" value="<?php echo $result[0]['afternoon_end_time'];?>" name="aftn_end">
						 <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
						 </div>
				       </div>
				</td>
<td>
</td>
<td>
</td>
			  </tr>
			</tbody>
			</table>
			<div class="row">
					<div class="col-md-2">
					   <div class="form-group">
						   <h5><b>Total Working Hours:</b></h5>
						</div>
				   </div>
					
					<div class="col-md-2">
					<div class="form-group">
						<input type="text" class="form-control total" value="<?php echo $result[0]['total_working_hours'];?>" name="total_working_hours" placeholder="Total working Hours"  />
					</div>
					</div>
					
				    <div class="form-group">
					  <div class="col-md-2">
						  <button type="submit" class="btn btn-sm btn-success form-control">Apply</button>
					  </div>
				    </div>
			</div>
			<input name="id_val" id="id_val" class="" type="hidden">
			<input name="firstVal" id="firstVal" class="get_sum" type="hidden">
			<input name="secondVal" id="secondVal" class="get_sum" type="hidden">
		</div> 
	</form>
</div>

</div>
				

</div>

<!-- end panel -->
<!--</div>-->
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

$('#mrng').change(function(){
	console.log($(this).val());
	$('.numberfield1').attr('disabled',!this.checked);
	
});
$('#lunch').change(function(){
	console.log($(this).val());
	$('.numberfield2').attr('disabled',!this.checked);
	
});
$('#evening').change(function(){
	console.log($(this).val());
	$('.numberfield3').attr('disabled',!this.checked);
	
});

</script>

<script>
$(function() {              
	   
	    $('.timepicker1').timepicker({
		defaultTime:false,
		//showInputs:false,
	    });
	    
	    $('#timepicker1,#timepicker2,#timepicker5,#timepicker6').on('change',function() 
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
		
		var evestart_time = $('#timepicker5').val();
		var eveend_time = $('#timepicker6').val();
		var evestartTime=moment(evestart_time, "HH:mm A");
		var eveendTime=moment(eveend_time, "HH:mm A");
		var eveduration = moment.duration(eveendTime.diff(evestartTime));
		var evehours = parseInt(eveduration.asHours());
		var eveminutes = parseInt(eveduration.asMinutes())-evehours*60;
		var evediff = evehours+':'+eveminutes;
		$('#secondVal').val(evediff);
		getTotalWorkHours();
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
	    var duration = moment.duration({hours: hourVal, minutes: minVal});
	    var sub = moment(realTime, 'hh:mm').subtract(duration).format('hh:mm');
	    $('.total').val(sub);
	}
	
	
	});
	
 </script>


</html>

