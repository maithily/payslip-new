<title>Payroll Report</title>
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
<div class="row" id="salaryTable">
<h3>Payroll Report</h3>
<div class="row">
<form class="form-horizontal" action="" method="post" id="frm-example" enctype="multipart/form-data">
<div class="col-md-3">
<label class="col-md-3 control-label">Name:</label>
<div class="col-md-9">
    <select id="salaryname" name="month"  class="form-control selectpicker">
        <option selected disabled hidden>Select Employee</option>
            <?php foreach($this->ps_model->empdetails() as $row){ ?>
            <option  value="<?php echo ucwords($row['EMP_FIRST_NAME']) ?>" ><?php echo ucwords($row['EMP_FIRST_NAME']) ?></option>
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
<option value="jan">jan</option>
<option value="feb">feb</option>
<option value="mar">mar</option>
<option value="apr">apr</option>
<option value="may">may</option>
<option value="jun">jun</option>
<option value="jul">jul</option>
<option value="aug">aug</option>
<option value="sep">sep</option>
<option value="oct">oct</option>
<option value="nov">nov</option>
<option value="dec">dec</option>

</select>
</div>

</div>
<div class="col-md-3">
<input type="button" class="btn btn-info btn-md" value="Find" id="search_salary">
</div>
</form>
</div><br>
<div class="table-responsive">
<table id="example" class="table datatable table-bordered nowrap responsive " cellspacing="0" width="100%">
<thead>
<tr>
<th data-class="hidden">id</th>
<th>S.No</th>
<th>Name</th>
<th>Email</th>
<th>Emp_Id</th>
<th>Payslip NO</th>
<th>Designation</th>
<th>For The Month Of</th>
<th>Total Working Days</th>
<th>Worked Days</th>
<th>Basic Salary</th>
<th>HRA</th>
<th>DA</th>
<th>TA</th>
<th>Incentive</th>
<th>Increment</th>
<th>Gross Earnings</th>
<th>LOP</th>
<th>Advance salary paid</th>
<th>Other deduction</th>
<th>Gross deductions</th>
<th>Net-Salary</th>
<th>Remarks</th>
<th>Insert Timestamp</th>
<th>Update Timestamp</th>
</tr>
</thead>




<tbody id="sbody">
    
</tbody>
</table>
		    <div class="col-md-offset-5">
			<br>
		    <div class="col-md-3">
		    <input type="button" class="form-control btn btn-success" name="send" onclick="multiple_mail_send()"  value="Send Email"> 		
		    </div>
                    <button type="button" id="updatebutton"  class="btn btn-primary" disabled> Edit </button>
                    <button type="button" id="deletebutton" name="" class="btn btn-danger">Delete</button>
		    </div>

</div>

</div>
</div>
</div>
</div>
</div>
</div>


<script>
    $(document).ready(function() {
    var t= $('#example').DataTable({
     
	    "bServerSide": true,
	    "bProcessing": true,
	    "sAjaxSource": '<?php echo site_url('PayslipCtr/payslip_Multiple_Data');?>',
	    'responsive': true,
            
	    'scrollX':true,
	    "lengthMenu": [
			  [5,10, 20, 50, -1],
			  [5,10, 20, 50, "All"] // change per page values here
		      ],

		columns: [
		{ data: 'ID',"orderable": true},
                { data: 'ID'},
		{ data: 'EMP_NAME'},
                { data: 'EMP_EMAIL'},
                { data: 'EMP_ID'},
                { data: 'PAYSLIP_NO'},
                { data: 'EMP_DEPARTMENT'},
                { data: 'MONTH_YEAR'},
		
		{ data: 'TOTAL_WORKING_DAYS'},
		{ data: 'WORKED_DAYS'},
                { data: 'BASIC_SALARY'},
                { data: 'HRA'},
                { data: 'DA'},
                { data: 'TRAVELLING_ALLOWANCE'},
                { data: 'INCENTIVE'},
                { data: 'INCREMENT'},
                { data: 'GROSS_EARNINGS'},
                { data: 'LOP'},
                { data: 'ADVANCE_SALARY'},
                { data: 'OTHER_DEDUCTIONS'},
                { data: 'GROSS_DEDUCTIONS'},
                { data: 'NET_AMOUNT'},
                { data: 'REMARKS'},
		{ data: 'CR_DATE'},
                 { data: 'UPDATED_DATE'},
		],
		'columnDefs': [
		   {
		      'targets': 0,
		      'checkboxes': {
		    'selectRow': true
		      }
		   }
		],
		'select': {
		   'style': 'multi'
		},
		'order': [[0, 'desc']],
	    //"order": [[ 0, 'desc' ]],
	    'fnServerData': function(sSource, aoData, fnCallback){
		$.ajax({
		    'dataType': 'json',
		    'type'    : 'POST',
		    'url'     : sSource,
		    'data'    : aoData,
		    'success' : fnCallback
		});
	    },
   });

      t.on( 'order.dt search.dt processing.dt page.dt', function () {
                t.column(1, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
			cell.innerHTML = i+1;
			var info = t.page.info();
			var page = info.page+1;             
			if (page >'1') { 
			    hal = (page-1) *5;  // u can change this value of ur page
			    cell.innerHTML = hal+i+1;
			} 
		    } );
		} ).draw();
   
});

function multiple_mail_send() {
    var names=[];
    var email=[];
    $('tr.selected').each(function(){
    var datas=$(this).find('td:eq(2)').text();
    var data1=$(this).find('td:eq(3)').text();
    names.push(datas);
    email.push(data1);
    }); 
    console.log(names);
    console.log(email); 
	loadLoader();
     $.ajax({
	type:"post",
	url:"<?php echo base_url('PayslipCtr/Multiple_send_email');?>",
	data:{names:names,email:email},
	
	success:function(){
	unLoader();
	},
    });
}

 function loadLoader() {
	$('body').addClass('loading').loader('show', { overlay: true });    
    }
    function unLoader() {
	$('body').removeClass('loading').loader('hide');
	//alert('Mail Send Sucessfully');
    }

</script>



<script>
    
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
</script>

<script>

$("#sbody").click(function(){
$('button').prop('disabled', false);
});


$(document).ready(function() {

$('#updatebutton').click(function () {
var id=$("tr.selected").find('td:eq(0)').text();
console.log(id);
window.location.href = "<?php echo base_url();?>payslipCtr/payroll_edit/" + id ;

});
});


$(document).ready(function() {
$('#deletebutton').click(function () {
     var names=[];
    //var email=[];
    $('tr.selected').each(function(){
    var datas=$(this).find('td:eq(0)').text();
    //var data1=$(this).find('td:eq(2)').text();
    names.push(datas);
    //email.push(data1);



//var $this = $(this);
//console.log($this);
if(confirm("Are you sure want to delete!"))
{
//var line_id=$(this).find('td:eq(0)').text();
//console.log(line_id);
    var id=[];
    $('tr.selected').each(function(){
    var datas=$(this).find('td:eq(0)').text();
    id.push(datas);
    });
    console.log(id);
$.ajax({

url:'<?php echo site_url('PayslipCtr/del1');?>',
type:"post",
data:{id:id},

success:function(){
    window.location.href='<?php echo site_url('PayslipCtr/payroll_report');?>'
//getdata();
//alert();
//$("#example tr.selected").remove();
//$("#success1").html(result);
//fnReloadAjax('payroll_report.php');
},
});
}
});
});
});
</script>
