    <style>
	.col-md-6.border {
	    border: 1px solid;
	}
	.form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control {
	background: #ffffff none repeat scroll 0 0;
	opacity: 0.6;
	}
	.col-md-2 > label {
		margin-top: 7px;
	    }
	.col-md-3 > label {
	    margin-left: 103px;
	    margin-top: 10px;
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
			<h4 class="panel-title">Leave Staus</h4>
		</div>
		<div class="panel-body">
		    <form action="#" method="post">
			
			    <div class="col-md-12">
				<div class="col-md-12">
				    <div class="well">
				    <legend><h4>Leave Status</h4></legend>
				    <div class="row">
					<div class="col-md-12">
					    <div class="col-md-1">
						    <label>Employee Name:</label>
					    </div>
					    <div class="col-md-2">
						    <select name="sname" class="form-control selectpicker" id="sname" onchange="fetchdata($(this))">
                                                      <option selected hidden disabled >Select Employee</option>
							<?php foreach($this->ps_model->empdetails() as $row){ ?>
							
							<option value="<?php echo $row['EMP_FIRST_NAME'] ?>" ><?php echo $row['EMP_FIRST_NAME'] ?></option>
							<?php } ?>
							
						    </select>
					    </div>
  <div class="col-md-1">
					    <label>Employee Id :</label>
					</div>
					<div class="col-md-2">
					   <input type="text" name="empid" id="empid" class="form-control" >
					</div>
					    <div class="col-md-1">
						    <label>Select Month/Year:</label>
					    </div>
					    <div class="col-md-4">
						<div class="col-md-6">
						     <div class="form-group">
							<!--<div class="input-group input-append date" id="datePicker">
							    <!--<input type="text" class="form-control" id="smonth" name="smonth" />
							    <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>-->
							<!--</div>-->
							<select class="form-control selectpicker" id="smonth" name="smonth">
							    <option selected hidden disabled >Select Month</option>
							    <option value="jan" >JAN</option>
							    <option value="feb" >FEB</option>
							    <option value="mar" >MAR</option>
							    <option value="apr" >APR</option>
							    <option value="may" >MAY</option>
							    <option value="jun" >JUN</option>
							    <option value="jul" >JLY</option>
							    <option value="aug" >AUG</option>
							    <option value="sep" >SEP</option>
							    <option value="oct" >OCT</option>
							    <option value="nov" >NOV</option>
							    <option value="dec" >DEC</option>

						        </select>
						   </div>
						</div>
						<div class="col-md-6">
						     <div class="form-group">
							<div class="input-group input-append date" id="datePicker1">
							    <input type="text" class="form-control" id="syear" name="syear" />
							    <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
							</div>
						</div>
						</div>

					    </div>
					</div>
				    </div>
				    <p></p>

				    </div>
				    </div>

				</div>
			    <div class="col-md-12">
			    <div class="col-md-8">
				<div class="well">
				    <legend><h4>Leave Details of Selected Employee</h4></legend>
					<div class="row">
					    <table class="table leavess" id="leave" style="width: 99%">
						<thead>
						    <th>ID</th>
						    <th>Start Date</th>
						    <th>End Date</th>
						    <th>Leave Type</th>
						    <!--<th class="hidden">Name</th>-->
						</thead>
						<tbody>
						
						</tbody>
						
					    </table>
					</div>
				</div>
			    </div>
			    <div class="col-md-4">
				<div class="well">
				   <legend><h4>Leave Summary</h4></legend>
					<div class="row">
					<div class="col-md-12">
					    <div class="col-md-5">
					    <label>Total Leave:</label>
					    </div>
					    <div class="col-md-7">
						
						<input type="text" class="form-control" value=""  name="Gross_detection" id="total" />
						
					    </div>
					</div>

					<div class="col-md-12">
					      <p></p>
					    <div class="col-md-5">
					    <label>CL Leave:</label>
					    </div>
					    <div class="col-md-7">
						<input type="text" class="form-control" value=""  name="Gross_detection" id="CL" />
					    </div>
					</div>
					<div class="col-md-12">
					    <p></p>
					    <div class="col-md-5">
					    <label>EL Leave:</label>
					    </div>
					    <div class="col-md-7">
						<input type="text" class="form-control" value=""  name="Gross_detection" id="EL" />
					    </div>
					</div>
					<div class="col-md-12">
					    <p></p>
					    <div class="col-md-5">
					    <label>LOP :</label>
					    </div>
					    <div class="col-md-7">
						<input type="text" class="form-control" value=""  name="Gross_detection" id="LOP" />
					</div>
					</div>
					<div class="col-md-12">
					    <p></p>
					    <div class="col-md-5">
					    <label>SL Leave:</label>
					    </div>
					    <div class="col-md-7">
						<input type="text" class="form-control" value="" readonly=""  name="Gross_detection" id="SL" />
					    </div>
					</div>
					
					
					</div>
				</div>
			    </div>
				</div>

				<div class="col-md-12 ">
					    <div class="col-md-3"></div>
					    <div class="col-md-6">
						<!--<a href="<?php echo base_url('payslipCtr/next'); ?>"><input type="button" value="Report" class="btn btn-primary" ></a>-->
						<!--<input type="submit" value="Save" class="btn btn-success">-->
						<input type="button" onclick="srecords()" value="Show Records" class="btn btn-danger"></a>
							    
					    </div>
				</div>
				<input type="hidden" value="CL" name="clname" id="clname">
				<input type="hidden" value="LOP" name="lopname" id="lopname">
			</form>

		</div>
	    </div>
	</div>
    </div>
</div>
 <script>
    function fetchdata($this){
    var name =$this.val();
   
    $.ajax({
    type:"post",
    url:"<?php echo base_url('PayslipCtr/getEmpId');?>",
    data:{name:name},
    dataType:'json',
    success:function(json){
       
	$("#empid").val(json[0].EMP_ID);
	
    }
    });
    }
    </script>
<script>
    
    $(document).ready(function() {
	$('.selectpicker').selectpicker();
	
    $('#datePicker')
        .datepicker({
            format: 'M'
        })
        .on('changeDate', function(e) {
            // Revalidate the date field
            $('#eventForm').formValidation('revalidateField', 'date');
        });
    $('#datePicker1')
        .datepicker({
            format: 'yyyy'
        })
        .on('changeDate', function(e) {
            // Revalidate the date field
            $('#eventForm').formValidation('revalidateField', 'date');
        });
    });

</script>
<script>
   function srecords()
   {
   
    var empname=$('#sname').val();
    var empmonth=$('#smonth').val();
    var empyear=$('#syear').val();
    var clname=$('#clname').val();
    var lopname=$('#lopname').val();
    //$('#leave').dataTable().fnDraw();
    //var status=$('#syear').val();
    //var name=$('#selectpicker6').val();
    var URL ="<?php echo base_url('payslipCtr/srecords');?>";
    $.ajax({
	    type: "POST",
	    url: URL,
	    data: {empname:empname,empmonth:empmonth,empyear:empyear,clname:clname,lopname:lopname},
	    dataType:'json',
	    success: function(json)
	    {		
		if(json)
		{
		 var len = json.tbl.length;
		 //console.log(len);
		 var txt = "";
		 if(len > 0)
		 {
		    
		    for(var i=0;i<len;i++)
		    {
			
		    if(json.tbl[i].SFT_DATE!='')
			{
			    txt += "<tr><td>"+ json.tbl[i].SFT_ID +"</td> <td>"+json.tbl[i].SFT_DATE+"</td> <td>"+json.tbl[i].SFT_DATE+"</td> <td>"+json.tbl[i].SFT_STATUS+"</td></tr>";
			    $("#leave").html(txt);
			}
			
		    } 
		 }
		 else{
			$("#leave").html('');
		    }
		 
		}
		
		
		
		$("#total").val(json.totalcount[0].total);
		$("#CL").val(json.clcount[0].cl);
		$("#LOP").val(json.lopcount[0].lop);
		
	    }
	})
    
	
   }
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


