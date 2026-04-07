 <?php
 
    
include "config.php";
 
$inner_cat_id = $_GET['inner_cat_id'];
$del = "DELETE FROM `inner_cat` WHERE `inner_cat_id`='$inner_cat_id'";
$query = mysqli_query($con, $del);

if ($query) {
    header("location:https://growindiaexport.com/admin/add-inner-cat.php");
}
 
?>