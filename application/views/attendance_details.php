<title>Attendance Details</title>
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
<h4 class="panel-title">Attendance</h4>
</div>
<div class="panel-body">


<div class="row" id="attendanceTable">
<h3>Attendance List</h3>
<div class="row">

<div class="col-md-3">
<label class="col-md-3 control-label">Name:</label>
<div class="col-md-9">
<select id="attendancename" name="month"  class="form-control selectpicker">
	    <option value="" selected disabled hidden>Select Employee</option>
	   
		<?php foreach($this->ps_model->empdetails() as $row){ ?>
	      
		<option  value="<?php echo ucwords($row['EMP_FIRST_NAME']) ?>" ><?php echo ucwords($row['EMP_FIRST_NAME']) ?></option>
	       <?php } ?>
	    </select>
</div>

</div>
<div class="col-md-3">
<label class="col-md-3 control-label">year:</label>
<div class="col-md-9">
<select class="form-control selectpicker" name="month" id="attendanceyear">
<option value="">select</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
</select>
</div>
</div>
<div class="col-md-3">
<label class="col-md-3 control-label">Month:</label>
<div class="col-md-9">
<select class="form-control selectpicker" name="month" id="attendancemonth">
<option value="">select</option>
<option value="01">january</option>
<option value="02">febraury</option>
<option value="03">march</option>
<option value="04">april</option>
<option value="05">may</option>
<option value="06">june</option>
<option value="07">july</option>
<option value="08">august</option>
<option value="09">september</option>
<option value="10">october</option>
<option value="11">november</option>
<option value="12">december</option>
</select>
</div>
</div>
<div class="col-md-3">
<input type="button" class="btn btn-primary btn-info" value="Find" id="search_attendance">
</div>
</div>
<br>
<div class="table-responsive">
<table id="aTable" class="table table-striped table-bordered table-hover" cellspacing="0"  >
<thead >
<tr>
<th>Name</th>
<th>Date</th>
<th>Status</th>
</tr>
</thead>
<tbody id="abody">

<?php foreach($this->ps_model->view_attendance_list() as $row) { ?>
<!--<tr data-toggle="modal" data-target="#modal1">-->
<tr>
<td><?php echo $row['SFT_EMP_NAME'];?></td>
<td><?php echo $row['SFT_DATE'];?></td>
<td><?php echo $row['SFT_STATUS'];?></td>
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
</div>
<script>
   $('#aTable').DataTable();
</script>
<script>
    //$('.selectpicker').selectpicker();
$(document).ready(function(){
$("#search_attendance").click(function(){
var month=$("#attendancemonth").val();
var year=$("#attendanceyear").val();
var name=$("#attendancename").val();

$.ajax({
type:"post",
url:"<?php echo site_url() ?>" + "PayslipCtr/attendance_monthwise",
data:{month:month,year:year,name:name},
success :function(data) {

$("#attendancename").val('');
$("#attendanceyear").val('');
$("#attendancemonth").val('');
$('#abody').html(data);
}
});
});
});
</script>