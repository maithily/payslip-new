 <title>Inc-Dec Report</title>   <style>
	.col-md-6.border {
	    border: 1px solid;
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
			<h4 class="panel-title">Increment / Decrement</h4>
		</div>
		<div class="panel-body">
		    <form action="<?php echo base_url('PayslipCtr/insert');?>" method="post">
			
					<div class="row">
					    <div class="col-md-12">
						<table class="table datatable table-bordered nowrap responsive" id="myTable">
						    <thead>
							<tr>
							<th> <center style="">S.No</center></th>
							
							<th> <center style="">Employee Name</center></th>
							<th> <center style="">Employee ID</center></th>
							<th> <center style="">Department</center></th>
							
							<th> <center style="">Category</center></th>
							<th> <center style="">Amount</center></th>
							
							<th> <center style="">Effective On</center></th>
							<th> <center style="">Remarks</center></th>
                                                        <th> <center style="">Insert Timestamp</center></th>
							<th> <center style="">Update Timestamp</center></th>
							</tr>
						    </thead>
						    <tbody id="ebody">
						    <tr>
							<?php $count=1; foreach($value as $row){ ?>
                                                              
								<td><center><?php echo $count++;?></center></td>
 <input type="hidden" name="tabledata" value="<?php echo $row['ID'] ?>">
							      <td><center><?php echo $row['EMP_NAME']?></center></td>
							      <td><center><?php echo $row['EMP_ID']?></center></td>
							      <td><center><?php echo $row['EMP_DEPARTMENT']?></center></td>
							   							                                                                         <td><center><?php echo $row['INC_DEC_TYPE']?></center></td>
							      <td><center><?php echo $row['AMOUNT']?></center></td>
							    
							      <td><center><?php echo $row['INC_DEC_EFFECTIVE_MONTH']?></center></td>
							      <td><center><?php echo $row['REMARKS']?></center></td>
							      <td><center><?php echo $row['CR_DATE'];?><center></td>
							    <td><center><?php echo $row['UPDATED_DATE'];?><center></td>
						    </tr>
						<?php } ?>
						    </tbody>
						</table>
						
					    </div>
					 </div>
<center>
                 <button type="button" onclick="edit()" class="btn btn-primary" disabled> <span class="glyphicon glyphicon-edit"></span> Edit </button>
			      <button type="button" onclick="deleterow()" id="deletebutton" class="btn btn-danger" disabled>
			   <span class="glyphicon glyphicon-trash"></span>
				 Delete
			    </button>
<input type="button" id="back" class="btn btn-success" value="Back" onclick="previousPage()" name="back"></center>
		</form>

		</div>
	    </div>
	</div>
    </div>
</div>
<script>

function edit(){
	
    var user_id=$("#myTable tr.selected").find('[name="tabledata"]').val();
    window.location="<?php echo base_url();?>PayslipCtr/increment_edit/"+user_id;
}

$(document).ready(function() {
$('#deletebutton').click(function () {

if(confirm("Are you sure want to delete!"))
{
var user_id=$("#myTable tr.selected").find('[name="tabledata"]').val();

$.ajax({

url:"<?php echo base_url();?>PayslipCtr/increment_delete/"+user_id,
type:"post",
data:{'id':user_id},

success:function(){

$("#myTable tr.selected").remove();

},
});
}
});
});
function previousPage(){
    window.location="<?php echo base_url('PayslipCtr/increment');?>"
}
</script>

<script>
	    $(document).ready(function() {
			  var t=$('#myTable').DataTable({
"scrollX":true,
"scrollY":400,
 select: true,
"order": [[ 0, 'desc' ]]
});
  t.on( 'order.dt search.dt', function () {
t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
cell.innerHTML = i+1;
} );
} ).draw();
			   
		    } );

$("#ebody tr").click(function(){
$('button').prop('disabled', false);
});

</script>
