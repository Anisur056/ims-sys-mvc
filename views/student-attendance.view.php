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
      <div class="card">
      <div class="row" style="padding-bottom: 10px;">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="padding-bottom: 5px">
                        <div class="card">
                          <div class="card-body" style="color:#7200a3;">
                              <form method="POST" onsubmit="$('#loading1').show(); $('#loading2').show(); $('#main_text').hide();">
                                  <fieldset>
                                      <div class="row" style="padding-bottom: 10px;">
                                          <div class="col-md-2 form-title">
                                              Academic Year :
                                          </div>
                                          <div class="col-md-4 input-group">
                                        		<select class="form-control" name="year" required="">
                                        		    <option value="">--Select Year--</option>
                                                    <option value="2024">2024</option><option value="2025" selected="">2025</option>                                        		</select>
                                                <span style="color: red; font-size: 15px;">[Required]</span>
                                          </div>
                                          <div class="col-md-2 form-title">
                                              Shift :
                                          </div>
                                          <div class="col-md-4 input-group">
                                        		<select class="form-control" name="shift" required="">
                                        		    <option value="">--Select Shift--</option>
                                                    <option value="N/A" selected="">N/A</option>                                        		</select>
                                                <span style="color: red; font-size: 15px;">[Required]</span>
                                          </div>
                                      </div>
                                      <div class="row" style="padding-bottom: 10px;">
                                          <div class="col-md-2 form-title">
                                              Class :
                                          </div>
                                          <div class="col-md-4 input-group">
                                        		<select class="form-control" name="class" onchange="yesnoCheck(this);" required="">
                                        		    <option value="">--Select Class--</option>
                                                    <option value="PLAY" selected="">PLAY</option><option value="NURSERY">NURSERY</option><option value="ONE">ONE</option><option value="TWO">TWO</option><option value="THREE">THREE</option><option value="FOUR">FOUR</option><option value="HIFZ NAZERA">HIFZ NAZERA</option><option value="HIFZ INTERNATIONAL">HIFZ INTERNATIONAL</option><option value="HIFZ RIVISION">HIFZ RIVISION</option>                                        		</select>
                                                <span style="color: red; font-size: 15px;">[Required]</span>
                                          </div>
                                          <div class="col-md-2 form-title">
                                              Section :
                                          </div>
                                          <div class="col-md-4 input-group">
                                        		<select class="form-control" name="section" required="">
                                        		    <option value="">--Select Section--</option>
                                                    <option value="N/A" selected="">N/A</option>                                        		</select>
                                                <span style="color: red; font-size: 15px;">[Required]</span>
                                          </div>
                                        </div>
                                        <div class="row" style="padding-bottom: 10px;">
                                            <div class="col-md-2 form-title">
                                                Date :
                                            </div>
                                            <div class="col-md-4 input-group text-left" style="display:flex;">
                                        		<input type="number" class="form-control" name="date_d" placeholder="Day" value="03" required="">
                                                <input type="number" class="form-control" name="date_m" placeholder="Month" value="05" required="">
                                                <input type="number" class="form-control" name="date_y" placeholder="Year" value="2025" required="">
                                                <span style="color: red; font-size: 15px;">[Required]</span>
                                            </div>
                                            <div class="col-md-6" id="ifYes" style="display: none; padding-bottom: 10px;">
                                                <div style="display: flex;">
                                                    <div class="col-md-2 form-title">
                                                        Group :
                                                    </div>
                                                    <div class="col-md-4 text-left">
                                                        <select class="form-control" name="group" style="resize:horizontal; width:100%" onchange="groupAllCheck(this);">
                                                            <option value="All" selected="">All</option>
                                                            <option value="Science">Science</option><option value="Business Studies">Business Studies</option><option value="Humanities">Humanities</option>                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                  </fieldset>
                          </form></div>
                          <div class="card-footer text-right text-muted">
                              <button type="submit" name="show" class="btn submit">
                                  <div style="display: flex;">
                                      <div class="loader" id="loading1" style="display:none;"></div>
                                      <div id="loading2" style="display:none;"> &nbsp;&nbsp;Please Wait...</div>
                    			  </div>
                    			  <span id="main_text" style="display:block;"><i class="fas fa-eye"></i> Show Student</span>
                    		  </button>
                          </div>
                              
                        </div>
                    </div>
                </div>


                <div class="row" style="padding-bottom: 10px;">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="overflow-x: visible; white-space: nowrap;">
                        <div class="table-head">
                			    <h5 style="padding:10px;">Viewing Student List</h5>
                            </div><div class="table-head-2" style="display:flex;">
                			    <div class="div-left" style="display:flex;">
                			        <span id="desktop" style="padding-right:30px;">
                			            Total 20 Student(s)
                			        </span>
                			        <input id="myInput" style="width:100%;" type="text" placeholder="Search..">
                			    </div>
                			    <div class="div-right">
                        			<form method="POST" target="print_popup" action="attendance_print.php" onsubmit="window.open('about:blank','print_popup','width=1000,height=800');"></form>
                                        <input type="hidden" name="year" value="2025">
                                        <input type="hidden" name="shift" value="N/A">
                                        <input type="hidden" name="class" value="PLAY">
                                        <input type="hidden" name="section" value="N/A">
                                        <input type="hidden" name="group" value="All">
                                		<input type="hidden" name="date_d" value="03">
                                        <input type="hidden" name="date_m" value="05">
                                        <input type="hidden" name="date_y" value="2025">
                                        <span class="btn-group" role="group" id="desktop">
                                        <button type="submit" class="btn btn-sm print" name="print"><i class="fas fa-print"></i> Print</button>
                                        <button type="submit" class="btn btn-sm pdf" name="pdf"><i class="fas fa-file-pdf"></i> PDF</button>
                                        <button type="submit" class="btn btn-sm word" name="word"><i class="fas fa-file-word"></i> Word</button>
                                        <button type="submit" class="btn btn-sm excel" name="excel"><i class="fas fa-file-excel"></i> Excel</button>
                                        </span>
                                    
                			    </div>
                            </div><div class="modal fade" id="img1" tabindex="-1" role="dialog" aria-hidden="true">
                              <div class="modal-dialog" role="document" width="100%" height="80%">
                                <div class="modal-content">
                                        <img src="../../admin/student_image/10-25-001.png" width="100%" height="80%">
                                  <div class="modal-footer" style="text-align: left;">
                                    <span style="color: blue;">Name: MD MUNTASIR ARYAN</span>
                                    <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div><div class="modal fade" id="img5" tabindex="-1" role="dialog" aria-hidden="true">
                              <div class="modal-dialog" role="document" width="100%" height="80%">
                                <div class="modal-content">
                                        <img src="../../admin/student_image/10-25-005.png" width="100%" height="80%">
                                  <div class="modal-footer" style="text-align: left;">
                                    <span style="color: blue;">Name: MOBASHSHIR HOSSAIN MAHIR</span>
                                    <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div><div class="modal fade" id="img2" tabindex="-1" role="dialog" aria-hidden="true">
                              <div class="modal-dialog" role="document" width="100%" height="80%">
                                <div class="modal-content">
                                        <img src="../../admin/student_image/10-25-002.png" width="100%" height="80%">
                                  <div class="modal-footer" style="text-align: left;">
                                    <span style="color: blue;">Name: MINHAZ</span>
                                    <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div><div class="modal fade" id="img4" tabindex="-1" role="dialog" aria-hidden="true">
                              <div class="modal-dialog" role="document" width="100%" height="80%">
                                <div class="modal-content">
                                        <img src="../../admin/student_image/10-25-004.png" width="100%" height="80%">
                                  <div class="modal-footer" style="text-align: left;">
                                    <span style="color: blue;">Name: MD. IBRAHIM KHALIL</span>
                                    <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div><div class="modal fade" id="img6" tabindex="-1" role="dialog" aria-hidden="true">
                              <div class="modal-dialog" role="document" width="100%" height="80%">
                                <div class="modal-content">
                                        <img src="../../admin/student_image/10-25-006.png" width="100%" height="80%">
                                  <div class="modal-footer" style="text-align: left;">
                                    <span style="color: blue;">Name: ARAFAT HOSSEN</span>
                                    <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div><div class="modal fade" id="img7" tabindex="-1" role="dialog" aria-hidden="true">
                              <div class="modal-dialog" role="document" width="100%" height="80%">
                                <div class="modal-content">
                                        <img src="../../admin/student_image/10-25-007.png" width="100%" height="80%">
                                  <div class="modal-footer" style="text-align: left;">
                                    <span style="color: blue;">Name: MD. ABDULLAH IBNE NIHAD</span>
                                    <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div><div class="modal fade" id="img8" tabindex="-1" role="dialog" aria-hidden="true">
                              <div class="modal-dialog" role="document" width="100%" height="80%">
                                <div class="modal-content">
                                        <img src="../../admin/student_image/10-25-008.png" width="100%" height="80%">
                                  <div class="modal-footer" style="text-align: left;">
                                    <span style="color: blue;">Name: SAIDUL ISLAM MUJAHID</span>
                                    <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div><div class="modal fade" id="img10" tabindex="-1" role="dialog" aria-hidden="true">
                              <div class="modal-dialog" role="document" width="100%" height="80%">
                                <div class="modal-content">
                                        <img src="../../admin/student_image/10-25-010.png" width="100%" height="80%">
                                  <div class="modal-footer" style="text-align: left;">
                                    <span style="color: blue;">Name: MD. SAIFUL ISLAM</span>
                                    <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div><div class="modal fade" id="img9" tabindex="-1" role="dialog" aria-hidden="true">
                              <div class="modal-dialog" role="document" width="100%" height="80%">
                                <div class="modal-content">
                                        <img src="../../admin/student_image/10-25-009.png" width="100%" height="80%">
                                  <div class="modal-footer" style="text-align: left;">
                                    <span style="color: blue;">Name: MD JIHAD HOSSAIN</span>
                                    <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div><div class="modal fade" id="img11" tabindex="-1" role="dialog" aria-hidden="true">
                              <div class="modal-dialog" role="document" width="100%" height="80%">
                                <div class="modal-content">
                                        <img src="../../admin/student_image/10-25-011.png" width="100%" height="80%">
                                  <div class="modal-footer" style="text-align: left;">
                                    <span style="color: blue;">Name: MD. ARAFAT HOSSAIN</span>
                                    <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div><div class="modal fade" id="img12" tabindex="-1" role="dialog" aria-hidden="true">
                              <div class="modal-dialog" role="document" width="100%" height="80%">
                                <div class="modal-content">
                                        <img src="../../admin/student_image/10-25-012.png" width="100%" height="80%">
                                  <div class="modal-footer" style="text-align: left;">
                                    <span style="color: blue;">Name: AHADUL ISLAM AZAHAN</span>
                                    <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div><div class="modal fade" id="img13" tabindex="-1" role="dialog" aria-hidden="true">
                              <div class="modal-dialog" role="document" width="100%" height="80%">
                                <div class="modal-content">
                                        <img src="../../admin/student_image/10-25-013.png" width="100%" height="80%">
                                  <div class="modal-footer" style="text-align: left;">
                                    <span style="color: blue;">Name: FATEMA</span>
                                    <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div><div class="modal fade" id="img18" tabindex="-1" role="dialog" aria-hidden="true">
                              <div class="modal-dialog" role="document" width="100%" height="80%">
                                <div class="modal-content">
                                        <img src="../../admin/student_image/10-25-018.png" width="100%" height="80%">
                                  <div class="modal-footer" style="text-align: left;">
                                    <span style="color: blue;">Name: MOHAMMAD SAKIR HOSSAIN</span>
                                    <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div><div class="modal fade" id="img16" tabindex="-1" role="dialog" aria-hidden="true">
                              <div class="modal-dialog" role="document" width="100%" height="80%">
                                <div class="modal-content">
                                        <img src="../../admin/student_image/10-25-016.png" width="100%" height="80%">
                                  <div class="modal-footer" style="text-align: left;">
                                    <span style="color: blue;">Name: MUHAMMAD WUHAIB RAHMAN</span>
                                    <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div><div class="modal fade" id="img14" tabindex="-1" role="dialog" aria-hidden="true">
                              <div class="modal-dialog" role="document" width="100%" height="80%">
                                <div class="modal-content">
                                        <img src="../../admin/student_image/10-25-014.png" width="100%" height="80%">
                                  <div class="modal-footer" style="text-align: left;">
                                    <span style="color: blue;">Name: MD HEMAYET HOSSAIN CHOWDHURY</span>
                                    <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div><div class="modal fade" id="img15" tabindex="-1" role="dialog" aria-hidden="true">
                              <div class="modal-dialog" role="document" width="100%" height="80%">
                                <div class="modal-content">
                                        <img src="../../admin/student_image/10-25-015.png" width="100%" height="80%">
                                  <div class="modal-footer" style="text-align: left;">
                                    <span style="color: blue;">Name: YASIN ARAFAT</span>
                                    <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div><div class="modal fade" id="img17" tabindex="-1" role="dialog" aria-hidden="true">
                              <div class="modal-dialog" role="document" width="100%" height="80%">
                                <div class="modal-content">
                                        <img src="../../admin/student_image/10-25-017.png" width="100%" height="80%">
                                  <div class="modal-footer" style="text-align: left;">
                                    <span style="color: blue;">Name: ABDULLA AL MAHMUD</span>
                                    <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div><div class="modal fade" id="img148" tabindex="-1" role="dialog" aria-hidden="true">
                              <div class="modal-dialog" role="document" width="100%" height="80%">
                                <div class="modal-content">
                                        <img src="../../admin/student_image/10-25-145.png" width="100%" height="80%">
                                  <div class="modal-footer" style="text-align: left;">
                                    <span style="color: blue;">Name: AL JARIF</span>
                                    <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div><div class="modal fade" id="img149" tabindex="-1" role="dialog" aria-hidden="true">
                              <div class="modal-dialog" role="document" width="100%" height="80%">
                                <div class="modal-content">
                                        <img src="../../admin/student_image/10-25-146.png" width="100%" height="80%">
                                  <div class="modal-footer" style="text-align: left;">
                                    <span style="color: blue;">Name: KASIDUL ISLAM MINHAZ</span>
                                    <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div><div class="modal fade" id="img150" tabindex="-1" role="dialog" aria-hidden="true">
                              <div class="modal-dialog" role="document" width="100%" height="80%">
                                <div class="modal-content">
                                        <img src="../../admin/student_image/10-25-147.png" width="100%" height="80%">
                                  <div class="modal-footer" style="text-align: left;">
                                    <span style="color: blue;">Name: FAHIM HOSSAIN JIHAD</span>
                                    <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div><table class="table table-bordered table-striped text-center">
                            
                                                        <tbody><tr>
                			
                            </tr>
                        </tbody><thead>
            				<tr class="table-head-3">
            					<th>#</th>
            					<th>Roll</th>
            					<th id="desktop2">Photo</th>
            					<th id="desktop2">ID</th>
            					<th>Name</th>
            					<th id="desktop2">Father's Name</th>
            					<th id="desktop2">Mobile Number</th>
            					<th>Present<br><input id="selectAll" type="checkbox" style="width:20px;height:20px;"> <label for="selectAll"> All</label></th>
            				</tr>
                        </thead>
                        <tbody id="myTable">
                            <form method="POST" onsubmit="$('#loading3').show(); $('#loading4').show(); $('#main_text2').hide();"></form>
                                <input type="hidden" name="year" value="2025">
                                <input type="hidden" name="shift" value="N/A">
                                <input type="hidden" name="class" value="PLAY">
                                <input type="hidden" name="section" value="N/A">
                                <input type="hidden" name="group" value="All">
                                <input type="hidden" name="date_d" value="03">
                                <input type="hidden" name="date_m" value="05">
                                <input type="hidden" name="date_y" value="2025">
            				                            <tr class="text-center" id="heading1">
                                <input type="hidden" name="studentid[]" value="10-25-001">
                                <input type="hidden" name="studentname[]" value="MD MUNTASIR ARYAN">
                                <input type="hidden" name="roll[]" value="001">
            					<td class="table-head-3">1</td>
                				<td>001</td>
                				<td id="desktop2"><button data-toggle="modal" data-target="#img1" href="#"><img src="../../admin/student_image/10-25-001.png" width="50" height="50"></button></td>
                				<td id="desktop2"><a style="text-decoration:none;" href="student_profile.php?id=10-25-001">10-25-001</a></td>
                				<td class="ellipsis">MD MUNTASIR ARYAN<br></td>
                				<td id="desktop2">MD RASHED HOSSAIN</td>
                				<td id="desktop2">01884051538</td>
                				<td><input type="checkbox" style="width:20px;height:20px;" name="present1" value="P"></td>
            				</tr>
                        <!------------------------------------------------------------------------------------------------------------------------------->
                        <!-------------------------------------------------- Image Modal Body ----------------------------------------------------------->
                        <!------------------------------------------------------------------------------------------------------------------------------->
                            
                        <!------------------------------------------------------------------------------------------------------------------------------->
                        <!---------------------------------------------- End Image Modal Body ----------------------------------------------------------->
                        <!------------------------------------------------------------------------------------------------------------------------------->
    				                                    <tr class="text-center" id="heading5">
                                <input type="hidden" name="studentid[]" value="10-25-005">
                                <input type="hidden" name="studentname[]" value="MOBASHSHIR HOSSAIN MAHIR">
                                <input type="hidden" name="roll[]" value="002">
            					<td class="table-head-3">2</td>
                				<td>002</td>
                				<td id="desktop2"><button data-toggle="modal" data-target="#img5" href="#"><img src="../../admin/student_image/10-25-005.png" width="50" height="50"></button></td>
                				<td id="desktop2"><a style="text-decoration:none;" href="student_profile.php?id=10-25-005">10-25-005</a></td>
                				<td class="ellipsis">MOBASHSHIR HOSSAIN MAHIR<br></td>
                				<td id="desktop2">MD SAJJAD HOSSIAN</td>
                				<td id="desktop2">01811615242</td>
                				<td><input type="checkbox" style="width:20px;height:20px;" name="present2" value="P"></td>
            				</tr>
                        <!------------------------------------------------------------------------------------------------------------------------------->
                        <!-------------------------------------------------- Image Modal Body ----------------------------------------------------------->
                        <!------------------------------------------------------------------------------------------------------------------------------->
                            
                        <!------------------------------------------------------------------------------------------------------------------------------->
                        <!---------------------------------------------- End Image Modal Body ----------------------------------------------------------->
                        <!------------------------------------------------------------------------------------------------------------------------------->
    				                                    <tr class="text-center" id="heading2">
                                <input type="hidden" name="studentid[]" value="10-25-002">
                                <input type="hidden" name="studentname[]" value="MINHAZ">
                                <input type="hidden" name="roll[]" value="003">
            					<td class="table-head-3">3</td>
                				<td>003</td>
                				<td id="desktop2"><button data-toggle="modal" data-target="#img2" href="#"><img src="../../admin/student_image/10-25-002.png" width="50" height="50"></button></td>
                				<td id="desktop2"><a style="text-decoration:none;" href="student_profile.php?id=10-25-002">10-25-002</a></td>
                				<td class="ellipsis">MINHAZ<br></td>
                				<td id="desktop2">MD MAHTAB ALAM</td>
                				<td id="desktop2">01812104847</td>
                				<td><input type="checkbox" style="width:20px;height:20px;" name="present3" value="P"></td>
            				</tr>
                        <!------------------------------------------------------------------------------------------------------------------------------->
                        <!-------------------------------------------------- Image Modal Body ----------------------------------------------------------->
                        <!------------------------------------------------------------------------------------------------------------------------------->
                            
                        <!------------------------------------------------------------------------------------------------------------------------------->
                        <!---------------------------------------------- End Image Modal Body ----------------------------------------------------------->
                        <!------------------------------------------------------------------------------------------------------------------------------->
    				                                    <tr class="text-center" id="heading4">
                                <input type="hidden" name="studentid[]" value="10-25-004">
                                <input type="hidden" name="studentname[]" value="MD. IBRAHIM KHALIL">
                                <input type="hidden" name="roll[]" value="004">
            					<td class="table-head-3">4</td>
                				<td>004</td>
                				<td id="desktop2"><button data-toggle="modal" data-target="#img4" href="#"><img src="../../admin/student_image/10-25-004.png" width="50" height="50"></button></td>
                				<td id="desktop2"><a style="text-decoration:none;" href="student_profile.php?id=10-25-004">10-25-004</a></td>
                				<td class="ellipsis">MD. IBRAHIM KHALIL<br></td>
                				<td id="desktop2">MD. AL AMIN</td>
                				<td id="desktop2">01995353603</td>
                				<td><input type="checkbox" style="width:20px;height:20px;" name="present4" value="P"></td>
            				</tr>
                        <!------------------------------------------------------------------------------------------------------------------------------->
                        <!-------------------------------------------------- Image Modal Body ----------------------------------------------------------->
                        <!------------------------------------------------------------------------------------------------------------------------------->
                            
                        <!------------------------------------------------------------------------------------------------------------------------------->
                        <!---------------------------------------------- End Image Modal Body ----------------------------------------------------------->
                        <!------------------------------------------------------------------------------------------------------------------------------->
    				                                    <tr class="text-center" id="heading6">
                                <input type="hidden" name="studentid[]" value="10-25-006">
                                <input type="hidden" name="studentname[]" value="ARAFAT HOSSEN">
                                <input type="hidden" name="roll[]" value="005">
            					<td class="table-head-3">5</td>
                				<td>005</td>
                				<td id="desktop2"><button data-toggle="modal" data-target="#img6" href="#"><img src="../../admin/student_image/10-25-006.png" width="50" height="50"></button></td>
                				<td id="desktop2"><a style="text-decoration:none;" href="student_profile.php?id=10-25-006">10-25-006</a></td>
                				<td class="ellipsis">ARAFAT HOSSEN<br></td>
                				<td id="desktop2">MD SHAHIDUL ISLAM</td>
                				<td id="desktop2">01831957564</td>
                				<td><input type="checkbox" style="width:20px;height:20px;" name="present5" value="P"></td>
            				</tr>
                        <!------------------------------------------------------------------------------------------------------------------------------->
                        <!-------------------------------------------------- Image Modal Body ----------------------------------------------------------->
                        <!------------------------------------------------------------------------------------------------------------------------------->
                            
                        <!------------------------------------------------------------------------------------------------------------------------------->
                        <!---------------------------------------------- End Image Modal Body ----------------------------------------------------------->
                        <!------------------------------------------------------------------------------------------------------------------------------->
    				                                    <tr class="text-center" id="heading7">
                                <input type="hidden" name="studentid[]" value="10-25-007">
                                <input type="hidden" name="studentname[]" value="MD. ABDULLAH IBNE NIHAD">
                                <input type="hidden" name="roll[]" value="006">
            					<td class="table-head-3">6</td>
                				<td>006</td>
                				<td id="desktop2"><button data-toggle="modal" data-target="#img7" href="#"><img src="../../admin/student_image/10-25-007.png" width="50" height="50"></button></td>
                				<td id="desktop2"><a style="text-decoration:none;" href="student_profile.php?id=10-25-007">10-25-007</a></td>
                				<td class="ellipsis">MD. ABDULLAH IBNE NIHAD<br></td>
                				<td id="desktop2">Md. Humayun Kabir Sumon</td>
                				<td id="desktop2">01752333530</td>
                				<td><input type="checkbox" style="width:20px;height:20px;" name="present6" value="P"></td>
            				</tr>
                        <!------------------------------------------------------------------------------------------------------------------------------->
                        <!-------------------------------------------------- Image Modal Body ----------------------------------------------------------->
                        <!------------------------------------------------------------------------------------------------------------------------------->
                            
                        <!------------------------------------------------------------------------------------------------------------------------------->
                        <!---------------------------------------------- End Image Modal Body ----------------------------------------------------------->
                        <!------------------------------------------------------------------------------------------------------------------------------->
    				                                    <tr class="text-center" id="heading8">
                                <input type="hidden" name="studentid[]" value="10-25-008">
                                <input type="hidden" name="studentname[]" value="SAIDUL ISLAM MUJAHID">
                                <input type="hidden" name="roll[]" value="007">
            					<td class="table-head-3">7</td>
                				<td>007</td>
                				<td id="desktop2"><button data-toggle="modal" data-target="#img8" href="#"><img src="../../admin/student_image/10-25-008.png" width="50" height="50"></button></td>
                				<td id="desktop2"><a style="text-decoration:none;" href="student_profile.php?id=10-25-008">10-25-008</a></td>
                				<td class="ellipsis">SAIDUL ISLAM MUJAHID<br></td>
                				<td id="desktop2">SAMSUL ALAM SUZAN</td>
                				<td id="desktop2">01641702031</td>
                				<td><input type="checkbox" style="width:20px;height:20px;" name="present7" value="P"></td>
            				</tr>
                        <!------------------------------------------------------------------------------------------------------------------------------->
                        <!-------------------------------------------------- Image Modal Body ----------------------------------------------------------->
                        <!------------------------------------------------------------------------------------------------------------------------------->
                            
                        <!------------------------------------------------------------------------------------------------------------------------------->
                        <!---------------------------------------------- End Image Modal Body ----------------------------------------------------------->
                        <!------------------------------------------------------------------------------------------------------------------------------->
    				                                    <tr class="text-center" id="heading10">
                                <input type="hidden" name="studentid[]" value="10-25-010">
                                <input type="hidden" name="studentname[]" value="MD. SAIFUL ISLAM">
                                <input type="hidden" name="roll[]" value="008">
            					<td class="table-head-3">8</td>
                				<td>008</td>
                				<td id="desktop2"><button data-toggle="modal" data-target="#img10" href="#"><img src="../../admin/student_image/10-25-010.png" width="50" height="50"></button></td>
                				<td id="desktop2"><a style="text-decoration:none;" href="student_profile.php?id=10-25-010">10-25-010</a></td>
                				<td class="ellipsis">MD. SAIFUL ISLAM<br></td>
                				<td id="desktop2">MD. ABU KALAM</td>
                				<td id="desktop2">01851984464</td>
                				<td><input type="checkbox" style="width:20px;height:20px;" name="present8" value="P"></td>
            				</tr>
                        <!------------------------------------------------------------------------------------------------------------------------------->
                        <!-------------------------------------------------- Image Modal Body ----------------------------------------------------------->
                        <!------------------------------------------------------------------------------------------------------------------------------->
                            
                        <!------------------------------------------------------------------------------------------------------------------------------->
                        <!---------------------------------------------- End Image Modal Body ----------------------------------------------------------->
                        <!------------------------------------------------------------------------------------------------------------------------------->
    				                                    <tr class="text-center" id="heading9">
                                <input type="hidden" name="studentid[]" value="10-25-009">
                                <input type="hidden" name="studentname[]" value="MD JIHAD HOSSAIN">
                                <input type="hidden" name="roll[]" value="009">
            					<td class="table-head-3">9</td>
                				<td>009</td>
                				<td id="desktop2"><button data-toggle="modal" data-target="#img9" href="#"><img src="../../admin/student_image/10-25-009.png" width="50" height="50"></button></td>
                				<td id="desktop2"><a style="text-decoration:none;" href="student_profile.php?id=10-25-009">10-25-009</a></td>
                				<td class="ellipsis">MD JIHAD HOSSAIN<br></td>
                				<td id="desktop2">MD HELAL HOSSAIN</td>
                				<td id="desktop2">01849951203</td>
                				<td><input type="checkbox" style="width:20px;height:20px;" name="present9" value="P"></td>
            				</tr>
                        <!------------------------------------------------------------------------------------------------------------------------------->
                        <!-------------------------------------------------- Image Modal Body ----------------------------------------------------------->
                        <!------------------------------------------------------------------------------------------------------------------------------->
                            
                        <!------------------------------------------------------------------------------------------------------------------------------->
                        <!---------------------------------------------- End Image Modal Body ----------------------------------------------------------->
                        <!------------------------------------------------------------------------------------------------------------------------------->
    				                                    <tr class="text-center" id="heading11">
                                <input type="hidden" name="studentid[]" value="10-25-011">
                                <input type="hidden" name="studentname[]" value="MD. ARAFAT HOSSAIN">
                                <input type="hidden" name="roll[]" value="010">
            					<td class="table-head-3">10</td>
                				<td>010</td>
                				<td id="desktop2"><button data-toggle="modal" data-target="#img11" href="#"><img src="../../admin/student_image/10-25-011.png" width="50" height="50"></button></td>
                				<td id="desktop2"><a style="text-decoration:none;" href="student_profile.php?id=10-25-011">10-25-011</a></td>
                				<td class="ellipsis">MD. ARAFAT HOSSAIN<br></td>
                				<td id="desktop2">JAMAL UDDIN</td>
                				<td id="desktop2">01634297141</td>
                				<td><input type="checkbox" style="width:20px;height:20px;" name="present10" value="P"></td>
            				</tr>
                        <!------------------------------------------------------------------------------------------------------------------------------->
                        <!-------------------------------------------------- Image Modal Body ----------------------------------------------------------->
                        <!------------------------------------------------------------------------------------------------------------------------------->
                            
                        <!------------------------------------------------------------------------------------------------------------------------------->
                        <!---------------------------------------------- End Image Modal Body ----------------------------------------------------------->
                        <!------------------------------------------------------------------------------------------------------------------------------->
    				                                    <tr class="text-center" id="heading12">
                                <input type="hidden" name="studentid[]" value="10-25-012">
                                <input type="hidden" name="studentname[]" value="AHADUL ISLAM AZAHAN">
                                <input type="hidden" name="roll[]" value="011">
            					<td class="table-head-3">11</td>
                				<td>011</td>
                				<td id="desktop2"><button data-toggle="modal" data-target="#img12" href="#"><img src="../../admin/student_image/10-25-012.png" width="50" height="50"></button></td>
                				<td id="desktop2"><a style="text-decoration:none;" href="student_profile.php?id=10-25-012">10-25-012</a></td>
                				<td class="ellipsis">AHADUL ISLAM AZAHAN<br></td>
                				<td id="desktop2">MD. SHAHAB UDDIN</td>
                				<td id="desktop2">01331351865</td>
                				<td><input type="checkbox" style="width:20px;height:20px;" name="present11" value="P"></td>
            				</tr>
                        <!------------------------------------------------------------------------------------------------------------------------------->
                        <!-------------------------------------------------- Image Modal Body ----------------------------------------------------------->
                        <!------------------------------------------------------------------------------------------------------------------------------->
                            
                        <!------------------------------------------------------------------------------------------------------------------------------->
                        <!---------------------------------------------- End Image Modal Body ----------------------------------------------------------->
                        <!------------------------------------------------------------------------------------------------------------------------------->
    				                                    <tr class="text-center" id="heading13">
                                <input type="hidden" name="studentid[]" value="10-25-013">
                                <input type="hidden" name="studentname[]" value="FATEMA">
                                <input type="hidden" name="roll[]" value="012">
            					<td class="table-head-3">12</td>
                				<td>012</td>
                				<td id="desktop2"><button data-toggle="modal" data-target="#img13" href="#"><img src="../../admin/student_image/10-25-013.png" width="50" height="50"></button></td>
                				<td id="desktop2"><a style="text-decoration:none;" href="student_profile.php?id=10-25-013">10-25-013</a></td>
                				<td class="ellipsis">FATEMA<br></td>
                				<td id="desktop2">RUSTOM ALI</td>
                				<td id="desktop2">01897023927</td>
                				<td><input type="checkbox" style="width:20px;height:20px;" name="present12" value="P"></td>
            				</tr>
                        <!------------------------------------------------------------------------------------------------------------------------------->
                        <!-------------------------------------------------- Image Modal Body ----------------------------------------------------------->
                        <!------------------------------------------------------------------------------------------------------------------------------->
                            
                        <!------------------------------------------------------------------------------------------------------------------------------->
                        <!---------------------------------------------- End Image Modal Body ----------------------------------------------------------->
                        <!------------------------------------------------------------------------------------------------------------------------------->
    				                                    <tr class="text-center" id="heading18">
                                <input type="hidden" name="studentid[]" value="10-25-018">
                                <input type="hidden" name="studentname[]" value="MOHAMMAD SAKIR HOSSAIN">
                                <input type="hidden" name="roll[]" value="013">
            					<td class="table-head-3">13</td>
                				<td>013</td>
                				<td id="desktop2"><button data-toggle="modal" data-target="#img18" href="#"><img src="../../admin/student_image/10-25-018.png" width="50" height="50"></button></td>
                				<td id="desktop2"><a style="text-decoration:none;" href="student_profile.php?id=10-25-018">10-25-018</a></td>
                				<td class="ellipsis">MOHAMMAD SAKIR HOSSAIN<br></td>
                				<td id="desktop2">ANOWAR HOSSAIN </td>
                				<td id="desktop2">01823755989</td>
                				<td><input type="checkbox" style="width:20px;height:20px;" name="present13" value="P"></td>
            				</tr>
                        <!------------------------------------------------------------------------------------------------------------------------------->
                        <!-------------------------------------------------- Image Modal Body ----------------------------------------------------------->
                        <!------------------------------------------------------------------------------------------------------------------------------->
                            
                        <!------------------------------------------------------------------------------------------------------------------------------->
                        <!---------------------------------------------- End Image Modal Body ----------------------------------------------------------->
                        <!------------------------------------------------------------------------------------------------------------------------------->
    				                                    <tr class="text-center" id="heading16">
                                <input type="hidden" name="studentid[]" value="10-25-016">
                                <input type="hidden" name="studentname[]" value="MUHAMMAD WUHAIB RAHMAN">
                                <input type="hidden" name="roll[]" value="014">
            					<td class="table-head-3">14</td>
                				<td>014</td>
                				<td id="desktop2"><button data-toggle="modal" data-target="#img16" href="#"><img src="../../admin/student_image/10-25-016.png" width="50" height="50"></button></td>
                				<td id="desktop2"><a style="text-decoration:none;" href="student_profile.php?id=10-25-016">10-25-016</a></td>
                				<td class="ellipsis">MUHAMMAD WUHAIB RAHMAN<br></td>
                				<td id="desktop2">JILLUR RAHMANN</td>
                				<td id="desktop2">01726967087</td>
                				<td><input type="checkbox" style="width:20px;height:20px;" name="present14" value="P"></td>
            				</tr>
                        <!------------------------------------------------------------------------------------------------------------------------------->
                        <!-------------------------------------------------- Image Modal Body ----------------------------------------------------------->
                        <!------------------------------------------------------------------------------------------------------------------------------->
                            
                        <!------------------------------------------------------------------------------------------------------------------------------->
                        <!---------------------------------------------- End Image Modal Body ----------------------------------------------------------->
                        <!------------------------------------------------------------------------------------------------------------------------------->
    				                                    <tr class="text-center" id="heading14">
                                <input type="hidden" name="studentid[]" value="10-25-014">
                                <input type="hidden" name="studentname[]" value="MD HEMAYET HOSSAIN CHOWDHURY">
                                <input type="hidden" name="roll[]" value="015">
            					<td class="table-head-3">15</td>
                				<td>015</td>
                				<td id="desktop2"><button data-toggle="modal" data-target="#img14" href="#"><img src="../../admin/student_image/10-25-014.png" width="50" height="50"></button></td>
                				<td id="desktop2"><a style="text-decoration:none;" href="student_profile.php?id=10-25-014">10-25-014</a></td>
                				<td class="ellipsis">MD HEMAYET HOSSAIN CHOWDHURY<br></td>
                				<td id="desktop2">Delowar Hossain Chowdhury</td>
                				<td id="desktop2">01835427573</td>
                				<td><input type="checkbox" style="width:20px;height:20px;" name="present15" value="P"></td>
            				</tr>
                        <!------------------------------------------------------------------------------------------------------------------------------->
                        <!-------------------------------------------------- Image Modal Body ----------------------------------------------------------->
                        <!------------------------------------------------------------------------------------------------------------------------------->
                            
                        <!------------------------------------------------------------------------------------------------------------------------------->
                        <!---------------------------------------------- End Image Modal Body ----------------------------------------------------------->
                        <!------------------------------------------------------------------------------------------------------------------------------->
    				                                    <tr class="text-center" id="heading15">
                                <input type="hidden" name="studentid[]" value="10-25-015">
                                <input type="hidden" name="studentname[]" value="YASIN ARAFAT">
                                <input type="hidden" name="roll[]" value="016">
            					<td class="table-head-3">16</td>
                				<td>016</td>
                				<td id="desktop2"><button data-toggle="modal" data-target="#img15" href="#"><img src="../../admin/student_image/10-25-015.png" width="50" height="50"></button></td>
                				<td id="desktop2"><a style="text-decoration:none;" href="student_profile.php?id=10-25-015">10-25-015</a></td>
                				<td class="ellipsis">YASIN ARAFAT<br></td>
                				<td id="desktop2">ABUL KALAM</td>
                				<td id="desktop2">01827591641</td>
                				<td><input type="checkbox" style="width:20px;height:20px;" name="present16" value="P"></td>
            				</tr>
                        <!------------------------------------------------------------------------------------------------------------------------------->
                        <!-------------------------------------------------- Image Modal Body ----------------------------------------------------------->
                        <!------------------------------------------------------------------------------------------------------------------------------->
                            
                        <!------------------------------------------------------------------------------------------------------------------------------->
                        <!---------------------------------------------- End Image Modal Body ----------------------------------------------------------->
                        <!------------------------------------------------------------------------------------------------------------------------------->
    				                                    <tr class="text-center" id="heading17">
                                <input type="hidden" name="studentid[]" value="10-25-017">
                                <input type="hidden" name="studentname[]" value="ABDULLA AL MAHMUD">
                                <input type="hidden" name="roll[]" value="017">
            					<td class="table-head-3">17</td>
                				<td>017</td>
                				<td id="desktop2"><button data-toggle="modal" data-target="#img17" href="#"><img src="../../admin/student_image/10-25-017.png" width="50" height="50"></button></td>
                				<td id="desktop2"><a style="text-decoration:none;" href="student_profile.php?id=10-25-017">10-25-017</a></td>
                				<td class="ellipsis">ABDULLA AL MAHMUD<br></td>
                				<td id="desktop2">MD. ALI AKKAS</td>
                				<td id="desktop2">01789006919</td>
                				<td><input type="checkbox" style="width:20px;height:20px;" name="present17" value="P"></td>
            				</tr>
                        <!------------------------------------------------------------------------------------------------------------------------------->
                        <!-------------------------------------------------- Image Modal Body ----------------------------------------------------------->
                        <!------------------------------------------------------------------------------------------------------------------------------->
                            
                        <!------------------------------------------------------------------------------------------------------------------------------->
                        <!---------------------------------------------- End Image Modal Body ----------------------------------------------------------->
                        <!------------------------------------------------------------------------------------------------------------------------------->
    				                                    <tr class="text-center" id="heading148">
                                <input type="hidden" name="studentid[]" value="10-25-145">
                                <input type="hidden" name="studentname[]" value="AL JARIF">
                                <input type="hidden" name="roll[]" value="018">
            					<td class="table-head-3">18</td>
                				<td>018</td>
                				<td id="desktop2"><button data-toggle="modal" data-target="#img148" href="#"><img src="../../admin/student_image/10-25-145.png" width="50" height="50"></button></td>
                				<td id="desktop2"><a style="text-decoration:none;" href="student_profile.php?id=10-25-145">10-25-145</a></td>
                				<td class="ellipsis">AL JARIF<br></td>
                				<td id="desktop2">ZAHIR UDDIN</td>
                				<td id="desktop2">01897004347</td>
                				<td><input type="checkbox" style="width:20px;height:20px;" name="present18" value="P"></td>
            				</tr>
                        <!------------------------------------------------------------------------------------------------------------------------------->
                        <!-------------------------------------------------- Image Modal Body ----------------------------------------------------------->
                        <!------------------------------------------------------------------------------------------------------------------------------->
                            
                        <!------------------------------------------------------------------------------------------------------------------------------->
                        <!---------------------------------------------- End Image Modal Body ----------------------------------------------------------->
                        <!------------------------------------------------------------------------------------------------------------------------------->
    				                                    <tr class="text-center" id="heading149">
                                <input type="hidden" name="studentid[]" value="10-25-146">
                                <input type="hidden" name="studentname[]" value="KASIDUL ISLAM MINHAZ">
                                <input type="hidden" name="roll[]" value="019">
            					<td class="table-head-3">19</td>
                				<td>019</td>
                				<td id="desktop2"><button data-toggle="modal" data-target="#img149" href="#"><img src="../../admin/student_image/10-25-146.png" width="50" height="50"></button></td>
                				<td id="desktop2"><a style="text-decoration:none;" href="student_profile.php?id=10-25-146">10-25-146</a></td>
                				<td class="ellipsis">KASIDUL ISLAM MINHAZ<br></td>
                				<td id="desktop2">MD. ABDUL KARIM AKONDO</td>
                				<td id="desktop2">01824152564</td>
                				<td><input type="checkbox" style="width:20px;height:20px;" name="present19" value="P"></td>
            				</tr>
                        <!------------------------------------------------------------------------------------------------------------------------------->
                        <!-------------------------------------------------- Image Modal Body ----------------------------------------------------------->
                        <!------------------------------------------------------------------------------------------------------------------------------->
                            
                        <!------------------------------------------------------------------------------------------------------------------------------->
                        <!---------------------------------------------- End Image Modal Body ----------------------------------------------------------->
                        <!------------------------------------------------------------------------------------------------------------------------------->
    				                                    <tr class="text-center" id="heading150">
                                <input type="hidden" name="studentid[]" value="10-25-147">
                                <input type="hidden" name="studentname[]" value="FAHIM HOSSAIN JIHAD">
                                <input type="hidden" name="roll[]" value="020">
            					<td class="table-head-3">20</td>
                				<td>020</td>
                				<td id="desktop2"><button data-toggle="modal" data-target="#img150" href="#"><img src="../../admin/student_image/10-25-147.png" width="50" height="50"></button></td>
                				<td id="desktop2"><a style="text-decoration:none;" href="student_profile.php?id=10-25-147">10-25-147</a></td>
                				<td class="ellipsis">FAHIM HOSSAIN JIHAD<br></td>
                				<td id="desktop2">MD FORIDUL ALAM</td>
                				<td id="desktop2">01880259541</td>
                				<td><input type="checkbox" style="width:20px;height:20px;" name="present20" value="P"></td>
            				</tr>
                        <!------------------------------------------------------------------------------------------------------------------------------->
                        <!-------------------------------------------------- Image Modal Body ----------------------------------------------------------->
                        <!------------------------------------------------------------------------------------------------------------------------------->
                            
                        <!------------------------------------------------------------------------------------------------------------------------------->
                        <!---------------------------------------------- End Image Modal Body ----------------------------------------------------------->
                        <!------------------------------------------------------------------------------------------------------------------------------->
    				                                    </tbody>
                            				        </table>
                                                    <div class="card-footer text-right text-muted">
                                <button type="submit" name="save" class="btn submit">
                                    <div style="display: flex;">
                                        <div class="loader" id="loading3" style="display:none;"></div>
                                        <div id="loading4" style="display:none;"> &nbsp;&nbsp;Saving...</div>
                                    </div>
                                    <span id="main_text2" style="display:block;"><i class="fas fa-save"></i> Save Attendance</span>
                                </button>
                            </div>
                        
                                            </div>
                </div>
      </div>
    </div>
  </div>

</main>

<?php include "theme/app-footer-nav.php"; ?>
<?php include "theme/app-footer.php"; ?>
