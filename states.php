<!DOCTYPE html>
<html lang="en">
 
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>growindiaexport</title>
 <link rel="icon" type="image/x-icon" href="image/favicon.png">
    <link rel="mask-icon" href="image/favicon.png">
 

        <link rel="stylesheet" href="https://growindiaexport.com/assets/css/megadrop.css">
     <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://growindiaexport.com/assets/css/style.css">
        <link rel="stylesheet" href="https://growindiaexport.com/assets/vendor/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="https://growindiaexport.com/assets/vendor/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
        <script src="https://growindiaexport.com/assets/vendor/OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js"></script>
        <script src="https://growindiaexport.com/assets/vendor/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>

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
    <?php
     if ($_GET['state_name']) {
          $state_name = $_GET['state_name'];
    }
    ?>
    <h4 class="p-3 text-muted">Search Products In <i> <?php echo $state_name ?></i></h4>
    <nav class="navbar navbar-expand-lg bg-body-tertiary d-flex d-sm-flex d-md-flex d-lg-none">
        <!-- Your existing mobile navigation code -->
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

    // Display the categories, subcategories, and inner categories in the desired format

    echo '<div class="accordion btn btn-light w-100" id="accordionExample" >';
    $count = 0; 

    foreach ($categories as $category => $subcategories) {
        echo '<div class="accordion-item mt-5 ">';

        echo '<h2 class="accordion-header" id="heading_' . $count . '">';
        echo '<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_' . $count . '" aria-expanded="true" aria-controls="collapse_' . $count . '">';
        echo $category;
        echo '</button>';
        echo '</h2>';

        echo '<div id="collapse_' . $count . '" class="accordion-collapse collapse  " aria-labelledby="heading_' . $category . '" data-bs-parent="#accordionExample">';
        echo '<div class="accordion-body">';
        echo '<div class="row">';

        foreach ($subcategories as $subcategory) {
            echo '<div class=" p-3 col-312 col-md-6 col-lg-3 my-3">';
            echo '<div class="border rounded">';

            // Display subcategory image
            if (!empty($subcategory['sub_cat_image'])) {
                echo '<div class="  mb-3 responsive_image"> <img src="admin/' . $subcategory['sub_cat_image'] . '" alt="' . $subcategory['sub_cat_name'] . '" class="img_responsive rounded border border-3 border-dark " style="height:150px;object-fit:cover;width:100%;"></div>';
            }

            
            // echo "<hr>";
            echo '<ul style=" "   class="scroll_box list-unstyled px-3">';

            foreach ($subcategory['inner_categories'] as $innercategory) {
                echo '<li><small><a href="product.php?inner_cat_id=' . $innercategory['inner_cat_id'] . "&state_name=" . $state_name . '">' . $innercategory['inner_cat_name'] . '</a></small></li>';
            }
            echo '</ul>';

            echo '</div>'; // Close shadow-lg
            echo '</div>'; // Close shadow-lg
        }

        echo '</div>'; // Close accordion-body
        echo '</div>'; // Close accordion-body
        echo '</div>'; // Close accordion-collapse

        echo '</div>'; // Close accordion-item
        $count++;
    }

    echo '</div>'; // Close accordion

    mysqli_close($con); // Close the database connection
    ?>
<?php include "footer.php"; ?>