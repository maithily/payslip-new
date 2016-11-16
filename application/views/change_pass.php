	<title>Change Password</title>	
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Home</a></li>
				<li><a href="javascript:;">Form Stuff</a></li>
				<li class="active">Change Password</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Change Password</h1>
			<!-- end page-header -->
	
            <!-- begin row -->
            <div class="row">
                <!-- begin col-12 -->
                <div class="col-12">
                    <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-stuff-5">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Change Password</h4>
                        </div>
                        <div class="panel-body">
				<div class="col-md-12">
                            <form class="form-horizontal" id="empForm"  method="POST" action="<?php echo base_url('payslipCtr/cpassword'); ?>" enctype="multipart/form-data">
                            <div class="well">
                                <legend>Reset Password</legend>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Old Password</label>
                                        <div class="col-md-4">
                                            <input type="password" name="old_pwd" id="old_pwd" class="form-control" placeholder="Old Password" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">New Password</label>
                                        <div class="col-md-4">
                                            <input type="password" name="new_pwd" id="new_pwd" class="form-control" placeholder="New Password" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Confirm Password</label>
                                        <div class="col-md-4">
                                            <input type="password" name="cnew_pwd" id="cnew_pwd" class="form-control" placeholder="Confirm Password" />
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <div class="col-md-offset-4" style="margin-left:374px;">
                                            <input type="submit" name="change_pwd" id="change_pwd" class="btn btn-info" value="ChangePassword" />
                                            <input type="button" name="reset" id="reset" class="btn btn-success" value="Reset"/>
                                            <a href="<?php echo base_url('payslipCtr/user'); ?>"><input type="button" name="close" id="close" class="btn btn-danger" value="Close"  /></a>
                                        </div>
                                    </div>
                            </div>
                            </form>
				</div>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-6 -->
            </div>
            <!-- end row -->
		</div>
		<!-- end #content -->
	</div>
	<script>
		 $('#reset').click(function()
		{
			$('#old_pwd').val('');
			$('#new_pwd').val('');
			$('#cnew_pwd').val('');
		});
	</script>
	<!-- end page container -->
<script>
    $(document).ready(function() {
	
        $('#empForm').bootstrapValidator({
		
            //container: '#messages',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                old_pwd: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'The Old Password is required and cannot be empty'
                    },
                    
                }
            },
	new_pwd: {
            validators: {
		 notEmpty: {
                        message: 'The password is required and cannot be empty'
                    },
                identical: {
			fields: 'cnew_pwd',
			field: 'old_pwd',
                    message: 'The password and its confirm are not the same'
		    }
		   
            }
        },
        cnew_pwd: {
            validators: {
		 notEmpty: {
                        message: 'The Confirm password is required and cannot be empty'
                    },
		identical: {
			field: 'new_pwd',
                    message: 'The password and its confirm are not the same'
                }
            }
        }
               
                
               
            }
        });
    });
</script>

	
	
</body>

</html>

