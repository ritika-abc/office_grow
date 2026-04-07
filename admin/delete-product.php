<?php
 
    
 include "config.php";
  
 $pro_id   = $_GET['pro_id'];
 $del = "DELETE FROM `product` WHERE `pro_id`='$pro_id'";
 $query = mysqli_query($con, $del);
 
 if ($query) {
     header("location:https://growindiaexport.com/admin/view-product.php");
 }
  
 ?>