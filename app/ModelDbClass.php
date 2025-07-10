<?php

class ModelDbClass{

    Public $pub_pdo;

    public function __construct(){
        require "app/init-config.php";
        $this->pub_pdo = $pdo;
    }

    public function StudentCount($CLASS,$STATUS){

        if($STATUS){
            $select = $this->pub_pdo->prepare('SELECT * FROM `shnmm_tbl_students` WHERE `STATUS`=?');
            $select->execute([$STATUS]);
            echo $select->rowCount();
        }

        if($CLASS){
            $select = $this->pub_pdo->prepare('SELECT * FROM `shnmm_tbl_students` WHERE `CLASS`=? AND `STATUS`=?');
            $select->execute([$CLASS,'ACTIVE']);
            echo $select->rowCount();
        }

    }

    public function showStudentsAll(){
        $statement = $this->pub_pdo->prepare('SELECT * FROM `shnmm_tbl_students`');
        $statement->execute();
        return $statement->fetchAll();
    }

    public function showStudentByCatagory($CLASS,$STATUS){

        if($STATUS){
            $select = $this->pub_pdo->prepare('SELECT * FROM `shnmm_tbl_students` WHERE `STATUS`=? ORDER BY `ROLL`');
            $select->execute([$STATUS]);
            return $select->fetchAll();
        }

        if($CLASS){
            $select = $this->pub_pdo->prepare('SELECT * FROM `shnmm_tbl_students` WHERE `CLASS`=? AND `STATUS`=? ORDER BY `ROLL`');
            $select->execute([$CLASS,'ACTIVE']);
            return $select->fetchAll();
        }
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
    $PRESENT_ADDRESS,$PERMANENT_ADDRESS,$REMARK,$STUDENT_ID){
        $update = $this->pub_pdo->prepare('UPDATE `shnmm_tbl_students` SET 
        `ACADEMIC_YEAR`= ?,`SHIFT`= ?,`SECTION`= ?,
        `CLASS`= ?,`ROLL`= ?,`NAME_EN`= ?,
        `NAME_BN`= ?,`BLOOD_GROUP`= ?,`RELIGION`= ?,
        `GENDER`= ?,`DATE_OF_BIRTH`= ?,`BIRTH_REG_NO`= ?,
        `FATHER_NAME`= ?,`FATHER_MOBILE_NUMBER`= ?,`FATHER_NID`= ?,
        `MOTHER_NAME`= ?,`MOTHER_MOBILE_NUMBER`= ?,`MOTHER_NID`= ?,
        `PRESENT_ADDRESS`= ?,`PERMANENT_ADDRESS`= ?, `REMARK`= ? WHERE `STUDENT_ID` = ?');
  
        $update->execute([
          $ACADEMIC_YEAR,$SHIFT,$SECTION,
          $CLASS,$ROLL,$NAME_EN,
          $NAME_BN,$BLOOD_GROUP,$RELIGION,
          $GENDER,$DATE_OF_BIRTH,$BIRTH_REG_NO,
          $FATHER_NAME,$FATHER_MOBILE_NUMBER,$FATHER_NID,
          $MOTHER_NAME,$MOTHER_MOBILE_NUMBER,$MOTHER_NID,
          $PRESENT_ADDRESS,$PERMANENT_ADDRESS,$REMARK,$STUDENT_ID]);
    }

    public function addStudentRecord($ACADEMIC_YEAR,$SHIFT,$SECTION,
    $CLASS,$ROLL,$NAME_EN,
    $NAME_BN,$BLOOD_GROUP,$RELIGION,
    $GENDER,$DATE_OF_BIRTH,$BIRTH_REG_NO,
    $FATHER_NAME,$FATHER_MOBILE_NUMBER,$FATHER_NID,
    $MOTHER_NAME,$MOTHER_MOBILE_NUMBER,$MOTHER_NID,
    $PRESENT_ADDRESS,$PERMANENT_ADDRESS,$REMARK){
        $addStudent = $this->pub_pdo->prepare('INSERT INTO `shnmm_tbl_students` (`ACADEMIC_YEAR`, `SHIFT`, `SECTION`, 
        `CLASS`, `ROLL`, `NAME_EN`, 
        `NAME_BN`, `BLOOD_GROUP`, `RELIGION`, 
        `GENDER`, `DATE_OF_BIRTH`, `BIRTH_REG_NO`, 
        `FATHER_NAME`, `FATHER_MOBILE_NUMBER`, `FATHER_NID`, 
        `MOTHER_NAME`, `MOTHER_MOBILE_NUMBER`, `MOTHER_NID`, 
        `PRESENT_ADDRESS`, `PERMANENT_ADDRESS`,`REMARK`) VALUES (?,?,?,
        ?,?,?,
        ?,?,?,
        ?,?,?,
        ?,?,?,
        ?,?,?,
        ?,?,?)');
      
      $addStudent->execute([
        $ACADEMIC_YEAR,$SHIFT,$SECTION,
        $CLASS,$ROLL,$NAME_EN,
        $NAME_BN,$BLOOD_GROUP,$RELIGION,
        $GENDER,$DATE_OF_BIRTH,$BIRTH_REG_NO,
        $FATHER_NAME,$FATHER_MOBILE_NUMBER,$FATHER_NID,
        $MOTHER_NAME,$MOTHER_MOBILE_NUMBER,$MOTHER_NID,
        $PRESENT_ADDRESS,$PERMANENT_ADDRESS,$REMARK]);
    }

    public function changeStatusStudentById($STUDENT_ID,$STATUS,$REMARK){
        $changeStatus = $this->pub_pdo->prepare('UPDATE `shnmm_tbl_students` SET `STATUS`= ?, `REMARK`= ? WHERE `STUDENT_ID` = ?');
	    $changeStatus->execute([$STATUS,$REMARK,$STUDENT_ID]);
    }
}