		
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
                            <h4 class="panel-title">Company Form</h4>
                        </div>
                        <div class="panel-body">
				<div class="col-md-12">
                            <form class="form-horizontal" id="empForm" action="<?php echo base_url('PayslipCtr/companyNext');?>" method="POST" enctype="multipart/form-data">
                                <fieldset>
                                    <legend>Company Creation</legend>
                                    <div class="col-md-6">
                                      <div class="row">
                                        <div class="container">
                                        
                                    <div class="form-group">
                                       <label class="col-md-2 control-label">Company Name</label>
                                        <div class="col-md-4">
                                            <input type="text" name="name" class="form-control" placeholder="Company Name" />
                                        </div>
                                    </div>
				     <div class="form-group">
                                       <label class="col-md-2 control-label">Legal Name</label>
                                        <div class="col-md-4">
                                            <input type="text" name="lname" class="form-control" placeholder="Legal Name" />
                                        </div>
                                    </div>
				        <div class="form-group">
                                       <label class="col-md-2 control-label">Address</label>
                                        <div class="col-md-4">
					    <textarea name="address" class="form-control" placeholder="Address"></textarea>
					   
                                        </div>
                                    </div>
				    <div class="form-group">
                                       <label class="col-md-2 control-label">City</label>
                                        <div class="col-md-4">
					    <input type="text" class="form-control" name="city" placeholder="City">
                                        </div>
                                    </div>
				    <div class="form-group">
                                       <label class="col-md-2 control-label">State</label>
                                        <div class="col-md-4">
					    <input type="text" class="form-control" name="state"  placeholder="State">
                                            
                                        </div>
                                    </div>
				    <div class="form-group">
                                       <label class="col-md-2 control-label">Country</label>
                                        <div class="col-md-4">
					    <input type="text" class="form-control" name="country" placeholder="Country">
                                        </div>
                                    </div>
				    <div class="form-group">
                                       <label class="col-md-2 control-label">Zip Code</label>
                                        <div class="col-md-4">
					    <input type="text" class="form-control" name="zipcode" placeholder="Zip Code">
                                        </div>
                                    </div>
				  
				    <div class="form-group">
                                       <label class="col-md-2 control-label">Phone No</label>
                                        <div class="col-md-4">
					    <input type="text" class="form-control" name="phone" placeholder="Phone No">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">E-Mail</label>
                                        <div class="col-md-4">
                                            <input type="email" name="email" class="form-control" placeholder="Email" />
                                        </div>
                                    </div>
				    <div class="form-group">
                                        <label class="col-md-2 control-label">Website</label>
                                        <div class="col-md-4">
					    <input type="text" class="form-control" name="website" placeholder="Website">
                                        </div>
                                    </div>
                                </div>
                                        </div>
                                    </div>
				    


<div class="col-md-4">
                                    <label class="" style="margin-left: 18%">Company Logo</label>
				    <div class="form-group">
					<div class="col-md-2"></div>
					<div class="col-md-4">
                                        <div class="well" style="width:123px;">
                                          
					    <img src="<?php echo base_url('application/assets/img/bg-repeat.jpg');?>" class="superbox-img" id="showImage" style="width:100px;height:100px;"></div>
					 
					<input type="file" id="preview" name="logo" accept="image/*" onchange="attachment();">
					</div>
    				    </div>
                                    </div>
                                      <div class="form-group">
                                        <div class="col-md-8 col-md-offset-4">
                                            <button type="submit" class="btn btn-sm btn-primary">Next</button>
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
	</div>
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
                name: {
                    validators: {
                        notEmpty: {
                            message: 'Your Company name is required and cannot be empty'
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
                lname: {
                    validators: {
                        notEmpty: {
                            message: 'Please fill out your father name'
                        },
                        regexp: {
                            regexp: /^[a-z.\s]+$/i,
                            message: 'This field should consist of alphabets only'
                        }
                    }
                },
                city: {
                    validators: {
                        notEmpty: {
                            message: 'Please fill out your city'
                        },
                        regexp: {
                            regexp: /^[a-z.\s]+$/i,
                            message: 'This field should consist of alphabets only'
                        }
                    }
                },
                
                
                state: {
                    validators: {
                        notEmpty: {
                            message: 'State is required and cannot be empty'
                        },
                        regexp: {
                            regexp: /^[a-z.\s]+$/i,
                            message: 'This field should consist of alphabets only'
                        }
                    }
                },
                email: {
                    validators: {
                        notEmpty: {
                            message: 'The email address is required and cannot be empty'
                        },
                        regexp: {
                            regexp: /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/,
                            message: 'The email address in not in the valid format'
                        }
                    }
                },
                phone: {
                    validators: {
                        notEmpty: {
                            message: 'Contact number is mandatory and cannot be empty'
                        },
                        regexp: {
                            regexp: /^(\+\d{1,3}[- ]?)?\d{10}$/,
                            message: 'The Contact number you have entered is not a valid one'
                        }
                    }
                },
		
                address: {
                    validators: {
                        notEmpty: {
                            message: 'This field is mandatory and cannot be empty'
                        },
                        stringLength: {
                            min: 10,
                            max: 50,
                            message: 'address field must be more than 10 and less than 20 characters long'
                        },
                       
                    }
                },
                website: {
                    validators: {
			uri: {
                            message: 'The website address is not valid'
                        },
                        notEmpty: {
                            message: 'Website is required and cannot be empty'
                        },
                       
                    }
                },
                country: {
                    validators: {
			
                        notEmpty: {
                            message: 'Please enter the designation and cannot be empty'
                        },
                        regexp: {
                            regexp: /^[a-z.\s]+$/i,
                            message: 'This field should consist of alphabets only'
                        }
                    }
                },
		logo:{
		    validators: {
			
                        notEmpty: {
                            message: 'Please browse the Logo and cannot be empty'
                        },
			file: {
			    extension: 'jpeg,png,jpg',
			    type: 'image/jpeg,image/png,image/jpg',
			    //maxSize: 2048 * 1024,   // 2 MB
			    message: 'The selected file is not valid'
                        }
		   }
		},
		zipcode: {
		      
                    validators: {
                        notEmpty: {
                            message: 'Zip code is mandatory and cannot be empty'
                        },
			
                        regexp: {
                            regexp: /^(\+\d{1,3}[- ]?)?\d{6}$/,
                            message: 'zipcode you have entered is not a valid one'
                        }
                    }
                },
            }
        });
    });
</script>

	<script>
           
            $('#clear_data').click(function()
            {
                $(':input').val('');
            $('#empForm').bootstrapValidator('resetForm');
            });
	    function attachment()
	    {
		var oFReader = new FileReader();
		oFReader.readAsDataURL(document.getElementById("preview").files[0]);
		oFReader.onload = function (oFREvent)
		{
		    var data=document.getElementById("showImage").src = oFREvent.target.result;
		};
	    };

        </script>
	
	
	
</body>

</html>

