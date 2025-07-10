<?php include "theme/app-head.php"; ?>
<?php include "theme/app-header-nav.php"; ?>
<?php include "theme/app-sidebar-nav.php"; ?>
<?php $db = new ModelDbClass(); ?>

<!-- begin::`shnmm_tbl_students`-update -->
<?php

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

      $db->updateStudentById($ACADEMIC_YEAR,$SHIFT,$SECTION,$CLASS,$ROLL,$NAME_EN,$NAME_BN,$BLOOD_GROUP,$RELIGION,$GENDER,
      $DATE_OF_BIRTH,$BIRTH_REG_NO,$FATHER_NAME,$FATHER_MOBILE_NUMBER,$FATHER_NID,$MOTHER_NAME,$MOTHER_MOBILE_NUMBER,
      $MOTHER_NID,$PRESENT_ADDRESS,$PERMANENT_ADDRESS,$STUDENT_ID);
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

      $db->addStudentRecord($ACADEMIC_YEAR,$SHIFT,$SECTION,$CLASS,$ROLL,$NAME_EN,$NAME_BN,$BLOOD_GROUP,$RELIGION,$GENDER,
      $DATE_OF_BIRTH,$BIRTH_REG_NO,$FATHER_NAME,$FATHER_MOBILE_NUMBER,$FATHER_NID,$MOTHER_NAME,$MOTHER_MOBILE_NUMBER,
      $MOTHER_NID,$PRESENT_ADDRESS,$PERMANENT_ADDRESS);

    }

    if(isset($_POST['deleteStudentBtn'])){
      $STUDENT_ID = $_POST['STUDENT_ID'];

      $db->trashExStudentById($STUDENT_ID);
    }
  }    
  
  
?>
<!-- end::`shnmm_tbl_students`-update -->

<main class="app-main">

  <!--begin::App Content Header-->
  <div class="app-content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6"><h3 class="mb-0">Students EX Record</h3></div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="<?= $web_address ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Students Record</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!--end::App Content Header-->

  <div class="app-content">
    
    <div class="container-fluid">

      <hr>
      <h4 class="mb-3">Total Record Found <b><?php $db->StudentCountExStatus(); ?></b></h4>

      <div class="div-container">

        <table id="studentTable" class="table table-striped table-bordered">
          <thead>
            <tr>
            <th>ROLL</th>
            <th>PIC</th>
            <th>NAME_BN</th>
            <th>NAME_EN</th>
            <th>FATHER_NAME</th>                    
            <th>ACTION</th>
            </tr>
          </thead>
            <?php
              $result = $db->showStudentByExStatus();
              foreach($result as $data){
                ?>
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
                        <h1 class="modal-title fs-5">Delete Student</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                      </div>
                      <form method="post">
                        <div class="modal-body">
                            <div class="card-body">
                              <p>Student ID: <?= $data['STUDENT_ID'] ?></p>
                              <p>Name English: <?= $data['NAME_EN'] ?></p>
                              <p>Name Bangla: <?= $data['NAME_BN'] ?></p>
                              <input type="hidden" name="STUDENT_ID" value="<?= $data['STUDENT_ID'] ?>">
                            </div>
                        </div>
                        <div class="modal-footer">

                          <input type="submit" class="btn btn-danger" name="deleteStudentBtn" value="Delete">
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

                <tr>
                <td><a class="text-decoration-none btn btn-primary" href="/student-details?id=<?= $data['STUDENT_ID'] ?>"><?= $data['ROLL'] ?></a></td>
                <td><img src="views/theme/img/<?= $data['STUDENT_ID'] ?>.png" alt="" class="profile-img img-thumbnail"></td>
                <td><?= $data['NAME_BN'] ?></td>
                <td><?= $data['NAME_EN'] ?></td>
                <td><?= $data['FATHER_NAME'] ?></td>
                <td>
                  <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#update<?= $data['STUDENT_ID'] ?>" href="#"><i class="fas fa-pen-to-square"></i></a>
                  <a class="btn btn-success" href="tel:<?= $data['FATHER_MOBILE_NUMBER'] ?>" class="button"><i class="fa-solid fa-phone-volume"></i>(<?= $data['FATHER_MOBILE_NUMBER'] ?>) </a>
                  <a class="btn btn-success" href="tel:<?= $data['MOTHER_MOBILE_NUMBER'] ?>" class="button"><i class="fa-solid fa-phone-volume"></i>(<?= $data['MOTHER_MOBILE_NUMBER'] ?>)</a>
                  <a class="btn btn-info" data-bs-toggle="modal" data-bs-target="#sms<?= $data['STUDENT_ID'] ?>" href="#"><i class="fa-solid fa-comment-sms"></i></a>
                  <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?= $data['STUDENT_ID'] ?>" href="#"><i class="bi bi-arrow-clockwise"></i></a>
                </td>
                </tr>
                    
                  <?php
                }
              ?>
        </table>

      </div>
      
    </div>
    
  </div>

  <!--end::App Content-->
</main>

<?php include "theme/app-footer-nav.php"; ?>
<?php include "theme/app-footer.php"; ?>
