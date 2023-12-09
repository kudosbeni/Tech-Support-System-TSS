
<?php

  $conn = new mysqli("localhost", "root", "", "techiciensupportdb") or die(mysqli_error());


$serviceIds=null;


?>

<?php
  if(ISSET($_POST['updatePic'])){

    $serviceIds=$_POST['technicienids'];


        $photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
        $photo_name = addslashes($_FILES['photo']['name']);
        $photo_size = getimagesize($_FILES['photo']['tmp_name']);
        move_uploaded_file($_FILES['photo']['tmp_name'],"../photo/" . $_FILES['photo']['name']);


// $sql = "SELECT * FROM services WHERE  servicename = '$serviceNames'";
// $query = mysqli_query($conn, $sql);
// $row = mysqli_num_rows($query);


 
// if ($row>0) {
// // echo " <script>window.alert(' This Students Is Already Exist ');window.location='addStudents.php'</script>";
//    $serviceIsExist="This Services Is Already Exist";
// // exit();
// }



   

    $conn->query("UPDATE `technicientb` SET  `technicienphoto` = '$photo_name'WHERE `technicienid` = '$serviceIds'") or die(mysqli_error());

   echo '<script>alert("Photo Updated Successfully ");window.location=\'technicianViewProfile.php\';</script>';
  
}

    
?>