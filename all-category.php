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
       <title>growindiaexport</title>
 <link rel="icon" type="image/x-icon" href="image/favicon.png">
    <link rel="mask-icon" href="image/favicon.png">
<link rel="canonical" href="https://growindiaexport.com/all-category.php">

        <link rel="stylesheet" href="assets/css/megadrop.css">
        <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">--> <link rel="stylesheet" href="assets/css/bootstrap.min.css">
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

  <?php include "navbar.php"; ?>
       <p  class="fs-5 text-center my-3 text-muted">All Category</p>
<?php

include "config.php"; // Assuming this file connects to your database ($con)

// Check if connection to database was successful
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$select = "SELECT 
c.cat_name, c.cat_id,
s.sub_id, s.sub_cat_name, s.sub_cat_name, s.sub_cat_image,
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
        'cat_name' => $cat_name,
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
               <a href="supplier-in-india/<?php echo $subcategories[0]['cat_id'] . '-' . strtolower(
                                        preg_replace('~-+~', '-', 
                                            trim(
                                                preg_replace('~[^-\w]+~', '', 
                                                    iconv('utf-8', 'us-ascii//TRANSLIT', 
                                                        preg_replace('~[^\pL\d]+~u', '-', $subcategories[0]['cat_name'])
                                                    )
                                                ), 
                                                '-'
                                            )
                                        )
                                    ); ?>">
                                        <h4 class=""><?php echo $category ?></h4>
                                    </a>
                <div class="row mt-3">
                    <div class="col-12 col-md-12 text-capitalize">
                        <div class="row">
                            <!-- sub cat -->
                            <?php foreach ($subcategories as $subcategory) { ?>
                                <div class="col-12 col-md-6 col-lg-3 my-3">
                                    <div class="card p-3"  style="aspect-ratio: 1 / 1;">
                                       <a href="sub-cat/<?php echo  $subcategory['sub_id'] .   '-' . strtolower(
                                        preg_replace('~-+~', '-', 
                                            trim(
                                                preg_replace('~[^-\w]+~', '', 
                                                    iconv('utf-8', 'us-ascii//TRANSLIT', 
                                                        preg_replace('~[^\pL\d]+~u', '-', $subcategory['sub_cat_name'])
                                                    )
                                                ), 
                                                '-'
                                            )
                                        )
                                    );  ?>" class="text-decoration-none" style="color: black !important;">
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
                                            <!--<div class="col-5 align-self-end ">-->
                                            <!--    <img src="./admin/<?php echo  $subcategory['sub_cat_image']  ?>" class="rounded" height="auto" width="100%" alt="">-->
                                            <!--</div>-->
                                             <div class="col-5 align-self-start border rounded ">
                                                                                             
                                                                                                <img src="./admin/<?php echo  $subcategory['sub_cat_image']  ?>" class="rounded p-2" height="100px" style="object-fit:cover;" width="100%" alt="">
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
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>-->
<?php include "footer.php"; ?>