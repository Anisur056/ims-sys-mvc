<?php
    session_start();

    if (isset($_SESSION['user'])) {
        echo '<script>';
        echo 'location.replace("'.$web_address.'")';
        echo '</script>';
    }

    if(isset($_GET['logout']))
    {
        session_unset();
        session_destroy();
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $pass = $_POST['pin'];
        $pass_md5 = md5($pass);

        $pass_allow = array('340e910da91b75ce05a65ebf0ccdd778',
        '6e1ff1976ef507dfe2693cfcbdd9aae6');

        if (in_array($pass_md5, $pass_allow)) 
        {
            if($pass_md5 === $pass_allow[0])
            {
                $_SESSION['user'] = "Principal-Sirikotia";
                $_SESSION['time'] = time();
            }

            if($pass_md5 === $pass_allow[1])
            {
                $_SESSION['user'] = "Anisur Rahman";
                $_SESSION['time'] = time();
            }

            echo '<script>';
            echo 'location.replace("'.$web_address.'")';
            echo '</script>';
        }
        else
        {
            $error = "INCORRECT PIN";
        }
    }
// For Genaration Password.
//echo md5("78778");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ims-sys v7.4</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            position: relative;
            text-align: center;
        }
        .flex{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .flex-col{
            flex-direction: column;
        }
        body{
            width: 100vw;
            height: 100vh;
            background: #fff;
            color: #000;
            font-family: sans-serif;
            background: #aa00ff;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right,rgb(199, 87, 255), #aa00ff);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right,rgb(199, 87, 255), #aa00ff); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }
        .numberPad{
            border: 1px solid rgb(226, 226, 226);
            border-radius: 10px;
            padding-bottom: 30px;
            padding-top: 30px;
            background: #fff;
        }
        .numberPad .disp input[name="pin"]{
            width: 300px;
            padding: 3px;
            outline: none;
            border: none;
            background: none;
            text-align: center;
            color: #000;
            font-size: 1em;
            margin: 30px 0px;
        }
        .numberPad .numbers input[name="submit"]{
            outline: none;
            border: none;
            background: #fff;
            color: #000;
            cursor: pointer;
        }
        .numberPad .numbers > .row div{
            border: 1px solid rgb(226, 226, 226);
            width: 60px;
            height: 60px;
            margin: 3px;
            cursor: pointer;
        }
        .div-login{
            width: 300px;
            border: 1px solid rgb(226, 226, 226);
            border-radius: 10px;
            padding-bottom: 5px;
            padding-top: 5px;
            margin-bottom: 30px;
            background: red; 
            color : #fff;
        }
    </style>
</head>
<body>


<br>
<body class="flex flex-col">

    <?php 
        if(isset($error))
        {
            echo '<div class="div-login"><center>';
            echo $error;
            echo '</center></div>';
        }
    ?>

    <div class="numberPad">
        <h3>ims-sys v7.4</h3>
        <div class="disp">
            <form name="loginForm" action="" method="post">
                <input type="password" name="pin" placeholder="Enter Pin">
        </div>

        <div class="numbers">
            <div class="flex row row1">
                <div class="flex jsEvent"><span>1</span></div>
                <div class="flex jsEvent"><span>2</span></div>
                <div class="flex jsEvent"><span>3</span></div>
            </div>

            <div class="flex row row2">
                <div class="flex jsEvent"><span>4</span></div>
                <div class="flex jsEvent"><span>5</span></div>
                <div class="flex jsEvent"><span>6</span></div>
            </div>

            <div class="flex row row3">
                <div class="flex jsEvent"><span>7</span></div>
                <div class="flex jsEvent"><span>8</span></div>
                <div class="flex jsEvent"><span>9</span></div>
            </div>

            <div class="flex row row4">
                <div class="flex jsClear"><span>Clear</span></div>
                <div class="flex jsEvent"><span>0</span></div>
                <div class="flex jsSubmit"><span><input type="submit" name="submit" value="Login"></span></div>
            </div>
        </div>
            </form> 
    </div>




    <script>
        var allNumbersBtn = document.querySelectorAll(".row > .jsEvent");
        var pinInputField = document.querySelector('input[name="pin"]');
        var clearBtn = document.querySelector(".jsClear");

        allNumbersBtn.forEach(val => {
            val.addEventListener("click", ()=> {
                pinInputField.value += val.innerText;
            });
        });
        
        clearBtn.addEventListener("click",()=> {
            pinInputField.value = "";
        });

    </script>
</body>
</html>