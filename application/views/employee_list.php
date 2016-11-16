<title>Employee List</title>

<?php //print_r($result[0]['ID']);exit;?>
<style>

table.dataTable tbody > tr.selected, table.dataTable tbody > tr > .selected {
background-color: navyblue;
}

</style>

<div id="content" class="content">
<!-- begin breadcrumb -->
<ol class="breadcrumb pull-right">
<li><a href="javascript:;">Home</a></li>
<li><a href="javascript:;">Form Stuff</a></li>
<li class="active">Form Elements</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">EMPLOYEE - LIST <small><!--header small text goes here...--></small></h1>
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
<h4 class="panel-title">List of Employees</h4>
</div>
<div class="panel-body">
<div class="table-responsive">
<table id="empTable" class="table table-bordered" cellspacing="0" width=100%>
<thead>
<th>Sl.NO.</th>
<th>ID</th>
<th>Title</th>
<th>First name</th>
<th>Last name</th>
<th>DOB</th>
<th>Gender</th>
<th>Designation</th>
<th>Shift</th>
<th>Department</th>
<th>joining date</th>
<th>account number</th>
<th>bank name</th>
<th>branch name</th>
<th>IFSC code</th>
<th>Address</th>
<th>Town / City</th>
<th>State</th>
<th>Country</th>
<th>Zipcode</th>
<th>Landline number</th>
<th>Mobile number</th>
<th>Email</th>
<th>Profile</th>
<th>Proof</th>
<th>Insert Timestamp</th>
<th>Update Timestamp</th>
</thead>
<tbody id="ebody">
<?php foreach($result as $row) { ?>
    
<tr>
<td></td>
<input type="hidden" name="getid" value="<?php echo $row['ID'];?>">
<td><?php echo $row['EMP_ID'];?></td>
<td><?php echo $row['EMP_TITLE'];?></td>
<td><?php echo ucwords($row['EMP_FIRST_NAME']);?></td>
<td><?php echo ucwords($row['EMP_LAST_NAME']);?></td>
<td><?php echo $row['EMP_DOB'];?></td>
<td><?php echo $row['EMP_GENDER'];?></td>
<td><?php echo $row['EMP_DESIGNATION'];?></td>
<td><?php echo $row['EMP_SHIFT'];?></td>
<td><?php echo $row['EMP_DEPARTMENT'];?></td>
<td><?php echo $row['EMP_JOINING_DATE'];?></td>
<td><?php echo $row['EMP_ACCOUNT_NUM'];?></td>
<td><?php echo strtoupper($row['EMP_BANK_NAME']);?></td>
<td><?php echo strtoupper($row['EMP_BRANCH_NAME']);?></td>
<td><?php echo strtoupper($row['EMP_IFSC_CODE']);?></td>
<td><?php echo ucwords($row['EMP_ADDRESS']);?></td>
<td><?php echo ucwords($row['EMP_TOWN_CITY']);?></td>
<td><?php echo ucwords($row['EMP_STATE']);?></td>
<td><?php echo $row['EMP_COUNTRY'];?></td>
<td><?php echo $row['EMP_ZIPCODE'];?></td>
<td><?php echo $row['EMP_LANDLINE_NUM'];?></td>
<td><?php echo $row['EMP_MOBILE_NUM'];?></td>
<td><?php echo $row['EMP_EMAIL'];?></td>
<td><img class="" id="_image" name="_image" src="<?php echo base_url('application/uploads/'.$row['EMP_PROFILE']) ; ?>"  width="110px" height="90px"   > </td>
<td><img class="" id="_image" name="_image" src="<?php echo base_url('application/uploads/'.$row['EMP_ID_PROOF']); ?>"   width="110px" height="90px"   ></td>
<td><?php echo $row['EMP_CR_DATE'];?></td>
<td><?php echo $row['EMP_UPDATED_DATE'];?></td>
</tr>
<?php }?>
</tbody>
</table>
</div>
<!--END TABLE RESPONSIVE-->

<div class="col-md-offset-5">
<button type="button" id="updatebutton"  class="btn btn-primary" disabled> Edit </button>
<button type="button" id="deletebutton" name="" class="btn btn-danger">Delete</button>
<button type="button" id="backbtn" onclick="Return()" class="btn btn-warning">Back</button>
</div>

</div>

</div>
</div>
</div>
</div>

<!-- begin scroll to top btn -->
<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
<!-- end scroll to top btn -->
</div>



<script>


$(document).ready(function() {
var t = $('#empTable').DataTable( {

"columnDefs": [ {

"searchable": false,
"orderable": false,
//"class": "index",

"targets": 0
} ],

"scrollX": true,
"scrollY": 400,
"order": [[ 1, 'desc' ]],
select: true,

} );

t.on( 'order.dt search.dt', function () {
t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
cell.innerHTML = i+1;
} );
} ).draw();


} );


</script>




<script>


$("#ebody tr").click(function(){
$('button').prop('disabled', false);
});


$(document).ready(function() {

$('#updatebutton').click(function () {
var id=$("#empTable tr.selected").find('[name="getid"]').val();
window.location.href = "<?php echo base_url();?>PayslipCtr/edit_employee_list/" + id ;

});
});


$(document).ready(function() {
$('#deletebutton').click(function () {


if(confirm("Are you sure want to delete!"))
{
var line_id=$("#empTable tr.selected").find('[name="getid"]').val();

$.ajax({

url:'<?php echo site_url('PayslipCtr/del');?>',
type:"post",
data:{'id':line_id},

success:function(){

$("#empTable tr.selected").remove();
window.location.reload();

},
});
}
});
});
</script>

<script type="text/javascript">
    function Return()
    {
     window.location="<?php echo base_url('PayslipCtr/user');?>"   
    }
</script>






</body>

<!-- Mirrored from seantheme.com/color-admin-v1.6/admin/html/form_elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Mar 2015 08:08:50 GMT -->
</html>

