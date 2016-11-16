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
		    <form  action="<?php echo base_url('PayslipCtr/payroll_update/'.$payroll_edit[0]['ID']);?>" method="post" enctype="multipart/form-data">
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
					    <div class="col-md-3">

						    <select name="emp_name" class="form-control" onchange="fetchdata($(this))" id="emp_name" >
							<option  value="<?php echo $payroll_edit[0]['EMP_NAME']?>"><?php echo $payroll_edit[0]['EMP_NAME']?></option>
							  <?php foreach($this->ps_model->empdetails() as $row){ ?>
							<option value="<?php echo $row['EMP_FIRST_NAME']?>"><?php echo $row['EMP_FIRST_NAME']?></option>
							<?php }?>
						    </select>
					    </div>
					    <div class="col-md-1">
						    <label>Employee ID:</label>
					    </div>
					    <div class="col-md-3">
						<input type="text"  class="form-control" name="emp_id" id="emp_id" value="<?php echo $payroll_edit[0]['EMP_ID']?>">
					    </div>
					    <div class="col-md-1 ss">
						    <label>Department:</label>
					    </div>
					    <div class="col-md-3">
						<select class="form-control" id="department" name="department">
						    <option value="<?php echo $payroll_edit[0]['EMP_DEPARTMENT']?>"><?php echo $payroll_edit[0]['EMP_DEPARTMENT']?></option>
						    <option value="IT">IT</option>
						    <option value="HR">HR</option>
						    <option value="DATA-ENTRY">DATA-ENTRY</option>
						</select>
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
					    <div class="col-md-3">
						<input type="text" class="form-control" name="payslip_no" value="<?php echo $payroll_edit[0]['PAYSLIP_NO']?>">
					    </div>
					    <div class="col-md-1">
						    <label>Basic Salary:</label>
					    </div>
					    <div class="col-md-3">
						     <div class="input-group">
							<span class="input-group-addon"><i class="fa fa-inr"></i></span>
							<input type="text" class="form-control" name="basic_salary" id="num0" value="<?php echo $payroll_edit[0]['BASIC_SALARY']?>" />
						    </div>
					    </div>
					    <div class="col-md-1">
						    <label>Log / History:</label>
					    </div>
					    <div class="col-md-3">
						
						
						<button style="font-size:15px;width: 100px; height: 35px"  class="btn btn-default">History <i class="fa fa-history"></i></button>
						<!--<a href="#" class="btn btn-success btn-md">-->
						<!--    <span class="glyphicon glyphicon-duplicate"></span> History-->
						<!--</a>-->
					    </div>

					    </div>
					
					<div class="col-md-12">
					    <p></p>
					    <div class="col-md-1">
						    <label>Salary Paid:</label>
					    </div>
					    <div class="col-md-3">
						    <div class="form-group">
							<div class="input-group input-append date" id="datePicker">
							    <input type="text" class="form-control" name="month_year" value="<?php echo $payroll_edit[0]['MONTH_YEAR']?>" placeholder=" For the Month of" />
							    <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
							</div>
						    </div>
					    </div>
					    <div class="col-md-1">
						    <label>T.Working Days:</label>
					    </div>
					    <div class="col-md-3">
						<input type="text" class="form-control" name="working_days" value="<?php echo $payroll_edit[0]['TOTAL_WORKING_DAYS']?>" />
					    </div>
					    <div class="col-md-1">
						    <label>Worked Days:</label>
					    </div>
					    <div class="col-md-3">
						<input type="text" class="form-control" name="worked_days" value="<?php echo $payroll_edit[0]['WORKED_DAYS']?>" />

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
							<input type="text" class="form-control" name="incentives" id="num1" value="<?php echo $payroll_edit[0]['HRA']?>"" />
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
							<input type="text" class="form-control" name="other_payment" value="<?php echo $payroll_edit[0]['DA']?>"" id="num2" />
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
							<input type="text" class="form-control" readonly="" name="travell_allowance" id="num3" value="<?php echo $payroll_edit[0]['TRAVELLING_ALLOWANCE']?>" />
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
							<input type="text" class="form-control" name="increment" id="num4_inc" value="<?php echo $payroll_edit[0]['INCREMENT']?>" placeholder="0.00">
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
							<input type="text" class="form-control" name="incentive" id="num4" value="<?php echo $payroll_edit[0]['INCENTIVE']?>" />
						    </div>
						</div>
					    </div>
					</div>
					

					<div class="col-md-12">
					  <P></P>
					    <div class="col-md-5">
					    <label>Gross Earning:</label>
					    </div>
					    <div class="col-md-7">
						<div class="form-group">
						     <div class="input-group">
							<span class="input-group-addon"><i class="fa fa-inr"></i></span>
							<input type="text" class="form-control" name="gross_earnings" value="<?php echo $payroll_edit[0]['GROSS_EARNINGS']?>"" id="result" />
						    </div>
						</div>
					    </div>
					</div>
					</div>
				</div>
			    </div>
			    <div class="col-md-6 well">
				<div class="">
				   <legend><h4>Payment Deduction from Salary</h4></legend>
					
					<div class="col-md-12">
					    <P></P>
					    <div class="col-md-5">
					    <label>LOP:</label>
					    </div>
					    <div class="col-md-7">
						<div class="form-group">
						     <div class="input-group">
							<span class="input-group-addon"><i class="fa fa-inr"></i></span>
							<input type="text" class="form-control" name="lop" id="numd7" value="<?php echo $payroll_edit[0]['LOP']?>""  />
						    </div>
						</div>
					    </div>
					</div>

					<div class="col-md-12">
					
					    <div class="col-md-5">
					    <label>Advance Salary if Paid:</label>
					    </div>
					    <div class="col-md-7">
						<div class="form-group">
						     <div class="input-group">
							<span class="input-group-addon"><i class="fa fa-inr"></i></span>
							<input type="text" class="form-control" name="adv_salary_paid" value="<?php echo $payroll_edit[0]['ADVANCE_SALARY']?>"" id="numd8" />
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
							<input type="text" class="form-control" name="other_detc" value="<?php echo $payroll_edit[0]['OTHER_DEDUCTIONS']?>""  id="numd9" />
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
							<input type="text" class="form-control" value="<?php echo $payroll_edit[0]['GROSS_DEDUCTIONS']?>"  name="gross_deductions" id="result1" />
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
						<textarea style="width: 100%" cols="28" rows="4" name="remarks"><?php echo $payroll_edit[0]['REMARKS']?></textarea>
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
							<input type="text" class="form-control" name="net_amount" value="<?php echo $payroll_edit[0]['NET_AMOUNT']?>"  id="result2" />
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
							<input type="text" class="form-control hidden" onkeyup="showText()"  name="in_word" id="in_word" value="<?php echo $payroll_edit[0]['IN_WORD']?>">
						    </div>
						</div>
					    </div>
					</div>

					<div class="col-md-12">
					    <div class="col-md-5">
					    </div>
					    <div class="col-md-7">
						 <!--<p></p>
						 <a href="<?php echo base_url('PayslipCtr/payroll_update/'.$payroll[0]['ID']);?>" class="btn btn-info btn-sm">
						    <span class="glyphicon glyphicon-duplicate"></span> Update 
						</a>-->
						<input type="submit" name="update" value="Update" class="btn btn-info btn-sm">
					    </div>
					</div>

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
     //$("#num0").on("keydown keyup", function() {
var user_id;
$(document).ready(function(){
    $("tr").on("click", function(){
    user_id =$(this).find('[name="tabledata"]').val();
    console.log(user_id);
	
    });
});
</script>
<script>
    function edit(){
        var user_id=$("#myTable tr.selected").find('[name="tabledata"]').val();
	window.location="<?php echo base_url();?>PayslipCtr/payroll_edit/"+user_id;
    }
    function deleterow(){
        var user_id=$("#myTable tr.selected").find('[name="tabledata"]').val();
	window.location="<?php echo base_url();?>PayslipCtr/payroll_delete/"+user_id;
    }
 
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
	    var num4_arrer = document.getElementById('num4_arrer').value;
	    if(num4_arrer == "") {
	    var num4_arrer = 0;
	    }
	    
	    var result = parseFloat(num0)+parseFloat(num1)+ parseFloat(num2)+ parseFloat(num3)+ parseFloat(num4)+ parseFloat(num4_inc)+ parseFloat(num4_arrer);
            if (!isNaN(result)) {
		document.getElementById('result').value = result;
		sum3();
		showText();
            }
	});
	$("#numd5, #numd6 ,#numd7 ,#numd8,#numd9").on("keydown keyup change", function() {
	sum2();
     
	});
	function sum2() {
	   var numd5 = document.getElementById('numd5').value;
	    if(numd5 == "") {
	    var numd5 = 0;
	    }
	    var numd6 = document.getElementById('numd6').value;
	     if(numd6 == "") {
	    var numd6 = 0;
	    }
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
	    var result1 = parseFloat(numd5)+ parseFloat(numd6)+ parseFloat(numd7)+ parseFloat(numd8)+ parseFloat(numd9);
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
    $('#datePicker')
        .datepicker({
            format: 'M-yyyy'
        })
        .on('changeDate', function(e) {
            $('#eventForm').formValidation('revalidateField', 'date');
        });

</script>
<script>
    function fetchdata($this){
    var pickername =$this.val();
    //console.log(pickername);
    //var link="";
    $.ajax({
	type:"post",
	url:"<?php echo base_url('PayslipCtr/getEmpDetails');?>",
	data:{name:pickername},
	dataType:'json',
	success:function(json){
	//console.log(json);
	$("#emp_id").val(json[0].emp_id);
	$("#department").val(json[0].department);
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
	in_word.value = hold+"Rupees Only";
	console.log(hold);
    }
    var button = document.getElementById('changeText');
    var in_word = document.getElementById('in_word');
    var input = document.getElementById('result2');
    input.addEventListener('input', showText);
</script>
<script>
$(document).ready(function(){
     $("#filed").hide();
    $("#check").click(function(){
        $("#filed").toggle();
    });
});
</script>