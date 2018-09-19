<?php
include 'PHPFile/Connection_Database.php';

      if(mysqli_connect_error())
      {
        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
      }
      else {
			if(isset($_GET['deletePayment']) && isset($_GET['list']))
			{
				$delete = $_GET['deletePayment'];
        $list = $_GET['list'];

				$sql = "DELETE FROM payment WHERE payment_policyNo = '$delete' AND payment_ID = '$list'";

				if($conn->query($sql))
				{
					?>

            <?php
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
      else
      {
        if(isset($_GET['deletePayment']) && isset($_GET['list']))
        {
          $delete = $_GET['deletePayment'];
          $list = $_GET['list'];

          $nextDueData = "";
          $issueDateDate = "";

          $query = "SELECT * FROM payment WHERE payment_policyNo = '$delete' ORDER BY payment_dueDate DESC LIMIT 1";
          $data = mysqli_query($conn, $query);
          while($row = mysqli_fetch_Array($data))
          {
            $nextDueData = $row['payment_nextDue'];
            $issueDateData = $row['payment_issueDate'];
          }
          $result = mysqli_num_rows($data);
          if($result == 1)
          {
            $sql = "UPDATE production SET issuedDate = '$issueDateData', dueDate = '$nextDueData' WHERE policyNo = '$delete'";
            if($conn->query($sql))
            {
              ?>
              <script>
                alert("Deleting the record successfully");
                window.location = "records.php?edit=<?php echo $delete ?>";
                </script>
                <?php
            }
            else
            {
              echo "Error:". $sql."<br>".$conn->error;
            }
          }
          else if($result == 0)
          {
            $sql = "UPDATE production SET issuedDate = '', dueDate = '' WHERE policyNo = '$delete'";
            if($conn->query($sql))
            {
              ?>
              <script>
                alert("Deleting the record successfully");
                window.location = "records.php?edit=<?php echo $delete ?>";
                </script>
                <?php
            }
            else
            {
              echo "Error:". $sql."<br>".$conn->error;
            }
          }
          $conn->close();
        }
      }

 ?>
