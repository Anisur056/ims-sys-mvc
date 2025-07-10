<?php include "theme/app-head.php"; ?>
<?php $db = new ModelDbClass(); ?>

<main class="app-main">
  <!--begin::App Content Header-->
  <div class="app-content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6"><h3 class="mb-0">Table Record of Students</h3></div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="<?= $web_address ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Students Record Table</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!--end::App Content Header-->

  <div class="app-content">
    <div class="container-fluid">
      <div class="div-container">
      
        <table id="studentTable" class="table table-striped" style="width:70%">
          <thead>
            <tr>
            <th>STUDENT_ID</th>
            <th>NAME_EN</th>
            <th>NAME_BN</th>
            <th>CLASS</th>
            <th>ROLL</th>
            <th>ACADEMIC_YEAR</th>
            <th>SHIFT</th>
            <th>SECTION</th>
            <th>BLOOD_GROUP</th>
            <th>RELIGION</th>
            <th>GENDER</th>
            <th>DATE_OF_BIRTH</th>
            <th>BIRTH_REG_NO</th>
            <th>FATHER_NAME</th>
            <th>FATHER_MOBILE_NUMBER</th>
            <th>FATHER_NID</th>
            <th>MOTHER_NAME</th>
            <th>MOTHER_MOBILE_NUMBER</th>
            <th>MOTHER_NID</th>
            <th>PRESENT_ADDRESS</th>
            <th>PERMANENT_ADDRESS</th>
            <th>PIC</th>
            </tr>
          </thead>
          <?php
            $result = $db->showStudentsAll();
            foreach($result as $data){
              ?>
                
                  <tr>
                  <td><?= $data['STUDENT_ID'] ?></td>
                  <td><?= $data['NAME_EN'] ?></td>
                  <td><?= $data['NAME_BN'] ?></td>
                  <td><?= $data['CLASS'] ?></td>
                  <td><?= $data['ROLL'] ?></td>
                  <td><?= $data['ACADEMIC_YEAR'] ?></td>
                  <td><?= $data['SHIFT'] ?></td>
                  <td><?= $data['SECTION'] ?></td>
                  <td><?= $data['BLOOD_GROUP'] ?></td>
                  <td><?= $data['RELIGION'] ?></td>
                  <td><?= $data['GENDER'] ?></td>
                  <td><?= $data['DATE_OF_BIRTH'] ?></td>
                  <td><?= $data['BIRTH_REG_NO'] ?></td>
                  <td><?= $data['FATHER_NAME'] ?></td>
                  <td><?= $data['FATHER_MOBILE_NUMBER'] ?></td>
                  <td><?= $data['FATHER_NID'] ?></td>
                  <td><?= $data['MOTHER_NAME'] ?></td>
                  <td><?= $data['MOTHER_MOBILE_NUMBER'] ?></td>
                  <td><?= $data['MOTHER_NID'] ?></td>
                  <td><?= $data['PRESENT_ADDRESS'] ?></td>
                  <td><?= $data['PERMANENT_ADDRESS'] ?></td>
                  <td><?= $data['PIC'] ?></td>
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
