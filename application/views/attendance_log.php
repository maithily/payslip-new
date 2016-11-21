	<title>Attendance Logged</title>	
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Home</a></li>
				<li><a href="javascript:;">Form Stuff</a></li>
				<li class="active"></li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Attendance Logged<small></small></h1>
			<!-- end page-header -->
			
			<!-- begin row -->
            <!-- end row -->
            <!-- begin row -->
            <!-- end row -->
            <!-- begin row -->
            <div class="row">
                <!-- begin col-12 -->
                <div class="col-12">
                    <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">View Employee Log</h4>
			    
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" action="<?php echo base_url('PayslipCtr/showrecords'); ?>" method="POST" id="datavalues" onload="viewval()">
					    <div class="col-md-12">
					<div class="col-md-12">
					<div class="row">
						<div class="col-md-12">
						<div class="well">
							<legend>Employee Details / Select View Log Option</legend>
							                                                <form class="form-horizontal">			     							
						
                                                   <div class="form-group">
                                                     
                                                    <div class="col-sm-3">
                                                          <label>Employee Name:</label>
                                                       
                                                    </div>
                                                    <div class="col-sm-3">
							 
							<select id="selectpicker6" name="empname" onchange="names()" class="form-control">
								  <option value="">Select Employee</option>
                                                        <?php foreach($rawdata as $row) { ?>
                                                      
                                                        <option  value="<?php echo ucwords($row['EMP_FIRST_NAME']) ?>" ><?php echo ucwords($row['EMP_FIRST_NAME']) ?></option>
                                                       <?php } ?>
                                                              </select>
						 
                                                    </div>
						  
                                                    <div class="col-sm-2">
                                                        <input type="radio" id="monthly" name="radio" value="Monthly" onclick="enable()" > Monthly
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <input type="radio" id="yearly" name="radio" value="yearly" onclick="disable()"> Yearly
                                                    </div>
                                                     <div class="col-sm-2">
                                                        <input type="radio" id="datarange" name="radio" onclick="enables()" value="DataRange" checked> DateRange
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <div class="col-sm-3">
                                                      
							 <label>Employee ID:</label>
                                                    </div>
                                                    <div class="col-sm-3">
                                                      
							   <input type="text" name="emp_id" id="emp_id" class="form-control" placeholder="Employee ID" disabled>
                                                    </div>
						    <div id="idmonth">
                                                     <div class="col-sm-1">
                                                         <label id="labelmonth" >Month:</label>
							
							
                                                    </div>
                                                        <div class="col-sm-5" >
                                                      <select id="selectpicker1"  name="month"  class="form-control selectpicker" onchange="month_fun($(this))">
                                                       <option value="" >Select Month</option>
                                                        <option value="01" >JAN</option>
                                                        <option value="02" >FEB</option>
                                                        <option value="03" >MAR</option>
                                                        <option value="04" >APR</option>
                                                        <option value="05" >MAY</option>
                                                        <option value="06" >JUN</option>
                                                        <option value="07" >JUL</option>
                                                        <option value="08" >AUG</option>
                                                        <option value="09" >SEP</option>
                                                        <option value="10" >OCT</option>
                                                        <option value="11" >NOV</option>
                                                        <option value="12" >DEC</option>
                                                      </select>
                                                    </div>
							</div>
						    
						    
						    
													<div id="idmonth1">
														<div class="col-sm-1">
                                                         <label id="labelmonth" >From:</label>
													     </div>
							
                                                   
                                                        <div class="col-sm-4" >
                                                    <div class="input-group date" id='datetimepicker1'>
                                                      <input type='text' class="form-control" name="fromdate" value="" id="fromdate" onblur="from_Date($(this))" />
                                                        <span class="input-group-addon">
                                                            <span class="glyphicon glyphicon-calendar"></span>
                                                        </span>
                                                        
                                                </div>
                                                    </div>
											</div>

                                                </div>
                                                
                                                 <div class="form-group">
                                                    <div class="col-sm-3">
                                                        <label >Department:</label>
                                                    </div>
                                                    <div class="col-sm-3">
                                                       <input type="text" name="deptname" placeholder="IT Department"  id="deptname" class="form-control" readonly >
                                                    </div>
													
													
														<div id="idyear">
                                                      <div class="col-sm-1" id="labelyear">
                                                         <label >Year:</label>
							 
                                                    </div>
						      
                                                        <div class="col-sm-5" >
                                                        <select id="selectpicker2"  name="year" class="form-control selectpicker" onchange="year_fun($(this))">
                                                      <option value="">Select Year</option>
                                                        <option value="2016" >2016</option>
                                                        <option value="2017" >2017</option>
                                                         <option value="2018" >2018</option>
                                                        <option value="2019" >2019</option>
                                                         <option value="2020" >2020</option>
                                                      </select>
                                                    </div>
													</div>

													
						    
						    
						    
						    
						    
												<div id="idyear1">
                                                      <div class="col-sm-1" id="labelyear">
                                                         <label >To:</label>
							 
                                                    </div>
						      
                                                        <div class="col-sm-4" >
                                                      <div class="input-group date" id='datetimepicker2'>
                                                      <input type='text' id="todate" name="todate" onblur="to_Fun($(this))" class="form-control" value=""  />
                                                        <span class="input-group-addon">
                                                            <span class="glyphicon glyphicon-calendar"></span>
                                                        </span>
                                                        
							 </div>
							 </div>
							</div>

                                                </div>
                                                 
                                                  <div class="form-group">
                                                    <div class="col-sm-3">
                                                        <label>Designation:</label>
                                                    </div>
                                                    <div class="col-sm-3">
                                                       <input type="text" name="designation" id="designation" class="form-control">
                                                    </div>
                                                </div>
                                                        
                                                </form>

						</div>
			   

						</div>
					    
                                        
                                        </div>
                                        <br>
                                     
                                        <div class="row">
                                           <div class="col-md-3 col-md-offset-4">
                                         <input type="submit" name="submit" id="submit" value="Show Records" class="btn btn-info">
                                            <button id="clear_data" class="btn btn-danger" type="button">Close</button>
                                            </div>
                                        </div>
                                                    
                                     
                                         <br>
                                            <br>
                                                <br>
                                                    <br>
                                                        <br>
                                                            <Br>
                                                                <br>
                                        </div>
                                            </div>
                            </form>
					
				
			
			
							
				
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-6 -->
              
            <!-- begin row -->
           
			    
           
            <!-- begin row -->
           
		</div>
		<!-- end #content -->
	
	</div>
                            
		</div>
		
		
		

			
<script>
	
	$(document).ready(function()
	{
		//from_Date();
		$("input[type=submit]").attr('disabled','disabled');
		
		$("#idmonth1").removeClass('hide');
		$("#idyear1").removeClass('hide');
		$('#idmonth').hide();
		$('#idyear').hide();
	});    
	       function from_Date($this){
		
		//alert("in");
		var fromdate=$this.val();
		console.log(fromdate);
		var todate=$('#todate').val();
		console.log(todate);
		if (todate && fromdate){ 
			//alert("true");
			$("input[type=submit]").removeAttr('disabled');
		}else if (todate && fromdate == ''){
			$("input[type=submit]").attr('disabled','disabled');
		}
	       }
	       
	       function to_Fun($this){
		var todate=$this.val();
		var fromdate=$('#fromdate').val();
		console.log(todate);
		console.log(fromdate);
		if (todate && fromdate){ 
			//alert("true");
			$("input[type=submit]").removeAttr('disabled');
		}else if (todate && fromdate == ''){
			$("input[type=submit]").attr('disabled','disabled');
		}
	       }
	       
	       function year_fun($this){
		//alert("out");
		var year = $this.val();
		if (year) {
			$("input[type=submit]").removeAttr('disabled');
		}else if (year == '') {
			$("input[type=submit]").attr('disabled','disabled');
		}
		
		
	       }
	        function month_fun($this){
		var month = $this.val();
		var year = $("#selectpicker2").val();
		//alert("exit");
		if (month && year) {
			$("input[type=submit]").removeAttr('disabled');
		}else if (month && year == '') {
			$("input[type=submit]").attr('disabled','disabled');
		}
		
	       }
	
		function disable()
		{

		$('#idmonth').hide();
		$('#idyear').show();
		$("#idmonth1").addClass('hide');
		$("#idyear1").addClass('hide');
		
		
		}
		
		function enable() {
			
			
			//document.getElementById("selectpicker1").disabled=false;.
			$('#idmonth').show();
			$('#idyear').show();
			$("#idmonth1").addClass('hide');
			$("#idyear1").addClass('hide');
			
			
			
			
			
		}
		function enables()
		{
			$('#idmonth').hide();
			$('#idyear').hide();
			$("#idmonth1").removeClass('hide');
			$("#idyear1").removeClass('hide');	
		
			 
		}
	
    
            $(function () {
                $('#datetimepicker1').datepicker({
					  format: 'yyyy-mm-dd'
				});
				$('#datetimepicker2').datepicker(
				{   format: 'yyyy-mm-dd'});
				
				
                $('#selectpicker1').selectpicker(
			{style: 'btn-white',});
                $('#selectpicker2').selectpicker(
			 {style: 'btn-white',});
                $('#selectpicker3').selectpicker(
			{style: 'btn-white',});
                $('#selectpicker4').selectpicker(
			{style: 'btn-white',});
                $('#selectpicker5').selectpicker(
			{style: 'btn-white',});
                //$('#selectpicker6').selectpicker(
			//{style: 'btn-white',});
                
                });
			
        </script>
<script>
	function shou_fun()
	{
		//alert('sef');
		var empname=$('#selectpicker6').val();
		var cmonth=$('#selectpicker4').val();
		var cyear=$('#selectpicker5').val();
		
		//console.log(cmonth);
		//console.log(cyear);
		var URL ="<?php echo base_url('PayslipCtr/calculate');?>";
		$.ajax({
		    type: "POST",
		    url: URL,
		    data: {empname:empname,cmonth:cmonth,cyear:cyear},
		    dataType:'json',
		    success: function(json)
		    {
			
			
				console.log(json.display[0].callmonth);
			
		    }
		});
	}
</script>
	<script>
             //$('#datavalues').html(refresh);
	    function names(){
		
		var name=$('#selectpicker6').val();
		//console.log(name);
		var URL ="<?php echo base_url('PayslipCtr/attendfetch');?>";
		$.ajax({
		    type: "POST",
		    url: URL,
		    data: {name:name},
		    dataType:'json',
		    success: function(json)
		    {
			
			console.log(json);
			//$('#emp_id').val(json[0].emp_id);
			
			$('#designation').val(json[0].EMP_DESIGNATION);
                        $('#deptname').val(json[0].EMP_DEPARTMENT);
                        $('#emp_id').val(json[0].EMP_ID);
			//$('#month').val(json[0].month);
		    }
		});
	    }
		
	
		
	    
	    function srecord()
	    {
			//alert('sdf');

		var dddd=$('input[name=radio]:checked', '#datavalues').val();
		

		var fromdate=$('#fromdate').val();
		var todate=$('#todate').val();

		var ename=$('#selectpicker6').val();
		var month=$("#selectpicker1").val();
		var year=$("#selectpicker2").val();

		//console.log(year);
		var URL="<?php echo base_url('PayslipCtr/showrecords'); ?>";
		$.ajax(
		{
			type:"POST",
			url:URL,
			//data:{ename:ename},
			//data:{month:month,year:year,ename:ename,monthly:monthly,yearly:yearly,fromdate:fromdate,todate:todate,datarange:datarange},
			data:{month:month,year:year,ename:ename,fromdate:fromdate,todate:todate,dddd:dddd},
			dataType:'json',
			success: function(json)
			{
				//console.log(json.disp[0].month);
				//console.log(json.disp[0].days);
				//$('#present').val(json.display[0].ss);
				//$('#absent').val(json.dispab[0].absent);
				if (json)
				{
					txt += "<tr><td>"+json.display[0].ss+"</td><td>"+json.dispab[0].absent+"</td><td>"+json.dispab[0]+"</td><td>"+json.dispab[0]+"</td></tr>";
					 $("#present").html(txt);
				}
				
			
				if(json)
				{
					var len = json.disp.length;
					console.log(len);
					var txt = "";
					if(len > 0)
					{
					    for(var i=0;i<len;i++)
					    {
						if(json.disp[i].days)
						{
							
						    txt += "<tr><td>"+json.disp[i].days+" / "+json.disp[i].month+" / "+json.disp[i].year+"</td><td>"+json.disp[i].status+"</td></tr>";
							//$('#present').val(data[0].month);
						}
							
					    }
					  $("#data-table").html(txt).removeClass("hides");
					
							
						
				
						
					}
					 
				}
				
		       
				//$("#data1").val(json[0].emp_id);
			}
		
		});
	    }
	    
	    
	   
	</script>

	
</body>

</html>

