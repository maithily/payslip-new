<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script>
        $("#btnPrint").live("click", function () {
            var divContents = $("#dvContainer").html();
            var printWindow = window.open('', '', 'height=500,width=900');
            printWindow.document.write('<html><head><title>DIV Contents</title>');
            printWindow.document.write('<style>@page {size: portrait;}</style><html><head><title></title><link rel="stylesheet" type="text/css" href="../application/views/test.css">');
            //printWindow.document.write('</head><body >');
            printWindow.document.write(divContents);
            //printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        });
    </script>
    <link rel="stylesheet" type="text/css" href="../application/views/test.css">
</head>
<body>
    <form id="form1">
    <div id="dvContainer">
        <div class="content">
            <table  width="100%" cellspacing="0" cellpadding="2" >
                <thead>
                    <tr>
                        <th class="head" style="text-align: center;width: 10%"><img src="<?php echo site_url('application/assets/img/cloulogic.png');?>" alt="asdsad" width="120px" height="100px"</th>
                        <th class="head" style="text-align: left ;width: 70%"><center><h3>CLOUDLOGIC TECHNOLOGY SOLUTIONS PRIVATE LTD</h3>
                            <h4>PAYSLIP FOR THE MONTH OF - SEP-2016</h4>
                            </center>
                        </th>
                        <th class="head" style="text-align: left;width: 30%">
                            <p>
                                   <p> No: 27 & 28, Bajanai Madam Street,<br>
                                    Ellaipillaichavady,<br>
                                    Puducherry - 605005 <br>
                                    <!--TEL:+91 9840802462<br>
                                    +91 9943998155<br>
                                    Email:info@cloudlogic.in-->
                                    </p>
                            </p>
                        </th>
                    </tr>
                </thead>
            </table>
            <table width="50%" cellspacing="16" style="float: left;">
                <thead>
                    <tr>
                        <th class="title">Empolyee Code</th>
                        <th class="colan">:</th>
                        <td class="data">CLI00012</td>
                    </tr>
                    <tr>
                        <th class="title">Empolyee Name</th>
                        <th class="colan">:</th>
                        <td class="data"><?php echo $datas[0]['EMP_FIRST_NAME'];?></td>
                    </tr>
                    <tr>
                        <th class="title">Designation</th>
                        <th class="colan">:</th>
                        <td class="data"><?php echo $datas[0]['EMP_DESIGNATION'];?></td>
                    </tr>

                    <tr>
                        <th class="title">DOJ</th>
                        <th class="colan">:</th>
                        <td class="data"><?php echo $datas[0]['EMP_JOINING_DATE'];?></td>
                    </tr>
                    <tr>
                        <th class="title">Location</th>
                        <th class="colan">:</th>
                        <td class="data">PONDY</td>
                    </tr>
                    <tr>
                        <th class="title">Bank Name</th>
                        <th class="colan">:</th>
                        <td class="data">INDIAN BANK</td>
                    </tr>

                </thead>
            </table>
            <table width="50%" cellspacing="16">
                <thead>
                    <tr>
                        <th class="title">Account Name</th>
                        <th class="colan">:</th>
                        <td class="data"><?php echo $datas[0]['EMP_ACCOUNT_NUM'];?></td>
                    </tr>
                    <tr>
                        <th class="title">PAN No</th>
                        <th class="colan">:</th>
                        <td class="data">CLI1230CF123</td>
                    </tr>
                    <tr>
                        <th class="title">PF No</th>
                        <th class="colan">:</th>
                        <td class="data">979465454452</td>
                    </tr>

                    <tr>
                        <th class="title">Paid Days</th>
                        <th class="colan">:</th>
                        <td class="data">28</td>
                    </tr>
                    <tr>
                        <th class="title">LOP</th>
                        <th class="colan">:</th>
                        <td class="data">02</td>
                    </tr>
                    <tr>
                        <th class="title">Arrer Days</th>
                        <th class="colan">:</th>
                        <td class="data">02</td>
                    </tr>
                </thead>
            </table>
<!--            <table class="footer ss" width="50%" style="float: left;"  cellspacing="14">
                <thead>
                    <tr>
                        <th class="ear">Earnings</th>
                        <th class="ear1">Actual</th>
                        <th class="ear2">Earned</th>
                    </tr>

                </thead>
            </table>
--><!--            <table class="footer aa" width="50%"  cellspacing="14">
                <thead>
                    <tr>
                        <th class="ear4">Deduction</th>
                        <th class="ear5">Amount</th>
                    </tr>

                </thead>
            </table>
-->
            <table class="earning" width="49%" style="float: left;"  cellspacing="0" cellpadding="9">
                
                <thead class="heading">
                    <tr>
                        <th class="earhead">Earnings</th>
<!--                        <th class="earhead">Actual</th>
-->                        <th class="earhead1">Earned</th>
                    </tr>

                </thead>
                <tbody>
                 <tr>
                        <th class="ear">Basic Pay</th>
                        <th class="ear1"><?php echo $datas1[0]['BASIC_SALARY']?></th>
                    </tr>
                     <tr>
                        <th class="ear">HRA</th>
                        <th class="ear1">7000</th>
                    </tr>
                     <tr>
                        <th class="ear">DA</th>
                        <th class="ear1">7000</th>
                    </tr>
                     <tr>
                        <th class="ear">Incentive</th>
                        <th class="ear1">7000</th>
                    </tr>
                    <tr>
                        <th class="ear">Increment</th>
                        <th class="ear1">7000</th>
                    </tr>                    

                </tbody>
                 <tfoot>
                    <tr>
                        <th class="earfoot">Gross Earning</th>
                        <th class="earfoot1">7000</th>
                    </tr>

                </tfoot>
            </table>

            <table class="detection" width="49%" style="float:right";  cellspacing="0" cellpadding="9">
                <thead>
                    <tr>
                        <th class="dethead">Deduction</th>
                        <th class="dethead">Amount</th>
                    </tr>

                </thead>
                <tbody>
                    <tr>
                        <th class="det">PF</th>
                        <th class="det">7000</th>
                    </tr>
                     <tr>
                        <th class="det">ESI</th>
                        <th class="det">7000</th>
                    </tr>
                     <tr>
                        <th class="det">LOP</th>
                        <th class="det">7000</th>
                    </tr>
                     <tr>
                        <th class="det">Advance Salary</th>
                        <th class="det">7000</th>
                    </tr>
                    <tr>
                        <th class="det">Other Deduction</th>
                        <th class="det">7000</th>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th class="detfoot">Gross Deduction</th>
                        <th class="detfoot">7000</th>
                    </tr>

                </tfoot>

            </table>
<!--            <table class="footer ss" width="50%"  style="float: left;"   cellspacing="14">
                <thead>
                    <tr>
                        <th class="ear">Gross Earning</th>
                        <th class="ear">7000</th>
                        <th class="ear">7000</th>
                    </tr>

                </thead>
            </table>
-->      <!--      <table class="footer ss" width="50%"    cellspacing="14">
                <thead>
                    <tr>
                        <th class="det">Gross Deduction</th>
                        <th class="det">7000</th>
                    </tr>

                </thead>
            </table>-->

            <table class="netpay" width="100%" cellspacing="5">
                <thead>
                    <tr>
                        <th class="net">NET PAY</th>
                        <th class="net1">:</th>
                        <th class="net2">4454</th>
                    </tr>
                    <tr>
                        <th class="net">IN WORDS</th>
                        <th class="net1">:</th>
                        <th class="net2">fdgsdfgsdfgsdf</th>
                    </tr>
                </thead>
            </table>
            <table class="footer" width="100%" cellspacing="5">
                <thead>
                    <tr>
                        <th class="note">Computer Generated Payslip, hence no signature required</th>
                    </tr>

                </thead>
            </table>


        </div>
    </div>
    <br>
        <center><input class="form-control btn btn-sucess" type="button" value="Print" id="btnPrint" /><input type="button" id="back" value="Back" onclick="Return()" name="back"></center>
    </form>
</body>
</html>
<script type="text/javascript">
    function Return()
    {
     window.location="<?php echo base_url('PayslipCtr/back');?>"   
    }
</script>