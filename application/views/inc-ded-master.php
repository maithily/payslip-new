<?php  /*print_r($data_edit);exit;*/?>
<title>Inclusion-Deduction</title><div id="content" class="content">
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
<h4 class="panel-title">Inclusion and Deduction</h4>
</div>
<div class="panel-body">
	
<div class="well">	
	<legend>Inclusion and Deduction</legend>
	<br>
	<div class="row">
		<form action="<?php echo base_url('payslipCtr/master_insert_inclusion');?>" method="post" id="form_validation">
		
			<div class="conatnier">
				
				<div class="col-md-12">
					
					<div class="row">
						<div class="col-md-4">
						   <div class="form-group">
							   <label class="col-md-3 control-label">Name :</label>
							   <div class="col-md-9">
								  <select class="form-control selectpicker" name="field_name" id="field">
											 <option value="">Select</option>
											 <option value="HRA">HRA</option>
											 <option value="DA">DA</option>
											 <option value="TA">TA</option>
											 <option value="Incentive">Incentive</option>
											 <option value="Increment">Increment</option>
											 <option value="LOP">LOP</option>
											 <option value="Advance">Advance salary if paid</option>
											 <option value="Deduction">Other Deduction</option>
								   </select>
								   <span id="error" style="color:#f00"> Field already exits </span>
							   </div>
							   </div>
						   </div>
				
						<div class="col-md-4">
						   <div class="form-group">
							   <label class="col-md-5 control-label">Add type :</label>
							   <div class="col-md-7">
								   <select class="form-control selectpicker" name="add_type" id="addtype_error">
                                                                        <option value="">Select</option>
                                                                        <option value="Inclusion">Inclusion</option>
                                                                        <option value="Deduction">Deduction</option>
								   </select>
							   </div>
						   </div>
					   </div>
						<div class="col-md-4">
						   <div class="form-group">
						  <div class="col-md-4">
							  <button type="submit" class="btn btn-sm btn-success form-control" id="add_button">ADD</button>
						  </div>
						</div>
					   </div>
						
					
				   </div><br>
					<div class="row" id="HRA">
						<div class="col-md-4">
						   <div class="form-group">
							   <label class="col-md-5 control-label">HRA in per:</label>
							    <div class="col-md-7">
									<div class="input-group">
				                       <span class="input-group-addon">%</span>
								  <input type="text" value="" id="hra_error" class="form-control"  name="hra_per">
									</div>
							   </div>
							   </div>
						   </div>
						 <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Report</button>
					</div>
					<div class="row" id="DA">	
						<div class="col-md-4">
						   <div class="form-group">
							   <label class="col-md-5 control-label">DA in per:</label>
							   <div class="col-md-7">
								  <div class="input-group">
									        <span class="input-group-addon">%</span>       
								  <input type="text"  value="" id="da_error"  class="form-control" name="da_per">
								  </div>
							   </div>
							   </div>
						   </div>
							<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Report</button>
					</div>
					
					
					
				</div>
			</div>
		
		</form>
	</div>
</div>
	<!--end of employee detail-->
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
		<!-- Modal content-->
		<div class="modal-content">	
			 <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Update Percentage</h4>
            </div>
		 <div class="modal-body">	 
			<div class="row">
			    	    

				<form action="<?php echo base_url('payslipCtr/master_update_percentage');?>" method="post">
				<div class="col-md-12">
						<div class="col-md-offset-1 col-md-4">
						   <div class="form-group">
							   <label class="col-md-5 control-label">HRA in per:</label>
								<div class="col-md-7">
									<div class="input-group">
									   <span class="input-group-addon">%</span>
								  <input type="text"   value="<?php echo $result[0]['hra_per'];?>"  class="form-control"  name="hra_per">
									</div>
							   </div>
							   </div>
						   </div>
						
									
						<div class="col-md-5">
						   <div class="form-group">
							   <label class="col-md-5 control-label">DA in per:</label>
							   <div class="col-md-7">
								  <div class="input-group">
											<span class="input-group-addon">%</span>       
								  <input type="text"  value="<?php echo $result1[0]['da_per'];?>"class="form-control" name="da_per">
								  </div>
							   </div>
							   </div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<div class="col-md-10">
									<button type="submit" class="btn btn-sm btn-success form-control">Update</button>
								</div>
							</div>
						</div>
				</div>
				</form>
			</div>
		 </div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
	   </div>
	</div>
 </div>
    	
<br>	
<br>	

<div class="well">
<legend>Tabular</legend>

	<div class="table-responsive" >
		<table id="masterTable" class="table table-bordered nowrap">
			<thead>
				<tr>
					<th class="hide"></th>
					<th>Lable Name</th>
					<!--<th>HR Percentage</th>
					<th>DA Percentage</th>-->
					<th>Type</th>
					<th>Created date/time</th>
				
					<th>Active / Deactive</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody id="master_table">
				<?php foreach($this->ps_model->get_master_setting() as $row){ ?>
				
				<tr class="oddClass">
					
                                   	<td class="hide" id="userid"><?php echo $row['id'];?></td>			    
                                    <td>
                                        <?php echo $row['field_name'];?>
                                    </td>
				<!--     <td>
                                        <?php echo $row['hra_per'];?>
                                    </td>
				     <td>
                                        <?php echo $row['da_per'];?>
                                    </td>-->
                                    <td>
                                        <?php echo $row['directed_type'];?>
                                    </td>
                                     <td>
                                        <?php echo $row['cr_date']; ?>
				    </td>
				<td>
					<input type="checkbox" name="check" value="<?php echo $row['flag'] ;?>" <?php if($row['flag']=='activate'){ echo 'checked';}?>  id="switchery"   class="lcs_check lcs_tt1" />
				</td>
				    <td>
					<button type="button" name="delete" id="edit"  value="Edit" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#master_edit" onclick="edit_master( <?php  echo $row['id'] ?>, $(this) )"> <i class="glyphicon glyphicon-edit"></i></button>
					<button type="button" name="delete" id="delete"  value="delete" class="btn btn-xs btn-danger" onclick="delete_master( <?php  echo $row['id'] ?>, $(this) )"> <i class="fa fa-trash-o"></i></button>

                                    </td>
				</tr>
				<?php } ?>
			</tbody>
			</table>
	</div>
</div>

	<div class="container">

	  <div class="modal fade" id="master_edit" role="dialog">
	    <div class="modal-dialog modal-lg">
	      <div class="modal-content">
		<div class="modal-header">
		  <button type="button" class="close" data-dismiss="modal">&times;</button>
		  <h4 class="modal-title">Modal Header</h4>
		</div>
		<div class="modal-body">
		    <div class="row">
			<!--<form action="<?php echo base_url('payslipCtr/');?>" method="post">-->
			<div class="col-md-4">
			   <div class="form-group">
				   <label class="col-md-4 control-label">Name :</label>
				   <div class="col-md-8">
					  <select class="form-control selectpicker" name="field_name" id="edit_field">
								 <option value="">Select</option>
								 <option value="HRA">HRA</option>
								 <option value="DA">DA</option>
								 <option value="TA">TA</option>
								 <option value="Incentive">Incentive</option>
								 <option value="Increment">Increment</option>
								 <option value="LOP">LOP</option>
								 <option value="Advance">Advance salary if paid</option>
								 <option value="Deduction">Other Deduction</option>
					   </select>
				   </div>
				   </div>
			   </div>
			<input type="hidden" id="update_id" value="" name="id">
			<div class="col-md-4">
			   <div class="form-group">
				   <label class="col-md-5 control-label">Add type :</label>
				   <div class="col-md-7">
					   <select class="form-control selectpicker" name="add_type" id="edit_addtype_error">
						<option value="">Select</option>
						<option value="Inclusion">Inclusion</option>
						<option value="Deduction">Deduction</option>
					   </select>
				   </div>
			   </div>
		   </div>
			<div class="col-md-4">
			   <div class="form-group">
			  <div class="col-md-4">
				  <button type="submit" class="btn btn-sm btn-warning form-control" onclick="update_master_filed()" id="update_button">Update</button>
			  </div>
			</div>
		   </div>
<!--		</form>
-->	   </div><br>
		 
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		</div>
	      </div>
	    </div>
	  </div>
	</div>
	<br>
	<br>
	<br>

	
</div>

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


$(document).ready(function()
{
switchRefreash();

$('#form_validation').bootstrapValidator({
feedbackIcons: {
valid: 'glyphicon glyphicon-ok',
invalid: 'glyphicon glyphicon-remove',
validating: 'glyphicon glyphicon-refresh'
},
fields: {
field_name:
{
validators:
{
notEmpty:
{
message: 'The employee id is required and cannot be empty'	
}
},

remote:
{
	 trigger: 'blur',
	url: '<?=site_url('payslipCtr/check_field_availablitly')?>',
	type: 'POST',
	data: {type: 'field_name'},
}
},

add_type:
{
validators:
{
notEmpty:
{
message: 'Select any one'
},
}
},

},
});
});
	
	
	

	
function switchRefreash(){
	
	$('.lcs_check').lc_switch();

	// triggered each time a field changes status
	$('#master_table').delegate('.lcs_check', 'lcs-statuschange', function() {
		//alert();
		var status = ($(this).is(':checked')) ? 'activate' : 'deactivate';
		console.log('field changed status: '+ status );
		    var $row = $(this).parents('.oddClass');
		       var userid = $row.find('[id="userid"]').text();
				//alert(userid);
			    $.ajax({
				type: "POST",
				url: "<?=site_url('payslipCtr/master_switchery_update')?>",
				dataType:"json",
				data:{id:userid,status:status},                    
				success: function (json) {
					//alert();
					console.log(json);
				    window.location.reload();
				},
			    });
			});
		
}
	

$(document).ready(function() {
$("#field").change(function(){
   //alert();	
    console.log($(this).val());
	if ($(this).val() === 'HRA')
	{
	//alert(); 
	$("#HRA").show();
	$("#DA").hide();
	var field = $(this).val();
	console.log(field);
	 $.ajax({
				type: "POST",
				url: "<?=site_url('payslipCtr/check_field_availablitly')?>",
				dataType:"html",
				data:{field:field},                    
				success: function (html) {
						//alert(html);
						if(html==='Field already in use.')
						{
							$("#error").show();
							$("#add_button").prop('disabled',true);
							$("#hra_error").prop('disabled',true);
							$("#addtype_error").prop('disabled',true);
						}
						else
						{
							$("#error").hide();
							$("#add_button").prop('disabled',false);
							$("#hra_error").prop('disabled',false);
							$("#addtype_error").prop('disabled',false);
							
						}
					},
	 });
	}
	
   else if($(this).val() === 'DA')
	{
	$("#HRA").hide();
	$("#DA").show();
	var field = $(this).val();
	console.log(field);
	 $.ajax({
				type: "POST",
				url: "<?=site_url('payslipCtr/check_field_availablitly')?>",
				dataType:"html",
				data:{field:field},                    
				success: function (html) {
						//alert(html);
						if(html==='Field already in use.')
						{
							$("#error").show();
							$("#add_button").prop('disabled',true);
							$("#da_error").prop('disabled',true);
							$("#addtype_error").prop('disabled',true);
						}
						else
						{
							$("#error").hide();
							$("#add_button").prop('disabled',false);
							$("#da_error").prop('disabled',false);
							$("#addtype_error").prop('disabled',false);
						}
					},
	 });
	
	}
	
	else if($(this).val() !== 'HRA' && $(this).val() !== 'DA')
	{
	$("#HRA").hide();
	$("#DA").hide();
	var field = $(this).val();
	console.log(field);
	 $.ajax({
				type: "POST",
				url: "<?=site_url('payslipCtr/check_field_availablitly')?>",
				dataType:"html",
				data:{field:field},                    
				success: function (html) {
						//alert(html);
						if(html==='Field already in use.')
						{
							$("#error").show();
							$("#add_button").prop('disabled',true);
							$("#addtype_error").prop('disabled',true);
						}
						else
						{
							$("#error").hide();
							$("#add_button").prop('disabled',false);
							$("#addtype_error").prop('disabled',false);
							
						}
					},
	 });
	
	}
});
});

	
	
//$('.selectpicker').selectpicker({
//style: 'btn-white',
//});


$("#HRA").hide();
$("#DA").hide();
$("#error").hide();

function getTable()
{
$.ajax({
url:'<?php echo site_url('payslipCtr/fetch_table');?>',
type:"post",
success:function(html){
	window.location.reload();
	$("#master_table").html(html);
},
});	
	
}

function delete_master($id,$this)
{
console.log($this.parents('.oddClass'));
if(confirm("Are you sure want to delete!"))
{
console.log($id);
var id=$id;
$.ajax({
url:'<?php echo site_url("payslipCtr/master_delete");?>',
type:"post",
data:{id:id},
success:function(data){
  //getTable();
   var $row = $this.parents('.oddClass');
   console.log($row);
    $row.remove();
},
});
}
}
function edit_master($id){
    var id=$id;
    //console.log($id);
    $.ajax({
	type:"post",
	url:"<?php echo site_url("payslipCtr/master_edit");?>",
	data:{id:id},
	dataType:"json",
	success:function(json){
	console.log(json);
	$("#master_edit").modal('show');
	$("#update_id").val(json[0].id);
	$("#edit_addtype_error").val(json[0].directed_type);
	$("#edit_field").val(json[0].field_name);
	}
    })
}
function update_master_filed(){
     var filed = $("#edit_field").val();
     var type=$("#edit_addtype_error").val();
     var id=$("#update_id").val();
     console.log(id);
     console.log(type);
     console.log(filed);
     $.ajax({
	type:"post",
	url:"<?php echo site_url("payslipCtr/master_update");?>",
	//data:{user_id:id},
	data:{id:id,filed:filed,type:type},
	success:function(){
	    location.reload()
	    //window.location.href="inc_dec";
	}
    })
}
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
select: true,

} );

//t.on( 'order.dt search.dt', function () {
//t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
//cell.innerHTML = i+1;
//} );
//} ).draw();


} );
</script>

</body>
</html>



	