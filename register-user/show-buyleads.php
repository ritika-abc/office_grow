<?php
include_once "include1/header.php";
?>
<style>
    .s_no {
        height: 50px;
        width: 50px;
        background-color: #ff9800;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transform: translate(-50%, -50%);
        left: 50%;
        border: 2px solid white;
    }
</style>
<!-- page content -->
<div class="container-fluid my-5" role="main">
    <!-- top tiles -->
    <div class="row bg-white py-4 px-2">
        <!--<div class="col-12">-->
        <!--    <form action="" class="my-5  d-flex">-->
        <!--        <input type="search" placeholder="Search Here By Product Name" name="search" class="form-control w-75 rounded float-end">-->
        <!--        <input type="submit" class="btn-sm btn-success">-->
        <!--    </form>-->
        <!--</div>-->
        <div class="col-12">
             <h4>Welcome !! <br> <small><i>If your monthly Buyleads limit has been reached, please contact our team to clear your previous Buyleads.</i></small></h4>
            <div class=" row">
                <?php
                include "config.php"; // database configuration
                /* Calculate Offset Code */
                // Get the current month and year
                $currentMonth = date('m');
                $currentYear = date('Y');
                if (isset($_SESSION["user_id"])) {
                    "user id " .   $user_id = $_SESSION["user_id"];

                    $se = "SELECT * FROM `user` where `user_id`='$user_id'";
                    $qu = mysqli_query($con, $se);
                    while ($row3 = mysqli_fetch_array($qu)) {
                        $plan = $row3['plan'];
                    }
                }
                // echo "<script>alert('$plan')</script>";
                if ($plan == 'prime-user') {
                    $sql = "SELECT * FROM  `limit_buylead` where `user_id`='$user_id' limit 15 ";
                } else if ($plan == 'star-user') {
                    $sql = "SELECT * FROM  `limit_buylead` where `user_id`='$user_id' limit 45 ";
                } else if ($plan == 'galaxy-user') {
                    $sql = "SELECT * FROM  `limit_buylead` where `user_id`='$user_id' limit 85 ";
                } else {
                    $sql = "SELECT * FROM  `limit_buylead` where `user_id`='$user_id' limit 0  ";
                }

                // $sql = "SELECT * FROM  `limit_buylead` where `user_id`='$user_id'  "; // working query
                //     $sql = "
                //    SELECT limit_buylead.limit_id, limit_buylead.user_email   
                //     FROM limit_buylead
                //     INNER JOIN buyleads ON limit_buylead.limit_id = buyleads.$user_id 
                //     ";
                $result = mysqli_query($con, $sql) or die("Query Failed.");


                if (mysqli_num_rows($result) > 0) {


                ?>

                    <?php
                    // 
                    $serial =  1;
                    while ($row = mysqli_fetch_assoc($result)) {

                    ?>
                       
                        <div class="col-lg-12 my-5 position-relative">
                           
                            <div class="dash_blog bg-light" style="    border: 2px dashed #d0d0d0;" >
                                <div class="dash_blog_inner">
                                   
                                    <div class="list_cont " style="background-color:#d2d2d2">
                                         
                                       <div class="" style="float:right">
                              
                                        <p>Payment <?php echo $row['payment_mode']; ?></p>
                                       </div>
                                       <h3><span class="text-capitalize"><?php echo $serial; ?>. <?php echo $row['queiry_for']; ?></h3>
                                    </div>
                                    <div class="task_list_main">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                 <ul class="task_list">
                                            <li class="text-dark fw-bold"> <strong>Port Name :   -----</strong></li>
                                            <li><a href="mailto:<?php echo $row['buyer_email']; ?>"> <strong><?php echo $row['buyer_email']; ?></strong></a></li>
                                            <li><a href="tel:<?php echo $row['new_number']; ?>"> <strong> <?php echo $row['new_number']; ?></strong></a></li>
                                          
                                        </ul>
                                            </div>
                                            <div class="col-lg-6">
                                                 <ul class="task_list">
                                             <li><a href="#"> <strong>Payment Mode : <?php echo $row['payment_mode']; ?></strong></a></li>
                                            <li><a href="#"> <strong>Shipping Mode : <?php echo $row['shipping_mode']; ?></strong></a></li>

                                            <li><a href="#"> <strong>Quantity : <?php echo $row['quantity']; ?></strong></a></li>
                                        </ul>
                                            </div>
                                        </div>
                                       
                                    </div>

                                </div>
                            </div>
                            <!-- <div   class="position-absolute top-0   s_no"><p class="fw-bold text-white p-0 m-0"> <?php echo $serial; ?></p></div> -->
                        </div>
                    <?php
                        $serial++;
                    } ?>

                <?php
                }  ?>
            </div>
        </div>
    </div>
</div>





<!-- /page content -->
<?php
include_once "include1/footer.php";
?>