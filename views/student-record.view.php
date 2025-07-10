<?php include "theme/app-head.php"; ?>
<?php include "theme/app-header-nav.php"; ?>
<?php include "theme/app-sidebar-nav.php"; ?>
<?php $db = new ModelDbClass(); ?>

<!-- begin::`shnmm_tbl_students`-update -->
<?php
  if ($_SERVER['REQUEST_METHOD']=='POST') 
  {
    if(isset($_POST['update'])){
      
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
      <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#modelRegisterStudent">
        Register Student
      </button>
      <!-- Model Register Student -->
      <div class="modal fade" id="modelRegisterStudent">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Register Student Information</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">


            <div class="form-floating mb-3">
              <input type="email" class="form-control" name="" placeholder="name@example.com">
              <label>Email address</label>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
              <label for="floatingPassword">Password</label>
            </div>


            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
      <!-- End Model Register Student -->
    </div>

  </div>
  <!--end::App Content Header-->

  <div class="app-content">
    
    <div class="container-fluid">

      <!-- Tab Buttons -->
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="PLAY-tab" data-bs-toggle="tab" data-bs-target="#PLAY" type="button" role="tab" aria-controls="PLAY" aria-selected="true">PLAY</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="NURSERY-tab" data-bs-toggle="tab" data-bs-target="#NURSERY" type="button" role="tab" aria-controls="NURSERY" aria-selected="false">NURSERY</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="ONE-tab" data-bs-toggle="tab" data-bs-target="#ONE" type="button" role="tab" aria-controls="ONE" aria-selected="false">ONE</button>
        </li>
          <li class="nav-item" role="presentation">
          <button class="nav-link" id="TWO-tab" data-bs-toggle="tab" data-bs-target="#TWO" type="button" role="tab" aria-controls="TWO" aria-selected="false">TWO</button>
        </li>
          <li class="nav-item" role="presentation">
          <button class="nav-link" id="THREE-tab" data-bs-toggle="tab" data-bs-target="#THREE" type="button" role="tab" aria-controls="THREE" aria-selected="false">THREE</button>
        </li>
          <li class="nav-item" role="presentation">
          <button class="nav-link" id="FOUR-tab" data-bs-toggle="tab" data-bs-target="#FOUR" type="button" role="tab" aria-controls="FOUR" aria-selected="false">FOUR</button>
        </li>
          <li class="nav-item" role="presentation">
          <button class="nav-link" id="HIFZ_NAZERA-tab" data-bs-toggle="tab" data-bs-target="#HIFZ_NAZERA" type="button" role="tab" aria-controls="HIFZ_NAZERA" aria-selected="false">HIFZ_NAZERA</button>
        </li>
          <li class="nav-item" role="presentation">
          <button class="nav-link" id="HIFZ_INT-tab" data-bs-toggle="tab" data-bs-target="#HIFZ_INT" type="button" role="tab" aria-controls="HIFZ_INT" aria-selected="false">HIFZ_INT</button>
        </li>
          <li class="nav-item" role="presentation">
          <button class="nav-link" id="HIFZ_RIVISION-tab" data-bs-toggle="tab" data-bs-target="#HIFZ_RIVISION" type="button" role="tab" aria-controls="HIFZ_RIVISION" aria-selected="false">HIFZ_RIVISION</button>
        </li>
      </ul>
      <!-- EndTab Buttons -->

      <div class="tab-content" id="myTabContent">
        <!-- Tab Content -->
        <div class="tab-pane fade show active p-3" id="PLAY" role="tabpanel" aria-labelledby="PLAY-tab">
          <div class="div-container">
            <?php
              $result = $db->showStudentByClass('PLAY');
              foreach($result as $data){
                ?>

                <!-- Model For Edit -->
                <div class="modal fade" id="edit<?= $data['STUDENT_ID'] ?>">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <form method="post">

                        <div class="modal-header">
                          <h5 class="modal-title">Update Student Information</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <div class="modal-body">
                          <p>Student ID: <?= $data['STUDENT_ID'] ?></p>
                          <div class="card p-3 mb-3 bg-success">
                            <h5>Academic Information</h5>
                            <input type="hidden" name="STUDENT_ID" value="<?= $data['STUDENT_ID'] ?>">

                            <div class="form-floating mb-3">
                              <input type="text" class="form-control" name="" placeholder="" value="<?= $data['ACADEMIC_YEAR'] ?>">
                              <label>Academic Year:</label>
                            </div>

                            <div class="form-floating mb-3">
                              <input type="text" class="form-control" name="" placeholder="" value="<?= $data['SHIFT'] ?>">
                              <label>Shift</label>
                            </div>

                            <div class="form-floating mb-3">
                              <input type="text" class="form-control" name="" placeholder="" value="<?= $data['CLASS'] ?>">
                              <label>Class</label>
                            </div>

                            <div class="form-floating mb-3">
                              <input type="text" class="form-control" name="" placeholder="" value="<?= $data['SECTION'] ?>">
                              <label>Section</label>
                            </div>

                            <div class="form-floating mb-3">
                              <input type="text" class="form-control" name="" placeholder="" value="<?= $data['ROLL'] ?>">
                              <label>Roll</label>
                            </div>
                          </div>

                          <div class="card p-3 mb-3">
                            <h5>Student Information</h5>
                            <div class="form-floating mb-3">
                              <input type="text" class="form-control" name="" placeholder="" value="<?= $data['NAME_EN'] ?>">
                              <label>Name (In English)</label>
                            </div>

                            <div class="form-floating mb-3">
                              <input type="text" class="form-control" name="" placeholder="" value="<?= $data['NAME_BN'] ?>">
                              <label>Name (In Bangla)</label>
                            </div>

                            <div class="form-floating mb-3">
                              <input type="text" class="form-control" name="" placeholder="" value="<?= $data['BLOOD_GROUP'] ?>">
                              <label>Blood Group</label>
                            </div>

                            <div class="form-floating mb-3">
                              <input type="text" class="form-control" name="" placeholder="" value="<?= $data['RELIGION'] ?>">
                              <label>Religion</label>
                            </div>

                            <div class="form-floating mb-3">
                              <input type="text" class="form-control" name="" placeholder="" value="<?= $data['GENDER'] ?>">
                              <label>Gender</label>
                            </div>

                            <div class="form-floating mb-3">
                              <input type="text" class="form-control" name="" placeholder="" value="<?= $data['DATE_OF_BIRTH'] ?>">
                              <label>Date of Birth</label>
                            </div>

                            <div class="form-floating mb-3">
                              <input type="text" class="form-control" name="" placeholder="" value="<?= $data['BIRTH_REG_NO'] ?>">
                              <label>Birth Reg. No.</label>
                            </div>
                          </div>

                          <div class="card p-3 mb-3  bg-success">
                            <h5>Guardian Information</h5>

                            <div class="form-floating mb-3">
                              <input type="text" class="form-control" name="" placeholder="" value="<?= $data['FATHER_NAME'] ?>">
                              <label>Father's Name</label>
                            </div>

                            <div class="form-floating mb-3">
                              <input type="text" class="form-control" name="" placeholder="" value="<?= $data['FATHER_MOBILE_NUMBER'] ?>">
                              <label>Father's Mobile Number</label>
                            </div>

                            <div class="form-floating mb-3">
                              <input type="text" class="form-control" name="" placeholder="" value="<?= $data['FATHER_NID'] ?>">
                              <label>Father's N.I.D</label>
                            </div>

                            <div class="form-floating mb-3">
                              <input type="text" class="form-control" name="" placeholder="" value="<?= $data['MOTHER_NAME'] ?>">
                              <label>Mother's Name</label>
                            </div>

                            <div class="form-floating mb-3">
                              <input type="text" class="form-control" name="" placeholder="" value="<?= $data['MOTHER_MOBILE_NUMBER'] ?>">
                              <label>Mother's Mobile Number</label>
                            </div>

                            <div class="form-floating mb-3">
                              <input type="text" class="form-control" name="" placeholder="" value="<?= $data['MOTHER_NID'] ?>">
                              <label>Mother's N.I.D</label>
                            </div>
                          </div>

                          <div class="card p-3 mb-3">
                            <h5>Address</h5>
                            <div class="form-floating mb-3">
                              <input type="text" class="form-control" name="" placeholder="" value="<?= $data['PRESENT_ADDRESS'] ?>">
                              <label>Present Address</label>
                            </div>

                            <div class="form-floating mb-3">
                              <input type="text" class="form-control" name="" placeholder="" value="<?= $data['PERMANENT_ADDRESS'] ?>">
                              <label>Permanent Address</label>
                            </div>
                          </div>

                        </div> 

                        <div class="modal-footer">
                          <input type="submit" class="btn btn-outline-primary" name="update" value="Update">
                          <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancel</button>
                        </div> 

                      </form>
                    </div>
                  </div>
                </div>
                <!-- End Model For Edit -->

                  <!-- Card Record -->
                  <div class="div-card">
                    <div class="image">
                        <img src="views/theme/img/<?= $data['STUDENT_ID'] ?>.png" alt="" class="profile-img">
                    </div>
                    <div class="text-data">
                      <span class="name bangla"><?= $data['NAME_EN'] ?></span>
                      <span class="name bangla"><?= $data['NAME_BN'] ?></span>
                      <span class="job">Roll: <?= $data['ROLL'] ?></span>
                      <span class="job">Class: <?= $data['CLASS'] ?></span>
                      <span class="job">ID: <?= $data['STUDENT_ID'] ?></span>
                      <span class="job">Father : <?= $data['FATHER_NAME'] ?></span>
                      <span class="job">Mobile: <?= $data['FATHER_MOBILE_NUMBER'] ?></span>
                      <span class="job">Date of Birth: <?= $data['DATE_OF_BIRTH'] ?></span>
                    </div>
                    <div class="buttons">
                				<a class="button bg-primary" href="/student-details?id=<?= $data['STUDENT_ID'] ?>"><i class="fa-solid fa-table-list"></i> Details</a>
                				<a class="button bg-secondary" data-bs-toggle="modal" data-bs-target="#edit<?= $data['STUDENT_ID'] ?>" href=""><i class="fas fa-user-edit"></i> Update Info</a>
                        <a class="button bg-success" href="tel:<?= $data['FATHER_MOBILE_NUMBER'] ?>" class="button"><i class="fa-solid fa-phone-volume"></i> Call</a>
                				<a class="button bg-info" data-bs-toggle="modal" data-bs-target="#<?= $data['STUDENT_ID'] ?>" href=""><i class="fa-solid fa-comment-sms"></i> SMS</a>
                        <a class="button bg-danger" data-bs-toggle="modal" data-bs-target="#delete<?= $data['STUDENT_ID'] ?>" href="#"><i class="fas fa-user-times"></i> Delete</a>
                    </div>
                  </div>
                <!-- End Card Record -->
                <?php
              }
            ?>
          </div>
        </div>
        <div class="tab-pane fade p-3" id="NURSERY" role="tabpanel" aria-labelledby="NURSERY-tab">
          <div class="div-container">
            <?php
              $result = $db->showStudentByClass('NURSERY');
              foreach($result as $data){
                ?>
                  <div class="div-card">
                    <div class="image">
                        <img src="views/theme/img/<?= $data['STUDENT_ID'] ?>.png" alt="" class="profile-img">
                    </div>
                    <div class="text-data">
                      <span class="name"><?= $data['NAME_BN'] ?></span>
                      <span class="job">Roll: <?= $data['ROLL'] ?></span>
                      <span class="job">Class: <?= $data['CLASS'] ?></span>
                      <span class="job">ID: <?= $data['STUDENT_ID'] ?></span>
                      <span class="job">Father : <?= $data['FATHER_NAME'] ?></span>
                      <span class="job">Mobile: <?= $data['FATHER_MOBILE_NUMBER'] ?></span>
                      <span class="job">Date of Birth: <?= $data['DATE_OF_BIRTH'] ?></span>
                    </div>
                    <div class="buttons">
                        <a href="tel:<?= $data['FATHER_MOBILE_NUMBER'] ?>" class="button">Edit</a>
                        <a href="#" class="button red">Delete</a>
                    </div>
                  </div>
                <?php
              }
            ?>
          </div>
        </div>
        <div class="tab-pane fade p-3" id="ONE" role="tabpanel" aria-labelledby="ONE-tab">
         <div class="div-container">
            <?php
              $result = $db->showStudentByClass('ONE');
              foreach($result as $data){
                ?>
                  <div class="div-card">
                    <div class="image">
                        <img src="views/theme/img/<?= $data['STUDENT_ID'] ?>.png" alt="" class="profile-img">
                    </div>
                    <div class="text-data">
                      <span class="name"><?= $data['NAME_BN'] ?></span>
                      <span class="job">Roll: <?= $data['ROLL'] ?></span>
                      <span class="job">Class: <?= $data['CLASS'] ?></span>
                      <span class="job">ID: <?= $data['STUDENT_ID'] ?></span>
                      <span class="job">Father : <?= $data['FATHER_NAME'] ?></span>
                      <span class="job">Mobile: <?= $data['FATHER_MOBILE_NUMBER'] ?></span>
                      <span class="job">Date of Birth: <?= $data['DATE_OF_BIRTH'] ?></span>
                    </div>
                    <div class="buttons">
                        <a href="tel:<?= $data['FATHER_MOBILE_NUMBER'] ?>" class="button">Edit</a>
                        <a href="#" class="button red">Delete</a>
                    </div>
                  </div>
                <?php
              }
            ?>
          </div>          
        </div>
        <div class="tab-pane fade p-3" id="TWO" role="tabpanel" aria-labelledby="TWO-tab">
          <div class="div-container">
            <?php
              $result = $db->showStudentByClass('TWO');
              foreach($result as $data){
                ?>
                  <div class="div-card">
                    <div class="image">
                        <img src="views/theme/img/<?= $data['STUDENT_ID'] ?>.png" alt="" class="profile-img">
                    </div>
                    <div class="text-data">
                      <span class="name"><?= $data['NAME_BN'] ?></span>
                      <span class="job">Roll: <?= $data['ROLL'] ?></span>
                      <span class="job">Class: <?= $data['CLASS'] ?></span>
                      <span class="job">ID: <?= $data['STUDENT_ID'] ?></span>
                      <span class="job">Father : <?= $data['FATHER_NAME'] ?></span>
                      <span class="job">Mobile: <?= $data['FATHER_MOBILE_NUMBER'] ?></span>
                      <span class="job">Date of Birth: <?= $data['DATE_OF_BIRTH'] ?></span>
                    </div>
                    <div class="buttons">
                        <a href="tel:<?= $data['FATHER_MOBILE_NUMBER'] ?>" class="button">Edit</a>
                        <a href="#" class="button red">Delete</a>
                    </div>
                  </div>
                <?php
              }
            ?>
          </div>  
        </div>
        <div class="tab-pane fade p-3" id="THREE" role="tabpanel" aria-labelledby="THREE-tab">
          <div class="div-container">
            <?php
              $result = $db->showStudentByClass('THREE');
              foreach($result as $data){
                ?>
                  <div class="div-card">
                    <div class="image">
                        <img src="views/theme/img/<?= $data['STUDENT_ID'] ?>.png" alt="" class="profile-img">
                    </div>
                    <div class="text-data">
                      <span class="name"><?= $data['NAME_BN'] ?></span>
                      <span class="job">Roll: <?= $data['ROLL'] ?></span>
                      <span class="job">Class: <?= $data['CLASS'] ?></span>
                      <span class="job">ID: <?= $data['STUDENT_ID'] ?></span>
                      <span class="job">Father : <?= $data['FATHER_NAME'] ?></span>
                      <span class="job">Mobile: <?= $data['FATHER_MOBILE_NUMBER'] ?></span>
                      <span class="job">Date of Birth: <?= $data['DATE_OF_BIRTH'] ?></span>
                    </div>
                    <div class="buttons">
                        <a href="tel:<?= $data['FATHER_MOBILE_NUMBER'] ?>" class="button">Edit</a>
                        <a href="#" class="button red">Delete</a>
                    </div>
                  </div>
                <?php
              }
            ?>
          </div>  
        </div>
        <div class="tab-pane fade p-3" id="FOUR" role="tabpanel" aria-labelledby="FOUR-tab">
          <div class="div-container">
            <?php
              $result = $db->showStudentByClass('FOUR');
              foreach($result as $data){
                ?>
                  <div class="div-card">
                    <div class="image">
                        <img src="views/theme/img/<?= $data['STUDENT_ID'] ?>.png" alt="" class="profile-img">
                    </div>
                    <div class="text-data">
                      <span class="name"><?= $data['NAME_BN'] ?></span>
                      <span class="job">Roll: <?= $data['ROLL'] ?></span>
                      <span class="job">Class: <?= $data['CLASS'] ?></span>
                      <span class="job">ID: <?= $data['STUDENT_ID'] ?></span>
                      <span class="job">Father : <?= $data['FATHER_NAME'] ?></span>
                      <span class="job">Mobile: <?= $data['FATHER_MOBILE_NUMBER'] ?></span>
                      <span class="job">Date of Birth: <?= $data['DATE_OF_BIRTH'] ?></span>
                    </div>
                    <div class="buttons">
                        <a href="tel:<?= $data['FATHER_MOBILE_NUMBER'] ?>" class="button">Edit</a>
                        <a href="#" class="button red">Delete</a>
                    </div>
                  </div>
                <?php
              }
            ?>
          </div>  
        </div>
        <div class="tab-pane fade p-3" id="HIFZ_NAZERA" role="tabpanel" aria-labelledby="HIFZ_NAZERA-tab">
          <div class="div-container">
            <?php
              $result = $db->showStudentByClass('HIFZ-NAZERA');
              foreach($result as $data){
                ?>
                  <div class="div-card">
                    <div class="image">
                        <img src="views/theme/img/<?= $data['STUDENT_ID'] ?>.png" alt="" class="profile-img">
                    </div>
                    <div class="text-data">
                      <span class="name"><?= $data['NAME_BN'] ?></span>
                      <span class="job">Roll: <?= $data['ROLL'] ?></span>
                      <span class="job">Class: <?= $data['CLASS'] ?></span>
                      <span class="job">ID: <?= $data['STUDENT_ID'] ?></span>
                      <span class="job">Father : <?= $data['FATHER_NAME'] ?></span>
                      <span class="job">Mobile: <?= $data['FATHER_MOBILE_NUMBER'] ?></span>
                      <span class="job">Date of Birth: <?= $data['DATE_OF_BIRTH'] ?></span>
                    </div>
                    <div class="buttons">
                        <a href="tel:<?= $data['FATHER_MOBILE_NUMBER'] ?>" class="button">Edit</a>
                        <a href="#" class="button red">Delete</a>
                    </div>
                  </div>
                <?php
              }
            ?>
          </div>
        </div>
        <div class="tab-pane fade p-3" id="HIFZ_INT" role="tabpanel" aria-labelledby="HIFZ_INT-tab">
          <div class="div-container">
            <?php
              $result = $db->showStudentByClass('HIFZ-INTERNATIONAL');
              foreach($result as $data){
                ?>
                  <div class="div-card">
                    <div class="image">
                        <img src="views/theme/img/<?= $data['STUDENT_ID'] ?>.png" alt="" class="profile-img">
                    </div>
                    <div class="text-data">
                      <span class="name"><?= $data['NAME_BN'] ?></span>
                      <span class="job">Roll: <?= $data['ROLL'] ?></span>
                      <span class="job">Class: <?= $data['CLASS'] ?></span>
                      <span class="job">ID: <?= $data['STUDENT_ID'] ?></span>
                      <span class="job">Father : <?= $data['FATHER_NAME'] ?></span>
                      <span class="job">Mobile: <?= $data['FATHER_MOBILE_NUMBER'] ?></span>
                      <span class="job">Date of Birth: <?= $data['DATE_OF_BIRTH'] ?></span>
                    </div>
                    <div class="buttons">
                				<a class="button" data-toggle="modal" data-target="#image1" href="#"><i class="fa-solid fa-table-list"></i> Details</a>
                				<a class="button" data-toggle="modal" data-target="#image1" href="#"><i class="far fa-image"></i> Update Image</a>
                				<a class="button" data-toggle="modal" data-target="#edit1" href="#"><i class="fas fa-user-edit"></i> Update Info</a>
                        <a class="button red" data-toggle="modal" data-target="#delete1" href="#"><i class="fas fa-user-times"></i> Delete</a>
                    </div>
                  </div>
                <?php
              }
            ?>
          </div>
        </div>
        <div class="tab-pane fade p-3" id="HIFZ_RIVISION" role="tabpanel" aria-labelledby="HIFZ_RIVISION-tab">
          <div class="div-container">
            <?php
              $result = $db->showStudentByClass('HIFZ-RIVISION');
              foreach($result as $data){
                ?>
                  <div class="div-card">
                    <div class="image">
                        <img src="views/theme/img/<?= $data['STUDENT_ID'] ?>.png" alt="" class="profile-img">
                    </div>
                    <div class="text-data">
                      <span class="name"><?= $data['NAME_BN'] ?></span>
                      <span class="job">Roll: <?= $data['ROLL'] ?></span>
                      <span class="job">Class: <?= $data['CLASS'] ?></span>
                      <span class="job">ID: <?= $data['STUDENT_ID'] ?></span>
                      <span class="job">Father : <?= $data['FATHER_NAME'] ?></span>
                      <span class="job">Mobile: <?= $data['FATHER_MOBILE_NUMBER'] ?></span>
                      <span class="job">Date of Birth: <?= $data['DATE_OF_BIRTH'] ?></span>
                    </div>
                    <div class="buttons">
                				<a class="button" data-toggle="modal" data-target="#image1" href="#"><i class="far fa-image"></i>Edit Image</a>
                				<a class="button" data-toggle="modal" data-target="#edit1" href="#"><i class="fas fa-user-edit"></i>Edit Info</a>
                        <a class="button red" data-toggle="modal" data-target="#delete1" href="#"><i class="fas fa-user-times"></i>Delete</a>
                    </div>
                  </div>
                <?php
              }
            ?>
          </div>
        </div>
        <!-- End Tab Content -->
      </div>

    </div>
    
  </div>
  <!--end::App Content-->
</main>

<?php include "theme/app-footer-nav.php"; ?>
<?php include "theme/app-footer.php"; ?>
