<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class PayslipModel extends CI_Model {

    function __construct()
    {
	parent::__construct();
    }
   
    function manual_payslip_delete($id)
	{
	$this->db->where('id', $id);	
	$this->db->delete('manual_payslip');
	}

    function master_shift_time()
	{
	$this->db->select('*');
	$this->db->from('master_shift_settings');
	$salarydata=$this->db->get();
	return $salarydata->result_array();	
	}

   
    function getLeaveDetails($id){
	$sql="SELECT * FROM holiday_details where ID='$id'";
	return $this->db->query($sql)->result_array();
    }

    

    function getEmpId($user){
	
	$sql = "SELECT * FROM emp_details WHERE EMP_FIRST_NAME='$user'";
	return $this->db->query($sql)->result_array();
    }

    function get_total_employee(){
  
	$sql="select * from emp_details";
         $query = $this->db->query($sql);
          return $query->num_rows();
    }

     function attendance_del($id)
    {
	$this->db->where('SFT_ID', $id); 
	$this->db->delete('shift_details');
	 
    }

   function payroll_Save_Pdf($pay_no){
	$pay_unique_no=$pay_no;
	$date=$this->input->post('month_year');
	$name=$this->input->post('emp_name');
	$data=explode("-",$date);
	
	$payroll=array(
	    'EMP_NAME'=>$this->input->post('emp_name'),
	    'EMP_ID'=>$this->input->post('emp_id'),
	    'MONTH_YEAR'=>$date,
	    'MONTH'=>$data[0],
	    'YEAR'=>$data[1],
             'EMP_EMAIL'=>$this->input->post('emp_email'),
	    'BASIC_SALARY'=>$this->input->post('basic_salary'),
	    'INCENTIVE'=>$this->input->post('incentive'),
	    'TRAVELLING_ALLOWANCE'=>$this->input->post('ta'),
	    'HRA'=>$this->input->post('hra'),
	    'DA'=>$this->input->post('da'),
	    'GROSS_EARNINGS'=>$this->input->post('gross_earnings'),
	    'LOP'=>$this->input->post('lop'),
	    'ADVANCE_SALARY'=>$this->input->post('advance_salary'),
	    'OTHER_DEDUCTIONS'=>$this->input->post('other_deduction'),
	    'GROSS_DEDUCTIONS'=>$this->input->post('gross_dedcution'),
	    'NET_AMOUNT'=>$this->input->post('net_amount'),
	    'EMP_DEPARTMENT'=>$this->input->post('department'),
	    'PAYSLIP_NO'=>$pay_unique_no,
	    'TOTAL_WORKING_DAYS'=>$this->input->post('working_days'),
	    'WORKED_DAYS'=>$this->input->post('worked_days'),
	    'INCREMENT'=>$this->input->post('increment'),
	    'IN_WORD'=>$this->input->post('in_word'),
	    'REMARKS'=>$this->input->post('remarks')
	    
	);

	$this->db->insert('payroll_details',$payroll);
	    $pay_num=substr($pay_unique_no,7);
		$char="CTS/PS/";
		$pay= $pay_num + 1;
		$new_pay_no=$char.$pay;
		$data=array(
		    'payslip_no'=>$new_pay_no
                );
		//print_r($data);exit;
	return $this->db->update('payslip_no',$data);
	redirect ('payslipCtr/payroll');
    }
    
    
        function getemailid($name){
	//print_r($name);exit;
	$this->db->select('EMP_EMAIL');
	$this->db->from('emp_details');
	$this->db->where('EMP_FIRST_NAME',$name);
	$email=$this->db->get();
	return $email->result_array(); 
    }
    
        function payroll_Save_Pdf_email($pay_no){
	$pay_unique_no=$pay_no;
	$date=$this->input->post('month');
	$name=$this->input->post('emp_name');
	$data=explode("-",$date);
	//print_r($data);exit;

	$payroll=array(
	    'EMP_NAME'=>$this->input->post('emp_name'),
	    'EMP_ID'=>$this->input->post('emp_id'),
	    'MONTH_YEAR'=>$date,
	    'MONTH'=>$data[0],
	    'YEAR'=>$data[1],
           'EMP_EMAIL'=>$this->input->post('emp_email'),
	    'BASIC_SALARY'=>$this->input->post('basic_salary'),
	    'INCENTIVE'=>$this->input->post('incentive'),
	    'TRAVELLING_ALLOWANCE'=>$this->input->post('ta'),
	    'HRA'=>$this->input->post('hra'),
	    'DA'=>$this->input->post('da'),
	    'GROSS_EARNINGS'=>$this->input->post('gross_earnings'),
	    'LOP'=>$this->input->post('lop'),
	    'ADVANCE_SALARY'=>$this->input->post('advance_salary'),
	    'OTHER_DEDUCTIONS'=>$this->input->post('other_deduction'),
	    'GROSS_DEDUCTIONS'=>$this->input->post('gross_dedcution'),
	    'NET_AMOUNT'=>$this->input->post('net_amount'),
	    'EMP_DEPARTMENT'=>$this->input->post('department'),
	    'PAYSLIP_NO'=>$pay_unique_no,
	    'TOTAL_WORKING_DAYS'=>$this->input->post('working_days'),
	    'WORKED_DAYS'=>$this->input->post('worked_days'),
	    'INCREMENT'=>$this->input->post('increment'),
	    'IN_WORD'=>$this->input->post('in_word'),
	    'REMARKS'=>$this->input->post('remarks')
	    
	);
      //echo "<pre>";print_r($payroll);exit;
	$this->db->insert('payroll_details',$payroll);
	    $pay_num=substr($pay_unique_no,7);
		$char="CTS/PS/";
		$pay= $pay_num + 1;
		$new_pay_no=$char.$pay;
		$data=array(
		    'payslip_no'=>$new_pay_no
                );
		//print_r($data);exit;
	return $this->db->update('payslip_no',$data);
	//redirect ('payslipCtr/createslip_pdf');
    }
    

function check_field_availablitly()
 {
  $field = trim($this->input->post('field'));
  //print_r($email);exit;
  $query = $this->db->query('SELECT * FROM master_salary where field_name="'.$field.'"');
    if($query->num_rows() > 0)
    {
       return false;
    }
    else
    {
      return true;
    }
 }

 function getShift_time($where){
 $sql="SELECT EMP_SHIFT FROM emp_details WHERE EMP_FIRST_NAME='$where'";
 //print_r($sql);exit;
 return $this->db->query($sql)->result_array();
    }
    

    function empdetails(){	
	$sql="SELECT EMP_ID,EMP_FIRST_NAME FROM emp_details";
	return $this->db->query($sql)->result_array();	 
    }

    function monthDetails(){	
	$sql="SELECT * FROM month";
	return $this->db->query($sql)->result_array();	 
    }

       function get_employee_id()
	{
	    $sql="SELECT * FROM  employee_id";
	   return $this->db->query($sql)->result_array();
	}


   function master_department_delete()
    {
	$del_id=$this->input->post('id');
	$this->db->where('id', $del_id);	
	$this->db->delete('master_department');
	redirect ('payslipCtr/master_department_view');
	
    }
     function get_payslip_no()
    {
	$sql="SELECT * FROM payslip_no";
	return $this->db->query($sql)->result_array();
    }
     function getPayslipNo($user){
	
	$sql = "SELECT * FROM payroll_details WHERE EMP_NAME='$user'";
	return $this->db->query($sql)->result_array();
    }
    

    function companydetail(){
	$sql="SELECT CMP_NAME FROM company_details";
	return $this->db->query($sql)->result_array();	 
    }
  
    
    function addLeave(){
	
	$from=$this->input->post('month');
	$date_arr = explode('/',$from);
	$chained = $date_arr[2].'/'.$date_arr[1].'/'.$date_arr[0];
	$fyear=$date_arr[2];
	$fmonth=$date_arr[1];
	$fdate=$date_arr[0];
	$data=array(
	    'MONTH'=>$fmonth,
	    'DATE'=>$fdate,
	    'DAY'=> $this->input->post('day'),
	    'LEAVE_DETAIL'=> $this->input->post('detail'),
	);
	$this->db->insert('holiday_details',$data);
	
    }
 function master_get_hra_per()
	{
		$sql="SELECT * FROM  master_salary where directed_type='inclusion' and field_name='HRA' ";
		$result= $this->db->query($sql)->result_array();
		return $result;
	}
	
	function master_get_da_per()
	{
		$sql="SELECT * FROM  master_salary where directed_type='inclusion' and field_name='DA' ";
		$result= $this->db->query($sql)->result_array();
		//print_r($result[0]['column_name']); exit;
	     return $result;
	}

   function master_insert_inclusion()
   {
	
	$data = array(
		'hra_per' => $this->input->post('hra_per'),
		'da_per' => $this->input->post('da_per'),
	         'field_name' => $this->input->post('field_name'),
		 'flag' => 'activate',
		'directed_type' => $this->input->post('add_type')
		);
		$this->db->insert('master_salary', $data);
        redirect('payslipCtr/inc_dec');
    }
 
   
    function master_show_inclusion()
   {
		$sql="SELECT * FROM  master_salary where directed_type='inclusion' and flag='activate' ";
		$result= $this->db->query($sql)->result_array();
		//print_r($result[0]['column_name']); exit;
	     return $result;
    }
   
   
    function master_show_deduction()
   {
		$sql="SELECT * FROM  master_salary where directed_type='deduction' and flag='activate' ";
		return $this->db->query($sql)->result_array();
    }

function master_switchery_update($id,$status)
   {
	
	$data=array(
		'flag'=>$status
	);
	
	//print_r($data); exit;
	$this->db->where('id', $id);
	$this->db->update('master_salary', $data);
 }
   

   

   function get_hra_per()
	  {
                $sql="SELECT * FROM  master_salary where field_name='HRA'";
		$query = $this->db->query($sql);
                $count= $query->num_rows();
		if($count==1)
		{
			$result= $this->db->query($sql)->result_array();
			return $result;
		}
		else{
			return $count;
		}
		
	  }

	  
	   function get_da_per()
	  {
		$sql="SELECT * FROM  master_salary where field_name='DA'";
		$result= $this->db->query($sql);
		$count= $result->num_rows();
		if($count==1)
		{
			$result= $this->db->query($sql)->result_array();
			return $result;
		}
        else{
			return $count;
		}
	  }

    function calculate($count){
	$sql="SELECT count(month) as smonth FROM holiday_details where month='$count'";
	return $this->db->query($sql)->result_array();
	
    }
    
    function update_leave($id){
	$from=$this->input->post('month');
	$date_arr = explode('/',$from);
	$chained = $date_arr[2].'/'.$date_arr[1].'/'.$date_arr[0];
	$fyear=$date_arr[2];
	$fmonth=$date_arr[1];
	$fdate=$date_arr[0];
	$data=array(
	    'MONTH'=>$fmonth,
	    'DATE'=>$fdate,
	    'DAY'=> $this->input->post('day'),
	    'LEAVE_DETAIL'=> $this->input->post('detail')
	);
	$this->db->where('ID',$id);
	$query = $this->db->update('holiday_details',$data);
	return 	$query; 
    }
    
    function holiday(){
	$sql="SELECT * FROM holiday_details";
	return $this->db->query($sql)->result_array();	
    }


     
   
   
   

       function getIncrement($user,$month){
	$sql = "SELECT AMOUNT FROM inc_dec_details where INC_DEC_TYPE ='increment' AND EMP_NAME='$user' AND INC_DEC_EFFECTIVE_MONTH='$month'";
	return $this->db->query($sql,$return_object = TRUE)->result_array();
       
    }
   
   
    
   
    function get_master_setting()
    {
	$sql="SELECT * FROM  master_salary";
	return $this->db->query($sql)->result_array();
    }
  
    function master_delete($id)
    {

	 $del_id=$this->input->post('id');;
	 $this->db->where('id', $del_id);	
	 $this->db->delete('master_salary');
	 redirect ('PayslipCtr/inc_dec');
	
    }
  
    function master_department()
    {
    
    if($this->input->post('add_dept')=='add')
       {
	    //print_r($_POST);exit;
	    $dept=$this->input->post('department');
	    $sql="insert into master_department (department)values ('$dept')";
	    $data=$this->db->query($sql);
		redirect(base_url('PayslipCtr/master_department_view'));
		
       }
	   
    $sql="select * from master_department";
    return $this->db->query($sql)->result_array();
  }
function master_update_percentage()
    {
	    
       if($this->input->post('hra_per'))
      {
	    $data= array(
	     'hra_per'=>$this->input->post('hra_per')
	    );
       $this->db->where('field_name','HRA');
       $this->db->update('master_salary', $data);
      
      }
      
       if($this->input->post('da_per'))
      {
	    $data= array(
	     'da_per'=>$this->input->post('da_per')
	    );


       $this->db->where('field_name','DA');
       $this->db->update('master_salary', $data);
       }
	redirect ('payslipCtr/inc_dec');
       
    }  
  
  
    function master_insert_shift()
    {
	$strt = $this->input->post('mrngStartTime');
	$end = $this->input->post('mrngEndTime');
	$aStrt = $this->input->post('eveStartTime');
	$aEnd = $this->input->post('eveEndTime');
	    if($strt==''){
		$mrngStrt= $this->input->post('mrng_start');
	    }
	    else{
		$mrngStrt= $this->input->post('mrngStartTime');
	    }
	    if($end==''){
		$mrngEnd= $this->input->post('mrng_end');
	    }
	    else{
		$mrngEnd= $this->input->post('mrngEndTime');
	    }
	    if($aStrt==''){
		$aftnStrt= $this->input->post('aftn_start');
	    }
	    else{
		$aftnStrt= $this->input->post('eveStartTime');
	    }
	    if($aEnd==''){
		$aftnEnd= $this->input->post('aftn_end');
	    }
	    else{
		$aftnEnd= $this->input->post('eveEndTime');
	    }
	$data = array(
	    
	    'mrng_start_time' => $mrngStrt,
	    'mrng_end_time' => $mrngEnd,
	    'afternoon_start_time' =>$aftnStrt,
	    'afternoon_end_time' => $aftnEnd,
	    'total_working_hours' => $this->input->post('total_working_hours')
	);
	$this->db->update('master_shift_settings', $data);
        redirect(base_url('PayslipCtr/master_shift'));
    }
  
    function view_master_shift()
    {
	$sql="SELECT * FROM  master_shift_settings";
	return $this->db->query($sql)->result_array();
    }
     
    function increment_edit($id){
	$this->db->select('*');
	$this->db->from('inc_dec_details');
	$this->db->where('ID',$id);
	$salaryedit=$this->db->get();
	return $salaryedit->result_array(); 
    }
        

   function increment_update($id){
	$this->db->where('ID',$id);
    $data=array(
	'EMP_NAME' => $this->input->post('emp_name'),
	'EMP_ID' => $this->input->post('emp_id'),
	'EMP_DEPARTMENT' => $this->input->post('department'),
	//'BASIC_SALARY' => $this->input->post('basic_salary'),
	'INC_DEC_TYPE' => $this->input->post('inc_dec_option'),
	'AMOUNT' => $this->input->post('inc_dec_amount'),
	//'NEW_BASIC_SALARY' => $this->input->post('current_salary'),
	'INC_DEC_EFFECTIVE_MONTH' => $this->input->post('month_of_inc_dec'),
	'REMARKS' => $this->input->post('remarks')
	);
         
	$this->db->update('inc_dec_details',$data);
	redirect('PayslipCtr/viewIncrement');
    }
    
    function increment_delete($id){
	$this->db->where('ID',$id);
	$this->db->delete('inc_dec_details');
	redirect ('PayslipCtr/viewIncrement');
    }
    
    //ATTENDANCE LOG VIKI START
    
    function insertdata()
    {
	$sql="SELECT EMP_FIRST_NAME FROM emp_details";
	return $this->db->query($sql)->result_array();	 
    }
    
    function attendfetch($name)
    {
	$sqls="SELECT * FROM emp_details WHERE EMP_FIRST_NAME='$name'";
	return $this->db->query($sqls)->result_array();
    }
    function showrecords()
    {
	
	$data=array(
		    
		    $name=$this->input->post('empname'),
		    $designation=$this->input->post('designation'),
		    $month=$this->input->post('month'),
		    $year=$this->input->post('year'),
		    $fromdate=$this->input->post('fromdate'),
		    $todate=$this->input->post('todate'),
		    $clickevent=$this->input->post('radio')
		   
		  );
	    
	    $sql="select EMP_JOINING_DATE from emp_details where EMP_FIRST_NAME='$name'";
	    $joining_date=$this->db->query($sql)->result_array();
	    $join_date=$joining_date[0]['EMP_JOINING_DATE'];
	    
	    
	    $date_arr = explode('/',$join_date);
	    $chained = $date_arr[2].'-'.$date_arr[1].'-'.$date_arr[0];
	    $explode_month=$date_arr[1];
	    $monthArray=array('01'=>'null','01'=>'Jan','02'=>'Feb','03'=>'Mar','04'=>'Apr','05'=>'May','06'=>'Jun','07'=>'Jul','08'=>'Aug','09'=>'Sep','10'=>'Oct','11'=>'Nov','12'=>'Dec');
	    $monthreal_data=array_search($explode_month, $monthArray);
	    $chained1=$date_arr[2].'-'.$monthreal_data.'-'.$date_arr[0];
	    
	   // echo $chained1;exit;
	
	    if($clickevent=='Monthly')
	    {
		$sql="select * from shift_details where ((SFT_EMP_NAME='$name' ) OR ( SFT_STATUS='Second_Saturday' OR SFT_STATUS='Fourth_Saturday' OR SFT_STATUS='Sunday' OR  SFT_STATUS='Festival_Holidays')) AND SFT_MONTH='$month' AND SFT_YEAR='$year' AND SFT_DATE >= '$chained1'";
		return $this->db->query($sql)->result_array();
	    }
	    if($clickevent=='yearly')
	    {
		$sql="select * from shift_details where ((SFT_EMP_NAME='$name' ) OR ( SFT_STATUS='Second_Saturday' OR SFT_STATUS='Fourth_Saturday' OR SFT_STATUS='Sunday' OR  SFT_STATUS='Festival_Holidays')) AND SFT_DATE >= '$chained1' AND SFT_YEAR='$year'"; 
		return $this->db->query($sql)->result_array();
	    }
	    if($clickevent=='DataRange')
	    {
		$sql="select * from shift_details where ((SFT_EMP_NAME='$name' ) OR ( SFT_STATUS='Second_Saturday' OR SFT_STATUS='Fourth_Saturday' OR SFT_STATUS='Sunday' OR  SFT_STATUS='Festival_Holidays')) AND SFT_DATE BETWEEN '$fromdate' AND '$todate' AND SFT_DATE >= '$chained1'";
		return $this->db->query($sql)->result_array();
	    }

    }
    
    function total_hrs_daterange()
	{
	    $name=$this->input->post('empname');
	    $fromdate=$this->input->post('fromdate');
	    $todate=$this->input->post('todate');
	    
	    $sql="select EMP_JOINING_DATE from emp_details where EMP_FIRST_NAME='$name'";
	    $joining_date=$this->db->query($sql)->result_array();
	    $join_date=$joining_date[0]['EMP_JOINING_DATE'];
	    
	    
	    $date_arr = explode('/',$join_date);
	    $chained = $date_arr[2].'-'.$date_arr[1].'-'.$date_arr[0];
	    $explode_month=$date_arr[1];
	    $monthArray=array('01'=>'null','01'=>'Jan','02'=>'Feb','03'=>'Mar','04'=>'Apr','05'=>'May','06'=>'Jun','07'=>'Jul','08'=>'Aug','09'=>'Sep','10'=>'Oct','11'=>'Nov','12'=>'Dec');
	    $monthreal_data=array_search($explode_month, $monthArray);
	    $chained1=$date_arr[2].'-'.$monthreal_data.'-'.$date_arr[0];
	    
	    $sql = "SELECT ROUND(SUM(SFT_WORKING_HOUR),2) as checkvalue FROM shift_details where SFT_EMP_NAME='$name' AND SFT_DATE >= '$chained1' AND SFT_DATE BETWEEN '$fromdate' AND '$todate'";
	    return $this->db->query($sql)->result_array();
	}
	function total_hrs_monthly()
	{
	    $clickevent=$this->input->post('radio');
	    if($clickevent=='Monthly')
	    {
		$name=$this->input->post('empname');
		$month=$this->input->post('month');
		$year=$this->input->post('year');
		
		$sql="select EMP_JOINING_DATE from emp_details where EMP_FIRST_NAME='$name'";
		$joining_date=$this->db->query($sql)->result_array();
		$join_date=$joining_date[0]['EMP_JOINING_DATE'];
	    
	    
		$date_arr = explode('/',$join_date);
		$chained = $date_arr[2].'-'.$date_arr[1].'-'.$date_arr[0];
		$explode_month=$date_arr[1];
		$monthArray=array('01'=>'null','01'=>'Jan','02'=>'Feb','03'=>'Mar','04'=>'Apr','05'=>'May','06'=>'Jun','07'=>'Jul','08'=>'Aug','09'=>'Sep','10'=>'Oct','11'=>'Nov','12'=>'Dec');
		$monthreal_data=array_search($explode_month, $monthArray);
		$chained1=$date_arr[2].'-'.$monthreal_data.'-'.$date_arr[0];
		
		$sql = "SELECT ROUND(SUM(SFT_WORKING_HOUR),2) as checkvalue FROM shift_details where SFT_EMP_NAME='$name' AND SFT_MONTH='$month' AND SFT_YEAR='$year' AND SFT_DATE >= '$chained1'";
		return $this->db->query($sql)->result_array();
	    }
	    else if($clickevent=='yearly')
	    {
		$name=$this->input->post('empname');
		$year=$this->input->post('year');
		
		
		$sql="select EMP_JOINING_DATE from emp_details where EMP_FIRST_NAME='$name'";
		$joining_date=$this->db->query($sql)->result_array();
		$join_date=$joining_date[0]['EMP_JOINING_DATE'];
	    
	    
		$date_arr = explode('/',$join_date);
		$chained = $date_arr[2].'-'.$date_arr[1].'-'.$date_arr[0];
		$explode_month=$date_arr[1];
		$monthArray=array('01'=>'null','01'=>'Jan','02'=>'Feb','03'=>'Mar','04'=>'Apr','05'=>'May','06'=>'Jun','07'=>'Jul','08'=>'Aug','09'=>'Sep','10'=>'Oct','11'=>'Nov','12'=>'Dec');
		$monthreal_data=array_search($explode_month, $monthArray);
		$chained1=$date_arr[2].'-'.$monthreal_data.'-'.$date_arr[0];
	    
	    
	    $sql = "SELECT ROUND(SUM(SFT_WORKING_HOUR),2) as checkvalue FROM shift_details where SFT_EMP_NAME='$name' AND SFT_YEAR='$year' AND SFT_DATE >= '$chained1'";
	    return $this->db->query($sql)->result_array();
	    }
	    
	    
	}
    
    function designation()
    {
	 $name=$this->input->post('empname');
	 $sql="select * from emp_details where EMP_FIRST_NAME='$name'";
	 return $this->db->query($sql)->result_array();
    }
   
    function present()
    {
	$name=$this->input->post('empname');
	$year=$this->input->post('year');
	$month=$this->input->post('month');
	$todate=$this->input->post('todate');
	$fromdate=$this->input->post('fromdate');
	
	$sql="select EMP_JOINING_DATE from emp_details where EMP_FIRST_NAME='$name'";
	    $joining_date=$this->db->query($sql)->result_array();
	    $join_date=$joining_date[0]['EMP_JOINING_DATE'];
	    
	    
	    $date_arr = explode('/',$join_date);
	    $chained = $date_arr[2].'-'.$date_arr[1].'-'.$date_arr[0];
	    $explode_month=$date_arr[1];
	    $monthArray=array('01'=>'null','01'=>'Jan','02'=>'Feb','03'=>'Mar','04'=>'Apr','05'=>'May','06'=>'Jun','07'=>'Jul','08'=>'Aug','09'=>'Sep','10'=>'Oct','11'=>'Nov','12'=>'Dec');
	    $monthreal_data=array_search($explode_month, $monthArray);
	    $chained1=$date_arr[2].'-'.$monthreal_data.'-'.$date_arr[0];
	    
	    
	if($month)
	{
	    $sql="SELECT count(SFT_MONTH) as ssmonth from shift_details WHERE SFT_EMP_NAME='$name' AND SFT_MONTH='$month' and SFT_STATUS='present' AND SFT_DATE >= '$chained1'";
	    return $this->db->query($sql)->result_array();
	}
	elseif($year)
	{
	   $sql="SELECT count(SFT_MONTH) as ssmonth from shift_details WHERE SFT_EMP_NAME='$name' AND SFT_YEAR='$year' and SFT_STATUS='present' AND SFT_DATE >= '$chained1'"; 
	    return $this->db->query($sql)->result_array();	
	}
    }
   function present_status($name,$month)
    {
	$name=$this->input->post('empname');
	$todate=$this->input->post('todate');
	$fromdate=$this->input->post('fromdate');
	
	    $sql="select EMP_JOINING_DATE from emp_details where EMP_FIRST_NAME='$name'";
	    $joining_date=$this->db->query($sql)->result_array();
	    $join_date=$joining_date[0]['EMP_JOINING_DATE'];
	    
	    
	    $date_arr = explode('/',$join_date);
	    $chained = $date_arr[2].'-'.$date_arr[1].'-'.$date_arr[0];
	    $explode_month=$date_arr[1];
	    $monthArray=array('01'=>'null','01'=>'Jan','02'=>'Feb','03'=>'Mar','04'=>'Apr','05'=>'May','06'=>'Jun','07'=>'Jul','08'=>'Aug','09'=>'Sep','10'=>'Oct','11'=>'Nov','12'=>'Dec');
	    $monthreal_data=array_search($explode_month, $monthArray);
	    $chained1=$date_arr[2].'-'.$monthreal_data.'-'.$date_arr[0];
	    
	    
	//$sql="SELECT count(SFT_MONTH) as ssmonth from shift_details WHERE SFT_EMP_NAME='$name' AND SFT_DATE BETWEEN '$fromdate' AND '$todate' and SFT_STATUS='present')";
	$sql="SELECT count(SFT_MONTH) as ssmonth from shift_details WHERE SFT_EMP_NAME='$name' AND SFT_DATE >= '$chained1' AND SFT_STATUS='Present' AND SFT_DATE BETWEEN '$fromdate' AND '$todate' ";
	return $this->db->query($sql)->result_array();
	
	
    }
    function Lop_status($name,$month)
    {
	$name=$this->input->post('empname');
	$todate=$this->input->post('todate');
	$fromdate=$this->input->post('fromdate');
	
	    $sql="select EMP_JOINING_DATE from emp_details where EMP_FIRST_NAME='$name'";
	    $joining_date=$this->db->query($sql)->result_array();
	    $join_date=$joining_date[0]['EMP_JOINING_DATE'];
	    
	    
	    $date_arr = explode('/',$join_date);
	    $chained = $date_arr[2].'-'.$date_arr[1].'-'.$date_arr[0];
	    $explode_month=$date_arr[1];
	    $monthArray=array('01'=>'null','01'=>'Jan','02'=>'Feb','03'=>'Mar','04'=>'Apr','05'=>'May','06'=>'Jun','07'=>'Jul','08'=>'Aug','09'=>'Sep','10'=>'Oct','11'=>'Nov','12'=>'Dec');
	    $monthreal_data=array_search($explode_month, $monthArray);
	    $chained1=$date_arr[2].'-'.$monthreal_data.'-'.$date_arr[0];
	    
	    
	$sql="SELECT SUM(SFT_VALUE) as ssmonth from shift_details WHERE SFT_EMP_NAME='$name' AND SFT_DATE >= '$chained1' AND SFT_DATE BETWEEN '$fromdate' AND '$todate' and SFT_STATUS IN ('Half-Day','LOP')";
	
	return $this->db->query($sql)->result_array();
    }
    function cl_status($name,$month)
    {
	$name=$this->input->post('empname');
	$todate=$this->input->post('todate');
	$fromdate=$this->input->post('fromdate');
	
	    $sql="select EMP_JOINING_DATE from emp_details where EMP_FIRST_NAME='$name'";
	    $joining_date=$this->db->query($sql)->result_array();
	    $join_date=$joining_date[0]['EMP_JOINING_DATE'];
	    
	    
	    $date_arr = explode('/',$join_date);
	    $chained = $date_arr[2].'-'.$date_arr[1].'-'.$date_arr[0];
	    $explode_month=$date_arr[1];
	    $monthArray=array('01'=>'null','01'=>'Jan','02'=>'Feb','03'=>'Mar','04'=>'Apr','05'=>'May','06'=>'Jun','07'=>'Jul','08'=>'Aug','09'=>'Sep','10'=>'Oct','11'=>'Nov','12'=>'Dec');
	    $monthreal_data=array_search($explode_month, $monthArray);
	    $chained1=$date_arr[2].'-'.$monthreal_data.'-'.$date_arr[0];
	    
	$sql="SELECT count(SFT_MONTH) as ssmonth from shift_details WHERE SFT_EMP_NAME='$name' AND SFT_DATE >= '$chained1' AND SFT_DATE BETWEEN '$fromdate' AND '$todate' and SFT_STATUS='CL'";
	return $this->db->query($sql)->result_array();
    }
    function holiday_status() //attend_report_datarange_summary
    {
	$name=$this->input->post('empname');
	$todate=$this->input->post('todate');
	$fromdate=$this->input->post('fromdate');
	
	    $sql="select EMP_JOINING_DATE from emp_details where EMP_FIRST_NAME='$name'";
	    $joining_date=$this->db->query($sql)->result_array();
	    $join_date=$joining_date[0]['EMP_JOINING_DATE'];
	    
	    
	    $date_arr = explode('/',$join_date);
	    $chained = $date_arr[2].'-'.$date_arr[1].'-'.$date_arr[0];
	    $explode_month=$date_arr[1];
	    $monthArray=array('01'=>'null','01'=>'Jan','02'=>'Feb','03'=>'Mar','04'=>'Apr','05'=>'May','06'=>'Jun','07'=>'Jul','08'=>'Aug','09'=>'Sep','10'=>'Oct','11'=>'Nov','12'=>'Dec');
	    $monthreal_data=array_search($explode_month, $monthArray);
	    $chained1=$date_arr[2].'-'.$monthreal_data.'-'.$date_arr[0];
	    
	$sql="SELECT count(SFT_MONTH) as ssmonth from shift_details WHERE ( SFT_STATUS='Second_Saturday' OR SFT_STATUS='Fourth_Saturday' OR SFT_STATUS='Sunday' OR SFT_STATUS='Festival_Holidays') AND SFT_DATE >= '$chained1' AND SFT_DATE BETWEEN '$fromdate' AND '$todate' ";
        return $this->db->query($sql)->result_array();
    }
    
   function holidays() //attend_report_summary
    {
	$name=$this->input->post('empname');
	
	$sql="select EMP_JOINING_DATE from emp_details where EMP_FIRST_NAME='$name'";
	$joining_date=$this->db->query($sql)->result_array();
	$join_date=$joining_date[0]['EMP_JOINING_DATE'];
	
	$date_arr = explode('/',$join_date);
	$chained = $date_arr[2].'-'.$date_arr[1].'-'.$date_arr[0];
	$explode_month=$date_arr[1];
	$monthArray=array('01'=>'null','01'=>'Jan','02'=>'Feb','03'=>'Mar','04'=>'Apr','05'=>'May','06'=>'Jun','07'=>'Jul','08'=>'Aug','09'=>'Sep','10'=>'Oct','11'=>'Nov','12'=>'Dec');
	$monthreal_data=array_search($explode_month, $monthArray);
	$chained1=$date_arr[2].'-'.$monthreal_data.'-'.$date_arr[0];

	//print_r($chained1);exit;
	$year=$this->input->post('year');
	$todate=$this->input->post('todate');
	$fromdate=$this->input->post('fromdate');
	$month=$this->input->post('month');
	if($month)
	{
	    $sql="SELECT count(SFT_MONTH) as ssmonth from shift_details WHERE ( SFT_STATUS='Second_Saturday' OR SFT_STATUS='Fourth_Saturday' OR SFT_STATUS='Sunday' OR SFT_STATUS='Festival_Holidays') AND SFT_MONTH='$month' AND SFT_DATE >= '$chained1'";
	    return $this->db->query($sql)->result_array();
	}
	elseif($year)
	{
	    $sql="SELECT count(SFT_MONTH) as ssmonth from shift_details WHERE ( SFT_STATUS='Second_Saturday' OR SFT_STATUS='Fourth_Saturday' OR SFT_STATUS='Sunday' OR SFT_STATUS='Festival_Holidays') AND SFT_YEAR='$year' AND SFT_DATE >= '$chained1' ";
	    return $this->db->query($sql)->result_array();
	}

    
    }

      function LOP()
    {
	$name=$this->input->post('empname');
	$year=$this->input->post('year');
	$month=$this->input->post('month');
	$fromdate=$this->input->post('fromdate');
	
	    $sql="select EMP_JOINING_DATE from emp_details where EMP_FIRST_NAME='$name'";
	    $joining_date=$this->db->query($sql)->result_array();
	    $join_date=$joining_date[0]['EMP_JOINING_DATE'];
	    
	    
	    $date_arr = explode('/',$join_date);
	    $chained = $date_arr[2].'-'.$date_arr[1].'-'.$date_arr[0];
	    $explode_month=$date_arr[1];
	    $monthArray=array('01'=>'null','01'=>'Jan','02'=>'Feb','03'=>'Mar','04'=>'Apr','05'=>'May','06'=>'Jun','07'=>'Jul','08'=>'Aug','09'=>'Sep','10'=>'Oct','11'=>'Nov','12'=>'Dec');
	    $monthreal_data=array_search($explode_month, $monthArray);
	    $chained1=$date_arr[2].'-'.$monthreal_data.'-'.$date_arr[0];
	    if($month)
	    {
		$sql="SELECT SUM(SFT_VALUE) as ssmonth from shift_details WHERE SFT_EMP_NAME='$name' AND SFT_MONTH='$month'and SFT_STATUS IN('LOP','Half-Day') AND SFT_DATE >= '$chained1'";
		return $this->db->query($sql)->result_array();
	    }
	    elseif($year)
	    {
	       $sql="SELECT SUM(SFT_VALUE) as ssmonth from shift_details WHERE SFT_EMP_NAME='$name' AND SFT_YEAR='$year' and SFT_STATUS IN('LOP','Half-Day') AND SFT_DATE >= '$chained1'"; 
		return $this->db->query($sql)->result_array();	
	    }
    }
    function CL()
    {
	$name=$this->input->post('empname');
	$year=$this->input->post('year');
	$month=$this->input->post('month');
	$fromdate=$this->input->post('fromdate');
	
	 $sql="select EMP_JOINING_DATE from emp_details where EMP_FIRST_NAME='$name'";
	    $joining_date=$this->db->query($sql)->result_array();
	    $join_date=$joining_date[0]['EMP_JOINING_DATE'];
	    
	    
	    $date_arr = explode('/',$join_date);
	    $chained = $date_arr[2].'-'.$date_arr[1].'-'.$date_arr[0];
	    $explode_month=$date_arr[1];
	    $monthArray=array('01'=>'null','01'=>'Jan','02'=>'Feb','03'=>'Mar','04'=>'Apr','05'=>'May','06'=>'Jun','07'=>'Jul','08'=>'Aug','09'=>'Sep','10'=>'Oct','11'=>'Nov','12'=>'Dec');
	    $monthreal_data=array_search($explode_month, $monthArray);
	    $chained1=$date_arr[2].'-'.$monthreal_data.'-'.$date_arr[0];
	if($month)
	{
	    $sql="SELECT count(SFT_MONTH) as ssmonth from shift_details WHERE SFT_EMP_NAME='$name' AND SFT_MONTH='$month'and SFT_STATUS='CL' AND SFT_DATE >= '$chained1'";
	    return $this->db->query($sql)->result_array();
	}
	elseif($year)
	{
	   $sql="SELECT count(SFT_MONTH) as ssmonth from shift_details WHERE SFT_EMP_NAME='$name' AND SFT_YEAR='$year' and SFT_STATUS='CL' AND SFT_DATE >= '$chained1' "; 
	    return $this->db->query($sql)->result_array();	
	}

    }

    function dailyattendance()
    {
	$ename=$this->input->post('empname');
	$edate=$this->input->post('empdate');
	if($ename)
	{
	    $sql="select emp_details.EMP_DESIGNATION,shift_details.SFT_STATUS,shift_details.SFT_EMP_NAME from emp_details INNER JOIN shift_details ON emp_details.EMP_FIRST_NAME=shift_details.SFT_EMP_NAME where shift_details.SFT_EMP_NAME='$ename' AND SFT_DATE='$edate'";
	    return $this->db->query($sql)->result_array();
	}
	elseif($edate)
	{
	    $sql="select emp_details.EMP_DESIGNATION,shift_details.SFT_STATUS,shift_details.SFT_EMP_NAME from emp_details INNER JOIN shift_details ON emp_details.EMP_FIRST_NAME=shift_details.SFT_EMP_NAME where shift_details.SFT_DATE='$edate'";
	    return $this->db->query($sql)->result_array();
	}
	
    
    }
    //ATTENDANCE LOG VIKI END
    
    //EMPLOYEE DETAILS
    
    function insert_employee_list($emp_id)
	{
           $emp_unique_id=$emp_id;
        $upload_path=$config['upload_path'] = 'application/uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $show= $this->upload->do_upload('emp_profile');
        $file_data=$this->upload->data();
        $file_name=$file_data['file_name'];
        $emp_profile=$file_name;
   
        $upload_path=$config['upload_path'] = 'application/uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $show= $this->upload->do_upload('emp_id_proof');
        $file_data=$this->upload->data();
        $file_name=$file_data['file_name'];
        $emp_id_proof=$file_name;
     
        
		$data = array(
		'EMP_PROFILE' => $emp_profile,
		'EMP_ID_PROOF' => $emp_id_proof,
		'EMP_ID' => $emp_unique_id,
		'EMP_TITLE' => $this->input->post('emp_title'),
		'EMP_FIRST_NAME' => $this->input->post('emp_first_name'),
		'EMP_LAST_NAME' => $this->input->post('emp_last_name'),
		'EMP_GENDER' => $this->input->post('emp_gender'),
		'EMP_DOB' => $this->input->post('emp_dob'),
		'EMP_DESIGNATION' => $this->input->post('emp_designation'),
                'EMP_SHIFT' => $this->input->post('emp_shift'),
		'EMP_DEPARTMENT' => $this->input->post('emp_department'),
		'EMP_JOINING_DATE' => $this->input->post('emp_joining_date'),
		'EMP_BANK_NAME' => $this->input->post('emp_bank_name'),
		'EMP_BRANCH_NAME' => $this->input->post('emp_branch_name'),
		'EMP_IFSC_CODE'=>$this->input->post('emp_ifsc_code'),
		'EMP_ACCOUNT_NUM' =>$this->input->post('emp_account_num'),
		'EMP_ADDRESS' => $this->input->post('emp_address'),
		'EMP_TOWN_CITY' => $this->input->post('emp_town'),
		'EMP_STATE' => $this->input->post('emp_state'),
		'EMP_COUNTRY' => $this->input->post('emp_country'),
		'EMP_ZIPCODE' => $this->input->post('emp_zipcode'),
		'EMP_LANDLINE_NUM' => $this->input->post('emp_landline_no'),
		'EMP_MOBILE_NUM' => $this->input->post('emp_mobile_no'),
		'EMP_EMAIL' => $this->input->post('emp_email')
		);
		$this->db->insert('emp_details', $data);
                $emp_num=substr($emp_unique_id,3);
		
		$emp_char="CTS";
		$emp= $emp_num + 1;
		$new_emp_id=$emp_char.$emp;
		$data=array(
		    'employee_id'=>$new_emp_id
                );
	  $this->db->update('employee_id',$data);



        redirect(base_url('PayslipCtr/employee_list'));
	}

	
	function view_employee_list()
	{
	    $this->db->select('*');
	    $this->db->from('emp_details');
	    $query = $this->db->get();
	    return $query->result_array();
	    //print_r( $query); exit;
       
	}
	
	function view_attendance_list()
	{
	    $this->db->select('*');
	    $this->db->from('shift_details');
	    $query = $this->db->get();
	    return $query->result_array();
	    //print_r( $query); exit;
	}
	
	
	
	 function view_salary_list()
	 {
		$this->db->select('*');
		$this->db->from('payroll_details');
		$query = $this->db->get();
		return $query->result_array();
		//print_r( $query); exit;
		
	 }
	 
	function view_shiftsettings_list()
	{
		$this->db->select('*');
		$this->db->from('shift_details');
		$query = $this->db->get();
		return $query->result_array();
		//print_r( $query); exit;	
	}
	 
	function Fetchedit_data($id)
	{
		//print_r($id); exit;
		
		$sql="SELECT * FROM emp_details WHERE ID='$id'";
		//print_r($sql); exit;
		return $this->db->query($sql)->result_array();
	}
	

  function update_employee_list($id){
		
		 //$id =$this->input->post('id');
		//print_r($id);
	if($_FILES['emp_profile']['name']=="")
    	{
    	    $emp_profile = $this->input->post('old_emp_profile');
        }
        
        else{
        $upload_path=$config['upload_path'] = 'application/uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $show= $this->upload->do_upload('emp_profile');
        $file_data=$this->upload->data();
        $file_name=$file_data['file_name'];
        $emp_profile=$file_name;
        }
		
		if($_FILES['emp_id_proof']['name']=="")
    	{
    	    $emp_id_proof = $this->input->post('old_emp_id_proof');
        }
        
        else{
        $upload_path=$config['upload_path'] = 'application/uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $show= $this->upload->do_upload('emp_id_proof');
        $file_data=$this->upload->data();
        $file_name=$file_data['file_name'];
        $emp_id_proof=$file_name;
        }
		
		$data = array(
		'EMP_PROFILE' => $emp_profile,
		'EMP_ID_PROOF' => $emp_id_proof,
		'EMP_ID' => $this->input->post('emp_id'),
		'EMP_TITLE' => $this->input->post('emp_title'),
		'EMP_FIRST_NAME' => $this->input->post('emp_first_name'),
		'EMP_LAST_NAME' => $this->input->post('emp_last_name'),
		'EMP_DOB' => 	$this->input->post('emp_dob'),
		'EMP_GENDER' => $this->input->post('emp_gender'),
		'EMP_DESIGNATION' => $this->input->post('emp_designation'),
                'EMP_SHIFT' => $this->input->post('emp_shift'),
		'EMP_DEPARTMENT' => $this->input->post('emp_department'),
		'EMP_JOINING_DATE' => $this->input->post('emp_joining_date'),
		'EMP_BANK_NAME' => $this->input->post('emp_bank_name'),
		'EMP_BRANCH_NAME' => $this->input->post('emp_branch_name'),
		'EMP_IFSC_CODE'=>$this->input->post('emp_ifsc_code'),
		'EMP_ACCOUNT_NUM' =>$this->input->post('emp_account_num'),
		'EMP_ADDRESS' => $this->input->post('emp_address'),
		'EMP_TOWN_CITY' => $this->input->post('emp_town'),
		'EMP_COUNTRY' => $this->input->post('emp_country'),
		'EMP_STATE' => $this->input->post('emp_state'),
		'EMP_ZIPCODE' => $this->input->post('emp_zipcode'),
		'EMP_LANDLINE_NUM' => $this->input->post('emp_landline_no'),
		'EMP_MOBILE_NUM' => $this->input->post('emp_mobile_no'),
		'EMP_EMAIL' => $this->input->post('emp_email')
		);
		
		$this->db->where('ID',$id);
		$this->db->update('emp_details', $data);
        redirect(base_url('PayslipCtr/employee_list'));
	}

		
        function delete_row($id){
	 $this->db->where('id', $id);	
	 $this->db->delete('emp_details');
	
	 }
	 
	function delete_row1($id){
	$this->db->where('id', $id);	
	$this->db->delete('payroll_details');
	}
	
	function salary_monthwise(){

	$data=array(
		$user_month =$this->input->post('month'),
		$user_year=$this->input->post('year'),
		$user_name=$this->input->post('name'),
		);
	
	     if($user_month && $user_year && $user_name){
		
		$this->db->select('*');
		$this->db->from('payroll_details');
		$this->db->where('EMP_NAME',$user_name);
		$this->db->where('YEAR',$user_year);
		$this->db->where('MONTH',$user_month);
		$data=$this->db->get();
		
	    return $data->result_array();
	}
	
	
	else if($user_name && $user_year)
    	{
	    
	    $this->db->select('*');
	    $this->db->from('payroll_details');
	    $this->db->where('EMP_NAME',$user_name);
	    $this->db->where('YEAR',$user_year);
	    $data=$this->db->get();
		
	    return $data->result_array();
		
	 }
	
		
	else if($user_name)
		{
			
		$this->db->select('*');
		$this->db->from('payroll_details');
		$this->db->where('EMP_NAME',$user_name);
		$data=$this->db->get();
		
	    return $data->result_array();
		
	    }
	}
	
	 function attendance_monthwise(){
		
		$user_month =$this->input->post('month');
		$user_year=$this->input->post('year');
		
		$user_name=$this->input->post('name');
		
	
	  if($user_month && $user_year && $user_name){
		
		$this->db->select('*');
		$this->db->from('shift_details');
		$this->db->where('SFT_MONTH',$user_month);
		$this->db->where('SFT_EMP_NAME',$user_name);
		$this->db->where('SFT_YEAR',$user_year);
		$data=$this->db->get();
		
	    return $data->result_array();
		
	}
	
	else if($user_name && $user_year)
		{
			
		$this->db->select('*');
		$this->db->from('shift_details');
		$this->db->where('SFT_EMP_NAME',$user_name);
		$this->db->where('SFT_YEAR',$user_year);
		$data=$this->db->get();
		
	    return $data->result_array();
		
	 }
	
	else if($user_name)
	{
		$this->db->select('*');
		$this->db->from('shift_details');
		$this->db->where('SFT_EMP_NAME',$user_name);
		//$this->db->where('SFT_YEAR',$user_year);
		$data=$this->db->get();
		
	    return $data->result_array();
		
		
	}
		
	}

	function shift_monthwise(){
		
		
	$data=array(
		$user_month =$this->input->post('month'),
		$user_year=$this->input->post('year'),
		$user_name=$this->input->post('name'),
		);
	
	
	     if($user_month && $user_year && $user_name){
		
		$this->db->select('*');
		$this->db->from('shift_details');
		$this->db->where('SFT_EMP_NAME',$user_name);
		$this->db->where('SFT_YEAR',$user_year);
		$this->db->where('SFT_MONTH',$user_month);
		$data=$this->db->get();
		
	    return $data->result_array();
	}
	
	
	else if($user_name && $user_year)
		{
			
		$this->db->select('*');
		$this->db->from('shift_details');
		$this->db->where('SFT_EMP_NAME',$user_name);
		$this->db->where('SFT_YEAR',$user_year);
		$data=$this->db->get();
		
	    return $data->result_array();
		
	 }
	
		
	else if($user_name)
		{
			
		$this->db->select('*');
		$this->db->from('shift_details');
		$this->db->where('SFT_EMP_NAME',$user_name);
		//$this->db->where('PAID_YEAR',$user_year);
		$data=$this->db->get();
		
	    return $data->result_array();
		
	 }
	
	
    }
    function getfrom_empdetail($name){
	$this->db->select('*');
	$this->db->from('emp_details');
	$this->db->where('EMP_FIRST_NAME',$name);
	$var1=$this->db->get();
	return $var1->result_array();
	//print_r($name);exit;
    }
    function getfrom_empdetail2($name){
	$this->db->select('*');
	$this->db->from('manual_payslip');
	$this->db->where('EMP_NAME',$name);
	$var1=$this->db->get();
	return $var1->result_array();
	 }
     function getfrom_empdetail1($name,$month,$year){
	 $sql="select * from manual_payslip where EMP_NAME='$name' AND MONTH='$month' AND YEAR='$year'";
	  $ddd=$this->db->query($sql)->result_array();
	    if(count($ddd)==1){
	    return $ddd; 
            }
    }
    
    function getfrom_salarydetail6($name,$month,$year){
	$sql="select * from payroll_details where EMP_NAME='$name' AND MONTH='$month' AND YEAR='$year'";
	$ddd=$this->db->query($sql)->result_array();
	if(count($ddd)==1){
	    return $ddd;
	}
    }

    function getfrom_salaryMail($name){
      $sql="select * from payroll_details where EMP_NAME='$name'";
	return $this->db->query($sql)->result_array();
   }
    function getfrom_salarydetail($name,$month){
	$sql="select * from payroll_details where EMP_NAME='$name' AND MONTH_YEAR='$month'";
	return $this->db->query($sql)->result_array();

    }

   function working($month)
    {
	if($month==!"")
	{
	   
	    //echo "yes month";
	     $date_arr = explode('-',$month);
	    $chained = $date_arr[1];
	    $sql="select CL_WRK_DAYS from calender_details where CL_MONTHS='$chained'";
	    return $this->db->query($sql)->result_array();
	   
	}
	else
	{
	       //echo "no month";
	    $sql="select CL_WRK_DAYS from calender_details";
	    return $this->db->query($sql)->result_array();
	}
	
    }
   function calculate_hrs($user,$month)
    {
	if($month=="")
	{
	    
	   $sql="SELECT count(SFT_VALUE) FROM shift_details";
	   return $this->db->query($sql)->result_array();
	}
	else{
	   
	$date_arr = explode('-',$month);
	$chained = $date_arr[1];
	$array_position = array(
				'01'=>'Jan',
				'02'=>'Feb',
				'03'=>'Mar',
				'04'=>'Apr',
				'05'=>'May',
				'06'=>'Jun',
				'07'=>'Jly',
				'08'=>'Aug',
				'09'=>'Sep',
				'10'=>'Oct',
				'11'=>'Nov',
				'12'=>'Dec',
				);
	$position = array_search($chained,$array_position);
	//print_r($position);exit;
	$sql="SELECT SUM( SFT_VALUE ) AS scountdata FROM shift_details WHERE SFT_EMP_NAME = '$user' AND SFT_MONTH = '$position' AND SFT_STATUS IN ('Half-Day','Present','CL')";
	return $this->db->query($sql)->result_array();
	}

	
    }
    //SHIFT DETAILS START
    
       function shift_details(){
	
	$remarks = $this->input->post('remarks');
        $date = $this->input->post('dailyDate');
	$todate = $this->input->post('todates');
        $cl = $this->input->post('clLeave');
        $lop = $this->input->post('lopLeave');
	$statusVal = $this->input->post('status');
        $orderdate = explode('-', $date);
        $month = $orderdate[1];
        $year  = $orderdate[0];
        if($cl== 'TRUE'){
            $data=array(
                'SFT_EMP_NAME'=> $this->input->post('emp_name'),
                'SFT_DATE'=> $date,
                'SFT_MRNG_STRATTIME'=> 0,
                'SFT_MRNG_ENDTIME'=> 0,
                'SFT_EVE_STARTTIME'=> 0,
                'SFT_EVE_ENDTIME'=> 0,
                'SFT_BREAK_HOUR'=>0,
                'SFT_WORKING_HOUR'=> 0,
                'SFT_DAY'=> 0,
                'SFT_CL_LEAVE'=> $this->input->post('clLeave'),
                'SFT_MONTH'=> $month,
                'SFT_YEAR'=> $year,
		'SFT_STATUS'=>$this->input->post('CL'),
		'SFT_VALUE'=>'1'
		
            );
	    
            $this->db->insert('shift_details',$data);
            redirect('PayslipCtr/attendance');
        }
	else if($lop== 'TRUE'){
            $data=array(
                'SFT_EMP_NAME'=> $this->input->post('emp_name'),
                'SFT_DATE'=> $date,
		'SFT_MRNG_STRATTIME'=> 0,
                'SFT_MRNG_ENDTIME'=>0,
                'SFT_EVE_STARTTIME'=> 0,
                'SFT_EVE_ENDTIME'=> 0,
                'SFT_BREAK_HOUR'=> 0,
                'SFT_WORKING_HOUR'=> 0,
                'SFT_DAY'=> 0,
                'SFT_LOP_LEAVE'=> $this->input->post('lopLeave'),
                'SFT_MONTH'=> $month,
                'SFT_YEAR'=> $year,
		'SFT_STATUS'=>$this->input->post('LOP'),
		'SFT_VALUE'=>'0'
            );
            $this->db->insert('shift_details',$data);
            redirect('payslipCtr/attendance');
        }

	
	else if($statusVal=='Present'){
            $data=array(
                'SFT_EMP_NAME'=> $this->input->post('emp_name'),
                'SFT_DATE'=> $date,
                'SFT_MRNG_STRATTIME'=> $this->input->post('mrngStartTime'),
                'SFT_MRNG_ENDTIME'=> $this->input->post('mrngEndTime'),
                'SFT_EVE_STARTTIME'=> $this->input->post('eveStartTime'),
                'SFT_EVE_ENDTIME'=> $this->input->post('eveEndTime'),
                'SFT_BREAK_HOUR'=> $this->input->post('breakTime'),
                'SFT_WORKING_HOUR'=> $this->input->post('workHours'),
                'SFT_DAY'=> $this->input->post('numOfDays'),
                'SFT_MONTH'=> $month,
                'SFT_YEAR'=> $year,
		'SFT_STATUS'=>$this->input->post('status'),
		'SFT_REMARKS'=>$this->input->post('remarks'),
		'SFT_VALUE'=>'1'
	    );
            $this->db->insert('shift_details',$data);
            redirect('payslipCtr/attendance');
        }
	else if($statusVal=='Half-Day'){
            $data=array(
                'SFT_EMP_NAME'=> $this->input->post('emp_name'),
                'SFT_DATE'=> $date,
                'SFT_MRNG_STRATTIME'=> $this->input->post('mrngStartTime'),
                'SFT_MRNG_ENDTIME'=> $this->input->post('mrngEndTime'),
                'SFT_EVE_STARTTIME'=> $this->input->post('eveStartTime'),
                'SFT_EVE_ENDTIME'=> $this->input->post('eveEndTime'),
                'SFT_BREAK_HOUR'=> $this->input->post('breakTime'),
                'SFT_WORKING_HOUR'=> $this->input->post('workHours'),
                'SFT_DAY'=> $this->input->post('numOfDays'),
                'SFT_MONTH'=> $month,
                'SFT_YEAR'=> $year,
		'SFT_STATUS'=>$this->input->post('status'),
		'SFT_REMARKS'=>$this->input->post('remarks'),
		'SFT_VALUE'=>'0.5'
	    );
            $this->db->insert('shift_details',$data);
            redirect('payslipCtr/attendance');
        }
	else{
            $data=array(
                'SFT_EMP_NAME'=> $this->input->post('emp_name'),
                'SFT_DATE'=> $date,
                'SFT_MRNG_STRATTIME'=> $this->input->post('mrngStartTime'),
                'SFT_MRNG_ENDTIME'=> $this->input->post('mrngEndTime'),
                'SFT_EVE_STARTTIME'=> $this->input->post('eveStartTime'),
                'SFT_EVE_ENDTIME'=> $this->input->post('eveEndTime'),
                'SFT_BREAK_HOUR'=> $this->input->post('breakTime'),
                'SFT_WORKING_HOUR'=> $this->input->post('workHours'),
                'SFT_DAY'=> $this->input->post('numOfDays'),
                'SFT_MONTH'=> $month,
                'SFT_YEAR'=> $year,
		'SFT_STATUS'=>$this->input->post('status'),
		'SFT_REMARKS'=>$this->input->post('remarks'),
		'SFT_VALUE'=>'1'
	    );
            $this->db->insert('shift_details',$data);
            redirect('payslipCtr/attendance');
        }
	
        
    }
    
   function update_Shift_details($val){
        $date = $this->input->post('dailyDate');
        $cl = $this->input->post('clLeave');
        $lop = $this->input->post('lopLeave');
	$statusVal = $this->input->post('status');
        $orderdate = explode('-', $date);
        $month = $orderdate[1];
        $year  = $orderdate[0];
        if($cl== 'TRUE'){
            $data=array(
                'SFT_EMP_NAME'=> $this->input->post('emp_name'),
                'SFT_DATE'=> $date,
                'SFT_MRNG_STRATTIME'=> 0,
                'SFT_MRNG_ENDTIME'=> 0,
                'SFT_EVE_STARTTIME'=>0,
                'SFT_EVE_ENDTIME'=> 0,
                'SFT_BREAK_HOUR'=> 0,
                'SFT_WORKING_HOUR'=> 0,
                'SFT_DAY'=> 0,
                'SFT_CL_LEAVE'=> $this->input->post('clLeave'),
		'SFT_LOP_LEAVE'=> $this->input->post('lopLeave'),
                'SFT_MONTH'=> $month,
                'SFT_YEAR'=> $year,
		'SFT_STATUS'=>$this->input->post('CL'),
		'SFT_VALUE'=>'1'
            );
	    $this->db->where('SFT_ID', $val);
            $this->db->update('shift_details',$data);
            redirect('payslipCtr/attendance');
        }else if($lop== 'TRUE'){
            $data=array(
                'SFT_EMP_NAME'=> $this->input->post('emp_name'),
                'SFT_DATE'=> $date,
                'SFT_MRNG_STRATTIME'=>0,
                'SFT_MRNG_ENDTIME'=>0,
                'SFT_EVE_STARTTIME'=>0,
                'SFT_EVE_ENDTIME'=> 0,
                'SFT_BREAK_HOUR'=>0,
                'SFT_WORKING_HOUR'=> 0,
                'SFT_DAY'=> 0,
                'SFT_LOP_LEAVE'=> $this->input->post('lopLeave'),
		'SFT_CL_LEAVE'=> $this->input->post('clLeave'),
		'SFT_STATUS'=>$this->input->post('LOP'),
                'SFT_MONTH'=> $month,
                'SFT_YEAR'=> $year,
		'SFT_VALUE'=>'1'
            );
	    $this->db->where('SFT_ID', $val);
            $this->db->update('shift_details',$data);
            redirect('payslipCtr/attendance');
        }
	else if($statusVal=='Present'){
            $data=array(
               'SFT_EMP_NAME'=> $this->input->post('emp_name'),
                'SFT_DATE'=> $date,
                'SFT_MRNG_STRATTIME'=> $this->input->post('mrngStartTime'),
                'SFT_MRNG_ENDTIME'=> $this->input->post('mrngEndTime'),
                'SFT_EVE_STARTTIME'=> $this->input->post('eveStartTime'),
                'SFT_EVE_ENDTIME'=> $this->input->post('eveEndTime'),
                'SFT_BREAK_HOUR'=> $this->input->post('breakTime'),
                'SFT_WORKING_HOUR'=> $this->input->post('workHours'),
                'SFT_DAY'=> $this->input->post('numOfDays'),
                'SFT_MONTH'=> $month,
                'SFT_YEAR'=> $year,
		'SFT_LOP_LEAVE'=> $this->input->post('lopLeave'),
		'SFT_CL_LEAVE'=> $this->input->post('clLeave'),
		'SFT_STATUS'=>$this->input->post('status'),
		'SFT_REMARKS'=>$this->input->post('remarks'),
		'SFT_VALUE'=>'1'
	    );
            $this->db->where('SFT_ID', $val);
            $this->db->update('shift_details',$data);
            redirect('payslipCtr/attendance');
        }
	else if($statusVal=='Half-Day'){
            $data=array(
               'SFT_EMP_NAME'=> $this->input->post('emp_name'),
                'SFT_DATE'=> $date,
                'SFT_MRNG_STRATTIME'=> $this->input->post('mrngStartTime'),
                'SFT_MRNG_ENDTIME'=> $this->input->post('mrngEndTime'),
                'SFT_EVE_STARTTIME'=> $this->input->post('eveStartTime'),
                'SFT_EVE_ENDTIME'=> $this->input->post('eveEndTime'),
                'SFT_BREAK_HOUR'=> $this->input->post('breakTime'),
                'SFT_WORKING_HOUR'=> $this->input->post('workHours'),
                'SFT_DAY'=> $this->input->post('numOfDays'),
                'SFT_MONTH'=> $month,
                'SFT_YEAR'=> $year,
		'SFT_LOP_LEAVE'=> $this->input->post('lopLeave'),
		'SFT_CL_LEAVE'=> $this->input->post('clLeave'),
		'SFT_STATUS'=>$this->input->post('status'),
		'SFT_REMARKS'=>$this->input->post('remarks'),
		'SFT_VALUE'=>'0.5'
	    );
            $this->db->where('SFT_ID', $val);
            $this->db->update('shift_details',$data);
            redirect('payslipCtr/attendance');
        }
	else{
            $data=array(
                'SFT_EMP_NAME'=> $this->input->post('emp_name'),
                'SFT_DATE'=> $date,
                'SFT_MRNG_STRATTIME'=> $this->input->post('mrngStartTime'),
                'SFT_MRNG_ENDTIME'=> $this->input->post('mrngEndTime'),
                'SFT_EVE_STARTTIME'=> $this->input->post('eveStartTime'),
                'SFT_EVE_ENDTIME'=> $this->input->post('eveEndTime'),
                'SFT_BREAK_HOUR'=> $this->input->post('breakTime'),
                'SFT_WORKING_HOUR'=> $this->input->post('workHours'),
                'SFT_DAY'=> $this->input->post('numOfDays'),
                'SFT_MONTH'=> $month,
                'SFT_YEAR'=> $year,
		'SFT_LOP_LEAVE'=> $this->input->post('lopLeave'),
		'SFT_CL_LEAVE'=> $this->input->post('clLeave'),
		'SFT_STATUS'=>$this->input->post('status'),
		'SFT_REMARKS'=>$this->input->post('remarks'),
		'SFT_VALUE'=>'1'
            );
	    $this->db->where('SFT_ID', $val);
            $this->db->update('shift_details',$data);
            redirect('payslipCtr/attendance');
        }
        
    }
    
    function getShiftDetails($EmpName,$EmpDate){
        $sql = "SELECT COUNT(*) AS NumberOfDetails FROM shift_details WHERE SFT_EMP_NAME='$EmpName' AND SFT_DATE='$EmpDate'";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    
    function getShiftDetailsData($EmpName,$EmpDate){
        $sql = "SELECT * FROM shift_details WHERE SFT_EMP_NAME='$EmpName' AND SFT_DATE='$EmpDate'";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    
    function getReportValues($var){
	
	    $sql="select EMP_JOINING_DATE from emp_details where EMP_FIRST_NAME='$var'";
	    $joining_date=$this->db->query($sql)->result_array();
	    $join_date=$joining_date[0]['EMP_JOINING_DATE'];
	    
	    
	    $date_arr = explode('/',$join_date);
	    $chained = $date_arr[2].'-'.$date_arr[1].'-'.$date_arr[0];
	    $explode_month=$date_arr[1];
	    $monthArray=array('01'=>'null','01'=>'Jan','02'=>'Feb','03'=>'Mar','04'=>'Apr','05'=>'May','06'=>'Jun','07'=>'Jul','08'=>'Aug','09'=>'Sep','10'=>'Oct','11'=>'Nov','12'=>'Dec');
	    $monthreal_data=array_search($explode_month, $monthArray);
	    $chained1=$date_arr[2].'-'.$monthreal_data.'-'.$date_arr[0];
	    
	    
	    
	$sql = "SELECT * FROM shift_details where SFT_EMP_NAME='$var' AND SFT_DATE >= '$chained1'";
	return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    
    function sumvalue($var)
    {
	$sql = "SELECT ROUND(SUM(SFT_WORKING_HOUR),2) as sumdata FROM shift_details where SFT_EMP_NAME='$var' ";
	return $this->db->query($sql, $return_object = TRUE)->result_array();
	
    }
    function checkdate()
    {
	$fdate=$this->input->post('fromdate');
	$tdate=$this->input->post('todate');
	$ename=$this->input->post('ename');
	
	$sql = "SELECT ROUND(SUM(SFT_WORKING_HOUR),2) as checkvalue FROM shift_details where SFT_EMP_NAME='$ename' AND SFT_DATE BETWEEN '$fdate' AND '$tdate';";
	//print_r($sql);exit;
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }

   function checkquery()
    {
	$fdate=$this->input->post('fromdate');
	$tdate=$this->input->post('todate');
	$ename=$this->input->post('ename');
	$sql = "SELECT * FROM shift_details where SFT_EMP_NAME='$ename' AND SFT_DATE BETWEEN '$fdate' AND '$tdate'";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }

    //SHIFT DETAILS END
    
      function manual_Payslip_insert(){
    $date=$this->input->post('month_year');
    $data=explode("-",$date);
   //echo"<pre>";print_r(explode("-",$date));exit;

    $payslip=array(
	'EMP_NAME'=>$this->input->post('emp_name'),
	'EMP_ID'=>$this->input->post('emp_id'),
	'JOIN_DATE'=>$this->input->post('joindate'),
	'PAY_DATE'=>$this->input->post('paydate'),
        'MONTH_YEAR'=>$this->input->post('month_year'),
	'SALARY_PAID'=>$date,
	'DATE'=>$data[0],
	'MONTH'=>$data[1],
	'YEAR'=>$data[2],
	'BASIC_SALARY'=>$this->input->post('basic_salary'),
	'INCENTIVE'=>$this->input->post('incentive'),
	'TRAVELLING_ALLOWANCE'=>$this->input->post('TA'),
	'HRA'=>$this->input->post('HRA'),
	'DA'=>$this->input->post('DA'),
	'GROSS_EARNINGS'=>$this->input->post('gross_earnings'),
	'DESIGNATION'=>$this->input->post('designation'),
	'ACCOUNT_NO'=>$this->input->post('account'),
	'LOP'=>$this->input->post('LOP'),
	'ADVANCE_SALARY'=>$this->input->post('advance_salary'),
	'OTHER_DEDUCTIONS'=>$this->input->post('other_dedcution'),
	'GROSS_DEDUCTIONS'=>$this->input->post('gross_dedcution'),
	'NET_AMOUNT'=>$this->input->post('net_amount'),
	'EMP_DEPARTMENT'=>$this->input->post('emp_department'),
	'PAYSLIP_NO'=>$this->input->post('payslip_no'),
	'TOTAL_WORKING_DAYS'=>$this->input->post('tworking_days'),
	'WORKED_DAYS'=>$this->input->post('worked_days'),
	'INCREMENT'=>$this->input->post('increment'),
	'ARRER_CHECK'=>$this->input->post('check'),
	'ARRER_AMOUNT'=>$this->input->post('arrer_amount'),
	'ARRER_DAYS'=>$this->input->post('arrer_days'),
	'IN_WORD'=>$this->input->post('in_word'),
	'REMARKS'=>$this->input->post('remarks')
	
    );
    //echo "<pre>";print_r($payroll);
    $this->db->insert('manual_payslip',$payslip);
    redirect ('PayslipCtr/Manualreport');
   }

    function Manualreport(){
	$this->db->select('*');
	$this->db->from('manual_payslip');
	$salarydata=$this->db->get();
	return $salarydata->result_array(); 
    }

    function payroll_table_view(){
	$this->db->select('*');
	$this->db->from('payroll_details');
	$salarydata=$this->db->get();
	return $salarydata->result_array(); 
    }

//forget password email start

 function forget_email($email)
    {
	$sql="select * from company_details where CMP_EMAIL='$email'";
	return $this->db->query($sql)->result_array();
    }


//Change password start

 function change_password($sess)
    {
	$admin_name=$sess['USER_NAME'];
	//print_r($admin_name);exit;
	
	$old=$this->input->post('old_pwd');
	$newp=$this->input->post('new_pwd');
        $cnewp=$this->input->post('cnew_pwd');
	
	$sqll="select * from company_details where CMP_PWD='$old'";
	$result=$this->db->query($sqll)->result_array();
	if(count($result)==1)
	{
	   $sql="UPDATE company_details SET CMP_PWD='$newp',CMP_VPWD='$cnewp' WHERE CMP_ADMINNAME = '$admin_name'";
	   return $this->db->query($sql);
	   
	}
	else
	{
	    echo "<script>alert('Invalid Old Password Plz Try Again');</script>";
	}	    
    }

//Change password end

//PAYROLL START
    
    function payroll_insert($pay_no){
      $pay_unique_no=$pay_no;
      $date=$this->input->post('month_year');
      $data=explode("-",$date);
$in=$this->input->post('Incentive');
if($in=='')
{
$in=0;
}
$ta=$this->input->post('TA');
if($ta=='')
{
$ta=0;
} 
$lop=$this->input->post('LOP');   
if($lop=='')
{
$lop=0;
}

$adv_sal=$this->input->post('Advance');
if($adv_sal=='')
{
$adv_sal=0;
}
$other_ded=$this->input->post('Deduction');
if($other_ded=='')
{
$other_ded=0;
}

$inc=$this->input->post('Increment');
if($inc=='')
{
$inc=0;
}
$hra=$this->input->post('HRA');
if($hra=='')
{
$hra=0;
}
$da=$this->input->post('DA');
if($da=='')
{
$da=0;
}

    $payroll=array(
	'EMP_NAME'=>$this->input->post('emp_name'),
         'EMP_ID'=>$this->input->post('emp_id'),
	'MONTH_YEAR'=>$date,
	'MONTH'=>$data[1],
	'YEAR'=>$data[2],
	'BASIC_SALARY'=>$this->input->post('basic_salary'),
	'INCENTIVE'=>$in,
	'TRAVELLING_ALLOWANCE'=>$ta,
	'HRA'=>$hra,
	'DA'=>$da,
	'GROSS_EARNINGS'=>$this->input->post('gross_earnings'),
	'EMP_EMAIL'=>$this->input->post('emp_email'),
	'LOP'=>$lop,
	'ADVANCE_SALARY'=>$adv_sal,
	'OTHER_DEDUCTIONS'=>$other_ded,
	'GROSS_DEDUCTIONS'=>$this->input->post('gross_dedcution'),
	'NET_AMOUNT'=>$this->input->post('net_amount'),
	'EMP_DEPARTMENT'=>$this->input->post('department'),
	'PAYSLIP_NO'=>$pay_unique_no,
	'TOTAL_WORKING_DAYS'=>$this->input->post('working_days'),
	'WORKED_DAYS'=>$this->input->post('worked_days'),
	'INCREMENT'=>$inc,
	'IN_WORD'=>$this->input->post('in_word'),
	'REMARKS'=>$this->input->post('remarks')
	
    );
   
    $this->db->insert('payroll_details',$payroll);
              $pay_num=substr($pay_unique_no,7);
		$char="CTS/PS/";
		$pay= $pay_num + 1;
		$new_pay_no=$char.$pay;
		$data=array(
		    'payslip_no'=>$new_pay_no
                );
		
	$this->db->update('payslip_no',$data);
    redirect ('PayslipCtr/payroll');
   }

    function payroll_edit($id){
    $this->db->select('*');
    $this->db->from('payroll_details');
    $this->db->where('ID',$id);
    $salaryedit=$this->db->get();
    return $salaryedit->result_array(); 
   }
   
    function getHistory($get){
   $sql = "SELECT * FROM payroll_details WHERE EMP_NAME='$get'";
   return $this->db->query($sql)->result_array();
   }
    function Manual_pay($get){
	$sql = "SELECT * FROM manual_payslip WHERE EMP_NAME='$get'";
	return $this->db->query($sql)->result_array();
    }

    function getEmpDetails($user){
	
	$sql = "SELECT * FROM emp_details WHERE EMP_FIRST_NAME='$user'";
	return $this->db->query($sql)->result_array();
    }

      function getincrement_data($user,$month){
 $data = explode('-',$month);
 $month_year=$data[1].'-'.$data[2];
 $sql="select * from inc_dec_details where EMP_NAME='$user' and INC_DEC_EFFECTIVE_MONTH='$month_year'";
 $test=$this->db->query($sql)->result_array();
 if($test){
     return $test[0]['AMOUNT'];
 }else {
     return 0;
 }
}
   
   function payroll_update($id){
      $date=$this->input->post('month_year');
      $data=explode("-",$date);
    $this->db->where('id',$id);
     $payroll=array(
	'EMP_NAME'=>$this->input->post('emp_name'),
	'MONTH_YEAR'=>$date,
	'MONTH'=>$data[1],
	'YEAR'=>$data[2],
	'BASIC_SALARY'=>$this->input->post('basic_salary'),
	'INCENTIVE'=>$this->input->post('incentive'),
	'TRAVELLING_ALLOWANCE'=>$this->input->post('TA'),
	'HRA'=>$this->input->post('HRA'),
	'DA'=>$this->input->post('DA'),
	'GROSS_EARNINGS'=>$this->input->post('gross_earnings'),
	
	'LOP'=>$this->input->post('LOP'),
	'ADVANCE_SALARY'=>$this->input->post('advance_salary'),
	'OTHER_DEDUCTIONS'=>$this->input->post('other_detc'),
	'GROSS_DEDUCTIONS'=>$this->input->post('gross_deductions'),
	'NET_AMOUNT'=>$this->input->post('net_amount'),
	'EMP_DEPARTMENT'=>$this->input->post('department'),
	'PAYSLIP_NO'=>$this->input->post('payslip_no'),
	'TOTAL_WORKING_DAYS'=>$this->input->post('working_days'),
	'WORKED_DAYS'=>$this->input->post('worked_days'),
	'INCREMENT'=>$this->input->post('increment'),
	'IN_WORD'=>$this->input->post('in_word'),
	'REMARKS'=>$this->input->post('remarks')
    );
    $this->db->update('payroll_details',$payroll);
    redirect ('PayslipCtr/payroll');
   }
    function payroll_delete($id){
	$this->db->where('ID',$id);
	$this->db->delete('payroll_details');
	redirect ('PayslipCtr/payroll');
    }
    function fetchdata(){
	$this->db->select('EMP_NAME');
	$this->db->from('inc_dec_details');
	$data=$this->db->get();
	return $data->result_array();
    }

    //PAYROLL END
    
    
    function srecords()
    {
	$ename=$this->input->post('empname');
	$emonth=$this->input->post('empmonth');
	$eyear=$this->input->post('empyear');
	
	$sql="SELECT * FROM shift_details WHERE SFT_EMP_NAME='$ename' AND SFT_MONTH='$emonth' AND SFT_YEAR='$eyear' AND SFT_STATUS!='present' ";
	
	return $this->db->query($sql)->result_array();
	 //print_r($res);exit;
	
    }
    function lop_count(){
	$ename=$this->input->post('empname');
	$emonth=$this->input->post('empmonth');
	$eyear=$this->input->post('empyear');
	
	
	$sql="SELECT COUNT(SFT_STATUS) AS lop FROM shift_details WHERE SFT_EMP_NAME='$ename' AND SFT_MONTH='$emonth' AND SFT_YEAR='$eyear' AND SFT_STATUS='LOP'";
	return $this->db->query($sql)->result_array();
       
    }
     function cl_count(){
	$ename=$this->input->post('empname');
	$emonth=$this->input->post('empmonth');
	$eyear=$this->input->post('empyear');
	$sql="SELECT COUNT(SFT_STATUS) AS cl FROM shift_details WHERE SFT_EMP_NAME='$ename' AND SFT_MONTH='$emonth' AND SFT_YEAR='$eyear' AND SFT_STATUS='CL'";
	return $this->db->query($sql)->result_array();
    }
     function total_count(){
	$ename=$this->input->post('empname');
	$emonth=$this->input->post('empmonth');
	$eyear=$this->input->post('empyear');
	$sql="SELECT COUNT(SFT_STATUS) AS total FROM shift_details WHERE SFT_EMP_NAME='$ename' AND SFT_MONTH='$emonth' AND SFT_YEAR='$eyear' AND SFT_STATUS!='present'";
	return $this->db->query($sql)->result_array();
    }

    

    
    //INCREMENT DECREMENT START
     
    function insert(){
	
    $data=array(
	'EMP_NAME' => $this->input->post('emp_name'),
	'EMP_ID' => $this->input->post('emp_id'),
	'EMP_DEPARTMENT' => $this->input->post('department'),
	'INC_DEC_TYPE' => $this->input->post('inc_dec_option'),
	'AMOUNT' => $this->input->post('inc_dec_amount'),
	'INC_DEC_EFFECTIVE_MONTH' => $this->input->post('month_of_inc_dec'),
	'REMARKS' => $this->input->post('remarks')
	);
         
	$this->db->insert('inc_dec_details',$data);
	redirect('PayslipCtr/viewIncrement');
    }
    function viewtable(){
	$this->db->select('*');
	$this->db->from('inc_dec_details');
	$data=$this->db->get();
	return $data->result_array();
    }
    function fetch_data($sysid){
	$sql="SELECT * FROM emp_details WHERE EMP_ID='$sysid'";
	return $this->db->query($sql)->result_array();
	//print_r($ss);exit;
    }
    function emp_details(){
	$this->db->select('EMP_ID,EMP_NAME');
	$this->db->from('inc_dec_details');
	$res=$this->db->get();
	return $res->result_array();
    }

   function cmpny_details_insert()
    {
	$cname=$this->input->post('name');
	$caddress=$this->input->post('caddress');
	$clogoimages=$this->input->post('logoimage');
	
	
	$sql="update chng_cmpy_details set cname='$cname',caddress='$caddress',clogo='$clogoimages' where cmpy_role='company'";
	return $this->db->query($sql);
    }
      function cmpny_details_insert1()
      {
	$sql="select * from chng_cmpy_details";
	return $this->db->query($sql)->result_array();
      }
    
    


}