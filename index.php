<?php
if(file_exists("app/init-config.php")){
    require 'app/init-config.php';  
    require 'app/function.php';
    require 'app/ModelDbClass.php';
    require 'app/router.php';
}else{
    header('Location: app/setup.php');
}