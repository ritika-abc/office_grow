<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Retrieve the search query
    $query = $_GET["query"];
}


 

 
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="fontawesome-free-6.5.2-web/css/all.min.css">
     
    
    <title>Search Trending Buyleads</title>
 
 <link rel="icon" type="image/x-icon" href="image/favicon.png">
    <link rel="mask-icon" href="image/favicon.png">
 

    
    
    
    
    
    <link rel="stylesheet" href="https://growindiaexport.com/assets/css/style.css">
    <link rel="stylesheet" href="https://growindiaexport.com/assets/css/bootstrap.min.css">
   
    <link rel="stylesheet" href="https://growindiaexport.com/assets/css/megadrop.css">
    
    
    
    <!-- for seo stat-->
    
    <link rel="canonical" href="https://growindiaexport.com/search/<?php echo  $query ?>">
     

     <?php
    // if ($query == 'Onion' or 'onion') {
    //      echo "<title>Onion Buyers || Importers & Exports Grow India Export.</title> ";
    //     //  echo "<meta name='keywords' content='Onion Buyers || Importers & Exports Grow India Export.' />";
    //      echo "<meta name='description' content='Need high-quality Onion Buyers in market & best rates which is suitable to you, Grow India Export Available to full-fill your all Global market requirement. now' />";
    // }else if($query == 'urad'){
    //     echo "<title>this is my urad </title>";

    // }







    ?>
    
   
    
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
     

 <?php include "navbar.php"?>
<div class="container-fluid my-2">
                <div class="row">
                        <div class="col-12">
                                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                                <li class="breadcrumb-item"><a href="https://growindiaexport.com/buyleads.php">Trending Buyleads</a></li>

                                                <!--  -->
                                                                                                        <li class="breadcrumb-item"><a class="text-capitalize" href="#"><?php echo  $query ?></a></li>

                                                                                        </ol>
                                </nav>
                        </div>
                </div>
        </div>
    <div class="container mt-4 bg-light py-5 rounded">
        
        <div class="row">
            <div class="col-4 d-none d-sm-none d-mdnone d-lg-block">
                <div class="buyleads mb-3" style="height: 400px; overflow-Y:scroll">
                    <div class="buy_leads shadow-lg border  rounded p -2">
                        <ul class="text-capitalize  list-group ">
                            
                            <?php
                            // Database connection parameters
                            include "./config.php";



                            // SQL query
                            $sql = 'SELECT  product_name,  COUNT(product_name) as total_sales FROM buyleads  GROUP BY product_name ORDER BY buyleads_id DESC';

                            // Execute the query
                            $result = $con->query($sql);

                            // Check for errors
                            if (!$result) {
                                die('Query failed: ' . $con->error);
                            }

                            // Fetch and output the results
                            while ($row = $result->fetch_assoc()) {
                                
                                $product_name = $row['product_name'];
                                $pro = strtolower($product_name);
                                $rep = str_replace(" ", "+", $pro);
                                echo '<li class="list-group-item "><a class="text-dark    " href="search-buyleads.php?searchType=buyleads&query=' . $rep . '"> <b style="color:rgb(46 80 138) !important">' . $row['product_name'] . '</b><span class=" "  >    (Buyleads: ' . $row['total_sales'] . ') </span></a></li>';
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
                            <label for="options" class="sticky-top fw-bold fs-5  w-100 p-2 text-white" style="background-color: rgb(46 80 138) !important;;">State</label>
                            <div class="mt-2 p-3" style="height: 300px;overflow:scroll">
                                <?php
                                include "config.php";
                                $sel = "SELECT * FROM `states`";
                                $q = mysqli_query($con, $sel);
                                while ($row = mysqli_fetch_array($q)) {
                                ?>
                                    <a href="search-buyleads.php?query=<?php echo  $query ?>&state_name=<?php echo $row['state_name'] ?>" class="d-block"><?php echo $row['state_name'] ?></a>
                                <?php } ?>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="serch_buyleads bg-white p-3 rounded">
                    <form id="searchForm">

                        <div class="buyleads_box  border ">
                            <label for="options" class="sticky-top fw-bold fs-5  w-100 p-2 text-white" style="background-color: rgb(46 80 138) !important;;">Country</label>
                            <div class="mt-2 p-3" style="height: 300px;overflow:scroll">
                                <?php
                                include "config.php";
                                $sel = "SELECT * FROM `countries`";
                                $q = mysqli_query($con, $sel);
                                while ($row = mysqli_fetch_array($q)) {                                ?>
                                    <a href="search-buyleads.php?query=<?php echo  $query ?>&country_name=<?php echo $row['country_name'] ?>" class="d-block"><?php echo $row['country_name'] ?></a>
                                <?php } ?>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <div class="col-lg-8">
  <form action="search-buyleads.php" method="GET" class="d-flex mb-3 d-lg-none">
                    <div class="input-group mb-3">
                        <input name="query" type="text" class="form-control" placeholder="Search Buyleads">
                        <button class="btn btn-dark" type="submit">Search</button>
                    </div>
                </form>
                <div class="old">
                    <div class="right_col" role="main">
                        <!-- top tiles -->
                        <div class="row">

                            <?php
                            // Check if the form is submitted
                            if ($_SERVER["REQUEST_METHOD"] == "GET") {
                                // Retrieve the search query
                                $query = $_GET["query"];
                                $state_name = $_GET["state_name"];
                                // $country_name = $_GET["country_name"];

                                // Connect to your database (replace these variables with your actual database credentials)
                                include "config.php";



                                // Cre



                            ?>
                                <div class="col-12 my-4">
                                    <?php
                                    // echo  $query . " " .$state_name;
                                    // SQL query to search for data in your database (replace 'table_name' with your actual table name and 'column_name' with the column you want to search)


                                    // $sql1 = "SELECT * FROM `buyleads` WHERE buyer_name LIKE '%" . $query . "%'" . " or queiry_for LIKE '%" . $query . "%' and state LIKE '%" . $state_name . "%' ";
                                    // $result = $con->query($sql1);
$sno = 1;


                                    if ($_GET["country_name"] and $_GET["query"]) {
                                        echo  $country_name = $_GET["country_name"];
                                        echo $query = $_GET["query"];
                                        $sql1 = "SELECT * FROM `buyleads` WHERE buyer_name LIKE '%" . $query . "%'" . " or queiry_for LIKE '%" . $query . "%' and country_name LIKE '%" . $country_name . "%' AND queiry_for LIKE '%" . $queiry_for . "%' ORDER BY $sno DESC ";
                                    $result = $con->query($sql1);
                                    }else{
                                        $sql1 = "SELECT * FROM `buyleads` WHERE buyer_name LIKE '%" . $query . "%'" . " or queiry_for LIKE '%" . $query . "%' and state_name LIKE '%" . $state_name . "%' ORDER BY $sno DESC ";
                                        $result = $con->query($sql1);
                                    }






                                    // Display the results
                                    if ($result->num_rows > 0) {
                                        echo "<h5>Search Results From <i>$query $state_name</i> :</h5>";
                                        echo "<ul class='p-0 m-0'>";
                                        while ($row = $result->fetch_assoc()) {
                                            // echo "<li>" . $row["product_name"] . "</li>"; // Display the result here
                                    ?>
                                            <div class="col-12 mb-4">
                                                <div class="row">
                                                    <div class="col-12 my-3 ">
                                                        <div class="row">
                                                            <div class="col-12 ">
                                                                <div class="buyleads_cards p-3 shadow-lg bg-white rounded    text-capitalize" style=" ">
                                                                     <p class="my-1  float-end p-0"><span class="w-100 d-block"><img src="https://growindiaexport.com/image/image/date.gif" alt="https://growindiaexport.com/" >   <?php echo $row['date'] ?></span></p>
                                                                    <h5 class=" " style="color :#2f3394;font-weight: bold;"> <img src="https://growindiaexport.com/image/trust_buyleads.png" alt=""  > <?php echo $row['product_name'] ?>  </h5>
                                                                     <h6>  <?php echo $row['queiry_for'] ?></h6>
                                                                    <ul class="nav justify-content-between">
                                                                        <li class="nav-item text-capitalize" title="<?php echo $row['buyer_location'] ?>"> <i class="fa-solid fa-location-dot " style="color: #3fb635;margin-right:10px"></i> <?php echo $row['buyer_location']  ?> </li>
                                                                       
                                                                    </ul>
                                                                     <div class="row  mt-3 table-borderless">
                                    <div class="col-lg-6  ">
                                        <div class="row   text-capitalize">
                                            <div class="col-6">
                                                <p class="m-0 p-0" style="color: #055faf;"><b>Port Name : </b></p>
                                            </div>
                                            <div class="col-6">
                                                <p class="m-0 p-0 text-dark">   </p>
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
                                                <p class="m-0 p-0" style="color: #055faf;"><b>Mode Of Payment:    </b></p>
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
                                                                                <p class="m-0 p-0 text-dark text-capitalize"><?php
if (!empty($row['number'])) {
    echo substr($row['number'], 0, 3) . '...';
} else {
    echo 'N/A';
}
?> </p>
                                                                            </div>
                                                                        </div>
                                        <div class="row    ">
                                            <div class="col-6">
                                                <p class="m-0 p-0" style="color: #055faf;"><b>Buyer Email : </b></p>
                                            </div>
                                            <div class="col-6">
                                                <p class="m-0 p-0 text-dark text-lowercase">***@gmail.com </p>
                                            </div>
                                        </div>
                                          <div class="row    ">
                                            <div class="col-6">
                                                <p class="m-0 p-0" style="color: #055faf;"><b>Shipping Mode : </b></p>
                                            </div>
                                            <div class="col-6">
                                                <p class="m-0 p-0 text-dark  "> <?php echo $row['shipping_mode'] ?> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                                    <div class="d-block mt-5 mb-3" style="border-top: 2px dotted gray;"></div>

                                                                    <a href="https://growindiaexport.com/supplier-register.php" class="btn btn-secondary" style="background:#e77702">Buyer  Details</a>
                                                                    
                                                                </div>
                                                            </div>
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