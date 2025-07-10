<?php include "theme/app-head.php"; ?>
<?php include "theme/app-header-nav.php"; ?>
<?php include "theme/app-sidebar-nav.php"; ?>
<?php $db = new ModelDbClass(); ?>


<?php
if(empty($_GET['id'])){
$id = '0';
}else{
$id = $_GET['id'];
}

if(empty($_GET['page'])){
$page = 'profile';
}else{
$page = $_GET['page'];
}


if ($_SERVER['REQUEST_METHOD']=='POST') 
{
  if(isset($_POST['update'])){
    
  }
}
?>


<main class="app-main">

    <!-- App Header---------------------------------------- -->
    <div class="app-content-header">

    <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
            <div class="col-sm-6"><h4 class="mb-0">Students Profile Details</h4></div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item"><a href="<?= $web_address ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Students Profile details</li>
            </ol>
            </div>
        </div>
        <!--end::Row-->
    </div>

    </div>

    <!-- App body---------------------------------------- -->
    <div class="app-content">

        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <nav class="mb-3">
                        <a class="btn btn-primary m-1" href="?id=<?= $id ?>&page=profile">Profile</a>
                        <a class="btn btn-primary m-1" href="?id=<?= $id ?>&page=id-card">ID-Card</a>
                        <a class="btn btn-primary m-1" href="?id=<?= $id ?>&page=fees">Fees</a>
                        <a class="btn btn-primary m-1" href="?id=<?= $id ?>&page=result">Result</a>
                        <a class="btn btn-primary m-1" href="?id=<?= $id ?>&page=attendance">Attendance</a>
                    </nav>
                    <hr>
                    <?php
                    switch ($page) {
                        case 'profile':
                            $result = $db->showStudentById($id);
                            foreach($result as $data){
                            ?>
                            <!--Profile----------------------------------------------------------------------------------------------------------->                                        
                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    <div class="card">
                                        <p class="fs-5 w-auto fw-bold p-3 border-bottom">Photo's</p>
                                        <div class="row p-2">
                                            <div class="col-sm-4">
                                                <img src="<?= $data['PIC'] ?>" class="img-fluid img-thumbnail" style="width:100%; height:auto;">
                                                <p class="w-auto fw-bold p-1 mt-2">Student Photo</p>
                                            </div>
                                            <div class="col-sm-4">
                                                <img src="</?= $data['PIC'] ?>" class="img-fluid img-thumbnail" style="width:100%; height:auto;">
                                                <p class="w-auto fw-bold p-1 mt-2">Father Photo</p>
                                            </div>
                                            <div class="col-sm-4">
                                                <img src="</?= $data['PIC'] ?>" class="img-fluid img-thumbnail" style="width:100%; height:auto;">
                                                <p class="w-auto fw-bold p-1 mt-2">Mother Photo</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <div class="card p-2">
                                        <p class="fs-5 w-auto fw-bold p-3 border-bottom">Academic Information</p>
                                        <table class="table table-sm">
                                            <tbody>
                                                <tr>
                                                    <th style="width: 30%;">Academic Year</th>
                                                    <td style="width: 3%;">:</td>
                                                    <td style="width: 65%;"><?= $data['ACADEMIC_YEAR'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Class</th>
                                                    <td>:</td>
                                                    <td><?= $data['CLASS'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Section</th>
                                                    <td>:</td>
                                                    <td><?= $data['SECTION'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Roll</th>
                                                    <td>:</td>
                                                    <td><?= $data['ROLL'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Student ID</th>
                                                    <td>:</td>
                                                    <td><?= $data['STUDENT_ID'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Status</th>
                                                    <td>:</td>
                                                    <td><span style="background-color: green; color: white; padding: 2px; border-radius: 4px;"><?= $data['STATUS'] ?></span></td>
                                                </tr>
                                                <tr>
                                                    <th>Last Update</th>
                                                    <td>:</td>
                                                    <td><?= $data['STATUS'] ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    <div class="card p-2">
                                        <p class="fs-5 w-auto fw-bold p-3 border-bottom">Student Information</p>
                                        <table class="table table-sm">
                                            <tbody>
                                                <tr>
                                                    <th style="width: 30%;">Student Name</th>
                                                    <td style="width: 3%;">:</td>
                                                    <td style="width: 65%;"><?= $data['NAME_EN'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th class="bangla">শিক্ষার্থীর নাম</th>
                                                    <td>:</td>
                                                    <td class="bangla"><?= $data['NAME_BN'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th >Date of Birth</th>
                                                    <td>:</td>
                                                    <td><?= $data['DATE_OF_BIRTH'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Birth Reg. No.</th>
                                                    <td>:</td>
                                                    <td><?= $data['BIRTH_REG_NO'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Blood Group</th>
                                                    <td>:</td>
                                                    <td><?= $data['BLOOD_GROUP'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Religion</th>
                                                    <td>:</td>
                                                    <td><?= $data['RELIGION'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Gender</th>
                                                    <td>:</td>
                                                    <td><?= $data['GENDER'] ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <div class="card p-2">
                                        <p class="fs-5 w-auto fw-bold p-3 border-bottom">Parents Information</p>
                                        <table class="table table-sm">
                                            <tbody>
                                                <tr>
                                                    <th style="width: 30%;">Father's Name</th>
                                                    <td style="width: 3%;">:</td>
                                                    <td style="width: 65%;"><?= $data['FATHER_NAME'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Father's Mobile</th>
                                                    <td>:</td>
                                                    <td><a class="text-decoration-none" href="tel:<?= $data['FATHER_MOBILE_NUMBER'] ?>"><?= $data['FATHER_MOBILE_NUMBER'] ?></a></td>
                                                </tr>
                                                <tr>
                                                    <th>Father's N.I.D</th>
                                                    <td>:</td>
                                                    <td><?= $data['FATHER_NID'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Mother's Name</th>
                                                    <td>:</td>
                                                    <td><?= $data['MOTHER_NAME'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Mother's Mobile</th>
                                                    <td>:</td>
                                                    <td><a class="text-decoration-none" href="tel:<?= $data['MOTHER_MOBILE_NUMBER'] ?>"><?= $data['MOTHER_MOBILE_NUMBER'] ?></a></td>
                                                </tr>
                                                <tr>
                                                    <th>Mother's N.I.D</th>
                                                    <td>:</td>
                                                    <td><?= $data['MOTHER_NID'] ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    <div class="card p-2">
                                        <p class="fs-5 w-auto fw-bold p-3 border-bottom">Address</p>
                                        <table class="table table-sm">
                                            <tbody>
                                                <tr>
                                                    <th style="width: 30%;">Present Address</th>
                                                    <td style="width: 3%;">:</td>
                                                    <td class="bangla" style="width: 65%;"><?= $data['PRESENT_ADDRESS'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Permanant Address</th>
                                                    <td>:</td>
                                                    <td class="bangla"><?= $data['PERMANENT_ADDRESS'] ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <?php                                 
                            }
                            break;
                        
                        case 'id-card':
                            ?>
                            <!--Fees----------------------------------------------------------------------------------------------------------->
                            <?php
                            break;

                        case 'fees':
                            ?>
                            <!--Fees----------------------------------------------------------------------------------------------------------->
                            <div class="card mt-3">
                                <div class="card-body">
                                    <p class="fs-5 w-auto fw-bold p-3 border-bottom">Student Fees Collection</p>
                                    <button type="button" class="btn btn-primary float-end m-2" data-bs-toggle="modal" data-bs-target="#modelAddStudent">
                                        <i class="fa-solid fa-user-plus"></i> Take Fees
                                    </button>
                                    <table class="table table-bordered table-striped studentRecordTable">
                                        <thead>
                                            <tr>
                                                <th>Voucher No</th>
                                                <th>Description</th>
                                                <th>Amount</th>
                                                <th>Due</th>
                                                <th>Remark</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>202505070001</td>
                                                <td class="bangla">জানুয়ারী মাসের বেতন পরিশোধ বাবদ প্রদান</td>
                                                <td>1500</td>
                                                <td>0</td>
                                                <td class="bangla">ফেব্রুয়ারী বেতন বকেয়া</td>
                                                <td>
                                                <a class="btn btn-warning m-1" data-bs-toggle="modal" data-bs-target="#update<?= $data['STUDENT_ID'] ?>" href="#"><i class="fas fa-pen-to-square"></i></a>
                                                <a class="btn btn-danger m-1" data-bs-toggle="modal" data-bs-target="#update<?= $data['STUDENT_ID'] ?>" href="#"><i class="fa-solid fa-trash"></i></a>
                                                <a class="btn btn-success m-1" data-bs-toggle="modal" data-bs-target="#update<?= $data['STUDENT_ID'] ?>" href="#"><i class="fas fa-solid fa-print"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <?php
                            break;

                        case 'result':
                            ?>
                            <!--Fees----------------------------------------------------------------------------------------------------------->
                            <div class="row" style="padding-bottom: 10px;">
                                <div class="col-md-12 text-center">
                                    <fieldset class="border p-2">
                                        <legend class="w-auto text-nowrap">Student Information</legend>
                                        <div class="row" style="padding-bottom: 15px;">
                                            <div class="col-md-3 text-left">
                                                Academic Year : 2025                                                    </div>
                                            <div class="col-md-3 text-left">
                                                Class : PLAY                                                    </div>
                                            <div class="col-md-3 text-left">
                                                Section: N/A                                                    </div>
                                            <div class="col-md-3 text-left">
                                                Roll         : 001                                                    </div>
                                        </div>
                                        <div class="row" style="padding-bottom: 15px;">
                                            <div class="col-md-3 text-left">
                                                Student ID   : 10-25-001                                                    </div>
                                            <div class="col-md-3 text-left">
                                                Father's Name: MD RASHED HOSSAIN                                                    </div>
                                            <div class="col-md-3 text-left">
                                                Student Name : MD MUNTASIR ARYAN                                                    </div>
                                            <div class="col-md-3 text-left">
                                                Mobile: MD RASHED HOSSAIN                                                    </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <?php
                            break;

                        case 'attendance':
                            ?>
                            <!--Fees----------------------------------------------------------------------------------------------------------->                                    
                            <div class="row" style="padding-bottom: 10px; overflow-x:auto;">
                                <table  style="width: 100%;">
                                    <tbody><tr>
                                                <th style="padding:0px; margin:0px;border: 1px dotted;">Month</th>
                                                <th style="padding:0px; margin:0px;border: 1px dotted;">01</th>
                                                <th style="padding:0px; margin:0px;border: 1px dotted;">02</th>
                                                <th style="padding:0px; margin:0px;border: 1px dotted;">03</th>
                                                <th style="padding:0px; margin:0px;border: 1px dotted;">04</th>
                                                <th style="padding:0px; margin:0px;border: 1px dotted;">05</th>
                                                <th style="padding:0px; margin:0px;border: 1px dotted;">06</th>
                                                <th style="padding:0px; margin:0px;border: 1px dotted;">07</th>
                                                <th style="padding:0px; margin:0px;border: 1px dotted;">08</th>
                                                <th style="padding:0px; margin:0px;border: 1px dotted;">09</th>
                                                <th style="padding:0px; margin:0px;border: 1px dotted;">10</th>
                                                <th style="padding:0px; margin:0px;border: 1px dotted;">11</th>
                                                <th style="padding:0px; margin:0px;border: 1px dotted;">12</th>
                                                <th style="padding:0px; margin:0px;border: 1px dotted;">13</th>
                                                <th style="padding:0px; margin:0px;border: 1px dotted;">14</th>
                                                <th style="padding:0px; margin:0px;border: 1px dotted;">15</th>
                                                <th style="padding:0px; margin:0px;border: 1px dotted;">16</th>
                                                <th style="padding:0px; margin:0px;border: 1px dotted;">17</th>
                                                <th style="padding:0px; margin:0px;border: 1px dotted;">18</th>
                                                <th style="padding:0px; margin:0px;border: 1px dotted;">19</th>
                                                <th style="padding:0px; margin:0px;border: 1px dotted;">20</th>
                                                <th style="padding:0px; margin:0px;border: 1px dotted;">21</th>
                                                <th style="padding:0px; margin:0px;border: 1px dotted;">22</th>
                                                <th style="padding:0px; margin:0px;border: 1px dotted;">23</th>
                                                <th style="padding:0px; margin:0px;border: 1px dotted;">24</th>
                                                <th style="padding:0px; margin:0px;border: 1px dotted;">25</th>
                                                <th style="padding:0px; margin:0px;border: 1px dotted;">26</th>
                                                <th style="padding:0px; margin:0px;border: 1px dotted;">27</th>
                                                <th style="padding:0px; margin:0px;border: 1px dotted;">28</th>
                                                <th style="padding:0px; margin:0px;border: 1px dotted;">29</th>
                                                <th style="padding:0px; margin:0px;border: 1px dotted;">30</th>
                                                <th style="padding:0px; margin:0px;border: 1px dotted;">31</th>
                                                <th style="padding:0px; margin:0px;border: 1px dotted;">Total A</th>
                                                <th style="padding:0px; margin:0px;border: 1px dotted;">Total P</th>
                                        </tr>
                                                                                <tr>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                            </tr>
                                                                                        <tr>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                            </tr>
                                                                                        <tr>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                                <td style="padding:0px; margin:0px; background-color:;color:;"></td>
                                            </tr>
                                    </tbody>
                                </table>
                            </div>
                            <?php
                            break;
                    }
                    ?>
                </div>
            </div>
        </div>

    </div>

</main>

<?php include "theme/app-footer-nav.php"; ?>
<?php include "theme/app-footer.php"; ?>
