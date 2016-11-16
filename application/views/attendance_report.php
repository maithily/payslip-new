		
	<title>Attendance Report</title>
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
			<h1 class="page-header">Attendance Log Report<small></small></h1>
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
                            <h4 class="panel-title">Reports</h4>
			    
                        </div>
                        <div class="panel-body">
				<div class="well">
				     <div class="form-group">
					<div class="col-md-2">
					    <label>Employee Name:</label>
					</div>
					<div class="col-md-2">
					 
					   <label><b><?php if($display){ echo $design[0]['EMP_FIRST_NAME'];} ?></b></label>
					</div>
				        <div class="col-md-2">
					    <label>Designation:</label>
					</div>
					<div class="col-md-2">
					    <label><b><?php if($display){ echo $design[0]['EMP_DESIGNATION']; } ?></b></label>
					</div>
					 <div class="col-md-2">
					    <label>Total Working Hrs:</label>
					</div>
					<div class="col-md-2">
						
						 <label><b><?php echo $Hrs_monthly[0]["checkvalue"].'hrs';  ?></b></label>
						 
					</div>
					
				    </div>
				    <br>
				</div>
				
			   
                            <form class="form-horizontal" action="" method="POST" id="datavalues" onload="viewval()">
                                <div class="well">
                                   <table class="table datatable table-striped table-bordered nowrap responsive" width="100%" id="data">
                                    <thead> 
                                        <tr class="table-responsive info">
                                            <th>Date</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php if(is_array($display)){
                                            foreach($display as $row) { ?>
                                        <tr>
                                          
                                            <td><?php echo $row['SFT_DATE']; ?></td>
                                            <td><?php echo $row['SFT_STATUS']; ?></td>
                                            
                                        </tr>
                                           <?php } } ?>
                                    </tbody>
                                   </table>
				    </div>
                                      
                                        <br>
                                     	<div class="well">
					    <legend>Status Summary </legend>
					    <table style="border:none;" class="table table-striped table-bordered dataTable no-footer hides" id="present" role="grid" aria-describedby="data-table_info">
					    <thead>
                                                <tr role="row" class="table responsive info">
                                                   
                                                   <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" style="width: 87px;" aria-label="Name: activate to sort column ascending">Present</th>
                                                   <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" style="width: 87px;" aria-label="Name: activate to sort column ascending">LOP</th>
                                                    <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" style="width: 87px;" aria-label="Name: activate to sort column ascending">CL</th>
                                                   <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" style="width: 87px;" aria-label="Name: activate to sort column ascending">Holiday</th>
                                                
                                                </tr>
                                            </thead>
                                            <tbody>
                                                 <?php if (is_array($record)){
                                                foreach($record as $row) {
						    foreach($CL as $c) {
							foreach($LOP as $L) {
								foreach($holiday as $holi) {?>
                                                <tr>
                                                    <td><?php echo $row['ssmonth']; ?></td>
                                                   <td><?php if($L['ssmonth']=="") { echo "0"; }else{ echo $L['ssmonth']; } ?></td>
						    <td><?php echo $c['ssmonth']; ?></td>
                                                  <td><?php echo $holi['ssmonth']; ?></td>
                                                </tr>
                                                  <?php } } } } }?>
                                            </tbody>
					    </table>
                                        </div>
		
                                        <div class="row">
                                           <div class="col-md-3 col-md-offset-5">
                                         
                                         <a href="<?php echo base_url('PayslipCtr/attendanceLog');?>"><button id="clear_data" class="btn btn-sm btn-danger" type="button">Close</button></a>
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
	$(document).ready(function() {
		$('#data').DataTable( {
		
		} );
	    } );
		    
</script>		
		

	
</body>

</html>

