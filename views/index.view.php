<?php require ('app/verify-session.php'); ?>
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
        <div class="col-sm-6"><h3 class="mb-0">Dashboard</h3></div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="<?= $web_address ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
      <!--begin::Row-->
      <div class="row">
        <!--begin::Col-->
        <div class="col-lg-3 col-6">
          <!--begin::Small Box Widget 1-->
          <a href="<?= $web_address ?>student-record">
            <div class="small-box text-bg-primary">
              <div class="inner">
                <h3>
                  <?php $db->StudentCount(NULL, 'ACTIVE'); ?>
                </h3>
                <p>Total Students</p>
              </div>
              <span class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">Click Here <i class="bi bi-link-45deg"></i></span>
            </div>
          </a>
          <!--end::Small Box Widget 1-->
        </div>
        <!--end::Col-->
        <div class="col-lg-3 col-6">
          <!--begin::Small Box Widget 2-->
          <a href="<?= $web_address ?>">
            <div class="small-box text-bg-primary">
              <div class="inner">
                <h3>
                  0
                </h3>
                <p>Total Employee</p>
              </div>
              <span class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">Click Here <i class="bi bi-link-45deg"></i></span>
            </div>
          </a>
          <!--end::Small Box Widget 2-->
        </div>
        <!--end::Col-->
        <div class="col-lg-3 col-6">
          <!--begin::Small Box Widget 3-->
          <a href="<?= $web_address ?>">
            <div class="small-box text-bg-primary">
              <div class="inner">
                <h3>
                  0
                </h3>
                <p>Today's Attendance</p>
              </div>
              <span class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">Click Here <i class="bi bi-link-45deg"></i></span>
            </div>
          </a>
          <!--end::Small Box Widget 3-->
        </div>
        <!--end::Col-->
        <div class="col-lg-3 col-6">
          <!--begin::Small Box Widget 4-->
          <a href="<?= $web_address ?>">
            <div class="small-box text-bg-primary">
              <div class="inner">
                <h3>
                  <?php get_balance(); ?>
                </h3>
                <p>SMS Balance</p>
              </div>
              <span class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">Click Here <i class="bi bi-link-45deg"></i></span>
            </div>
          </a>
          <!--end::Small Box Widget 4-->
        </div>
        <!--end::Col-->
        <div class="col-lg-3 col-6">
          <!--begin::Small Box Widget 4-->
          <a href="<?= $web_address ?>student-fee-take">
            <div class="small-box text-bg-primary">
              <div class="inner">
                <h3>
                  <?php
                      $received_amount = 0;
                      $result = $db->showVoucherAll();
                      foreach($result as $data){
                          $received_amount+= $data['RECEIVED'];
                      }
                      echo $received_amount;
                  ?>  
                </h3>
                <p>Total Received Fees</p>
                <h3>
                  <?php
                      $due_amount = 0;
                      $result = $db->showVoucherAll();
                      foreach($result as $data){
                          $due_amount+= $data['DUE'];
                      }
                      echo $due_amount;
                  ?>  
                </h3>
                <p>Total Dues</p>
              </div>
              <span class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">Click Here <i class="bi bi-link-45deg"></i></span>
            </div>
          </a>
          <!--end::Small Box Widget 4-->
        </div>
        <!--end::Col-->
      </div>
      <!--end::Row-->
    </div>
    <!--end::Container-->
  </div>
  <!--end::App Content-->
</main>

<?php include "theme/app-footer-nav.php"; ?>
<?php include "theme/app-footer.php"; ?>
