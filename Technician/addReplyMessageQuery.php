
<?php

  $conn = new mysqli("localhost", "root", "", "techiciensupportdb") or die(mysqli_error());


$CustomersName=null;
$CustomersID=null;
$TechnId=null;
$Rentsms=null;
$messageIds=null;

$t=null;
$time=null;
$eventAddedSuccess=null;
$repliedSms=null;




?>

<?php
  if(ISSET($_POST['sendsms'])){
   
    $messageIds=$_POST['messageId'];
    $CustomersName=$_POST['custnames'];
    $CustomersID=$_POST['custid'];
    $TechnId=$_POST['technid'];
    $Rentsms=$_POST['replyMess'];
  
    $t=date("Y-m-d");
     $time = date("H:i");



$sql = "SELECT * FROM messagetb WHERE  messageid= '$messageIds' ";
$query = mysqli_query($conn, $sql);
$row = mysqli_num_rows($query);


   while ($data  = mysqli_fetch_array($query)) {
            
            $ReceivedSms= $data['receivedsms'];
           
           
        }

if ($ReceivedSms!="not replied") {
 $repliedSms="This Message Is Already Replied";
}


 

   else {
    $conn->query("UPDATE `messagetb` SET `receivedsms`='$Rentsms',`techrepliestat`='replied' WHERE `messageid` = '$messageIds'") or die(mysqli_error());

    $eventAddedSuccess="Message Sent Successfully";
  }
  


}

    
?>