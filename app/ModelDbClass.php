<?php

class ModelDbClass{

    Public $pub_pdo;

    public function __construct(){
        require "app/init-config.php";
        $this->pub_pdo = $pdo;
    }

    public function totalStudentCount(){  
        $select = $this->pub_pdo->prepare('SELECT * FROM `shnmm_tbl_students`');
        $select->execute();
        echo $select->rowCount();
    }

    public function showAll(){
        $statement = $this->pub_pdo->prepare('SELECT * FROM `shnmm_tbl_students`');
        $statement->execute();
        return $statement->fetchAll();
    }

    public function showStudentByClass($class){
        $statement = $this->pub_pdo->prepare('SELECT * FROM `shnmm_tbl_students` WHERE `CLASS`=?');
        $statement->execute([$class]);
        return $statement->fetchAll();
    }
}