 <?php
 
    
include "config.php";
 
$id = $_GET['id'];
$del = "DELETE FROM `news` WHERE `id`='$id'";
$query = mysqli_query($con, $del);

if ($query) {
    header("location:https://growindiaexport.com/admin/add-news.php");
}
 
?>