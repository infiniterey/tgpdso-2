<!DOCTYPE html>
<html lang="en">
<?php include 'base/header.php'; ?>
<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<head>
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
	<style>
	table {
		    width: 100px;
		    table-layout: fixed;
		}
	td {
		    overflow: hidden;
		    max-width: 25%;
		    width: 25%;
		    word-wrap: break-word;
		}
		</style>
</head>
<body class="nav-md footer_fixed">
	<form method="post">
		<div class="container body">
			<div class="main_container">
				<div class="col-md-3 left_col menu_fixed">
					<div class="left_col scroll-view scrollbar">
						<?php include 'base/sidemenu.php';?>
					</div>
				</div>

	      <!-- top navigation -->
          <div class="top_nav">
            <div class="nav_menu">
              <nav>
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
              </nav>
									<nav class="col-md-6"></nav>
							<nav class="col-md-5" style="margin-top: 10px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</nav>
            </div>
          </div>
          <!-- /top navigation -->

          <!-- page content -->
					<script>

					  jQuery(function($) {
					  $('input.number').on('keyup', function() {
					    if(event.which >= 37 && event.which <= 40) return;
					    $(this).val(function(index, value) {
					      return value
					      .replace(/\D/g, "")
					      .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
					        });
					      });
					    });


					$(function () {
    			$('#modal-container').on('hidden.bs.modal', function () {
        	$(this).removeData('bs.modal');
        	$('#modal-container .modal-content').empty();
    				});
					});

						function cancelInfoAgent()
						{
							document.getElementById("planCode").value = "";
							document.getElementById("planCodePass").value = "";
							document.getElementById("planDesc").value = "";
							document.getElementById("planRate").value = "";
							document.getElementById("plan").value = "";
						}

					</script>
					<div class="modal fade bs-example-modal-sm" tabindex="-1" aria-hidden="true" id="addplanmodal" data-keyboard="false" data-backdrop="static">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" onclick="cancelInfoAgent();" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
									<h4 class="modal-title" id="myModalLabel2">Add new plan</h4>
								</div>
								<form method='post' name='myform' onsubmit="CheckForm()">
									<div class="modal-body">

										<div class="row">
											<div class="col-md-4">

										<?php
											if(isset($_POST['btn-addPlan'])){
												tgpdso::addPlan();
											}
										?>
										Plan Code: <input id="planCode" type="text" class="form-control" name="planCode" style="width: 200px;"><br>
										Plan Description: <input id="planDesc" type="text" class="form-control" name="planDesc" style="width: 200px;">
										Plan Rate: <input id="planRate" type="text" class="form-control" name="planRate" style="width: 200px;">

										<br/><br/>

										<input type="text" name="planC" id="planC" hidden>
										<button type="submit" class="btn btn-primary" id="btn-addPlan" name="btn-addPlan"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add</button>
										<button type="reset" class="btn btn-default" name="cancel" id="cancel" onclick="ClickCancel()">Cancel</button>
										&nbsp;

										</div>

										<div class="col-md-7">


											<table id="datatable-fixed-header1"  align="center" name="datatable-fixed-header1" class="table table-bordered table-hover no-footer" role="grid" aria-describedby="datatable-fixed-header_info" onclick="showButtons1()">
												<thead>
													<tr role="row">
														<th></th>
														<th class="sorting" tabindex="0" aria-controls="datatable-fixed-header1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Plan Code" style="width: 50px;text-align:center;">Plan Code</th>
														<th class="sorting" tabindex="0" aria-controls="datatable-fixed-header1" rowspan="1" colspan="1" aria-label="Plan Description" style="width: 100px;">Plan Description</th>
														<th class="sorting" tabindex="0" aria-controls="datatable-fixed-header1" rowspan="1" colspan="1" aria-label="Plan Rate" style="width: 35px;text-align:center;">Plan Rate</th>
														<th class="sorting" tabindex="0" aria-controls="datatable-fixed-header1" rowspan="1" colspan="1" aria-label="Action" style="width: 35px;text-align:center;">Action</th>
													</tr>
												</thead>



												<tbody>

														<?php
															$DB_con = Database::connect();
															$DB_con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
															$sql = "SELECT * FROM plans";

															$result = $DB_con->query($sql);
															if($result->rowCount()>0){
																while($row=$result->fetch(PDO::FETCH_ASSOC)){
																	?>
																	<tr>

																		<td><?php print($row['planID']); ?></td>
																		<td><?php print($row['planCode']); ?></td>
																		<td><?php print($row['planDesc']); ?></td>
																		<td><?php print($row['planRate']); ?></td>
																		<td><button style="width: 100%; height: 100%;" onclick="" type="button" id="retrieveAgent" name="retrieveAgent" data-dismiss="modal" class="btn btn-primary"><i class="glyphicon glyphicon-copy"></i></button></td>
																	</tr>
																	<?php
																}
															}
															else{}
														?>
													</tbody>
											</table>


											<script>


												var table = document.getElementById('datatable-fixed-header1');
												for(var counter = 1; counter < table.rows.length; counter++)
												{
													table.rows[counter].onclick = function()
												{;
											//		 document.getElementById("planCode").value = this.cells[0].innerHTML;
													 document.getElementById("planCodePass").value = this.cells[0].innerHTML;
											//		 document.getElementById("planDesc").value = this.cells[1].innerHTML;
													document.getElementById("rate").value = this.cells[3].innerHTML;
													 document.getElementById("plan").value = this.cells[1].innerHTML;


														};
													}

													</script>

										</div>
									</div>

									</div>
									<div class="modal-footer">
																				<div>
												<div class="row">
													<div class="col-md-3">
												</div>
												<div class="col-md-8">
											</div>
											<form method="post" action="<?php $_PHP_SELF ?>">

											<div class="col-md-6">
												<button type="submit" id="ModalEdit"  name="ModalEdit" class="btn btn-primary" formnovalidate><i class="fa fa-pencil">&nbsp;&nbsp;&nbsp;&nbsp;</i>Update Plan</button>
											</div>
										<div class="col-md-1">
												<button type="submit" id="ModalDelete" name="ModalDelete" class="btn btn-primary" onclick="return confirm('Are you sure do you want to delete this plan?')" formnovalidate><i class="fa fa-trash">&nbsp;&nbsp;&nbsp;&nbsp;</i>Delete Plan</button>
										</div>
												</div>
											</div>
										</form>

											</div>
									</div>
								</form>
							</div>
						</div>

<!-- The Modal -->		<!-- The Modal -->		<!-- The Modal -->		<!-- The Modal -->		<!-- The Modal -->		<!-- The Modal -->		<!-- The Modal -->		<!-- The Modal -->		<!-- The Modal -->
						<div class="modal fade" id="myModal" data-keyboard="false" data-backdrop="static">
						  <div class="modal-dialog">
						    <div class="modal-content">


						      <div class="modal-header">
						        <h2 class="modal-title">Search agent<button type="button" class="close" data-dismiss="modal" onclick="RemoveTextAgent();">x</button></h2>
						      </div>

									<form style="margin-bottom: 10px;">
						      <div class="modal-body">

										<table id="datatable-fixed-header02" align="center" class="table table-bordered table-hover no-footer" role="grid" aria-describedby="datatable-fixed-header_info" onclick="showButtons1()">
											<thead>
												<tr role="row">
													<th>Agent Code</th>
													<th style="width:" class="sorting" tabindex="0" aria-controls="datatable-fixed-header02" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Agent Name">Full Name</th>
													<th class="sorting" tabindex="0" aria-controls="datatable-fixed-header02" rowspan="1" colspan="1" aria-label="Appointment Date">Appointment Date</th>
													<th class="sorting" tabindex="0" aria-controls="datatable-fixed-header02" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Team">Team</th>
													<th class="sorting" tabindex="0" aria-controls="datatable-fixed-header02" rowspan="1" colspan="1" aria-label="Action">Action</th>
												</tr>
											</thead>
											<tbody>


													<?php
													if($_SESSION['usertype'] == 'Secretary' || $_SESSION['usertype'] == 'secretary')
													{
														$team = $_SESSION['team'];

														$DB_con = Database::connect();
														$DB_con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
														$sql = "SELECT * FROM agents, team WHERE agentTeam = teamID AND teamName = '$team'";

														$result = $DB_con->query($sql);
														if($result->rowCount()>0){

															while($row=$result->fetch(PDO::FETCH_ASSOC)){
																?>
																<tr>
																	<td><?php print($row['agentCode']); ?></td>
                                  <td><?php print($row['agentLastname']. ", " .$row['agentFirstname']. " " .$row['agentMiddlename']); ?></td>
																	<td><?php print($row['agentApptDate']); ?></td>
																	<td><?php print($row['teamName']); ?></td>
																	<td><button style="width: 100%; height: 100%;" onclick="AgentInfo();" type="button" id="retrieveAgentInfo" name="retrieveAgentInfo" data-dismiss="modal" class="btn btn-primary"><i class="glyphicon glyphicon-copy"></i></button></td>
																</tr>
																<?php
															}
														}
														else{}
														}
														else {
															$DB_con = Database::connect();
															$DB_con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
															$sql = "SELECT * FROM agents, team WHERE agentTeam = teamID";

															$result = $DB_con->query($sql);
															if($result->rowCount()>0){

																while($row=$result->fetch(PDO::FETCH_ASSOC)){
																	?>
																	<tr>
																		<td><?php print($row['agentCode']); ?></td>
																		<td><?php print($row['agentLastname']. ", " .$row['agentFirstname']. " " .$row['agentMiddlename']); ?></td>
																		<td><?php print($row['agentApptDate']); ?></td>
																		<td><?php print($row['teamName']); ?></td>
																		<td><button style="width: 100%; height: 100%;" onclick="AgentInfo();" type="button" id="retrieveAgentInfo" name="retrieveAgentInfo" data-dismiss="modal" class="btn btn-primary"><i class="glyphicon glyphicon-copy"></i></button></td>
																	</tr>
																	<?php
																}
															}
														}
													?>
												</tbody>
										</table>

										<script>

										function AgentInfo(){
											var table = document.getElementById('datatable-fixed-header02');
											for(var counter = 1; counter < table.rows.length; counter++)
											{
												table.rows[counter].onclick = function()
												{;
												 document.getElementById("agent").value = this.cells[1].innerHTML;
												 document.getElementById("agentCode").value = this.cells[0].innerHTML;
													};
												}
											}

											function RemoveTextAgent()
											{
												document.getElementById("agent").value = "";
												document.getElementById("agentCode").value = "";
											}

												</script>
											</form>
						      </div>


						      <div class="modal-footer">
						      </div>

						    </div>
						  </div>
						</div>
<!-- The Modal -->		<!-- The Modal -->		<!-- The Modal -->		<!-- The Modal -->		<!-- The Modal -->		<!-- The Modal -->		<!-- The Modal -->		<!-- The Modal -->		<!-- The Modal -->
<!-- The Modal -->		<!-- The Modal -->		<!-- The Modal -->		<!-- The Modal -->		<!-- The Modal -->		<!-- The Modal -->		<!-- The Modal -->		<!-- The Modal -->		<!-- The Modal -->
						<div class="modal fade"  id="clientSearch" name="clientSearch" data-keyboard="false" data-backdrop="static">
								<div class="modal-dialog modal-lg">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h2 class="modal-title">Search Client <button type="button" class="close" data-dismiss="modal" onclick="cancelDetail();">x</button></h2>
						      </div>
						      <div class="modal-body">
										<div class="row">
											<div class="col-md-3">

												<?php

												$host = "localhost";
												$dbusername = "root";
												$dbpassword = "";
												$dbname = "tgpdso_db";


												$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);


												if(mysqli_connect_error())
												{
													die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
												}
												else {
													if(isset($_POST['saveClient']))
													{
														$firstname = $_POST['firstnameClient'];
														$middlename = $_POST['middlenameClient'];
														$lastname = $_POST['lastnameClient'];
														$birthdate = $_POST['birthdateClient'];
														$address = $_POST['addressClient'];
														$cellno = $_POST['cellnoClient'];


														$sql = "INSERT INTO client (cFirstname, cMiddlename, cLastname, cBirthdate, cAddress, cCellno)
														VALUES ('$firstname', '$middlename', '$lastname', '$birthdate' , '$address', '$cellno')";

														if($conn->query($sql))
														{
															?>
															<script>
																alert("Client is succesfully added.");
																window.location="newBusiness.php";
																</script>
																<?php
														}
														else {
															echo "Error:". $sql."<br>".$conn->error;
														}
														$conn->close();
													}
													}
												?>


											<form method="post" action="<?php $_PHP_SELF ?>">
												First Name:
												<input name="firstnameClient" id="firstnameClient" class="date-picker form-control" type="text" required><br/>
												Middle Name:
												<input type="text" id="middlenameClient" placeholder="" name="middlenameClient" required="required" class="form-control" required><br/>
												Last Name:
												<input type="text" id="lastnameClient" placeholder="" name="lastnameClient" required="required" class="form-control" required><br/>
												Birthdate:
												<input type="date" id="birthdateClient" placeholder="" name="birthdateClient" required="required" class="form-control" required><br/>
												Address:
												<input type="text" id="addressClient" placeholder="" name="addressClient" required="required" class="form-control" required><br/>
												Cell No.:
												<input type="text" id="cellnoClient" placeholder="" name="cellnoClient" required="required" class="form-control" required><br/>

												<br/>
													<button type="submit" name="saveClient" id="saveClient" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;Add</button>
													<button type="reset" name="reset" id="reset" class="btn btn-default">Cancel</button>

											</form>

										</div>

										<div class="col-md-6">

										<table id="datatable-fixed-header3" class="table table-bordered table-hover no-footer" role="grid" aria-describedby="datatable-fixed-header_info" onclick="showButtons1()">
											<thead>
												<tr role="row">
													<th class="sorting" tabindex="0" aria-controls="datatable-fixed-header3" rowspan="1" colspan="1" style="width: 50px;" aria-label="ClientID">ClientID</th>
													<th class="sorting" tabindex="0" aria-controls="datatable-fixed-header3" rowspan="1" colspan="1" style="width: 100px;" aria-label="FullName">Full Name</th>
													<th class="sorting" tabindex="0" aria-controls="datatable-fixed-header3" rowspan="1" colspan="1" style="width: 50px;" aria-label="Birthdate">Birthdate</th>
													<th class="sorting" tabindex="0" aria-controls="datatable-fixed-header3" rowspan="1" colspan="1" style="width: 50px;" aria-label="Address">Address</th>
													<th class="sorting" tabindex="0" aria-controls="datatable-fixed-header3" rowspan="1" colspan="1" style="width: 50px;" aria-label="CellNo">Cellphone No.</th>
													<th class="sorting" tabindex="0" aria-controls="datatable-fixed-header3" rowspan="1" colspan="1"  style="width: 50px;" aria-label="Action">Action</th>
												</tr>
											</thead>
											<tbody>



													<?php
															$DB_con = Database::connect();
															$DB_con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
															$sql = "SELECT * FROM client";

															$result = $DB_con->query($sql);
															if($result->rowCount()>0){

																while($row=$result->fetch(PDO::FETCH_ASSOC)){
																	?>
																	<tr>
																		<td><?php print($row['clientID']); ?></td>
																		<td><?php print($row['cLastname']. ", " .$row['cFirstname']. " " .$row['cMiddlename']); ?></td>
																		<td><?php print($row['cBirthdate']); ?></td>
																		<td><?php print($row['cAddress']); ?></td>
																		<td><?php print($row['cCellno']); ?></td>
																		<td>
																					<button style="width: 100%; height: 100%;" onclick="clickMe();" type="button" id="retrieve" name="retrieve" data-dismiss="modal" class="btn btn-primary"><i class="glyphicon glyphicon-copy"></i></button>
																		</td>

																	</tr>
																	<?php
																}
															}
													?>
												</tbody>
										</table>
										<script>

	//								document.getElementById("retrieve").addEventListener("click", clickMe);

									function cancelDetail()
									{
										document.getElementById("client").value = "";
										document.getElementById("clientIDModal").value = "";
									}

									function clickMe() {
										var value = document.getElementById('client');
										var table = document.getElementById('datatable-fixed-header3');
										for(var counter = 1; counter < table.rows.length; counter++)
										{
												table.rows[counter].onclick = function()
												{
												document.getElementById("client").value = this.cells[1].innerHTML;
												document.getElementById("clientIDModal").value = this.cells[0].innerHTML;
											};
										}
									}

											</script>




	<!--		//							$(document).on("click", "retrieve", function()
			//							{
			//								var row=$(this);
			//								var id=$(this).attr("data-id");
			//								$("#client").val(id);

			//							});

				//					var table = document.getElementById('datatable-fixed-header3')
				//					for(var counter = 1; counter < table.rows.length; counter++)
				//					{
				//							table.rows[counter].onclick = function()
				//							{;
				//								document.getElementById("client").value = this.cells[1].innerHTML;
				//								document.getElementById("clientIDModal").value = this.cells[0].innerHTML;
				//							};
				//						}

-->
														</div>
													</div>
												</div>





						</div>
					</div>
				</div>
<!-- The Modal -->		<!-- The Modal -->		<!-- The Modal -->		<!-- The Modal -->		<!-- The Modal -->		<!-- The Modal -->		<!-- The Modal -->		<!-- The Modal -->		<!-- The Modal -->
					</div>
					<form method="post" style="margin-top: 40px;">
          <div class="right_col" role="main">
            <div class="">
              <div class="clearfix"></div>
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
											<h2><b>
											<ol class="breadcrumb">
								        <li class="breadcrumb-item">
								          <a href="newBusiness.php">New Business</a>
								        </li>
								        <li class="breadcrumb-item active">	Add New Business</li>
								      </ol></b></h2>
											<div class="clearfix"></div>
                    </div>
										<div class="x_content">
                      <div class="form-group">
												<div class="form-group">
												    <label class="control-label col-sm-2" >
																Transaction Date <span class="required">*</span>
														</label>
												    <div class="col-sm-10">
												       <input name="transDate" id="transDate" class="date-picker form-control" required="required" type="date" required><br>
												    </div></div>
														<div class="form-group">
															<button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#clientSearch"><span class='glyphicon glyphicon-search'></span></button>
															<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm"><span class='glyphicon glyphicon-plus'></span></button> -->
			                        <label class="control-label col-md-2 col-sm-1 col-xs-12">
			                         	Client Name <span class="required">*</span>
			                        </label>
			                        <div class="col-md-9 col-sm-11 col-xs-12">
			                          <input name="client" placeholder="Client Name" id="client"  class="date-picker form-control" required="required" type="text" required readonly>
			                        </div>
			                      </div>
															<input type="text" id="firstname" placeholder="Firstname" name="firstname"hidden>
 														 	<input type="text" id="lastname" placeholder="Lastname" name="lastname"hidden>

														<label class="control-label col-sm-2" >
																	Policy No. <span class="required">*</span>
														</label>
												    <div class="col-sm-10">
												      <input type="text" id="policyNo" name="policyNo" placeholder="Policy No." required="required" class="form-control" required><br>
												    </div>
														<div class="form-group">
															<button type="button" class="btn btn-primary"  data-toggle="modal" data-target=".bs-example-modal-sm"><span class='glyphicon glyphicon-plus'></span></button>
															<label class="control-label col-md-2 col-sm-1 col-xs-12">
																Plan <span class="required">*</span>
															</label>
															<div class="col-md-9 col-sm-11 col-xs-12">
																<input name="plan" id="plan" class="form-control" value="" placeholder="Plan" required readonly>
																<input hidden name="planCodePass" id="planCodePass" value="" placeholder="">
															</div>
														</div>
														<label class="control-label col-sm-2" >
																	Official Receipt No.
														</label>
														<div class="col-sm-10">
																	<input type="text" id="receiptNo" name="receiptNo" required="required" placeholder="OR #" class="form-control" required><br>
														</div>
														<label class="control-label col-sm-2" >
																	Face Amount
														</label>
														<div class="col-sm-10">
															<input type="text" id="faceAmount" name="faceAmount" required="required" class="form-control number" placeholder="Face Amount" required><br>
														</div>
														<label class="control-label col-sm-2" >
																	Premium <span class="required">*</span>
														</label>
														<div class="col-sm-10">
															<input type="text" id="premium" name="premium" required="required" onchange="commission()" class="form-control number" placeholder="Premium" required><br>
														</div>
														<label class="control-label col-sm-2" >
															Rate <span class="required">*</span><br>
														</label>
														<div class="col-sm-10">
															<input type="text" id="rate" name="rate" required="required" class="form-control" placeholder="Rate" required readonly><br>
														</div>
														<label class="control-label col-sm-2" >
															FYC
														</label>
														<div class="col-sm-10">
															<input type="text" id="fyc" name="fyc" class="form-control number" placeholder="First Year Commission" required readonly><br>
														</div>
														<label class="control-label col-sm-2" >
															Mode of Payment <span class="required">*</span><br>
														</label>
														<div class="col-sm-10">
															<select name="modeOfPayment" id="modeOfPayment" class="select2_gender form-control" tabindex="-1">
															<option value="Monthly" id="modeOfPayment">Monthly</option>
															<option value="Quarterly" id="modeOfPayment">Quarterly</option>
															<option value="Semi-Annual" id="modeOfPayment">Semi-Annual</option>
															<option value="Annualy" id="modeOfPayment">Annualy</option>
															</select><br>
														</div>
														<div class="form-group">
															<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="margin-bottom: -1px;" id="myBtn"><i class="fa fa-search"></i></button>
															<label class="control-label col-md-2 col-sm-1 col-xs-12">
																Agent <span class="required">*</span><br>
															</label>
															<div class="col-md-9 col-sm-11 col-xs-12">
																<input type="text" id="agentCode" name="agentCode" hidden>
																<input type="text" id="agent" name="agent" required="required" placeholder="Agent Name" class="form-control" required readonly>
															</div>
														</div>
													</div>
											</div>
					<br><br>

																	<center>

																		<input name="clientIDModal" id="clientIDModal" type="text" hidden><br>
																		<button type="submit" class="btn btn-primary" id="SaveButton" name="SaveButton"><i class="fa fa-check"></i>&nbsp;&nbsp;Save</button>

																		<button type="submit" class="btn btn-primary" id="UpdateButton" name="UpdateButton"><i class="fa fa-file-text"></i>&nbsp;&nbsp;Update</button>
																		<a  class="btn btn-default" href="newBusiness.php" onclick="disableUpdateButton();">Cancel</a>

																	</center>
                    </div>
                </div>
              </div>
            </div>
          </div>
				</form>
          <!-- /page content -->
    		</div>
    	</div>
    </form>
	<form>
	</form>
    <footer style="margin-bottom: -15px;">
				<center>
        	COPYRIGHT 2018 | TGP DISTRICT SALES OFFICE
				</center>
    </footer>

    <?php include 'java.php'; ?>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

		<!-- The Modal -->
  </body>
</html>
<?php include 'JavaScriptFile/newBusinessJavascript.php'?>
<?php include 'PHPFile/button_editButton_newBusiness.php'?>
<?php include 'PHPFile/button_saveButton_newBusiness.php'?>
<?php include 'PHPFile/button_updateButton_newBusiness.php'?>
<?php include 'PHPFile/button_delete_newBusiness.php'?>
<?php include 'PHPFile/button_modalButton_newBusiness.php'?>
