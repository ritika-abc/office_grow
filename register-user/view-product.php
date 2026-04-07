<?php


include_once "include1/header.php";
if (isset($_SESSION["user_email"])) {
    $user_email = $_SESSION["user_email"];
}
// echo "<script>alert('Welcome : $user_email')</script>";

?>



<style>
    .sp {
        height: 50px;
        width: 50px;
        border-radius: 50%;
        background-color: #e97b01;
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        top: 0%;
        left: 0%;
        font-weight: bold;
        color: white;
    }
</style>




<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>Dashboard </h2>

                </div>

            </div>
        </div>
        <?php
        include "nav.php"; ?>

        <section class="mt-5">
            <h4 class="my-3  text-wh ite p-3">Manage Your Products</h4>
            <hr>
            <?php
            include "config.php"; // database configuration
            /* Calculate Offset Code */
            $limit = 25;
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
            } else {
                $page = 1;
            }
            $offset = ($page - 1) * $limit;
            /* select query of user table with offset and limit */
            $sql = "SELECT * FROM `free-listing-product` where `user_email` ='$user_email' ORDER BY pro_id DESC LIMIT {$offset},{$limit}";
            $result = mysqli_query($con, $sql) or die("Query Failed.");
            if (mysqli_num_rows($result) > 0) {
            ?>
                <?php
                $serial = $offset + 1;
                while ($row = mysqli_fetch_assoc($result)) {
                ?>


                    <div class="container-fluid my-3 my-4" style="position:relative">
                        <div class="row    ">
                            <div class="col-lg-12 ">
                                <div class="dash_blog">
                                    <div class="dash_blog_inner border ">
                                        <div class="container-fluid ">
                                            <div class="box_view  my-3">
                                                <div class="row">
                                                    <div class="col-lg-3  col-md-6 my-2 text-center">
                                                        <img src="<?php echo $row['img1']; ?>" height="250PX" width="200px" style="object-fit: cover;" class="rounded" alt="">
                                                    </div>
                                                    <div class="col-lg-9 col-md-6 my-2">
                                                        <div class="border p-3 px-3 h-100">
                                                            <div class="row border-end  ">
                                                                <div class="col-lg-6   " style="border-right: 2px solid green;">
                                                                    

                                                                    <h4 class="text-capitalize"><?php echo $row['product_name']; ?></h4>
                                                                    <p class="text-success fw-bold"><i class="fa fa-rupee"></i> <?php echo $row['price']; ?> <?php echo $row['unit']; ?></p>
                                                                    <div class=" my-3" style="height: 100px;overflow-x:auto">
                                                                        <p><?php echo $row['product_description']; ?></p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6   ">
                                                                    <ul class="navbar-nav  ">
                                                                        <li class="nav-item my-1"> <i class="fa  fa-location-arrow"></i> <?php echo $row['location']; ?> </li>
                                                                        <li class="nav-item my-1"><b class="fw-bold">MOQ : </b><span class="text-primary fw-bold"><?php echo $row['moq']; ?></span></li>
                                                                        <li class="nav-item my-1"><b class="fw-bold">Packaging Type : </b><span class="text-primary fw-bold"><?php echo $row['packaging_type']; ?></span></li>
                                                                        <li class="nav-item my-1"><b class="fw-bold">Product Life : </b><span class="text-primary fw-bold"><?php echo $row['product_life']; ?></span></li>
                                                                        <li class="nav-item my-1"><b class="fw-bold">Feature : </b><span class="text-primary fw-bold"><?php echo $row['feature']; ?></span></li>
                                                                        <li class="nav-item"><a href="" class="nav-link"> <i class="fa fa-reply-all"></i> <?php echo $row['company_name']; ?></a></li>
                                                                        <li class="nav-item"><a href="" class="nav-link"> <i class="fa  fa-envelope"></i>  <?php echo $row['user_email']; ?></a></li>
                                                                    </ul>

                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-12">
                                                                    <a href="update_product.php?pro_id=<?php echo $row['pro_id'] ?>" class="btn btn-success"><i class="fa fa-edit"></i> Edit</a>
                                                                    <a href="delete-product.php?pro_id=<?php echo $row['pro_id'] ?>" class="btn btn-danger">Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sp "><?php echo $serial; ?></div>
                    </div>
                <?php
                    $serial++;
                } ?>
            <?php
            } else {
                echo "<h3>No Results Found.</h3>";
            }
            // show pagination
            $sql1 = "SELECT * FROM `free-listing-product`";
            $result1 = mysqli_query($con, $sql1) or die("Query Failed.");

            if (mysqli_num_rows($result1) > 0) {

                $total_records = mysqli_num_rows($result1);

                $total_page = ceil($total_records / $limit);

                echo '<ul class="pagination ">';
                if ($page > 1) {
                    echo '<li class="page-item"><a class="page-link" href="view-product.php?page=' . ($page - 1) . '">Prev</a></li>';
                }
                for ($i = 1; $i <= $total_page; $i++) {
                    if ($i == $page) {
                        $active = "activebtn";
                    } else {
                        $active = " ";
                    }
                    echo '<li class="page-item' . $active . '"><a class="page-link"  href="view-product.php?page=' . $i . '">' . $i . '</a></li>';
                }
                if ($total_page > $page) {
                    echo '<li class="page-item"><a class="page-link" href="view-product.php?page=' . ($page + 1) . '">Next</a></li>';
                }

                echo '</ul>';
            }
            ?>
        </section>
    </div>
</div>


<?php
include "include1/footer.php";
?>