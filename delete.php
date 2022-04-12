<?php
include("connector.php");
$id = $_GET['id'];
$query = "DELETE FROM REGISTRATION_DATABASE WHERE id = '$id'";
 $data = mysqli_query($connection,$query);

 if($data)
 {
     echo "<script>alert('Record Deleted')</script>";
     ?>
     <meta http-equiv="refresh" content="0;url=http://localhost/dbms/display.php" />
     <?php
 }
 else
 {
 echo "<script>alert('Record Filed To Delete')</script>";
 }
?>