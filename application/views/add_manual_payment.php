<style>
		
	.bootstrap-datetimepicker-widget.dropdown-menu {
  /*  margin: 2px 0;*/
    /*padding: 2px;*/
    width: 27em ;
	
	}
	.fieldset {
	display: block;
    margin-left: 2px;
    margin-right: 2px;
    padding-top: 0.35em;
    padding-bottom: 0.625em;
    padding-left: 0.75em;
    padding-right: 0.75em;
    border: 2px groove (internal value);
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
                            <h4 class="panel-title">Add manual payment</h4>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" action="<?php echo base_url(); ?>employee_cntrl/update_employee_list/" method="post" enctype="multipart/form-data"     >
								<div class="col-md-12">
									<div class="well">
										<legend>Employee Details</legend>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="col-md-4 control-label">Employee Id :</label>
													<div class="col-md-8">
														<input type="text" class="form-control" name="emp_id" placeholder="Employee Id" />
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="col-md-3 control-label">Department :</label>
													<div class="col-md-9">
														<input type="text" class="form-control" name="emp_id" value="IT" disabled/>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label class="col-md-2 control-label">Employee Name :</label>
															<div class="col-md-10">
																<select class="form-control selectpicker" name="emp_country" data-style="btn-white">
																<option value="india">jaya</option>
																<option value="dubai"></option>
																<option value="canada"></option>
																<option value="newzland"></option>
																<option value="france"></option>
															</select>
															</div>
												</div>
											</div>
										</div>
									</div>
									<div class="well">
										<legend>Manual Payment Details</legend>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="col-md-4 control-label">Payslip No :</label>
													<div class="col-md-8">
														<input type="text" class="form-control" name="emp_id" placeholder="Payslip No." />
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="col-md-3 control-label">Month :</label>
													<div class="col-md-9">
														<div class='input-group date'>
																   <input type='text' name="" class="form-control datetimepicker1i"/>
															   <span class="input-group-addon">
																   <span class="glyphicon glyphicon-calendar"></span>
															   </span>
													   </div>
												</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="col-md-4 control-label">Payment type :</label>
														<div class="col-md-8">
															<select class="form-control selectpicker" name="emp_country" data-style="btn-white">
																<option value="india">salary</option>
																<option value="dubai">other</option>
																
															</select>
														 </div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="col-md-3 control-label">If other :</label>
														<div class="col-md-9">
															<input type="text" class="form-control" name="emp_id" value="" disabled/>
														</div>
													</div>
												</div>
										</div>
										<div class="well">
											<legend>Payment Details</legend>
											<div class="row">
												<!--<div class="col-md-6">
													<div class="form-group">
														<label class="col-md-4 control-label">Amount :</label>
														<div class="col-md-8">
																	<div class="input-group">
																	<div class="input-group-addon"><span style='font-family:Arial;'>&#8377;</span></div>-->
																		<!--<input type="text" class="form-control" id="exampleInputAmount" placeholder="0.00">-->
																	<!--<div class="input-group-addon">.00</div>-->
																	<!--</div>
																</div>
													</div>
												</div>-->
												<div class="col-md-6">
													<div class="form-group">
														<label class="col-md-4 control-label">Net Amount for Paid :</label>
														<div class="col-md-8">
																	<div class="input-group">
																	<div class="input-group-addon"><span style='font-family:Arial;'>&#8377;</span></div>
																		<input type="text" class="form-control" id="exampleInputAmount" placeholder="0.00">
																	<!--<div class="input-group-addon">.00</div>-->
																	</div>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label class="col-md-4 control-label">Payment Mode :</label>
														<div class="col-md-8">
															<select class="form-control selectpicker" name="emp_country" data-style="btn-white">
																<option value="india">By Bank Transfer</option>
																<option value="dubai">By cash</option>
																
															</select>
														</div>
													</div>
												</div>
												<!--<div class="col-md-6">
													<div class="form-group">
														<label class="col-md-3 control-label">Net Paid Amount :</label>
														<div class="col-md-9">
															<input type="text" class="form-control" name="emp_id" value="" disabled/>
														</div>
													</div>
												</div>-->
											</div>
										</div>
									</div>
									<div class="well">
										<legend>Remarks</legend>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label class="col-md-2 control-label">Remarks :</label>
															<div class="col-md-10">
																<textarea rows="1" cols="" name="" class="form-control"> </textarea> 
															</div>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
											
											<div class="col-md-offset-5">
												<button type="submit" class="btn btn-md btn-success">Save</button>
											</div>
								</div>
								</div>
							</form>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-6 -->
            </div>
		<!-- end #content -->
		
        
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	
	
	
	<script>
		$(document).ready(function() {
			App.init();
		});
	</script>
	
	<script>
		//$('.selectpicker').selectpicker({
		//		style: 'btn-white',
		//});
		//
		$(function() {              
           // Bootstrap DateTimePicker v4
           $('.datetimepicker1').datetimepicker({
                 format: 'DD/MM/YYYY'
           });
        });
		
		$(function() {              
           // Bootstrap DateTimePicker v4
           $('.datetimepicker1i').datetimepicker();
        });
		
//        $(function () {
//            $('#datetimepicker1').datetimepicker({
//		    format: 'DD/MM/YYYY LT'
//		     
//		     });
//			
//		});
		
     
	  
	  
	function showimage(input){
	var preimage = new FileReader();
	preimage.onload = function(e) {
	$('#previewing').attr('src', e.target.result);
	$('#previewing').attr('src', e.target.result);
	}
	preimage.readAsDataURL(input.files[0]);
	}
	
	function showimage1(input){
	var preimage = new FileReader();
	preimage.onload = function(e) {
	$('#previewing1').attr('src', e.target.result);
	$('#previewing1').attr('src', e.target.result);
	}
	preimage.readAsDataURL(input.files[0]);
	}
	
	
	
	
	
	
	
	
	  $(function() {
	    // We can attach the `fileselect` event to all file inputs on the page
	    $(document).on('change', ':file', function() {
	          var input = $(this),
		  numFiles = input.get(0).files ? input.get(0).files.length : 1,
		  label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		  input.trigger('fileselect', [numFiles, label]);
	    });

            // We can watch for our custom `fileselect` event like this
	    $(document).ready( function() {
	     $(':file').on('fileselect', function(event, numFiles, label) {

	    var input = $(this).parents('.input-group').find(':text'),
		log = numFiles > 1 ? numFiles + ' files selected' : label;

	    if( input.length ) {
		input.val(log);
	    } else {
		if( log ) alert(log);
	    }

	    });
	    });
        });
	  
	  
	  
	  
	  
    </script>
</body>

<!-- Mirrored from seantheme.com/color-admin-v1.6/admin/html/form_elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Mar 2015 08:08:50 GMT -->
</html>

