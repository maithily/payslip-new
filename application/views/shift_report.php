<title>Daily Attendance Report</title>
<?//php print_r($getVal); exit;?>
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
	<h1 class="page-header">Daily Attendance Report <small></small></h1>
	<!-- end page-header -->
	<div class="panel panel-inverse">
	    <div class="panel-heading">
		<div class="panel-heading-btn">
		    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
		    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
		    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
		    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
		</div>
		<h4 class="panel-title">Daily Attendance Report</h4>
	    </div>
	    <div class="panel-body">
		<div class="well">
		    <div class="row">
			<div class="col-md-4">
			    <label>Employee Name :</label>
			    <?php foreach($getVal as $row)?>
			    <label><strong><?php echo $row['SFT_EMP_NAME']; ?></strong></label>
			  <input type="hidden" name="ename" id="ename" value="<?php echo $row['SFT_EMP_NAME']; ?>">
			
			   
			   
			</div>
			
		    </div>
		   
		</div>
	    <!--<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">&times;</a><?php echo $status; ?></div>-->
		<div class="table-responsive">
			<table id="attTable" class="table table-bordered" cellspacing="0" width=100%>
				<thead>
				  <tr>
				  <th>S.NO</th>
				<th>Date</th>
				<th>Mrng Start Time</th>
				<th>Mrng End Time</th>
				<th>Eve Start Time</th>
				<th>Eve End Time</th>
				<th>Break Time</th>
				<th>Working Hours</th>
				<th>Status</th>
                                 <th>Remarks</th>
				  </tr>
				</thead>
				<tbody id="attbody">
				<?php foreach($getVal as $row){?>
				<tr>
	
				    <input type="hidden" name="getid" value="<?php echo $row['SFT_ID'];?>">
				    <td></td>
					<td><?php echo $row['SFT_DATE']; ?></td>
					<td><?php echo $row['SFT_MRNG_STRATTIME']; ?></td>
					<td><?php echo $row['SFT_MRNG_ENDTIME']; ?></td>
					<td><?php echo $row['SFT_EVE_STARTTIME']; ?></td>
					<td><?php echo $row['SFT_EVE_ENDTIME']; ?></td>
					<td><?php echo $row['SFT_BREAK_HOUR']; ?></td>
					<td><?php echo $row['SFT_WORKING_HOUR']; ?></td>
					<td><?php echo $row['SFT_STATUS']; ?></td>
                                        <td><?php echo $row['SFT_REMARKS']; ?></td>
				</tr>
				  <?php } ?>
				 
				</tbody>
			</table>
		</div>
		
	<div class="col-md-offset-5">
			<button type="button" name="delete" id="deletebutton" class="btn btn-primary" disabled>DELETE</button>
	       <a href="<?php echo base_url('payslipCtr/attendance'); ?>"><input type="button" name="" value="Close" class="btn btn-danger"></a>
	</div>
	    </div>
	</div>
    </div>
    

	<script>
$("#attbody tr").click(function(){
$('button').prop('disabled', false);
});
		

$(document).ready(function() {
var t = $('#attTable').DataTable( {

"columnDefs": [ {

"searchable": false,
"orderable": false,
//"class": "index",

"targets": 0
} ],

"scrollX": true,
"order": [[ 1, 'asc' ]],
select: true,

} );

t.on( 'order.dt search.dt', function () {
t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
cell.innerHTML = i+1;
} );
} ).draw();


//t.fnReloadAjax();
} );
		
$(document).ready(function() {
$('#deletebutton').click(function ()
						 
{


if(confirm("Are you sure want to delete!"))
{
var line_id=$("#attTable tr.selected").find('[name="getid"]').val();


$.ajax({

url:'<?php echo base_url('payslipCtr/attendance_del');?>',
type:"post",
data:{'id':line_id},

success:function(){

$("#attTable tr.selected").remove();

},
});
}
});

});

function checkshow()
	{
	    
	    if($('.coupon_question').is(":checked")){
         $("#datepic1").removeClass('hide');
		$("#datepic2").removeClass('hide');
		$("#srecord").removeClass('hide');
	    }else{
	     $("#datepic1").addClass('hide');
	     $("#datepic2").addClass('hide');
	     $("#srecord").addClass('hide');
	    }	
	}
	
	$(document).ready(function()
	{
	    
	    $("#data1").hide();
	     $("#displayvalue").hide();
	    $("#datepic1").addClass('hide');
	     $("#datepic2").addClass('hide');
	     $("#srecord").addClass('hide');
	});
	
	 $('.datetimepicker1').datepicker({
		    format: 'yyyy-mm-dd'
	    });
	  $('.datetimepicker2').datepicker({
		    format: 'yyyy-mm-dd'
	    });


	$(function() {              

	    
	    $('#timepicker1,#timepicker2').on('change',function() 
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
		getTotalWorkHours();
	    });
	    $('#timepicker3,#timepicker4').on('change',function() 
	    {
		var start_time = $('#timepicker3').val();
		var end_time = $('#timepicker4').val();
		var startTime=moment(start_time, "HH:mm A");
		var endTime=moment(end_time, "HH:mm A");
		var duration = moment.duration(endTime.diff(startTime));
		var hours = parseInt(duration.asHours());
		var minutes = parseInt(duration.asMinutes())-hours*60;
		var diff = hours+':'+minutes;
		$('#secondVal').val(diff);
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
	    $('.total').val(totalh.toString() + ':' + totalm.toString())
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
		$('#details').addClass('hide');
	    }else{
		$(this).val('FALSE');
		$('#CL').removeClass('hide');
		$('#details').removeClass('hide');
	    }
	});
	
	$('#dailyDate').blur(function(){
	    var currentVal = $(this).val();
	    var emp_name = $('#emp_name').val();
	    $.ajax({
		type:'POST',
		url: "<?php echo base_url('payslipCtr/getShiftDetails'); ?>",
		dataType:"json",
		data:{currentVal:currentVal,emp_name:emp_name} ,                    
		success: function (json) {
		    //window.location.reload();
		},
	    })
	});
	
	function showrecords()
	{
	$('#datahd strong').hide()
	$("#data").hide();
	$("#data1").show();
	var fromdate=$("#fromdate").val();
	var todate=$("#todate").val();
	var ename=$("#ename").val();
	   
	   //var check=$("#check").val();
	   //console.log(fromdate);
	   //console.log(ename);
	    $.ajax({
		type:'POST',
		url: "<?php echo base_url('payslipCtr/checkdata'); ?>",
		dataType:"json",
		data:{fromdate:fromdate,todate:todate,ename:ename},                    
		success: function (json) {
		    console.log(json[0].checkvalue);
		    $("#displayvalue").show();
		    $("#displayvalue").text(json[0].checkvalue+'hrs');
		    console.log(json.query[0]);
		    if(json)
				{
					var len = json.query.length;
					console.log(len);
					var txt = "";
					if(len > 0)
					{
					    for(var i=0;i<len;i++)
					    {
						if(json.query[i].SFT_STATUS)
						{
							
						txt += "<tr><td>"+json.query[i].SFT_DATE+"</td><td>"+json.query[i].SFT_MRNG_STRATTIME+"</td><td>"+json.query[i].SFT_MRNG_ENDTIME+"</td><td>"+json.query[i].SFT_EVE_STARTTIME+"</td><td>"+json.query[i].SFT_EVE_ENDTIME+"</td><td>"+json.query[i].SFT_BREAK_HOUR+"</td><td>"+json.query[i].SFT_WORKING_HOUR+"</td><td>"+json.query[i].SFT_STATUS+"</td></tr>";
						$("#data1").show();
							 
						}
							
					    }
					$("#data1").show();
					$("#data1").append(txt);
					    
					 
    	
					}
					 
				}
		    //$("#displayvalue").val(json.sumvalue[0].checkvalue);
		},
	    })
	}
	
	
     </script>