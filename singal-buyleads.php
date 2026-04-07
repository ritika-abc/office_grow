



<?php
if (!isset($_GET['product_name']) ) {
    $segments = explode('/', trim($_SERVER['PATH_INFO'], '/'));
    if (!empty($segments[0])) {
        $_GET['product_name'] = $segments[0];
    }
}
?>
   
 <?php
                    // Database connection parameters
                    include "https://growindiaexport.com/config.php";
                     $product_namea = $_GET['product_name'];
                    $pro_name_seo = strtolower(str_replace("+", " ", $product_namea));
                //     $sql = 'SELECT * FROM buyleads  where `product_name` ="$product_name"';
                //   $q  = mysqli_query($con,$sql);
                //     // Fetch and output the results
                //     while ($row = mysqli_fetch_array($q)) {
                //         $product_name = $row['product_name'];
 
                //     }
                    
                    ?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="https://growindiaexport.com/image/favicon.png">
    <link rel="mask-icon" href="image/favicon.png">
    <link rel="canonical" href="https://growindiaexport.com/buyleads.php">
    <link rel="stylesheet" href="https://growindiaexport.com/assets/css/style.css">
    <link rel="stylesheet" href="https://growindiaexport.com/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://growindiaexport.com/fontawesome-free-6.5.2-web/css/all.min.css">
    <link rel="stylesheet" href="https://growindiaexport.com/assets/css/megadrop.css">

    <!--  SEO TITLE -->
    <title>Export & Trade <?php echo $pro_name_seo ?> with Verified Buyers and Global Suppliers</title>

    <!--  META DESCRIPTION -->
    <meta name="description" content="Export and trade <?php echo $pro_name_seo ?> with global buyers and suppliers. Connect with verified businesses, expand your network, and grow your export opportunities.">

    <!--  META KEYWORDS -->
    <meta name="keywords" content="Export <?php echo $pro_name_seo ?>, <?php echo $pro_name_seo ?> Suppliers, <?php echo $pro_name_seo ?> Exporters, Global Trade for <?php echo $pro_name_seo ?>, <?php echo $pro_name_seo ?>  Importers, <?php echo $pro_name_seo ?> Business, International <?php echo $pro_name_seo ?> Supply">



    <style>
        /* Optional: Some basic styling */
        #buyleads {
            display: none;
            /* Hide buyleads by default */
            margin-top: 10px;
            padding: 10px;

        }

        .none {
            display: none;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    include "navbar.php";
    ?>
    <div class="container-fluid my-2">
                <div class="row">
                        <div class="col-12">
                                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                                <li class="breadcrumb-item"><a href="https://growindiaexport.com/buyleads.php">Trending Buyleads</a></li>

                                                <!--  -->
                                                                                                        <li class="breadcrumb-item"><a class="text-capitalize" href="#"><?php echo  $pro_name_seo ?></a></li>

                                                                                        </ol>
                                </nav>
                        </div>
                </div>
        </div>
 
    <!-- top nav start here -->
    <!--   <section class="d-none d-sm-none d-md-none d-lg-block">-->
    <!--<div class="header_top " style="border-bottom: 2px dashed white;background:rgb(11 53 94) ;">-->
    <!--           <ul class="nav p-3  justify-content-center">-->
    <!--               <li class="nav-item "><a href="/" class="nav-link"><img src="logo/logo.png" height="50px" width="180px" alt="http://growindiaexport.com/"></a></li>-->
    <!--           </ul>-->
    <!--       </div>-->
    <!--   </section>-->
    <!-- logo here -->

    <!-- sm mobile nav start here -->
    <!-- sm mobile nav start here -->

    <!-- sm mobile nav end here -->



    <!-- Your navigation and other HTML structure -->
    <!-- ... -->

    <div class="container mt-4 bg-light py-5 rounded">
        <div class="row">
            <div class="col-4 d-none d-sm-none d-md-none d-lg-block">



                <div class="buyleads mb-3" style="height: 400px; overflow-Y:scroll">
                    <div class="buy_leads shadow-lg border  rounded p -2">
                        <ul class="text-capitalize  list-group ">

                            <?php
                            // Database connection parameters
                            include "./config.php";



                            // SQL query
                            $sql = 'SELECT  product_name , COUNT(product_name) as total_sales FROM buyleads  GROUP BY product_name ORDER BY buyleads_id DESC';

                            // Execute the query
                            $result = $con->query($sql);

                            // Check for errors
                            if (!$result) {
                                die('Query failed: ' . $con->error);
                            }

                            // Fetch and output the results
                            while ($row = $result->fetch_assoc()) {
                                $product_name = $row['product_name'];

                                $str_search =  strtolower(str_replace(" ", "+", $product_name));
                                echo '<li class="list-group-item "><a class="text-dark    " href="https://growindiaexport.com/search-buyleads.php?searchType=buyleads&query=' . $str_search . '"> <b style="color:rgb(46 80 138) !important">' . $row['product_name'] . '</b><span class=" "  >    (Buyleads: ' . $row['total_sales'] . ') </span></a></li>';
                            }

                            // Free the result set
                            $result->free();

                            // Close the connection
                            $con->close();
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="serch_buyleads bg-white p-3 rounded">
                    <form id="searchForm">

                        <div class="buyleads_box  border ">
                            <label for="options" class="sticky-top fw-bold fs-5  w-100 p-2 text-white" style="background-color: rgb(46 80 138) !important;">State</label>
                            <div class="mt-2 p-3" style="height: 300px;overflow:scroll">

                                <?php

                                include "config.php";
                                $sel = "SELECT * FROM `states`";
                                $q = mysqli_query($con, $sel);
                                while ($row = mysqli_fetch_array($q)) {
                                ?>
                                    <a href="https://growindiaexport.com/search-buyleads.php?query=<?php echo  $query ?>&state_name=<?php echo $row['state_name'] ?>" class="d-block "><?php echo $row['state_name'] ?></a>
                                <?php } ?>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="serch_buyleads bg-white p-3 rounded">
                    <form id="searchForm">

                        <div class="buyleads_box  border ">
                            <label for="options" class="sticky-top fw-bold fs-5  w-100 p-2 text-white" style="background-color: rgb(46 80 138) !important;">Country</label>
                            <div class="mt-2 p-3" style="height: 300px;overflow:scroll">

                                <?php
                                include "config.php";
                                $sel = "SELECT * FROM `countries`";
                                $q = mysqli_query($con, $sel);
                                while ($row = mysqli_fetch_array($q)) {                                ?>
                                    <a href="https://growindiaexport.com/search-buyleads.php?query=<?php echo  $query ?>&country_name=<?php echo $row['country_name'] ?>" class="d-block"><?php echo $row['country_name'] ?></a>
                                <?php } ?>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <div class="col-lg-8">
                <form action="search-buyleads.php" method="GET" class="d-flex d-lg-none mb-3">
                    <div class="input-group mb-3">
                        <input name="query" type="text" class="form-control" placeholder="Search Buyleads">
                        <button class="btn btn-dark" type="submit">Search</button>
                    </div>
                </form>

                <div class="old">
                    <div class="right_col" role="main">
                        <h1 class="fs-5">Expand Your <a href="/"><?php echo $pro_name_seo ?></a> Business – Export, Supply & Trade Globally</h1>
                        <p style="font-size:13px">
                            Join a growing network of exporters, suppliers, and global buyers working within the <a href="/"><?php echo $pro_name_seo ?></a>  industry. From raw material sourcing to large-scale international exports, this platform helps you find trusted trade partners and reliable sourcing options. Reach out to businesses looking for quality <a href="/"><?php echo $pro_name_seo ?></a> and boost your visibility in the global market.
                        </p>

                        <!-- top tiles -->
                        <div class="row">
 

                                <?php
                                $serial =  1;
                                $limit = 100;
                                if (isset($_GET['page'])) {
                                    $page = $_GET['page'];
                                } else {
                                    $page = 1;
                                }
                                $offset = ($page - 1) * $limit;
                                include "config.php"; // database configuration
                                /* Calculate Offset Code */
                                if (isset($_SESSION["user_id"])) {
                                    $user_id = $_SESSION["user_id"];
                                }
                                //  $product_name =$_GET[$product_name1]  ;
                               $sql = "SELECT * FROM `buyleads` WHERE `product_name` = '$pro_name_seo' ORDER BY buyleads_id DESC LIMIT {$offset}, {$limit}";

                                $result = mysqli_query($con, $sql) or die("Query Failed.");


                                if (mysqli_num_rows($result) > 0) {


                                    $serial = $offset + 1;
                                    while ($row = mysqli_fetch_assoc($result)) {


                                ?>
                                        <div class="col-12 mb-4">
                                            <div class="row">
                                                <div class="col-12 my-3 ">
                                                    <div class="row">
                                                        <div class="col-12 ">
                                                            <div class="buyleads_cards p-3 shadow-lg bg-white rounded    text-capitalize" style=" ">

                                                                <h5 class=" " style="color :#2f3394;font-weight: bold;">  <?php     echo $row['product_name'] ?> <img src="trusted.png" alt="" height="auto" width="10%"> </h5>
                                                                <h6> <?php echo $row['queiry_for'] ?></h6>
                                                                <ul class="nav justify-content-between">
                                                                    <li class="nav-item" title="<?php echo $row['state_name'] ?>"> <i class="fa-solid fa-location-dot " style="color: #3fb635;margin-right:10px"></i> <?php echo $row['state_name']  . " . " . $row['country_name'] ?> </li>

                                                                </ul>
                                                                <div class="row  mt-3 table-borderless">
                                                                    <div class="col-lg-6  ">

                                                                        <div class="row   text-capitalize">
                                                                            <div class="col-6">
                                                                                <p class="m-0 p-0" style="color: #055faf;"><b>Port Name : </b></p>
                                                                            </div>
                                                                            <div class="col-6">
                                                                                <p class="m-0 p-0 text-dark"> </p>
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
                                                                                <p class="m-0 p-0" style="color: #055faf;"><b>Number : </b></p>
                                                                            </div>
                                                                            <div class="col-6">
                                                                                <p class="m-0 p-0 text-dark text-capitalize"> N/A</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row   text-capitalize">
                                                                            <div class="col-6">
                                                                                <p class="m-0 p-0" style="color: #055faf;"><b>Email : </b></p>
                                                                            </div>
                                                                            <div class="col-6">
                                                                                <p class="m-0 p-0 text-dark text-lowercase">***@gmail.com </p>
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

                                                                <a href="https://growindiaexport.com/supplier-register.php" class="btn btn-secondary" style="background:#e77702;">Supplier Detail</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                <?php
                                        $serial++;
                                    }
                                }

                                // show pagination
                                $sql1 = "SELECT * FROM `buyleads`  WHERE `product_name` = '$pro_name_seo' ";
                                $result1 = mysqli_query($con, $sql1) or die("Query Failed.");

                                if (mysqli_num_rows($result1) > 0) {

                                    $total_records = mysqli_num_rows($result1);

                                    $total_page = ceil($total_records / $limit);

                                    echo '<ul class="pagination ">';
                                    if ($page > 1) {
                                        echo '<li class="page-item"><a class="page-link" href="https://growindiaexport.com/buyleads.php?page=' . ($page - 1) . '">Prev</a></li>';
                                    }
                                    for ($i = 1; $i <= $total_page; $i++) {
                                        if ($i == $page) {
                                            $active = "active";
                                        } else {
                                            $active = " ";
                                        }
                                        echo '<li class="page-item ' . $active . '"><a class="page-link"  href="https://growindiaexport.com/buyleads.php?page=' . $i . '">' . $i . '</a></li>';
                                    }
                                    if ($total_page > $page) {
                                        echo '<li class="page-item"><a class="page-link" href="https://growindiaexport.com/buyleads.php?page=' . ($page + 1) . '">Next</a></li>';
                                    }

                                    echo '</ul>';
                                }



                                ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Your scripts -->
    <script>
        $(document).ready(function() {
            $('#searchForm').submit(function(event) {
                event.preventDefault(); // Prevent form submission

                var query = $('#searchInput').val(); // Get the search input value
                var selectedOption = $('#options').val(); // Get the selected option value

                // Perform AJAX request
                $.ajax({
                    url: 'fetch_buyleads.php',
                    type: 'POST',
                    data: {
                        query: query,
                        selectedOption: selectedOption
                    },
                    success: function(response) {
                        // Update the buyleads div with the response
                        $('#buyleads').html(response);
                        $('#buyleads').slideDown(); // Show the buyleads div
                    }
                });
            });

            // Add event listener for 'change' event on select element
            $('#options').change(function() {
                var selectedOption = $(this).val();

                if (selectedOption === 'none') {
                    $('#buyleads').slideUp(); // Hide buyleads if 'Select an option' is selected
                } else {
                    // Perform AJAX request to fetch buyleads based on selected option
                    $.ajax({
                        url: 'fetch_buyleads.php',
                        type: 'POST',
                        data: {
                            selectedOption: selectedOption
                        },
                        success: function(response) {
                            // Update the buyleads div with the response
                            $('#buyleads').html(response);
                            $('#buyleads').slideDown(); // Show the buyleads div
                            $('.old').addClass('none');

                        }
                    });
                }
            });
        });
    </script>


    <?php include "footer.php"; ?>