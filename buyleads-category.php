 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>growindiaexport</title>
    <link rel="icon" type="image/x-icon" href="https://growindiaexport.com/image/favicon.png">
    <link rel="mask-icon" href="image/favicon.png">
    <link rel="canonical" href="https://growindiaexport.com/buyleads.php">
    <link rel="stylesheet" href="https://growindiaexport.com/assets/css/style.css">
    <link rel="stylesheet" href="https://growindiaexport.com/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://growindiaexport.com/fontawesome-free-6.5.2-web/css/all.min.css">
    <link rel="stylesheet" href="https://growindiaexport.com/assets/css/megadrop.css">
    <style>
        /* Optional: Some basic styling */
        #buyleads {
            display: none;
            /* Hide buyleads by default */
            margin-top: 10px;
            padding: 10px;

        }

        .btn_box {
            height: 50px;
            display: flex;
            background: #dfdfdf57;
            align-items: center;
            margin: 3px;
            transition: 0.4s;
        }
        .btn_box:hover {
            
            background: #dfdfdfc9;
         
        }

@media screen and (max-width:768px){
    .btn_box  {
        font-size: 12px;
    }
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

    <div class="container mt-4 bg-light py-5 rounded">
        <div class="row">
            <div class="col-12 ">
                <div class="row shadow-lg border  rounded p -2">
<h4 class="my-3 text-center">Trending Buyleads Category</h4>

                    <?php
                    // Database connection parameters
                    include "./config.php";
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
                        echo '<div class="col-6 col-md-4"><a class="text-dark px-3  btn_box  text-capitalize" href="buyers-and-suppliers/' . $str_search . '"> <img src="image/trust_buyleads.png" alt="growindia" height="30px" width="30px"> <b class="mx-2" style="color:rgb(46 80 138) !important"> ' . $row['product_name'] . ' </b><span class=" d-none  "  >    (Buyleads: ' . $row['total_sales'] . ') </span></a></div>';
                    }
                    // Free the result set
                    $result->free();

                    // Close the connection
                    $con->close();
                    ?>
                </div>
            </div>
        </div>
    </div>

  


    <?php include "footer.php"; ?>