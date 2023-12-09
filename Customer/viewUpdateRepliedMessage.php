 
<?php

  $conn = new mysqli("localhost", "root", "", "techiciensupportdb") or die(mysqli_error());


    $ID=$_GET['id'];

 $conn->query("UPDATE `messagetb` SET `techrepliestat`='ok' WHERE `messageid` = '$ID'") or die(mysqli_error());
 header("location:homeCustomer.php");
?>