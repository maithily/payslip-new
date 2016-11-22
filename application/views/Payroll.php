  <title>Payroll</title>
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
    <h4 class="panel-title">Payroll add / view</h4>
    </div>
    <div class="panel-body">
    <form action="<?php echo base_url('PayslipCtr/payroll_insert/');?>" method="post" id="form_validate">
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
			   
				<select id="emp_name" name="emp_name" onchange="fetchdata($(this))" class="form-control">
	    <option selected disabled hidden>Select Employee</option>
		<?php foreach($this->ps_model->empdetails() as $row){ ?>
		<option  value="<?php echo ucwords($row['EMP_FIRST_NAME']) ?>" ><?php echo ucwords($row['EMP_FIRST_NAME']) ?></option>
	       <?php } ?>
	    </select>
		    </div>
		    <div class="col-md-1">
			<label>Employee ID:</label>
		    </div>
		    <div class="col-md-3 form-group">
			<input type="text" class="form-control" name="emp_id" id="emp_id">
		    </div>
		    <div class="col-md-1 ss">
			<label>Designation:</label>
		    </div>
		    <div class="col-md-3 form-group">
<input type="text" name="department" id="department" class="form-control">
			
  		    </div>
		</div>
		     <input type="hidden" class="form-control" name="emp_email" id="emp_email" value="">
	    </div>
	    <p></p>
	    <legend><h4>Payroll Details</h4></legend>
	    <div class="row">
		<div class="col-md-12">
		    <div class="col-md-1">
			    <label>Payslip No:</label>
		    </div>
		    <div class="col-md-3">
			    <?php foreach($this->ps_model->get_payslip_no() as $row){ ?>
			    <input type="text" class="form-control" name="payslip_no" value="<?php echo $row['payslip_no']; ?>" disabled/>
			    <?php } ?>
			
		    </div>
		    <div class="col-md-1">
			    <label>Basic Salary:</label>
		    </div>
		    <div class="col-md-3">
			     <div class="input-group">
				<span class="input-group-addon"><i class="fa fa-inr"></i></span>
				<input type="text"  name="basic_salary" class="form-control" id="num0" value="" placeholder="0.00">
			    </div>
		    </div>
		    <div class="col-md-1">
			    <label>Log / History:</label>
		    </div>
		    <div class="col-md-3">
			<button style="font-size:15px;width: 100px; height: 35px" type="button" class="btn btn-default" id="hidefot" onClick="divFunction()" data-toggle="modal" data-target="">History <i class="fa fa-history"></i></button>
		    </div>
		    </div>
		<div class="col-md-12">
		    <div class="col-md-1">
			<label>Salary Paid:</label>
		    </div>
		    <div class="col-md-3">
			    <div class="form-group">
				<div class="input-group input-append date" id="datePicker">
				    <input type="text" class="form-control" name="month_year" id="month_year" onchange="monthyear();" placeholder=" For the Month of" />
				    <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
				</div>
			</div>
		    </div>
		    <div class="col-md-1">
			    <label>T.Working Days:</label>
		    </div>
		    <div class="col-md-3">
			<input type="text" class="form-control" name="working_days" id="tworking_days" value="" />
		    </div>
		    <div class="col-md-1">
			<label>Worked Days:</label>
		    </div>
		    <div class="col-md-3">
			<input type="text" class="form-control" name="worked_days" value="" id="worked_days" />
		    </div>
		</div>
		</div>
	    </div>
	</div>
	</div>
    <div class="col-md-12">
    <div class="col-md-6">
	<div class="well payment">
	    <legend><h4>Payment Added to Salary</h4></legend>
		<div class="row">
	
		<?php foreach($this->ps_model->master_show_inclusion() as $row){ ?>
		<div class="col-md-12">
		    <div class="col-md-5">
		    <label><?php echo $row['field_name']?></label>
		    </div>
		    <div class="col-md-7">
			<div class="form-group">
			     <div class="input-group">
				<span class="input-group-addon"><i class="fa fa-inr"></i></span>
				<input type="text" class="form-control"  name="<?php echo $row['field_name']?>"  id="<?php echo $row['field_name']?>" value="" placeholder="0.00">
			    </div>
			</div>
		    </div>
		</div>
		<?php } ?>

		
		<div class="col-md-12">
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
	<div class="well deduction">
	   <legend><h4>Payment Deducted from Salary</h4></legend>
		<div class="row">
	
		<?php foreach($this->ps_model->master_show_deduction() as $row){ ?>
		<div class="col-md-12">
		    <div class="col-md-5">
		    <label><?php echo $row['field_name']?></label>
		    </div>
		    <div class="col-md-7">
			<div class="form-group">
			     <div class="input-group">
				<span class="input-group-addon"><i class="fa fa-inr"></i></span>
				<input type="text" class="form-control"  name="<?php echo $row['field_name']?>" placeholder="0.00" id= "<?php echo $row['field_name']?>"  >
			    </div>
			</div>
		    </div>
		</div>
		<?php } ?>
		
		<div class="col-md-12">
		    <div class="col-md-5">
		    <label>Gross Deductions:</label>
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

    <?php foreach($this->ps_model->master_get_hra_per() as $row){  ?>
			<input type="hidden" name="" value="<?php echo $row['percentage']?>"  id="HRA1">
	<?php } ?>
	
	<?php foreach($this->ps_model->master_get_da_per() as $row){  ?>
		<input type="hidden" name="" value="<?php echo $row['percentage']?>"  id="DA1">
	<?php } ?>
	


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
			<textarea  style="width:100%;height: 95px"cols="28" rows="3" name="remarks"></textarea>
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
		    <div class="col-md-12">
		   <center><button type="submit" name="save" value="" class="btn btn-success btn-sm">Save</button>
			<button type="button" name="PDF_gen" value="" onclick="Save_Pdf_generate()" class="btn btn-primary btn-sm">Save&PDF</button>
			<button type="button" name="pdf_email" value="" onclick="save_pdf_email()" class="btn btn-warning btn-sm">Save&PDF&EMAIL</button></center>
			
		    </div>
		</div>
		
		</div>

  <div class="modal fade" id="modelwindow_pdf" role="dialog">
		<div class="modal-dialog modal-lg">
		  <div class="modal-content">
		    <div class="modal-header">
		      <button type="button" id="modelwin"  class="close" data-dismiss="modal">&times;</button>
		      <h4 class="modal-title">Modal Header</h4>
		    </div>
		    <div class="modal-body" id="payslip">
			<iframe width="100%" height="729px" id="paySlip" name="paySlip" src="" ></iframe>
		    </div>
		    <div class="modal-footer">
		      <button type="button" class="btn btn-default" id="modelclose" onclick="emptythevalue()" data-dismiss="modal">Close</button>
		    </div>
		  </div>
		   </div>
		</div>
    
		</div>
		</div>
	</div>
    </div>
       </form>
	</div>
        			<div class="modal fade" id="myModal2" role="dialog">
						<div class="modal-dialog modal-lg">						
						  <!-- Modal content-->
						  <div class="modal-content">
						    <div class="modal-header">
						      <button type="button" class="close" data-dismiss="modal">&times;</button>
						      <h4 class="modal-title">History</h4>
						    </div>
						    <div class="modal-body">
					<div class="row">
					    <div class="col-md-12">
						<table class="table datatable table-bordered" id="myTable">
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
							
						    </thead>
						    <tbody id='ss'>
						    
						    </tbody>
						</table>


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

 <script>
	function Save_Pdf_generate(){
	    //alert('insert in');
	    var emp_name=$("#emp_name").val();
	    var emp_id=$("#emp_id").val();
	    var department=$("#department").val();
	    var emp_email=$("#emp_email").val();
	    var payslip_no=$("#payslip_no").val();
	    var basic_salary=$("#num0").val();
	    var month=$("#month_year").val();
		var hra=$("#HRA").val();
		var da=$("#DA").val();
		var lop=$("#LOP").val()||0;
		var incentive=$("#Incentive").val()||0;
		var increment=$("#Increment").val()||0;
		var ta=$("#TA").val()||0;
		var advance_salary=$("[id='Advance']").val()||0;
		var other_deduction=$("[id='Deduction']").val()||0;
		var working_days=$("#tworking_days").val();
	    var worked_days=$("#worked_days").val();
	    var gross_earnings=$("#result").val();
	    var gross_dedcution=$("#result1").val();
	    var net_amount=$("#result2").val();
	    var in_word=$("#in_word").val();
	    var remarks=$("#remarks").val();
		$.ajax({
		    type :"post",
		    url:"<?php echo base_url('payslipCtr/payroll_Save_Pdf');?>",
		    data:{emp_name:emp_name,emp_id:emp_id,department:department,emp_email:emp_email,payslip_no:payslip_no,basic_salary:basic_salary,month_year:month,hra:hra,da:da,lop:lop,ta:ta,incentive:incentive,increment:increment,advance_salary:advance_salary,other_deduction:other_deduction,
		    working_days:working_days,worked_days:worked_days,gross_earnings:gross_earnings,gross_dedcution:gross_dedcution,net_amount:net_amount,in_word:in_word,remarks:remarks},
		    //dataType:'json',
		    success:function(){
			$('.selectpicker').selectpicker('refresh');
		    createslip_pdf();
		    $('.selectpicker').selectpicker('refresh');
		    $('input,textarea,selectpicker').val("");
		    }
		});
	}
	
	
	function save_pdf_email(){
	    //alert('save_pdf_email');
	    var emp_name=$("#emp_name").val();
	    var emp_id=$("#emp_id").val();
	    var department=$("#department").val();
	    var emp_email=$("#emp_email").val();
	    var payslip_no=$("#payslip_no").val();
	    var basic_salary=$("#num0").val();
                var hra=$("#HRA").val();
		var da=$("#DA").val();
		var lop=$("#LOP").val()||0;
		var incentive=$("#Incentive").val()||0;
		var increment=$("#Increment").val()||0;
		var ta=$("#TA").val()||0;
		var advance_salary=$("[id='Advance']").val()||0;
		var other_deduction=$("[id='Deduction']").val()||0;
	    var month=$("#month_year").val();

	    var working_days=$("#tworking_days").val();
	    var worked_days=$("#worked_days").val();
	    var gross_earnings=$("#result").val();
	    var gross_dedcution=$("#result1").val();
	    var net_amount=$("#result2").val();
	    var in_word=$("#in_word").val();
	    var remarks=$("#remarks").val();
		$.ajax({
		    type :"post",
		    url:"<?php echo base_url('PayslipCtr/payroll_Save_Pdf_email');?>",
		    data:{emp_name:emp_name,emp_id:emp_id,department:department,emp_email:emp_email,payslip_no:payslip_no,basic_salary:basic_salary,month:month,
		   working_days:working_days,hra:hra,da:da,lop:lop,ta:ta,incentive:incentive,increment:increment,advance_salary:advance_salary,other_deduction:other_deduction,worked_days:worked_days,gross_earnings:gross_earnings,gross_dedcution:gross_dedcution,net_amount:net_amount,in_word:in_word,remarks:remarks},
		    //dataType:'json',
		    success:function(){
			mailsending();
			
		    }
		})
	}
	
	function mailsending(){
	    //alert('mail in');
	    var emp_name=$("#emp_name").val();
	    var month=$("#month_year").val();

	    loadLoader();
	    $.ajax({
		    type :"post",
		    url:"<?php echo base_url('PayslipCtr/send_email_pdf');?>",
		    data:{emp_name:emp_name,month:month,},
		    success:function(){
			//unLoader();
			window.location.href="<?php echo base_url('PayslipCtr/payroll');?>";
		    }
		})			    
	}
	
	function createslip_pdf(){
	    //alert('createslip pdf in');
	    var emp_name=$("#emp_name").val();
	    var month=$("#month_year").val();
	    console.log(month);
	    
	    var url="<?php echo base_url('PayslipCtr/createslip_pdf/');?>"+emp_name+'/'+month;
	    $('#modelwindow_pdf').modal('show');
	    $('#paySlip').attr('src',url);
	    
        }
    function loadLoader() {
	$('body').addClass('loading').loader('show', { overlay: true });    
    }
    function unLoader() {
	$('body').removeClass('loading').loader('hide');
	
    }
    </script>
    
        <script>
    $(document).ready(function() {
    $('#form_validate').bootstrapValidator({
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
                    },
		    
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
	    department:{
		trigger: 'blur',
                validators: {
                    notEmpty: {
                        message: 'The Department is required'
                    }
                }
            },
	    month_year:{
		trigger: 'blur',
                validators: {
                    notEmpty: {
                        message: 'The Month is required'
                    }
                }
            },
	   
        }
	});
    });
    </script>

   <script>
    $(document).ready(function() {
    var t =  $('.datatable').DataTable( {
    dom: 'lBfrtip',
    buttons: [],
    select: true,
    "columnDefs": [{
		    "searchable": false,
		    "orderable": false,
		    "targets": 0
	    }],
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
	
	
	
$('.payment input').on('keyup',function(){
		   var nums=$('#num0').val();
		  if(nums=="")
			{
				var total=0;
				 //console.log(total,"total");
			}
			else{
				var total=parseInt($('#num0').val());
			}
			
			$('.payment input').each(function(){
				if($(this).attr('id')!='result' && $(this).attr('id')!='check' && $(this).attr('id')!='day')
					{
						total+=parseInt($(this).val().trim() || 0);
						$('#result').val(total);
					}
		     });
		     //console.log(total,"total");
                   net_amount();
		  showText();
		});
	
$('#num0').on('keyup',function(){
	
	        //var basic_salary=parseInt($('#num0').val().trim() || 0);
		    //var hra=parseInt($('#HRA1').val());
			//var da=parseInt($('#DA1').val());
			//console.log(hra);
	         var result =  parseInt($("#num0").val().trim() || 0) * (parseInt($("#HRA1").val())/100);
			 var result1 = parseInt($("#num0").val().trim() || 0) * (parseInt($("#DA1").val())/100);
			 //console.log(result);
			 $("#HRA").val(result);
			 $("#DA").val(result1);
            var total=parseInt($('#num0').val().trim() || 0);
			console.log(total,"total");
	        $('.payment input').each(function(){ 
    

			if($(this).attr('id')!='result')
				{        
					total+=parseInt($(this).val().trim() || 0);
					$('#result').val(total);
				}

	       });
		   net_amount();
		  showText();
});
	
	
$('.deduction input').on('keyup',function(){
		var total=0;
	$('.deduction input').each(function(){
		
		if($(this).attr('id')!='result1')
		{
			total+=parseInt($(this).val().trim() || 0);
			 $('#result1').val(total);
		}
	});
		console.log(total,"total");
		net_amount();
		showText();
	});
	
	
function net_amount(){
	var earnings=parseInt($('#result').val().trim() || 0);
	var deduction=parseInt($('#result1').val().trim() || 0);
	var amount=earnings-deduction;
	$('#result2').val(amount);
}



</script>

    <script>
	$('.selectpicker').selectpicker();
	$('#datePicker')
	.datepicker({
	format: 'dd-M-yyyy'
	})
	
    </script>
   
    <script>
	function monthyear() {
     var pickername='test';
     var increment='INC';
     var monthy1=$("#month_year").val();
     var pickername1=$("#emp_name").val();
     $('#Increment').val("0");
  $.ajax({
  type:"post",
  url:"<?php echo base_url('PayslipCtr/getEmpDetails');?>",
  data:{pickername:pickername,monthy1:monthy1,pickername1:pickername1,increment:increment},
  dataType:'json',
  success:function(json)
  {
    
      $("#tworking_days").val(json.disp[0].CL_WRK_DAYS);
      $('#Increment').val(json.inc);
      if (json.calc[0].scountdata!=null){
   $("#worked_days").val(json.calc[0].scountdata);
      }else{
   $("#worked_days").val('0');
      }
  }
  });
 }
   
     function fetchdata($this){
 var pickername ='test1';
 var monthy1=$("#month_year").val();
 var pickername1=$("#emp_name").val();
 $.ajax({
     type:"post",
     url:"<?php echo base_url('PayslipCtr/getEmpDetails');?>",
     data:{pickername:pickername,monthy1:monthy1,pickername1:pickername1},
     dataType:'json',
     success:function(json){
     console.log(json);
  $("#emp_id").val(json.query[0].EMP_ID);
  $("#emp_email").val(json.query[0].EMP_EMAIL);
  $("#department").val(json.query[0].EMP_DESIGNATION);
  $('#Increment').val(json.inc1);
  //console.log(json.calc1[0].scountdata);
  if (json.calc1[0].scountdata) {
  $("#worked_days").val(json.calc1[0].scountdata);
  $("#tworking_days").val(json.disp1[0].CL_WRK_DAYS);
  }
  else{
      $("#worked_days").val('0');
  }
     }
 });
    }
    </script>
    <script>
	    
	    function incrementVal()
	    {
		var monthy=$("#month_year").val();
		var pickername=$("#emp_name").val();
		$.ajax({
		    type:"post",
		    url:"<?php echo base_url('PayslipCtr/getIncrementVal');?>",
		    data:{monthy:monthy,pickername:pickername},
		    dataType:'json',
		    success:function(json)
		    {
			$("#num4_inc").val(json.inc[0].AMOUNT);
			$("#numd9").val(json.c[0].AMOUNT);
			//console.log(json.c[0][1].AMOUNT);
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
    digitsGroup[j][k] += ' Hundred and ';
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
    var posfix = [null, 'Thousand', 'million', 'billion', 'trillion', 'quadrillion', 'quintillion', 'sextillion'];
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
    var hold = numToWords(inputValue)+' '+'Only';
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
     $.ajax({
	type:"post",
	url:"<?php echo base_url('PayslipCtr/getHistory');?>",
	data:{name:name},
	
	success:function(res){
	
	
	$("#myModal2").modal('show');
	$("#ss").html(res);
	}
	});
    
    };
    
    $("#modelwin").on('click',function(){
       window.location.reload();
    });
    $("#modelclose").on('click',function(){
       window.location.reload();
    });
    
    </script>
     
    