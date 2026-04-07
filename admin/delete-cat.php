 <?php
 
    
include "config.php";
 
$cat_id = $_GET['cat_id'];
$del = "DELETE FROM `category` WHERE `cat_id`='$cat_id'";
$query = mysqli_query($con, $del);

if ($query) {
    header("location:https://growindiaexport.com/admin/add_category.php");
}
 
?>