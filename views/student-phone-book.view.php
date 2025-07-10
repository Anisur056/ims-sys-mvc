<?php include "theme/app-head.php"; ?>
<?php include "theme/app-header-nav.php"; ?>
<?php include "theme/app-sidebar-nav.php"; ?>
<?php $db = new ModelDbClass(); ?>

<main class="app-main">
  <!--begin::App Content Header-->
  <div class="app-content-header">
    <!--begin::Container-->
    <div class="container-fluid">
      <!--begin::Row-->
      <div class="row">
        <div class="col-sm-6"><h3 class="mb-0">Students Phone Book</h3></div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="<?= $web_address ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Students Phone Book</li>
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

        <div class="tab-pane fade show active p-3" id="PLAY" role="tabpanel" aria-labelledby="PLAY-tab">
          <div class="div-container">
            <?php
              $result = $db->showStudentByClass('PLAY');
              foreach($result as $data){
                ?>
                  <div class="div-card">
                    <div class="image">
                        <img src="views/theme/img/<?= $data['STUDENT_ID'] ?>.png" alt="" class="profile-img">
                    </div>
                    <div class="text-data">
                        <span class="name"><?= $data['NAME_EN'] ?></span>
                        <span class="job">ID: <?= $data['STUDENT_ID'] ?></span>
                        <span class="job">Class: <?= $data['CLASS'] ?></span>
                        <span class="job">Roll: <?= $data['ROLL'] ?></span>
                        <span class="job">Father Mobile: <?= $data['FATHER_MOBILE_NUMBER'] ?></span>
                        <span class="job">Mother Mobile: <?= $data['MOTHER_MOBILE_NUMBER'] ?></span>
                    </div>
                    <div class="buttons">
                        <a href="tel:<?= $data['FATHER_MOBILE_NUMBER'] ?>" class="button">Call</a>
                        <a href="#" class="button">SEND SMS</a>
                    </div>
                  </div>
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
                        <span class="name"><?= $data['NAME_EN'] ?></span>
                        <span class="job">ID: <?= $data['STUDENT_ID'] ?></span>
                        <span class="job">Class: <?= $data['CLASS'] ?></span>
                        <span class="job">Roll: <?= $data['ROLL'] ?></span>
                        <span class="job">Father Mobile: <?= $data['FATHER_MOBILE_NUMBER'] ?></span>
                        <span class="job">Mother Mobile: <?= $data['MOTHER_MOBILE_NUMBER'] ?></span>
                    </div>
                    <div class="buttons">
                        <a href="tel:<?= $data['FATHER_MOBILE_NUMBER'] ?>" class="button">Call</a>
                        <a href="#" class="button">SEND SMS</a>
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
                        <span class="name"><?= $data['NAME_EN'] ?></span>
                        <span class="job">ID: <?= $data['STUDENT_ID'] ?></span>
                        <span class="job">Class: <?= $data['CLASS'] ?></span>
                        <span class="job">Roll: <?= $data['ROLL'] ?></span>
                        <span class="job">Father Mobile: <?= $data['FATHER_MOBILE_NUMBER'] ?></span>
                        <span class="job">Mother Mobile: <?= $data['MOTHER_MOBILE_NUMBER'] ?></span>
                    </div>
                    <div class="buttons">
                        <a href="tel:<?= $data['FATHER_MOBILE_NUMBER'] ?>" class="button">Call</a>
                        <a href="#" class="button">SEND SMS</a>
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
                        <span class="name"><?= $data['NAME_EN'] ?></span>
                        <span class="job">ID: <?= $data['STUDENT_ID'] ?></span>
                        <span class="job">Class: <?= $data['CLASS'] ?></span>
                        <span class="job">Roll: <?= $data['ROLL'] ?></span>
                        <span class="job">Father Mobile: <?= $data['FATHER_MOBILE_NUMBER'] ?></span>
                        <span class="job">Mother Mobile: <?= $data['MOTHER_MOBILE_NUMBER'] ?></span>
                    </div>
                    <div class="buttons">
                        <a href="tel:<?= $data['FATHER_MOBILE_NUMBER'] ?>" class="button">Call</a>
                        <a href="#" class="button">SEND SMS</a>
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
                        <span class="name"><?= $data['NAME_EN'] ?></span>
                        <span class="job">ID: <?= $data['STUDENT_ID'] ?></span>
                        <span class="job">Class: <?= $data['CLASS'] ?></span>
                        <span class="job">Roll: <?= $data['ROLL'] ?></span>
                        <span class="job">Father Mobile: <?= $data['FATHER_MOBILE_NUMBER'] ?></span>
                        <span class="job">Mother Mobile: <?= $data['MOTHER_MOBILE_NUMBER'] ?></span>
                    </div>
                    <div class="buttons">
                        <a href="tel:<?= $data['FATHER_MOBILE_NUMBER'] ?>" class="button">Call</a>
                        <a href="#" class="button">SEND SMS</a>
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
                        <span class="name"><?= $data['NAME_EN'] ?></span>
                        <span class="job">ID: <?= $data['STUDENT_ID'] ?></span>
                        <span class="job">Class: <?= $data['CLASS'] ?></span>
                        <span class="job">Roll: <?= $data['ROLL'] ?></span>
                        <span class="job">Father Mobile: <?= $data['FATHER_MOBILE_NUMBER'] ?></span>
                        <span class="job">Mother Mobile: <?= $data['MOTHER_MOBILE_NUMBER'] ?></span>
                    </div>
                    <div class="buttons">
                        <a href="tel:<?= $data['FATHER_MOBILE_NUMBER'] ?>" class="button">Call</a>
                        <a href="#" class="button">SEND SMS</a>
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
                        <span class="name"><?= $data['NAME_EN'] ?></span>
                        <span class="job">ID: <?= $data['STUDENT_ID'] ?></span>
                        <span class="job">Class: <?= $data['CLASS'] ?></span>
                        <span class="job">Roll: <?= $data['ROLL'] ?></span>
                        <span class="job">Father Mobile: <?= $data['FATHER_MOBILE_NUMBER'] ?></span>
                        <span class="job">Mother Mobile: <?= $data['MOTHER_MOBILE_NUMBER'] ?></span>
                    </div>
                    <div class="buttons">
                        <a href="tel:<?= $data['FATHER_MOBILE_NUMBER'] ?>" class="button">Call</a>
                        <a href="#" class="button">SEND SMS</a>
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
                        <span class="name"><?= $data['NAME_EN'] ?></span>
                        <span class="job">ID: <?= $data['STUDENT_ID'] ?></span>
                        <span class="job">Class: <?= $data['CLASS'] ?></span>
                        <span class="job">Roll: <?= $data['ROLL'] ?></span>
                        <span class="job">Father Mobile: <?= $data['FATHER_MOBILE_NUMBER'] ?></span>
                        <span class="job">Mother Mobile: <?= $data['MOTHER_MOBILE_NUMBER'] ?></span>
                    </div>
                    <div class="buttons">
                        <a href="tel:<?= $data['FATHER_MOBILE_NUMBER'] ?>" class="button">Call</a>
                        <a href="#" class="button">SEND SMS</a>
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
                        <span class="name"><?= $data['NAME_EN'] ?></span>
                        <span class="job">ID: <?= $data['STUDENT_ID'] ?></span>
                        <span class="job">Class: <?= $data['CLASS'] ?></span>
                        <span class="job">Roll: <?= $data['ROLL'] ?></span>
                        <span class="job">Father Mobile: <?= $data['FATHER_MOBILE_NUMBER'] ?></span>
                        <span class="job">Mother Mobile: <?= $data['MOTHER_MOBILE_NUMBER'] ?></span>
                    </div>
                    <div class="buttons">
                        <a href="tel:<?= $data['FATHER_MOBILE_NUMBER'] ?>" class="button">Call</a>
                        <a href="#" class="button">SEND SMS</a>
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
