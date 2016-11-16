		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Home</a></li>
				<li><a href="javascript:;">Form Stuff</a></li>
				<li class="active">Form Elements</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Form Elements <small>header small text goes here...</small></h1>
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
                    <div class="panel panel-inverse" data-sortable-id="form-stuff-5">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Employee Form</h4>
                        </div>
                        <div class="panel-body">
				<div class="col-md-12">
                            <form class="form-horizontal" id="empForm" action="<?php echo base_url('PayslipCtr/saveCompany');?>" method="POST" enctype="multipart/form-data">
                                <fieldset>
                                    <legend>Company Creation</legend>
                                <div class="container">
                                    <div class="form-group">
                                       <label class="col-md-2 control-label">Administrator Name</label>
                                        <div class="col-md-4">
					    <input type="hidden" name="lineid" value="<?php echo $lineid;?>">
                                            <input type="text" name="adminname" class="form-control" placeholder="Administrator Name" />
                                        </div>
                                    </div>
				    <div class="form-group">
                                       <label class="col-md-2 control-label">Administrator Password</label>
                                        <div class="col-md-4">
                                            <input type="password" name="pwd" class="form-control" placeholder="Password" />
                                        </div>
                                    </div>
				    <div class="form-group">
                                       <label class="col-md-2 control-label">Verify Password</label>
                                        <div class="col-md-4">
					    <input type="password" class="form-control" name="vpwd" placeholder="Verify Password">
                                        </div>
                                    </div>
                                </div>
				    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-4">
					    <a href="javascript:window.history.go(-1);"><button type="button" class="btn btn-sm btn-default">Back</button></a>
                                            <button type="submit" class="btn btn-sm btn-primary">Save</button>
                                            <button class="btn btn-sm btn-info" id="clear_data"  type="button">Reset</button>
                                        </div>
                                    </div>
                                </fieldset>
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
                name: {
                    validators: {
                        notEmpty: {
                            message: 'Your Name is required and cannot be empty'
                        },
                        stringLength: {
                            min: 3,
                            max: 20,
                            message: 'Name must be more than 3 and less than 30 characters long'
                        },
                        regexp: {
                            regexp: /^[a-z.\s]+$/i,
                            message: 'Name can only consist of alphabetical'
                        }
                    }
                },
                pwd: {
                    validators: {
                        notEmpty: {
                            message: 'Please fill out your password name'
                        },
                        
                    }
                },
                vpwd: {
                    validators: {
			identical: {
				field: 'pwd',
				message: 'The password and its confirm are not the same'
                        },
                        notEmpty: {
                            message: 'Please fill out your Verify Password'
                        },
                       
                    }
                },
		
            }
        });
    });
    $('#clear_data').click(function()
            {
                $(':input').val('');
            });
</script>
	
</body>

</html>

