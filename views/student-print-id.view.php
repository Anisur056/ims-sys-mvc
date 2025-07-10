<?php $db = new ModelDbClass(); ?>

<?php
    if(isset($_GET['idcard-print'])){
        $id = $_GET['idcard-print'];
    }
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
            .d-none{
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
            top: 4.400in;
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

    </style>
</head>
<body class="A4">
    <!-- ----------------------- Main Content ---------------------->

    <?php         
        $result = $db->showStudentById($id);
        foreach($result as $data): ?>

        <section class="print" id="a4-pdf">
            
            <div class="print">
                <div class="left">
                    <img id="voucher" style="width: 8.2677in;" src="views/theme/img/voucher-img/img-voucher.jpg" alt="">
                
                    <p class="txt-left-voucher"><?= $data['NAME_EN'] ?></p>
                    <p class="txt-left-1"><?= $ENTRY_DATE ?></p>
                    <p class="txt-left-2"><?= $STUDENT_NAME ?></p>
                    <p class="txt-left-3"><?= $STUDENT_CLASS ?></p>
                    <p class="txt-left-4"><?= $STUDENT_ROLL ?></p>
                    <p class="txt-left-5"><?= $RECEIVED ?></p>
                    <p class="txt-left-6"><?= $RECEIVED ?></p>
                    <p class="txt-left-7">Due: <?= $DUE ?></p>
                    <p class="txt-left-8"><?= $REMARK ?></p>
                    <?php if($DUE === 0):?>
                    <img class="img-left-due" src="views/theme/img/voucher-img/paid-seal.png">
                    <?php else:?>
                    <img class="img-left-due" src="views/theme/img/voucher-img/due-seal.png">
                    <?php endif; ?>

                </div>

            </div>
            
            <!-- <span id="qrcode"></span> -->
            
        </section>

        <?php endforeach; ?>

    <br>
    <div style="display:flex; flex-direction: row;">
        <button class="d-none" style="padding: 5px 20px; margin: 9px;" type="button" onclick="Btnprint()">Print</button>

        <div style="padding: 5px 20px; margin: 9px;" class="checkbox-wrapper-3 d-none">
            <input type="checkbox" id="cbx-3" onclick="myFunction()"/>
            <label for="cbx-3" class="toggle"><span></span></label>
            
        </div>
        <h1 class="d-none" style="padding: 5px 20px; margin: 9px;">Show/Hide Voucher Image</h1>

        <style>
            .checkbox-wrapper-3 input[type="checkbox"] {
                visibility: hidden;
                display: none;
            }

            .checkbox-wrapper-3 .toggle {
                position: relative;
                display: block;
                width: 40px;
                height: 20px;
                cursor: pointer;
                -webkit-tap-highlight-color: transparent;
                transform: translate3d(0, 0, 0);
            }
            .checkbox-wrapper-3 .toggle:before {
                content: "";
                position: relative;
                top: 3px;
                left: 3px;
                width: 34px;
                height: 14px;
                display: block;
                background: #9A9999;
                border-radius: 8px;
                transition: background 0.2s ease;
            }
            .checkbox-wrapper-3 .toggle span {
                position: absolute;
                top: 0;
                left: 0;
                width: 20px;
                height: 20px;
                display: block;
                background: white;
                border-radius: 10px;
                box-shadow: 0 3px 8px rgba(154, 153, 153, 0.5);
                transition: all 0.2s ease;
            }
            .checkbox-wrapper-3 .toggle span:before {
                content: "";
                position: absolute;
                display: block;
                margin: -18px;
                width: 56px;
                height: 56px;
                background: rgba(79, 46, 220, 0.5);
                border-radius: 50%;
                transform: scale(0);
                opacity: 1;
                pointer-events: none;
            }

            .checkbox-wrapper-3 #cbx-3:checked + .toggle:before {
                background: #947ADA;
            }
            .checkbox-wrapper-3 #cbx-3:checked + .toggle span {
                background: #4F2EDC;
                transform: translateX(20px);
                transition: all 0.2s cubic-bezier(0.8, 0.4, 0.3, 1.25), background 0.15s ease;
                box-shadow: 0 3px 8px rgba(79, 46, 220, 0.2);
            }
            .checkbox-wrapper-3 #cbx-3:checked + .toggle span:before {
                transform: scale(1);
                opacity: 0;
                transition: all 0.4s ease;
            }
        </style>
    </div>


    <script>
        function myFunction() {
        var x = document.getElementById("voucher");
        if (x.style.visibility === "hidden") {
            x.style.visibility = "visible";
        } else {
            x.style.visibility = "hidden";
        }
        }
    </script>

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