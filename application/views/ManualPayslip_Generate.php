  <title>Manual Payslip Report</title>  <style>
	.col-md-6.border {
	    border: 1px solid;
	}
	.btn-group > .btn + .dropdown-toggle {
    height: 22px;
    padding-left: 8px;
    padding-right: 8px;
}
iframe {
    border: medium none;
}
tr {
    font-size: 12px;
}
    </style>
<div id="content" class="content">
    <div class="row">
	<div class="col-md-12">
	    <div class="panel panel-inverse" data-sortable-id="form-stuff-2">
		<div class="panel-heading">
		    <div class="panel-heading-btn">
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
		    </div>
			<h4 class="panel-title">Manual Payslip</h4>
		</div>
		<div class="panel-body">
			<div class="conatnier">
			    <div class="well">
				<legend>PaySlip</legend>
				<div class="row">
				    <div class="col-md-12">
					<div class="col-md-1">
					    <label>Employee Name :</label>
					</div>
					<div class="col-md-3">
					    <input type="text" style="text-transform: capitalize;" name="payslip_name" id="name" class="form-control">
					</div>
					
					<div class="col-md-1 hide">
					    <label>Payslip No :</label>
					</div>
					<div class="col-md-2 hide">
					   <input type="text" name="payslipno" id="payslipno" class="form-control" >
					</div>
					
					<div class="col-md-1">
					    <label>Select Month:</label>
					</div>
					<div class="col-md-3">
					    <div class="form-group">
						<div class="input-group input-append date" id="datePicker">
						    <input type="text" class="form-control" name="payslip_month" id="month" placeholder="" />
						    <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
						</div>
					    </div>
					</div>
					<div class="col-md-1">
					    <label>Select Year:</label>
					</div>
					<div class="col-md-3">
					    <div class="form-group">
						<div class="input-group input-append date" id="datePicker1">
						    <input type="text" class="form-control" name="payslip_year" id="year"  placeholder="" />
						    <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
						</div>
					    </div>
					</div>
				    </div>
				    <div class="col-md-12">
					<br>
					<center>
					    <button type="button" id="window" class="btn btn-info btn-sm" onclick="createslip_pdf1()" data-toggle="modal" data-target="#myModal">View & Email Payslip</button>
					</center>
				    </div>
				    <div class="col-md-12">
					<div class="container">
					    <!-- Modal -->
					    <div class="modal fade" id="myModal" role="dialog">
					      <div class="modal-dialog modal-lg">
						<div class="modal-content">
						  <div class="modal-header">
						    <button type="button" class="close" data-dismiss="modal">&times;</button>
							<div class="btn-group pull-right">
							    <button type="button" class="btn btn-success btn-xs">Action</button>
							    <button type="button" class="btn btn-success btn-xs dropdown-toggle" data-toggle="dropdown">
								<span class="caret"></span>
							    </button>
							    <ul class="dropdown-menu" role="menu">
								<li data-toggle="modal" data-target="#email"><a href="#">Email</a></li>								
								
							    </ul>
							</div>
							    <h4 class="panel-title">Payslip</h4>

						  </div>
						  <div class="modal-body" id="payslip">
						    <iframe width="100%" height="729px" id="paySlip" name="paySlip" src="<?php echo base_url('PayslipCtr/createslip_pdf1');?>" ></iframe>
						</div>
						<div class="modal-footer">
						    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						  </div>
						</div>
					    </div>
					    <h2>Email</h2>
					    <form action="<?php echo base_url('PayslipCtr/send_email1');?>" method="post" enctype="multipart/form-data">
						    <div class="modal fade" id="email" role="dialog">
						      <div class="modal-dialog modal-md">
							<!-- Modal content-->
							<div class="modal-content">
							  <div class="modal-header">
							    <button type="button" class="close" data-dismiss="modal">&times;</button>
							    <h4 class="modal-title">Email</h4>
							  </div>
							    <div class="modal-body">
								<input type="hidden" name="atach_name" id="atach_name">
								<input type="hidden" name="atach_month" id="atach_month">
								<input type="hidden" name="atach_year" id="atach_year">
								    <div class="form-group">
									<label>To Address</label>
									<input type="email" class="form-control"id="to" name="to" placeholder="Enter email"/>
								    </div>
								    <div class="form-group">
									<label>Subject</label>
									<input type="text" class="form-control"id="" name="subject" placeholder="Subject"/>
								    </div>
								    <div class="form-group">
									<label>Body</label>
									<textarea name="body" cols="5" rows="5" style="width: 100%"></textarea>
								    </div>
							    </div>
							    <div class="modal-footer">
							    <input type="submit" class="btn btn-success btn-sm"  value="Send"><button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
							  </div>
							</div>
						</form>
						    </div>
						  </div>
					    </div>
				     </div>
				    </div>
				<legend>Report</legend>
				<div class="row">
				    <div class="col-md-12">
					<table class="table datatable table-bordered nowrap" id="myTable">
						    <thead>
							<th>S.No</th>
                                                        <th class="hide">Id</th>
                                                        <th>Employee Id</th>
							<th>Employee Name</th>
							<th>Date/Month/Year</th>
							
							<th>Department</th>
                                                        <th>Designation</th>
                                                        <th>Join Date</th>
                                                        <th>Pay Date</th>
							<th>Payslip No</th>
							<th>Working Days</th>
							<th>Worked Days</th>
							<th>Basic Salary</th>
							<th>Increment</th>
							<th>Incentive</th>
							
							<th>TA</th>
							<th>HRA</th>
							<th>DA</th>
							<th>Gross Earning</th>
							<th>LOP</th>
							<th>Advance Salary</th>
							<th>Other_dedcution</th>
							<th>Gross_dedcution</th>
							<th>Remarks</th>
							<th>Net Amount</th>
							<th>Insert Timestamp</th>
							
						    </thead>
						    <tr>
							<?php foreach($payroll as $row){ ?>
								<td><center></center></td>
								<input type="hidden" id="data" name="tabledata" value="<?php echo $row['ID'] ?>">
                                                                 <td class="hide"><center><?php echo $row['ID']?></center></td>
                                                                 <td><center><?php echo strtoupper($row['EMP_ID'])?></center></td>
								<td><center><?php echo ucwords($row['EMP_NAME'])?></center></td>
								<td><center><?php echo ucwords($row['MONTH_YEAR'])?></center></td>
								
								<td><center><?php echo strtoupper($row['EMP_DEPARTMENT'])?></center></td>
                                                                <td><center><?php echo ucwords($row['DESIGNATION'])?></center></td>
                                                                <td><center><?php echo ucwords($row['JOIN_DATE'])?></center></td>
                                                                <td><center><?php echo ucwords($row['PAY_DATE'])?></center></td>
								<td><center><?php echo ucwords($row['PAYSLIP_NO'])?></center></td>
								<td><center><?php echo ucwords($row['TOTAL_WORKING_DAYS'])?></center></td>
								<td><center><?php echo ucwords($row['WORKED_DAYS'])?></center></td>
								<td><center><?php echo ucwords($row['BASIC_SALARY'])?></center></td>
								<td><center><?php echo ucwords($row['INCREMENT'])?></center></td>
								<td><center><?php echo ucwords($row['INCENTIVE'])?></center></td>
								
								<td><center><?php echo ucwords($row['TRAVELLING_ALLOWANCE'])?></center></td>
								<td><center><?php echo ucwords($row['HRA'])?></center></td>
								<td><center><?php echo ucwords($row['DA'])?></center></td>
								<td><center><?php echo ucwords($row['GROSS_EARNINGS'])?></center></td>
								<td><center><?php echo ucwords($row['LOP'])?></center></td>
								<td><center><?php echo ucwords($row['ADVANCE_SALARY'])?></center></td>
								<td><center><?php echo ucwords($row['OTHER_DEDUCTIONS'])?></center></td>
								<td><center><?php echo ucwords($row['GROSS_DEDUCTIONS'])?></center></td>
								<td><center><?php echo ucwords($row['REMARKS'])?></center></td>
								<td><center><?php echo ucwords($row['NET_AMOUNT'])?></center></td>
                                                                <td><center><?php echo ucwords($row['CR_DATE']);?><center></td>
							      
						    </tr>
						    <?php } ?>
						</table>					
				    </div>
				</div>
                               <div class="col-md-offset-5">
					<button type="button" id="deletebutton" name="" class="btn btn-danger">Delete</button>
                                 </div>
			     </div>
			</div>
<!--			</form>
-->			</div>
			</div>
			</div>
			</div>
		   </div>
    
  <script>
    function fetchdata($this){
    var name =$this.val();
    console.log(name);

    $.ajax({
    type:"post",
    url:"<?php echo base_url('PayslipCtr/getPayslipNo');?>",
    data:{name:name},
    dataType:'json',
    success:function(json){
        //console.log(json);
	$("#payslipno").val(json[0].PAYSLIP_NO);
	//$("#department").val(json[0].EMP_DEPARTMENT).selectpicker('refresh');
    }
    });
    }
    </script>
    
<script>

	function createslip_pdf1(){
	    var name=$("#name").val();
            var month=$("#month").val();
            var year=$("#year").val();
	    
	    $("#atach_name").val(name);
            $("#atach_month").val(month);
            $("#atach_year").val(year);
	    
	    var url="<?php echo base_url('PayslipCtr/createslip_pdf1/');?>"+name+"/"+month+"/"+year
	    $('#paySlip').attr('src',url);
	   
    }
 
    function slipprint() {
    window.paySlip.print();
    }
</script>

<script>
    $('#datePicker')
        .datepicker({
            format: 'M'
        })
        .on('changeDate', function(e) {
            $('#eventForm').formValidation('revalidateField', 'date');
        });
    $('#datePicker1')
        .datepicker({
            format: 'yyyy'
        })
        .on('changeDate', function(e) {
            $('#eventForm').formValidation('revalidateField', 'date');
        });
</script>
<script>
	    $(document).ready(function() {
			  var t =  $('.datatable').DataTable( {
			    dom: 'lBfrtip',
			    buttons: [],
			    select: true,
			    "columnDefs": [ {
					    "searchable": false,
					    "orderable": false,
					    "targets": 0
				    } ],
				    "order": [[ 1, 'desc' ]],
				     "scrollX": true,
				    // "scrollY": 325,
		    } );
			    t.on( 'order.dt search.dt', function () {
				    t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
					    cell.innerHTML = i+1;
				    } );
			    } ).draw();
		    } );
		      

 $(document).ready(function() {
$('#deletebutton').click(function () {

//var $this = $(this);
//console.log($this);
if(confirm("Are you sure want to delete!"))
{
var line_id=$("#myTable tr.selected").find('[name="tabledata"]').val();
console.log(line_id);
$.ajax({

url:'<?php echo site_url('payslipCtr/manual_payslip_delete');?>',
type:"post",
data:{'id':line_id},

success:function(){

  $("#myTable tr.selected").remove();
  window.location.reload();

},
});
}
});
});
</script>

