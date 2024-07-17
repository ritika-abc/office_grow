<?php
if (isset($_POST['search'])) {
    // Retrieve the search query
    $search_query = $_POST["search_query"];

    // Connect to your database (replace these variables with your actual database credentials)
    include "config.php";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <link rel="stylesheet" href="assets/css/megadrop.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/vendor/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/vendor/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
        <script src="assets/vendor/OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js"></script>
        <script src="assets/vendor/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>

        <style>
                body {
                        background-color: #fdfdfd !important;
                        font-family: "Roboto", sans-serif;
                }
                 a{
                    text-decoration:none !important;
                }
                

        </style>
</head>

<body>

  <!-- top nav start here -->
         <section class="d-none d-sm-none d-md-none d-lg-block">
        <div class="top_nav">
                <div class="container">
                        <div class="row">
                                <div class="col-12">
                                        <ul class="nav ">
                                                <li class="nav-item"><a href="supplier-login.php" class="btn btn-dark mt-1"> Login Supplier </a></li>
                                                <li class="nav-item   w-50"><a href="" class="nav-link text-white">
                                                                <marquee behavior="" direction="">Lorem, ipsum dolor sit amet consectetur adipisicing
                                                                        elit. Quisquam, et.</marquee>
                                                        </a></li>
                                                <li class="nav-item ms-auto "><a href="tel:7827514754" class="nav-link  text-white">+91 78275 14754</a></li>
                                                <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                For Buyers
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="post-requirement.php">Post Requirement</a></li>
                                                                <li><a class="dropdown-item" href="all-category.php">Browse Suppliers</a></li>
                                                                <li>
                                                                        <hr class="dropdown-divider">
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">FAQ</a></li>
                                                        </ul>
                                                </li>
                                                <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                For Seller
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="supplier-register.php">Sell Your Product / <small class="text-danger">Register Now</small></a></li>
                                                                <li><a class="dropdown-item" href="#">New Buyleads </a></li>
                                                                <li>
                                                                        <hr class="dropdown-divider">
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Seller FAQ</a></li>
                                                        </ul>
                                                </li>
                                        </ul>
                                </div>
                        </div>
                </div>
        </div>
        <!-- top nav end here -->

        <!-- logo here -->
        <div class="header_top bg-white">

                <ul class="nav p-3 border shadow-sm">
                        <li class="nav-item me-auto"><a href="" class="nav-link"><img src="assets/image/logo/logo.webp" height="50px" width="180px" alt=""></a></li>
                        <li class="nav-item mt-3">
                                <form action="search-product.php" method="GET">
                                        <div class="input_box   ">
                                                <input type="search" placeholder="Search Here By Product Name / Company Name" name="query" class="p-2 px-3 border-end">
                                                <button class="px-2" type="submit">Submit</button>
                                        </div>
                                </form>
                        </li>
                        <li class="nav-item  "><a href="" class="nav-link"> <a href="post-requirement.php" class="btn btn-primary px-3 mx-2 rounded-pill">Post Your Buy Requirement</a></a></li>
                       
                        <!--<li class="nav-item mt-2 mx-3"><a href="" class=" ">-->
                        <!--                <div class="user_icon text-center">-->
                        <!--                        <img src="image/icon/mailgif.gif" height="25px" width="25px" alt=""> <br>-->
                        <!--                        <a href="" class="text-decoration-none"><small>Sign In</small></a> / <a href="" class="text-decoration-none"><small>Join</small></a>-->

                        <!--                </div>-->
                        <!--        </a>-->
                        <!--</li>-->
                        <!--<li class="nav-item mt-2 mx-2"><a href="" class=" ">-->
                        <!--                <div class="user_icon text-center">-->
                        <!--                        <img src="image/icon/user.png" height="25px" width="25px" alt=""> <br>-->
                        <!--                        <a href="" class="text-decoration-none"> <a href="" class="text-decoration-none"><small>Message</small></a>-->

                        <!--                </div>-->
                        <!--        </a>-->
                        <!--</li>-->
                        <!--<li class="nav-item mt-2 mx-2"><a href="" class=" ">-->
                        <!--                <div class="user_icon text-center">-->
                        <!--                        <img src="image/icon/fastcartgif.gif" height="25px" width="25px" alt=""> <br>-->
                        <!--                        <a href="" class="text-decoration-none"> <a href="" class="text-decoration-none"><small>Inquiry-->
                        <!--                                                Basket</small></a>-->

                        <!--                </div>-->
                        <!--        </a>-->
                        <!--</li>-->
                </ul>
        </div>
        </section>
        <!-- logo here -->

        <!-- sm mobile nav start here -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary d-flex d-sm-flex d-md-flex d-lg-none">
                <div class="container-fluid">
                        <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                                        </li>
                                        <li class="nav-item">
                                                <a class="nav-link" href="#">Link</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Dropdown
                                                </a>
                                                <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li>
                                                                <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                </ul>
                                        </li>
                                        <li class="nav-item">
                                                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                                        </li>
                                </ul>
                                <form class="d-flex" role="search">
                                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                        <button class="btn btn-outline-success" type="submit">Search</button>
                                </form>
                        </div>
                </div>
        </nav>
        <!-- sm mobile nav end here -->
        <!-- lg nav bar start here -->


<?php

include "config.php"; // Assuming this file connects to your database ($con)

// Check if connection to database was successful
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$select = "SELECT 
c.cat_name, c.cat_id,
s.sub_id, s.sub_cat_name, s.sub_cat_image,
GROUP_CONCAT(CONCAT_WS(':', i.inner_cat_id, i.inner_cat_name) SEPARATOR '|') AS inner_categories
FROM 
category c
LEFT JOIN 
sub_cat s ON c.cat_id = s.cat_id
LEFT JOIN 
inner_cat i ON s.sub_id = i.sub_id
GROUP BY 
c.cat_id, s.sub_id";

$result = mysqli_query($con, $select);

if (!$result) {
    die("Query failed: " . mysqli_error($con));
}

$categories = array(); // Array to store categories and their subcategories

while ($row = mysqli_fetch_array($result)) {
    $cat_name = $row['cat_name'];
    $cat_id = $row['cat_id'];
    $sub_id = $row['sub_id'];
    $sub_cat_name = $row['sub_cat_name'];
    $sub_cat_image = $row['sub_cat_image']; // Fetch sub_cat_image
    $inner_categories_raw = explode('|', $row['inner_categories']); // Convert string to array

    $inner_categories = array();
    foreach ($inner_categories_raw as $inner_cat_string) {
        list($inner_cat_id, $inner_cat_name) = explode(':', $inner_cat_string);
        $inner_categories[] = array(
            'inner_cat_id' => $inner_cat_id,
            'inner_cat_name' => $inner_cat_name
        );
    }

    // Store subcategories and inner categories grouped by categories and subcategories
    if (!isset($categories[$cat_name])) {
        $categories[$cat_name] = array();
    }

    $categories[$cat_name][] = array(
        'cat_id' => $cat_id,
        'sub_id' => $sub_id,
        'sub_cat_name' => $sub_cat_name,
        'sub_cat_image' => $sub_cat_image,
        'inner_categories' => $inner_categories
    );
}
// foreach
 ?>
<?php

foreach ($categories as $category => $subcategories) {
?>
    <div class="container-fluid margin m-auto my-5 " style="width: 98%;">
        <div class="row cat_container ">
            <div class="col-12 border py-3 px-3  bg-white rounded shadow-lg">
                <a href="category.php?cat_id=<?php echo $subcategories[0]['cat_id'] ?>">
                    <h4 class=""><?php echo $category ?></h4>
                </a>
                <div class="row mt-3">
                    <div class="col-12 col-md-12">
                        <div class="row">
                            <!-- sub cat -->
                            <?php foreach ($subcategories as $subcategory) { ?>
                                <div class="col-12 col-md-6 col-lg-3 my-3">
                                    <div class="card p-3">
                                        <a href="sub-cat.php?sub_id=<?php echo  $subcategory['sub_id'] ?>" class="text-decoration-none" style="color: black !important;">
                                            <p class="pb-0 fs-6   w-100 overflow-hidden"><?php echo $subcategory['sub_cat_name'] ?></p>
                                        </a>
                                        <div class="row">
                                            <div class="col-7">
                                                <!-- inner cat -->
                                                <?php
                                                foreach ($subcategory['inner_categories'] as $innercategory) {
                                                ?>
                                                    <p class=" p-0 m-0 d-block"><a href="product.php?inner_cat_id=<?php echo $innercategory['inner_cat_id'] ?>" class="text-decoration-none p-0 m-0">
                                                            <?php echo $innercategory['inner_cat_name'] ?></a></p>
                                                    <!-- end -->
                                                <?php } ?>

                                            </div>
                                            <div class="col-5 align-self-end ">
                                                <img src="./admin/<?php echo  $subcategory['sub_cat_image']  ?>" class="rounded" height="auto" width="100%" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <!-- sub cat end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

 
<script>
    $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 6
                }
            }
        })
    })
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>