
<title>Calendar</title><div id="content" class="content">
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
			<h4 class="panel-title">Calendar Settings</h4>
		</div>
		<div class="panel-body">
		 <table id="data-table" class="table table-striped table-bordered nowrap">
		     <input type="hidden" name="count" value="">
		    <thead>
			<tr>
			    <th>S.No</th>
			    <th>Months</th>
			    <th>Total Days</th>
			    <th>Leave Days</th>
			    <th>Total Working Days</th>
                            <th>Insert Timestamp</th>
			    <th>Update Timestamp</th>
			</tr>
		    </thead>
		    <tbody>
			<?php foreach($this->ps_model->monthDetails() as $row){
			    foreach($this->ps_model->calculate($row['month']) as $month){
				$sum=0;
				$sum1=0;
			    ?>
			<tr>
			   <?php $sum =$row['wkdays']+$month['smonth'];
			        $sum1=$row['day']-$sum;
			   ?>
			    <td><?php echo $row['id'];?></td>
			    <td><?php echo $row['month']; ?></td>
			    <td><?php echo $row['day']; ?></td>
			    <td><?php echo $sum;?></td>
			    <td><?php echo $sum1;?></td>
                            <td><?php echo $row['CR_DATE']; ?></td>
			    <td><?php echo $row['UPDATED_DATE']; ?></td>
			</tr>
			<?php } }?>
		    </tbody>
		 </table>
		</div>
	    </div>
	</div>
    </div>
</div>
    <?php
	//$sql="SELECT count(*) FROM holidays where month='january'";
	//$af= $this->db->query($sql)->result_array();	
        //print_r($af);exit;
    ?>
<script>
    $(document).ready(function(){
	$("#data-table").DataTable({
	"ordering": false,
        select:true,
       "aLengthMenu": [[12, 50, 75, -1], [12, 50, 75, "All"]],
	"iDisplayLength": 12});
    });
</script>