<?php include "theme/app-head.php"; ?>
<?php include "theme/app-header-nav.php"; ?>
<?php include "theme/app-sidebar-nav.php"; ?>
<?php $db = new ModelDbClass(); ?>

<!-- begin::`shnmm_tbl_students`-update -->
<?php
  if ($_SERVER['REQUEST_METHOD']=='POST') 
  {
    if(isset($_POST['send_sms'])){
      $sms_number = $_POST['mobile_number'];
      $message = $_POST['message'];
      sms_send($sms_number,$message);
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
      <a type="button" class="btn btn-primary" href="<?= $web_address ?>student-record-table" >
        Table View
      </a>
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
                        <h1 class="modal-title fs-5">AAA</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                      </div>
                      <div class="modal-body">

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                          Fugiat modi, deleniti aspernatur eos exercitationem saepe quasi non? 
                          Esse voluptas sit ipsam, recusandae provident iusto 
                          ex veniam necessitatibus totam, deleniti ab?
                        </p>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Model Content -->                

                <!-- Card Record -->
                <div class="div-card">
                  <div class="image">
                      <img src="views/theme/img/<?= $data['STUDENT_ID'] ?>.png" alt="" class="profile-img">
                  </div>
                  <div class="text-data">
                    <span class="bangla name"><?= $data['NAME_BN'] ?></span>
                    <span class="name"><?= $data['NAME_EN'] ?></span>
                    <span class="job">Roll: <?= $data['ROLL'] ?></span>
                    <span class="job">Class: <?= $data['CLASS'] ?></span>
                    <span class="job">Father : <?= $data['FATHER_NAME'] ?></span>
                    <span class="job">Date of Birth: <?= $data['DATE_OF_BIRTH'] ?></span>
                  </div>
                  <div class="buttons">
                      <a class="button bg-primary" href="/student-details?id=<?= $data['STUDENT_ID'] ?>"><i class="fa-solid fa-table-list"></i> Details</a>
                      <a class="button bg-success" href="tel:<?= $data['FATHER_MOBILE_NUMBER'] ?>" class="button"><i class="fa-solid fa-phone-volume"></i> Father- <?= $data['FATHER_MOBILE_NUMBER'] ?></a>
                      <a class="button bg-success" href="tel:<?= $data['MOTHER_MOBILE_NUMBER'] ?>" class="button"><i class="fa-solid fa-phone-volume"></i> Mother- <?= $data['MOTHER_MOBILE_NUMBER'] ?></a>
                      <a class="button bg-info" data-bs-toggle="modal" data-bs-target="#sms<?= $data['STUDENT_ID'] ?>" href="#"><i class="fa-solid fa-comment-sms"></i> SMS</a>
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
                        <h1 class="modal-title fs-5">AAA</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                      </div>
                      <div class="modal-body">

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                          Fugiat modi, deleniti aspernatur eos exercitationem saepe quasi non? 
                          Esse voluptas sit ipsam, recusandae provident iusto 
                          ex veniam necessitatibus totam, deleniti ab?
                        </p>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Model Content -->                

                <!-- Card Record -->
                <div class="div-card">
                  <div class="image">
                      <img src="views/theme/img/<?= $data['STUDENT_ID'] ?>.png" alt="" class="profile-img">
                  </div>
                  <div class="text-data">
                    <span class="bangla name"><?= $data['NAME_BN'] ?></span>
                    <span class="name"><?= $data['NAME_EN'] ?></span>
                    <span class="job">Roll: <?= $data['ROLL'] ?></span>
                    <span class="job">Class: <?= $data['CLASS'] ?></span>
                    <span class="job">Father : <?= $data['FATHER_NAME'] ?></span>
                    <span class="job">Date of Birth: <?= $data['DATE_OF_BIRTH'] ?></span>
                  </div>
                  <div class="buttons">
                      <a class="button bg-primary" href="/student-details?id=<?= $data['STUDENT_ID'] ?>"><i class="fa-solid fa-table-list"></i> Details</a>
                      <a class="button bg-success" href="tel:<?= $data['FATHER_MOBILE_NUMBER'] ?>" class="button"><i class="fa-solid fa-phone-volume"></i> Father- <?= $data['FATHER_MOBILE_NUMBER'] ?></a>
                      <a class="button bg-success" href="tel:<?= $data['MOTHER_MOBILE_NUMBER'] ?>" class="button"><i class="fa-solid fa-phone-volume"></i> Mother- <?= $data['MOTHER_MOBILE_NUMBER'] ?></a>
                      <a class="button bg-info" data-bs-toggle="modal" data-bs-target="#sms<?= $data['STUDENT_ID'] ?>" href="#"><i class="fa-solid fa-comment-sms"></i> SMS</a>
                      <a class="button bg-danger" data-bs-toggle="modal" data-bs-target="#delete<?= $data['STUDENT_ID'] ?>" href="#"><i class="fas fa-user-times"></i> Delete</a>
                  </div>
                </div>
                <!-- End Card Record -->
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
                        <h1 class="modal-title fs-5">AAA</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                      </div>
                      <div class="modal-body">

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                          Fugiat modi, deleniti aspernatur eos exercitationem saepe quasi non? 
                          Esse voluptas sit ipsam, recusandae provident iusto 
                          ex veniam necessitatibus totam, deleniti ab?
                        </p>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Model Content -->                

                <!-- Card Record -->
                <div class="div-card">
                  <div class="image">
                      <img src="views/theme/img/<?= $data['STUDENT_ID'] ?>.png" alt="" class="profile-img">
                  </div>
                  <div class="text-data">
                    <span class="bangla name"><?= $data['NAME_BN'] ?></span>
                    <span class="name"><?= $data['NAME_EN'] ?></span>
                    <span class="job">Roll: <?= $data['ROLL'] ?></span>
                    <span class="job">Class: <?= $data['CLASS'] ?></span>
                    <span class="job">Father : <?= $data['FATHER_NAME'] ?></span>
                    <span class="job">Date of Birth: <?= $data['DATE_OF_BIRTH'] ?></span>
                  </div>
                  <div class="buttons">
                      <a class="button bg-primary" href="/student-details?id=<?= $data['STUDENT_ID'] ?>"><i class="fa-solid fa-table-list"></i> Details</a>
                      <a class="button bg-success" href="tel:<?= $data['FATHER_MOBILE_NUMBER'] ?>" class="button"><i class="fa-solid fa-phone-volume"></i> Father- <?= $data['FATHER_MOBILE_NUMBER'] ?></a>
                      <a class="button bg-success" href="tel:<?= $data['MOTHER_MOBILE_NUMBER'] ?>" class="button"><i class="fa-solid fa-phone-volume"></i> Mother- <?= $data['MOTHER_MOBILE_NUMBER'] ?></a>
                      <a class="button bg-info" data-bs-toggle="modal" data-bs-target="#sms<?= $data['STUDENT_ID'] ?>" href="#"><i class="fa-solid fa-comment-sms"></i> SMS</a>
                      <a class="button bg-danger" data-bs-toggle="modal" data-bs-target="#delete<?= $data['STUDENT_ID'] ?>" href="#"><i class="fas fa-user-times"></i> Delete</a>
                  </div>
                </div>
                <!-- End Card Record -->
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
                        <h1 class="modal-title fs-5">AAA</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                      </div>
                      <div class="modal-body">

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                          Fugiat modi, deleniti aspernatur eos exercitationem saepe quasi non? 
                          Esse voluptas sit ipsam, recusandae provident iusto 
                          ex veniam necessitatibus totam, deleniti ab?
                        </p>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Model Content -->                

                <!-- Card Record -->
                <div class="div-card">
                  <div class="image">
                      <img src="views/theme/img/<?= $data['STUDENT_ID'] ?>.png" alt="" class="profile-img">
                  </div>
                  <div class="text-data">
                    <span class="bangla name"><?= $data['NAME_BN'] ?></span>
                    <span class="name"><?= $data['NAME_EN'] ?></span>
                    <span class="job">Roll: <?= $data['ROLL'] ?></span>
                    <span class="job">Class: <?= $data['CLASS'] ?></span>
                    <span class="job">Father : <?= $data['FATHER_NAME'] ?></span>
                    <span class="job">Date of Birth: <?= $data['DATE_OF_BIRTH'] ?></span>
                  </div>
                  <div class="buttons">
                      <a class="button bg-primary" href="/student-details?id=<?= $data['STUDENT_ID'] ?>"><i class="fa-solid fa-table-list"></i> Details</a>
                      <a class="button bg-success" href="tel:<?= $data['FATHER_MOBILE_NUMBER'] ?>" class="button"><i class="fa-solid fa-phone-volume"></i> Father- <?= $data['FATHER_MOBILE_NUMBER'] ?></a>
                      <a class="button bg-success" href="tel:<?= $data['MOTHER_MOBILE_NUMBER'] ?>" class="button"><i class="fa-solid fa-phone-volume"></i> Mother- <?= $data['MOTHER_MOBILE_NUMBER'] ?></a>
                      <a class="button bg-info" data-bs-toggle="modal" data-bs-target="#sms<?= $data['STUDENT_ID'] ?>" href="#"><i class="fa-solid fa-comment-sms"></i> SMS</a>
                      <a class="button bg-danger" data-bs-toggle="modal" data-bs-target="#delete<?= $data['STUDENT_ID'] ?>" href="#"><i class="fas fa-user-times"></i> Delete</a>
                  </div>
                </div>
                <!-- End Card Record -->
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
                        <h1 class="modal-title fs-5">AAA</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                      </div>
                      <div class="modal-body">

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                          Fugiat modi, deleniti aspernatur eos exercitationem saepe quasi non? 
                          Esse voluptas sit ipsam, recusandae provident iusto 
                          ex veniam necessitatibus totam, deleniti ab?
                        </p>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Model Content -->                

                <!-- Card Record -->
                <div class="div-card">
                  <div class="image">
                      <img src="views/theme/img/<?= $data['STUDENT_ID'] ?>.png" alt="" class="profile-img">
                  </div>
                  <div class="text-data">
                    <span class="bangla name"><?= $data['NAME_BN'] ?></span>
                    <span class="name"><?= $data['NAME_EN'] ?></span>
                    <span class="job">Roll: <?= $data['ROLL'] ?></span>
                    <span class="job">Class: <?= $data['CLASS'] ?></span>
                    <span class="job">Father : <?= $data['FATHER_NAME'] ?></span>
                    <span class="job">Date of Birth: <?= $data['DATE_OF_BIRTH'] ?></span>
                  </div>
                  <div class="buttons">
                      <a class="button bg-primary" href="/student-details?id=<?= $data['STUDENT_ID'] ?>"><i class="fa-solid fa-table-list"></i> Details</a>
                      <a class="button bg-success" href="tel:<?= $data['FATHER_MOBILE_NUMBER'] ?>" class="button"><i class="fa-solid fa-phone-volume"></i> Father- <?= $data['FATHER_MOBILE_NUMBER'] ?></a>
                      <a class="button bg-success" href="tel:<?= $data['MOTHER_MOBILE_NUMBER'] ?>" class="button"><i class="fa-solid fa-phone-volume"></i> Mother- <?= $data['MOTHER_MOBILE_NUMBER'] ?></a>
                      <a class="button bg-info" data-bs-toggle="modal" data-bs-target="#sms<?= $data['STUDENT_ID'] ?>" href="#"><i class="fa-solid fa-comment-sms"></i> SMS</a>
                      <a class="button bg-danger" data-bs-toggle="modal" data-bs-target="#delete<?= $data['STUDENT_ID'] ?>" href="#"><i class="fas fa-user-times"></i> Delete</a>
                  </div>
                </div>
                <!-- End Card Record -->
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
                        <h1 class="modal-title fs-5">AAA</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                      </div>
                      <div class="modal-body">

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                          Fugiat modi, deleniti aspernatur eos exercitationem saepe quasi non? 
                          Esse voluptas sit ipsam, recusandae provident iusto 
                          ex veniam necessitatibus totam, deleniti ab?
                        </p>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Model Content -->                

                <!-- Card Record -->
                <div class="div-card">
                  <div class="image">
                      <img src="views/theme/img/<?= $data['STUDENT_ID'] ?>.png" alt="" class="profile-img">
                  </div>
                  <div class="text-data">
                    <span class="bangla name"><?= $data['NAME_BN'] ?></span>
                    <span class="name"><?= $data['NAME_EN'] ?></span>
                    <span class="job">Roll: <?= $data['ROLL'] ?></span>
                    <span class="job">Class: <?= $data['CLASS'] ?></span>
                    <span class="job">Father : <?= $data['FATHER_NAME'] ?></span>
                    <span class="job">Date of Birth: <?= $data['DATE_OF_BIRTH'] ?></span>
                  </div>
                  <div class="buttons">
                      <a class="button bg-primary" href="/student-details?id=<?= $data['STUDENT_ID'] ?>"><i class="fa-solid fa-table-list"></i> Details</a>
                      <a class="button bg-success" href="tel:<?= $data['FATHER_MOBILE_NUMBER'] ?>" class="button"><i class="fa-solid fa-phone-volume"></i> Father- <?= $data['FATHER_MOBILE_NUMBER'] ?></a>
                      <a class="button bg-success" href="tel:<?= $data['MOTHER_MOBILE_NUMBER'] ?>" class="button"><i class="fa-solid fa-phone-volume"></i> Mother- <?= $data['MOTHER_MOBILE_NUMBER'] ?></a>
                      <a class="button bg-info" data-bs-toggle="modal" data-bs-target="#sms<?= $data['STUDENT_ID'] ?>" href="#"><i class="fa-solid fa-comment-sms"></i> SMS</a>
                      <a class="button bg-danger" data-bs-toggle="modal" data-bs-target="#delete<?= $data['STUDENT_ID'] ?>" href="#"><i class="fas fa-user-times"></i> Delete</a>
                  </div>
                </div>
                <!-- End Card Record -->
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
                        <h1 class="modal-title fs-5">AAA</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                      </div>
                      <div class="modal-body">

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                          Fugiat modi, deleniti aspernatur eos exercitationem saepe quasi non? 
                          Esse voluptas sit ipsam, recusandae provident iusto 
                          ex veniam necessitatibus totam, deleniti ab?
                        </p>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Model Content -->                

                <!-- Card Record -->
                <div class="div-card">
                  <div class="image">
                      <img src="views/theme/img/<?= $data['STUDENT_ID'] ?>.png" alt="" class="profile-img">
                  </div>
                  <div class="text-data">
                    <span class="bangla name"><?= $data['NAME_BN'] ?></span>
                    <span class="name"><?= $data['NAME_EN'] ?></span>
                    <span class="job">Roll: <?= $data['ROLL'] ?></span>
                    <span class="job">Class: <?= $data['CLASS'] ?></span>
                    <span class="job">Father : <?= $data['FATHER_NAME'] ?></span>
                    <span class="job">Date of Birth: <?= $data['DATE_OF_BIRTH'] ?></span>
                  </div>
                  <div class="buttons">
                      <a class="button bg-primary" href="/student-details?id=<?= $data['STUDENT_ID'] ?>"><i class="fa-solid fa-table-list"></i> Details</a>
                      <a class="button bg-success" href="tel:<?= $data['FATHER_MOBILE_NUMBER'] ?>" class="button"><i class="fa-solid fa-phone-volume"></i> Father- <?= $data['FATHER_MOBILE_NUMBER'] ?></a>
                      <a class="button bg-success" href="tel:<?= $data['MOTHER_MOBILE_NUMBER'] ?>" class="button"><i class="fa-solid fa-phone-volume"></i> Mother- <?= $data['MOTHER_MOBILE_NUMBER'] ?></a>
                      <a class="button bg-info" data-bs-toggle="modal" data-bs-target="#sms<?= $data['STUDENT_ID'] ?>" href="#"><i class="fa-solid fa-comment-sms"></i> SMS</a>
                      <a class="button bg-danger" data-bs-toggle="modal" data-bs-target="#delete<?= $data['STUDENT_ID'] ?>" href="#"><i class="fas fa-user-times"></i> Delete</a>
                  </div>
                </div>
                <!-- End Card Record -->
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
                        <h1 class="modal-title fs-5">AAA</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                      </div>
                      <div class="modal-body">

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                          Fugiat modi, deleniti aspernatur eos exercitationem saepe quasi non? 
                          Esse voluptas sit ipsam, recusandae provident iusto 
                          ex veniam necessitatibus totam, deleniti ab?
                        </p>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Model Content -->                

                <!-- Card Record -->
                <div class="div-card">
                  <div class="image">
                      <img src="views/theme/img/<?= $data['STUDENT_ID'] ?>.png" alt="" class="profile-img">
                  </div>
                  <div class="text-data">
                    <span class="bangla name"><?= $data['NAME_BN'] ?></span>
                    <span class="name"><?= $data['NAME_EN'] ?></span>
                    <span class="job">Roll: <?= $data['ROLL'] ?></span>
                    <span class="job">Class: <?= $data['CLASS'] ?></span>
                    <span class="job">Father : <?= $data['FATHER_NAME'] ?></span>
                    <span class="job">Date of Birth: <?= $data['DATE_OF_BIRTH'] ?></span>
                  </div>
                  <div class="buttons">
                      <a class="button bg-primary" href="/student-details?id=<?= $data['STUDENT_ID'] ?>"><i class="fa-solid fa-table-list"></i> Details</a>
                      <a class="button bg-success" href="tel:<?= $data['FATHER_MOBILE_NUMBER'] ?>" class="button"><i class="fa-solid fa-phone-volume"></i> Father- <?= $data['FATHER_MOBILE_NUMBER'] ?></a>
                      <a class="button bg-success" href="tel:<?= $data['MOTHER_MOBILE_NUMBER'] ?>" class="button"><i class="fa-solid fa-phone-volume"></i> Mother- <?= $data['MOTHER_MOBILE_NUMBER'] ?></a>
                      <a class="button bg-info" data-bs-toggle="modal" data-bs-target="#sms<?= $data['STUDENT_ID'] ?>" href="#"><i class="fa-solid fa-comment-sms"></i> SMS</a>
                      <a class="button bg-danger" data-bs-toggle="modal" data-bs-target="#delete<?= $data['STUDENT_ID'] ?>" href="#"><i class="fas fa-user-times"></i> Delete</a>
                  </div>
                </div>
                <!-- End Card Record -->
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
                        <h1 class="modal-title fs-5">AAA</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                      </div>
                      <div class="modal-body">

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                          Fugiat modi, deleniti aspernatur eos exercitationem saepe quasi non? 
                          Esse voluptas sit ipsam, recusandae provident iusto 
                          ex veniam necessitatibus totam, deleniti ab?
                        </p>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Model Content -->                

                <!-- Card Record -->
                <div class="div-card">
                  <div class="image">
                      <img src="views/theme/img/<?= $data['STUDENT_ID'] ?>.png" alt="" class="profile-img">
                  </div>
                  <div class="text-data">
                    <span class="bangla name"><?= $data['NAME_BN'] ?></span>
                    <span class="name"><?= $data['NAME_EN'] ?></span>
                    <span class="job">Roll: <?= $data['ROLL'] ?></span>
                    <span class="job">Class: <?= $data['CLASS'] ?></span>
                    <span class="job">Father : <?= $data['FATHER_NAME'] ?></span>
                    <span class="job">Date of Birth: <?= $data['DATE_OF_BIRTH'] ?></span>
                  </div>
                  <div class="buttons">
                      <a class="button bg-primary" href="/student-details?id=<?= $data['STUDENT_ID'] ?>"><i class="fa-solid fa-table-list"></i> Details</a>
                      <a class="button bg-success" href="tel:<?= $data['FATHER_MOBILE_NUMBER'] ?>" class="button"><i class="fa-solid fa-phone-volume"></i> Father- <?= $data['FATHER_MOBILE_NUMBER'] ?></a>
                      <a class="button bg-success" href="tel:<?= $data['MOTHER_MOBILE_NUMBER'] ?>" class="button"><i class="fa-solid fa-phone-volume"></i> Mother- <?= $data['MOTHER_MOBILE_NUMBER'] ?></a>
                      <a class="button bg-info" data-bs-toggle="modal" data-bs-target="#sms<?= $data['STUDENT_ID'] ?>" href="#"><i class="fa-solid fa-comment-sms"></i> SMS</a>
                      <a class="button bg-danger" data-bs-toggle="modal" data-bs-target="#delete<?= $data['STUDENT_ID'] ?>" href="#"><i class="fas fa-user-times"></i> Delete</a>
                  </div>
                </div>
                <!-- End Card Record -->
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
