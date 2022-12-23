<?php
$acc_id = $_GET['val'];
include('dbconnect.php');
$sql = "UPDATE `cmnt_notification` SET `status`= '1' WHERE post_by =' $acc_id'";
$result4 = mysqli_query($conn,$sql);
if ($result4) {
    echo "Success". $acc_id;
  } else {
    echo "Failed";
  }
?>