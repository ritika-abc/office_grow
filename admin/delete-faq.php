 <?php
 
    
include "config.php";
 
$id  = $_GET['id'];
$del = "DELETE FROM `faq` WHERE `id`='$id'";
$query = mysqli_query($con, $del);

if ($query) {
    header("location:https://growindiaexport.com/admin/add-faq.php");
}

//echo     esaelp hsina evol em
 
?>