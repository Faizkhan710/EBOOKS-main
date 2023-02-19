<?php

 session_start();
  include("../db.php");
  if(!isset($_SESSION["AID"])) {
    header("Location:../admin_login.php");
  }



$sql = "DELETE FROM payments WHERE bill_id='" . $_GET["id"] . "'";
if (mysqli_query($db, $sql)) {

    echo '<script>alert("Record deleted successfully")</script>';
        header("Location:transaction.php");
}
 else {
    echo "Error deleting record: " . mysqli_error($db);
}




?>