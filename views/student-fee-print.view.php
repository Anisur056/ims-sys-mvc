<?php
    // if(isset($_GET['id'])){
    //     $id = $_GET['id'];
    //     $verify = $pdo->prepare('SELECT * FROM `tax-return-data` WHERE id=?');
    //     $verify->execute([$id]);
    //     if($verify->rowCount())
    //     {
    //         $row = $verify->fetch();
    //         $id = $row['id'];
    //         $assessment_year = $row['assessment_year'];
    //         $taxpayer_name = $row['taxpayer_name'];
    //         $nid_number = $row['nid_number'];
    //         $tin_number = $row['tin_number'];
    //         $tin_circle = $row['tin_circle'];
    //         $tax_zone_number = $row['tax_zone_number'];
    //         $tax_zone_area = $row['tax_zone_area'];
    //         $total_income = $row['total_income'];
    //         $paid_tax = $row['paid_tax']; 
    //         $reg_ref_number = $row['reg_ref_number'];
    //         $submit_date = $row['submit_date'];
    //     }
    // }
    $qrTxt = "TIN:";
?>

<html >
<head>
    <style>
        @page { size: A4; margin: 0 }
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-size: 10pt;
        }
        @font-face {
            font-family: boishkhi;
            src: url(views/theme/fonts/Boishkhi.ttf);
        }
        @font-face {
            font-family: sutonny;
            src: url(views/theme/fonts/SutonnyOMJ.ttf);
        }
        @font-face {
            font-family: roboto;
            src: url(views/theme/fonts/Roboto-Regular.ttf);
        }
        @media print{
            body{
                margin: 0;
            }
            button{
                display: none;
            }
        }



        .txt-left-voucher{
            font-family: roboto;
            position: absolute;
            top: 1.070in;
            left: .650in;
        }

        .txt-left-1{
            font-family: boishkhi;
            position: absolute;
            top: 1.249in;
            left: 3.820in;
        }
        .txt-left-2{
            font-family: sutonny;
            position: absolute;
            top: 1.570in;
            left: 1.500in;
            font-size: 13pt;
        }
        .txt-left-3{
            font-family: roboto;
            position: absolute;
            top: 1.800in;
            left: 1.100in;
        }
        .txt-left-4{
            font-family: roboto;
            position: absolute;
            top: 1.800in;
            left: 4.010in;
        }
        .txt-left-5{
            font-family: roboto;
            position: absolute;
            top: 2.550in;
            left: 3.900in;
        }
        .txt-left-6{
            font-family: roboto;
            position: absolute;
            top: 4.150in;
            left: 3.900in;
        }
        .txt-left-7{
            font-family: roboto;
            position: absolute;
            top: 4.150in;
            left: 1.900in;
        }
        .txt-left-8{
            font-family: sutonny;
            position: absolute;
            top: 4.650in;
            left: .600in;
        }
        .img-left-due{
            position: absolute;
            width: 70px;
            top: 4.650in;
            left: 2.800in;  
        }
        /* /////////////////////////////// */

        .txt-right-voucher{
            font-family: roboto;
            position: absolute;
            top: 1.100in;
            left: 4.650in;
        }

        .txt-right-1{
            font-family: boishkhi;
            position: absolute;
            top: 1.300in;
            left: 7.350in;
        }
        .txt-right-2{
            font-family: sutonny;
            position: absolute;
            top: 1.550in;
            left: 5.600in;
            font-size: 13pt;
        }
        .txt-right-3{
            font-family: roboto;
            position: absolute;
            top: 1.750in;
            left: 5.100in;
        }
        .txt-right-4{
            font-family: roboto;
            position: absolute;
            top: 1.750in;
            left: 7.500in;
        }
        .txt-right-5{
            font-family: roboto;
            position: absolute;
            top: 2.550in;
            left: 7.500in;
        }
        .txt-right-6{
            font-family: roboto;
            position: absolute;
            top: 4.150in;
            left: 7.500in;
        }
        .txt-right-7{
            font-family: roboto;
            position: absolute;
            top: 4.150in;
            left: 5.900in;
        }
        .txt-right-8{
            font-family: sutonny;
            position: absolute;
            top: 4.650in;
            left: 4.700in;
        }
        .img-right-due{
            position: absolute;
            width: 70px;
            top: 4.650in;
            left: 6.300in;  
        }
    </style>
</head>
<body class="A4">
    <!-- ----------------------- Main Content ---------------------->

        <section class="print" id="a4-pdf">
            
            <div class="print">
                <div class="left">
                    <img style="width: 8.2677in;" src="views/theme/img/voucher-img/img-voucher.jpg" alt="">
                    <p class="txt-left-voucher">2025000009</p>
                    <p class="txt-left-1">12 12 2025</p>
                    <p class="txt-left-2">উম্মে আতিয়া মুনতাহা</p>
                    <p class="txt-left-3">NURSERY</p>
                    <p class="txt-left-4">001</p>
                    <p class="txt-left-5">600</p>
                    <p class="txt-left-6">600</p>
                    <p class="txt-left-7">Due: 500</p>
                    <p class="txt-left-8">জানুয়ারীর কোচিং এর টাকা ৫০০ টাকা বাকী আছে।</p>
                    <img class="img-left-due" src="views/theme/img/voucher-img/due-seal.png">
                </div>
                <div class="right">
                    <p class="txt-right-voucher">2025000009</p>
                    <p class="txt-right-1">12 12 2025</p>
                    <p class="txt-right-2">উম্মে আতিয়া মুনতাহা</p>
                    <p class="txt-right-3">NURSERY</p>
                    <p class="txt-right-4">001</p>
                    <p class="txt-right-5">600</p>
                    <p class="txt-right-6">600</p>
                    <p class="txt-right-7">Due: 500</p>
                    <p class="txt-right-8">জানুয়ারীর কোচিং এর টাকা ৫০০ টাকা বাকী আছে।</p>
                    <img class="img-right-due" src="views/theme/img/voucher-img/paid-seal.png">
                </div>
            </div>
            
            <!-- <span id="qrcode"></span> -->
            
        </section>

    <br>
    <button style="padding: 5px 20px;" type="button" onclick="Btnprint()">Print</button>
    <!-- <br>
    <button  style="padding: 5px 20px;" type="button" onclick="generatePDF()">Download-PDF</button> -->
    <!-- ----------------------- Script End ---------------------->
    
    <!-- ----------------------- Script for QR Code ---------------------->
    <!-- <script src="views/theme/js/qrcode.js"></script>
    <script type="text/javascript">
    var qrcode = new QRCode(document.getElementById("qrcode"), {
        text: "<?php //echo $qrTxt ;?>",
        colorDark : "#000000",
        colorLight : "#ffffff",
        correctLevel : QRCode.CorrectLevel.H
    });
    </script> -->
    <!-- ----------------------- Script End ---------------------->

    <!-- ----------------------- Script for PDF Download ---------------------->
    <!-- <script src="views/theme/js/html2pdf.js"></script>
    <script>
        function generatePDF(){
            const element = document.getElementById("a4-pdf");
            var opt = {
                margin:       0,
                filename:     'Acknowledgement-new.pdf',
                image:        { type: 'jpeg', quality: 1 },
                html2canvas:  { scale: 2 },
                jsPDF:        { unit: 'in', format: 'A4', orientation: 'portrait' }
            };
            html2pdf().set(opt).from(element).save();
        }
    </script> -->
    <!-- ----------------------- Script End ---------------------->

    <!-- ----------------------- Script for Print Dialog ---------------------->
    <script>
        function Btnprint(){
            window.print();
        }
    </script>
    <!-- ----------------------- Script End ---------------------->
</body>
</html>