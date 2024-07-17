<?php
include "config.php"; // Assuming this file connects to your database ($con)

$select = "SELECT 
            c.cat_name, 
            s.sub_cat_name, 
            i.inner_cat_name, 
            m.micro_name,
            p.product_name
        FROM 
            category c
        LEFT JOIN 
            sub_cat s ON c.cat_id = s.cat_id
        LEFT JOIN 
            inner_cat i ON s.sub_id = i.sub_id
        LEFT JOIN 
            micro m ON i.inner_cat_id = m.inner_cat_id
        LEFT JOIN 
            product p ON m.micro_id = p.micro_id";

$result = mysqli_query($con, $select);

$categories = array(); // Array to store categories and their subcategories and inner categories

while ($row = mysqli_fetch_array($result)) {
    $cat_name = $row['cat_name'];
    $sub_cat_name = $row['sub_cat_name'];
    $inner_cat_name = $row['inner_cat_name'];

    // Store subcategories and inner categories grouped by categories and subcategories
    if (!isset($categories[$cat_name][$sub_cat_name])) {
        $categories[$cat_name][$sub_cat_name] = array();
    }
    $categories[$cat_name][$sub_cat_name][] = $inner_cat_name;
}

// Display the categories, subcategories, and inner categories in a table format
echo '<table border="1">
        <tr>
            <th>Category</th>
            <th>Subcategory</th>
            <th>Inner Category</th>
        </tr>';

foreach ($categories as $category => $subcategories) {
    $categoryRowCount = 0;
    foreach ($subcategories as $subcategory => $innercategories) {
        $subcategoryRowCount = 0;
        foreach ($innercategories as $innercategory) {
            echo '<tr>';
            if ($categoryRowCount == 0 && $subcategoryRowCount == 0) {
                echo '<td rowspan="7">' . $category . '</td>';
            }
            if ($subcategoryRowCount == 0) {
                echo '<td rowspan="4">' . $subcategory . '</td>';
            }
            echo '<td>' . $innercategory . '</td>';
            echo '</tr>';
            $subcategoryRowCount++;
        }
        // Add empty rows if there are less than 4 inner categories
        for ($i = $subcategoryRowCount; $i < 4; $i++) {
            echo '<tr><td></td><td></td></tr>';
        }
        $categoryRowCount++;
    }
    // Add empty rows if there are less than 7 subcategories
    for ($i = $categoryRowCount; $i < 7; $i++) {
        echo '<tr><td></td><td></td><td></td></tr>';
    }
}

echo '</table>';

mysqli_close($con); // Close the database connection



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
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/vendor/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            /* background-color: #f0f1f2 !important; */
            font-family: "Roboto", sans-serif;
        }
        a{
            text-decoration: none !important;
        }
        .img_responsive{
            height: 150px;
            width: 150px;
            object-fit: cover;
            margin: auto;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    include "config.php"; // Assuming this file connects to your database ($con)

    $select = "SELECT 
            c.cat_name, 
            s.sub_cat_name, 
            i.inner_cat_name, 
            m.micro_name,
            p.product_name
        FROM 
            category c
        LEFT JOIN 
            sub_cat s ON c.cat_id = s.cat_id
        LEFT JOIN 
            inner_cat i ON s.sub_id = i.sub_id
        LEFT JOIN 
            micro m ON i.inner_cat_id = m.inner_cat_id
        LEFT JOIN 
            product p ON m.micro_id = p.micro_id";

    $result = mysqli_query($con, $select);

    $categories = array(); // Array to store categories and their subcategories and inner categories

    while ($row = mysqli_fetch_array($result)) {
        $cat_name = $row['cat_name'];
        $sub_cat_name = $row['sub_cat_name'];
        $inner_cat_name = $row['inner_cat_name'];

        // Store subcategories and inner categories grouped by categories and subcategories
        if (!isset($categories[$cat_name][$sub_cat_name])) {
            $categories[$cat_name][$sub_cat_name] = array();
        }
        $categories[$cat_name][$sub_cat_name][] = $inner_cat_name;
    }

    // Display the categories, subcategories, and inner categories in a card format

    echo '<div class="card-container row">';

    foreach ($categories as $category => $subcategories) {
        echo '<div class="category-card col-12 border">';
        echo '<h3>' . $category . '</h3>';

        foreach ($subcategories as $subcategory => $innercategories) {
            echo '<div class="subcategory">';
            echo '<h4>' . $subcategory . '</h4>';

            foreach ($innercategories as $innercategory) {
                echo '<div class="inner-category">';
                echo $innercategory;
                echo '</div>';
            }

            echo '</div>'; // Close subcategory div
        }

        echo '</div>'; // Close category-card div
    }

    echo '</div>'; // Close card-container div

    mysqli_close($con); // Close the database connection
    ?>


    <?php
    include "config.php"; // Assuming this file connects to your database ($con)

    $select = "SELECT 
            c.cat_name, 
            s.sub_cat_name, 
            i.inner_cat_name, 
            m.micro_name,
            p.product_name
        FROM 
            category c
        LEFT JOIN 
            sub_cat s ON c.cat_id = s.cat_id
        LEFT JOIN 
            inner_cat i ON s.sub_id = i.sub_id
        LEFT JOIN 
            micro m ON i.inner_cat_id = m.inner_cat_id
        LEFT JOIN 
            product p ON m.micro_id = p.micro_id";

    $result = mysqli_query($con, $select);

    $categories = array(); // Array to store categories and their subcategories and inner categories

    while ($row = mysqli_fetch_array($result)) {
        $cat_name = $row['cat_name'];
        $sub_cat_name = $row['sub_cat_name'];
        $inner_cat_name = $row['inner_cat_name'];

        // Store subcategories and inner categories grouped by categories and subcategories
        if (!isset($categories[$cat_name][$sub_cat_name])) {
            $categories[$cat_name][$sub_cat_name] = array();
        }
        $categories[$cat_name][$sub_cat_name][] = $inner_cat_name;
    }

    // Display the categories, subcategories, and inner categories in a Bootstrap card format
    echo '<div class="container">';
    foreach ($categories as $category => $subcategories) {
        echo '<div class="row my-3 shadow-lg p-4">';
        echo '<div class="col-12">';
        echo '<h1>' . $category . '</h1>';
        echo '<hr>';
        foreach ($subcategories as $subcategory => $innercategories) {
            echo '<div class="row">';
            echo '<div class="col-4">';
            echo '<h4>' . $subcategory . '</h4>';
            foreach ($innercategories as $innercategory) {
                echo '<p>' . $innercategory . '</p>';
            }
            echo '</div>'; // Close col-4
            echo '</div>'; // Close row
        }
        echo '</div>'; // Close col-12
        echo '</div>'; // Close shadow-lg
    }
    echo '</div>'; // Close container

    mysqli_close($con); // Close the database connection
    ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>cat name</h1>
                <div class="row">
                    <div class="col-3 cards ">
                        <div class="shadow-lg p-3">
                            <h5>sun cat name</h5>
                            <p>inner cat name</p>
                        </div>
                    </div>
                    <div class="col-3 cards ">
                        <div class="shadow-lg p-3">
                            <h5>sun cat name</h5>
                            <p>inner cat name</p>
                        </div>
                    </div>
                    <div class="col-3 cards ">
                        <div class="shadow-lg p-3">
                            <h5>sun cat name</h5>
                            <p>inner cat name</p>
                        </div>
                    </div>
                    <div class="col-3 cards ">
                        <div class="shadow-lg p-3">
                            <h5>sun cat name</h5>
                            <p>inner cat name</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include "config.php"; // Assuming this file connects to your database ($con)

    $select = "SELECT 
            c.cat_name, 
            s.sub_cat_name, s.sub_id, 
            i.inner_cat_name, 
            m.micro_name,
            p.product_name
        FROM 
            category c
        LEFT JOIN 
            sub_cat s ON c.cat_id = s.cat_id
        LEFT JOIN 
            inner_cat i ON s.sub_id = i.sub_id
        LEFT JOIN 
            micro m ON i.inner_cat_id = m.inner_cat_id
        LEFT JOIN 
            product p ON m.micro_id = p.micro_id";

    $result = mysqli_query($con, $select);

    $categories = array(); // Array to store categories and their subcategories and inner categories

    while ($row = mysqli_fetch_array($result)) {
        $cat_name = $row['cat_name'];
        $sub_cat_name = $row['sub_cat_name'];
        $inner_cat_name = $row['inner_cat_name'];
        $sub_id = $row['sub_id'];

        // Store subcategories and inner categories grouped by categories and subcategories
        if (!isset($categories[$cat_name][$sub_cat_name])) {
            $categories[$cat_name][$sub_cat_name] = array();
        }
        $categories[$cat_name][$sub_cat_name][] = $inner_cat_name;
    }

    // Display the categories, subcategories, and inner categories in the desired format
    echo '<div class="container">';
    foreach ($categories as $category => $subcategories) {
        echo '<div class="row my-3">';
        echo '<div class="col-12">';
        echo '<h4><a href="sub-cat.php?sub_id=' . $category . '">' . $category . '</a></h4>';

        echo '<div class="row">';
        foreach ($subcategories as $subcategory => $innercategories) {
            echo '<div class="col-3 cards">';
            echo '<div class="shadow-lg p-3">';
            echo '<h5>' . $subcategory . '</h5>';

            foreach ($innercategories as $innercategory) {
                echo '<p>' . $innercategory . '</p>';
            }

            echo '</div>'; // Close shadow-lg
            echo '</div>'; // Close col-3
        }
        echo '</div>'; // Close row for subcategories

        echo '</div>'; // Close col-12
        echo '</div>'; // Close row for category
    }
    echo '</div>'; // Close container

    mysqli_close($con); // Close the database connection
    ?>


    <hr>

    <?php
    include "config.php"; // Assuming this file connects to your database ($con)

    $select = "SELECT 
            c.cat_name, c.cat_id,
            s.sub_id,
            s.sub_cat_name, 
            -- GROUP_CONCAT(i.inner_cat_id, '|', i.inner_cat_name SEPARATOR '|') AS inner_categories
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

    $categories = array(); // Array to store categories and their subcategories

    while ($row = mysqli_fetch_array($result)) {
        $cat_name = $row['cat_name'];
        $sub_id = $row['sub_id'];
        $cat_id = $row['cat_id'];
        $sub_cat_name = $row['sub_cat_name'];
        $inner_categories = explode('|', $row['inner_categories']); // Convert string to array

        // Store subcategories and inner categories grouped by categories and subcategories
        if (!isset($categories[$cat_name])) {
            $categories[$cat_name] = array();
        }

        $categories[$cat_name][] = array(
            'sub_id' => $sub_id,
            'cat_id' => $cat_id,
            'sub_cat_name' => $sub_cat_name,
            'inner_categories' => $inner_categories
        );
    }

    // Display the categories, subcategories, and inner categories in the desired format
    echo '<div class="container">';
    foreach ($categories as $category => $subcategories) {
        echo '<div class="row my-3">';
        echo '<div class="col-12">';
        echo '<h4><a href="category.php?cat_id=' . $subcategories[0]['cat_id'] . '">' . $category . '</a></h4>';

        echo '<div class="row">';
        foreach ($subcategories as $subcategory) {
            echo '<div class="col-3 cards">';
            echo '<div class="shadow-lg p-3">';
            echo '<h5> <a href="sub-cat.php?sub_id=' . $subcategory['sub_id'] . '">' . $subcategory['sub_cat_name'] . '</a></h5>';

            foreach ($subcategory['inner_categories'] as $innercategory) {
                echo '<p> <a>' . $innercategory . '</a></p>';
            }

            echo '</div>'; // Close shadow-lg
            echo '</div>'; // Close col-3
        }
        echo '</div>'; // Close row for subcategories

        echo '</div>'; // Close col-12
        echo '</div>'; // Close row for category
    }
    echo '</div>'; // Close container

    mysqli_close($con); // Close the database connection
    ?>


    <hr>

    <?php
    include "config.php"; // Assuming this file connects to your database ($con)

    // Check if connection to database was successful
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $select = "SELECT 
            c.cat_name, c.cat_id,
            s.sub_id,
            s.sub_cat_name, 
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
        $sub_id = $row['sub_id'];
        $cat_id = $row['cat_id'];
        $sub_cat_name = $row['sub_cat_name'];
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
            'sub_id' => $sub_id,
            'cat_id' => $cat_id,
            'sub_cat_name' => $sub_cat_name,
            'inner_categories' => $inner_categories
        );
    }

    // Display the categories, subcategories, and inner categories in the desired format
    echo '<div class="container">';
    foreach ($categories as $category => $subcategories) {
        echo '<div class="row my-3">';
        echo '<div class="col-12">';
        echo '<h4><a href="category.php?cat_id=' . $subcategories[0]['cat_id'] . '">' . $category . '</a></h4>';

        echo '<div class="row border">';
        foreach ($subcategories as $subcategory) {
            echo '<div class="col-3 cards">';
            echo '<div class="shadow-lg p-3">';
            echo '<h5><a href="sub-cat.php?sub_id=' . $subcategory['sub_id'] . '">' . $subcategory['sub_cat_name'] . '</a></h5>';

            echo '<div class="row"><div class="col-6"><ul>';
            foreach ($subcategory['inner_categories'] as $innercategory) {
                echo '<li><a href="product.php?inner_cat_id=' . $innercategory['inner_cat_id'] . '">' . $innercategory['inner_cat_name'] . '</a></li>';
            }
            echo '</div></div></ul>';

            echo '</div>'; // Close shadow-lg
            echo '</div>'; // Close col-3
        }
        echo '</div>'; // Close row for subcategories

        echo '</div>'; // Close col-12
        echo '</div>'; // Close row for category
    }
    echo '</div>'; // Close container

    mysqli_close($con); // Close the database connection
    ?>
    



















    <?php
include "config.php"; // Assuming this file connects to your database ($con)

// Check if connection to database was successful
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$select = "SELECT 
            c.cat_name, c.cat_id, c.cat_image,
            s.sub_id,
            s.sub_cat_name, 
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
    $cat_image = $row['cat_image']; // Fetch cat_image
    $sub_id = $row['sub_id'];
    $sub_cat_name = $row['sub_cat_name'];
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
        'cat_name' => $cat_name,
        'cat_image' => $cat_image,
        'sub_id' => $sub_id,
        'sub_cat_name' => $sub_cat_name,
        'inner_categories' => $inner_categories
    );
}

// Display the categories, subcategories, and inner categories in the desired format
echo '<div class="container">';
foreach ($categories as $category => $subcategories) {
    echo '<div class="row my-3">';
    echo '<div class="col-12">';
    echo '<h4><a href="category.php?cat_id=' . $subcategories[0]['cat_id'] . '">' . $category . '</a></h4>';
    
    echo '<div class="row">';
    foreach ($subcategories as $subcategory) {
        echo '<div class="col-3 cards">';
        echo '<div class="shadow-lg p-3">';
        
        // Display category image
        if (!empty($subcategory['cat_image'])) {
            echo '<img src="' . $subcategory['cat_image'] . '" alt="' . $subcategory['cat_image'] . '" style="max-width: 100%;">';
        }
        
        echo '<h5><a href="sub-cat.php?sub_id='. $subcategory['sub_id'].'">' . $subcategory['sub_cat_name'] . '</a></h5>';
        
        echo '<ul>';
        foreach ($subcategory['inner_categories'] as $innercategory) {
            echo '<li><a href="inner-cat.php?inner_cat_id=' . $innercategory['inner_cat_id'] . '">' . $innercategory['inner_cat_name'] . '</a></li>';
        }
        echo '</ul>';
        
        echo '</div>'; // Close shadow-lg
        echo '</div>'; // Close col-3
    }
    echo '</div>'; // Close row for subcategories
    
    echo '</div>'; // Close col-12
    echo '</div>'; // Close row for category
}
echo '</div>'; // Close container

mysqli_close($con); // Close the database connection
?>



<!-- finel -->




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
echo '<div class="container">';
foreach ($categories as $category => $subcategories) {
    echo '<div class="row my-3">';
    echo '<div class="col-12">';
    echo '<h4><a href="category.php?cat_id=' . $subcategories[0]['cat_id'] . '">' . $category . '</a></h4>';
    
    echo '<div class="row">';
    foreach ($subcategories as $subcategory) {
        echo '<div class="col-3 cards">';
        echo '<div class="shadow-lg p-3">';
        
        // Display subcategory image
        if (!empty($subcategory['sub_cat_image'])) {
            echo '.admin/'.$subcategory['sub_cat_image'] ;
            echo '<img src="./admin/'. $subcategory['sub_cat_image'] . '" alt="' . $subcategory['sub_cat_name'] . '" style="max-width: 100%;">';
        }
        
        echo '<h5><a href="sub-cat.php?sub_id='. $subcategory['sub_id'].'">' . $subcategory['sub_cat_name'] . '</a></h5>';
        
        echo '<ul>';
        foreach ($subcategory['inner_categories'] as $innercategory) {
            echo '<li><a href="inner-cat.php?inner_cat_id=' . $innercategory['inner_cat_id'] . '">' . $innercategory['inner_cat_name'] . '</a></li>';
        }
        echo '</ul>';
        
        echo '</div>'; // Close shadow-lg
        echo '</div>'; // Close col-3
    }
    echo '</div>'; // Close row for subcategories
    
    echo '</div>'; // Close col-12
    echo '</div>'; // Close row for category
}
echo '</div>'; // Close container

mysqli_close($con); // Close the database connection
?>


<img src="./admin/extra_image/316170-1.jpg" alt="">





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
echo '<div class="container ">';
foreach ($categories as $category => $subcategories) {
    echo '<div class="row my-5 border-bottom border-danger border-3 py-3 shadow-lg rounded ">';
    echo '<div class="col-12">';
    echo '<h4><a href="category.php?cat_id=' . $subcategories[0]['cat_id'] . '">' . $category . '</a></h4>';
    
    echo '<div class="row">';
    foreach ($subcategories as $subcategory) {
        echo '<div class="col-3 cards">';
        echo '<div class="shadow-lg p-3">';
        
        // Display subcategory image
        if (!empty($subcategory['sub_cat_image'])) {
            echo '<div class="text-center"> <img src="./admin/' . $subcategory['sub_cat_image'] . '" alt="' . $subcategory['sub_cat_name'] . '" class="img_responsive rounded text-center"></div>';
        }
        
        echo '<h5><a href="sub-cat.php?sub_id='. $subcategory['sub_id'].'">' . $subcategory['sub_cat_name'] . '</a></h5>';
        
        echo '<ul style="height:150px" class="border overflow-hidden">';
        foreach ($subcategory['inner_categories'] as $innercategory) {
            echo '<li><a href="product.php?inner_cat_id=' . $innercategory['inner_cat_id'] . '">' . $innercategory['inner_cat_name'] . '</a></
            
            li>';
            
        }
        echo '</ul>';
        
        echo '</div>'; // Close shadow-lg
        echo '</div>'; // Close col-3
    }
    echo '</div>'; // Close row for subcategories
    
    echo '</div>'; // Close col-12
    echo '</div>'; // Close row for category
}
echo '</div>'; // Close container

mysqli_close($con); // Close the database connection
?>
