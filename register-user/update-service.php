<?php



$u = $_SESSION["user_email"];
if (isset($_POST['submit1'])) {
    $email = test_input($_POST['user_email']);
    $product_name = test_input($_POST['product_name']);


    // tmp_name is the temporary name of the uploaded file which is generated automatically by php, and stored on the temporary folder on the server
    // Note: If the destination file already exists, it will be overwritten
    $sql = "INSERT INTO `product_list`(`user_email`,`product_name`)
     VALUES ('$u','$product_name')";

    $query = mysqli_query($con, $sql);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>
 
 
 <style>
  @media screen and (max-width:576px) {
  /*  .my_list{*/
  /*    display: block;*/
  /*  }*/
  /*}*/
 </style>
 <ul class="mx-3"  style="list-style-type:disc;">
     <?php
        include "config.php";
        $sel = "SELECT * FROM `product_list` where `user_email`='$u' limit 10";
        $qu = mysqli_query($con, $sel);
        $sno = 1;
        while ($row = mysqli_fetch_array($qu)) {
        ?>
         <li class="my-3 d-block d-md-flex my_list g-2">
           <input type="text" value="<?php echo  $row['product_name'] ?>" class="form-control my-2 q">
          
           <a href="delete-product-service.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger mx-2 align-self-center"> <i class="fa  fa-trash-o"></i></a>
         </li>
     <?php } ?>
 </ul>