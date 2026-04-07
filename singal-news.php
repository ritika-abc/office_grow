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
 <link rel="icon" type="image/x-icon" href="https://growindiaexport.com/image/favicon.png">
    <link rel="mask-icon" href="https://growindiaexport.com/image/favicon.png">
 
  <link rel="stylesheet" href="https://growindiaexport.com/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://growindiaexport.com/assets/css/megadrop.css">
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">-->
    <link rel="stylesheet" href="https://growindiaexport.com/news/50assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://growindiaexport.com/assets/css/style.css">
    <link rel="stylesheet" href="https://growindiaexport.com/assets/vendor/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://growindiaexport.com/assets/vendor/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
    <script src="https://growindiaexport.com/assets/vendor/OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js"></script>
    <script src="https://growindiaexport.com/assets/vendor/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://growindiaexport.com/fontawesome-free-6.5.2-web/css/all.min.css">
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

    <div class="container  py-4">
        <div class="row">
            <?php
            include "config.php";
            $id = $_GET['id'];
            $select = "SELECT * FROM `news`   where `id`='$id'";
            $q = mysqli_query($con, $select);
            while ($row = mysqli_fetch_array($q)) {


            ?>
                <div class="col-12 my-4">
                    <h1 class="text-center"><?php echo $row['heading'] ?></h1>
                    <ul class="nav  ">
                        <li class="nav-item "><a href="/" class="nav-link">Home</a></li>
                        <li class="nav-item ms-auto"><button class="btn btn-success"> Last Updated: <?php echo $row['date'] ?> </button></li>
                    </ul>
                    <hr>
                </div>
                <div class="col-lg-7">

                    <p> <?php
                        echo $row['short_para'];
                        ?></p>
                    <div class="">
                        <?php echo $row['long_para'] ?>
                    </div>
                </div>
                <div class="col-lg-5" style="height:500px">
                    <img src="https://growindiaexport.com/admin/<?php echo  $row['image']  ?>" class="border border-dark rounded mb-5" height="300px" style="object-fit:cover" width="100%" alt="">
                    <marquee direction= "down" class="h-100" >
        <div class="row my-5 ">
            <div class="col-12  ">
             
                    <?php
                    
                    
                    
                    function slugify($text) {
                            $text = preg_replace('~[^\pL\d]+~u', '-', $text);
                            $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
                            $text = preg_replace('~[^-\w]+~', '', $text);
                            $text = trim($text, '-');
                            $text = preg_replace('~-+~', '-', $text);
                            $text = strtolower($text);
                            return $text;
                        } 
                        
                    include "config.php";
                    $select = "SELECT * FROM  `news`   limit 40";
                    $q = mysqli_query($con, $select);
                    $sno1 = 1;
                    while ($row = mysqli_fetch_array($q)) {
                        $heading = slugify($row['heading']);
                       

                    ?>

                        <div class="card p-4 my-3">
                            <div class="row">
                                <div class="col-12 ">
                                    <p><small><i class="fa-solid fa-calendar-days" style="color: #000b72;"></i> <?php echo $row['date'] ?> </small></p>

                                    <div class="row">
                                        <div class="col-12">
                                            <img src="https://growindiaexport.com/admin/<?php echo  $row['image']  ?>" class="border border-2 border-dark rounded" width="100%" height="200px" style="object-fit: cover;" alt="<?php echo  $row['image']  ?>">
                                            <cite><?php echo $row['about_image'] ?></cite>
                                        </div>
                                        <div class="col-12">
                                            <div class="text">
                                                <h3 style="color: #000b72;" class="fs-5 fw-bold  text-muted mb-2"><?php echo $row['heading'] ?> </h3>
                                                <a href="https://growindiaexport.com/news/<?php echo $row['id']."-".$heading ?>" class="text-decoration-none">
                                                    <p style="color: #000b72;" class=" "><?php echo substr($row['long_para'], 0, 200) . '...'; ?></p>
                                                </a>
                                                
                                            </div>
                                        </div>
                                    </div>

                                     
                                </div>
                            </div>
                        </div>

                    <?php $sno1++;
                    } ?>
              
            </div>

            
        </div>
        </marquee>
                </div>
            <?php } ?>
        </div>

    </div>


    <?php
    include "footer.php";

    ?>