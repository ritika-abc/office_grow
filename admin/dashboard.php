<?php


include_once "include/header.php";
include "config.php";

?>

<div class="right_col" role="main">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12  ">
                <!-- nav drop -->
                <div class="row">
                    <div class="col-sm-6 col-lg-4 my-3">
                        <div class="  h-100 text-white   text-center" style="background-image:linear-gradient(195deg, #49a3f1 0%, #1A73E8 100%)">
                            <div class="my-4 w-100 h-100 d-flex align-items-center justify-content-center">
                                <?php
                                $sql_limit = "SELECT `buyleads_id`, COUNT(buyleads_id ) AS p, `buyleads_id`  FROM `buyleads`";
                                $result = $con->query($sql_limit);
                                while ($row = $result->fetch_assoc()) {
                                    $p = $row['p'];
                                    // 

                                }
                                ?>

                                <div class="">
                                    <h4><?php echo $p ?></h4>
                                    <h5>Total Buyleads</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6  col-lg-4 my-3">
                        <div class="  h-100 text-white   text-center" style="background-image:linear-gradient(195deg, #49a3f1 0%, #1A73E8 100%)">
                            <div class="my-4 w-100 h-100 d-flex align-items-center justify-content-center">
                                <?php
                                $sql_limit = "SELECT `id`, COUNT(id ) AS ps, `id`  FROM `refund-buylead` ";
                                $result = $con->query($sql_limit);
                                while ($row = $result->fetch_assoc()) {
                                    $ps = $row['ps'];
                                    // 

                                }
                                ?>

                                <div class="">
                                    <h4><?php echo $ps ?></h4>
                                    <h5>Refund Buyleads</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6  col-lg-4 my-3">
                        <div class="  h-100 text-white   text-center"  style="background-image:linear-gradient(195deg, #49a3f1 0%, #1A73E8 100%)">
                            <div class="my-4 w-100 h-100 d-flex align-items-center justify-content-center">
                                <?php
                                $sql_limit = "SELECT `user_id`, COUNT(user_id) AS user, `user_id`  FROM `user`";
                                $result = $con->query($sql_limit);
                                while ($row = $result->fetch_assoc()) {
                                    $user = $row['user'];
                                    // 

                                }
                                ?>

                                <div class="">
                                    <h4><?php echo $user ?></h4>
                                    <h5>Total Vendor  </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6  col-lg-4 my-3">
                        <div class="  h-100 text-white   text-center" style="background-image:linear-gradient(195deg, #49a3f1 0%, #1A73E8 100%)">
                            <div class="my-4 w-100 h-100 d-flex align-items-center justify-content-center">
                                <?php
                                $sql_limit = "SELECT `user_id`, COUNT(user_id) AS user, `user_id`  FROM `user` where status = '1'";
                                $result = $con->query($sql_limit);
                                while ($row = $result->fetch_assoc()) {
                                    $user = $row['user'];
                                    // 

                                }
                                ?>

                                <div class="">
                                    <h4><?php echo $user ?></h4>
                                    <h5>Active Plan Vendor </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6  col-lg-4 my-3">
                        <div class="  h-100 text-white   text-center" style="background-image:linear-gradient(195deg, #49a3f1 0%, #1A73E8 100%)">
                            <div class="my-4 w-100 h-100 d-flex align-items-center justify-content-center">
                                <?php
                                $sql_limit = "SELECT `user_id`, COUNT(user_id) AS role, `user_id`  FROM `user`    where  user_type = 'paid' ";
                                $result = $con->query($sql_limit);
                                while ($row = $result->fetch_assoc()) {
                                    $role = $row['role'];
                                    // 

                                }
                                ?>

                                <div class="">
                                    <h4><?php echo $role ?></h4>
                                    <h5>Paid Clients </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6  col-lg-4 my-3">
                        <div class="  h-100 text-white   text-center" style="background-image:linear-gradient(195deg, #49a3f1 0%, #1A73E8 100%)">
                            <div class="my-4 w-100 h-100 d-flex align-items-center justify-content-center">
                                <?php
                                $sql_limit = "SELECT `pro_id`, COUNT(pro_id) AS pro, `pro_id`  FROM `product`     ";
                                $result = $con->query($sql_limit);
                                while ($row = $result->fetch_assoc()) {
                                    $pro = $row['pro'];
                                    // 

                                }
                                ?>

                                <div class="">
                                    <h4><?php echo $pro ?></h4>
                                    <h5>Total Products</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
                <!-- nav drop -->
            </div>
        </div>
    </div>
</div>


<?php
include_once "include/footer.php";
?>