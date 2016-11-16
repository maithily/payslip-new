<title>Master Department</title>
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
<h4 class="panel-title">Settings for department</h4>
</div>
<div class="panel-body">
	
<div class="well">	
	
<legend> Settings for Adding Department</legend>
<div class="row">
	<form action="<?php echo base_url('PayslipCtr/master_department');?>" method="post" id="forms">
		<div class="conatnier">
			<div class="col-md-12">
				<div class="row">
				<div class="col-md-4">
						 <div class="form-group">
						   <label class="col-md-5 control-label">Department :</label>
						   <div class="col-md-7">
							   <input type="text" class="form-control textfield1" style="text-transform: capitalize;" name="department" placeholder="Add Department" />
							   
						   </div>
						    
						</div>
				</div>
			
				<div class="col-md-4">
						 <div class="form-group">
						   <div class="col-md-4">
						 <button type="submit" name="add_dept" value="add" class="btn btn-sm btn-success form-control">Add</button>
						   </div>
						    
						</div>
					</div>
				</div>
				
				 <br>
			
				<br>
				<br>
				<br>	
			</div>
		</div>
	</form>
	
</div>
</div>



<div class="well">
<legend>Settings for Delete</legend>

	<div class="table-responsive" width="50%">
		<table id="masterTable" class="table table-bordered nowrap" >
			<thead>
				<tr>
					
					
                                        <th>Department Name</th>
					<th>Created date/time</th>
					<th>Action</th>
					
				</tr>
			</thead>
			<tbody>
				<?php foreach($this->ps_model->master_department() as $row){ ?>
				<tr class="oddClass">
											    
						<td>
							<?php echo $row['department'];?>
						</td>
                                                <td>
							<?php echo $row['cr_date']?>
						</td>
						<td>
							<?php $id= $row['id']; ?>
							<button type="button" id="deletebutton" onclick="delet1( <?php  echo $row['id'] ?>, $(this))" name="" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></button>
						</td>
						
				</tr>
				<?php } ?>
			</tbody>
			</table>
	</div>
</div>
	<br>
	<br>
	<br>


<!-- end panel -->
</div>
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
		
function delet1($id,$this){

if(confirm("Are you sure want to delete!"))
{
console.log($id);
var id=$id;
$.ajax({
url:'<?php echo site_url('payslipCtr/master_department_delete');?>',
type:"post",
data:{id:id},


success:function(){

//$("#empTable tr.selected").remove();
//window.location.reload();
var $row = $this.parents('.oddClass');
   console.log($row);
    $row.remove();

},
});
}
}

    $(document).ready(function() {
    $('#forms').bootstrapValidator({
            feedbackIcons: {
	    valid: 'glyphicon glyphicon-ok',
	    invalid: 'glyphicon glyphicon-remove',
	    validating: 'glyphicon glyphicon-refresh'
	},
        fields: {
           
	    department:{
		trigger: 'blur',
                validators: {
                    notEmpty: {
                        message: 'The Department is required'
                    },
		     regexp: {
                        regexp: /^[a-z.\s]+$/i,
                        message: 'This field should consist of alphabets only'
		    }
                }
            },
	  
        }
	});
    });
   

$(document).ready(function() {
var t = $('#masterTable').DataTable( {

"columnDefs": [ {

"searchable": false,
"orderable": false,
//"class": "index",

"targets": 0
} ],

//"scrollX": true,
//"scrollY": 400,
"order": [[ 1, 'desc' ]],
//select: true,

} );

//t.on( 'order.dt search.dt', function () {
//t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
//cell.innerHTML = i+1;
//} );
//} ).draw();


} );


$('.selectpicker').selectpicker({
style: 'btn-white',
});


</script>
</body>


</html>



	