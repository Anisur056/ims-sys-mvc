<?php
session_start();
include('init-config.php');

if (isset($_SESSION['user'])) {

    if (time() - $_SESSION['time'] > 900) { //After 15 Minutes Logout (15*60 second= 900 milisecond)
        session_unset();
        session_destroy();

        echo '<script>';
        echo "location.replace('verify')";
        echo '</script>';
    }else{
        $_SESSION['time'] = time();
    }

}
else
{

    echo '<script>';
    echo "location.replace('verify')";
    echo '</script>';

}