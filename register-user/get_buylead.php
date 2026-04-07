





  <script>
   function abc() {
     setTimeout(() => {
       // You can submit the form here manually
       // The form will be submitted after the delay
       location.href = "show-buyleads.php";
     }, 2000); // 5000 ms = 5 seconds
   }
   abc()
 </script>


 <!doctype html>
 <html lang="en">

 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Bootstrap demo</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
   <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
 </head>

 <body style="background-color: gray;">
   <section>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-4">
        <div class="buylead_alert text-center animate__animated shadow-lg animate__backInDown">
       <div class="alert alert-light py-5" role="alert">
         <h3><img src="https://growindiaexport.com/register-user/check.gif" alt="">Verified  </h3>
         <h6>Your Buy Leads     Purchased </h6>
       </div>
     </div>
        </div>
      </div>
    </div>
   </section>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
 </body>

 </html>


























<?php
include "config.php";

session_start();

// To check if session is started.
if (isset($_SESSION["user_id"])) {
  $user_id = $_SESSION["user_id"];
  $user_email = $_SESSION["user_email"];

 
}
// if($_SESSION["user_id"]){
//   echo "<script>alert('$plan1 : plane is')</script>";

// }
if (isset($_SESSION["user_id"])) {
  $user_id = $_SESSION["user_id"];
  // $sel = "SELECT * FROM `user` where `user_id`='$user_id'";
  // $q = mysqli_query($con, $sel);
  // while ($row1 = mysqli_fetch_array($q)) {
  //   $plan1 = $row1['plan'];
  // }
}
// echo "<script>alert('Welcome : $plan')</script>";
?>

<?php
 
if (isset($_POST['submit'])) {
  $buyleads_id = $_POST["buyleads_id"];
  $buyer_email = $_POST["buyer_email"];
  $buyer_name = $_POST["buyer_name"];
   $number = $_POST["number"];
  $queiry_for = $_POST["queiry_for"];
  $buyer_location = $_POST["buyer_location"];
  $plan = $_POST["plan"];
  $quantity = $_POST["quantity"];
  $payment_mode = $_POST["payment_mode"];
  $shipping_mode = $_POST["shipping_mode"];
  $new_number = $_POST["new_number"];
 
 



  $sql = "INSERT INTO `limit_buylead`(`buyleads_id`, `user_email`,`user_id`,`buyer_email`,`number`,`queiry_for`,`buyer_name`,`buyer_location`,`plan`,`quantity`,`payment_mode`,`shipping_mode`,`new_number`) VALUES ('$buyleads_id','$user_email','$user_id','$buyer_email','$number','$queiry_for','$buyer_name','$buyer_location','$plan','$quantity','$payment_mode','$shipping_mode','$number')";
  $result =  $con->query($sql);
//   echo '<script>alert("Your Requirement sent successfully ")</script>';
//   echo "<script> location.href='show-buyleads.php'; </script>";
  exit;
}
?>

 