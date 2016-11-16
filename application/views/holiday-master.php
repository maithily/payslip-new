	<title>Holiday Master</title>    <div id="content" class="content">
	
		<!-- begin page-header -->
		<h1 class="page-header">Holiday<small> You may view holiday details here...</small></h1>
		<!-- end page-header -->
		<!-- begin row -->
		<div class="row">
		    <!-- begin col-10 -->
		    <div class="col-md-12">
			<!-- begin panel -->
			<div class="panel panel-inverse">
			    <div class="panel-heading">
				<div class="panel-heading-btn">
				    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
				    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
				    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
				</div>
				<h4 class="panel-title">Holidays List</h4>
			    </div>
			    <div class="panel-body" id="form_validation">
                                <p>
				<a class="btn btn-primary btn-sm" id="addForm" ><i class="fa fa-plus fa-1x"></i> <span class="f-s-14 f-w-500">Add </span></a>
				</p>
                                <form id="open" class="form-horizontal" method="post" action="<?php echo site_url('PayslipCtr/saveHoilday');?>">
                                    <div class="form group">
                                        <div class="row">
					    <div class="col-md-3" style="width:20%">
						<div class="input-group input-append date" id="datePicker">
						    <input type="text" id="month" class="form-control" name="month" placeholder="Select Date" />
						    <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
						</div>
						 <input type="hidden" id="date" class="form-control" name="oldmonth" placeholder="Month" />
					    </div>
                                        <div class="col-md-2">
                                        <select id="day" name="day" class="form-control selectpicker" >
                                            <option selected disabled hidden>Select Day</option>
                                            <option value="Sunday">Sunday</option>
                                            <option value="Monday">Monday</option>
                                            <option value="Tuesday">Tuesday</option>
                                            <option value="Wednesday">Wednesday</option>
                                            <option value="Thursday">Thursday</option>
                                            <option value="Friday">Friday</option>
                                            <option value="Saturday">Saturday</option>
                                        </select>
                                        </div>
                                        <div class="col-md-2">
                                            <input type="text" name="detail" id="detail" style="text-transform: capitalize;" class="form-control" placeholder="Holiday Detail">
					    <input type="hidden" id="id" name="id" value="">
                                        </div>
                                        <input type="submit" class="btn btn-success hidde" name="add" id="add" value="Add" >
                                        
                                        <input type="button" id="update" class="btn btn-success hidden" name="update" value="Update" >
                                        </div>
                                    </div>
                                </form>
				
                                <br>
				    
				<div class="table-responsive" style="border: none">
				    <table id="myTable" class="table table-bordered nowrap" width="100%">
					<thead>
					    <tr>
                                                <th>S.No</th>
						<th>Month/Date</th>
                                                <th>Day</th>
                                                <th>Holiday Name</th>
                                                <th>Insert Timestamp</th>
			                         <th>Update Timestamp</th>
                                                <th>Action</th>
					    </tr>
					</thead>
					<tbody>
                                            <?php  foreach($this->ps_model->holiday() as $row){ ?>
						<tr class="even gradeC">
						    <td>
							
						    </td>					    
						    <td>
							<?php echo $row['MONTH'];echo'&nbsp';echo $row['DATE'];?>
						    </td>
						    <td>
							<?php echo $row['DAY'];?>
						    </td>
                                                    <td>
							<?php echo ucwords($row['LEAVE_DETAIL']);?>
						    </td>
                                                     <td><?php echo $row['CR_DATE'];?></td>
	                                             <td><?php echo $row['UPDATED_DATE'];?></td>	
                                                    <td>
                                                    <?php $id= $row['ID']; ?>
                                                    <a onclick="openToggle('<?php echo $row['ID'];?>')" name="edit" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i> </a>
				                    <button type="button" id="deletebutton" onclick="delet1()" name="" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></button>
                                                    </td>
						</tr>
					    <?php } ?>
					</tbody>
				    </table>
				</div>
			    </div>
			</div>
			<!-- end panel -->
		    </div>
		    <!-- end col-10 -->
		</div>
		<!-- end row -->
	    </div>

             	    <script>
		
function delet1(){

if(confirm("Are you sure want to delete!"))
{

$.ajax({

url:'<?php echo site_url('PayslipCtr/leave_Delete/'.$row['ID']);?>',
type:"post",

success:function(){


window.location.reload();

},
});
}
}

 </script>



	    <script>
    
    $(document).ready(function() {
  
    $('#datePicker').datepicker({
        format: 'dd/MM/yyyy',
       
    });
    });

</script>
    <script>
		
	    function getTable(id){
	    
		var URL ="<?php echo site_url('PayslipCtr/get');?>";
		$.ajax({
		    type: "POST",
		    url: URL,
		    data:{id:id},
		     // dataType:'json',
		    success: function(response)
		    {
                       location.reload();
		       $('#open').hide();
		       $('#month').val('');
		       $('#date').val('');
			$('.selectpicker').val('').selectpicker('refresh');
			
			$('#detail').val('');
			$('#add').show();
			$('#update').addClass('hidden');
		        $("#data-table").html(response);

		       
		    }
		})
	    }
		    
   	    $(document).ready(function() {
			   var t =$('#myTable').DataTable({
			    //select: true,
			    "order": [[ 0, 'asc' ]],
			    });
			   t.on( 'order.dt search.dt', function () {
t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
cell.innerHTML = i+1;
} );
} ).draw();
		    } );
            
            $('.selectpicker').selectpicker();
            
            $(function(){
                $('#open').hide();
		$('#addForm').click(function() {
		    $('#open').slideToggle(1000);
		    return false;
		});
            });
            
            function openToggle($id){
                
		$('#id').val($id);
                $('#open').slideToggle()
                    $('.hidde').hide()
                    $('#update').removeClass('hidden');
                var id = $id;  
                var URL ="<?php echo site_url('PayslipCtr/leave_Edit');?>";
		$.ajax({
		    type: "POST",
		    url: URL,
		    data: {id:id},
		    dataType:'json',
		    success: function(json)
		    {
                        $('#month').val(json[0].DATE+'/'+json[0].MONTH+'/2016');
			$('#day').val(json[0].DAY).selectpicker('refresh');
			$('#detail').val(json[0].LEAVE_DETAIL);
		    }
		})
            }
//		$("#add").click(function(){
//                   var month=$("#month").val();
//		   var date=$("#date").val();
//                   var day=$("#day").val();
//                   var detail=$("#detail").val();
//		   var URL ="<?php echo site_url('PayslipCtr/saveHoilday');?>";
//                   $.ajax({
//                    type:"post",
//                    url:URL,
//                    data:{month:month,date:date,day:day,detail:detail},
//		    
//                    success :function(html) {
//			//$('#open')[0].reset();
//                        //$("#form_validation").html(html);
//			location.reload();
//                    }
//                   });
//		});
	   
	   $("#update").click(function(){
	     //alert();
	        var id=$('#id').val();
		
		//var ff=$(this).val();
		var month=$('#month').val();
		console.log(month);
		//var date=$('#date').val();
		var day=$('#day').val();
		var detail=$('#detail').val();
		var URL="<?php echo base_url('PayslipCtr/update_leave');?>";
		$.ajax({
		    type:'post',
		    url:URL,
		    data:{id:id,month:month,day:day,detail:detail},
		    dataType:'json',
		    success:function(html){
			//location.reload();
			getTable(id); 
		    }
		    
		});
		
	    });
            </script>
           
