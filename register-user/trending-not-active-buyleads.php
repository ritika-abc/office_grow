<?php


include_once "include1/header.php";


// form 1

include "config.php";
// $user_name = $_GET['user_name'];

// $sql = "SELECT* FROM `user` where `user_name`='$user_name'";
// $query = mysqli_query($con, $sql);
// while ($row2 = mysqli_fetch_array($query)) {
//     # to select all the data

// echo $product_name  = $row2['product_name'];
// }

?>
<!-- page content -->
<div class="container-fluid" role="main">
    <!-- <ul class=" nav w-100 justify-content-center bg- border bg-white text-capitalize ">-->
    <!--    <li class="nav-item"><a href="" class="nav-link text- "><b>All Types Of buylead</b></a></li>-->
    <!--    <li class="nav-item"><a href="https://growindiaexport.com/register-user/show-buyleads.php" class="nav-link text- "><b>Access Buyleads</b></a></li>-->

    <!--</ul>-->
    <!-- top tiles -->
    
    <div class="row">
        
        <div class="col-12">
            <form action="search.php" method="GET" class="my-5  d-flex">
                <input type="search" placeholder="Search Product Name / City" name="search_query" class="form-control w-75 rounded float-end">
                <input type="submit" class="btn-sm btn-success">
            </form>
        </div>

 <?php
        include "nav.php"; ?>


        <?php
        include "config.php"; // database configuration
        /* Calculate Offset Code */
        if (isset($_SESSION["user_id"])) {
            $user_id = $_SESSION["user_id"];
            $sql = "SELECT* FROM `user` where `user_id`='$user_id'";
            $query = mysqli_query($con, $sql);
            while ($row2 = mysqli_fetch_array($query)) {
                # to select all the data
                    $user_email  = $row2['user_email'];
                $item1  = $row2['item1'];
                $item2  = $row2['item2'];
                $item3  = $row2['item3'];
                $plan1  = $row2['plan'];
                $status  = $row2['status'];
                $product_name  = $row2['product_name'];
            }
        }


        // $sql = "SELECT * FROM  `buyleads` where  queiry_for  LIKE '%" . $product_name . "%'";
        // $result = mysqli_query($con, $sql) or die("Query Failed.");





 $serial =  1;
        $sql = "SELECT * FROM  `buyleads` ORDER BY $serial DESC ";
        $result = mysqli_query($con, $sql) or die("Query Failed.");
        if (mysqli_num_rows($result) > 0) {


           
            while ($row = mysqli_fetch_assoc($result)) {


        ?>
                <div class="col-12 my-3 ">
                    <div class="row">
                        <div class="col-lg-9 ">
                            <div class="buyleads_cards p-3 shadow-lg bg-white rounded border-start border-dark text-capitalize" style=" ">
                                <!--<h6>Product Name : ?php echo $product_name ?></h6>-->
                                <h5 class=" " style="color :#2f3394;font-weight: bold;"><?php echo $row['product_name'] ?> <img src="trusted.png" alt="" height="auto" width="10%"> </h5>
                                <ul class="nav justify-content-between">
                                    <li class="nav-item" title="<?php echo $row['country_name'] ?>"> <i class="fa-solid fa-location-dot " style="color: #3fb635;margin-right:10px"></i> <?php echo $row['country_name'] ?> </li>
                                     
                                </ul>
                                <div class="row  mt-3 table-borderless">
                                    <div class="col-lg-6  ">
                                        <div class="row   text-capitalize">
                                            <div class="col-6">
                                                <p class="m-0 p-0" style="color: #055faf;"><b>Buyer Name : </b></p>
                                            </div>
                                            <div class="col-6">
                                                <p class="m-0 p-0 text-dark"> <?php echo $row['buyer_name'] ?> </p>
                                            </div>
                                        </div>
                                        <div class="row   text-capitalize">
                                            <div class="col-6">
                                                <p class="m-0 p-0" style="color: #055faf;"><b>Quantity : </b></p>
                                            </div>
                                            <div class="col-6">
                                                <p class="m-0 p-0 text-dark"> <?php echo $row['quantity'] ?> </p>
                                            </div>
                                        </div>
                                        <div class="row   text-capitalize">
                                            <div class="col-6">
                                                <p class="m-0 p-0" style="color: #055faf;"><b>Mode Of Payment: </b></p>
                                            </div>
                                            <div class="col-6">
                                                <p class="m-0 p-0 text-dark"> <?php echo $row['payment_mode'] ?> </p>
                                            </div>
                                        </div>
                                        <!--  -->
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row   text-capitalize">
                                            <div class="col-6">
                                                <p class="m-0 p-0 " style="color: #055faf;"><b>Mobile Number : </b></p>
                                            </div>
                                            <div class="col-6">
                                                <p class="m-0 p-0 text-dark"> <?php
if (!empty($row['number'])) {
    echo substr($row['number'], 0, 3) . '...';
} else {
    echo 'N/A';
}
?> </p>
                                            </div>
                                        </div>
                                        <div class="row   text-capitalize">
                                            <div class="col-6">
                                                <p class="m-0 p-0" style="color: #055faf;"><b>Buyer Email : </b></p>
                                            </div>
                                            <div class="col-6">
                                                <p class="m-0 p-0 text-dark">***@gmail.com </p>
                                            </div>
                                        </div>
                                         <div class="row   text-capitalize">
                                            <div class="col-6">
                                                <p class="m-0 p-0" style="color: #055faf;"><b>Shipping Mode: </b></p>
                                            </div>
                                            <div class="col-6">
                                                <p class="m-0 p-0 text-dark"> <?php echo $row['shipping_mode'] ?> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-block mt-5 mb-3" style="border-top: 2px dotted gray;"></div>
                                 <form method="POST" action="get_buylead.php">
                                    <input type="hidden" name="buyleads_id" value="<?php echo $row['buyleads_id']; ?>">
                                    <input type="hidden" name="buyer_email" value="<?php echo $row['buyer_email']; ?>">
                                    <input type="hidden" name="queiry_for" value="<?php echo $row['queiry_for']; ?>">
                                    <input type="hidden" name="number" value="<?php echo $row['number']; ?>">
                                    <input type="hidden" name="buyer_name" value="<?php echo $row['buyer_name']; ?>">
                                    <input type="hidden" name="buyer_location" value="<?php echo $row['buyer_location']; ?>">
                                    <input type="hidden" name="quantity" value="<?php echo $row['quantity']; ?>">
                                    <input type="hidden" name="payment_mode" value="<?php echo $row['payment_mode']; ?>">
                                    <input type="hidden" name="shipping_mode" value="<?php echo $row['shipping_mode']; ?>">
                                    <input type="hidden" name="accessed_at" value="<?php echo $row['accessed_at']; ?>">
                                     <a href="tel:" class="btn btn-secondary" title="Active Your Plan">Client Details</a>
                                  

                                </form>

                            </div>
                        </div>
                    </div>


                </div>
        <?php }
        } ?>


    </div>
</div>





<!-- /page content -->
<?php
include_once "include1/footer.php";
// include "include1/footer.php";
?>