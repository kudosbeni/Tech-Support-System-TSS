
<?php
 $username=null;
  $password=null;
  $checkaccount_error=null;
  $checkaccountStatus_error=null;

    session_start();
   
if(ISSET($_POST['loginstaffss'])){

        $username = $_POST['usernames'];
        $password = $_POST['passwords'];

        $conn = new mysqli("localhost", "root", "", "techiciensupportdb") or die(mysqli_error());
        $query = $conn->query("SELECT * FROM `managertb` WHERE `manageremail` = '$username' && `managerpass` = '$password'") or die(mysqli_error());
        $fetch = $query->fetch_array();
        $valid = $query->num_rows;
        // $section = $fetch['staffrole'];   

            if($valid > 0){
               
                    $_SESSION['managerid'] = $fetch['managerid'];
                     $_SESSION['managernames'] = $fetch['managernames'];
                     
                    header("location:Manager/homeManager.php");
                
              
                // if($section == "Animation"){
                //      $_SESSION['staffnames'] = $fetch['staffnames'];
                //     $_SESSION['staffid'] = $fetch['staffid'];
                //     header("location:templates/Animation/homeAnimation.php");
                // }
              
            }
 
            else{
                $checkaccount_error="Account Does Not Exist Try Again !";
                // echo "<script>alert('Account Does Not Exist!')</script>";
                // echo "<script>window.location = 'index.php'</script>";
            }
                        
        
        }
         ?>

        <?php

            if(ISSET($_POST['loginstaffss'])){

        $username = $_POST['usernames'];
        $password = $_POST['passwords'];

        $conn = new mysqli("localhost", "root", "", "techiciensupportdb") or die(mysqli_error());
        $query = $conn->query("SELECT * FROM `customertb` WHERE `customeremail` = '$username' && `customerpassw` = '$password'") or die(mysqli_error());
        $fetch = $query->fetch_array();
        $valid = $query->num_rows;
        // $section = $fetch['staffrole'];   

            if($valid > 0){
               
                    $_SESSION['customerid'] = $fetch['customerid'];
                     $_SESSION['customernames'] = $fetch['customernames'];
                     
                    header("location:Customer/homeCustomer.php");
                
              
                // if($section == "Animation"){
                //      $_SESSION['staffnames'] = $fetch['staffnames'];
                //     $_SESSION['staffid'] = $fetch['staffid'];
                //     header("location:templates/Animation/homeAnimation.php");
                // }
              
            }
                

            else{
                  $checkaccount_error="Account Does Not Exist Try Again !";
                // echo "<script>alert('Account Does Not Exist!')</script>";
                // echo "<script>window.location = 'index.php'</script>";
            }
                        
        
        }

?>

       <?php

       if(ISSET($_POST['loginstaffss'])){

        $username = $_POST['usernames'];
        $password = $_POST['passwords'];

        $conn = new mysqli("localhost", "root", "", "techiciensupportdb") or die(mysqli_error());
        $query = $conn->query("SELECT * FROM `technicientb` WHERE `technicienemail` = '$username' && `techniciepass` = '$password' AND technicienstatus='Active' " ) or die(mysqli_error());
        $fetch = $query->fetch_array();
        $valid = $query->num_rows;
        $Statuss = $fetch['technicienstatus'];   

            if($valid > 0){
               
                    $_SESSION['technicienid'] = $fetch['technicienid'];
                     $_SESSION['techniciennames'] = $fetch['techniciennames'];

                      $conn->query("UPDATE `technicientb` SET `viewstat`='Online' WHERE `technicienid` = '".$_SESSION['technicienid']."'") or die(mysqli_error());

                     
                    header("location:Technician/homeTechinicien.php");
                
              if($Statuss == "DesActive"){
                   
                     echo "<script>alert('Account Does Not Exist!')</script>";
                }
                
              
            }

           


            else{
               

                 $checkaccount_error="Account Does Not Exist Try Again Or Account is Not Activated !";
                // echo "<script>alert('Account Does Not Exist!')</script>";
                // echo "<script>window.location = 'index.php'</script>";
            }
                        
        
        }
        ?>
