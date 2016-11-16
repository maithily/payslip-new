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
<h4 class="panel-title">Change Company Details</h4>
</div>
<div class="panel-body">
	
        
<div class="row">
	<form action="" method="post">
		<div class="conatnier">
			<div class="col-md-12">
			<div class="well">
				 <legend>Company Details</legend> 
				<div class="row">
				 <div class="col-md-2"></div>
				 <div class="col-md-6">
					   <div class="form-group">
						   <label class="col-md-3 control-label">Cmpny Name :</label>
						   <div class="col-md-9">
							    <select class="form-control selectpicker" id="company_name" name="company_name" onchange="changecompany();">
                                                            <option selected hidden disabled>Select Company name</option>
                                                            <?php foreach($this->ps_model->companydetail() as $row) {  ?>
                                                            
                                                            <option  value="<?php echo $row['CMP_NAME']; ?>"><?php echo $row['CMP_NAME']; } ?></option>
                                                           </select>
						   </div>
					   </div>
				 </div>
				<!--   <div class="col-md-6">
					   <div class="form-group">
						   <label class="col-md-3 control-label">Type of input field :</label>
						   <div class="col-md-9">
							   <input type="text" class="form-control textfield1" name="input_type" placeholder="type of input field" />
						   </div>
					   </div>
				   </div>-->
			   </div><br>
				 <div class="row">
				     <div class="col-md-2"></div>
				   <div class="col-md-6">
					   <div class="form-group">
						   <label class="col-md-3 control-label">Company Address :</label>
						   <div class="col-md-9">
							<textarea style="width: 350px; height: 76px;" name="cmpny_address" id="cmpny_address"></textarea>
						   </div>
					   </div>
				   </div>
				  
			   </div><br>
                                  <div class="row">
				     <div class="col-md-2"></div>
				   <div class="col-md-6">
					   <div class="form-group">
						  <!-- <label class="col-md-3 control-label">Company Logo:</label>-->
						   <div class="col-md-9">
							<img src="" width="40%"  height="20%" style="margin-left:600px; margin-top:-190px;" name="preview" id="preview"><br><br>
                                                        
						   </div>
					   </div>
				   </div>
				  
			   </div>
				 <br>
				 <div class="row">
					<div class="form-group">
					  <div class="col-md-1 col-md-offset-5">
						  <button type="submit"  id="select_cmpny" name="select_cmpny" value="submit" style="width:100px" class="btn btn-sm btn-success form-control">Submit</button>
					  </div>
					</div>
				</div>
			
			<input type="hidden" id="Preview1" value="<?php echo base_url(); ?>">
			<input type="hidden" id="preview2" value="">
			
				<br>
				<br>
				<br>	
			</div>
		</div>
			</div>	
	</form>
	
</div>

    
</div>



<script>
//$('.selectpicker').selectpicker({
//style: 'btn-white',
//});

   function changecompany(){
		
		var name=$('#company_name').val();
		var imgdata=$("#Preview1").val();
		//console.log(imgdata);
		var URL ="<?php echo base_url('payslipCtr/companygetDetails');?>";
		$.ajax({
		    type: "POST",
		    url: URL,
		    data: {name:name},
		    dataType:'json',
		    success: function(json)
		    {
                       
                        $("#cmpny_address").val(json[0].CMP_ADDRESS);
                        //var image=json[0].CMP_LOGO;
                   
                        //$('#preview').attr('<img src="' + image + '" />');
			$("#preview").attr('src',imgdata+ json[0].CMP_LOGO);
			$("#preview2").attr('src',json[0].CMP_LOGO);
			  
                        
                    }
                    });
    }
    
    $("#select_cmpny").on('click',function(){
        var name=$("#company_name").val();
        var caddress=$("#cmpny_address").val();
        var button=$(this).val();
	var logoimage=$("#preview2").attr('src');
        console.log(logoimage);
        $.ajax({
		type:'POST',
		url: "<?php echo base_url('payslipCtr/companygetDetails'); ?>",
		dataType:"json",
		data:{name:name,caddress:caddress,button:button,logoimage:logoimage},                    
		success: function (json) {
                }
        });
        
    });
    
    
  
</script>


</body>


</html>



	