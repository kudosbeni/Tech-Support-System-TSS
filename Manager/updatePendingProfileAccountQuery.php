
<?php

  $conn = new mysqli("localhost", "root", "", "techiciensupportdb") or die(mysqli_error());

$SelectStatus=null;
$SelectRequest=null;
$TechnPhone=null;
$TechnNamedd=null;


  if(ISSET($_POST['saveupdate'])){

    $Ids=$_POST['technicienidd'];
    $TechnPhone=$_POST['technicienphoned'];
    $TechnNamedd=$_POST['techniciennamesd'];
    
    $SelectStatus=$_POST['selectstatus'];
    $SelectRequest=$_POST['selectrequest'];
   
    $phno=$TechnPhone;

  $messege=$TechnNamedd." Your Request to be Member of this Platform is ".$SelectStatus;

   require ("sms.php");

 $conn->query("UPDATE `technicientb` SET `technicienstatus`='$SelectStatus',`technicienrequest`='$SelectRequest' WHERE `technicienid` = '$Ids'") or die(mysqli_error());
        echo " <script>window.alert('Profile Updated Successfully');window.location='viewTechnicianPendingProfile.php'</script>";


  }
?>