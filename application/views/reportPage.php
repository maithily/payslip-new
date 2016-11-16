  
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
                     <form action="<?php echo base_url('PayslipCtr/reportView'); ?>" method="post">
                
			<table class="table datatable table-bordered" id="myTable">
			    <thead>
				<tr>
				<th>S.No</th>
				<th>Employee Name</th>
				<th>Month/Year</th>
				<th>Department</th>
				<th>Payslip No</th>
				<th>Working Days</th>
				<th>Worked Days</th>
				<th>Basic Salary</th>
				<th>Increment</th>
				<th>Incentive</th>
				<th>TA</th>
				<th>HRA</th>
				<th>DA</th>
				<th>Gross Earning</th>
				<th>LOP</th>
				<th>Advance Salary</th>
				<th>Other_dedection</th>
				<th>Gross_dedcution</th>
				<th>Remarks</th>
				<th>Net Amount</th>
				</tr>
			    </thead>
<tbody id="ebody">
<?php foreach($payroll as $row){ ?>
			    <tr>
				
					<td><center><?php echo $row['ID'] ?></center></td>
					<input type="hidden" name="tabledata" value="<?php echo $row['ID'] ?>">
					<td><center><?php echo $row['EMP_NAME']?></center></td>
					<td><center><?php echo $row['MONTH_YEAR']?></center></td>
					<td><center><?php echo $row['EMP_DEPARTMENT']?></center></td>
					<td><center><?php echo $row['PAYSLIP_NO']?></center></td>
					<td><center><?php echo $row['TOTAL_WORKING_DAYS']?></center></td>
					<td><center><?php echo $row['WORKED_DAYS']?></center></td>
					<td><center><?php echo $row['BASIC_SALARY']?></center></td>
					<td><center><?php echo $row['INCREMENT']?></center></td>
					<td><center><?php echo $row['INCENTIVE']?></center></td>
					<td><center><?php echo $row['TRAVELLING_ALLOWANCE']?></center></td>
					<td><center><?php echo $row['HRA']?></center></td>
					<td><center><?php echo $row['DA']?></center></td>
					<td><center><?php echo $row['GROSS_EARNINGS']?></center></td>
				        <td><center><?php echo $row['LOP']?></center></td>
					<td><center><?php echo $row['ADVANCE_SALARY']?></center></td>
					<td><center><?php echo $row['OTHER_DEDUCTIONS']?></center></td>
					<td><center><?php echo $row['GROSS_DEDUCTIONS']?></center></td>
					<td><center><?php echo $row['REMARKS']?></center></td>
					<td><center><?php echo $row['NET_AMOUNT']?></center></td>

			    </tr>
<?php } ?>
</tbody>
			
			</table>
                        
                        
                        			<div class="modal-footer">
			   <button type="button" onclick="edit()" class="btn btn-primary" disabled> <span class="glyphicon glyphicon-edit"></span> Edit </button>
			      <button type="button" onclick="deleterow()" class="btn btn-danger" disabled>
			   <span class="glyphicon glyphicon-trash"></span>
				 Delete
			    </button>
			    <a href="<?php echo base_url('PayslipCtr/payroll'); ?>"><button type="button" class="btn btn-info btn-sm" data-dismiss="modal"><span class="glyphicon glyphicon-log-out"></span> Close</button></a>
			</div>

                </form>
		</div>
	    </div>
	</div>
    </div>
</div>

	<script>

       $("#ebody tr").click(function(){
$('button').prop('disabled', false);
});
            $(document).ready(function(){
             var t = $('#myTable').DataTable( {

"columnDefs": [ {

"searchable": false,
"orderable": false,
//"class": "index",

"targets": 0
} ],

"scrollX": true,
"scrollY": 400,
"order": [[ 4, 'desc' ]],
select: true,

} );

t.on( 'order.dt search.dt', function () {
t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
cell.innerHTML = i+1;
} );
} ).draw();


            });
        </script>
        <script>
          
    function edit(){
       var user_id=$("#myTable tr.selected").find('[name="tabledata"]').val();
 
       window.location="<?php echo base_url();?>PayslipCtr/payroll_edit/"+user_id;
    }
    function deleterow(){
       var user_id=$("#myTable tr.selected").find('[name="tabledata"]').val();
    window.location="<?php echo base_url();?>PayslipCtr/payroll_delete/"+user_id;
    }
    
    </script>

       