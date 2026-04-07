 <?php
 
    
include "config.php";
 
$buyleads_id = $_GET['buyleads_id'];
$del = "DELETE FROM `buyleads` WHERE `buyleads_id`='$buyleads_id'";
$query = mysqli_query($con, $del);

if ($query) {
    header("location:https://growindiaexport.com/admin/view-buyleads.php");
}
 
?>