<?php

class ModelDbClass{

    Public $pub_pdo;

    public function __construct(){
        require "app/init-config.php";
        $this->pub_pdo = $pdo;
    }

    public function StudentCount($CLASS,$STATUS){

        if($CLASS === 'ALL'){
            $select = $this->pub_pdo->prepare('SELECT * FROM `shnmm_tbl_students` WHERE `STATUS`=?');
            $select->execute([$STATUS]);
            echo $select->rowCount();
        }

        if(!empty($CLASS)){
            $select = $this->pub_pdo->prepare('SELECT * FROM `shnmm_tbl_students` WHERE `CLASS`=? AND `STATUS`=?');
            $select->execute([$CLASS,$STATUS]);
            echo $select->rowCount();
        }
        

        if($CLASS === ''){
            $select = $this->pub_pdo->prepare('SELECT * FROM `shnmm_tbl_students` WHERE `STATUS`=?');
            $select->execute([$STATUS]);
            echo $select->rowCount();
        }

        // if($info === '*'){
        //     $select = $this->pub_pdo->prepare('SELECT * FROM `shnmm_tbl_students`');
        //     $select->execute();
        //     echo $select->rowCount();
        // }else{
        //     $select = $this->pub_pdo->prepare('SELECT * FROM `shnmm_tbl_students` WHERE `CLASS`=?');
        //     $select->execute([$info]);
        //     echo $select->rowCount();
        // }

    }

    public function StudentCountByStatus(){
        $select = $this->pub_pdo->prepare('SELECT * FROM `shnmm_tbl_students` WHERE `STATUS`=?');
        $select->execute(['EX']);
        echo $select->rowCount();
    }

    public function showStudentsAll(){
        $statement = $this->pub_pdo->prepare('SELECT * FROM `shnmm_tbl_students`');
        $statement->execute();
        return $statement->fetchAll();
    }

    public function showStudentByClass($class){
        $statement = $this->pub_pdo->prepare('SELECT * FROM `shnmm_tbl_students` WHERE `CLASS`=? ORDER BY `ROLL`');
        $statement->execute([$class]);
        return $statement->fetchAll();
    }

    public function showStudentByExStatus(){
        $statement = $this->pub_pdo->prepare('SELECT * FROM `shnmm_tbl_students` WHERE `STATUS`=? ORDER BY `ROLL`');
        $statement->execute(['IN-ACTIVE']);
        return $statement->fetchAll();
    } 

    public function showStudentById($student_id){
        $statement = $this->pub_pdo->prepare('SELECT * FROM `shnmm_tbl_students` WHERE `STUDENT_ID`=?');
        $statement->execute([$student_id]);
        return $statement->fetchAll();
    }

    public function updateStudentById($ACADEMIC_YEAR,$SHIFT,$SECTION,
    $CLASS,$ROLL,$NAME_EN,
    $NAME_BN,$BLOOD_GROUP,$RELIGION,
    $GENDER,$DATE_OF_BIRTH,$BIRTH_REG_NO,
    $FATHER_NAME,$FATHER_MOBILE_NUMBER,$FATHER_NID,
    $MOTHER_NAME,$MOTHER_MOBILE_NUMBER,$MOTHER_NID,
    $PRESENT_ADDRESS,$PERMANENT_ADDRESS,$STUDENT_ID){
        $update = $this->pub_pdo->prepare('UPDATE `shnmm_tbl_students` SET 
        `ACADEMIC_YEAR`= ?,`SHIFT`= ?,`SECTION`= ?,
        `CLASS`= ?,`ROLL`= ?,`NAME_EN`= ?,
        `NAME_BN`= ?,`BLOOD_GROUP`= ?,`RELIGION`= ?,
        `GENDER`= ?,`DATE_OF_BIRTH`= ?,`BIRTH_REG_NO`= ?,
        `FATHER_NAME`= ?,`FATHER_MOBILE_NUMBER`= ?,`FATHER_NID`= ?,
        `MOTHER_NAME`= ?,`MOTHER_MOBILE_NUMBER`= ?,`MOTHER_NID`= ?,
        `PRESENT_ADDRESS`= ?,`PERMANENT_ADDRESS`= ? WHERE `STUDENT_ID` = ?');
  
        $update->execute([
          $ACADEMIC_YEAR,$SHIFT,$SECTION,
          $CLASS,$ROLL,$NAME_EN,
          $NAME_BN,$BLOOD_GROUP,$RELIGION,
          $GENDER,$DATE_OF_BIRTH,$BIRTH_REG_NO,
          $FATHER_NAME,$FATHER_MOBILE_NUMBER,$FATHER_NID,
          $MOTHER_NAME,$MOTHER_MOBILE_NUMBER,$MOTHER_NID,
          $PRESENT_ADDRESS,$PERMANENT_ADDRESS,$STUDENT_ID]);
    }

    public function addStudentRecord($ACADEMIC_YEAR,$SHIFT,$SECTION,
    $CLASS,$ROLL,$NAME_EN,
    $NAME_BN,$BLOOD_GROUP,$RELIGION,
    $GENDER,$DATE_OF_BIRTH,$BIRTH_REG_NO,
    $FATHER_NAME,$FATHER_MOBILE_NUMBER,$FATHER_NID,
    $MOTHER_NAME,$MOTHER_MOBILE_NUMBER,$MOTHER_NID,
    $PRESENT_ADDRESS,$PERMANENT_ADDRESS){
        $addStudent = $this->pub_pdo->prepare('INSERT INTO `shnmm_tbl_students` (`ACADEMIC_YEAR`, `SHIFT`, `SECTION`, 
        `CLASS`, `ROLL`, `NAME_EN`, 
        `NAME_BN`, `BLOOD_GROUP`, `RELIGION`, 
        `GENDER`, `DATE_OF_BIRTH`, `BIRTH_REG_NO`, 
        `FATHER_NAME`, `FATHER_MOBILE_NUMBER`, `FATHER_NID`, 
        `MOTHER_NAME`, `MOTHER_MOBILE_NUMBER`, `MOTHER_NID`, 
        `PRESENT_ADDRESS`, `PERMANENT_ADDRESS`) VALUES (?,?,?,
        ?,?,?,
        ?,?,?,
        ?,?,?,
        ?,?,?,
        ?,?,?,
        ?,?)');
      
      $addStudent->execute([
        $ACADEMIC_YEAR,$SHIFT,$SECTION,
        $CLASS,$ROLL,$NAME_EN,
        $NAME_BN,$BLOOD_GROUP,$RELIGION,
        $GENDER,$DATE_OF_BIRTH,$BIRTH_REG_NO,
        $FATHER_NAME,$FATHER_MOBILE_NUMBER,$FATHER_NID,
        $MOTHER_NAME,$MOTHER_MOBILE_NUMBER,$MOTHER_NID,
        $PRESENT_ADDRESS,$PERMANENT_ADDRESS]);
    }

    public function changeStatusStudentById($STUDENT_ID,$STATUS,$REMARK){
        $changeStatus = $this->pub_pdo->prepare('UPDATE `shnmm_tbl_students` SET `STATUS`= ?, `REMARK`= ? WHERE `STUDENT_ID` = ?');
	    $changeStatus->execute([$STATUS,$REMARK,$STUDENT_ID]);
    }
}