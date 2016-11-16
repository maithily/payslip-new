 <title>Inc-Dec</title>
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
		    <form action="<?php echo base_url('PayslipCtr/insert');?>" id="defaultForm" method="post">
			    <div class="col-md-12">
				<div class="col-md-6">
				    <div class="well">
				    <p></p>
					<legend>Employee Details</legend>
					<div class="row">
					    <div class="form-group">
					    <div class="col-md-12">
						<div class="col-md-5">
							<label>Employee Name:</label>
						</div>
						<div class="col-md-7">
						      <select id="selectpic" name="emp_name" onchange="fun_namne()" class="form-control">
							<option selected disabled hidden>Employee Name</option>
							
							    <?php foreach($this->ps_model->empdetails() as $row){ ?>
							  
							    <option data-id="<?php echo $row['EMP_ID']; ?>" value="<?php echo ucwords($row['EMP_FIRST_NAME']) ?>" ><?php echo ucwords($row['EMP_FIRST_NAME']) ?></option>
							   <?php } ?>
							</select>
						</div>
						</div>
					    </div>
					    <div class="col-md-12">
						   <br>	
						<div class="col-md-5">
							<label>Employee ID:</label>
						</div>
						<div class="col-md-7">
                                                <div class="form-group">
							<input type="text" class="form-control" name="emp_id" id="emp_id" >
                                                   </div>
						</div>
					    </div>
					    <div class="col-md-12">
						   <br>	
						<div class="col-md-5">
							<label>Designation:</label>
						</div>
						<div class="col-md-7">
                                                <div class="form-group">
							<input type="text" class="form-control" name="department" id="designation" >
						</div>
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
                                                <div class="form-group">
						<div class="input-group">
						    <span class="input-group-addon"><i class="fa fa-inr"></i></span>
						    <input type="text" class="form-control" name="inc_dec_amount" id="inc_amount" />
						</div>
						</div>
                                              </div>
					    </div>
                                             <div class="form-group">
					    <div class="col-md-12">
						 <br>
						<div class="col-md-5">
							<label>Increment / Decrement Type:</label>
						</div>
						<div class="col-md-7">
							<input type="radio" name="inc_dec_option" id="increment" onclick="cala('inc');"  value="increment"> Increment(Addition in salary)<br>
						</div>
					    </div>
					    <div class="col-md-12">
						<div class="col-md-5"><label></label></div>
						<div class="col-md-7">
						    <input type="radio" name="inc_dec_option" id="decrement" onclick="cala('dec');" value="decrement"> Decrement(Detection in Salary)<br>
						</div>
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
							    <input type="text" class="form-control" name="month_of_inc_dec" />
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
						<textarea rows="2" cols="50" name="remarks"></textarea>
					    </div>
					</div>
					<br>

					</div>
					<div class="row">
					  <div class="col-md-12">
					    <center>
						<input type="submit" class="btn btn-success" value="Save" name="">
						<a href="<?php echo base_url('payslipCtr/viewIncrement'); ?>" ><button  type="button"  class="btn btn-primary">Show Record</button></a>
						
						
					    </center>
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
	    department:{
		trigger: 'blur',
                validators: {
                    notEmpty: {
                        message: 'The Department is required'
                    }
                }
            },
	    inc_dec_amount:{
                validators: {

                    notEmpty: {
                        message: 'The Amount is required'
                    },
                 regexp:{
                   regexp: /^[0-9]{1,10}$/,
                   message:'Amount should contain only numbers'	
                   }
                }
            },
	    inc_dec_option:{
                validators: {
                    notEmpty: {
                        message: 'The Inc-Dec-Option is required'
                    }
                }
            },
	   
            month_of_inc_dec:
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
        }
	});
    });
    </script>

<script>
    
    $(document).ready(function() {
	
    $('#datePicker').datepicker({
            format: 'M-yyyy'
        })
        
    });

</script>
<script>

function cala(fun)
                {
                                 
                var num1 = parseInt(document.getElementById("basic_salary").value);
                var num2 = parseInt(document.getElementById("inc_amount").value);
                var result = document.getElementById("new_salary");
			    if (fun=="inc")
                                {
                                 result.value = num1 + num2;
                                                
                                }
                                else if (fun=="dec") 
                                {
                                 result.value = num1 - num2;
                                }
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
			     "scrollY": true,
			  
	    } );
		    t.on( 'order.dt search.dt', function () {
			    t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
				    cell.innerHTML = i+1;
			    } );
		    } ).draw();
    });
//    $('#test').on('shown.bs.modal', function (e) {
//  $.fn.dataTable.tables( {visible: true, api: true} ).columns.adjust();
//  
//});
    
//$('.datatable').DataTable()
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
		$('#designation').val(json[0].EMP_DESIGNATION);
		 //$("#get_id").val(json[0].EMP_ID);
		  //view_table();
	    },
	    
	});
    }
    
</script>

	