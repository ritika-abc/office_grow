<?php
include_once "include1/header.php";
?>

<style>
    .s_no {
        height: 50px;
        width: 50px;
        background-color: #ff9800;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transform: translate(-50%, -50%);
        left: 50%;
        border: 2px solid white;
    }
</style>

<!-- page content -->
<div class="container-fluid my-5" role="main">
    <div class="row bg-white py-4 px-2">
        <div class="col-12">
            <div class="row">
                <?php
                include "config.php"; // database configuration
               
                
                if (isset($_SESSION["user_id"])) {
                    $user_id = $_SESSION["user_id"];
                    
                    // Fetch user's plan from the database
                    $se = "SELECT * FROM `user` WHERE `user_id` = '$user_id'";
                    $qu = mysqli_query($con, $se);
                    while ($row3 = mysqli_fetch_array($qu)) {
                        $plan = $row3['plan'];
                    }

                    // Get the current month and year
                    $currentMonth = date('m');
                    $currentYear = date('Y');

                    // Define the query based on the user's plan and current month
                    if ($plan == 'prime') {
                        $sql = "SELECT * FROM `limit_buylead` 
                                WHERE `user_id` = '$user_id' 
                                AND MONTH(date) = '$currentMonth' 
                                AND YEAR(date) = '$currentYear' 
                                ORDER BY `date` DESC LIMIT 10";
                    } else if ($plan == 'prime-pro') {
                        $sql = "SELECT * FROM `limit_buylead` 
                                WHERE `user_id` = '$user_id' 
                                AND MONTH(date) = '$currentMonth' 
                                AND YEAR(date) = '$currentYear' 
                                ORDER BY `date` DESC LIMIT 30";
                    } else if ($plan == 'ultra') {
                        $sql = "SELECT * FROM `limit_buylead` 
                                WHERE `user_id` = '$user_id' 
                                AND MONTH(date) = '$currentMonth' 
                                AND YEAR(date) = '$currentYear' 
                                ORDER BY `date` DESC LIMIT 60";
                    } else if ($plan == 'ultra-pro') {
                        $sql = "SELECT * FROM `limit_buylead` 
                                WHERE `user_id` = '$user_id' 
                                AND MONTH(date) = '$currentMonth' 
                                AND YEAR(date) = '$currentYear' 
                                ORDER BY `date` DESC LIMIT 90";
                    } else {
                        $sql = "SELECT * FROM `limit_buylead` 
                                WHERE `user_id` = '$user_id' 
                                AND MONTH(date) = '$currentMonth' 
                                AND YEAR(date) = '$currentYear' 
                                ORDER BY `date` DESC LIMIT 0";
                    }

                    // Execute the query
                    $result = mysqli_query($con, $sql) or die("Query Failed.");

                    // Check if any results are returned
                    if (mysqli_num_rows($result) > 0) {
                ?>
                        <!-- Display bouyleads -->
                        <?php
                        $serial = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <div class="col-lg-6 my-5 position-relative">
                                <div class="dash_blog">
                                    <div class="dash_blog_inner">
                                        <div class="dash_head">
                                            <h3><span><?php echo $serial; ?>. <?php echo $row['queiry_for']; ?></h3>
                                        </div>
                                        <div class="list_cont">
                                            <p><?php echo $row['date']; ?></p>
                                            <p>Payment <?php echo $row['payment_mode']; ?></p>
                                        </div>
                                        <div class="task_list_main">
                                            <ul class="task_list">
                                                <li class="text-dark fw-bold"> <i class="fa fa-user yellow_color"></i> <?php echo $row['buyer_name']; ?></li>
                                                <li><a href="mailto:<?php echo $row['buyer_email']; ?>"> <strong><?php echo $row['buyer_email']; ?></strong></a></li>
                                                <li><a href="tel:<?php echo $row['number']; ?>"> <strong> <?php echo $row['number']; ?></strong></a></li>
                                                <li><a href="tel:<?php echo $row['number']; ?>"> <strong>Payment Mode  : <?php echo $row['payment_mode']; ?></strong></a></li>
                                                <li><a href="tel:<?php echo $row['number']; ?>"> <strong>Quantity  : <?php echo $row['quantity']; ?></strong></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                            $serial++;
                        } 
                    } else {
                        echo "<p>No bouyleads available for this month.</p>";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>

<!-- /page content -->
<?php
include_once "include1/footer.php";
?>
