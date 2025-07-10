<?php

    if(isset($_GET['path'])){ $path = (string) $_GET['path'];}
    else{ $path = ""; }

    switch($path){
        default :
            welcomeScreen();
        break;

        case 'config-file-generate':
            config_file_generate();
        break;

        case 'config-file-delete':
            config_file_delete();
        break;

        case 'config-del':
            unlink("init-config.php");
            header("location: ?");
        break;

        case 'database-install':
            database_install();
        break;

        case 'database-delete':
            database_delete();
        break;

        case 'database-backup':
            database_backup();
        break;  

        case 'database-restore':
            database_restore();
        break; 
    }

    function app_title(){
        echo "Setup Module v3.0";
    }

    function applyCss(){
        echo '
            <link href="https://fonts.googleapis.com/css2?family=Akshar:wght@300..700&family=Anton&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
            <style>
            *{
                margin:0;
                padding: 0;
                box-sizing: border-box;
                font-family: "Akshar", sans-serif;
                font-size: 12pt;
            }
            body{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                background-color: #FBAB7E;
                background-image: linear-gradient(62deg, #FBAB7E 0%, #F7CE68 100%);
            }
            .div-card{
                background: #ffffff;
                margin : 40px 0px;
                border-radius : 8px;
                overflow: hidden;
                width: 370px;
            }
            .div-card-title{
                text-align: center;
                font-weight: bold;
                background-color: #FBAB7E;
                padding: 15px;
            }
            .div-card-title a{
                font-size: 20pt;
                text-decoration: none;
                text-transform: uppercase;
                color: #ffffff;
            }
            .div-card-body{
                padding: 15px;
            }
            .div-card-body input{
                width: 100%;
                padding: 8px;
                border: none;
                outline: none;
                border: 1px solid #e5e5e5;
                border-radius: 3px;
                margin: 10px 0px;
            }
            .div-card-body textarea{
                width: 100%;
                height: 370px;
                border: 1px solid #5f5f5f;
                outline: none;
                padding: 4px;
            }
            .div-text{
                border: 1px solid #e5e5e5;
                padding: 20px;
                margin-bottom: 20px;
                overflow-x: scroll;
            }
            .div-card-footer input[type=submit]{
                border: none;
                border: 1px solid #000;
                border-radius: 2px;
                outline: none;
                background : #fff;
                padding: 5px;
                cursor: pointer;
            }
            .div-card-body ol{
                margin: 20px;
            }
            .div-card-body .step-link{
                text-decoration: none;
                color: #ff9900;
                box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
                margin-top : 10px;
                padding : 10px;
                display: block;
                border-radius: 4px;
            }
            .div-card-footer{
                padding: 15px;
                background: #e5e5e5;
            }
            .div-card-footer a{
                text-decoration: none;
                display: inline-block;
                background: #ffffff;
                color : #ff9900;
                padding : 5px;
                border-radius: 2px;
            }
            .bg-red{
                border: 3px solid red;
            }
            @keyframes slideFromUp {
                0% {
                  transform: translateX(-20%);
                }
                100% {
                  transform: translateX(0);
                }
              }
              .div-card {  
                animation: 1s ease-out 0s 1 slideFromUp;
              }
            .footer-text{
                margin-bottom: 40px;
            }
            .footer-text a{
                text-decoration: none;
                color: #ffffff;
            }
        </style> ';
    }

    function welcomeScreen(){
        ?>
            <?php
                if(file_exists("init-config.php")){
                include "init-config.php";   
            }?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta   name="viewport" 
                        content="width=device-width, 
                                initial-scale=1.0, 
                                user-scalable=no">
                <title><?php app_title(); ?></title>
                <?php applyCss(); ?>
            </head>
            <body>
                <div class="div-card">
                    <div class="div-card-title"><a href="?"><?php app_title(); ?></a></div>
                    <div class="div-card-body">
                        <p>Welcome to <?php app_title(); ?></p>
                        <p>Before started, collect the information below.</p>
                        <ol>
                            <li>Database Name</li>
                            <li>Database Username</li>
                            <li>Database Password</li>
                            <li>Database Host</li>
                            <li>Table Prefix (For run multiple site in a single database)</li>
                            <li>Default Timezone (Default: Asia/Dhaka) </li>
                        </ol>
                        <p>After your collect the information, run <b>Config File Generate</b> link. It will create <b>init-config.php</b> file</p>
                        <br>
                        <a class="step-link" href="?path=config-file-generate">Config File Generate</a>
                        <a class="step-link bg-red" href="?path=config-file-delete">Delete Config File</a>
                        <a class="step-link" href="?path=database-install">Database Install</a>
                        <a class="step-link bg-red" href="?path=database-delete">Delete Database </a>
                        <a class="step-link" href="?path=database-backup">Backup Database</a>
                        <a class="step-link" href="?path=database-restore">Restore Database</a>
                        <a class="step-link" href="<?php echo(empty($web_address)) ? '/' : $web_address ; ?>">Home</a>
                    </div>
                    <div class="div-card-footer">
                        
                    </div>
                </div>

                <p class="footer-text">Developed By <a href="mailto:anis14109@gmail.com">Anisur Rahman</a> v3.0</p>
            </body>
            </html>
        <?php
    }

    function config_file_generate(){
        if( $_SERVER['REQUEST_METHOD'] === 'POST' )
        {
            $host = $_POST['host'];
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            $db = $_POST['db'];
            $tbl_prefix = $_POST['tbl_prefix'];
            $charset = $_POST['charset'];
            $web_socket = $_POST['web_socket'];
            $server = $_POST['server'];
            $dir = $_POST['dir'];
            $time_zone = $_POST['time_zone'];
    
            $path = "init-config.php";
            $config_file = fopen($path,"w");
    
            $add = "<?php\n\n";
            fwrite($config_file,$add);
    
            $add = "    \$host='".$host."';\n";
            fwrite($config_file,$add);
    
            $add = "    \$user='".$user."';\n";
            fwrite($config_file,$add);
    
            $add = "    \$pass='".$pass."';\n";
            fwrite($config_file,$add);
    
            $add = "    \$db='".$db."';\n";
            fwrite($config_file,$add);

            $add = "    \$tbl_prefix='".$tbl_prefix."';\n";
            fwrite($config_file,$add);
    
            $add = "    \$charset='".$charset."';\n";
            fwrite($config_file,$add);
    
            $add = "    \$web_socket='".$web_socket."';\n";
            fwrite($config_file,$add);
    
            $add = "    \$server='".$server."';\n";
            fwrite($config_file,$add);
            
            $add = "    \$dir='".$dir."';\n";
            fwrite($config_file,$add);
    
            $add = "    \$web_address = \$web_socket.\$server.'/'.\$dir;\n";
            fwrite($config_file,$add);

            $add = "    \$time_zone='".$time_zone."';\n";
            fwrite($config_file,$add);

            $add = "    date_default_timezone_set('$time_zone');\n\n";
            fwrite($config_file,$add);
    
            $add = "    try\n    {\n";
            fwrite($config_file,$add);
    
            $add = "        \$pdo = new PDO('mysql:host='.\$host.';dbname='.\$db.';charset='.\$charset,\$user,\$pass);\n    }\n";
            fwrite($config_file,$add);
    
            $add = "    catch (PDOException \$e)\n    {";
            fwrite($config_file,$add);
    
            $add = "        \n        \$server_error = 1;\n    }\n\n";
            fwrite($config_file,$add);        
    
            $add = "?>";
            fwrite($config_file,$add);
    
            fclose($config_file);

        }

        if(file_exists("init-config.php")){
            require "init-config.php";
        }
        ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta   name="viewport" 
                        content="width=device-width, 
                                initial-scale=1.0, 
                                user-scalable=no">
                <title><?php app_title(); ?></title>
                <?php applyCss(); ?>
            </head>
            <body>
                <div class="div-card">
                    <div class="div-card-title"><a href="?"><?php app_title(); ?></a></div>
                    <div class="div-card-body">
                        <form action="" method="post">

                            <?php
                                if(file_exists("init-config.php")){
                                    require "init-config.php";
                                    echo '<div class="div-text">';
                                    $content_file = file_get_contents("init-config.php");
                                    $content = htmlentities($content_file,ENT_QUOTES);
                                    echo '<pre>'.$content.'</pre>';
                                    echo '</div>';
                                }
                            ?> 

                            <span>DATABASE_NAME</span>
                            <input type="text" name="db" value="<?php echo (empty($db)) ? '' : $db ; ?>">

                            <span>DATABASE_HOSTNAME</span>
                            <input type="text" name="host" value="<?php echo (empty($host)) ? 'localhost' : $host ; ?>">
                            
                            <span>DATABASE_USERNAME</span>
                            <input type="text" name="user" value="<?php echo (empty($user)) ? 'root' : $user ; ?>">

                            <span>DATABASE_PASSWORD</span>
                            <input type="password" name="pass" value="<?php echo (empty($pass)) ? '' : $pass ; ?>">

                            <span>DATABASE_TABLE_PREFIX</span>
                            <input type="text" name="tbl_prefix" value="<?php echo (empty($tbl_prefix)) ? 'sm3_' : $tbl_prefix ; ?>">
                            
                            <span>CHARACTER_SET_(FOR-UNICODE-CHARACTER)</span>
                            <input type="text" name="charset" value="<?php echo (empty($charset)) ? 'utf8' : $charset ; ?>">

                            <span>WEB_SOCKET_(http:// or https://)</span>
                            <input type="text" name="web_socket" value="<?php echo(empty($web_socket)) ? $_SERVER['REQUEST_SCHEME']."://" : $web_socket ; ?>">

                            <span>SERVER_ADDRESS(example.com)</span>
                            <input type="text" name="server" value="<?php echo(empty($server)) ? $_SERVER['SERVER_NAME'] : $server ; ?>">
                            
                            <span>DIRECTORY_PATH(IF-ITS-ON-SUBDIRECTORY)</span>
                            <input type="text" name="dir" value="<?php echo(empty($dir)) ? "sub-folder/" : $dir ; ?>">

                            <span>TIME_ZONE_(Default:Asia/Dhaka) <a target="_blank" href="https://www.php.net/manual/en/timezones.php">timezones</a> </span>
                            <input type="text" name="time_zone" value="<?php echo (empty($time_zone)) ? 'Asia/Dhaka' : $time_zone ; ?>">
                            
                    </div>
                    <div class="div-card-footer">
                            <input type="submit" value="Create">
                            <a href="?">Home</a>
                        </form> 
                    </div>                           
                </div>
            </body>
            </html>
        <?php
    }

    function config_file_delete(){
        ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta   name="viewport" 
                        content="width=device-width, 
                                initial-scale=1.0, 
                                user-scalable=no">
                <title><?php app_title(); ?></title>
                <?php applyCss(); ?>
            </head>
            <body>
                <div class="div-card">
                    <div class="div-card-title"><a href="?"><?php app_title(); ?></a></div>
                    <div class="div-card-body"> <br>
                        <b>Delete init-config.php File</b><br>
                        Do you want to Delete <b>init-config.php</b> File? <br><br>
                    </div>
                    <div class="div-card-footer">
                        <a href="?path=config-del">Delete</a>
                        <a href="?">No</a>
                    </div>
                </div>
            </body>
            </html>
        <?php
    }

    function database_install(){

        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            if(file_exists("init-config.php")){
                include "init-config.php";   
            }
            $sql = $_POST['sql'];
            $table = $pdo->prepare($sql);
            $table->execute();
            echo "<script> window.location.href = '?';</script>"; 
        }

        ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta   name="viewport" 
                        content="width=device-width, 
                                initial-scale=1.0, 
                                user-scalable=no">
                <title><?php app_title(); ?></title>
                <?php applyCss(); ?>
            </head>
            <body>
                <div class="div-card">
                    <div class="div-card-title"><a href="?"><?php app_title(); ?></a></div>

                <div class="div-card-body"> <br>
                    <b>INSTALL DATABASE TABLES</b><br>
                    Do you want to Install Database Tables ? <br><br>
                    <form action="" method="post">
                    <?php
                    if(file_exists("init-config.php")){
                        include "init-config.php";   
                    }
                    ?>
                    <textarea name="sql">CREATE TABLE `<?= $tbl_prefix ?>tbl_students` (
                    `STUDENT_ID`	INT(11) PRIMARY KEY AUTO_INCREMENT,
                    `ACADEMIC_YEAR`	TEXT,
                    `SHIFT`	TEXT,
                    `SECTION`	TEXT,
                    `CLASS`	TEXT,
                    `ROLL`	TEXT,
                    `NAME_EN`	TEXT,
                    `NAME_BN`	TEXT,
                    `BLOOD_GROUP`	TEXT,
                    `RELIGION`	TEXT,
                    `GENDER`	TEXT,
                    `DATE_OF_BIRTH`	TEXT,
                    `BIRTH_REG_NO`	TEXT,
                    `FATHER_NAME`	TEXT,
                    `FATHER_MOBILE_NUMBER`	TEXT,
                    `FATHER_NID`	TEXT,
                    `MOTHER_NAME`	TEXT,
                    `MOTHER_MOBILE_NUMBER`	TEXT,
                    `MOTHER_NID`	TEXT,
                    `PRESENT_ADDRESS`	TEXT,
                    `PERMANENT_ADDRESS`	TEXT,
                    `PIC`	TEXT
                );</textarea>
                </div>

                <div class="div-card-footer">
                    <input type="submit" value="Install">
                    <a href="?">Home</a>
                    </form>
                </div>
            </div>
            </body>
            </html>
        <?php
    }

    function database_delete(){
             
        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            if(file_exists("init-config.php")){
                include "init-config.php";   
            }
            $table_list = $pdo->prepare('SHOW TABLES');
            $table_list->execute();
            while($rows = $table_list->fetch()){
                $table_del = $pdo->prepare('DROP TABLE IF EXISTS `'.$rows['0'].'`');
                $table_del->execute();
           }
            echo "<script> window.location.href = '?';</script>"; 
        }

        ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta   name="viewport" 
                        content="width=device-width, 
                                initial-scale=1.0, 
                                user-scalable=no">
                <title><?php app_title(); ?></title>
                <?php applyCss(); ?>
            </head>
            <body>
                <div class="div-card">
                    <div class="div-card-title"><a href="?"><?php app_title(); ?></a></div>

                <div class="div-card-body"> <br>
                    <b>DELETE DATABASE TABLES.</b><br>
                    Do you want to delete database tables below? <br><br>
                    <form action="" method="post">
                    <?php
                        if(file_exists("init-config.php")){
                            include "init-config.php";   
                        }
            
                        $table_list = $pdo->prepare('SHOW TABLES');
                        $table_list->execute();
                        $count = $table_list->rowCount();

                        if($count){
                            while($rows = $table_list->fetch()){
                            echo $rows['0'].'<br>';
                            }
                        }else{
                            echo "No database tables found !";
                        }
            
                        
                    ?>
                </div>

                <div class="div-card-footer">
                    <input type="submit" value="Delete">
                    <a href="?">Home</a>
                    </form>
                </div>
            </div>
            </body>
            </html>
        <?php

    }

    function database_backup(){

        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            if(file_exists("init-config.php")){
                include "init-config.php";   
            }

            $connection = mysqli_connect($host,$user,$pass,$db);

            $tables = array();
            $result = mysqli_query($connection,"SHOW TABLES");
            while($row = mysqli_fetch_row($result)){
              $tables[] = $row[0];
            }
            
            $return = '';
            foreach($tables as $table){
              $result_2 = mysqli_query($connection,"SELECT * FROM ".$table);
              $num_fields = mysqli_num_fields($result_2);
              
            
              
              for($i=0;$i<$num_fields;$i++){
                while($row_2 = mysqli_fetch_row($result_2)){
                  $return .= "INSERT INTO `".$table."` VALUES(";
                  for($j=0;$j<$num_fields;$j++){
                    $row_2[$j] = addslashes($row_2[$j]);
                    if(isset($row_2[$j])){ $return .= '"'.$row_2[$j].'"';}
                    else{ $return .= '""';}
                    if($j<$num_fields-1){ $return .= ',';}
                  }
                  $return .= ");\n";
                }
              }
            }
            $filename = date("d-m-Y-h-i-sa").".sql";
            header('Content-disposition: attachment; filename='.$filename.'');
            header('Content-type: text/plain');
            echo $return;
            die();
        }

        ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta   name="viewport" 
                        content="width=device-width, 
                                initial-scale=1.0, 
                                user-scalable=no">
                <title><?php app_title(); ?></title>
                <?php applyCss(); ?>
            </head>
            <body>
                <div class="div-card">
                    <div class="div-card-title"><a href="?"><?php app_title(); ?></a></div>

                <div class="div-card-body"> <br>
                    <b>BACKUP DATABASE TABLES</b><br>
                    Do you want to backup database tables below & save it as .sql file? <br><br>
                    <form action="" method="post">
                    <?php
                        if(file_exists("init-config.php")){
                            include "init-config.php";   
                        }
            
                        $table_list = $pdo->prepare('SHOW TABLES');
                        $table_list->execute();
                        $count = $table_list->rowCount();

                        if($count){
                            while($rows = $table_list->fetch()){
                            echo $rows['0'].'<br>';
                            }
                        }else{
                            echo "No database tables found !";
                        }
            
                        
                    ?>
                </div>

                <div class="div-card-footer">
                    <input type="submit" value="Download">
                    <a href="?">Home</a>
                    </form>
                </div>
            </div>
            </body>
            </html>
        <?php
    }

    function database_restore(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            if(file_exists("init-config.php")){
                include "init-config.php";   
            }

            $connection = mysqli_connect($host,$user,$pass,$db);

            $sql_data = $_POST['sql'];
            
            $data = explode(';',$sql_data);

            foreach($data as $query){
                if(!empty($query)){
                    mysqli_query($connection,$query);
                    echo $query.' <b>SUCCESS</b></br>';
                }
                echo "<script> window.location.href = '?';</script>";
            }
            
        }

        ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta   name="viewport" 
                        content="width=device-width, 
                                initial-scale=1.0, 
                                user-scalable=no">
                <title><?php app_title(); ?></title>
                <?php applyCss(); ?>
            </head>
            <body>
                <div class="div-card">
                    <div class="div-card-title"><a href="?"><?php app_title(); ?></a></div>

                <div class="div-card-body"> <br>
                    <b>RESTORE DATABASE TABLES</b><br>
                    To restore Database Tables Copy .sql file content & paste it box below. <br><br>
                    <form action="" method="post">
                    <?php
                    if(file_exists("init-config.php")){
                        include "init-config.php";   
                    }
                    ?>
                    <textarea name="sql" placeholder="Copy .sql file content & paste it here."></textarea>
                </div>

                <div class="div-card-footer">
                    <input type="submit" value="Restore">
                    <a href="?">Home</a>
                    </form>
                </div>
            </div>
            </body>
            </html>
        <?php
    }
    
?>