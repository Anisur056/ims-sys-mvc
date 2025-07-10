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

        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            flex-direction: column;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 10pt;
        }
        .sheet {
            /* width: 8.268in;  */
            width: 8.25in; 
            height: 11in;
            /* height: 11.693in; */
            margin: 0;
            overflow: hidden;
            position: relative;
            /* page-break-after: always; */
            background-color: #fafafa;
        }
        .sheet img{
            width: 100%;
        }
        .tax_year{
            font-family: ban;
            position: absolute;
            top: 2.430in;
            left: 3.910in;
        }
        .tax_name{
            position: absolute;
            top: 2.770in;
            left: 2.950in;
        }
        .nid_num{
            font-family: ban;
            position: absolute;
            top: 2.960in;
            left: 3.840in;
        }        
        .tin_num{
            font-family: ban;
            letter-spacing: 14.700px;
            position: absolute;
            top: 3.150in;
            left: 2.870in;
        }
        .tin_circle{
            position: absolute;
            top: 3.400in;
            left: 2.700in;
        }
        .tin_area{
            position: absolute;
            top: 3.400in;
            left: 5.100in;
        }
        .taxer_income{
            font-family: ban;
            position: absolute;
            top: 3.690in;
            left: 2.780in;
        }
        .taxer_pay{
            font-family: ban;
            position: absolute;
            top: 3.860in;
            left: 3.200in;
        }
        .tin_reg{
            font-family: ban;
            position: absolute;
            top: 4.130in;
            left: 4.750in;
        }
        .tin_submit_date{
            font-family: ban;
            position: absolute;
            top: 4.540in;
            left: 4.770in;
        }
        #qrcode img{
            width: 45px;
            height: 45px;
            position: absolute;
            top: 5.760in;
            left: 3.930in;
        }
        /** For screen preview **/
        @media screen {
            body { background: #e0e0e0 }
            .sheet {
                background: white;
                box-shadow: 0 .5mm 2mm rgba(0,0,0,.3);
                margin: 5mm auto;
            }
        }
        /** Fix for Chrome issue #273306 **/
        @media print {
            body.A4 { width: 8.263in;}
            button{display: none;}
        }
    </style>
</head>
<body class="A4">
    <!-- ----------------------- Main Content ---------------------->
        <div>
            <section class="sheet" id="a4-pdf">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae animi tenetur asperiores nobis, ut mollitia! Similique recusandae placeat ratione nostrum, tenetur impedit deleniti molestias sunt ipsa libero pariatur dolore earum?
                
                <<span id="qrcode"></span>
                
            </section>
        </div>

        
    <br>
    <button style="padding: 5px 20px;" type="button" onclick="Btnprint()">Print</button>
    <br>
    <button  style="padding: 5px 20px;" type="button" onclick="generatePDF()">Download-PDF</button>
    <!-- ----------------------- Script End ---------------------->
    
    <!-- ----------------------- Script for QR Code ---------------------->
    <script src="views/theme/js/qrcode.js"></script>
    <script type="text/javascript">
    var qrcode = new QRCode(document.getElementById("qrcode"), {
        text: "<?php echo $qrTxt ;?>",
        colorDark : "#000000",
        colorLight : "#ffffff",
        correctLevel : QRCode.CorrectLevel.H
    });
    </script>
    <!-- ----------------------- Script End ---------------------->

    <!-- ----------------------- Script for PDF Download ---------------------->
    <script src="views/theme/js/html2pdf.js"></script>
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
    </script>
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