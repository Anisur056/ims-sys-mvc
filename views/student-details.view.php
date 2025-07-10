<?php include "theme/app-head.php"; ?>
<?php include "theme/app-header-nav.php"; ?>
<?php include "theme/app-sidebar-nav.php"; ?>
<?php $db = new ModelDbClass(); ?>

<!-- Update Student Data -->

<?php
if ($_SERVER['REQUEST_METHOD']=='POST') 
{
  if(isset($_POST['update'])){
    // $update = $pdo->prepare('UPDATE phone SET phone=? WHERE id=?');
    // $update->execute(['+977 2687434','3']);
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
        <div class="col-sm-6"><h3 class="mb-0">Students Record Details</h3></div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="<?= $web_address ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Students Record details</li>
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
      <?php
        if(isset($_GET['id'])){
          (int) $id =  $_GET['id'];
        }
        $result = $db->showStudentById($id);
        foreach($result as $data){
          ?>


            <form method="post">
              <div class="card-body">
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
              <div class="card-footer">
                <input type="submit" class="btn btn-outline-primary" name="update" value="Update">
                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancel</button>
              </div> 
            </form>



          <?php
        }
      ?>
    </div>
    <!--end::Container-->
  </div>
  <!--end::App Content-->
</main>

<?php include "theme/app-footer-nav.php"; ?>
<?php include "theme/app-footer.php"; ?>
