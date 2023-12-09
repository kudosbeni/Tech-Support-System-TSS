<?php 
error_reporting(0);
session_start();
session_destroy();
echo"<script>window.location='index.php';</script>";
 ?>

    <?php
      $conn=mysqli_connect("localhost","root","", "techiciensupportdb") or die(mysql_error());
      // $ID=$_GET['id'];
       ?>
    
     <?php
   $conn->query("UPDATE `technicientb` SET `viewstat`='Offline' WHERE `technicienid` = '".$_SESSION['technicienid']."'") or die(mysqli_error());
        ?>

 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title></title>

      <script type="text/javascript">
        function preventBack() { window.history.forward(); }
        setTimeout("preventBack()", 0);
        window.onunload = function () { null };
    </script>
 </head>
 <body>
 
 </body>
 </html>