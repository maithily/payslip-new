
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
<h4 class="panel-title">Shift Settings Report</h4>
</div>

<div class="panel-body">
<div class="row" id="shiftTable">
<h3>Shift Setting details</h3>
<div class="table-responsive">
<table id="shTable" class="table table-striped table-bordered table-hover table-condensed" cellspacing="0" width=100%>
<thead>
<th>Employee Name</th>
<th>Employee Id</th>
<th>Date</th>
<th>Morning Start Time</th>
<th>Morning End Time</th>
<th>Evening Start Time</th>
<th>Evening End Time</th>
<th>Break Hour</th>
<th>Working Hour</th>
<th>Shift-Day</th>
<th>Shift-Month</th>
<th>Shift-Year</th>
<th>CL-leave</th>
<th>Lop-leave</th>
</thead>
<tbody>
<?php foreach($this->ps_model->view_shiftsettings_list() as $row) { ?>
<tr>
<td><?php echo $row['SFT_EMP_NAME'];?></td>
<td><?php echo $row['SFT_ID'];?></td>
<td><?php echo $row['SFT_DATE'];?></td>
<td><?php echo $row['SFT_MRNG_STRATTIME'];?></td>
<td><?php echo $row['SFT_MRNG_ENDTIME'];?></td>
<td><?php echo $row['SFT_EVE_STARTTIME'];?></td>
<td><?php echo $row['SFT_EVE_ENDTIME'];?></td>
<td><?php echo $row['SFT_BREAK_HOUR'];?></td>
<td><?php echo $row['SFT_WORKING_HOUR'];?></td>
<td><?php echo $row['SFT_DAY'];?></td>
<td><?php echo $row['SFT_MONTH'];?></td>
<td><?php echo $row['SFT_YEAR'];?></td>
<td><?php echo $row['SFT_CL_LEAVE'];?></td>
<td><?php echo $row['SFT_LOP_LEAVE'];?></td>
</tr>
<?php }?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<script>
    $('#shTable').DataTable();
</script>
