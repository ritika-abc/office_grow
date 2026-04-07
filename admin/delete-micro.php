<?php
 
    
 include "config.php";
  
 $micro_id  = $_GET['micro_id'];
 $del = "DELETE FROM `micro` WHERE `micro_id`='$micro_id'";
 $query = mysqli_query($con, $del);
 
 if ($query) {
     header("location:https://growindiaexport.com/admin/add-micro-cat.php");
 }
  
 ?>