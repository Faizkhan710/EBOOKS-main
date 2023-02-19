<?php

 session_start();
  include("../db.php");
  if(!isset($_SESSION["AID"])) {
    header("Location:../admin_login.php");
  }



$sql = "DELETE FROM book WHERE bid='" . $_GET["id"] . "'";
if (mysqli_query($db, $sql)) {

    echo '<script>alert("Record deleted successfully")</script>';
        header("Location:view_books.php");
}
 else {
    echo "Error deleting record: " . mysqli_error($db);
}




?>

