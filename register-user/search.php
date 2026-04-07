<?php


include_once "include1/header.php";


// form 1

include "config.php";



?>
<!-- page content -->
<div class="container-fluid" role="main">
    <!-- top tiles -->
    <div class="row ">
        <div class="col-12">
            <form action="search.php" method="GET" class="my-5  d-flex">
                <input type="search" placeholder="Search Product Name / City" name="search_query" class="form-control w-75 rounded float-end">
                <input type="submit" class="btn-sm btn-success">
            </form>
        </div>
        <?php
        // Check if the form is submitted
        if (isset($_GET['search_query'])) {
            // Retrieve the search query
            echo   $search_query = $_GET["search_query"];

            // Connect to your database (replace these variables with your actual database credentials)
            include "config.php";

            // Create connection



            $sql = "SELECT* FROM `user` where `user_id`='$user_id'";
            $query = mysqli_query($con, $sql);
            while ($row2 = mysqli_fetch_array($query)) {
                # to select all the data
                $status = $row2['status'];
                $product_name  = $row2['product_name'];
            }


        ?>
            <?php
            // if (isset($_SESSION["user_id"])) {
            //     $user_id = $_SESSION["user_id"];
            // }
            // include "../config.php";
            // $se = "SELECT * FROM `user` where `user_id`='$user_id'";
            // $qu = mysqli_query($con, $se);
            // while ($row = mysqli_fetch_array($qu)) {
            //     $status = $row['status'];
            //     echo $user_id = $row['user_id'];
            // }
            ?>

            <div class="col-12 my-4">



                <?php
 $sno = 1;

                // SQL query to search for data in your database (replace 'table_name' with your actual table name and 'column_name' with the column you want to search)
                $sql1 = "SELECT * FROM `buyleads` WHERE	buyer_location LIKE '%" . $search_query . "%'" . " or queiry_for LIKE '%" . $search_query . "%'   ORDER BY  $sno  DESC  ";
                $result = $con->query($sql1);

                // Display the results
                if ($result->num_rows > 0) {
                    echo "<h5>Search Results From <i>$search_query</i>:</h5>";
                    echo "<ul class='p-0 m-0'>";
                   
                    while ($row2 = $result->fetch_assoc()) {
                        // echo "<li>" . $row["product_name"] . "</li>"; // Display the result here
                ?>
                        <div class="col-12 my-5 ">
                            <div class="row">
                                <div class="col-lg-9 ">
                                    <div class="buyleads_cards p-3 shadow-lg bg-white rounded   border-dark text-capitalize" style="border:1px solid black">
                                        <!--<h6>Product Name : ?php echo $product_name ?></h6>-->
                                        <h5 class=" " style="color :#2f3394;font-weight: bold;"><?php echo $row2['queiry_for']  ?> <img src="trusted.png" alt="" height="auto" width="10%"> </h5>
                                        <ul class="nav justify-content-between ">
                                            <li class="nav-item" title="<?php echo $row2['country_name'] ?>"> <i class="fa-solid fa-location-dot " style="color: #3fb635;margin-right:10px"></i> <?php echo $row2['country_name'] ?> </li>
                                            <li class="nav-item"><?php echo $row2['accessed_at'] ?></li>
                                        </ul>
                                         <div class="row  mt-3 table-borderless">
                                    <div class="col-lg-6  ">
                                        <div class="row   text-capitalize">
                                            <div class="col-6">
                                                <p class="m-0 p-0" style="color: #055faf;"><b>Buyer Name : </b></p>
                                            </div>
                                            <div class="col-6">
                                                <p class="m-0 p-0 text-dark"> <?php echo $row2['buyer_name'] ?> </p>
                                            </div>
                                        </div>
                                        <div class="row   text-capitalize">
                                            <div class="col-6">
                                                <p class="m-0 p-0" style="color: #055faf;"><b>Quantity : </b></p>
                                            </div>
                                            <div class="col-6">
                                                <p class="m-0 p-0 text-dark"> <?php echo $row2['quantity'] ?> </p>
                                            </div>
                                        </div>
                                        <div class="row   text-capitalize">
                                            <div class="col-6">
                                                <p class="m-0 p-0" style="color: #055faf;"><b>Mode Of Payment:    </b></p>
                                            </div>
                                            <div class="col-6">
                                                <p class="m-0 p-0 text-dark"> <?php echo $row2['payment_mode'] ?> </p>
                                            </div>
                                        </div>
                                        <!--  -->
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row   text-capitalize">
                                            <div class="col-6">
                                                <p class="m-0 p-0" style="color: #055faf;"><b>Mobile Number : </b></p>
                                            </div>
                                            <div class="col-6">
                                                <p class="m-0 p-0 text-dark" style="    filter: blur(2px);">XXX-97654XXXXX  </p>
                                            </div>
                                        </div>
                                        <div class="row   text-capitalize">
                                            <div class="col-6">
                                                <p class="m-0 p-0" style="color: #055faf;"><b>Buyer Email : </b></p>
                                            </div>
                                            <div class="col-6">
                                                <p class="m-0 p-0 text-dark text-lowercase">***@gmail.com </p>
                                            </div>
                                        </div>
                                         <div class="row   text-capitalize">
                                            <div class="col-6">
                                                <p class="m-0 p-0" style="color: #055faf;"><b>Mode Of Shipping:    </b></p>
                                            </div>
                                            <div class="col-6">
                                                <p class="m-0 p-0 text-dark"> <?php echo $row2['shipping_mode'] ?> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                        <div class="d-block mt-5 mb-3" style="border-top: 2px dotted gray;"></div>
                                        <form method="POST" action="get_buylead.php">
                                            <input type="hidden" name="buyleads_id" value="<?php echo $row2['buyleads_id']; ?>">
                                            <input type="hidden" name="buyer_email" value="<?php echo $row2['buyer_email']; ?>">
                                            <input type="hidden" name="queiry_for" value="<?php echo $row2['queiry_for']; ?>">
                                            <input type="hidden" name="number" value="<?php echo $row2['number']; ?>">
                                            <input type="hidden" name="buyer_name" value="<?php echo $row2['buyer_name']; ?>">
                                            <input type="hidden" name="buyer_location" value="<?php echo $row2['buyer_location']; ?>">
                                            <input type="hidden" name="accessed_at" value="<?php echo $row2['accessed_at']; ?>">
                                            <input type="hidden" name="quantity" value="<?php echo $row2['quantity']; ?>">
                                            <input type="hidden" name="payment_mode" value="<?php echo $row2['payment_mode']; ?>">
                                            <input type="hidden" name="shipping_mode" value="<?php echo $row2['shipping_mode']; ?>">
                                            <!-- <button type="submit" class="btn btn-secondary text-center" style="width:200px;" name="submit"> Send Requirement</button> -->
                                            <?php //echo ($status == '1') ? '<li><a href="view-buyleads.php"> Buyleads</a></li>' : '<li><a href="all-buyleads.php"> Buyleads</a></li>'; ?>
                                            <?php  echo ($status == '1') ? '<button type="submit" class="btn btn-secondary text-center" style="width:200px;" name="submit">Buyer Details   </button>' : '<a href="tel:+91-9211078505" class="btn btn-secondary text-center" style="width:200px;" >Buyer Details  </a>'; ?>

                                        </form>

                                    </div>
                                </div>
                            </div>


                        </div>
            <?php
                   $sno++;  }
                    echo "</ul>";
                } else {
                    echo "No results found";
                }

                // Close the connection
                $con->close();
               
            }
            ?>

            </div>



           
    </div>
</div>





<!-- /page content -->
<?php
include_once "include1/footer.php";
?>