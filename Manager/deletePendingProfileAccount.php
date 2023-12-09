<?php 

$conn = new mysqli("localhost", "root", "", "techiciensupportdb") or die(mysqli_error());

	$ID=$_GET['id'];
	$conn->query("DELETE FROM `technicientb` WHERE `technicienid` = ' $ID'") or die(mysqli_error());
	echo '<script type="text/javascript">alert("Technicians  Deleted Successfully");window.location=\'viewTechnicianPendingProfile.php\';</script>';
 ?>