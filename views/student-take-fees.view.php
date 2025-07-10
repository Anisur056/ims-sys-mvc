<?php include "theme/app-head.php"; ?>
<?php include "theme/app-header-nav.php"; ?>
<?php include "theme/app-sidebar-nav.php"; ?>
<?php $db = new ModelDbClass(); ?>

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

  </div>


  <div class="app-content">
    <div class="container-fluid">
    <div class="row" style="padding-bottom: 10px;">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="padding-bottom: 5px">
                        <div class="card">
                      	    <div class="card-body">
                      	        <div class="row">
                                    <div class="col-md-3" style="overflow:hidden;">
                                        <form method="POST" action="">
                                            <div class="input-group searchformfld">
                                                <input type="text" class="form-control text-center" id="studentid" name="studentid" placeholder=" " value="" required="">
                                                <label for="studentid">Student ID</label>
                                                <div class="input-group-append">
                                                  <button class="btn search2" name="search_id" type="studentid" alt="Search Student" title="Search Student">
                                                    <i class="fa fa-search"></i>
                                                  </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-5">
                                        <form method="POST" action="">
                                            <div class="input-group searchformfld" style="display:flex;">
                                            	<select name="year2" class="form-control" required="">
                                            	    <option value="">-- Select Year --</option>
                                                    <option value="2024">2024</option><option value="2025" selected="">2025</option>                                            	</select>
                                            	<select name="class" class="form-control" required="">
                                            	    <option value="">-- Select Class --</option>
                                                    <option value="PLAY" selected="">PLAY</option><option value="NURSERY">NURSERY</option><option value="ONE">ONE</option><option value="TWO">TWO</option><option value="THREE">THREE</option><option value="FOUR">FOUR</option><option value="HIFZ NAZERA">HIFZ NAZERA</option><option value="HIFZ INTERNATIONAL">HIFZ INTERNATIONAL</option><option value="HIFZ RIVISION">HIFZ RIVISION</option>                                            	</select>
                                            	<select name="section" class="form-control" required="">
                                            	    <option value="">-- Select Section --</option>
                                                    <option value="N/A" selected="">N/A</option>                                            	</select>
                                                <input type="number" class="form-control" id="roll" name="roll" placeholder=" " value="001" required="">
                                                <label for="roll">Roll</label>
                                                <div class="input-group-append">
                                                  <button class="btn search2" name="class_section_roll" type="class_section_roll" alt="Search Student" title="Search Student">
                                                    <i class="fa fa-search"></i>
                                                  </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                      	<!---------------------------------------------------------------------------
                      	/////////////////////Cash Receiving Form/////////////////////////////////////
                      	---------------------------------------------------------------------------->
                      	                            <!--######################## Scholarship Alert Modal End #####################-->
                            <div class="card" style="border: 1px dotted blue">
                          	    <div class="card-body">
                                        <div class="row2">
                                            <div class="column" style="padding-right:15px;">
                                                    <div style="margin:auto; padding-bottom:10px;">
                                                        <fieldset style="margin:auto; border-image: linear-gradient(to right, red, orange) 30;border-width: 4px;border-style: solid;">
                                                            <legend class="w-auto group">শিক্ষার্থীর তথ্য</legend>
                                                            <div style="width:100%;display:flex;">
                                                            			<form method="POST" target="print_popup" action="fees_statement.php" onsubmit="window.open('about:blank','print_popup','width=1050,height=800');"></form>
                                                                            <input type="hidden" name="studentid" value="10-25-001">
                                                                            <button type="submit" class="btn btn-outline-primary" name="view">হিসাব বিবরণী</button>
                                                                        
                                                            			<form method="POST" target="print_popup" action="paid_list.php" onsubmit="window.open('about:blank','print_popup','width=1050,height=800');"></form>
                                                                            <input type="hidden" name="studentid" value="10-25-001">
                                                                            <button type="submit" class="btn btn-outline-success" name="view">টাকা প্রদানের তালিকা</button>
                                                                        
                                                            			<form method="POST" target="print_popup" action="due_slip.php" onsubmit="window.open('about:blank','print_popup','width=1050,height=800');"></form>
                                                                            <input type="hidden" name="studentid" value="10-25-001">
                                                                            <button type="submit" class="btn btn-outline-danger" name="view">বকেয়া টাকার তালিকা</button>
                                                                        
                                                            			<form method="POST" target="print_popup" action="all_receipt.php" onsubmit="window.open('about:blank','print_popup','width=1050,height=800');"></form>
                                                            			                                                                                <input type="hidden" name="id" value="ac-25-005">
                                                                            <input type="hidden" name="studentid" value="10-25-001">
                                                                            <button type="submit" class="btn btn-outline-info" name="view">সকল রসিদ</button>
                                                                        
                                                            			<form method="POST" target="print_popup" action="receipt_double.php" onsubmit="window.open('about:blank','print_popup','width=1050,height=800');"></form>
                                                            			                                                                                <input type="hidden" name="id" value="ac-25-005">
                                                                            <input type="hidden" name="studentid" value="10-25-001">
                                                                            <button type="submit" class="btn btn-outline-info" name="view">সর্বশেষ রসিদ</button>
                                                                        
                                                                </div><table class="table">
                                                                <tbody><tr>
                                                                    <td width="200px">
                                                                        <img src="../student_image/10-25-001.png" width="150" height="150">
                                                                    </td>
                                                                    <td>
                                                                        <strong>নাম</strong>
                                                                        <br>
                                                                        আইডি
                                                                        <br>
                                                                        শ্রেণি
                                                                        <br>
                                                                        শাখা
                                                                        <br>
                                                                        রোল
                                                                        <br>
                                                                        মোবাইল
                                                                    </td>
                                                                    <td>
                                                                        <strong>: মো: মুনতাসির আরিয়ান</strong>
                                                                        <br>
                                                                        : ১০-২৫-০০১                                                                        <br>
                                                                        : PLAY                                                                        <br>
                                                                        :                                                                         <br>
                                                                        : ০০১                                                                        <br>
                                                                        : ০১৮৮৪০৫১৫৩৮                                                                    </td>
                                                                </tr>
                                                                </tbody><tfoot>
                                                                
                                                                </tfoot>
                                                            </table>
                                                        </fieldset>
                                                    </div>
                                                    <div style="margin:auto; padding-bottom:10px;height:350px;overflow:scroll;">
                                                        <fieldset style="margin:auto; border-image: linear-gradient(to right, green, #00fff7) 30;border-width: 4px;border-style: solid;">
                                                            <legend class="w-auto group">সর্বশেষ ১০টি রসিদের তথ্য</legend>
                                                            <table class="table">
                                                                <thead>
                                                                    <tr class="text-center" style="position: sticky; top: 0; z-index: 1; background-color:white;">
                                                                        <th>ক্রঃ</th>
                                                                        <th>তারিখ</th>
                                                                        <th>রসিদ নং</th>
                                                                        <th>বিবরণ</th>
                                                                        <th>প্রদেয়</th>
                                                                        <th>মওকুফ</th>
                                                                        <th>বাকি</th>
                                                                        <th>প্রদান</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                    				                                                                  <tr style="font-size: 100%;">
                                                                      <td>১</td>
                                                                      <td>০৮/০৩/২০২৫</td>
                                                                      <td>ac-২৫-০০৫</td>
                                                                      <td>
                                                                      মাসিক বেতন (ফেব্রুয়ারী): ৬০০/-,                                                                      </td>
                                                                      <td class="text-right">৬০০/-</td>
                                                                      <td class="text-right">০/-</td>
                                                                      <td class="text-right">০/-</td>
                                                                      <td class="text-right">৬০০/-</td>
                                                                  </tr>
                                                                                                                                    <tr>
                                                                      <th class="text-right" colspan="4">সর্বমোটঃ</th>
                                                                      <th class="text-right">৬০০/-</th>
                                                                      <th class="text-right">০/-</th>
                                                                      <th class="text-right">০/-</th>
                                                                      <th class="text-right">৬০০/-</th>
                                                                  </tr>
                                                                </tbody><tbody>
                                                            </tbody></table>
                                                        </fieldset>
                                                    </div>
                                                    
                                            </div>
                                            <div class="column">
                                  	        <form method="POST" onsubmit="$('#loading1').show(); $('#loading2').show(); $('#main_text').hide();">
                                  	            <input type="hidden" name="name" value="MD MUNTASIR ARYAN">
                                  	            <input type="hidden" name="studentid" value="10-25-001">
                                  	            <input type="hidden" name="shift" value="N/A">
                                  	            <input type="hidden" name="class" value="PLAY">
                                  	            <input type="hidden" name="section" value="N/A">
                                  	            <input type="hidden" name="roll" value="001">
                                  	            <input type="hidden" name="mobile" value="01884051538">
                                                    <div class="input-group">
                                                        <label style="padding:10px">জমার তারিখঃ  </label>
                                                                                                                <input type="text" style="width:100;" class="form-control text-center" name="date_d" placeholder="দিন" value="03" required="">
                                                        <input type="text" style="width:100;" class="form-control text-center" name="date_m" placeholder="মাস" value="05" required="">
                                                        <input type="text" style="width:100;" class="form-control text-center" name="date_y" placeholder="বছর" value="2025" required="">
                                                    	<span style="color: red; font-size: 15px; padding:10px; padding-right:20px;">আবশ্যক</span>
                                                    	                                                    	<h4 style="color:blue;">সর্বমোট বাকিঃ
                                                    	৫,২০০                                                    	টাকা
                                                    	</h4>
                                                	</div>
                                                <div class="pane">
                                                <table class="table table-bordered table-striped text-center customtable" style="table-layout: fixed;">
                                                    <thead>
                                                        <tr class="table-head-3" style="margin-top:-200px;">
                                                            <th style="width:80px;">ক্রমিকনং</th>
                                                            <th>বিবরণ</th>
                                                            <th style="width:80px;">টাকা</th>
                                                            <th style="width:120px;">মওকুফ</th>
                                                            <th style="width:120px;">বাকি</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="max-height:200px;overflow:scroll;" id="catlist">
                                                                                                                            <tr>
                                                                    <td style="width:80px;">১</td>
                                                                    <td class="text-left">
                                                                        <input type="hidden" name="id[]" value="134">
                                                                        <label>
                                                                            <input type="checkbox" class="largerCheckbox" name="checkbox[]" value="134" id="600">
                                                                            মাসিক বেতন (জানুয়ারী)-২০২৫<br>
                                                                            <span class="text-muted">
                                                                                                                                                            </span>
                                                                            <input type="checkbox" style="display:none;" name="payable[]" value="600">
                                                                        </label>
                                                                        <input type="hidden" name="note[]" value=" ">
                                                                    </td>
                                                                    <td><input type="hidden" name="taka[]" value="600">৬০০</td>
                                                                    <td><input type="number" name="waiver[]" value="" style="width: 100px;"></td>
                                                                    <td><input type="number" name="due[]" value="" style="width: 100px;"></td>
                                                                </tr>
                                                                                                                        <tr>
                                                                    <td style="width:80px;">২</td>
                                                                    <td class="text-left">
                                                                        <input type="hidden" name="id[]" value="136">
                                                                        <label>
                                                                            <input type="checkbox" class="largerCheckbox" name="checkbox[]" value="136" id="600">
                                                                            মাসিক বেতন (মার্চ)-২০২৫<br>
                                                                            <span class="text-muted">
                                                                                                                                                            </span>
                                                                            <input type="checkbox" style="display:none;" name="payable[]" value="600">
                                                                        </label>
                                                                        <input type="hidden" name="note[]" value=" ">
                                                                    </td>
                                                                    <td><input type="hidden" name="taka[]" value="600">৬০০</td>
                                                                    <td><input type="number" name="waiver[]" value="" style="width: 100px;"></td>
                                                                    <td><input type="number" name="due[]" value="" style="width: 100px;"></td>
                                                                </tr>
                                                                                                                        <tr>
                                                                    <td style="width:80px;">৩</td>
                                                                    <td class="text-left">
                                                                        <input type="hidden" name="id[]" value="272">
                                                                        <label>
                                                                            <input type="checkbox" class="largerCheckbox" name="checkbox[]" value="272" id="2000">
                                                                            মাসিক বেতন (এপ্রিল)-২০২৫<br>
                                                                            <span class="text-muted">
                                                                                Fees of 2025                                                                            </span>
                                                                            <input type="checkbox" style="display:none;" name="payable[]" value="2000">
                                                                        </label>
                                                                        <input type="hidden" name="note[]" value="Fees of 2025 ">
                                                                    </td>
                                                                    <td><input type="hidden" name="taka[]" value="2000">২০০০</td>
                                                                    <td><input type="number" name="waiver[]" value="" style="width: 100px;"></td>
                                                                    <td><input type="number" name="due[]" value="" style="width: 100px;"></td>
                                                                </tr>
                                                                                                                        <tr>
                                                                    <td style="width:80px;">৪</td>
                                                                    <td class="text-left">
                                                                        <input type="hidden" name="id[]" value="273">
                                                                        <label>
                                                                            <input type="checkbox" class="largerCheckbox" name="checkbox[]" value="273" id="2000">
                                                                            মাসিক বেতন (মে)-২০২৫<br>
                                                                            <span class="text-muted">
                                                                                Fees of 2025                                                                            </span>
                                                                            <input type="checkbox" style="display:none;" name="payable[]" value="2000">
                                                                        </label>
                                                                        <input type="hidden" name="note[]" value="Fees of 2025 ">
                                                                    </td>
                                                                    <td><input type="hidden" name="taka[]" value="2000">২০০০</td>
                                                                    <td><input type="number" name="waiver[]" value="" style="width: 100px;"></td>
                                                                    <td><input type="number" name="due[]" value="" style="width: 100px;"></td>
                                                                </tr>
                                                                                                                        <tr>
                                                                    <td style="width:80px;">৫</td>
                                                                    <td class="text-left">
                                                                        <input type="hidden" name="id[]" value="274">
                                                                        <label>
                                                                            <input type="checkbox" class="largerCheckbox" name="checkbox[]" value="274" id="2000">
                                                                            মাসিক বেতন (জুন)-২০২৫<br>
                                                                            <span class="text-muted">
                                                                                Fees of 2025                                                                            </span>
                                                                            <input type="checkbox" style="display:none;" name="payable[]" value="2000">
                                                                        </label>
                                                                        <input type="hidden" name="note[]" value="Fees of 2025 ">
                                                                    </td>
                                                                    <td><input type="hidden" name="taka[]" value="2000">২০০০</td>
                                                                    <td><input type="number" name="waiver[]" value="" style="width: 100px;"></td>
                                                                    <td><input type="number" name="due[]" value="" style="width: 100px;"></td>
                                                                </tr>
                                                                                                                        <tr>
                                                                    <td style="width:80px;">৬</td>
                                                                    <td class="text-left">
                                                                        <input type="hidden" name="id[]" value="275">
                                                                        <label>
                                                                            <input type="checkbox" class="largerCheckbox" name="checkbox[]" value="275" id="2000">
                                                                            মাসিক বেতন (জুলাই)-২০২৫<br>
                                                                            <span class="text-muted">
                                                                                Fees of 2025                                                                            </span>
                                                                            <input type="checkbox" style="display:none;" name="payable[]" value="2000">
                                                                        </label>
                                                                        <input type="hidden" name="note[]" value="Fees of 2025 ">
                                                                    </td>
                                                                    <td><input type="hidden" name="taka[]" value="2000">২০০০</td>
                                                                    <td><input type="number" name="waiver[]" value="" style="width: 100px;"></td>
                                                                    <td><input type="number" name="due[]" value="" style="width: 100px;"></td>
                                                                </tr>
                                                                                                                        <tr>
                                                                    <td style="width:80px;">৭</td>
                                                                    <td class="text-left">
                                                                        <input type="hidden" name="id[]" value="276">
                                                                        <label>
                                                                            <input type="checkbox" class="largerCheckbox" name="checkbox[]" value="276" id="2000">
                                                                            মাসিক বেতন (আগষ্ঠ)-২০২৫<br>
                                                                            <span class="text-muted">
                                                                                Fees of 2025                                                                            </span>
                                                                            <input type="checkbox" style="display:none;" name="payable[]" value="2000">
                                                                        </label>
                                                                        <input type="hidden" name="note[]" value="Fees of 2025 ">
                                                                    </td>
                                                                    <td><input type="hidden" name="taka[]" value="2000">২০০০</td>
                                                                    <td><input type="number" name="waiver[]" value="" style="width: 100px;"></td>
                                                                    <td><input type="number" name="due[]" value="" style="width: 100px;"></td>
                                                                </tr>
                                                                                                                        <tr>
                                                                    <td style="width:80px;">৮</td>
                                                                    <td class="text-left">
                                                                        <input type="hidden" name="id[]" value="277">
                                                                        <label>
                                                                            <input type="checkbox" class="largerCheckbox" name="checkbox[]" value="277" id="2000">
                                                                            মাসিক বেতন (সেপ্টেম্বর)-২০২৫<br>
                                                                            <span class="text-muted">
                                                                                Fees of 2025                                                                            </span>
                                                                            <input type="checkbox" style="display:none;" name="payable[]" value="2000">
                                                                        </label>
                                                                        <input type="hidden" name="note[]" value="Fees of 2025 ">
                                                                    </td>
                                                                    <td><input type="hidden" name="taka[]" value="2000">২০০০</td>
                                                                    <td><input type="number" name="waiver[]" value="" style="width: 100px;"></td>
                                                                    <td><input type="number" name="due[]" value="" style="width: 100px;"></td>
                                                                </tr>
                                                                                                                        <tr>
                                                                    <td style="width:80px;">৯</td>
                                                                    <td class="text-left">
                                                                        <input type="hidden" name="id[]" value="278">
                                                                        <label>
                                                                            <input type="checkbox" class="largerCheckbox" name="checkbox[]" value="278" id="2000">
                                                                            মাসিক বেতন (অক্টোবর)-২০২৫<br>
                                                                            <span class="text-muted">
                                                                                Fees of 2025                                                                            </span>
                                                                            <input type="checkbox" style="display:none;" name="payable[]" value="2000">
                                                                        </label>
                                                                        <input type="hidden" name="note[]" value="Fees of 2025 ">
                                                                    </td>
                                                                    <td><input type="hidden" name="taka[]" value="2000">২০০০</td>
                                                                    <td><input type="number" name="waiver[]" value="" style="width: 100px;"></td>
                                                                    <td><input type="number" name="due[]" value="" style="width: 100px;"></td>
                                                                </tr>
                                                                                                                        <tr>
                                                                    <td style="width:80px;">১০</td>
                                                                    <td class="text-left">
                                                                        <input type="hidden" name="id[]" value="279">
                                                                        <label>
                                                                            <input type="checkbox" class="largerCheckbox" name="checkbox[]" value="279" id="2000">
                                                                            মাসিক বেতন (নভেম্বর)-২০২৫<br>
                                                                            <span class="text-muted">
                                                                                Fees of 2025                                                                            </span>
                                                                            <input type="checkbox" style="display:none;" name="payable[]" value="2000">
                                                                        </label>
                                                                        <input type="hidden" name="note[]" value="Fees of 2025 ">
                                                                    </td>
                                                                    <td><input type="hidden" name="taka[]" value="2000">২০০০</td>
                                                                    <td><input type="number" name="waiver[]" value="" style="width: 100px;"></td>
                                                                    <td><input type="number" name="due[]" value="" style="width: 100px;"></td>
                                                                </tr>
                                                                                                                        <tr>
                                                                    <td style="width:80px;">১১</td>
                                                                    <td class="text-left">
                                                                        <input type="hidden" name="id[]" value="280">
                                                                        <label>
                                                                            <input type="checkbox" class="largerCheckbox" name="checkbox[]" value="280" id="2000">
                                                                            মাসিক বেতন (ডিসেম্বর)-২০২৫<br>
                                                                            <span class="text-muted">
                                                                                Fees of 2025                                                                            </span>
                                                                            <input type="checkbox" style="display:none;" name="payable[]" value="2000">
                                                                        </label>
                                                                        <input type="hidden" name="note[]" value="Fees of 2025 ">
                                                                    </td>
                                                                    <td><input type="hidden" name="taka[]" value="2000">২০০০</td>
                                                                    <td><input type="number" name="waiver[]" value="" style="width: 100px;"></td>
                                                                    <td><input type="number" name="due[]" value="" style="width: 100px;"></td>
                                                                </tr>
                                                                                                                        <tr>
                                                                    <th colspan="5">
                                                                        <strong style="color:red;">উপরে (<i class="fad fa-arrow-up"></i>) ফিসের কোনো ঘর না থাকলে তখন [Advance Payment] এ ক্লিক করবেন। অন্যথায় [Advance Payment] এ ক্লিক করা থেকে বিরত থাকুন</strong>
                                                                        <br>
                                                                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Advance Payment</button>
                                                                    </th>
                                                                </tr>
                                                                                                                        <tr class="collapse" id="collapseExample" style="color:red;">
                                                                    <td style="width:80px;">১</td>
                                                                    <td class="text-left">
                                                                        <input type="hidden" name="fid[]" value="27">
                                                                        <label>
                                                                            <input type="checkbox" class="largerCheckbox" name="fcheckbox[]" value="27" id="600" disabled="">
                                                                             মাসিক বেতন (জানুয়ারী)                                                                            <input type="checkbox" style="display:none;" name="fpayable[]" value="600">
                                                                        </label>
                                                                        <input type="hidden" name="fnote[]" value=" ">
                                                                    </td>
                                                                    <td><input type="hidden" name="ftaka[]" value="600">৬০০</td>
                                                                    <td><input type="number" name="fwaiver[]" value="" style="width: 100px;" disabled=""></td>
                                                                    <td><input type="number" name="fdue[]" value="" style="width: 100px;" disabled=""></td>
                                                                </tr>
                                                                                                                        <tr class="collapse" id="collapseExample" style="color:;">
                                                                    <td style="width:80px;">২</td>
                                                                    <td class="text-left">
                                                                        <input type="hidden" name="fid[]" value="28">
                                                                        <label>
                                                                            <input type="checkbox" class="largerCheckbox" name="fcheckbox[]" value="28" id="600" disabled="">
                                                                             <span style="text-decoration: line-through; color:#bab8b8;">মাসিক বেতন (ফেব্রুয়ারী)</span>                                                                            <input type="checkbox" style="display:none;" name="fpayable[]" value="600" disabled="">
                                                                        </label>
                                                                        <input type="hidden" name="fnote[]" value=" ">
                                                                    </td>
                                                                    <td><input type="hidden" name="ftaka[]" value="600"><span style="text-decoration: line-through; color:#bab8b8;">৬০০</span></td>
                                                                    <td><input type="number" name="fwaiver[]" value="" style="width: 100px;" disabled=""></td>
                                                                    <td><input type="number" name="fdue[]" value="" style="width: 100px;" disabled=""></td>
                                                                </tr>
                                                                                                                        <tr class="collapse" id="collapseExample" style="color:red;">
                                                                    <td style="width:80px;">৩</td>
                                                                    <td class="text-left">
                                                                        <input type="hidden" name="fid[]" value="29">
                                                                        <label>
                                                                            <input type="checkbox" class="largerCheckbox" name="fcheckbox[]" value="29" id="600" disabled="">
                                                                             মাসিক বেতন (মার্চ)                                                                            <input type="checkbox" style="display:none;" name="fpayable[]" value="600">
                                                                        </label>
                                                                        <input type="hidden" name="fnote[]" value=" ">
                                                                    </td>
                                                                    <td><input type="hidden" name="ftaka[]" value="600">৬০০</td>
                                                                    <td><input type="number" name="fwaiver[]" value="" style="width: 100px;" disabled=""></td>
                                                                    <td><input type="number" name="fdue[]" value="" style="width: 100px;" disabled=""></td>
                                                                </tr>
                                                                                                                        <tr class="collapse" id="collapseExample" style="color:red;">
                                                                    <td style="width:80px;">৪</td>
                                                                    <td class="text-left">
                                                                        <input type="hidden" name="fid[]" value="30">
                                                                        <label>
                                                                            <input type="checkbox" class="largerCheckbox" name="fcheckbox[]" value="30" id="600" disabled="">
                                                                             মাসিক বেতন (এপ্রিল)                                                                            <input type="checkbox" style="display:none;" name="fpayable[]" value="600">
                                                                        </label>
                                                                        <input type="hidden" name="fnote[]" value=" ">
                                                                    </td>
                                                                    <td><input type="hidden" name="ftaka[]" value="600">৬০০</td>
                                                                    <td><input type="number" name="fwaiver[]" value="" style="width: 100px;" disabled=""></td>
                                                                    <td><input type="number" name="fdue[]" value="" style="width: 100px;" disabled=""></td>
                                                                </tr>
                                                                                                                        <tr class="collapse" id="collapseExample" style="color:red;">
                                                                    <td style="width:80px;">৫</td>
                                                                    <td class="text-left">
                                                                        <input type="hidden" name="fid[]" value="31">
                                                                        <label>
                                                                            <input type="checkbox" class="largerCheckbox" name="fcheckbox[]" value="31" id="600" disabled="">
                                                                             মাসিক বেতন (মে)                                                                            <input type="checkbox" style="display:none;" name="fpayable[]" value="600">
                                                                        </label>
                                                                        <input type="hidden" name="fnote[]" value=" ">
                                                                    </td>
                                                                    <td><input type="hidden" name="ftaka[]" value="600">৬০০</td>
                                                                    <td><input type="number" name="fwaiver[]" value="" style="width: 100px;" disabled=""></td>
                                                                    <td><input type="number" name="fdue[]" value="" style="width: 100px;" disabled=""></td>
                                                                </tr>
                                                                                                                        <tr class="collapse" id="collapseExample" style="color:red;">
                                                                    <td style="width:80px;">৬</td>
                                                                    <td class="text-left">
                                                                        <input type="hidden" name="fid[]" value="32">
                                                                        <label>
                                                                            <input type="checkbox" class="largerCheckbox" name="fcheckbox[]" value="32" id="600" disabled="">
                                                                             মাসিক বেতন (জুন)                                                                            <input type="checkbox" style="display:none;" name="fpayable[]" value="600">
                                                                        </label>
                                                                        <input type="hidden" name="fnote[]" value=" ">
                                                                    </td>
                                                                    <td><input type="hidden" name="ftaka[]" value="600">৬০০</td>
                                                                    <td><input type="number" name="fwaiver[]" value="" style="width: 100px;" disabled=""></td>
                                                                    <td><input type="number" name="fdue[]" value="" style="width: 100px;" disabled=""></td>
                                                                </tr>
                                                                                                                        <tr class="collapse" id="collapseExample" style="color:red;">
                                                                    <td style="width:80px;">৭</td>
                                                                    <td class="text-left">
                                                                        <input type="hidden" name="fid[]" value="33">
                                                                        <label>
                                                                            <input type="checkbox" class="largerCheckbox" name="fcheckbox[]" value="33" id="600" disabled="">
                                                                             মাসিক বেতন (জুলাই)                                                                            <input type="checkbox" style="display:none;" name="fpayable[]" value="600">
                                                                        </label>
                                                                        <input type="hidden" name="fnote[]" value=" ">
                                                                    </td>
                                                                    <td><input type="hidden" name="ftaka[]" value="600">৬০০</td>
                                                                    <td><input type="number" name="fwaiver[]" value="" style="width: 100px;" disabled=""></td>
                                                                    <td><input type="number" name="fdue[]" value="" style="width: 100px;" disabled=""></td>
                                                                </tr>
                                                                                                                        <tr class="collapse" id="collapseExample" style="color:red;">
                                                                    <td style="width:80px;">৮</td>
                                                                    <td class="text-left">
                                                                        <input type="hidden" name="fid[]" value="34">
                                                                        <label>
                                                                            <input type="checkbox" class="largerCheckbox" name="fcheckbox[]" value="34" id="600" disabled="">
                                                                             মাসিক বেতন (আগষ্ঠ)                                                                            <input type="checkbox" style="display:none;" name="fpayable[]" value="600">
                                                                        </label>
                                                                        <input type="hidden" name="fnote[]" value=" ">
                                                                    </td>
                                                                    <td><input type="hidden" name="ftaka[]" value="600">৬০০</td>
                                                                    <td><input type="number" name="fwaiver[]" value="" style="width: 100px;" disabled=""></td>
                                                                    <td><input type="number" name="fdue[]" value="" style="width: 100px;" disabled=""></td>
                                                                </tr>
                                                                                                                        <tr class="collapse" id="collapseExample" style="color:red;">
                                                                    <td style="width:80px;">৯</td>
                                                                    <td class="text-left">
                                                                        <input type="hidden" name="fid[]" value="35">
                                                                        <label>
                                                                            <input type="checkbox" class="largerCheckbox" name="fcheckbox[]" value="35" id="600" disabled="">
                                                                             মাসিক বেতন (সেপ্টেম্বর)                                                                            <input type="checkbox" style="display:none;" name="fpayable[]" value="600">
                                                                        </label>
                                                                        <input type="hidden" name="fnote[]" value=" ">
                                                                    </td>
                                                                    <td><input type="hidden" name="ftaka[]" value="600">৬০০</td>
                                                                    <td><input type="number" name="fwaiver[]" value="" style="width: 100px;" disabled=""></td>
                                                                    <td><input type="number" name="fdue[]" value="" style="width: 100px;" disabled=""></td>
                                                                </tr>
                                                                                                                        <tr class="collapse" id="collapseExample" style="color:red;">
                                                                    <td style="width:80px;">১০</td>
                                                                    <td class="text-left">
                                                                        <input type="hidden" name="fid[]" value="36">
                                                                        <label>
                                                                            <input type="checkbox" class="largerCheckbox" name="fcheckbox[]" value="36" id="600" disabled="">
                                                                             মাসিক বেতন (অক্টোবর)                                                                            <input type="checkbox" style="display:none;" name="fpayable[]" value="600">
                                                                        </label>
                                                                        <input type="hidden" name="fnote[]" value=" ">
                                                                    </td>
                                                                    <td><input type="hidden" name="ftaka[]" value="600">৬০০</td>
                                                                    <td><input type="number" name="fwaiver[]" value="" style="width: 100px;" disabled=""></td>
                                                                    <td><input type="number" name="fdue[]" value="" style="width: 100px;" disabled=""></td>
                                                                </tr>
                                                                                                                        <tr class="collapse" id="collapseExample" style="color:red;">
                                                                    <td style="width:80px;">১১</td>
                                                                    <td class="text-left">
                                                                        <input type="hidden" name="fid[]" value="37">
                                                                        <label>
                                                                            <input type="checkbox" class="largerCheckbox" name="fcheckbox[]" value="37" id="600" disabled="">
                                                                             মাসিক বেতন (নভেম্বর)                                                                            <input type="checkbox" style="display:none;" name="fpayable[]" value="600">
                                                                        </label>
                                                                        <input type="hidden" name="fnote[]" value=" ">
                                                                    </td>
                                                                    <td><input type="hidden" name="ftaka[]" value="600">৬০০</td>
                                                                    <td><input type="number" name="fwaiver[]" value="" style="width: 100px;" disabled=""></td>
                                                                    <td><input type="number" name="fdue[]" value="" style="width: 100px;" disabled=""></td>
                                                                </tr>
                                                                                                                        <tr class="collapse" id="collapseExample" style="color:red;">
                                                                    <td style="width:80px;">১২</td>
                                                                    <td class="text-left">
                                                                        <input type="hidden" name="fid[]" value="38">
                                                                        <label>
                                                                            <input type="checkbox" class="largerCheckbox" name="fcheckbox[]" value="38" id="600" disabled="">
                                                                             মাসিক বেতন (ডিসেম্বর)                                                                            <input type="checkbox" style="display:none;" name="fpayable[]" value="600">
                                                                        </label>
                                                                        <input type="hidden" name="fnote[]" value=" ">
                                                                    </td>
                                                                    <td><input type="hidden" name="ftaka[]" value="600">৬০০</td>
                                                                    <td><input type="number" name="fwaiver[]" value="" style="width: 100px;" disabled=""></td>
                                                                    <td><input type="number" name="fdue[]" value="" style="width: 100px;" disabled=""></td>
                                                                </tr>
                                                                                                            </tbody>
                                                </table>
                                                </div>
                                                    <div class="card-footer text-center text-muted">
                                                        <div class="row" style="padding-bottom:10px;">
                                                            <div class="col-md-6">
                                                                Recommended by:
                                                                <select class="form-control" name="ref">
                                                                    <option value="">--Select From List--</option>
                                                                    <option value="Recommended by Principal / Head Teacher">1. Principal / Head Teacher</option>
                                                                    <option value="Recommended by Assistant Head Teacher">2. Assistant Head Teacher</option>
                                                                    <option value="Recommended by Class Teacher">3. Class Teacher</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-3">
                                                                Discount: <input type="number" class="form-control" name="discount" value="">
                                                            </div>
                                                            <div class="col-md-3">
                                                                Total: <input type="number" class="form-control" id="total" value="0" readonly="">
                                                            </div>
                                                        </div>
                                                        <div class="row" style="padding-bottom:10px;">
                                                            <div class="col-md-12">
                                                                Note: <input type="text" class="form-control" name="note" value="">
                                                            </div>
                                                        </div>
                                                        <h4 style="color:#a903fc; display:flex;">
                                                            Pay: <input type="number" class="form-control" style="font-size:25px;color:red;margin:0px;padding:0px;" id="total2" value="0">
                                                            Return: <input type="text" class="form-control" style="backgroundColor:;font-size:25px;margin:0px;padding:0px;" id="return" value="0" readonly="">
                                                        </h4>
                                                        <strong style="color:red;">[ Make Payment ] এ ক্লিক করার সাথে সাথে উক্ত শিক্ষার্থীর নামে টাকা জমা হয়ে যাবে। সুতরাং সুনিশ্চিত না হয়ে ক্লিক করবেন না।</strong>
                                        				<button type="submit" name="clearance" class="btn btn-outline-info">
                                        					<div style="display: flex;">
                                        						<div class="loader" id="loading1" style="display:none;"></div>
                                        						<div id="loading2" style="display:none;"> &nbsp;&nbsp;Please Wait...</div>
                                        					</div>
                                        					<span id="main_text" style="display:block;">Make Payment</span>
                                        				</button>
                                                    </div>
                                            </form></div>
                                        </div>
                                    
                                </div>
                            </div>
                        	                    </div>
                </div>
    </div>
  </div>

</main>

<?php include "theme/app-footer-nav.php"; ?>
<?php include "theme/app-footer.php"; ?>
