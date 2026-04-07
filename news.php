<?php
if (isset($_POST['search'])) {
    // Retrieve the search query
    $search_query = $_POST["search_query"];

    // Connect to your database (replace these variables with your actual database credentials)
    include "config.php";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>growindiaexport</title>
 <link rel="icon" type="image/x-icon" href="image/favicon.png">
    <link rel="mask-icon" href="image/favicon.png">
<link rel="canonical" href="https://growindiaexport.com/news.php">

    <link rel="stylesheet" href="https://growindiaexport.com/assets/css/megadrop.css">
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://growindiaexport.com/assets/css/style.css">
    <link rel="stylesheet" href="https://growindiaexport.com/assets/vendor/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://growindiaexport.com/assets/vendor/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
    <script src="https://growindiaexport.com/assets/vendor/OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js"></script>
    <script src="https://growindiaexport.com/assets/vendor/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="fontawesome-free-6.5.2-web/css/all.min.css">
    <style>
        .about-us-content p {
            color: #333;
            text-align: justify;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <?php include "navbar.php"; ?>

    <!-- Page Header Start -->
    <!-- <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Blog Grid</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>

                <li class="breadcrumb-item text-white active" aria-current="page">Blog </li>
            </ol>
        </nav>
    </div>
</div> -->
    <!-- Page Header End -->

    <div class="container mt-20 pb-20">

        <div class="row">
            <div class="col-12 col-lg-8 col-md-12 col-sm-12">
                <?php
                include "config.php";
                $select = "SELECT * FROM  `news` limit 4";
                $q = mysqli_query($con, $select);
                while ($row = mysqli_fetch_array($q)) {


                ?>
                    <div class="card p-4 my-2">
                        <div class="row">
                            <div class="col-12 ">
                                <p><small><i class="fa-solid fa-calendar-days" style="color: #000b72;"></i> <?php echo $row['date'] ?> </small></p>
                                <div class="row">
                                    <div class="col-3">
                                        <img src="india-africa-are-exploring-rupee-trade-to-improve-commerce-noel-tata.jpg" width="100%" height="150px" style="object-fit: cover;">
                                        <cite>Noel Tata</cite>
                                    </div>
                                    <div class="col-9">
                                        <div class="text">
                                            <h1 style="color: #000b72;" class="fs-6 text-muted"><?php echo $row['heading'] ?> </h1>
                                            <p style="color: #000b72;" class=" "><?php echo $row['short_para'] ?> </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-start text-lg-end">
                                    <a href="single-news.php?id=<?php echo $row['id'] ?>">
                                        <button style="border: none; background: linear-gradient(to right, #ff9d08, #ff5b2e); color: white;" class="p-2 mt-2">Read More </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php   } ?>
            </div>

            <div class="col-12 col-lg-4 col-md-12 col-sm-12">
                <div class="card mt-3 p-2" style="height: 500px; overflow:hidden;">
                    <div class="card-header">
                        <h4>Recent News</h4>
                    </div>
                    <?php
                    include "config.php";
                    $select = "SELECT * FROM `news` ";
                    $q = mysqli_query($con, $select);
                    while ($row = mysqli_fetch_array($q)) {
                    ?>
                        <marquee behavior="" direction="up">
                            <a href="single-news.php?id=<?php echo $row['id'] ?>" title="<?php echo $row['heading'] . "-". $row['date'] ?>" class="text-decoration-none">
                                <div class="card p-3 my-2">
                                    <div class="row">
                                        <div class="col-12 col-lg-4 col-md-12 col-sm-12">
                                            <img src="india-africa-are-exploring-rupee-trade-to-improve-commerce-noel-tata.jpg" width="100%" height="auto" style="object-fit: cover;">
                                        </div>
                                        <div class="col-12  ">
                                            <div class="text">
                                                <h1 style="color: #000b72;" class="fs-6 text-muted"><?php echo $row['heading'] ?> </h1>

                                                <p style="color: #000b72;" class=" "><?php echo $row['short_para'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="single-news.php?id=<?php echo $row['id'] ?>" class="text-decoration-none">
                                <div class="card p-3 my-2">
                                    <div class="row">
                                        <div class="col-12 col-lg-4 col-md-12 col-sm-12">
                                            <img src="india-africa-are-exploring-rupee-trade-to-improve-commerce-noel-tata.jpg" width="100%" height="auto" style="object-fit: cover;">
                                        </div>
                                        <div class="col-12  ">
                                            <div class="text">
                                                <h1 style="color: #000b72;" class="fs-6 text-muted"><?php echo $row['heading'] ?> </h1>

                                                <p style="color: #000b72;" class=" "><?php echo $row['short_para'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="single-news.php?id=<?php echo $row['id'] ?>" class="text-decoration-none">
                                <div class="card p-3 my-2">
                                    <div class="row">
                                        <div class="col-12 col-lg-4 col-md-12 col-sm-12">
                                            <img src="india-africa-are-exploring-rupee-trade-to-improve-commerce-noel-tata.jpg" width="100%" height="auto" style="object-fit: cover;">
                                        </div>
                                        <div class="col-12  ">
                                            <div class="text">
                                                <h1 style="color: #000b72;" class="fs-6 text-muted"><?php echo $row['heading'] ?> </h1>

                                                <p style="color: #000b72;" class=" "><?php echo $row['short_para'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </marquee>
                    <?php   } ?>
                </div>
            </div>
        </div>
    </div>
    </div>


    <?php include "footer.php"; ?>