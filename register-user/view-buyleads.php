<?php


include_once "include/header.php";


// form 1

include "config.php";


$sql = "SELECT* FROM `user`";
$query = mysqli_query($con, $sql);
while ($row2 = mysqli_fetch_array($query)) {
    # to select all the data

    echo  "<center>" . $product_name  = $row2['product_name'] . "</center>";
    echo   $product_name  = $row2['product_name'];
}

?>
<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row">
        <div class="col-12">
            <form action="search.php" method="GET" class="my-5  d-flex">
                <input type="search" placeholder="Search Product Name / City" name="search_query" class="form-control w-75 rounded float-end">
                <input type="submit" class="btn-sm btn-success">
            </form>
        </div>
        <?php
        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve the search query
            $search_query = $_POST["search_query"];

            // Connect to your database (replace these variables with your actual database credentials)
            include "config.php";



            // Cre



        ?>

            <div class="col-12 my-4">



                <?php

                // SQL query to search for data in your database (replace 'table_name' with your actual table name and 'column_name' with the column you want to search)
                $sql1 = "SELECT * FROM `buyleads` WHERE buyer_name LIKE '%" . $search_query . "%'" . " or queiry_for LIKE '%" . $search_query . "%'";
                $result = $con->query($sql1);

                // Display the results
                if ($result->num_rows > 0) {
                    echo "<h5>Search Results From <i>$search_query</i>:</h5>";
                    echo "<ul>";
                    while ($row2 = $result->fetch_assoc()) {
                        // echo "<li>" . $row["product_name"] . "</li>"; // Display the result here
                ?>
                        <div class="col-12">
                            <form method="POST" action="get_buylead.php">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="buyleads_cards p-3 shadow-lg   rounded  text-capitalize">
                                            <h1>ritika </h1>
                                            <h5><?php echo $row2['queiry_for'] ?> <i class="fa-solid fa-check"></i></h5>
                                            <ul class="nav justify-content-between">
                                                <li class="nav-item"><?php echo $row2['buyer_location'] ?></li>
                                                <li class="nav-item"><?php echo $row2['accessed_at'] ?></li>
                                            </ul>
                                            <div class="row mt-3 table-borderless">
                                                <div class="col-lg-6">
                                                    <table class="table p-0 m-0">
                                                        <tr class=" p-0 ">
                                                            <th class=" p-0 m-0">Buyer Name</th>
                                                            <td class=" p-0 m-0">: <?php echo $row2['buyer_name'] ?></td>
                                                        </tr>
                                                        <tr class=" p-0 ">
                                                            <th class=" p-0 m-0">Quantity</th>
                                                            <td class=" p-0 m-0">: <?php echo $row2['quantity'] ?></td>
                                                        </tr>
                                                        <tr class=" p-0 ">
                                                            <th class=" p-0 m-0">Mobile Number</th>
                                                            <td class=" p-0 m-0">: +91-99******00</td>
                                                        </tr>

                                                    </table>
                                                </div>
                                                <div class="col-lg-6">
                                                    <table class="table p-0 m-0">
                                                        <tr class=" p-0 ">
                                                            <th class=" p-0 m-0"> Requirement</th>
                                                            <td class=" p-0 m-0">: Urgent</td>
                                                        </tr>

                                                    </table>
                                                </div>
                                            </div>
                                            <div class="d-block mt-5 mb-3" style="border-top: 2px dotted gray;"></div>
                                            <a href="" class="btn btn-dark text-capitalize"> <img src="include/trusted.png" height="50px" width="50px" alt="Trusted Logo"> send Requirement </a>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-12">

                            <div class="row">
                                <div class="col-12">
                                    <div class="buyleads_cards p-3 shadow-lg bg-white rounded  text-capitalize">

                                        <h5><?php echo $row['queiry_for'] ?> <i class="fa-solid fa-check"></i></h5>
                                        <ul class="nav justify-content-between">
                                            <li class="nav-item"><?php echo $row['buyer_location'] ?> </li>
                                            <li class="nav-item"><?php echo $row['accessed_at'] ?></li>
                                        </ul>
                                        <div class="row mt-3 table-borderless">
                                            <div class="col-lg-6">
                                                <table class="table p-0 m-0">
                                                    <tr class=" p-0 ">
                                                        <th class=" p-0 m-0">Buyer Name</th>
                                                        <td class=" p-0 m-0">: <?php echo $row['buyer_name'] ?></td>
                                                    </tr>
                                                    <tr class=" p-0 ">
                                                        <th class=" p-0 m-0">Quantity</th>
                                                        <td class=" p-0 m-0">: <?php echo $row['quantity'] ?></td>
                                                    </tr>
                                                    <tr class=" p-0 ">
                                                        <th class=" p-0 m-0">Mobile Number</th>
                                                        <td class=" p-0 m-0">: +91-99******00</td>
                                                    </tr>

                                                </table>
                                            </div>
                                            <div class="col-lg-6">
                                                <table class="table p-0 m-0">
                                                    <tr class=" p-0 ">
                                                        <th class=" p-0 m-0"> Requirement</th>
                                                        <td class=" p-0 m-0">: Urgent</td>
                                                    </tr>
                                                    <tr class=" p-0 ">
                                                        <th class=" p-0 m-0"> Buyer Mail</th>
                                                        <td class=" p-0 m-0 text-lowercase">: ****@gmail.com</td>
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
                                            <input type="hidden" name="accessed_at" value="<?php echo $row['accessed_at']; ?>">
                                            <button type="submit" class="btn btn-secondary text-center" style="width:200px;" name="submit"> Send Requirement</button>

                                        </form>

                                    </div>
                                </div>
                            </div>


                        </div>
            <?php
                    }
                    echo "</ul>";
                } else {
                    echo "No results found";
                }

                // Close the connection
                $con->close();
            }
            ?>

            </div>

            <?php
            include "config.php"; // database configuration
            /* Calculate Offset Code */
            if (isset($_SESSION["user_id"])) {
                $user_id = $_SESSION["user_id"];
            }
            //  $product_name =$_GET[$product_name1]  ;
            $sql = "SELECT * FROM  `buyleads` where  queiry_for  LIKE '%" . $product_name . "%'";
            $result = mysqli_query($con, $sql) or die("Query Failed.");


            if (mysqli_num_rows($result) > 0) {


                $serial =  1;
                while ($row = mysqli_fetch_assoc($result)) {


            ?>
                    <div class="col-12">

                        <div class="row">
                            <div class="col-12">
                                <div class="buyleads_cards p-3 shadow-lg bg-white rounded  text-capitalize">
                                    <h5><?php echo $row['queiry_for'] ?> <i class="fa-solid fa-check"></i></h5>
                                    <ul class="nav justify-content-between">
                                        <li class="nav-item">reet <?php echo $product_name ?></li>
                                        <li class="nav-item"><?php echo $row['accessed_at'] ?></li>
                                    </ul>
                                    <div class="row mt-3 table-borderless">
                                        <div class="col-lg-6">
                                            <table class="table p-0 m-0">
                                                <tr class=" p-0 ">
                                                    <th class=" p-0 m-0">Buyer Name</th>
                                                    <td class=" p-0 m-0">: <?php echo $row['buyer_name'] ?></td>
                                                </tr>
                                                <tr class=" p-0 ">
                                                    <th class=" p-0 m-0">Quantity</th>
                                                    <td class=" p-0 m-0">: <?php echo $row['quantity'] ?></td>
                                                </tr>
                                                <tr class=" p-0 ">
                                                    <th class=" p-0 m-0">Mobile Number</th>
                                                    <td class=" p-0 m-0">: +91-99******00</td>
                                                </tr>

                                            </table>
                                        </div>
                                        <div class="col-lg-6">
                                            <table class="table p-0 m-0">
                                                <tr class=" p-0 ">
                                                    <th class=" p-0 m-0"> Requirement</th>
                                                    <td class=" p-0 m-0">: Urgent</td>
                                                </tr>
                                                <tr class=" p-0 ">
                                                    <th class=" p-0 m-0"> Buyer Mail</th>
                                                    <td class=" p-0 m-0 text-lowercase">: ****@gmail.com</td>
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
                                        <input type="hidden" name="accessed_at" value="<?php echo $row['accessed_at']; ?>">
                                        <button type="submit" class="btn btn-secondary text-center" style="width:200px;" name="submit"> Send Requirement</button>

                                    </form>

                                </div>
                            </div>
                        </div>


                    </div>
            <?php }
            } ?>

            <div class="row fixed-bottom">
                <div class="col-12 bg-white">
                    <marquee behavior="" direction="">
                        <p> <a href=" " class="text-danger mx-3">Note : PRIME PLAN 10-Buy Leads Everymonth</a> ||
                            <a href=" " class="text-primary mx-3">Note : PRIME PRO PLAN 30-Buy Leads Everymonth</a> ||
                            <a href=" " class="text-success mx-3">Note : ULTRA PLAN 60-Buy Leads Everymonth</a> ||
                            <a href=" " class="text-warning mx-3">Note : ULTRA PRO PLAN 60-Buy Leads Everymonth</a>
                        </p>
                    </marquee>
                </div>
            </div>
    </div>
</div>





<!-- /page content -->
<?php
include_once "include/footer.php";
?>