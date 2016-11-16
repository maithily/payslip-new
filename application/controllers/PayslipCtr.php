<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class PayslipCtr extends CI_Controller {
    
    public function __construct()
    {
	parent::__construct();
        $this->load->model('PayslipModel','ps_model');
	$this->load->library('session');
        $this->load->helper('url');
	$this->load->library('email');
	$this->load->helper('file');
	$this->load->library('Datatables');
	$this->load->helper('dompdf_helper');
	$this->load->helper('dompdf/dompdf_config');

    }
    public function index()
    {
        $sess = $this->session->userdata('user_session');
        if(!$sess){
     $data['row']=$this->ps_model->companydetail();
            $this->load->view('login',$data);
        }else{
            redirect('PayslipCtr/user');
        }
    }
     function manual_payslip_delete()
	{
	    $id=$this->input->post('id');
	    $data=$this->ps_model->manual_payslip_delete($id);
	}
     function attendance_del()
    {
     $id=$this->input->post('id');
     $this->ps_model->attendance_del($id);
     }

      function del1()
	{
	    
	    $id=$this->input->post('id');
	    for ($i = 0; $i < count($id); $i++) {
	    $data=$this->ps_model->delete_row1($id[$i]);
	    }
	}


     function pdfattachment_Email($name){
      $getslip['datas']=$this->ps_model->getfrom_empdetail($name);
       $getslip['datas1']=$this->ps_model->getfrom_salarydetail($name);
        return $dataa=$this->load->view('test1',$getslip,true);
    }
    function check(){
	
	if ($this->input->post('proceed')=='yes')
	{	
	    $this->db->where('CMP_ADMINNAME',$this->input->post('UserName'));
            $this->db->where('CMP_PWD',$this->input->post('PassWord'));
	    $this->db->where('CMP_NAME',$this->input->post('emp'));
            $check=$this->db->get('company_details');
	}
        if($check->num_rows()==1)
            {
                $data=array(
                    'USER_NAME' =>  $this->input->post('UserName'),
                );
                $this->session->set_userdata('user_session',$data);
                redirect('PayslipCtr/user');
            }
            else{
                $this->index();
            }
    } 
    function user()
    {
        $sess = $this->session->userdata('user_session');
        if($sess){
        $data['total_employee']=$this->ps_model->get_total_employee();
           $this->load->view('dashboard',$data);
        }else{
            redirect('PayslipCtr/index');
        }
    }

    
function check_field_availablitly()
 {
  
  $get_result=$this->ps_model->check_field_availablitly();
  if(!$get_result)
  {
   echo 'Field already in use.';

  }
  else
  {

   echo 'Field Available';

  }

 }

      function getUserdata(){
 $where= $this->input->post('emp_name');
 //print_r($where['emp_name']);exit;
 $data= $this->ps_model->getShift_time($where);
 //print_r($data);exit;
 echo json_encode($data);
    }

function getEmpId(){
	$user=$this->input->post('name');
	$result=$this->ps_model->getEmpId($user);
	echo json_encode($result);
    }

    function leave_Status(){
	$sess = $this->session->userdata('user_session');
        if($sess){
	    $this->load->view('header');
	    $this->load->view('leave_Status');
	}
	else{
            redirect('PayslipCtr/index');
        }
    }
    function increment(){
	$sess = $this->session->userdata('user_session');
        if($sess){
	    $this->load->view('header');
	    $data['value']=$this->ps_model->viewtable();
	    $this->load->view('inc_dec',$data);
	}
	else{
            redirect('PayslipCtr/index');
        }
    }
function inc_dec(){
	$sess = $this->session->userdata('user_session');
        if($sess){
	    $this->load->view('header');
	    
	    $data['result']=$this->ps_model->get_hra_per();
		
	    $data['result1']=$this->ps_model->get_da_per();
	    $this->load->view('inc-ded-master',$data);
        }else{
            redirect('payslipCtr/index');
        }
    }


    function increment_edit($id){
	$this->load->view('header');
	$data['increment_edit']=$this->ps_model->increment_edit($id);
	$data['data1'] = $this->ps_model->insertdata();
	$this->load->view('increment_edit',$data);
    }
    function increment_update($id){
	$data['increment_edit']=$this->ps_model->increment_update($id);
    }
    
    function increment_delete($id){
	$data['payroll_edit']=$this->ps_model->increment_delete($id);
    }

     function pdf_Email($name,$month){
	$getslip['datas']=$this->ps_model->getfrom_empdetail($name);
	$getslip['datas1']=$this->ps_model->getfrom_salarydetail($name,$month);
	//echo"<pre>";print_r($getslip);exit;
	return $dataa=$this->load->view('test1',$getslip,true);
    }
 
 
  function send_email_pdf(){
	
	$config = array(
	    'protocol' => 'smtp',
	    'smtp_host' => 'ssl://smtp.googlemail.com',
	    'smtp_port' => 465,
	    'smtp_user' => 'manisrikan@gmail.com', // change it to yours
	    'smtp_pass' => '16121993', // change it to yours
	    'mailtype' => 'html',
	    'charset' => 'iso-8859-1',
	    'wordwrap' => TRUE
	);
	    $this->email->initialize($config);
	    $this->load->library('email', $config);
	    
	    $name = $_POST['emp_name'];
            $month = $_POST['month'];
	    $email=$this->ps_model->getemailid($name);
	    $to=$email[0]['EMP_EMAIL'];
	    //print_r($to);exit;
	    //$to_mail=$_POST['to'];
	    $htmlpdf = $this->pdf_Email($name,$month);
	    $dompdf = new DOMPDF();
	    $dompdf->set_paper('A4','landscape');
	    $dompdf->load_html($htmlpdf);
	    $dompdf->render();
	    $output = $dompdf->output();
	    $FileName = 'Payslip.pdf';
	    $Payslip = file_put_contents("application/uploads/$FileName", $output);
	    $this->email->set_newline("\r\n");
	    $this->email->from('manisrikan@gmail.com','Manikandan');
	    $this->email->to($to);
	    $this->email->subject('Hai');
	    $this->email->attach("http://cloudlogic.in/payslip/application/uploads/".$FileName);
	    if($this->email->send())
	    {
		redirect('payslipCtr/payslip_G');
	    }
	    $this->email->clear(TRUE);
    }

  function payroll_Save_Pdf(){
	$sql="SELECT * FROM payslip_no";
	$result=$this->db->query($sql)->result_array();
	$pay_no=$result[0]['payslip_no'];
	$data = $this->ps_model->payroll_Save_Pdf($pay_no);
	//echo json_encode($data);
    }
    function payroll_Save_Pdf_email(){

	$sql="SELECT * FROM payslip_no";
	$result=$this->db->query($sql)->result_array();
	$pay_no=$result[0]['payslip_no'];
	$this->ps_model->payroll_Save_Pdf_email($pay_no);
	//echo json_encode($data);
    }


    function viewIncrement(){
	$sess = $this->session->userdata('user_session');
        if($sess){
	    $this->load->view('header');
            $data['value']=$this->ps_model->viewtable();
	    $this->load->view('Inc_Dec_View',$data);
	}
	else{
            redirect('PayslipCtr/index');
        }
    }
    function addEmp(){
	$sess = $this->session->userdata('user_session');
        if($sess){
	    $this->load->view('header');
	    $this->load->view('add_employee');
	}
	else{
            redirect('PayslipCtr/index');
        }
    }
    

    function salary(){
	$sess = $this->session->userdata('user_session');
        if($sess){
	    $this->load->view('header');
	    $this->load->view('salary_details');
	}
	else{
            redirect('PayslipCtr/index');
        }
    }
       function manual(){
	$sess = $this->session->userdata('user_session');
        if($sess){
	    $this->load->view('header');
	    $this->load->view('add_manual_payment');
	}
	else{
            redirect('PayslipCtr/index');
        }
    }
    
    function manualPayslip(){
	$sess = $this->session->userdata('user_session');
        if($sess){
	    $this->load->view('header');
	    $this->load->view('Payslip_manual');
	}
	else{
            redirect('PayslipCtr/index');
        }
    }
    function leaveDetails(){
	$sess = $this->session->userdata('user_session');
        if($sess){
	    $this->load->view('header');
	    $this->load->view('leave_details');
	}
	else{
            redirect('PayslipCtr/index');
        }
    }
     function srecords()
    {
    $data['tbl']=$this->ps_model->srecords();
    $data['lopcount']=$this->ps_model->lop_count();
    $data['clcount']=$this->ps_model->cl_count();
    $data['totalcount']=$this->ps_model->total_count();
      //print_r($data['totalcount']);exit;
    echo json_encode($data);
    
    }
    
    //PAYROLL START
    
    function payroll(){
	$sess = $this->session->userdata('user_session');
        if($sess){
	$this->load->view('header');
	$data['payroll'] = $this->ps_model->payroll_table_view();
	$data['data1'] = $this->ps_model->fetchdata();
	$this->load->view('Payroll',$data);
	}
	else{
            redirect('PayslipCtr/index');
        }
    }
    
//dropdown
  function getEmpDetails(){
 $user=$this->input->post('pickername1');
 $month=$this->input->post('monthy1');
 if($this->input->post('pickername')=='test') //Date picker
 {
     $result['calc']=$this->ps_model->calculate_hrs($user,$month);
     $result['disp']=$this->ps_model->working($month);
     $result['inc']=$this->ps_model->getincrement_data($user,$month);
     echo json_encode($result);
 }else if($this->input->post('pickername')=='test1') //dropdown list
 {
     $result['query']=$this->ps_model->getEmpDetails($user);
     $result['disp1']=$this->ps_model->working($month);
     $result['calc1']=$this->ps_model->calculate_hrs($user,$month);
     if($month){
  $result['inc1']=$this->ps_model->getincrement_data($user,$month);
     }
     echo json_encode($result);
 }
    }
      

     function getPayslipNo(){
	$user=$this->input->post('name');
	$result=$this->ps_model->getPayslipNo($user);
	
	echo json_encode($result);
    }
    
    function payroll_insert(){

	$sql="SELECT * FROM payslip_no"; 
	$result=$this->db->query($sql)->result_array();
	$pay_no=$result[0]['payslip_no'];
	$this->ps_model->payroll_insert($pay_no);
    }
    function payroll_edit($id){
	$this->load->view('header');
	$data['payroll_edit']=$this->ps_model->payroll_edit($id);
	$data['data1'] = $this->ps_model->fetchdata();
	$this->load->view('Payroll_edit',$data);
    }

   function getHistory(){
	$get =$this->input->post('name');
	$data=$this->ps_model->getHistory($get);
//print_r($data);exit;
$res = 1;
        foreach($data as $row)  {  ?>
	 <tr id="refreshData">
		<td><?php echo $res++ ?></td>		  
		<td id="name"><center><?php echo $row['EMP_NAME']?></center></td>
		<td id="month"><center><?php echo $row['MONTH_YEAR']?></center></td>
		<td id="dep"><center><?php echo $row['EMP_DEPARTMENT']?></center></td>
		<td id="pay_no"><center><?php echo $row['PAYSLIP_NO']?></center></td>
		<td id="total"><center><?php echo $row['TOTAL_WORKING_DAYS']?></center></td>
		<td id="work"><center><?php echo $row['WORKED_DAYS']?></center></td>
		<td id="basic"><center><?php echo $row['BASIC_SALARY']?></center></td>
		<td id="increment"><center><?php echo $row['INCREMENT']?></center></td>
		<td id="incentive"><center><?php echo $row['INCENTIVE']?></center></td>
		<td id="TA"><center><?php echo $row['TRAVELLING_ALLOWANCE']?></center></td>
		<td id="HRA"><center><?php echo $row['HRA']?></center></td>
		<td id="DA"><center><?php echo $row['DA']?></center></td>
		<td id="gross_ear"><center><?php echo $row['GROSS_EARNINGS']?></center></td>
		<td id="LOP"><center><?php echo $row['LOP']?></center></td>
		<td id="adv_salary"><center><?php echo $row['ADVANCE_SALARY']?></center></td>
		<td id="ot_edu"><center><?php echo $row['OTHER_DEDUCTIONS']?></center></td>
		<td id="gross_deduc"><center><?php echo $row['GROSS_DEDUCTIONS']?></center></td>
		<td id="remarks"><center><?php echo $row['REMARKS']?></center></td>
		<td id="net_amt"><center><?php echo $row['NET_AMOUNT']?></center></td>
								
								
	</tr>
	 <?php } 
        
    }
    function Manual_pay(){
	$get =$this->input->post('name');
	$data=$this->ps_model->Manual_pay($get);
	echo json_encode($data);
    }

     function reportView()
	{
	
	$this->load->view('header');
	$data['payroll'] = $this->ps_model->payroll_table_view();
	$this->load->view('reportPage',$data);
	}    

    function payroll_update($id){
	$data['payroll_edit']=$this->ps_model->payroll_update($id);
    }
    function payroll_delete($id){
	$data['payroll_edit']=$this->ps_model->payroll_delete($id);
    }
    
    //PAYROLL END
    
    //EMPLOYEE DETAILS
    public function insert_employee_list()
    {
         $sql="SELECT * FROM  employee_id";
	$result=$this->db->query($sql)->result_array();
	$emp_id=$result[0]['employee_id'];

	$this->ps_model->insert_employee_list($emp_id);
    }
	
    public function employee_list()
    {
	$data['result'] = $this->ps_model->view_employee_list();	
	$this->load->view('header');
	$this->load->view('employee_list',$data);
    }
	
    function edit_employee_list($id)
	{
	
	$data['result']=$this->ps_model->Fetchedit_data($id);
	$this->load->view('header');
	$this->load->view('update_employee_list',$data);
	}
	
	public function update_employee_list($id)
	{
	    $this->ps_model->update_employee_list($id);
	}
    
    //REPORT START
    
        public function attendance_details()
	{
	    $this->load->view('header');
	    $this->load->view('attendance_details');
	}
	public function employee_report()
	{
	    $this->load->view('header');
	    $this->load->view('employee_report');
	}
	public function payroll_report()
	{
	    $this->load->view('header');
	    $this->load->view('payroll_report');
	}
	
	function attendance_monthwise(){
		$data=$this->ps_model->attendance_monthwise();
		foreach($data as $row) { ?>
		<tr>    
		<td><?php echo $row['SFT_EMP_NAME'];?></td>
		<td><?php echo $row['SFT_DATE'];?></td>
		<td><?php echo $row['SFT_STATUS'];?></td>
				
		</tr>
		 <?php }
	}
	
	
	
	function salary_monthwise()
	{
		
		$data=$this->ps_model->salary_monthwise();
		//echo count($data); exit;
		//print_r($data); exit;
		foreach($data as $row)
		{
			?>
			<tr>
			        <td><?php echo $row['EMP_ID'];?></td>
				<td><?php echo $row['EMP_NAME'];?></td>
				<td><?php echo $row['EMP_EMAIL'];?></td>
				<td><?php echo $row['EMP_DEPARTMENT'];?></td>
				<td><?php echo $row['SALARY_PAID'];?></td>
				<td><?php echo $row['TOTAL_WORKING_DAYS'];?></td>
				<td><?php echo $row['WORKED_DAYS'];?></td>
				<td><?php echo $row['BASIC_SALARY'];?></td>
				<td><?php echo $row['HRA'];?></td>
				<td><?php echo $row['DA'];?></td>
				<td><?php echo $row['TRAVELLING_ALLOWANCE'];?></td>
				<td><?php echo $row['INCENTIVE'];?></td>
				<td><?php echo $row['INCREMENT'];?></td>
				<td><?php echo $row['GROSS_EARNINGS'];?></td>
				<td><?php echo $row['LOP'];?></td>
				<td><?php echo $row['ADVANCE_SALARY'];?></td>
				<td><?php echo $row['OTHER_DEDUCTIONS'];?></td>
				<td><?php echo $row['GROSS_DEDUCTIONS'];?></td>
				<td><?php echo $row['NET_AMOUNT'];?></td>
		<tr>
	<?php
		}
		
	}
	
	function shift_monthwise()
	{
		
		$data=$this->ps_model->shift_monthwise();
		//echo count($data); exit;
		//print_r($data); exit;
		foreach($data as $row)
		{
			?>
		<tr>
		    <td><?php echo $row['SFT_EMP_NAME'];?></td>
		    <td><?php echo $row['SFT_DATE'];?></td>
		    <td><?php echo $row['SFT_MRNG_STRATTIME'];?></td>
		    <td><?php echo $row['SFT_MRNG_ENDTIME'];?></td>
		    <td><?php echo $row['SFT_EVE_STARTTIME'];?></td>
		    <td><?php echo $row['SFT_EVE_ENDTIME'];?></td>
		    <td><?php echo $row['SFT_BREAK_HOUR'];?></td>
		    <td><?php echo $row['SFT_WORKING_HOUR'];?></td>
		    <td><?php echo $row['SFT_STATUS'];?></td>
		</tr>
	<?php
		}
		
	}
	
	
	function del()
	{
		
		$id=$this->input->post('id');
		$data=$this->ps_model->delete_row($id);
		
	}
	
    //REPORT END
    //ATTENDANCE LOG VIKI START
    function attendance(){
	$sess = $this->session->userdata('user_session');
        if($sess){
	    $this->load->view('header');
	    $display['rawdata']= $this->ps_model->insertdata();
	   $display['result']= $this->ps_model->view_master_shift();
	    $this->load->view('attendance_daily',$display);
	    
	}
	else{
            redirect('PayslipCtr/index');
        }
    }
    function attendanceLog(){
	
	$this->load->view('header');
        $display['rawdata']= $this->ps_model->insertdata();
	$this->load->view('attendance_log',$display);
    }

     function getIncrementVal(){
	$user=$this->input->post('pickername');
	$month=$this->input->post('monthy');
	$result['res']=$this->ps_model->getIncrement($user,$month);
	
	echo json_encode($result);
    }

    function attendfetch()
    {
	$name=$this->input->post('name');
	$var =$this->ps_model->attendfetch($name);
	echo json_encode($var);
    }
    function showrecords()
    {
	$data['display']=$this->ps_model->showrecords();
	$data['design']=$this->ps_model->designation();
	$data['record']=$this->ps_model->present();
	$data['LOP']=$this->ps_model->LOP();
	$data['CL']=$this->ps_model->CL();
	$data['holiday']=$this->ps_model->holidays();
	$data['Hrs_daterange']=$this->ps_model->total_hrs_daterange();
	$data['Hrs_monthly']=$this->ps_model->total_hrs_monthly();
	
	$this->load->view('header');
	if($_POST['radio']=='DataRange'){
	    $this->load->view('attendance_report_datarange',$data);
	}else{
	    $this->load->view('attendance_report',$data);
	}
    }
  

    function dattendance()
    {
	
	$data=$this->ps_model->dattendance();
	echo json_encode($data);
	
    }
    function dailyattendance()
    {
	$data=$this->ps_model->dailyattendance();
	
	echo json_encode($data);
	
    }
    //ATTENDANCE LOG VIKI END
    
    //SHIFT DETAILS START
    function getShiftDetails(){
	    
	    $EmpName = $_POST['emp_name'];
	    $EmpDate = $_POST['currentVal'];
	    $mode = $_POST['mode'];
	    $data = $this->ps_model->getShiftDetails($EmpName,$EmpDate);
	    if($data[0]['NumberOfDetails']== 0 ){
		$var = 'Add';
		echo json_encode($var);
	    }else{
		$ShiftDetailsData = $this->ps_model->getShiftDetailsData($EmpName,$EmpDate);
		echo json_encode($ShiftDetailsData);
	    }
	}
	
	function getShiftDetailsNew(){
	    if($this->input->post('save')=='Submit'){
		
		$this->ps_model->shift_details();
		
	    }
	    if($this->input->post('save')=='Update'){
		
		$val = $this->input->post('id_val');
		$this->ps_model->update_Shift_details($val);
		
	    }
	}
	
	function showRecord($var){
	    $data['getVal']=$this->ps_model->getReportValues($var);
	    $data['sumvalue']=$this->ps_model->sumvalue($var);
	    
	    $this->load->view('header');
	    $this->load->view('shift_report',$data);
	  
	}
	
	function checkdata()
	{
	   $data=$this->ps_model->checkdate();
           $data['query']=$this->ps_model->checkquery();
	    echo json_encode($data);
	}
       function closedata()
	{
	    $this->load->view('header');
	    $this->load->view('shift_view');
	}
    
    
    
    //SHIFT DETAILS END

    // INCREMENT DECREMENT START
    
    function insert(){
	$this->ps_model->insert();
    }

     function fetch_data(){
	$sysid=$this->input->post('emp_id');
	$res =$this->ps_model->fetch_data($sysid);
	//print_r($res);exit;
	echo json_encode($res);
     }
     //INCREMENT DECREMENT END

    
    function holiday(){
	
	$sess = $this->session->userdata('user_session');
	 if($sess){
	    $this->load->view('header');
	    $this->load->view('holiday-master');
	   
        }else{
            redirect('PayslipCtr/index');
        }
    }
    function saveHoilday(){
	   
        $sess = $this->session->userdata('user_session');
        if($sess){
	   
	    $this->ps_model->addLeave();
	 
	    redirect('PayslipCtr/holiday');
	   
        }else{
            redirect('PayslipCtr/index');
        }
    }
    
    function leave_Delete($id)
    {
	$sess = $this->session->userdata('user_session');
        if($sess){
	    $this->db->where("id",$id);
	    $this->db->delete("holiday_details");
	    redirect("PayslipCtr/holiday");
	}else{
	    redirect('PayslipCtr/index');
	}
    }
    function master_department_delete(){
	    
	$this->ps_model->master_department_delete();
    }
    
    public function logout()
    {
        $this->session->unset_userdata('user_session');
        redirect('PayslipCtr/index');
    }

   function companygetDetails(){
	if($this->input->post('button')=='submit')
	{
	    $data=$this->ps_model->cmpny_details_insert();
	    $this->load->view('test1',$data);
	}
	$name=$_POST['name'];
	$data=$this->ps_model->getcompanyDetails($name);
	echo json_encode($data);
	
    }
    
    function leave_Edit(){
	$id=$_POST['id'];
	$data=$this->ps_model->getLeaveDetails($id);
	echo json_encode($data);
    }
    function update_leave(){
	$id=$this->input->post('id');
	$data=$this->ps_model->update_leave($id);
	echo json_encode($data);
    }
     function manual_payslip(){
	$sess = $this->session->userdata('user_session');
        if($sess){
	    $this->load->view('header');
	    $this->load->view('manual_payslip');
        }else{
            redirect('PayslipCtr/index');
        }
    }
    function manual_Payslip_insert(){
	$this->ps_model->manual_Payslip_insert();
    }

    function createpayslip(){
	$name = $this->input->post('payslip_name');
	$month = $this->input->post('payslip_month');
	$year = $this->input->post('payslip_year');
	$getslip['datas']=$this->ps_model->getfrom_empdetail($name);
	$getslip['datas1']=$this->ps_model->getfrom_salarydetail($name);
	
	$this->load->view('payslip',$getslip);
    }
    function Manualreport()
	{
	
	$this->load->view('header');
	$data['payroll'] = $this->ps_model->Manualreport();
	$this->load->view('ManualPayslip_Generate',$data);
	}

     function payslip_G(){
	$this->load->view('header');
	$payslipdata['payroll'] = $this->ps_model->payroll_table_view();
	
	//$payslipdata['select']=$this->ps_model->getdata();
	
	$this->load->view('payslip_ui',$payslipdata);
    }
       function payslip_Multiple(){
	$this->load->view('header');
	$this->load->view('Payslip_Multiple');
    }
    
    function payslip_Multiple_Data(){
	$this->datatables->select('EMP_ID,EMP_NAME,BASIC_SALARY,INCENTIVE,TRAVELLING_ALLOWANCE,HRA,DA,GROSS_EARNINGS,LOP,ADVANCE_SALARY,OTHER_DEDUCTIONS,GROSS_DEDUCTIONS,NET_AMOUNT,EMP_DEPARTMENT,EMP_EMAIL,SALARY_PAID,TOTAL_WORKING_DAYS,WORKED_DAYS,INCREMENT,ID,CR_DATE,UPDATED_DATE,PAYSLIP_NO,REMARKS,MONTH_YEAR')->from('payroll_details');
	echo $this->datatables->generate();
    }
    function Multiple_send_email(){

	$config = array(
	    'protocol' => 'smtp',
	    'smtp_host' => 'ssl://smtp.googlemail.com',
	    'smtp_port' => 465,
	    'smtp_user' => 'manisrikan@gmail.com', // change it to yours
	    'smtp_pass' => '16121993', // change it to yours
	    'mailtype' => 'html',
	    'charset' => 'iso-8859-1',
	    'wordwrap' => TRUE
	);
	    $this->email->initialize($config);
	    $this->load->library('email', $config);
	    $name=$_POST['names'];
	    $mail=$_POST['email'];
	
	     for ($i = 0; $i < count($name); $i++) {
		
		$EEEmail="";
		$MultiFileName="";
		$htmlpdf = $this->Multiple_email($name[$i]);
		$dompdf = new DOMPDF();
		$dompdf->set_paper('A4','landscape');
		$dompdf->load_html($htmlpdf);
		$dompdf->render();
		$output = $dompdf->output();
		$FileName = 'Payslip';
		$MultiFileName = $FileName.'.pdf';
		$Payslip = file_put_contents("application/uploads/$MultiFileName",$output);
		$this->email->set_newline("\r\n");
		$this->email->from('manisrikan@gmail.com','Manikandan');
		$this->email->to($mail[$i]);
		$this->email->subject('Hai');
		$EEEmail=$this->email->attach("http://cloudlogic.in/payslip/application/uploads/".$MultiFileName);
		$this->email->send();
		$this->email->clear(TRUE);
	    }
	   
	     //unlink('http://cloudlogic.in/payslip/application/uploads/$MultiFileName');
    }


    function Multiple_email($name){
	
	$getslip['datas']=$this->ps_model->getfrom_empdetail($name);
	$getslip['datas1']=$this->ps_model->getfrom_salaryMail($name);
	
	return $dataa=$this->load->view('test1',$getslip,true);
    }


      function createslip_pdf($name,$month){
      
 $getslip['datas']=$this->ps_model->getfrom_empdetail($name);
 $getslip['datas1']=$this->ps_model->getfrom_salarydetail($name,$month);
//print_r($getslip['datas1']); exit;
$html = $this->load->view('test1',$getslip,true);
 pdf_create($html,"test1",$stream=TRUE,'landscape');
    }
    
   
    function send_email1(){
	$config = array(
	    'protocol' => 'smtp',
	    'smtp_host' => 'ssl://smtp.googlemail.com',
	    'smtp_port' => 465,
	    'smtp_user' => 'manisrikan@gmail.com', // change it to yours
	    'smtp_pass' => '16121993', // change it to yours
	    'mailtype' => 'html',
	    'charset' => 'iso-8859-1',
	    'wordwrap' => TRUE
	);
            $name = $_POST['atach_name'];
            $month=$_POST['atach_month'];
            $year=$_POST['atach_year'];

             $to_mail=$_POST['to'];
            $mes= "Hai $name here attached your payslip for month of $month/$year";

	    $this->email->initialize($config);
	    $this->load->library('email', $config);
	    $name = $_POST['atach_name'];
	    $to_mail=$_POST['to'];
	    $htmlpdf = $this->pdfattachment_Email1($name);
	    $dompdf = new DOMPDF();
	    $dompdf->set_paper('A4','landscape');
	    $dompdf->load_html($htmlpdf);
	    $dompdf->render();
	    $output = $dompdf->output();
	    $FileName = 'Payslip.pdf';
	    $Payslip = file_put_contents("application/uploads/$FileName", $output);
	    $this->email->set_newline("\r\n");
	    $this->email->from('manisrikan@gmail.com','Manikandan');
	    $this->email->to($to_mail);
	    $this->email->subject($mes);
	    $this->email->attach("http://cloudlogic.in/payslip/application/uploads/".$FileName);
	    if($this->email->send())
	    {
		redirect('PayslipCtr/manual_payslip');
	    }
	    $this->email->clear(TRUE);
    }
    
     function pdfattachment_Email1($name){
	$getslip['datas2']=$this->ps_model->getfrom_empdetail2($name);
	return $dataa=$this->load->view('test2',$getslip,true);
    }



     function createslip_pdf1($name,$month,$year){
	$getslip['datas2']=$this->ps_model->getfrom_empdetail1($name,$month,$year);
	if($getslip['datas2'] ==""){
	     echo "NO DATA WAS FOUND";
	}else{
	    $html = $this->load->view('test2',$getslip,true);
	    pdf_create($html,"test2",$stream=TRUE,'landscape');
	   
	}
    }
    

 function forget_email()
    {
	$email=$this->input->post('email');
	$data=$this->ps_model->forget_email($email);
	$username=$data[0]['CMP_ADMINNAME'];
	$password=$data[0]['CMP_PWD'];
	//echo "<pre>";print_r($username);exit;
	if(count($data)==1){

	$config = array(
	    'protocol' => 'smtp',
	    'smtp_host' => 'ssl://smtp.googlemail.com',
	    'smtp_port' => 465,
	    'smtp_user' => 'manisrikan@gmail.com', // change it to yours
	    'smtp_pass' => '16121993', // change it to yours
	    'mailtype' => 'html',
	    'charset' => 'iso-8859-1',
	    'wordwrap' => TRUE
	    );
	    $msg="<h2>Hi Cloudlogic </h2> <br><b>Account Recovery<b><br><br><br>Your Username:$username<br>
	    Your Password:$password";
	    $this->email->initialize($config);
	    $this->load->library('email', $config);
	    //$username = $_POST['CMP_ADMINNAME'];
	    //$email=$_POST['to'];
	    $this->email->set_newline("\r\n");
	    $this->email->from('manisrikan@gmail.com','Manikandan');
	    $this->email->to($email);
	    //$this->email->cc();
	    $this->email->subject('Cloudlogic Technology Solutions Pvt Ltd');
	    
	    $this->email->message($msg);
	    if($this->email->send())
	    {
		
                echo "<script>alert('Send Successfully');</script>";
		$this->index();
	    }
	    $this->email->clear(TRUE);
    }
	else{
	    echo "<script>alert('Mail Sending Failed');</script>";
	}
    
	
    }


  function cpassword()
    {
	    
	if ($this->input->post('change_pwd')=='ChangePassword')
	{
	   $sess = $this->session->userdata('user_session');
	   $this->ps_model->change_password($sess);
	}
	
	$this->load->view('header');
	$this->load->view('change_pass');
	
    }


      function send_email(){
	$config = array(
	    'protocol' => 'smtp',
	    'smtp_host' => 'ssl://smtp.googlemail.com',
	    'smtp_port' => 465,
	    'smtp_user' => 'manisrikan@gmail.com', // change it to yours
	    'smtp_pass' => '16121993', // change it to yours
	    'mailtype' => 'html',
	    'charset' => 'iso-8859-1',
	    'wordwrap' => TRUE
	);
	    $this->email->initialize($config);
	    $this->load->library('email', $config);
	    $name = $_POST['atach_name'];
	    $to_mail=$_POST['to'];
	    $htmlpdf = $this->pdfattachment_Email($name);
	   
	    $dompdf = new DOMPDF();
	    $dompdf->set_paper('A4','landscape');
	    $dompdf->load_html($htmlpdf);
	    $dompdf->render();
	    $output = $dompdf->output();
	    $FileName = 'Payslip.pdf';
	    $Payslip = file_put_contents("application/uploads/$FileName", $output);
	    //$directoryPath = set_realpath('application/uploads/');
	    $this->email->set_newline("\r\n");
	    $this->email->from('manisrikan@gmail.com','Manikandan');
	    $this->email->to($to_mail);
	    //$this->email->cc();
	    $this->email->subject('Hai');
	    //$this->email->message($html);
	    
	    $this->email->attach("http://cloudlogic.in/payslip/application/uploads/".$FileName);
	    //$this->email->attach($directoryPath.''.$FileName.'.pdf');
	    if($this->email->send())
	    {
		redirect('PayslipCtr/payslip_G');
	    }
	    $this->email->clear(TRUE);
    }

    function inc_ded(){
	$sess = $this->session->userdata('user_session');
        if($sess){
	    $this->load->view('header');
	    $this->load->view('inc-ded');
        }else{
            redirect('PayslipCtr/index');
        }
    }
    function calendar(){
	$sess = $this->session->userdata('user_session');
        if($sess){
	    $this->load->view('header');
	    $this->load->view('Calendar_setting');
        }else{
            redirect('PayslipCtr/index');
        }
    }
    
    function get(){
	$id=$this->input->post('id');
	$data=$this->ps_model->holiday();
	?>
	<div class="table-responsive" style="border: none">
	    <table id="data-table" class="table table-bordered nowrap" width="100%">
		<thead>
		    <tr>
			<th>SNo</th>
			<th>Month/Date</th>
			<th>Day</th>
			<th>Holiday Name</th>
                          <th>Insert Timestamp</th>
			<th>Update Timestamp</th>
			<th>Action</th>
		    </tr>
		</thead>
		<tbody>
	<?php
	foreach($data as $row){ ?>
	<tr class="even gradeC">
	    <td>
		<?php echo $row['ID'];?>
	    </td>					    
	    <td>
		<?php echo $row['MONTH'];echo'&nbsp'; echo $row['DATE'];?>
	    </td>
	 
	    <td>
		<?php echo $row['DAY'];?>
	    </td>
	    <td>
		<?php echo $row['LEAVE_DETAIL'];?>
	    </td>
           <td><?php echo $row['CR_DATE'];?></td>
	    <td><?php echo $row['UPDATED_DATE'];?></td>	
	    <td>
		<?php $id= $row['ID']; ?>
	    <a onclick="openToggle('<?php echo $row['ID'];?>')" name="edit" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i> </a>
	    <a href="<?php echo site_url('PayslipCtr/leave_Delete/'.$row['ID']);?>" id="delete_box" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i> </a>
	    </td>
	</tr>
	</tbody>
    </table></div>
	<?php } 
	
    }
    function master_insert_inclusion()
    {
	$this->ps_model->master_insert_inclusion();
    }
	
   
function fetch_table()
	{
        $data=$this->ps_model->get_master_setting();
		foreach($data as $row) { ?>
		<tr>
                <td>
						<?php echo $row['field_name'];?>
				</td>
				<td>
						<?php echo $row['directed_type'];?>
				</td>
				<td>
					 <input type="checkbox" name="check" value="activate" id="switchery" class="lcs_check lcs_tt1" checked="checked" />
				</td>
				
				<td>
						<button type="button" name="delete" id="delete"  value="delete" class="btn btn-xs btn-danger" onclick="delete_master(<?php  echo $row['id']; ?>)"> <i class="fa fa-trash-o"></i></button> 
				</td>
		</tr>
		 <?php }
	}
function master_update_percentage()
	{
	  $this->ps_model->master_update_percentage();
	}
	
	
	function master_switchery_update()
	{
		$id=$this->input->post('id');
		$status=$this->input->post('status');
		//print_r($status);
		$this->ps_model->master_switchery_update($id,$status);
	}
	
    function master_delete()
    {
	$this->ps_model->master_delete();		   
    }
	
    function master_shift()
    {
	$this->load->view('header');		 
	$data['result']=$this->ps_model->view_master_shift();
	$this->load->view('master_shift',$data);			   
    }
	
    function master_department()
    {
	$this->ps_model->master_department();
    }
	
    function master_department_view()
    {
	$this->load->view('header');		 
	$this->load->view('master_department');		   
    }
    function master_insert_shift()
    {
	$this->ps_model->master_insert_shift();
    } 

    
}