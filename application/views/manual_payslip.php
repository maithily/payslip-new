   <title>Generate Payslip</title> 
    <style>
    .col-md-6.border {
    border: 1px solid;
    }
    .form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control {
    background: #ffffff none repeat scroll 0 0;
    opacity: 0.6;
    }
    .col-md-1.ss {
    margin-top: 9px;
    }
    .btn.btn-primary.btn-sm {
    margin-left: 4px;
    }
    .form-control.check {
    margin-left: -11px;
    margin-top: -6px;
    }
    .form-control.days {
    margin-left: 13px;
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
    <h4 class="panel-title">Generate Manual Payslip</h4>
    </div>
    <div class="panel-body">
    <form action="<?php echo base_url('PayslipCtr/manual_Payslip_insert/');?>" method="post" id="defaultForm">
    <div class="conatnier">
    <div class="col-md-12">
	<div class="col-md-12">
	    <div class="well">
	    <legend><h4>Employee Details</h4></legend>
	    <div class="row">
		<div class="col-md-12">
		    <div class="col-md-1">
			    <label>Employee Name:</label>
		    </div>
		    <div class="col-md-3 form-group">
			
			<input type="text" style="text-transform: capitalize;" class="form-control" name="emp_name" id="emp_name">
		 
		    </div>
		    <div class="col-md-1">
			    <label>Employee ID:</label>
		    </div>
		    <div class="col-md-3 form-group">
			<input type="text" style="text-transform: uppercase;" class="form-control" name="emp_id" id="emp_id">
		    </div>
		    <div class="col-md-1 ss">
			    <label>Department:</label>
		    </div>
		    <div class="col-md-3 form-group">
			<input type="text" style="text-transform: uppercase;" class="form-control" name="emp_department" id="emp_department">
  		    </div>
		</div>
	    </div>
	    <p></p>
	    <legend><h4>Payroll Details</h4></legend>
	    <div class="row">
		<div class="col-md-12">
		    <div class="col-md-1">
			    <label>Payslip No:</label>
		    </div>
		    <div class="col-md-3 form-group">
			<input type="text" style="text-transform: capitalize;" class="form-control" name="payslip_no" value="">
		    </div>
		    <div class="col-md-1">
			    <label>Basic Salary:</label>
		    </div>
		    <div class="col-md-3 form-group">
			     <div class="input-group ">
				<span class="input-group-addon "><i class="fa fa-inr"></i></span>
				<input type="text" name="basic_salary" style="text-transform: capitalize;" class="form-control" id="num0" value="" placeholder="0.00">
			    </div>
		    </div>
		   
		    
		           <div class="col-md-1">
			    <label>Join Date:</label>
		    </div>
		    <div class="col-md-3">
			    <div class="form-group">
				<div class="input-group input-append date" id="datePicker2">
				    <input type="text" class="form-control" style="text-transform: capitalize;" name="joindate" id="joindate" placeholder="" />
				    <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
				</div>
			</div>
		    </div>
		    
		    </div>
		
		<div class="col-md-12">
		    <p></p>
		    <div class="col-md-1">
			    <label>Salary Paid:</label>
		    </div>
		    <div class="col-md-3">
			    <div class="form-group">
				<div class="input-group input-append date" id="datePicker1">
				    <input type="text" class="form-control" style="text-transform: capitalize;" name="month_year" id="month_year" onchange="monthyear();" placeholder=" For the Month of" />
				    <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
				</div>
			</div>
		    </div>
		    <div class="col-md-1">
			    <label>T.Working Days:</label>
		    </div>
		    <div class="col-md-3 form-group">
			<input type="text" class="form-control" style="text-transform: capitalize;" name="tworking_days" id="tworking_days" value="" />
		    </div>
		    <div class="col-md-1">
			    <label>Worked Days:</label>
		    </div>
		    <div class="col-md-3 form-group">
			<input type="text" class="form-control" style="text-transform: capitalize;" name="worked_days" value="" id="worked_days" />
		    </div>
		</div>
		
		<div class="col-md-12">
		    <p></p>
		    <div class="col-md-1">
			    <label>Account No:</label>
		    </div>
		    <div class="col-md-3">
			    <div class="form-group">
				<input type="text" class="form-control" style="text-transform: capitalize;" name="account" id="account"  placeholder="Account No." />
			    </div>
			</div>
		   
		    <div class="col-md-1">
			    <label>Designation</label>
		    </div>
		    <div class="col-md-3 form-group">
			<input type="text" style="text-transform: capitalize;" class="form-control" name="designation" id="designation" />
		    </div>
		       <div class="col-md-1">
			    <label>Pay Date:</label>
		    </div>
		    <div class="col-md-3">
			    <div class="form-group">
				<div class="input-group input-append date" id="datePicker">
				    <input type="text" class="form-control" style="text-transform: capitalize;" name="paydate" id="paydate" placeholder=" For the Month of" />
				    <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
				</div>
			</div>
		    </div>
		    
		</div>
				

		</div>
	    </div>
	</div>
	</div>
    <div class="col-md-12">
    <div class="col-md-6">
	<div class="well">
	    <legend><h4>Payment Added to Salary</h4></legend>
		<div class="row">
		<div class="col-md-12">
		    <p></p>
		    <div class="col-md-5">
		    <label>HRA:</label>
		    </div>
		    <div class="col-md-7">
			<div class="form-group">
			     <div class="input-group">
				<span class="input-group-addon"><i class="fa fa-inr"></i></span>
				<input type="text" class="form-control" name="HRA" id="num1" value="" placeholder="0.00">
			    </div>
			</div>
		    </div>
		</div>
		<div class="col-md-12">
		    <div class="col-md-5">
		    <label>DA:</label>
		    </div>
		    <div class="col-md-7">
			<div class="form-group">
			     <div class="input-group">
				<span class="input-group-addon"><i class="fa fa-inr"></i></span>
				<input type="text" class="form-control" name="DA" id="num2" value="" placeholder="0.00">
			    </div>
			</div>
		    </div>
		</div>
		<div class="col-md-12">
		    <div class="col-md-5">
		    <label>Travelling Allowance:</label>
		    </div>
		    <div class="col-md-7">
			<div class="form-group">
			     <div class="input-group">
				<span class="input-group-addon"><i class="fa fa-inr"></i></span>
				<input type="text" class="form-control" name="TA" id="num3" value="" placeholder="0.00">
			    </div>
			</div>
		    </div>
		</div>
		<div class="col-md-12">
		    <div class="col-md-5">
		    <label>Increment:</label>
		    </div>
		    <div class="col-md-7">
			<div class="form-group">
			     <div class="input-group">
				<span class="input-group-addon"><i class="fa fa-inr"></i></span>
				<input type="text" class="form-control" name="increment" id="num4_inc" value="" placeholder="0.00">
			    </div>
			</div>
		    </div>
		</div>
		<div class="col-md-12">
		    <div class="col-md-5">
		    <label>Incentive:</label>
		    </div>
		    <div class="col-md-7">
			<div class="form-group">
			     <div class="input-group">
				<span class="input-group-addon"><i class="fa fa-inr"></i></span>
				<input type="text" class="form-control" name="incentive" id="num4" value="" placeholder="0.00">
			    </div>
			</div>
		    </div>
		</div>
		
		
		<div class="col-md-12">
		<p></p>
		<div class="col-md-5">
		    <label>Gross Earnings:</label>
		    </div>
		    <div class="col-md-7">
			<div class="form-group">
			     <div class="input-group">
				<span class="input-group-addon"><i class="fa fa-inr"></i></span>
				<input type="text" class="form-control" name="gross_earnings" id="result" placeholder="0.00">
			    </div>
			</div>
		    </div>
		</div>
		</div>
	</div>
    </div>
    <div class="col-md-6">
	<div class="well">
	   <legend><h4>Payment Deducted from Salary</h4></legend>
		<div class="row">
		
		<div class="col-md-12">
		     <P></P>
		    <div class="col-md-5">
		    <label>LOP:</label>
		    </div>
		    <div class="col-md-7">
			<div class="form-group">
			     <div class="input-group">
				<span class="input-group-addon"><i class="fa fa-inr"></i></span>
				<input type="text" class="form-control" name="LOP" id="numd7" placeholder="0.00">
			    </div>
			</div>
		    </div>
		</div>
    
		<div class="col-md-12">
		     <P></P>
		    <div class="col-md-5">
		    <label>Advance Salary if Paid:</label>
		    </div>
		    <div class="col-md-7">
			<div class="form-group">
			     <div class="input-group">
				<span class="input-group-addon"><i class="fa fa-inr"></i></span>
				<input type="text" class="form-control" name="advance_salary" id="numd8" placeholder="0.00">
			    </div>
			</div>
		    </div>
		</div>
		<div class="col-md-12">
		     <P></P>
		    <div class="col-md-5">
		    <label>Other Deduction:</label>
		    </div>
		    <div class="col-md-7">
			<div class="form-group">
			     <div class="input-group">
				<span class="input-group-addon"><i class="fa fa-inr"></i></span>
				<input type="text" class="form-control" name="other_dedcution" id="numd9" placeholder="0.00">
			    </div>
			</div>
		    </div>
		</div>
		<div class="col-md-12">
		     <P></P>
		    <div class="col-md-5">
		    <label>Gross Deduction:</label>
		    </div>
		    <div class="col-md-7">
			<div class="form-group">
			     <div class="input-group">
				<span class="input-group-addon"><i class="fa fa-inr"></i></span>
				<input type="text" class="form-control" name="gross_dedcution" id="result1" placeholder="0.00">
			    </div>
			</div>
		    </div>
		</div>
		</div>
		</div>
	</div>
    </div>
    <div class="col-md-12">
    <div class="col-md-6">
	<div class="well">
	    <legend><h4>Remarks</h4></legend>
		<div class="row">
		<div class="col-md-12">
		    <div class="col-md-5">
		    <label>Remarks:</label>
		    </div>
		    <div class="col-md-7">
			<textarea  style="width:100%;height: 95px;text-transform: capitalize;"cols="28" rows="3" name="remarks"></textarea>
		    </div>
		</div>
		</div>
	</div>
    </div>
    <div class="col-md-6">
	<div class="well">
	   <legend><h4>Net Pay</h4></legend>
		<div class="row">
		<div class="col-md-12">
		    <div class="col-md-5">
		    <label>Net Amount:</label>
		    </div>
		    <div class="col-md-7">
			<div class="form-group">
			     <div class="input-group">
				<span class="input-group-addon"><i class="fa fa-inr"></i></span>
				<input type="text" class="form-control" name="net_amount" id="result2" placeholder="0.00">
			    </div>
			</div>
		    </div>
		</div>
		<div class="col-md-12">
		    <div class="col-md-5">
		    <label></label>
		    </div>
		    <div class="col-md-7">
			<div class="form-group">
			     <div class="input-group">
				<input type="text" class="form-control hidden" onkeyup="showText()"  name="in_word" id="in_word" value="">
			    </div>
			</div>
		    </div>
		</div>
    
		<div class="col-md-12">
		    <div class="col-md-5"></div>
		    <div class="col-md-7">
		    <input type="submit" name="save" value="Save" class="btn btn-success btn-sm">
			<a href="<?php echo base_url('payslipCtr/Manualreport'); ?>"><button type="button" class="btn btn-primary btn-sm" ><span class="glyphicon glyphicon-file"></span>Report</button></a>
		    </div>
		</div>
		
		

		<div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog modal-lg">						
			  <!-- Modal content-->
			  <div class="modal-content">
			    <div class="modal-header">
			      <button type="button" class="close" data-dismiss="modal">&times;</button>
			      <h4 class="modal-title">Report</h4>
			    </div>
			    <div class="modal-body">
		<div class="row">
		    <div class="col-md-12">
			<table class="table datatable table-bordered " id="myTable">
			    <thead>
				
			    
			    
				<?php foreach($payroll as $row){ ?>
				
					<td><center></center></td>
					<input type="hidden"  name="tabledata" value="<?php echo $row['ID'] ?>">
				
			<?php } ?>
			</tbody>
			</table>
    
		    </div>
		    </div>
			<div class="modal-footer">
			    <a href="#" onclick="edit()" class="btn btn-primary btn-sm">
			      <span class="glyphicon glyphicon-edit"></span> Edit
			    </a>
			    <a href="#" onclick="deleterow()" class="btn btn-danger btn-sm">
				<span class="glyphicon glyphicon-trash"></span> Delete
			    </a>
			    <button type="button" class="btn btn-info btn-sm" data-dismiss="modal"><span class="glyphicon glyphicon-log-out"></span> Close</button>
			</div>
			</div>
			</div>
		      </div>
		</div>
    
		</div>
		</div>
	</div>
    </div>
	</div>
    
    
    					<div class="modal fade" id="myModal2" role="dialog">
						<div class="modal-dialog modal-lg">						
						  <!-- Modal content-->
						  <div class="modal-content">
						    <div class="modal-header">
						      <button type="button" class="close" data-dismiss="modal">&times;</button>
						      <h4 class="modal-title">Report</h4>
						    </div>
						    <div class="modal-body">
					<div class="row">
					    <div class="col-md-12">
						<table class="table datatable table-bordered tab" id="myTables">
						    <thead>
							<th>S.No</th>
							<th>Employee Name</th>
							<th>Month/Year</th>
							<th>Department</th>
							<th>Payslip No</th>
							<th>Working Days</th>
							<th>Worked Days</th>
							<th>Basic Salary</th>
							<th>Increment</th>
							<th>Incentive</th>
							<th>Arrer Amount</th>
							<th>Arrer Days</th>
							<th>Travelling Allown</th>
							<th>HRA</th>
							<th>DA</th>
							<th>Gross Earning</th>
							<th>LOP</th>
							<th>Advance Salary</th>
							<th>Other_deduction</th>
							<th>Gross_dedcution</th>
							<th>Remarks</th>
							<th>Net Amount</th>
							
						    </thead>
						    <tbody>
						   
						</tbody>
						</table>
					    </div>
					
					    </div>
						
						</div>
						</div>
					      </div>

    
    
    </form>
    
    </div>
    </div>
    </div>
    </div>
    </div>
       <script>
	 $(document).ready(function() {
    $('#defaultForm').bootstrapValidator({
            feedbackIcons: {
	    valid: 'glyphicon glyphicon-ok',
	    invalid: 'glyphicon glyphicon-remove',
	    validating: 'glyphicon glyphicon-refresh'
	},
        fields: {
            emp_name: {
		trigger: 'blur',
                validators: {
                    notEmpty: {
                        message: 'Employee Name is required'
                    }
                }
            },
	    emp_id: {
		trigger: 'blur',
                validators: {
                    notEmpty: {
                        message: 'The Emp_Id is required'
                    }
                }
            },
	    emp_department:{
		trigger: 'blur',
                validators: {
                    notEmpty: {
                        message: 'The Department is required'
                    }
                }
            },
	    payslip_no:{
                validators: {
                    notEmpty: {
                        message: 'The Field is required'
                    }
                }
            },
	    basic_salary:{
                validators: {
                    notEmpty: {
                        message: 'The Field is required'
                    }
                }
            },
	   
            month_year:
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
	    
	    
	    joindate:{
              trigger: 'blur',
              validators:
                {
                  notEmpty:
                  {
                   message: 'Cannot be empty'	
                   },
                }
            },
	    tworking_days:{
              trigger: 'blur',
              validators:
                {
                  notEmpty:
                  {
                   message: 'Cannot be empty'	
                   },
                }
            },
	    
	     worked_days:{
              trigger: 'blur',
              validators:
                {
                  notEmpty:
                  {
                   message: 'Cannot be empty'	
                   },
                }
            },
	     account:{
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
	    
           designation:{
              trigger: 'blur',
              validators:
                {
                  notEmpty:
                  {
                   message: 'Cannot be empty'	
                   },
                }
            },
	     paydate:{
              trigger: 'blur',
              validators:
                {
                  notEmpty:
                  {
                   message: 'Cannot be empty'	
                   },
                }
            },
	    
	    
	    
        }
	});
    });
	
	
	
	

	
    //$("#num0").on("keydown keyup", function() {
    var user_id;
    $(document).ready(function(){
    $("tr").on("click", function(){
    user_id =$(this).find('[name="tabledata"]').val();
    //console.log(user_id);
   
    });
    });
    </script>
    
    
    
    <script>
    $(document).ready(function() {//alert();
    var t =  $('.tab').DataTable({
    dom: 'lBfrtip',
    buttons: [],
    select: true,
    "columnDefs": [ {
		    "searchable": false,
		    "orderable": false,
		    "targets": 0
	    } ],
	    "order": [[ 1, 'asc' ]],
	     "scrollX": true,
	     "scrollY": 325,
    } );
    t.on( 'order.dt search.dt', function () {
	    t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
		    cell.innerHTML = i+1;
	    } );
    } ).draw();
    } );
    
    </script>
    <script>
    $("#num0,#num1, #num2 ,#num3 ,#num4,#num4_inc,#num4_arrer").on("keydown keyup", function() {
    var num0 = document.getElementById('num0').value;
    //alert(num0);
    if(num0 == "") {
    var num0 = 0;
    }
    var num1 = document.getElementById('num1').value;
    if(num1 == "") {
    var num1 = 0;
    }
    var num2 = document.getElementById('num2').value;
    if(num2 == "") {
    var num2 = 0;
    }
    var num3 = document.getElementById('num3').value;
    if(num3 == "") {
    var num3 = 0;
    }
    var num4 = document.getElementById('num4').value;
    if(num4 == "") {
    var num4 = 0;
    }
    var num4_inc = document.getElementById('num4_inc').value;
    if(num4_inc == "") {
    var num4_inc = 0;
    }
    
    
    var result = parseFloat(num0)+parseFloat(num1)+ parseFloat(num2)+ parseFloat(num3)+ parseFloat(num4)+ parseFloat(num4_inc);
    if (!isNaN(result)) {
    document.getElementById('result').value = result;
    sum3();
    showText();
    }
    });
    $("#numd7 ,#numd8,#numd9").on("keydown keyup change", function() {
    sum2();
    
    });
    function sum2() {
    //var numd5 = document.getElementById('numd5').value;
    //if(numd5 == "") {
    //var numd5 = 0;
    //}
    //var numd6 = document.getElementById('numd6').value;
    //if(numd6 == "") {
    //var numd6 = 0;
    //}
    var numd7 = document.getElementById('numd7').value;
    if(numd7 == "") {
    var numd7 = 0;
    }
    var numd8 = document.getElementById('numd8').value;
    if(numd8 == "") {
    var numd8 = 0;
    }
    var numd9 = document.getElementById('numd9').value;
    if(numd9 == "") {
    var numd9 = 0;
    }
    var result1 = parseFloat(numd7)+ parseFloat(numd8)+ parseFloat(numd9);
    if (!isNaN(result1)) {
    document.getElementById('result1').value = result1;
    sum3();
    showText();
    }
    }
    function sum3(){
    document.getElementById('result2').value =parseFloat(document.getElementById('result').value)- parseFloat(document.getElementById('result1').value);
    }	
    </script>
    <script>
    $("#num0").on("keydown keyup", function() {
    var num0 = document.getElementById('num0').value;
    if(num0 == ""){
    var num0 = 0;
    }
    var numd5 = (parseFloat(num0) * 12)/100;
    if (!isNaN(numd5)) {
    document.getElementById('numd5').value = numd5;
    sum2();
    }
    });   
    $("#num0").on("keydown keyup", function() {
    var num0 = document.getElementById('num0').value;
    if(num0 == "") {
    var num0 = 0;
    }
    var numd6 = (parseFloat(num0) * 1.75)/100;
    if (!isNaN(numd6)) {
    document.getElementById('numd6').value = numd6;
    sum2();
    }
    });
    </script>
    
    <script>
	$('.selectpicker').selectpicker();
	$('#datePicker1')
	.datepicker({
	format: 'dd-M-yyyy'
	})
	.on('changeDate', function(e) {
	$('#eventForm').formValidation('revalidateField', 'date');
	});
	
	$('.selectpicker').selectpicker();
	$('#datePicker')
	.datepicker({
	format: 'dd/M/yyyy'
	})
	$('.selectpicker').selectpicker();
	$('#datePicker2')
	.datepicker({
	format: 'dd/M/yyyy'
	})
    
    </script>
    
        <script>
	function monthyear() {
	    var monthy=$("#month_year").val();
	    var pickername=$("#emp_name").val();
		//console.log(monthy);
		//console.log(pickername);
		$.ajax({
		type:"post",
		url:"<?php echo base_url('payslipCtr/getEmpDetails');?>",
		data:{monthy:monthy,pickername:pickername},
		dataType:'json',
		success:function(json)
		{
		    $("#worked_days").val(json.display[0].scount);
		    $("#tworking_days").val(json.disp[0].CL_WRK_DAYS);
		}
		});
	}
	
	
	  
    </script>
    
    <script>
    function fetchdata($this){
    var pickername =$this.val();
    //console.log(pickername);
    //var link="";
    $.ajax({
    type:"post",
    url:"<?php echo base_url('payslipCtr/getEmpDetails');?>",
    data:{pickername:pickername},
    dataType:'json',
    success:function(json){
        console.log(json);
	$("#emp_id").val(json[0].EMP_ID);
	$("#department").val(json[0].EMP_DEPARTMENT).selectpicker('refresh');
    }
    });
    }
    </script>
    <!--number to text conversion -->
    <script>
    function numToWords(number) {
    
    //Validates the number input and makes it a string
    if (typeof number === 'string') {
    number = parseInt(number, 10);
    }
    if (typeof number === 'number' && isFinite(number)) {
    number = number.toString(10);
    } else {
    return 'This is not a valid number';
    }
    //Creates an array with the number's digits and
    //adds the necessary amount of 0 to make it fully 
    //divisible by 3
    var digits = number.split('');
    while (digits.length % 3 !== 0) {
    digits.unshift('0');
    }
    //Groups the digits in groups of three
    var digitsGroup = [];
    var numberOfGroups = digits.length / 3;
    for (var i = 0; i < numberOfGroups; i++) {
    digitsGroup[i] = digits.splice(0, 3);
    }
    console.log(digitsGroup); //debug
    //Change the group's numerical values to text
    var digitsGroupLen = digitsGroup.length;
    var numTxt = [
    [null, 'One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine'], //hundreds
    [null, 'Ten', 'Twenty', 'Thirty', 'Forty', 'Fifty', 'Sixty', 'Seventy', 'Eighty', 'Ninety'], //tens
    [null, 'One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine'] //ones
    ];
    var tenthsDifferent = ['Ten', 'Eleven', 'Twelve', 'Thirteen', 'Fourteen', 'Fifteen', 'Sixteen', 'Seventeen', 'Eighteen', 'Nineteen'];
    // j maps the groups in the digitsGroup
    // k maps the element's position in the group to the numTxt equivalent
    // k values: 0 = hundreds, 1 = tens, 2 = ones
    for (var j = 0; j < digitsGroupLen; j++) {
    for (var k = 0; k < 3; k++) {
    var currentValue = digitsGroup[j][k];
    digitsGroup[j][k] = numTxt[k][currentValue];
    if (k === 0 && currentValue !== '0') { // !==0 avoids creating a string "null hundred"
    digitsGroup[j][k] += ' hundred ';
    } else if (k === 1 && currentValue === '1') { //Changes the value in the tens place and erases the value in the ones place
    digitsGroup[j][k] = tenthsDifferent[digitsGroup[j][2]];
    digitsGroup[j][2] = 0; //Sets to null. Because it sets the next k to be evaluated, setting this to null doesn't work.
    }
    }
    }
    console.log(digitsGroup); //debug
    //Adds '-' for gramar, cleans all null values, joins the group's elements into a string
    for (var l = 0; l < digitsGroupLen; l++) {
    if (digitsGroup[l][1] && digitsGroup[l][2]) {
    digitsGroup[l][1] += '-';
    }
    digitsGroup[l].filter(function (e) {return e !== null});
    digitsGroup[l] = digitsGroup[l].join('');
    }
    console.log(digitsGroup); //debug
    //Adds thousand, millions, billion and etc to the respective string.
    var posfix = [null, 'thousand', 'million', 'billion', 'trillion', 'quadrillion', 'quintillion', 'sextillion'];
    if (digitsGroupLen > 1) {
    var posfixRange = posfix.splice(0, digitsGroupLen).reverse();
    for (var m = 0; m < digitsGroupLen - 1; m++) { //'-1' prevents adding a null posfix to the last group
    if (digitsGroup[m]) {
    digitsGroup[m] += ' ' + posfixRange[m];
    }
    }
    }
    console.log(digitsGroup); //debug
    
    //Joins all the string into one and returns it
    return digitsGroup.join(' ');
    } //End of numToWords function
    function showText() {
    var inputValue = input.value;
    var hold = numToWords(inputValue);
    in_word.value = hold;
    console.log(hold);
    }
    var button = document.getElementById('changeText');
    var in_word = document.getElementById('in_word');
    var input = document.getElementById('result2');
    input.addEventListener('input', showText);
    </script>
    <script>

    
    function divFunction(){
    
    var name =$("#emp_name").val();
    //console.log(name);
     $.ajax({
	type:"post",
	url:"<?php echo base_url('payslipCtr/Manual_pay');?>",
	data:{name:name},
	dataType:'json',
	success:function(json)
	{
	console.log(json);
	//console.log(json[0].EMP_NAME);
	$("#myModal2").modal('show');
	
	    var len=json.length;
	       var txt = "";
	    if (len>0)
	    {
		for(var i=0;i<len;i++)
		{
		     if (json!='') 
		     {
			
			    txt += "<tr><td>"+json[i].ID+"</td><td>"+json[i].EMP_NAME+"</td><td>"+json[i].MONTH_YEAR+"</td><td>"+json[i].EMP_DEPARTMENT+"</td><td>"+json[i].PAYSLIP_NO+"</td><td>"+json[i].TOTAL_WORKING_DAYS+"</td><td>"+json[i].WORKED_DAYS+"</td><td>"+json[i].BASIC_SALARY+"</td><td>"+json[i].INCREMENT+"</td><td>"+json[i].INCENTIVE+"</td><td>"+json[i].ARRER_AMOUNT+"</td><td>"+json[i].ARRER_DAYS+"</td><td>"+json[i].TRAVELLING_ALLOWANCE+"</td><td>"+json[i].HRA+"</td><td>"+json[i].DA+"</td><td>"+json[i].GROSS_EARNINGS+"</td><td>"+json[i].LOP+"</td><td>"+json[i].ADVANCE_SALARY+"</td><td>"+json[i].OTHER_DEDUCTIONS+"</td><td>"+json[i].GROSS_DEDUCTIONS+"</td><td>"+json[i].REMARKS+"</td><td>"+json[i].NET_AMOUNT+"</td></tr>";
			     $("#myTables").html(txt);
		    }
		   
		}
	    }
	     else{
		    $("#myTables").html('');
			}
	   
	}
	});
    
    };

    
    </script>