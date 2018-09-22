<div class="modal-dialog modal-md" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
      <h4 class="modal-title" id="myModalLabel2">Update SOA Details</h4>
    </div>
    <form method="post" name="myform" action="<?php $_PHP_SELF ?>">
      <div class="modal-body">
        <div class="row">

          <div class="col-md-6">
          <label class="control-label">
          Policy No.:
        </label><input type="text" class="form-control" name="soa_policyNo1" id="soa_policyNo1"/>
      </div>

    <!-- <div class="col-md-2">
        <button type="button" class="btn btn-primary"name="soaSearch" id="soaSearch" data-dismiss="modal" data-toggle="modal" data-target="#addSOASearchPolicy" style="margin-top: 24px; margin-left: -14px;"><i class="fa fa-search"></i></button>
      </div> -->

        </div>
<div class="row">
          <div class="col-md-6">
            <label class="control-label">
              SOA Date:
              </label>
             <input type="month" class="form-control" name="soa_date1" id="soa_date1" required><br>
             <hr>
             <label class="control-label">
             Month Select:
             </label>
        <div class="row" style="background-color: lightgray;">
          <div class="col-md-5">
            <br>
        <label class="control-label">
        Mid Month:
        </label>
       <input type="radio"  name="soa_select1" id="soa_select1" value="Mid Month" required>
     </div>
     <div class="col-md-5" style="margin-top:18px;">
       <label class="control-label">
       Month End:
       </label>
      <input type="radio"  name="soa_select1" id="soa_select1" value="Month End" required>
    </div>
    </div>
        <hr>
        <label class="control-label">
        Transaction Date:
      </label><input type="date" class="form-control" name="soa_transDate1" id="soa_transDate1"><br>
      <div class="row">
        <div class="col-md-10">
      <label class="control-label">
        Name:
      </label>
          <input  type="text" class="form-control" id="soa_client1" name="soa_client1">
      </div>
      <div class="col-md-2">
          <button type="button" name="searchClient" id="searchClient" class="btn btn-primary" data-target="#clientSearchSOA" data-toggle="modal" style="margin-top: 24px; margin-left: -14px;"><i class="fa fa-search"></i></button>
      <input  type="text" id="soa_name1" name="soa_name1" hidden><br>
    </div>
      </div>
        <label class="control-label">
        Issue Date:
      </label><input type="date" class="form-control" name="soa_issueDate1" id="soa_issueDate1"><br>
    </div>
    <div class="col-md-6">
      <label class="control-label">
      Mode of Payment:
    </label>
    <select id="soaMOP1" name="soaMOP1" class="form-control">
    <option id="soaMOP1" name="soaMOP1">Select MOP</option>
      <option id="soaMOP1" name="soaMOP1" value="Monthly">Montly</option>
        <option id="soaMOP1" name="soaMOP1" value="Quarterly">Quarterly</option>
          <option id="soaMOP1" name="soaMOP1" value="Semi-Annual">Semi-Annual</option>
            <option id="soaMOP1" name="soaMOP1" value="Annual">Annual</option>
    </select>

    <br>
        <label class="control-label">
        Premium:
      </label><input type="text" class="form-control" name="soa_premium1" id="soa_premium1" onchange="commissionUpdateSOA()"><br>
        <label class="control-label">
        Rate:
      </label><input type="text" class="form-control" name="soa_rate1" id="soa_rate1"><br>
      <label class="control-label">
      Commission:
    </label><input type="text" class="form-control" name="soa_commission1" id="soa_commission1"><br>

    <div class="row">

      <div class="col-md-10">
    <label class="control-label">
    Agent:
  </label><input type="text" hidden name="soa_agent1" id="soa_agent1">
  <input type="text" class="form-control" name="soa_agentname1" id="soa_agentname1">
    </div>
    <div class="col-md-2">
      <button type="button" class="btn btn-primary"name="soaAgent1" id="soaAgent1" data-dismiss="modal" data-toggle="modal" data-target="#searchAgentUpdate" style="margin-top: 24px; margin-left: -14px;"><i class="fa fa-search"></i></button>
    </div>
  </div>
  <br>
  <label class="control-label">
  Due Date:
</label><input type="text" class="form-control" name="soa_dueDate1" id="soa_dueDate1">
<input type="text" hidden name="soa_ID" id="soa_ID">


       <br>
     </div>
     </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" style="width: 100px;" name="soaUpdate" id="soaUpdate"><i class="fa fa-arrow-up"></i>&nbsp;&nbsp;Update</button>
      </div>
    </form>
  </div>
</div>



 <?php
include 'PHPFile/Connection_Database.php';

       if(mysqli_connect_error())
       {
         die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
       }
       else {
 				if(isset($_POST['soaUpdate']))
 				{
           $soadate = $_POST['soa_date1'];
           $soaID = $_POST['soa_ID'];

 					$sql = "UPDATE payment SET
 					payment_soaDate = '$soadate'
           WHERE payment_ID = '$soaID'";

 						if($conn->query($sql))
 						{

 						}
 						else {
 							echo "Error:". $sql."<br>".$conn->error;
 						}
 						$conn->close();
       }
     }
 ?>
 <?php
include 'PHPFile/Connection_Database.php';

       if(mysqli_connect_error())
       {
         die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
       }
       else {
 				if(isset($_POST['soaUpdate']))
 				{

          $soaPolicyNo = $_POST['soa_policyNo1'];
          $soaSelectMonth = $_POST['soa_select1'];
          $soaDate = $_POST['soa_date1'];
          $soaTransDate = $_POST['soa_transDate1'];
          $soaName = $_POST['soa_name1'];
          $soaIssueDate = $_POST['soa_issueDate1'];
          $soaMOP = $_POST['soaMOP1'];
          $soaPremium = $_POST['soa_premium1'];
          $soaRate = $_POST['soa_rate1'];
          $soaCommission = $_POST['soa_commission1'];
          $soaAgent = $_POST['soa_agent1'];
          $soadueDate = $_POST['soa_dueDate1'];
          $soaID = $_POST['soa_ID'];

          $query = "SELECT * FROM soa WHERE SOA_ID = '$soaID'";
          $data = mysqli_query($conn, $query);
          $result = mysqli_num_rows($data);
          if($result == 0)
          {
            $sql = "INSERT INTO soa (SOA_transDate, SOA_policyOwner, SOA_policyNo, SOA_paymentMode, SOA_premium, SOA_rate, SOA_commission,
              SOA_agent, SOA_date, SOA_selectMonth, SOA_dueDate)
              values ('$soaTransDate', '$soaName', '$soaPolicyNo', '$soaMOP', '$soaPremium', '$soaRate','$soaCommission', '$soaAgent', '$soaDate', '$soaSelectMonth', '$soadueDate')";


              if($conn->query($sql))
              {
                ?>
                <script>
                   window.location="soa.php?edit=<?php echo $soaPolicyNo ?>"
                </script>
                  <?php
              }
              else {
                echo "Error:". $sql."<br>".$conn->error;
              }
              $conn->close();
          }
          else if($result == 1)
          {
            $sql = "UPDATE soa
            SET SOA_transDate = '$soaTransDate',
            SOA_policyOwner = '$soaName',
            SOA_policyNo = '$soaPolicyNo',
            SOA_paymentMode = '$soaMOP',
            SOA_premium = '$soaPremium',
            SOA_rate = '$soaRate',
            SOA_commission = '$soaCommission',
            SOA_agent = '$soaAgent',
            SOA_date = '$soaDate',
            SOA_selectMonth = '$soaSelectMonth',
            SOA_dueDate = '$soadueDate'
             WHERE SOA_ID = '$soaID'";

              if($conn->query($sql))
              {
                ?>
                <script>
                   window.location="soa.php?edit=<?php echo $soaPolicyNo ?>"
                </script>
                  <?php
              }
              else {
                echo "Error:". $sql."<br>".$conn->error;
              }
              $conn->close();
          }
       }
     }
 ?>

 <script>
    function commissionUpdateSOA()
    {
      var premium = document.getElementById("soa_premium1").value;
    //  var number = document.getElementById("soa_rate1").value;
      var rate = document.getElementById("soa_rate1").value;


      var rate2 = premium / 100;
      var str = rate.slice(0, -1);
      str = str/100;
      var result = premium*str;
      document.getElementById("soa_commission1").value = premium*str;
      // window.alert(fyc.value);
      // document.getElementById("myText").value
    }
  </script>
