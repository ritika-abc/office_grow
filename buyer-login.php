<?php

// 
session_start();
// ob_start();
include "config.php";

if (isset($_POST['submit'])) {
    $buyer_email = $_POST['buyer_email'];
    $buyer_name = $_POST['buyer_name'];
    $bla = $_POST['bla'];

    $result = mysqli_query($con, "select * 
     from buyer WHERE buyer_email='$buyer_email' and buyer_name='$buyer_name' ");
    $user_matched = mysqli_num_rows($result);
    if ($user_matched > 0) {
        $_SESSION['buyer_email'] = $buyer_email;
        
              
      
    } else {
        echo "not matched !!!!";
    }
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>growindiaexport</title>
 <link rel="icon" type="image/x-icon" href="image/favicon.png">
    <link rel="mask-icon" href="image/favicon.png">
<link rel="canonical" href="https://growindiaexport.com/buyer-login.php">
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  </head>
  <body>

  <div class="row">
    <div class="col-12  ">
        <form action="" method="post" class="border p-5 w-75 m-auto text-capitalize">
            <label for=""> user buyer_email</label>
            <input type="text" class="form-control" name="buyer_email">
            <label for="" class="mt-3"> buyer_name</label>
            <input type="text" class="form-control" name="buyer_name">
            

            <input type="submit" name="submit" class="btn btn-danger mt-3">
            
        </form>
    </div>
</div>


   <script src="assets/css/bootstrap.bundle.min.js"></script>
  </body>
</html>