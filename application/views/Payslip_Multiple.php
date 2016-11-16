
    <style>
	.col-md-6.border {
	    border: 1px solid;
	}
	tr{
	    font-size: 12px;
	}
	    .modal.modal-loading .modal-body{
		position:relative;
		z-index:0
	    }
	    .modal.modal-loading.modal-expand .modal-body{
		position:absolute
	    }
	    .modal.modal-loading .modal-body .modal-loader{
		position:absolute;
		left:0;
		right:0;
		top:0;
		bottom:0;
		background:#fff;
		opacity:.9;
		filter:alpha(opacity=90);
		animation:fadeIn .2s;
		-webkit-animation:fadeIn .2s;
		z-index:1020;
		-webkit-border-radius:0 0 4px 4px;
		-moz-border-radius:0 0 4px 4px;
		border-radius:0 0 4px 4px
	    }
	    @keyframes fadeIn{
		from{
		    opacity:0
		}
		to{
		    opacity:1
		}
	    }
	    @-webkit-keyframes fadeIn{
		from{
		    opacity:0
		}
		to{
		    opacity:1
		}
	    }
	    .color-icon{
		 color:#005452;
	    }
	</style>
   	<link href="<?php echo base_url();?>application/assets/css/theme/dataTables.checkboxes.css" rel="stylesheet" id="theme" />
   	<link href="<?php echo base_url();?>application/assets/css/theme/jquery.dataTables.min.css" rel="stylesheet" id="theme" />

	<script src="<?php echo base_url(); ?>application/assets/datatable/dataTables.checkboxes.min.js"></script>

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
			<h4 class="panel-title">Payslip / Multiple view</h4>
		</div>
		<div class="panel-body">			
		    <form id="frm-example" method="POST">
		   
			<table id="example" class="display" cellspacing="0" width="100%">
			   <thead>
			      <tr>
				
				    <th>ID</th>
				    <th>Employee Name</th>
				    <th>Month/Year</th>
				    <th>Department</th>
				    <th>Payslip No</th>
				    <th>Email</th>

			
			      </tr>
			   </thead>
					</table>
		    <div class="col-md-offset-5">
			<br>
		    <div class="col-md-3">
		    <input type="button" class="form-control btn btn-success" name="send" onclick="multiple_mail_send()"  value="Send Email"> 		
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
    var table = $('#example').DataTable({
     
	    "bServerSide": true,
	    "bProcessing": true,
	    "sAjaxSource": '<?php echo site_url('payslipCtr/payslip_Multiple_Data');?>',
	    'responsive': true,
	    'scrollX':true,
	    "lengthMenu": [
			  [5,10, 20, 50, -1],
			  [5,10, 20, 50, "All"] // change per page values here
		      ],

		columns: [
		{ data: 'EMP_ID'},
		{ data: 'EMP_NAME'},
		{ data: 'BASIC_SALARY'},
		{ data: 'INCENTIVE'},
		{ data: 'TRAVELLING_ALLOWANCE'},
		{ data: 'EMP_EMAIL'},

		],
		'columnDefs': [
		   {
		      'targets': 0,
		      'checkboxes': {
		    'selectRow': true
		      }
		   }
		],
		'select': {
		   'style': 'multi'
		},
		'order': [[1, 'asc']],
	    
	    'fnServerData': function(sSource, aoData, fnCallback){
		$.ajax({
		    'dataType': 'json',
		    'type'    : 'POST',
		    'url'     : sSource,
		    'data'    : aoData,
		    'success' : fnCallback
		});
	    },
   });
   
});
function multiple_mail_send() {
    var names=[];
    var email=[];
    $('tr.selected').each(function(){
    var datas=$(this).find('td:eq(1)').text();
    var data1=$(this).find('td:eq(5)').text();
    names.push(datas);
    email.push(data1);
    }); 
    console.log(names);
    console.log(email); 
	
     $.ajax({
	type:"post",
	url:"<?php echo base_url('payslipCtr/Multiple_send_email');?>",
	data:{names:names,email:email},
	
	success:function(){
	
	},
    });
}

</script>
