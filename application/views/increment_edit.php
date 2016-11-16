<title>Inc-Dec Edit</title><div id="content" class="content">
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
		    <form action="<?php echo base_url('PayslipCtr/increment_update/'.$increment_edit[0]['ID']);?>" method="post">
			<div class="conatnier">
			    <div class="col-md-12">
				<div class="col-md-6">
				    <div class="well">
				    <p></p>
					<legend>Employee Details</legend>
					<div class="row">
					    
					    <div class="col-md-12">
						<div class="col-md-5">
							<label>Employee Name:</label>
						</div>
						<div class="col-md-7">
						      <select id="selectpic" name="emp_name" onchange="fun_namne()" class="form-control selectpicker">
							<option option disabled hidden>Select Employee</option>
							<option value="<?php echo $increment_edit[0]['EMP_NAME']?>"><?php echo $increment_edit[0]['EMP_NAME']?></option>
							<?php foreach ($data1 as $row) {?>
							<option value="<?php echo $row['EMP_FIRST_NAME']?>"><?php echo $row['EMP_FIRST_NAME']?></option>
							<?php }?>
							</select>
						</div>
					    </div>
					    <div class="col-md-12">
						   <br>	
						<div class="col-md-5">
						    <label>Employee ID:</label>
						</div>
						<div class="col-md-7">
						    <input type="text" class="form-control" name="emp_id" id="emp_id" value="<?php echo $increment_edit[0]['EMP_ID']?>">
						</div>
					    </div>
					    <div class="col-md-12">
						   <br>	
						<div class="col-md-5">
						    <label>Department:</label>
						</div>
						<div class="col-md-7">
						  <select class="form-control" id="department" name="department">
						    <option value="<?php echo $increment_edit[0]['EMP_DEPARTMENT']?>"><?php echo $increment_edit[0]['EMP_DEPARTMENT']?></option>
						    <option value="IT">IT</option>
						    <option value="HR">HR</option>
						    <option value="DATA-ENTRY">DATA-ENTRY</option>
						</select>
						</div>
					    </div>
				    	   
					</div>
					<br>
					<legend>Increment/Decrement Details</legend>
					<div class="row">
					    <div class="col-md-12">
						 <br>
						<div class="col-md-5">
						    <label>Amount:</label>
						</div>
						<div class="col-md-7">
						<div class="input-group">
						    <span class="input-group-addon"><i class="fa fa-inr"></i></span>
						    <input type="text" class="form-control" name="inc_dec_amount" id="inc_amount" value="<?php echo $increment_edit[0]['AMOUNT']?>">
						</div>
						</div>

					    </div>

					    <div class="col-md-12">
						 <br>
						<div class="col-md-5">
						    <label>Increment / Decrement Type:</label>
						</div>
						<div class="col-md-7">
						    <input type="radio" name="inc_dec_option" id="increment" onclick="cala('inc');" value="increment" <?php if($increment_edit[0]['INC_DEC_TYPE']=='increment') {echo 'checked';}?>> Increment(Addition in salary)<br>
						</div>
					    </div>
					    <div class="col-md-12">
						<div class="col-md-5"><label></label></div>
						<div class="col-md-7">
						    <input type="radio" name="inc_dec_option" id="decrement" onclick="cala('dec');" value="decrement" <?php if($increment_edit[0]['INC_DEC_TYPE']=='decrement') {echo 'checked';}?>> Decrement(Detection in Salary)<br>
						</div>
					    </div>
					</div>
					<br>
				
				</div>
			    </div>
			    <div class="col-md-6">
				<div class="well">
				    <P></P>
				    <legend>Date</legend>
				    <div class="row">
					<div class="col-md-12">
					    <div class="col-md-5">
						<label>Increment Decrement Effective Month:</label>
					    </div>
					    <div class="col-md-7">
						<div class="form-group">
                                                    <div class="input-group input-append date" id="datePicker">
                                                        <input type="text" class="form-control" name="month_of_inc_dec" value="<?php echo $increment_edit[0]['INC_DEC_EFFECTIVE_MONTH']?>" />
                                                        <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                                                    </div>
						</div>
					    </div>
					</div>
				    </div>
				    <br>
					<legend>Remarks</legend>
					<div class="row">
					    <div class="col-md-12">
						<textarea name="remarks" cols=50 rows=2 value=""><?php echo $increment_edit[0]['REMARKS']?></textarea>
					    </div>
					</div>
					
					</div>
					<div class="row">
					  <div class="col-md-12">
					    <center>
						<input type="submit" name="update" value="Update" class="btn btn-info btn-sm">
					    </center>
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
    
    function openRecord(){
     window.location="<?php echo base_url('PayslipCtr/viewIncrement');?>"
    }
    
    $(document).ready(function() {
	
    $('#datePicker')
        .datepicker({
            format: 'M-yyyy'
        })
        .on('changeDate', function(e) {
            // Revalidate the date field
            $('#eventForm').formValidation('revalidateField', 'date');
        });
    });

</script>
<!--<script>

function cala(fun)
                {
                                 
                var num1 = parseInt(document.getElementById("basic_salary").value);
                var num2 = parseInt(document.getElementById("inc_amount").value);
                //var result = document.getElementById("new_salary");
			    if (fun=="inc")
                                {
                                 result.value = num1 + num2;
                                                
                                }
                                else if (fun=="dec") 
                                {
                                 result.value = num1 - num2;
                                }
                }
</script>-->
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
			     "scrollY": true,
			  
	    } );
		    t.on( 'order.dt search.dt', function () {
			    t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
				    cell.innerHTML = i+1;
			    } );
		    } ).draw();
    });

</script>
    <script>
	$('.selectpicker').selectpicker();
    
    function fun_namne(){
	//alert("ghgfh");
	
	var name=$("#selectpic option:selected").attr('data-id');
	//console.log(name);
	var URL ="<?php echo base_url('payslipCtr/fetch_data'); ?>";
	$.ajax({
	    type:"POST",
	    url:URL,
	    data: {emp_id:name},
	    dataType:'json',
	    success: function(json)
	    {
		
		$('#emp_id').val(json[0].EMP_ID);
		$('#department').val(json[0].EMP_DEPARTMENT);
		 //$("#get_id").val(json[0].EMP_ID);
		  //view_table();
	    },
	    
	});
    }
    
</script>

	