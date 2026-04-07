<?php
//  isert and check the details

include "config.php";
include_once "include/header.php";



?>



<!-- new data -->
<div class="right_col" role="main">
    <div class="container mt-5">
        <div class="row  justify-content-center">
            
             <div class="col-12">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="my-5  d-flex">
                <input type="search" placeholder="Search Here By Product Name /Query/Number" name="search_query" class="form-control w-75 rounded float-end">
                <input type="submit" name="search" class="btn-sm btn-success">
            </form>
        </div>
        <?php
        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve the search query
            $search_query = $_POST["search_query"];

            // Connect to your database (replace these variables with your actual database credentials)
            include "config.php";

            // Create connection





        ?>

            <div class="col-12 my-4">
                <table class="table  table-striped table-success table text-capitalize">

                    <tbody class=" ">
                        <tr>
                                        <td>S no</td>
                                        <td>Product Name</td>
                                        <td>Enquiry For</td>
                                        <td>Number</td>
                                        <td>Date</td>
                                        <td>Email</td>
                                        <td>Payment</td> 
                                        <td>shipping</td> 
                                        <td>Quantity</td>
                                        
                                        <td>Country Name</td>
                                      

                                    </tr>
                        <?php

                        // SQL query to search for data in your database (replace 'table_name' with your actual table name and 'column_name' with the column you want to search)
                        $sql = "SELECT * FROM buyleads WHERE product_name LIKE '%" . $search_query . "%'" . " or queiry_for LIKE '%" . $search_query . "%' or number LIKE '%" . $search_query . "%'";
                        $result = $con->query($sql);

                        // Display the results
                        if ($result->num_rows > 0) {
                            echo "<h3>Search Results:</h3>";
                            echo "<ul>";
                            while ($row = $result->fetch_assoc()) {
                                // echo "<li>" . $row["product_name"] . "</li>"; // Display the result here
                        ?>
                               <tr>
                                            <td><?php echo  $sno ?><a href="update-buyleads.php?buyleads_id=<?php echo $row['buyleads_id'] ?>" class="btn btn-sm btn-success"><i class="fa-solid fa-pen-to-square"></i></a><a href="delete-buyleads.php?buyleads_id=<?php echo $row['buyleads_id'] ?>" class="btn btn-sm  btn-danger"><i class="fa-solid fa-trash"></i></a></td>
                                            <td class="text-capitalize"><?php echo  $row['product_name'] ?></td>
                                            <td class="text-capitalize"><?php echo  $row['queiry_for'] ?></td>
                                            <td><?php echo  $row['number'] ?></td>
                                            <td><?php echo  $row['accessed_at'] ?></td>
                                            <td><?php echo  $row['buyer_email'] ?></td>
                                            <td><?php echo  $row['payment_mode'] ?></td>
                                            <td><?php echo  $row['shipping_mode'] ?></td>
                                            <td><?php echo  $row['quantity'] ?></td>
                                            
                                       
                                            <td class="text-capitalize" title="<?php echo  $row['buyer_location'] ?>"><?php echo  $row['country_name'] ?></td>
                                        
                                        </tr>
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
                    </tbody>
                </table>
            </div>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            <div class="col-12">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h4>View Category</h4>
                           <div class="border" style="width:100%;overflow-x:auto">
                                <table class="table table-bordered table-white ">
                                <thead>
                                    <tr>
                                        <td>S no</td>
                                        <td>Product Name</td>
                                        <td>Enquiry For</td>
                                        <td>Number</td>
                                        <td>Date</td>
                                        <td>Email</td>
                                        <td>Payment</td> 
                                        <td>shipping</td> 
                                        <td>Quantity</td>
                                        
                                        <td>Country Name</td>
                                      

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                   $serial =  1;
                                $limit = 50;
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
                                $sql = "SELECT * FROM  `buyleads`  ORDER BY buyleads_id DESC LIMIT {$offset},{$limit}";
                                $result = mysqli_query($con, $sql) or die("Query Failed.");


                                if (mysqli_num_rows($result) > 0) {


                                    $serial = $offset + 1;
                                    while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                        <tr>
                                            <td><?php echo  $sno ?><a href="update-buyleads.php?buyleads_id=<?php echo $row['buyleads_id'] ?>" class="btn btn-sm btn-success"><i class="fa-solid fa-pen-to-square"></i></a><a href="delete-buyleads.php?buyleads_id=<?php echo $row['buyleads_id'] ?>" class="btn btn-sm  btn-danger"><i class="fa-solid fa-trash"></i></a></td>
                                            <td class="text-capitalize"><?php echo  $row['product_name'] ?></td>
                                            <td class="text-capitalize"><?php echo  $row['queiry_for'] ?></td>
                                            <td><?php echo  $row['number'] ?></td>
                                            <td><?php echo  $row['accessed_at'] ?></td>
                                            <td><?php echo  $row['buyer_email'] ?></td>
                                            <td><?php echo  $row['payment_mode'] ?></td>
                                            <td><?php echo  $row['shipping_mode'] ?></td>
                                            <td><?php echo  $row['quantity'] ?></td>
                                            
                                       
                                            <td class="text-capitalize" title="<?php echo  $row['buyer_location'] ?>"><?php echo  $row['country_name'] ?></td>
                                        
                                        </tr>
                                     <?php
                                        $serial++;
                                    }
                                } 
                                
                                 // show pagination
                    $sql1 = "SELECT * FROM `buyleads`";
                    $result1 = mysqli_query($con, $sql1) or die("Query Failed.");

                    if (mysqli_num_rows($result1) > 0) {

                        $total_records = mysqli_num_rows($result1);

                        $total_page = ceil($total_records / $limit);

                        echo '<ul class="pagination ">';
                        if ($page > 1) {
                            echo '<li class="page-item"><a class="page-link" href="view-buyleads.php?page=' . ($page - 1) . '">Prev</a></li>';
                        }
                        for ($i = 1; $i <= $total_page; $i++) {
                            if ($i == $page) {
                                $active = "active";
                            } else {
                                $active = " ";
                            }
                            echo '<li class="page-item ' . $active . '"><a class="page-link"  href="view-buyleads.php?page=' . $i . '">' . $i . '</a></li>';
                        }
                        if ($total_page > $page) {
                            echo '<li class="page-item"><a class="page-link" href="view-buyleads.php?page=' . ($page + 1) . '">Next</a></li>';
                        }

                        echo '</ul>';
                    }
                                
                                
                                
                                ?>
                                </tbody>
                            </table>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>




<!-- /page content -->
<?php
include_once "include/footer.php";
?>