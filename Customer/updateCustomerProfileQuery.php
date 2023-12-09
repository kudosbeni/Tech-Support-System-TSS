
<?php

  $conn = new mysqli("localhost", "root", "", "techiciensupportdb") or die(mysqli_error());


$CustoNames=null;
$CustoPhone=null;
$CustoEmail=null;
$CustoPass=null;
$CustoAddress=null;


$accountExist_error=null;
$accountAddedSuccess=null;
$accountnames_error=null;
$accountphonefewnumber_error=null;
$accountphone_error=null;


?>

<?php
  if(ISSET($_POST['saveupdate'])){
    
    $customerId=$_POST['customeridd'];
    $CustoNames=$_POST['custonames'];
    $CustoPhone=$_POST['custophone'];
     $CustoEmail=$_POST['custoemail'];
     $CustoPass=$_POST['custopass'];
      $CustoAddress=$_POST['custoaddrress'];
    
       $t=date("Y-m-d");


// $sql = "SELECT * FROM customertb WHERE customeremail= '$CustoEmail' OR customerphone= '$CustoPhone'";
// $query = mysqli_query($conn, $sql);
// $row = mysqli_num_rows($query);


 
// if ($row>0) {
// // echo " <script>window.alert(' This Students Is Already Exist ');window.location='addStudents.php'</script>";
//    $accountExist_error="This Account Is Already Exist";
// // exit();
// }

if(!preg_match("/^[a-zA-Z\s]+$/",$CustoNames)) {

   $accountnames_error="Names Must Be Character";
 }


elseif(!preg_match('/^[0-9]*$/',$CustoPhone)) {

   $accountphone_error="Only Mobile Number";
 }



elseif(strlen($CustoPhone)<10) {

   $accountphonefewnumber_error="Enter Proper Mobile Number";
 }



     else{

     $conn->query("UPDATE `customertb` SET `customernames`='$CustoNames',`customerphone`='$CustoPhone',`customeremail`='$CustoEmail',`customerpassw`='$CustoPass', `customeraddress` ='$CustoAddress' WHERE `customerid` = '$customerId'") or die(mysqli_error());
      echo '<script>alert("Account Updated Successfully ");window.location=\'viewProfileSettings.php\';</script>';
  }

  


}

    
?>