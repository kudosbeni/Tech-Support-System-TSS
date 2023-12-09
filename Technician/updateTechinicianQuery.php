
<?php

  $conn = new mysqli("localhost", "root", "", "techiciensupportdb") or die(mysqli_error());


$TechniciNames=null;
$TechniciPhone=null;
$TechniciEmail=null;
$TechniciSpecialIn=null;
$TechniciAddress=null;
$TechniciPass=null;
$TechniciDescr=null;
$TechnicieFullAddress=null;
$TechnicienIdd=null;


$accountExist_error=null;
$accountAddedSuccess=null;
$accountnames_error=null;
$accountphonefewnumber_error=null;
$accountphone_error=null;


?>

<?php
  if(ISSET($_POST['saveupdate'])){

     $TechnicienIdd=$_POST['technicienidd'];
    $TechniciNames=$_POST['techninames'];
    $TechniciPhone=$_POST['techniphone'];
     $TechniciEmail=$_POST['techniemail'];
     $TechniciSpecialIn=$_POST['technispecialin'];
      // $TechniciAddress=$_POST['techniaddress'];
      $TechniciPass=$_POST['technipass'];
       $TechniciDescr=$_POST['technidescr'];
       
        $TechnicieFullAddress=$_POST['technicieaddresss'];
       
       $t=date("Y-m-d");


// $sql = "SELECT * FROM technicientb WHERE    technicienemail= '$TechniciEmail' OR technicienphone= '$TechniciPhone'";
// $query = mysqli_query($conn, $sql);
// $row = mysqli_num_rows($query);


 
// if ($row>0) {
// // echo " <script>window.alert(' This Students Is Already Exist ');window.location='addStudents.php'</script>";
//    $accountExist_error="This Account Is Already Exist";
// // exit();
// }

if(!preg_match("/^[a-zA-Z\s]+$/",$TechniciNames)) {

   $accountnames_error="Names Must Be Character";
 }


elseif(!preg_match('/^[0-9]*$/',$TechniciPhone)) {

   $accountphone_error="Only Mobile Number";
 }



elseif(strlen($TechniciPhone)<10) {

   $accountphonefewnumber_error="Enter Proper Mobile Number";
 }



     else{

      $conn->query("UPDATE `technicientb` SET `techniciennames`='$TechniciNames',`technicienphone`='$TechniciPhone',`technicienemail`='$TechniciEmail',`technicieaddress`='$TechnicieFullAddress', `techniciepass` ='$TechniciPass',`technicienspecial`='$TechniciSpecialIn',`techniciendescrip`='$TechniciDescr' WHERE `technicienid` = '$TechnicienIdd'") or die(mysqli_error());
   
    echo '<script>alert("Account Updated Successfully ");window.location=\'technicianViewProfile.php\';</script>';
  }

  


}

    
?>