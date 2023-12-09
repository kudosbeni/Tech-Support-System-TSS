
<?php

  $conn = new mysqli("localhost", "root", "", "techiciensupportdb") or die(mysqli_error());


$CustomersName=null;
$CustomersID=null;
$TechnId=null;
$Sentsms=null;

$t=null;
$time=null;
$eventAddedSuccess=null;
$TechnNames=null;




?>

<?php
  if(ISSET($_POST['sendsms'])){

    $CustomersName=$_POST['custnames'];
    $CustomersID=$_POST['custid'];
    $TechnId=$_POST['technid'];
    $TechnNames=$_POST['technnames'];
    $Sentsms=$_POST['custmmesage'];
  
    $t=date("Y-m-d");
     $time = date("H:i");



// $sql = "SELECT * FROM placetb WHERE  placename= '$placeName'";
// $query = mysqli_query($conn, $sql);
// $row = mysqli_num_rows($query);


 
// if ($row>0) {
// // echo " <script>window.alert(' This Students Is Already Exist ');window.location='addStudents.php'</script>";
//    $placenameIsExist="This Place Name Is Already Exist";
// // exit();
// }


  

   $conn->query("INSERT INTO `messagetb`(customerid,customername,technicieid,techName,sentsms,receivedsms,sentontime,sentondate) VALUES('$CustomersID','$CustomersName','$TechnId','$TechnNames','$Sentsms','not replied','$time','$t')") or die(mysqli_error());
    $eventAddedSuccess="Message Sent Successfully";
 
  


}

    
?>