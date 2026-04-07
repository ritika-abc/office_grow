<?php


include_once "include/header.php";


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
<div class="right_col" role="main">
     <ul class=" nav w-100 justify-content-center bg- border bg-white text-capitalize ">
        <li class="nav-item"><a href="" class="nav-link text- "><b>All Types Of buylead</b></a></li>
        <li class="nav-item"><a href="https://growindiaexport.com/register-user/show-buyleads.php" class="nav-link text- "><b>Access Buyleads</b></a></li>
      
    </ul>
    <!-- top tiles -->
    <div class="row">
        <div class="col-12">
            <form action="search.php" method="GET" class="my-5  d-flex">
                <input type="search" placeholder="Search Product Name / City" name="search_query" class="form-control w-75 rounded float-end">
                <input type="submit" class="btn-sm btn-success">
            </form>
        </div>

 


        <?php
        include "config.php"; // database configuration
        /* Calculate Offset Code */
        if (isset($_SESSION["user_id"])) {
            $user_id = $_SESSION["user_id"];
            $sql = "SELECT* FROM `user` where `user_id`='$user_id'";
            $query = mysqli_query($con, $sql);
            while ($row2 = mysqli_fetch_array($query)) {
                # to select all the data

                 $product_name  = $row2['product_name'];
               
            }
        }
 

        $sql = "SELECT * FROM  `buyleads`";
        $result = mysqli_query($con, $sql) or die("Query Failed.");


        if (mysqli_num_rows($result) > 0) {


            $serial =  1;
            while ($row = mysqli_fetch_assoc($result)) {


        ?>
                <div class="col-12 my-3 ">
                    <div class="row">
                        <div class="col-lg-9 ">
                            <div class="buyleads_cards p-3 shadow-lg bg-white rounded border-start border-dark text-capitalize" style=" ">
                                <!--<h6>Product Name : ?php echo $product_name ?></h6>-->
                                <h5 class=" " style="color :#2f3394;font-weight: bold;"><?php echo $row['queiry_for'] ?> <img src="trusted.png" alt="" height="auto" width="10%"> </h5>
                                <ul class="nav justify-content-between">
                                    <li class="nav-item" title="<?php echo $row['country_name'] ?>"> <i class="fa-solid fa-location-dot " style="color: #3fb635;margin-right:10px"></i> <?php echo $row['country_name'] ?> </li>
                                    <li class="nav-item"><?php echo $row['accessed_at'] ?></li>
                                </ul>
                                <div class="row mt-3 table-borderless">
                                    <div class="col-lg-6">
                                        <table class="table p-0 m-0">
                                            <tr class=" p-0 ">
                                                <th class=" p-0 m-0  " style="color:#055faf;">Buyer Name :</th>
                                                <td class=" p-0 m-0"> <?php echo $row['buyer_name'] ?></td>
                                            </tr>
                                            <tr class=" p-0 ">
                                                <th class=" p-0 m-0 " style="color:#055faf;">Quantity : </th>
                                                <td class=" p-0 m-0"><?php echo $row['quantity'] ?></td>
                                            </tr>
                                           
                                        </table>
                                    </div>
                                    <div class="col-lg-6">
                                        <table class="table p-0 m-0">
                                            <tr class=" p-0 ">
                                                <th class=" p-0 m-0 " style="color:#055faf;">Mobile Number :</th>
                                                <td class=" p-0 m-0"> +91-99*********00</td>
                                            </tr>

                                            <tr class=" p-0 ">
                                                <th class=" p-0 m-0 " style="color:#055faf;">Buyer Email : </th>
                                                <td class=" p-0 m-0 text-lowercase">***@gmail.com</td>
                                            </tr>

                                        </table>
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
                                    <input type="hidden" name="accessed_at" value="<?php echo $row['accessed_at']; ?>">
                                    <a href="tel:" class="btn btn-secondary" title="Active Your Plan">Client Details</a>

                                </form>

                            </div>
                        </div>
                    </div>


                </div>
        <?php }
        } ?>

        <!--<div class="row fixed-bottom">-->
        <!--    <div class="col-12 bg-white">-->
        <!--        <marquee behavior="" direction="">-->
        <!--            <p> <a href=" " class="text-danger mx-3"> $ Note : PRIME PLAN 10-Buy Leads Everymonth</a> ||-->
        <!--                <a href=" " class="text-primary mx-3">Note : PRIME PRO PLAN 30-Buy Leads Everymonth</a> ||-->
        <!--                <a href=" " class="text-success mx-3">Note : ULTRA PLAN 60-Buy Leads Everymonth</a> ||-->
        <!--                <a href=" " class="text-warning mx-3">Note : ULTRA PRO PLAN 60-Buy Leads Everymonth</a>-->
        <!--            </p>-->
        <!--        </marquee>-->
        <!--    </div>-->
        <!--</div>-->
    </div>
</div>





<!-- /page content -->
<?php
include_once "include/footer.php";
?>