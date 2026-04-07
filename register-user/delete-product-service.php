  <?php
 
    
include "config.php";
 
$id  = $_GET['id'];
$del = "DELETE FROM `product_list` WHERE `id`='$id'";
$query = mysqli_query($con, $del);

if ($query) {
    // header("location:https://growindiaexport.com/register-user/view-product.php");
    header("location:https://www.growindiaexport.com/register-user/profile-view.php");
}
 
?>