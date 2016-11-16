<title>Employee Report</title>
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
<h4 class="panel-title">Report</h4>
</div>
<div class="panel-body">

<div class="row" id="employeeTable">
<h3 style="text-align:center;">Employee List</h3>
<div class="table-responsive">
<table id="eTable" class="table table-striped table-bordered table-hover" cellspacing="0" width=100%>
<thead>


<th>ID</th>
<th>Title</th>
<th>First name</th>
<th>Last name</th>
<th>DOB</th>
<th>Gender</th>
<th>Designation</th>
<th>Department</th>
<th>joining date</th>
<th>account number</th>
<th>bank name</th>
<th>branch name</th>
<th>IFSC code</th>
<th>Address</th>
<th>Town/City</th>
<th>State</th>
<th>Country</th>
<th>Zipcode</th>
<th>Landline No.</th>
<th>Mobile No.</th>
<th>Email</th>
<th>Profile</th>
<th>Proof</th>
<th>Insert Timestamp</th>
<th>Update Timestamp</th>
</thead>
<tbody>

<?php foreach($this->ps_model->view_employee_list() as $row) { ?>
<!--<tr data-toggle="modal" data-target="#modal1">-->
<tr>

<input type="hidden" name="getid" value="<?php echo $row['ID'];?>">
<td><?php echo $row['EMP_ID'];?></td>
<td><?php echo $row['EMP_TITLE'];?></td>
<td><?php echo $row['EMP_FIRST_NAME'];?></td>
<td><?php echo $row['EMP_LAST_NAME'];?></td>
<td><?php echo $row['EMP_DOB'];?></td>
<td><?php echo $row['EMP_GENDER'];?></td>
<td><?php echo $row['EMP_DESIGNATION'];?></td>
<td><?php echo $row['EMP_DEPARTMENT'];?></td>
<td><?php echo $row['EMP_JOINING_DATE'];?></td>
<td><?php echo $row['EMP_ACCOUNT_NUM'];?></td>
<td><?php echo $row['EMP_BANK_NAME'];?></td>
<td><?php echo $row['EMP_BRANCH_NAME'];?></td>
<td><?php echo $row['EMP_IFSC_CODE'];?></td>
<td><?php echo $row['EMP_ADDRESS'];?></td>
<td><?php echo $row['EMP_TOWN_CITY'];?></td>
<td><?php echo $row['EMP_STATE'];?></td>
<td><?php echo $row['EMP_COUNTRY'];?></td>
<td><?php echo $row['EMP_ZIPCODE'];?></td>
<td><?php echo $row['EMP_LANDLINE_NUM'];?></td>
<td><?php echo $row['EMP_MOBILE_NUM'];?></td>
<td><?php echo $row['EMP_EMAIL'];?></td>
<td><img class="" id="_image" name="_image" src="<?php echo base_url('application/uploads/'.$row['EMP_PROFILE']) ; ?>"  width="110px" height="90px"   > </td>
<td><img class="" id="_image" name="_image" src="<?php echo base_url('application/uploads/'.$row['EMP_ID_PROOF']); ?>"   width="110px" height="90px"   ></td>
<td><?php echo $row['EMP_CR_DATE'];?></td>
<td><?php echo $row['EMP_UPDATED_DATE'];?></td>
</tr>
<?php }?>
</tbody>
</table>
</div>
</div>
</div>
</div>
<script>
    
    $('#eTable').DataTable({

     

        "scrollX":true,
        "scrollY":400,
        "order": [[ 0, 'desc' ]],
        });
</script>