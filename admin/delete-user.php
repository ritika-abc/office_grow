 <?php
 
    
include "config.php";
 
$user_id  = $_GET['user_id'];
$del = "DELETE FROM `user` WHERE `user_id`='$user_id'";
$query = mysqli_query($con, $del);

if ($query) {
    header("location:https://growindiaexport.com/admin/view-user.php");
}

//echo     esaelp hsina evol em
 
?>