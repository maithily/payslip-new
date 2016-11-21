
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
  <!--  <?php if($staus=="pdf"){ ?>
            <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/application/views/test1.css">
    <?php }elseif($staus=="print"){?>
             <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/application/views/test.css">
    <?php }?>    -->
</head>
<body>
    <form id="form1" method="post" action="<?php echo base_url('payslipCtr/send_email');?>" enctype="multipart/form-data">
    <div id="dvContainer" style="">
        <div class="content" style="border: 2px solid black;">
                <table style="width: 100%;border-bottom: 1px solid" cellspacing="5">
                    <tr>
                        <th style="width: 19%">
                            <p style="color: white">gap</p>
                        </th>
                        <th style="width: 65%">
                            <p style="text-align: center">
                                <label style="font-size: 30px;">Cloudlogic Technology Solutions Pvt.Ltd</label><br>
                                    <label>
                                        No: 27 & 28, Bajanai Madam Street,<br>
                                        Ellaipillaichavady,<br>
                                        Puducherry - 605005. <br>
                                    </label>
                                <p style="font-size: 20px;">Pay Slip for the Period of October 2016</p>
                            </p>
                        </th>
                        <th style="width: 16%">
                            <img src="<?php echo base_url('application/assets/img/cloulogic.png');?>" width="162" height="112">
                        </th>
                    </tr>
                </table>
                <table style="width: 100%" cellspacing="5">
                   <tr>
                        <th colspan="2" style="text-align: left;width: 27%">Empolyee Name</th>
                        <th colspan="2" style="text-align: left;width: 2%">:</th>
                        <td colspan="2" style="text-align: left;width: 20%;text-transform: capitalize;"><?php echo $datas[0]['EMP_FIRST_NAME']?></td>
                        <th colspan="2" style="text-align: left;width: 27%">Empolyee Id</th>
                        <th colspan="2" style="text-align: left;width: 2%">:</th>
                        <td colspan="2" style="text-align: left;width: 20%"><?php echo $datas1[0]['EMP_ID']?></td>
                    </tr>
                    <tr>
                        <th colspan="2" style="text-align: left;width: 27%">Department</th>
                        <th colspan="2" style="text-align: left;width: 2%">:</th>
                        <td colspan="2" style="text-align: left;width: 20%"><?php echo $datas[0]['EMP_DEPARTMENT']?></td>
                        <th colspan="2" style="text-align: left;width: 27%">Designation</th>
                        <th colspan="2" style="text-align: left;width: 2%">:</th>
                        <td colspan="2" style="text-align: left;width: 20%"><?Php echo $datas[0]['EMP_DESIGNATION'] ?></td>
                    </tr>
                    <tr>
                        <th colspan="2" style="text-align: left;width: 27%">Pay Date</th>
                        <th colspan="2" style="text-align: left;width: 2%">:</th>
                        <td colspan="2" style="text-align: left;width: 20%"><?Php echo $datas1[0]['MONTH_YEAR'] ?></td>
                        <th colspan="2" style="text-align: left;width: 27%">Date of Joining</th>
                        <th colspan="2" style="text-align: left;width: 2%">:</th>
                        <td colspan="2" style="text-align: left;width: 20%"><?Php echo $datas[0]['EMP_JOINING_DATE'] ?></td>
                    </tr>
                    <tr>
                        <th colspan="2" style="text-align: left;width: 27%">Working Days</th>
                        <th colspan="2" style="text-align: left;width: 2%">:</th>
                        <td colspan="2" style="text-align: left;width: 20%"><?php echo $datas1[0]['TOTAL_WORKING_DAYS']; ?></td>
                        <th colspan="2" style="text-align: left;width: 27%">Days Worked</th>
                        <th colspan="2" style="text-align: left;width: 2%"> :</th>
                        <td colspan="2" style="text-align: left;width: 20%"><?php echo $datas1[0]['WORKED_DAYS']; ?></td>
                    </tr>
                    <tr>
                        <th colspan="2" style="text-align: left;width: 27%">Payslip No:</th>
                        <th colspan="2" style="text-align: left;width: 2%">:</th>
                        <td colspan="2" style="text-align: left;width: 20%"><?php echo $datas1[0]['PAYSLIP_NO']; ?></td>
                        <th colspan="2" style="text-align: left;width: 27%">Bank Account Number</th>
                        <th colspan="2" style="text-align: left;width: 2%">:</th>
                        <td colspan="2" style="text-align: left;width: 20%"><?Php echo $datas[0]['EMP_ACCOUNT_NUM'] ?></td>
                    </tr>
            </table>
            <table style="width: 100%" cellspacing="0" cellpadding="5">
                <thead>
                    <tr>
                        <th style="text-align: left;width: 25%;border-top:1px solid;border-bottom: 1px solid">Earnings</th>
                        <th style="text-align: center;width: 25%;border-top:1px solid;border-bottom: 1px solid;">Amount</th>
<!--                        <th style="text-align: center;width:4%;color: white;">.</th>
-->                        <th style="text-align: left;width: 25%;border-top:1px solid;border-bottom: 1px solid;border-left: 1px solid" >Deduction</th>
                        <th style="text-align: center;width: 25%;border-top:1px solid;border-bottom: 1px solid">Amount</th>
                    </tr>
                    <tr>
                        <th style="text-align: left;width: 25%;">Basic Pay</th>
                        <td style="text-align: center;width: 25%; "><?php echo $datas1[0]['BASIC_SALARY']; ?></td>
                        <th style="text-align: left;width: 25%;border-left:1px solid" >LOP</th>
                        <td style="text-align: center;width: 25%;"><?php echo $datas1[0]['LOP']; ?></td>
                    </tr>
                    <tr>
                        <th style="text-align: left;width: 25%;">HRA</th>
                        <td style="text-align: center;width: 25%;"><?php echo $datas1[0]['HRA']; ?></td>
                        <th style="text-align: left;width: 25%;border-left:1px solid">Advance Salary</th>
                        <td style="text-align: center;width: 25%;"><?php echo $datas1[0]['ADVANCE_SALARY']; ?></td>
                    </tr>
                    <tr>
                        <th style="text-align: left;width: 25%;">DA</th>
                        <td style="text-align: center;width: 25%;"><?php echo $datas1[0]['DA']; ?></td>
                        <th style="text-align: left;width: 25%;border-left:1px solid">Other Deduction</th>
                        <td style="text-align: center;width: 25%;"><?php echo $datas1[0]['OTHER_DEDUCTIONS']; ?></td>
                    </tr>
                    <tr>
                        <th style="text-align: left;width: 25%;">TA</th>
                        <td style="text-align: center;width: 25%;border-right:1px solid"><?php echo $datas1[0]['TRAVELLING_ALLOWANCE']; ?></td>
                        <th style="text-align: left;width: 25%;color: white;border-right:1px solid" >ESI</th>
                        <td style="text-align: center;width: 25%;color: white;">25.00</td>
                    </tr>
                    <tr>
                        <th style="text-align: left;width: 25%;">Incentive</th>
                        <td style="text-align: center;width: 25%;border-right:1px solid"><?php echo $datas1[0]['INCENTIVE']; ?></td>
                        <th style="text-align: left;width: 25%;color: white;border-right:1px solid" >ESI</th>
                        <td style="text-align: center;width: 25%;color: white;"></td>
                    </tr>
                    <tr>
                        <th style="text-align: left;width: 25%;">Increment</th>
                        <td style="text-align: center;width: 25%;border-right:1px solid;"><?php echo $datas1[0]['INCREMENT']; ?></td>
                        <td style="text-align: left;width: 25%;color: white; border-left:1px solid" >PF</td>
                        <td style="text-align: center;width: 25%;color: white;">516.25</td>
                    </tr>
                    <tr>
                        <th style="text-align: left;width: 25%;border-top:1px solid;border-bottom: 1px solid">Total Earnings(Rounded)</th>
                        <th style="text-align: center;width: 25%;border-top:1px solid;border-bottom: 1px solid;"><?php echo $datas1[0]['GROSS_EARNINGS']; ?></th>
                        <th style="text-align: left;width: 25%;border-top:1px solid;border-bottom: 1px solid;border-left: 1px solid" >Total Deduction(Rounded)</th>
                        <th style="text-align: center;width: 25%;border-top:1px solid;border-bottom: 1px solid"><?php echo $datas1[0]['GROSS_DEDUCTIONS']; ?></th>
                    </tr>
                </thead>
            </table>

            <table class="netpay" width="100%" style="border-bottom: 1px solid;" cellspacing="5">
                <thead>
                <!--    <tr>
                        <th class="net" style="text-align: right;width: 67%">Net Pay(Rounded)</th>
                        <th class="net1" style="text-align: left;width: 19%;color: white">:</th>
                        <th class="net2" style="text-align: left;">4454</th>
                    </tr>-->
                    <tr>
                        <th class="net" style="text-align: left;width: 15%">Net Pay(Rounded)</th>
                        <th class="net1" style="text-align: right;width: 20.7%;color: white">:</th>
                        <th class="net2" style="text-align: left;width: 15.3%"><?php echo $datas1[0]['NET_AMOUNT']; ?></th>
                        <th class="net" style="text-align: left;width: 7.5%">In Words</th>
                        <th class="net1" style="text-align: left;width: 1%">:</th>
                        <th class="net2" style="text-align: left;width: 41%"><?php echo $datas1[0]['IN_WORD'] ?></th>
                    </tr>
                   <!-- <tr>
                        <th class="net" style="text-align: left;width: 15%">In Words</th>
                        <th class="net1" style="text-align: left;width: 5%">:</th>
                        <th class="net2" style="text-align: left">fdgsdfgsdfgsdf</th>
                    </tr>-->
                </thead>
            </table>
           <!-- <table width="100%" cellspacing="3">
                <p></p>
                <tr>
                <th colspan="2" style="color:white;border-bottom:1px solid black;padding-top: 10px">sdfsdf</th>
                <th colspan="2" style="color:white;">sdfsdf</th>
                <th colspan="2" style="color:white;border-bottom:1px solid black;padding-top: 10px">sdfdsfsd</th>
                </tr>
                <tr>
                <th colspan="2" style="text-align: left;">Employer's Signature</th>
                <th colspan="2" style="text-align: center;color:white">Employer's Signature</th>
                <th colspan="2" style="text-align: left;">Employee's Signature</th>
                </tr>
                </table>-->
      </div>
    </div>
    <br>
<!--        <center><input class="form-control btn btn-sucess" type="button" value="Print" id="btnPrint" /><input type="text" name="to"><input type="submit" name="send" id="sendemail" value="Send Email"><input type="button" id="back" value="Back" onclick="back()" name="back"></center>
-->    </form>

</body>
</html>