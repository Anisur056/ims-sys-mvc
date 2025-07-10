<?php require ('app/verify-session.php'); ?>
<?php include "theme/app-head.php"; ?>
<?php include "theme/app-header-nav.php"; ?>
<?php include "theme/app-sidebar-nav.php"; ?>
<?php $db = new ModelDbClass(); ?>

<!-- begin::`shnmm_tbl_students`-update -->
<?php

  if(!isset($_GET['class'])){
    $CLASS = 'PLAY';
  }else{
    $CLASS = $_GET['class']; 
  }

  if(!isset($_GET['status'])){
    $STATUS = NULL;
  }else{
    $STATUS = $_GET['status']; 
  }

  if ($_SERVER['REQUEST_METHOD']=='POST') 
  {

    if(isset($_POST['send_sms'])){
      sms_send($_POST['mobile_number'],$_POST['message']);
    }

    if(isset($_POST['updateStudentBtn'])){
      $STUDENT_ID = $_POST['STUDENT_ID'];
      
      $ACADEMIC_YEAR = $_POST['ACADEMIC_YEAR'];
      $SHIFT = $_POST['SHIFT'];
      $SECTION = $_POST['SECTION'];
      $CLASS = $_POST['CLASS'];
      $ROLL = $_POST['ROLL'];
      $NAME_EN = $_POST['NAME_EN'];
      $NAME_BN = $_POST['NAME_BN'];
      $BLOOD_GROUP = $_POST['BLOOD_GROUP'];
      $RELIGION = $_POST['RELIGION'];
      $GENDER = $_POST['GENDER'];
      $DATE_OF_BIRTH = $_POST['DATE_OF_BIRTH'];
      $BIRTH_REG_NO = $_POST['BIRTH_REG_NO'];
      $FATHER_NAME = $_POST['FATHER_NAME'];
      $FATHER_MOBILE_NUMBER = $_POST['FATHER_MOBILE_NUMBER'];
      $FATHER_NID = $_POST['FATHER_NID'];
      $MOTHER_NAME = $_POST['MOTHER_NAME'];
      $MOTHER_MOBILE_NUMBER = $_POST['MOTHER_MOBILE_NUMBER'];
      $MOTHER_NID = $_POST['MOTHER_NID'];
      $PRESENT_ADDRESS = $_POST['PRESENT_ADDRESS'];
      $PERMANENT_ADDRESS = $_POST['PERMANENT_ADDRESS'];
      $REMARK = $_POST['REMARK'];

      $db->updateStudentById($ACADEMIC_YEAR,$SHIFT,$SECTION,$CLASS,$ROLL,$NAME_EN,$NAME_BN,$BLOOD_GROUP,$RELIGION,$GENDER,
      $DATE_OF_BIRTH,$BIRTH_REG_NO,$FATHER_NAME,$FATHER_MOBILE_NUMBER,$FATHER_NID,$MOTHER_NAME,$MOTHER_MOBILE_NUMBER,
      $MOTHER_NID,$PRESENT_ADDRESS,$PERMANENT_ADDRESS,$REMARK,$STUDENT_ID);
    }

    if(isset($_POST['addStudentbtn'])){

      $ACADEMIC_YEAR = $_POST['ACADEMIC_YEAR'];
      $SHIFT = $_POST['SHIFT'];
      $SECTION = $_POST['SECTION'];
      $CLASS = $_POST['CLASS'];
      $ROLL = $_POST['ROLL'];
      $NAME_EN = $_POST['NAME_EN'];
      $NAME_BN = $_POST['NAME_BN'];
      $BLOOD_GROUP = $_POST['BLOOD_GROUP'];
      $RELIGION = $_POST['RELIGION'];
      $GENDER = $_POST['GENDER'];
      $DATE_OF_BIRTH = $_POST['DATE_OF_BIRTH'];
      $BIRTH_REG_NO = $_POST['BIRTH_REG_NO'];
      $FATHER_NAME = $_POST['FATHER_NAME'];
      $FATHER_MOBILE_NUMBER = $_POST['FATHER_MOBILE_NUMBER'];
      $FATHER_NID = $_POST['FATHER_NID'];
      $MOTHER_NAME = $_POST['MOTHER_NAME'];
      $MOTHER_MOBILE_NUMBER = $_POST['MOTHER_MOBILE_NUMBER'];
      $MOTHER_NID = $_POST['MOTHER_NID'];
      $PRESENT_ADDRESS = $_POST['PRESENT_ADDRESS'];
      $PERMANENT_ADDRESS = $_POST['PERMANENT_ADDRESS'];
      $REMARK = $_POST['REMARK'];

      $db->addStudentRecord($ACADEMIC_YEAR,$SHIFT,$SECTION,$CLASS,$ROLL,$NAME_EN,$NAME_BN,$BLOOD_GROUP,$RELIGION,$GENDER,
      $DATE_OF_BIRTH,$BIRTH_REG_NO,$FATHER_NAME,$FATHER_MOBILE_NUMBER,$FATHER_NID,$MOTHER_NAME,$MOTHER_MOBILE_NUMBER,
      $MOTHER_NID,$PRESENT_ADDRESS,$PERMANENT_ADDRESS,$REMARK);

    }

    if(isset($_POST['deleteStudentBtn'])){
      $STUDENT_ID = $_POST['STUDENT_ID'];
      $STATUS = $_POST['STATUS'];
      $REMARK = $_POST['REMARK'];

      $db->changeStatusStudentById($STUDENT_ID,$STATUS,$REMARK);
    }
  }    
  
  
?>
<!-- end::`shnmm_tbl_students`-update -->

<main class="app-main">

  <!--begin::App Content Header-->
  <div class="app-content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6"><h3 class="mb-0">Students Record</h3></div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="<?= $web_address ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Students Record</li>
          </ol>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modelAddStudent">
      <i class="fa-solid fa-user-plus"></i> Add Student
      </button>
      <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modelBulkUpload">
      <i class="fa-solid fa-cloud-arrow-up"></i> Bulk Upload
      </button>
      <a target="_blank" type="button" class="btn btn-success" href="<?= $web_address ?>student-record-table" >
      <i class="fa-solid fa-list-check"></i>  Records Table
      </a>
    </div>

  </div>
  <!--end::App Content Header-->

  <div class="app-content">
    
    <div class="container-fluid">
      <hr>
      <nav class="mb-3">
        <a class="btn btn-primary m-1" href="?class=PLAY">PLAY- <?php $db->StudentCount('PLAY',NULL); ?></a>
        <a class="btn btn-primary m-1" href="?class=NURSERY">NURSERY- <?php $db->StudentCount('NURSERY',NULL); ?></a>
        <a class="btn btn-primary m-1 " href="?class=ONE">ONE- <?php $db->StudentCount('ONE',NULL); ?></a>
        <a class="btn btn-primary m-1 " href="?class=TWO">TWO- <?php $db->StudentCount('TWO',NULL); ?></a>
        <a class="btn btn-primary m-1 " href="?class=THREE">THREE- <?php $db->StudentCount('THREE',NULL); ?></a>
        <a class="btn btn-primary m-1 " href="?class=FOUR">FOUR- <?php $db->StudentCount('FOUR',NULL); ?></a>
        <a class="btn btn-primary m-1 " href="?class=HIFZ-NAZERA">HIFZ-NAZERA- <?php $db->StudentCount('HIFZ-NAZERA',NULL); ?></a>
        <a class="btn btn-primary m-1 " href="?class=HIFZ-INTERNATIONAL">HIFZ-INTERNATIONAL- <?php $db->StudentCount('HIFZ-INTERNATIONAL',NULL); ?></a>
        <a class="btn btn-primary m-1 " href="?class=HIFZ-RIVISION">HIFZ-RIVISION- <?php $db->StudentCount('HIFZ-RIVISION',NULL); ?></a>
        <hr>
        <a class="btn btn-danger m-1 " href="?status=IN-ACTIVE">IN-ACTIVE- <?php $db->StudentCount(NULL,'IN-ACTIVE'); ?></a>
        <a class="btn btn-danger m-1 " href="?status=LEAVE">LEAVE- <?php $db->StudentCount(NULL,'LEAVE'); ?></a>
        <a class="btn btn-danger m-1 " href="?status=TC">TC- <?php $db->StudentCount(NULL,'TC'); ?></a>
        <a class="btn btn-danger m-1 " href="?status=BOARD-EXAM-COMPLETE">BOARD-EXAM-COMPLETE- <?php $db->StudentCount(NULL,'BOARD-EXAM-COMPLETE'); ?></a>
      </nav>
      <hr>

      <table id="studentTable" class="table table-striped table-bordered studentRecordTable">
        <thead>
          <tr>
          <th>ROLL</th>
          <th>PIC</th>
          <th>NAME_BN</th>
          <th>NAME_EN</th>
          <th>FATHER_NAME</th>                    
          <th>REMARK</th>                    
          <th>ACTION</th>
          </tr>
        </thead>
          <?php
            $result = $db->showStudentByCatagory($CLASS, $STATUS);
            foreach($result as $data){
              ?>

              <tr>
              <td><a class="text-decoration-none btn btn-primary" href="/student-profile?id=<?= $data['STUDENT_ID'] ?>"><?= $data['ROLL'] ?></a></td>
              <td><img src="<?= $data['PIC'] ?>" alt="" class="img-fluid img-thumbnail" style="width:150px; height:auto;"></td>
              <td class="bangla"><?= $data['NAME_BN'] ?></td>
              <td><?= $data['NAME_EN'] ?></td>
              <td><?= $data['FATHER_NAME'] ?></td>
              <td class="bangla"><?= $data['REMARK'] ?></td>
              <td>
                <a class="btn btn-primary m-1" data-bs-toggle="modal" data-bs-target="#update<?= $data['STUDENT_ID'] ?>" href="#"><i class="fas fa-pen-to-square"></i> Update</a>
                <a class="btn btn-success m-1" data-bs-toggle="modal" data-bs-target="#call<?= $data['STUDENT_ID'] ?>" href="#"><i class="fa-solid fa-phone-volume"></i> Call</a>
                <a class="btn btn-info m-1" data-bs-toggle="modal" data-bs-target="#sms<?= $data['STUDENT_ID'] ?>" href="#"><i class="fa-solid fa-comment-sms"></i> SMS</a>
                <a class="btn btn-danger m-1" data-bs-toggle="modal" data-bs-target="#delete<?= $data['STUDENT_ID'] ?>" href="#"><i class="fa-solid fa-right-left"></i> Move</a>
              </td>
              </tr>

              <!-- Model Content For CALL-->
              <div class="modal fade" id="call<?= $data['STUDENT_ID'] ?>">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5">Call</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">

                      <div class="row">
                        <div class="col-sm-6">
                          <!--begin::Small Box Widget 4-->
                          <a class="text-decoration-none" href="tel:<?= $data['FATHER_MOBILE_NUMBER'] ?>">
                            <div class="small-box text-bg-success">
                              <div class="inner">
                                <h3>
                                <?= $data['FATHER_MOBILE_NUMBER'] ?>
                                </h3>
                                <p><?= $data['FATHER_NAME'] ?></p>
                              </div>
                              <span class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">Call Now <i class="fa-solid fa-phone-volume"></i></span>
                            </div>
                          </a>
                          <!--end::Small Box Widget 4-->
                        </div>
    
                        <div class="col-sm-6">
                          <!--begin::Small Box Widget 4-->
                          <a class="text-decoration-none" href="tel:<?= $data['MOTHER_MOBILE_NUMBER'] ?>">
                            <div class="small-box text-bg-success">
                              <div class="inner">
                                <h3>
                                <?= $data['MOTHER_MOBILE_NUMBER'] ?>
                                </h3>
                                <p><?= $data['MOTHER_NAME'] ?></p>
                              </div>
                              <span class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">Call Now <i class="fa-solid fa-phone-volume"></i></span>
                            </div>
                          </a>
                          <!--end::Small Box Widget 4-->
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
              <!-- End Model Content -->

              <!-- Model Content For SMS-->
              <div class="modal fade" id="sms<?= $data['STUDENT_ID'] ?>">
                <form action="" method="post">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5">Send SMS</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                      </div>
                      <div class="modal-body">

                        <div class="form-group">
                            <label class="control-label"> Sender ID: +88 09617-624 990 </label>
                        </div>

                        <div class="form-group">
                          <label class="control-label">  Recipients <span class="red">*</span> : </label>
                              <textarea rows="2" 
                              class="form-control input-medium" 
                              name="mobile_number"><?= $data['FATHER_MOBILE_NUMBER'] ?></textarea>
                        </div>
                        

                        <div class="form-group">
                        <label class="control-label">  Message <span class="red">*</span> : </label>
                              <textarea rows="5" 
                              class="form-control input-medium" 
                              name="message">আপনার সন্তান, <?= $data['NAME_BN'] ?>- মাদ্রাসায় উপস্থিত হয়নি। তারিখ: <?= date('d-m-Y') ?>, সময়: <?= date('h:i:sA') ?></textarea>
                        </div>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="send_sms" class="btn btn-primary">Send</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <!-- End Model Content -->

              <!-- Model Content For Delete-->
              <div class="modal fade bg-danger" id="delete<?= $data['STUDENT_ID'] ?>">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5">Move Student</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <form method="post">
                      <div class="modal-body">
                        <div class="card-body">
                            <p>Student ID: <?= $data['STUDENT_ID'] ?></p>
                            <p>Name: <?= $data['NAME_EN'] ?></p>
                            <p class="bangla">নাম: <?= $data['NAME_BN'] ?></p>
                            <input type="hidden" name="STUDENT_ID" value="<?= $data['STUDENT_ID'] ?>">
                            <select name="STATUS" class="form-select" required="">
                                <option value="">Please Select a Action</option>
                                <option value="ACTIVE">ACTIVE</option>
                                <option value="IN-ACTIVE">Inactive Student</option>                                
                                <option value="LEAVE">Studnet Leave</option>
                                <option value="TC">Transfer Another Institute (TC)</option>
                                <option value="BOARD-EXAM-COMPLETE">Board Exam Complete</option>
                            </select>
                            <div class="form-floating mt-3">
                              <textarea name="REMARK" class="form-control" placeholder="" id="floatingTextarea2" style="height: 200px"><?= $data['REMARK'] ?></textarea>
                              <label for="floatingTextarea2">REMARK</label>
                            </div>
                        </div>
                      </div>
                      <div class="modal-footer">

                        <input type="submit" class="btn btn-danger" name="deleteStudentBtn" value="Move">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>                      
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- End Model Content -->
                
              <!-- Model Content For Update-->
              <div class="modal fade" id="update<?= $data['STUDENT_ID'] ?>">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5">Update Student Records</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">

                      <form method="post">
                        <div class="card-body">
                          <p>Student ID: <?= $data['STUDENT_ID'] ?></p>
                          <div class="card p-3 mb-3 bg-success">
                            <h5>Academic Information</h5>
                            <input type="hidden" name="STUDENT_ID" value="<?= $data['STUDENT_ID'] ?>">

                            <div class="form-floating mb-3">
                              <input type="text" class="form-control" name="ACADEMIC_YEAR" placeholder="" value="<?= $data['ACADEMIC_YEAR'] ?>">
                              <label>Academic Year:</label>
                            </div>

                            <div class="form-floating mb-3">
                              <input type="text" class="form-control" name="SHIFT" placeholder="" value="<?= $data['SHIFT'] ?>">
                              <label>Shift</label>
                            </div>

                            <div class="form-floating mb-3">
                              <input type="text" class="form-control" name="CLASS" placeholder="" value="<?= $data['CLASS'] ?>">
                              <label>Class</label>
                            </div>

                            <div class="form-floating mb-3">
                              <input type="text" class="form-control" name="SECTION" placeholder="" value="<?= $data['SECTION'] ?>">
                              <label>Section</label>
                            </div>

                            <div class="form-floating mb-3">
                              <input type="text" class="form-control" name="ROLL" placeholder="" value="<?= $data['ROLL'] ?>">
                              <label>Roll</label>
                            </div>
                          </div>

                          <div class="card p-3 mb-3">
                            <h5>Student Information</h5>
                            <div class="form-floating mb-3">
                              <input type="text" class="form-control" name="NAME_EN" placeholder="" value="<?= $data['NAME_EN'] ?>">
                              <label>Name (In English)</label>
                            </div>

                            <div class="form-floating mb-3">
                              <input type="text" class="form-control" name="NAME_BN" placeholder="" value="<?= $data['NAME_BN'] ?>">
                              <label>Name (In Bangla)</label>
                            </div>

                            <div class="form-floating mb-3">
                              <input type="text" class="form-control" name="BLOOD_GROUP" placeholder="" value="<?= $data['BLOOD_GROUP'] ?>">
                              <label>Blood Group</label>
                            </div>

                            <div class="form-floating mb-3">
                              <input type="text" class="form-control" name="RELIGION" placeholder="" value="<?= $data['RELIGION'] ?>">
                              <label>Religion</label>
                            </div>

                            <div class="form-floating mb-3">
                              <input type="text" class="form-control" name="GENDER" placeholder="" value="<?= $data['GENDER'] ?>">
                              <label>Gender</label>
                            </div>

                            <div class="form-floating mb-3">
                              <input type="text" class="form-control" name="DATE_OF_BIRTH" placeholder="" value="<?= $data['DATE_OF_BIRTH'] ?>">
                              <label>Date of Birth</label>
                            </div>

                            <div class="form-floating mb-3">
                              <input type="text" class="form-control" name="BIRTH_REG_NO" placeholder="" value="<?= $data['BIRTH_REG_NO'] ?>">
                              <label>Birth Reg. No.</label>
                            </div>
                          </div>

                          <div class="card p-3 mb-3  bg-success">
                            <h5>Guardian Information</h5>

                            <div class="form-floating mb-3">
                              <input type="text" class="form-control" name="FATHER_NAME" placeholder="" value="<?= $data['FATHER_NAME'] ?>">
                              <label>Father's Name</label>
                            </div>

                            <div class="form-floating mb-3">
                              <input type="text" class="form-control" name="FATHER_MOBILE_NUMBER" placeholder="" value="<?= $data['FATHER_MOBILE_NUMBER'] ?>">
                              <label>Father's Mobile Number</label>
                            </div>

                            <div class="form-floating mb-3">
                              <input type="text" class="form-control" name="FATHER_NID" placeholder="" value="<?= $data['FATHER_NID'] ?>">
                              <label>Father's N.I.D</label>
                            </div>

                            <div class="form-floating mb-3">
                              <input type="text" class="form-control" name="MOTHER_NAME" placeholder="" value="<?= $data['MOTHER_NAME'] ?>">
                              <label>Mother's Name</label>
                            </div>

                            <div class="form-floating mb-3">
                              <input type="text" class="form-control" name="MOTHER_MOBILE_NUMBER" placeholder="" value="<?= $data['MOTHER_MOBILE_NUMBER'] ?>">
                              <label>Mother's Mobile Number</label>
                            </div>

                            <div class="form-floating mb-3">
                              <input type="text" class="form-control" name="MOTHER_NID" placeholder="" value="<?= $data['MOTHER_NID'] ?>">
                              <label>Mother's N.I.D</label>
                            </div>
                          </div>

                          <div class="card p-3 mb-3">
                            <h5>Address</h5>
                            <div class="form-floating mb-3">
                              <input type="text" class="form-control" name="PRESENT_ADDRESS" placeholder="" value="<?= $data['PRESENT_ADDRESS'] ?>">
                              <label>Present Address</label>
                            </div>

                            <div class="form-floating mb-3">
                              <input type="text" class="form-control" name="PERMANENT_ADDRESS" placeholder="" value="<?= $data['PERMANENT_ADDRESS'] ?>">
                              <label>Permanent Address</label>
                            </div>
                          </div>

                          <div class="card p-3 mb-3">
                            <div class="form-floating mt-3">
                              <textarea name="REMARK" class="form-control bangla" placeholder="" id="floatingTextarea2" style="height: 200px"><?= $data['REMARK'] ?></textarea>
                              <label for="floatingTextarea2">REMARK</label>
                            </div>
                          </div>

                        </div> 
                        <div class="card-footer">
                          <input type="submit" class="btn btn-outline-primary" name="updateStudentBtn" value="Update">
                          <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancel</button>
                        </div> 
                      </form>

                    </div>
                  </div>
                </div>
              </div>
              <!-- End Model Content --> 
                  
                <?php
              }
            ?>
      </table>

      <!-- Model Add Student -->
      <div class="modal fade" id="modelAddStudent">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Add New Student</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">

              <form method="post">
                <div class="card-body">
                  <div class="card p-3 mb-3">
                    <h5>Academic Information</h5>

                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="ACADEMIC_YEAR" placeholder="" >
                      <label>Academic Year:</label>
                    </div>

                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="SHIFT" placeholder="">
                      <label>Shift</label>
                    </div>

                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="CLASS" placeholder="" >
                      <label>Class</label>
                    </div>

                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="SECTION" placeholder="">
                      <label>Section</label>
                    </div>

                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="ROLL" placeholder="">
                      <label>Roll</label>
                    </div>
                  </div>

                  <div class="card p-3 mb-3">
                    <h5>Student Information</h5>
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="NAME_EN" placeholder="">
                      <label>Name (In English)</label>
                    </div>

                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="NAME_BN" placeholder="">
                      <label>Name (In Bangla)</label>
                    </div>

                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="BLOOD_GROUP" placeholder="">
                      <label>Blood Group</label>
                    </div>

                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="RELIGION" placeholder="">
                      <label>Religion</label>
                    </div>

                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="GENDER" placeholder="">
                      <label>Gender</label>
                    </div>

                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="DATE_OF_BIRTH" placeholder="">
                      <label>Date of Birth</label>
                    </div>

                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="BIRTH_REG_NO" placeholder="">
                      <label>Birth Reg. No.</label>
                    </div>
                  </div>

                  <div class="card p-3 mb-3">
                    <h5>Guardian Information</h5>

                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="FATHER_NAME" placeholder="">
                      <label>Father's Name</label>
                    </div>

                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="FATHER_MOBILE_NUMBER" placeholder="" placeholder="">
                      <label>Father's Mobile Number</label>
                    </div>

                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="FATHER_NID" placeholder="" placeholder="">
                      <label>Father's N.I.D</label>
                    </div>

                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="MOTHER_NAME" placeholder="" placeholder="">
                      <label>Mother's Name</label>
                    </div>

                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="MOTHER_MOBILE_NUMBER" placeholder="">
                      <label>Mother's Mobile Number</label>
                    </div>

                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="MOTHER_NID" placeholder="" placeholder="">
                      <label>Mother's N.I.D</label>
                    </div>
                  </div>

                  <div class="card p-3 mb-3">
                    <h5>Address</h5>
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="PRESENT_ADDRESS" placeholder="">
                      <label>Present Address</label>
                    </div>

                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="PERMANENT_ADDRESS" placeholder="">
                      <label>Permanent Address</label>
                    </div>
                  </div>

                  <div class="card p-3 mb-3">
                    <div class="form-floating mt-3">
                      <textarea name="REMARK" class="form-control" placeholder="" id="floatingTextarea2" style="height: 200px">ভর্তি সংক্রান্ত কোন মন্তব্য থাকলে লিখুন</textarea>
                      <label for="floatingTextarea2">REMARK</label>
                    </div>
                  </div>

                </div> 
                <div class="card-footer">
                  <button type="submit" class="btn btn-outline-primary" name="addStudentbtn"><i class="fa-solid fa-floppy-disk"></i> Save</button>
                  <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal"> <i class="fa-solid fa-xmark"></i> Cancel</button>
                </div> 
              </form>

            </div>
            
          </div>
        </div>
      </div>
      <!-- End Model Add Student -->

      <!-- Model Bulk Upload Student -->
      <div class="modal fade" id="modelBulkUpload">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Bulk Upload File</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">

              <form method="post">
                <div class="card-body">
                  <div class="card p-3 mb-3">
                    <h5 class="mb-3 text-center">Upload with Excel File</h5>
                    <div class="mb-3">
                      <input class="form-control form-control-lg" type="file">
                    </div>
                  </div>
                </div> 
                <div class="card-footer">
                  <input type="submit" class="btn btn-outline-primary" name="bulkUpload" value="Upload">
                  <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancel</button>
                </div> 
              </form>

            </div>
            
          </div>
        </div>
      </div>
      <!-- End Model Bulk Upload Student -->
      
    </div>
    
  </div>
  <!--end::App Content-->
</main>

<?php include "theme/app-footer-nav.php"; ?>
<?php include "theme/app-footer.php"; ?>
