<?php require ('app/verify-session.php'); ?>
<?php include "theme/app-head.php"; ?>
<?php include "theme/app-header-nav.php"; ?>
<?php include "theme/app-sidebar-nav.php"; ?>
<?php $db = new ModelDbClass(); ?>

<?php
    if ($_SERVER['REQUEST_METHOD']=='POST') 
    {
        if(isset($_POST['updateVoucherbtn']))
        {
            $VOUCHER_NO = $_POST['VOUCHER_NO'];
            $ENTRY_DATE = $_POST['ENTRY_DATE'];
            $DESCRIPTION = $_POST['DESCRIPTION'];
            $AMOUNT = $_POST['AMOUNT'];
            $RECEIVED = $_POST['RECEIVED'];
            $DUE = $_POST['DUE'];
            $REMARK = $_POST['REMARK'];

            $db->updateVoucher($ENTRY_DATE,$DESCRIPTION, $AMOUNT, 
                $RECEIVED,$DUE, $REMARK, $VOUCHER_NO);
        }

    }
?>

<main class="app-main">

  <div class="app-content-header">

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6"><h3 class="mb-0">Take Fees</h3></div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="<?= $web_address ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Take Fees</li>
          </ol>
        </div>
      </div>
    </div>

  </div>


  <div class="app-content">
    <div class="container-fluid">

        <div class="card mt-3 p-3">
            <form class="d-flex" role="search" method="post">
                <input name="search-txt" class="form-control me-2" type="search" placeholder="Search By Student Name, বাংলা নাম, Roll"/>
                <button class="btn btn-outline-success" type="submit" name="search-btn">Search</button>
            </form>
        </div>

        <?php if(isset($_POST['search-btn'])):?>
            <div class="card mt-3 p-3">
                <table id="studentTable" class="table table-striped table-bordered studentRecordTable">
                    <thead>
                    <tr>
                        <th>ROLL</th>
                        <th>PIC</th>
                        <th>CLASS</th>
                        <th>NAME_BN</th>
                        <th>NAME_EN</th>
                        <th>FATHER_NAME</th>                    
                        <th>REMARK</th>                    
                        <th>ACTION</th>
                    </tr>
                    </thead>
                    <?php $result = $db->searchStudent($_POST['search-txt']);
                        foreach($result as $data): ?>
                        <tr>
                            <td data-label="ROLL: "><a class="text-decoration-none btn btn-primary" href="<?= $web_address ?>student-profile?id=<?= $data['STUDENT_ID'] ?>"><?= $data['ROLL'] ?></a></td>
                            <td data-label="PIC: "><img src="<?= $data['PIC'] ?>" alt="" class="img-fluid img-thumbnail" style="width:150px; height:auto;"></td>
                            <td data-label="CLASS: "><?= $data['CLASS'] ?></td>
                            <td data-label="নাম: " class="bangla"><?= $data['NAME_BN'] ?></td>
                            <td data-label="NAME: "><?= $data['NAME_EN'] ?></td>
                            <td data-label="FATHER NAME: "><?= $data['FATHER_NAME'] ?></td>
                            <td data-label="REMARK: " class="bangla"><?= $data['REMARK'] ?></td>
                            <td data-label="ACTION: ">
                            <a class="btn btn-primary m-1" href="student-profile?id=<?= $data['STUDENT_ID'] ?>&page=fees"><i class="fa-solid fa-hand-holding-dollar"></i> Take Fees</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        <?php endif; ?>

        

        <div class="card mt-3">
            <div class="row p-3 text-center">
                <div class="col-sm-6 border-end">
                    <h3 style="color: green;">TOTAL RECEIVED: 
                        <?php
                            $received_amount = 0;
                            $result = $db->showVoucherAll();
                            foreach($result as $data){
                                $received_amount+= $data['RECEIVED'];
                            }
                            echo "<b>$received_amount</b>";
                        ?>                                    
                    </h3>
                </div>
                <div class="col-sm-6">
                    <h3 style="color: red;">TOTAL DUE: 
                        <?php
                            $due_amount = 0;
                            $result = $db->showVoucherAll();
                            foreach($result as $data){
                                $due_amount+= $data['DUE'];
                            }
                            echo "<b>$due_amount</b>";
                        ?>                                    
                    </h3>
                </div>
            </div>
        </div>
        <div class="card mt-3">
            <div class="card-body">
                <p class="fs-5 w-auto fw-bold p-3 border-bottom">Student Fees Collection Record (Last 10 Record) </p>
                <table class="table table-bordered table-striped studentRecordTable">
                    <thead>
                        <tr>
                            <th>VOUCHER NO</th>
                            <th>ENTRY DATE</th>
                            <th>STUDENT NAME</th>
                            <th>DESCRIPTION</th>
                            <th>AMOUNT</th>
                            <th>RECEIVED</th>
                            <th>DUE</th>
                            <th>REMARK</th>
                            <th>RECEIVED BY</th>
                            <th>ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $result = $db->showVoucherAll();
                            foreach($result as $data){
                                ?>
                                <tr>
                                    <td data-label="VOUCHER NO:"><?= $data['VOUCHER_NO'] ?></td>
                                    <td data-label="ENTRY DATE:"><?= $data['ENTRY_DATE'] ?></td>
                                    <td data-label="STUDENT NAME:" class="bangla"><?= $data['STUDENT_NAME'] ?></td>
                                    <td data-label="DESCRIPTION:" class="bangla"><?= $data['DESCRIPTION'] ?></td>
                                    <td data-label="AMOUNT:"><?= $data['AMOUNT'] ?></td>
                                    <td data-label="RECEIVED:"><?= $data['RECEIVED'] ?></td>
                                    <td data-label="DUE:"><?= $data['DUE'] ?></td>
                                    <td data-label="REMARK:" class="bangla"><?= $data['REMARK'] ?></td>
                                    <td data-label="RECEIVED BY:"><?= $data['RECEIVED_BY'] ?></td>
                                    <td data-label="ACTIONS:">
                                    <a class="btn btn-warning m-1" data-bs-toggle="modal" data-bs-target="#update<?= $data['VOUCHER_NO'] ?>" href="#"><i class="fas fa-pen-to-square"></i></a>
                                    <a class="btn btn-success m-1" target="_blank" href="<?= $web_address ?>student-print-fee?voucher-print-id=<?= $data['VOUCHER_NO'] ?>"><i class="fas fa-solid fa-print"></i></a>
                                    </td>
                                </tr>

                                <!-- Model Content For Voucher update-->
                                <div class="modal fade" id="update<?= $data['VOUCHER_NO'] ?>">
                                    <form action="" method="post">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5">Update Fees Information</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <div class="modal-body">

                                                    <input type="hidden" name="VOUCHER_NO" value="<?= $data['VOUCHER_NO'] ?>">

                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" name="ENTRY_DATE" placeholder="" value="<?= $data['ENTRY_DATE'] ?>">
                                                        <label>ENTRY_DATE:</label>
                                                    </div>

                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control bangla" name="STUDENT_NAME" placeholder="" value="<?= $data['STUDENT_NAME'] ?>">
                                                        <label class="bangla">শিক্ষার্থীর নাম</label>
                                                    </div>

                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" name="STUDENT_CLASS" placeholder="" value="<?= $data['STUDENT_CLASS'] ?>">
                                                        <label class="bangla">শ্রেনী</label>
                                                    </div>

                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" name="STUDENT_SECTION" placeholder="" value="<?= $data['STUDENT_SECTION'] ?>">
                                                        <label class="bangla">সেকশন</label>
                                                    </div>

                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" name="STUDENT_ROLL" placeholder="" value="<?= $data['STUDENT_ROLL'] ?>">
                                                        <label class="bangla">শ্রেনী রোল</label>
                                                    </div>

                                                    <div class="form-floating mb-3">
                                                        <textarea name="DESCRIPTION" class="form-control bangla" placeholder="" id="floatingTextarea2" style="height: 200px"><?= $data['DESCRIPTION'] ?></textarea>
                                                        <label for="floatingTextarea2">টাকা গ্রহণের বিবরণ</label>
                                                    </div>

                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" name="AMOUNT" placeholder="" value="<?= $data['AMOUNT'] ?>" required>
                                                        <label>আদায়যোগ্য টাকা</label>
                                                    </div>

                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" name="RECEIVED" placeholder="" value="<?= $data['RECEIVED'] ?>">
                                                        <label>গ্রহনকৃত টাকা</label>
                                                    </div>
                                                    
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" name="DUE" placeholder="" value="<?= $data['DUE'] ?>">
                                                        <label>বকেয়া</label>
                                                    </div>

                                                    <div class="form-floating mb-3">
                                                        <textarea name="REMARK" class="form-control bangla" placeholder="" id="floatingTextarea2" style="height: 200px"><?= $data['REMARK'] ?></textarea>
                                                        <label for="floatingTextarea2">বেতন সংক্রান্ত মন্তব্য লিখুন</label>
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" name="updateVoucherbtn" class="btn btn-primary">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- End Model Content -->
                            <?php }?>
                    </tbody>
                </table>

                <!-- Model Content For Voucher Add-->
                <div class="modal fade" id="modelAddVoucher">
                    <form action="" method="post">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5">Take Fees</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">

                                <input type="hidden" name="STUDENT_ID" value="<?= $id ?>">

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="ENTRY_DATE" placeholder="" value="<?= date('d/m/Y') ?>">
                                    <label class="bangla">গ্রহণের তারিখ</label>
                                </div>

                                <?php
                                    $result = $db->showStudentById($id);
                                    foreach($result as $data){
                                        $NAME = $data['NAME_BN'];
                                        $CLASS = $data['CLASS'];
                                        $SECTION = $data['SECTION'];
                                        $ROLL = $data['ROLL'];
                                    }
                                ?>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control bangla" name="STUDENT_NAME" placeholder="" value="<?= $NAME ?>">
                                    <label class="bangla">শিক্ষার্থীর নাম</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="STUDENT_CLASS" placeholder="" value="<?= $CLASS ?>">
                                    <label class="bangla">শ্রেনী</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="STUDENT_SECTION" placeholder="" value="<?= $SECTION ?>">
                                    <label class="bangla">সেকশন</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="STUDENT_ROLL" placeholder="" value="<?= $ROLL ?>">
                                    <label class="bangla">শ্রেনী রোল</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <textarea name="DESCRIPTION" class="form-control bangla" placeholder="" id="floatingTextarea2" style="height: 200px">জানুয়ারী-২০২৫ এর বেতন গ্রহণ।</textarea>
                                    <label for="floatingTextarea2" class="bangla">টাকা গ্রহণের বিবরণ</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="AMOUNT" placeholder="" value="" required>
                                    <label class="bangla">আদায়যোগ্য টাকা</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="RECEIVED" placeholder="" value="">
                                    <label class="bangla">গ্রহনকৃত টাকা</label>
                                </div>
                                
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="DUE" placeholder="" value="">
                                    <label class="bangla">বকেয়া</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <textarea name="REMARK" class="form-control bangla" placeholder="" id="floatingTextarea2" style="height: 200px" placeholder=""></textarea>
                                    <label for="floatingTextarea2" class="bangla">বেতন সংক্রান্ত মন্তব্য লিখুন</label>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="addVoucherbtn" class="btn btn-primary">Save</button>
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- End Model Content -->
            </div>
        </div>
    </div>
  </div>
</main>

<?php include "theme/app-footer-nav.php"; ?>
<?php include "theme/app-footer.php"; ?>
