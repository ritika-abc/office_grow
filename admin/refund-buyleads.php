<?php


include_once "include/header.php";

?>
<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row">
        <div class="col-12">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="my-5  d-flex">
                <input type="search" placeholder="" name="search_query" class="form-control w-75 rounded float-end">
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
                <table class="table  table-striped table-success table ">

                    <thead class="text-capitalize">
                    <tr>
                                    <th>Name</th>
                                    <th> Company Name</th>
                                    <th> Email</th>
                                    <th> Refund Reason</th>
                                    <th>date</th>
                                </tr>


                    </thead>
                    <tbody class=" ">

                        <?php

                        // SQL query to search for data in your database (replace 'table_name' with your actual table name and 'column_name' with the column you want to search)
                        $sql = "SELECT * FROM  `refund-buylead` WHERE company_name LIKE '%" . $search_query . "%'" . " or reason LIKE '%" . $search_query . "%'";
                        $result = $con->query($sql);

                        // Display the results
                        if ($result->num_rows > 0) {
                            echo "<h3>Search Results:</h3>";
                            echo "<ul>";
                            while ($row = $result->fetch_assoc()) {
                                // echo "<li>" . $row["product_name"] . "</li>"; // Display the result here
                        ?>
                                <tr>
                                    <td><?php echo $row['name']; ?> </td>
                                    <td><?php echo $row['company_name']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['reason']; ?></td>
                                    <td><?php echo $row['date']; ?></td>
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


                <div class="col-md-12">
                    <?php
                    include "config.php"; // database configuration
                    /* Calculate Offset Code */
                    $limit = 15;
                    if (isset($_GET['page'])) {
                        $page = $_GET['page'];
                    } else {
                        $page = 1;
                    }
                    $offset = ($page - 1) * $limit;
                    /* select query of user table with offset and limit */
                    $sql = "SELECT * FROM  `refund-buylead` ORDER BY id DESC LIMIT {$offset},{$limit}";
                    $result = mysqli_query($con, $sql) or die("Query Failed.");
                    if (mysqli_num_rows($result) > 0) {
                    ?>
                        <table class="table  table-striped table-light table overflow-scroll">
                            <thead class="">

                                <tr>
                                    <th>Name</th>
                                    <th> Company Name</th>
                                    <th> Email</th>
                                    <th> Refund Reason</th>
                                    <th>date</th>
                                </tr>

                            </thead>
                            <tbody>
                                <?php
                                $serial = $offset + 1;
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['name']; ?> </td>
                                        <td><?php echo $row['company_name']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['reason']; ?></td>
                                        <td><?php echo $row['date']; ?></td>
                                    </tr>
                                <?php
                                    $serial++;
                                } ?>
                            </tbody>
                        </table>
                    <?php
                    } else {
                        echo "<h3>No Results Found.</h3>";
                    }
                    // show pagination
                    $sql1 = "SELECT * FROM `refund-buylead`";
                    $result1 = mysqli_query($con, $sql1) or die("Query Failed.");

                    if (mysqli_num_rows($result1) > 0) {

                        $total_records = mysqli_num_rows($result1);

                        $total_page = ceil($total_records / $limit);

                        echo '<ul class="pagination ">';
                        if ($page > 1) {
                            echo '<li class="page-item"><a class="page-link" href="refund-buyleads.php?page=' . ($page - 1) . '">Prev</a></li>';
                        }
                        for ($i = 1; $i <= $total_page; $i++) {
                            if ($i == $page) {
                                $active = "activebtn";
                            } else {
                                $active = " ";
                            }
                            echo '<li class="page-item' . $active . '"><a class="page-link"  href="refund-buyleads.php?page=' . $i . '">' . $i . '</a></li>';
                        }
                        if ($total_page > $page) {
                            echo '<li class="page-item"><a class="page-link" href="refund-buyleads.php?page=' . ($page + 1) . '">Next</a></li>';
                        }

                        echo '</ul>';
                    }
                    ?>
                </div>
            </div>
    </div>
</div>
 
</div>




<!-- /page content -->
<?php
include_once "include/footer.php";
?>