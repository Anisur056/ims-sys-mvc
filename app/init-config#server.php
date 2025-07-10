<?php

    $host='sql302.infinityfree.com';
    $user='if0_38679646';
    $pass='sirikotia';
    $db='if0_38679646_db_sirikotia';
    $tbl_prefix='shnmm_';
    $charset='utf8';
    $web_socket='http://';
    $server='sirikotia.rf.gd';
    $dir='';
    $web_address = $web_socket.$server.'/'.$dir;
    $time_zone='Asia/Dhaka';
    date_default_timezone_set('Asia/Dhaka');

    try
    {
        $pdo = new PDO('mysql:host='.$host.';dbname='.$db.';charset='.$charset,$user,$pass);
    }
    catch (PDOException $e)
    {        
        $server_error = 1;
    }

?>