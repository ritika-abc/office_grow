 

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

      <!-- top nav start here -->
         <section class="d-none d-sm-none d-md-none d-lg-block">
        <div class="top_nav">
                <div class="container">
                        <div class="row">
                                <div class="col-12">
                                        <ul class="nav ">
                                                <li class="nav-item"><a href="supplier-login.php" class="btn btn-dark mt-1"> Login Supplier </a></li>
                                                <li class="nav-item   w-50"><a href="" class="nav-link text-white">
                                                                <marquee behavior="" direction="">Lorem, ipsum dolor sit amet consectetur adipisicing
                                                                        elit. Quisquam, et.</marquee>
                                                        </a></li>
                                                <li class="nav-item ms-auto "><a href="tel:7827514754" class="nav-link  text-white">+91 78275 14754</a></li>
                                                <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                For Buyers
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="post-requirement.php">Post Requirement</a></li>
                                                                <li><a class="dropdown-item" href="all-category.php">Browse Suppliers</a></li>
                                                                <li>
                                                                        <hr class="dropdown-divider">
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">FAQ</a></li>
                                                        </ul>
                                                </li>
                                                <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                For Seller
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="supplier-register.php">Sell Your Product / <small class="text-danger">Register Now</small></a></li>
                                                                <li><a class="dropdown-item" href="#">New Buyleads </a></li>
                                                                <li>
                                                                        <hr class="dropdown-divider">
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Seller FAQ</a></li>
                                                        </ul>
                                                </li>
                                        </ul>
                                </div>
                        </div>
                </div>
        </div>
        <!-- top nav end here -->

        <!-- logo here -->
        <div class="header_top bg-white">

                <ul class="nav p-3 border shadow-sm">
                        <li class="nav-item me-auto"><a href="" class="nav-link"><img src="assets/image/logo/logo.webp" height="50px" width="180px" alt=""></a></li>
                        <li class="nav-item mt-3">
                                <form action="search-product.php" method="GET">
                                        <div class="input_box   ">
                                                <input type="search" placeholder="Search Here By Product Name / Company Name" name="query" class="p-2 px-3 border-end">
                                                <button class="px-2" type="submit">Submit</button>
                                        </div>
                                </form>
                        </li>
                        <li class="nav-item  "><a href="" class="nav-link"> <a href="post-requirement.php" class="btn btn-primary px-3 mx-2 rounded-pill">Post Your Buy Requirement</a></a></li>
                       
                        <!--<li class="nav-item mt-2 mx-3"><a href="" class=" ">-->
                        <!--                <div class="user_icon text-center">-->
                        <!--                        <img src="image/icon/mailgif.gif" height="25px" width="25px" alt=""> <br>-->
                        <!--                        <a href="" class="text-decoration-none"><small>Sign In</small></a> / <a href="" class="text-decoration-none"><small>Join</small></a>-->

                        <!--                </div>-->
                        <!--        </a>-->
                        <!--</li>-->
                        <!--<li class="nav-item mt-2 mx-2"><a href="" class=" ">-->
                        <!--                <div class="user_icon text-center">-->
                        <!--                        <img src="image/icon/user.png" height="25px" width="25px" alt=""> <br>-->
                        <!--                        <a href="" class="text-decoration-none"> <a href="" class="text-decoration-none"><small>Message</small></a>-->

                        <!--                </div>-->
                        <!--        </a>-->
                        <!--</li>-->
                        <!--<li class="nav-item mt-2 mx-2"><a href="" class=" ">-->
                        <!--                <div class="user_icon text-center">-->
                        <!--                        <img src="image/icon/fastcartgif.gif" height="25px" width="25px" alt=""> <br>-->
                        <!--                        <a href="" class="text-decoration-none"> <a href="" class="text-decoration-none"><small>Inquiry-->
                        <!--                                                Basket</small></a>-->

                        <!--                </div>-->
                        <!--        </a>-->
                        <!--</li>-->
                </ul>
        </div>
        </section>
        <!-- logo here -->

        <!-- sm mobile nav start here -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary d-flex d-sm-flex d-md-flex d-lg-none">
                <div class="container-fluid">
                        <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                                        </li>
                                        <li class="nav-item">
                                                <a class="nav-link" href="#">Link</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Dropdown
                                                </a>
                                                <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li>
                                                                <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                </ul>
                                        </li>
                                        <li class="nav-item">
                                                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                                        </li>
                                </ul>
                                <form class="d-flex" role="search">
                                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                        <button class="btn btn-outline-success" type="submit">Search</button>
                                </form>
                        </div>
                </div>
        </nav>
        <!-- sm mobile nav end here -->
        <!-- lg nav bar start here -->

    <!-- breadcrumb start here -->
    <div class="container-fluid my-2">
        <div class="row">
            <div class="col-12">
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>

                        <!--  -->
                        <?php
                        include "config.php";
                        $sub_id = $_GET['sub_id'];
                        $select = "SELECT * from `sub_cat` where `sub_id`='$sub_id'";
                        $qu = mysqli_query($con, $select);
                        $s_no = 1;
                        while ($row = mysqli_fetch_array($qu)) {
                            //      $sub_id = $row['sub_id']; 
                        ?>
                            <li class="breadcrumb-item"> <?php echo $row['sub_cat_name'] ?> </li>

                        <?php } ?>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- members -->
    <!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-7">
            <marquee behavior="" direction="">
                <a href="" target="_blank"><img src="image/categoryimage/cement.jpg" height="auto" width="25%" class="m-3" alt=""></a>
                <a href="" target="_blank"><img src="image/categoryimage/cement.jpg" height="auto" width="25%" class="m-3" alt=""></a>
                <a href="" target="_blank"><img src="image/categoryimage/cement.jpg" height="auto" width="25%" class="m-3" alt=""></a>
                <a href="" target="_blank"><img src="image/categoryimage/cement.jpg" height="auto" width="25%" class="m-3" alt=""></a>
                <a href="" target="_blank"><img src="image/categoryimage/cement.jpg" height="auto" width="25%" class="m-3" alt=""></a>
                <a href="" target="_blank"><img src="image/categoryimage/cement.jpg" height="auto" width="25%" class="m-3" alt=""></a>
                <a href="" target="_blank"><img src="image/categoryimage/cement.jpg" height="auto" width="25%" class="m-3" alt=""></a>
            </marquee>
        </div>
    </div>
  </div> -->

    <?php
    include "config.php";
    $sub_id = $_GET['sub_id'];
    $state_name = $_GET['state_name'];
    $select = "SELECT * from `inner_cat` where `sub_id`='$sub_id' ";
    $qu = mysqli_query($con, $select);
    $s_no = 1;
    while ($row = mysqli_fetch_array($qu)) {
        // $sub_id = $row['sub_id'];
        $inner_cat_id = $row['inner_cat_id'];

    ?>
        <div class="container shadow-lg   border-3 border-dark my-5 p-3 border rounded bg-white">
            <h5><?php echo $row['inner_cat_name'] ?></h5>
            <div class="row">
                <?php
                include "config.php";
                // $inner_cat_id = $_GET['inner_cat_id'];
                $select1 = "SELECT * from `micro` where `inner_cat_id`='$inner_cat_id' ";
                $qu1 = mysqli_query($con, $select1);

                while ($row1 = mysqli_fetch_array($qu1)) {
                    $micro_cat_image = $row1['micro_cat_image'];

                ?>
                    <div class="col-6 col-md-4 col-lg-2 my-2">
                        <a href="micro-category.php?micro_id=<?php echo $row1['micro_id'] ?>&state_name=<?php echo $state_name?>" class="text-decoration-none text-dark border   d-block p-2 rounded">
                            <div class="text-center ">
                                <div class=" ">
                                    <img src="./admin/<?php echo $row1['micro_cat_image'] ?>" class="rounded " height="auto" style="object-fit:cover" width="55%" alt="">
                                    <p><?php echo $row1['micro_name'] ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>
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
                        items: 7
                    }
                }
            })
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>