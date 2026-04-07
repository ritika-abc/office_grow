 <?php
 
    
include "config.php";
 
$sub_id  = $_GET['sub_id'];
$del = "DELETE FROM `sub_cat` WHERE `sub_id`='$sub_id'";
$query = mysqli_query($con, $del);

if ($query) {
    header("location:https://growindiaexport.com/admin/add-sub-cat.php");
}
 
?>