  <?php
 
    
include "config.php";
 
$pro_id  = $_GET['pro_id'];
$del = "DELETE FROM `free-listing-product` WHERE `pro_id`='$pro_id'";
$query = mysqli_query($con, $del);

if ($query) {
    // header("location:https://growindiaexport.com/register-user/view-product.php");
    header("location:../register-user/view-product.php");
}
 
?>