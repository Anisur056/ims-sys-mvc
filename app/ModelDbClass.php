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

    public function showStudentsAll(){
        $statement = $this->pub_pdo->prepare('SELECT * FROM `shnmm_tbl_students`');
        $statement->execute();
        return $statement->fetchAll();
    }

    public function showStudentByClass($class){
        $statement = $this->pub_pdo->prepare('SELECT * FROM `shnmm_tbl_students` WHERE `CLASS`=?');
        $statement->execute([$class]);
        return $statement->fetchAll();
    }

    public function showStudentById($student_id){
        $statement = $this->pub_pdo->prepare('SELECT * FROM `shnmm_tbl_students` WHERE `STUDENT_ID`=?');
        $statement->execute([$student_id]);
        return $statement->fetchAll();
    }

    public function updateStudentById($student_id){
        $statement = $this->pub_pdo->prepare('UPDATE `shnmm_tbl_students` SET 
        `STUDENT_ID`=?,
        `ACADEMIC_YEAR`=?,
        `SHIFT`=?,
        `SECTION`=?,
        `CLASS`=?,
        `ROLL`=?,
        `NAME_EN`=?,
        `NAME_BN`=?,
        `BLOOD_GROUP`=?,
        `RELIGION`=?,
        `GENDER`=?,
        `DATE_OF_BIRTH`=?,
        `BIRTH_REG_NO`=?,
        `FATHER_NAME`=?,
        `FATHER_MOBILE_NUMBER`=?,
        `FATHER_NID`=?,
        `MOTHER_NAME`=?,
        `MOTHER_MOBILE_NUMBER`=?,
        `MOTHER_NID`=?,
        `PRESENT_ADDRESS`=?,
        `PERMANENT_ADDRESS`=?,
        `PIC`=?, WHERE `STUDENT_ID`=?');
        $statement->execute([$student_id]);
        return $statement->fetchAll();
    }
}