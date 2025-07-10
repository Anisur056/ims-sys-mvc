<?php include "theme/app-head.php"; ?>
<?php include "theme/app-header-nav.php"; ?>
<?php include "theme/app-sidebar-nav.php"; ?>
<?php $db = new ModelDbClass(); ?>

<!-- Update Student Data -->

<?php
if ($_SERVER['REQUEST_METHOD']=='POST') 
{
  if(isset($_POST['update'])){
    
  }
}
?>

<!-- End Update Student Data -->

<main class="app-main">
  <!--begin::App Content Header-->
  <div class="app-content-header">
    <!--begin::Container-->
    <div class="container-fluid">
      <!--begin::Row-->
      <div class="row">
        <div class="col-sm-6"><h3 class="mb-0">Students Record</h3></div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="<?= $web_address ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Students Record</li>
          </ol>
        </div>
      </div>
      <!--end::Row-->
    </div>
    <!--end::Container-->
  </div>
  <!--end::App Content Header-->
  <!--begin::App Content-->
  <div class="app-content">
    <!--begin::Container-->
    <div class="container-fluid">

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

      <div class="tab-content" id="myTabContent">

      <!-- Button trigger modal -->


        <div class="tab-pane fade show active p-3" id="PLAY" role="tabpanel" aria-labelledby="PLAY-tab">
          <div class="div-container">
            <?php
              $result = $db->showStudentByClass('PLAY');
              foreach($result as $data){
                ?>

                <!-- Model For Edit -->
                <div class="modal fade" id="edit<?= $data['STUDENT_ID'] ?>" role="dialog">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Student Information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                      </div>
                      <div class="modal-body">
                          <form method="POST">
                              <input type="hidden" name="STUDENT_ID" value="<?= $data['STUDENT_ID'] ?>">
                              <input type="hidden" name="year" value="">
                              <input type="hidden" name="shift" value="N/A">
                              <input type="hidden" name="class" value="PLAY">
                              <input type="hidden" name="section" value="N/A">
                              <input type="hidden" name="group" value="">
                              <br>
                              <legend class="w-auto group"><span class="circle">01</span> Academic Information</legend>
                              <div class="row">
                              <div class="col-md-4 form-group">
                                <select name="edit_year" class="form-control" id="edit_year" required="">
                                    <option value="">--Select Year--</option>
                                        <option value="2024">2024</option><option value="2025" selected="">2025</option>                                        		</select>
                                    <label for="edit_year">Academic Year: <span style="color: red;">[Required]</span></label>
                              </div>
                              <div class="col-md-4 form-group">
                                <select name="edit_shift" class="form-control" id="edit_shift" required="">
                                    <option value="">--Select Shift--</option>
                                        <option value="N/A" selected="">N/A</option>                                        		</select>
                                    <label for="edit_shift">Shift: <span style="color: red;">[Required]</span></label>
                              </div>
                              <div class="col-md-4 form-group">
                                <select name="edit_class" class="form-control" id="edit_class" onchange="classCheck(this);" required="">
                                    <option value="">--Select Class--</option>
                                        <option value="PLAY" selected="">PLAY</option><option value="NURSERY">NURSERY</option><option value="ONE">ONE</option><option value="TWO">TWO</option><option value="THREE">THREE</option><option value="FOUR">FOUR</option><option value="HIFZ NAZERA">HIFZ NAZERA</option><option value="HIFZ INTERNATIONAL">HIFZ INTERNATIONAL</option><option value="HIFZ RIVISION">HIFZ RIVISION</option>                                        		</select>
                                    <label for="edit_class">Class: <span style="color: red;">[Required]</span></label>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-4 form-group">
                                <select name="edit_section" class="form-control" id="edit_section" required="">
                                    <option value="">--Select Section--</option>
                                        <option value="N/A" selected="">N/A</option>                                        		</select>
                                    <label for="edit_section">Section: <span style="color: red;">[Required]</span></label>
                              </div>
                              <div class="col-md-4 form-group" id="group" style="display: none;">
                                        <select name="edit_group" id="group" class="form-control">
                                            <option value="" selected="">--Select Group--</option>
                                        <option value="Science">Science</option><option value="Business Studies">Business Studies</option><option value="Humanities">Humanities</option>                                                    </select>
                                    <label for="group">Group : </label>
                              </div>
                              <div class="col-md-4 form-group">
                                    <input type="text" class="form-control" name="roll" value="<?= $data['ROLL'] ?>" id="roll" required="">
                                    <label for="roll">Roll: <span style="color: red;">[Required]</span></label>
                              </div>
                          </div>
                          <legend class="w-auto group"><span class="circle">02</span> Student Information</legend>
                          <div class="row">
                              <div class="col-md-4 form-group">
                                    <input type="text" class="form-control" name="name_en" value="<?= $data['NAME_EN'] ?>" id="name_en" required="">
                                    <label for="name_en">Name <span style="color: blue;">(in English)</span>: <span style="color: red;">[Required]</span></label>
                              </div>
                              <div class="col-md-4 form-group">
                                    <input type="text" class="form-control" name="name_bn" value="<?= $data['NAME_BN'] ?>" id="name_bn" required="">
                                    <label for="name_bn">Name <span style="color: blue;">(in Bangla)</span>: <span style="color: red;">[Required]</span></label>
                              </div>
                              <div class="col-md-4 form-group">
                                    <input type="text" class="form-control" name="studentid" value="<?= $data['STUDENT_ID'] ?>" id="studentid" required="">
                                    <label for="studentid">Student ID: <span style="color: red;">[Required]</span></label>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-4 form-group">
                                <select name="blood_group" class="form-control" id="blood_group">
                                    <option value="" selected="">--Select Blood Group--</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                </select>
                                    <label for="blood_group">Blood Group: </label>
                              </div>
                              <div class="col-md-4 form-group">
                                <select name="religion" class="form-control" id="religion">
                                    <option value="" selected="">--Select Religion--</option>
                                        <option value="Islam" selected="">Islam</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Christian">Christian</option>
                                        <option value="Buddhism">Buddhism</option>
                                        <option value="Others">Others</option>
                                </select>
                                    <label for="religion">Religion : </label>
                              </div>
                              <div class="col-md-4 form-group">
                                <select name="gender" class="form-control" id="gender" required="">
                                    <option value="" selected="">--Select Gender--</option>
                                        <option value="Male" selected="">Male</option>
                                        <option value="Female">Female</option>
                                </select>
                                    <label for="gender">Gender: <span style="color: red;">[Required]</span></label>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-4 form-group">
                                    <input type="text" class="form-control" name="dob" value="<?= $data['DATE_OF_BIRTH'] ?>" id="dob">
                                    <label for="dob">Date of Birth: </label>
                              </div>
                              <div class="col-md-4 form-group">
                                    <input type="number" class="form-control" name="birth_reg" value="20181591610113415" id="birth_reg">
                                    <label for="birth_reg">Birth Reg. No.: </label>
                              </div>
                          </div>
                          <legend class="w-auto group"><span class="circle">03</span> Guardian Information</legend>
                          <div class="row">
                              <div class="col-md-4 form-group">
                                    <input type="text" class="form-control" name="father" value="<?= $data['FATHER_NAME'] ?>" id="father" onblur="myFunction()">
                                    <label for="father">Father's Name : </label>
                              </div>
                              <div class="col-md-4 form-group">
                                    <input type="number" class="form-control" name="father_mobile" mindigit="11" maxdigit="11" value="<?= $data['FATHER_MOBILE_NUMBER'] ?>" id="father_mobile">
                                    <label for="father_mobile">Father's Mobile Number : </label>
                              </div>
                              <div class="col-md-4 form-group">
                                    <input type="number" class="form-control" name="<?= $data['FATHER_NID'] ?>" value="" id="father_nid">
                                    <label for="father_nid">Father's N.I.D : </label>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-4 form-group">
                                    <input type="text" class="form-control" name="mother_name" value="<?= $data['MOTHER_NAME'] ?>" id="mother_name">
                                    <label for="mother_name">Mother's Name : </label>
                              </div>
                              <div class="col-md-4 form-group">
                                    <input type="number" class="form-control" name="mother_mobile" minlength="11" maxlength="11" value="<?= $data['MOTHER_MOBILE_NUMBER'] ?>" id="mother_mobile">
                                    <label for="mother_mobile">Mother's Mobile Number : </label>
                              </div>
                              <div class="col-md-4 form-group">
                                    <input type="number" class="form-control" name="mother_nid" value="<?= $data['MOTHER_NID'] ?>" id="mother_nid">
                                    <label for="mother_nid">Mother's N.I.D : </label>
                              </div>
                          </div>
                          <legend class="w-auto group"><span class="circle">04</span> Address</legend>
                          <div class="row" style="margin-bottom:-25px;padding-bottom:-25px;">
                              <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" name="present" id="present" value="<?= $data['PRESENT_ADDRESS'] ?>">
                                    <label for="present">Present Address:</label>
                              </div>
                              <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" name="permanent" id="permanent" value="<?= $data['PERMANENT_ADDRESS'] ?>">
                                    <label for="permanent">Permanent Address:</label>
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
      </div>

    </div>
    <!--end::Container-->
  </div>
  <!--end::App Content-->
</main>

<?php include "theme/app-footer-nav.php"; ?>
<?php include "theme/app-footer.php"; ?>
