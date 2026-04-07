 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>growindiaexport</title>
 <link rel="icon" type="image/x-icon" href="image/favicon.png">
    <link rel="mask-icon" href="image/favicon.png">
<link rel="canonical" href="https://growindiaexport.com/about-us.php">



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
    
    
    
     @media screen and (max-width:450px){
         .story-container {
            top: 10px;
            
        }

    }
    
    @media screen and (max-width:768px){
         .story-container {
            top: 80px;
            position: relative;
            width: 90% !important;
            height: 500px !important;
            margin: auto;
            overflow: hidden;
            border: 2px solid #fff;
            background: rgba(0, 0, 0, 0.7);
            z-index: 1;
        }

    }
    @media screen and (min-width:768px){
         .story-container {
            top: 80px;
            position: relative;
            width: 60% !important;
            height: 500px !important;
            margin: auto;
            overflow: hidden;
            border: 2px solid #fff;
            background: rgba(0, 0, 0, 0.7);
            z-index: 1;
        }

    }
    @media screen and (min-width:992px){
         .story-container {
            top: 80px;
            position: relative;
            width: 35% !important;
            height: 700px !important;
            margin: auto;
            overflow: hidden;
            border: 2px solid #fff;
            background: rgba(0, 0, 0, 0.7);
            z-index: 1;
        }

    }
        body {
            margin: 0;
            font-family: sans-serif;
            background: #000;
            color: #fff;
            overflow: hidden;
           
        }

        /* Blurred background */
        .blurred-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background-size: cover;
            background-position: center;
            filter: blur(25px);
            z-index: -1;
            transition: background-image 0.5s ease-in-out;
        }

        .story-container {
            top: 80px;
            position: relative;
            width: 35%;
            height: 700px;
            margin: auto;
            overflow: hidden;
            border: 2px solid #fff;
            background: rgba(0, 0, 0, 0.7);
            z-index: 1;
        }

        .story {
            display: none;
            width: 100%;
            height: 100%;
            position: absolute;
            background-size: cover;
            background-position: center;
        }

        .story.active {
            display: block;
        }

        .progress-bars {
            position: absolute;
            top: 10px;
            left: 10px;
            right: 10px;
            display: flex;
            gap: 5px;
            z-index: 20;
        }

        .progress-bar {
            flex: 1;
            height: 4px;
            background: rgba(255, 255, 255, 0.2);
            overflow: hidden;
        }

        .progress-bar .progress {
            height: 100%;
            background: white;
            width: 0%;
        }

        .carousel-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            font-size: 30px;
            padding: 10px;
            cursor: pointer;
            z-index: 30;
            user-select: none;
        }

        .prev-btn {
            left: 10px;
        }

        .next-btn {
            right: 10px;
        }

        .carousel-btn:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .pause-area {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 15;
            cursor: pointer;
        }

        .caption {
            position: absolute;
            bottom: 20px;
            left: 20px;
            right: 20px;
            background: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 10px;
            z-index: 25;
            color: #fff;
        }

        .caption h2 {
            margin: 0 0 8px;
            font-size: 20px;
        }

        .caption p {
            margin: 0 0 10px;
            font-size: 14px;
            line-height: 1.4;
        }

        .caption .social a {
            color: #fff;
            text-decoration: none;
            margin-right: 10px;
            font-weight: bold;
            font-size: 14px;
        }

        .caption .social a:hover {
            text-decoration: underline;
        }

        .story-container>.active {
            animation: ani 12s infinite linear;
        }

        @keyframes ani {
            100% {
                transform: scale(1.1) ;
            }
        }
    </style>
    <!-- meta-->
    
      <meta name="keywords" content="growindiaexport "/ >

    <meta name="description" content="growindiaexport"/>
    
</head>

<body>
  
   
        <!-- sm mobile nav start here -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary d-flex d-sm-flex d-md-flex d-lg-none">
                <div class="container-fluid">
                        <a class="navbar-brand" href="/"><img src="https://growindiaexport.com/logo/logo.png" height="70px" width="200px" alt="http://growindiaexport.com/"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                                       
                                        <!-- <li class="nav-item">
                                                <a class="nav-link" href="#">  </a>
                                        </li> -->
                                        <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" style="color: rgb(11 46 135);" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        For Buyers
                                                </a>
                                                <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="https://growindiaexport.com/all-category.php"><i class="fa-solid fa-list"></i> Browse Suppliers</a></li>
                                                        <li><a class="dropdown-item" href="https://growindiaexport.com/post-requirement.php"><i class="fa-solid fa-pen"></i> Post Buy Requirement</a></li>
                                                        <li>
                                                                <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Buyers FAQ</a></li>
                                                </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle"  style="color: rgb(11 46 135);" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        For Suppliers
                                                </a>
                                                <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="https://growindiaexport.com/supplier-register.php"><i class="fa-solid fa-bullhorn"></i> Sell your Product</a></li>
                                                         
                                                        <li>
                                                                <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a class="dropdown-item text-danger" href="https://growindiaexport.com/supplier-register.php">Create Account</a></li>
                                                        <li><a class="dropdown-item text-success" href="https://growindiaexport.com/supplier-login.php">Login Here</a></li>
                                                </ul>
                                        </li>
                                        <hr>
                                        <li class="nav-item" >
                                                <a class="nav-link  " href="/" style="color: rgb(11 46 135);">Home</a>
                                        </li>
                                        <li class="nav-item" >
                                                <a class="nav-link  " href="https://growindiaexport.com/about-us.php" style="color: rgb(11 46 135);"> About Us</a>
                                        </li>
                                        <li class="nav-item"> 
                                                <a class="nav-link  "  href="contact.php" style="color: rgb(11 46 135);"> Contact Us</a>
                                        </li>
                                        <li class="nav-item"> 
                                                <a class="nav-link  "  href="https://growindiaexport.com/buyleads.php" style="color: rgb(11 46 135);"> Trending Buylead</a>
                                        </li>
                                </ul>
                                <form action="search-product.php" method="GET" class="d-flex" role="search">
                                        <input class="form-control me-2" type="search" placeholder="Search Product Name"  name="query">
                                        <button class="btn btn-outline-success" type="submit">Search</button>
                                </form>
                                
                        </div>
                </div>
        </nav>
        <!-- sm mobile nav end here -->
        <!-- lg nav bar start here -->

   



    <!-- Blurred background -->
    <div class="blurred-bg"></div>

    <!-- Story container -->
    <div class="story-container">
        <div class="progress-bars"></div>
        <?php
        include "config.php";
        $id = $_GET['id'];
        $sel = "SELECT * FROM `stories` WHERE `id` = '$id'";
        $q = mysqli_query($con, $sel);

        while ($row = mysqli_fetch_array($q)) {
            $image_list = json_decode($row['images'], true); // decode as associative array
            $s = 1;

            foreach ($image_list as $image) {
                $imagePath = 'https://growindiaexport.com/admin/' . $image['image'];
                $caption = $image['caption'];
        ?>
                <div class="story <?php echo ($s == 1) ? 'active' : ''; ?>"
                    style="background-image: url('<?php echo $imagePath; ?>');">
                    <div class="caption text-center">
                        <h2 class="text-capitalize"><?php echo htmlspecialchars($caption); ?> </h2>

                        <div class="social">
                            <a href="#" target="_blank">Facebook</a> |
                            <a href="#" target="_blank">Instagram</a>
                        </div>
                      
                        <img src="https://growindiaexport.com/logo/logo.png" class="rounded mt-3 fa-bounce" alt="https://growindiaexport.com/logo/logo.png" height="60px" width="190px" >
                    </div>
                </div>
        <?php
                $s++;
            }
        }
        ?>

        <div class="pause-area"></div>
        <button class="carousel-btn prev-btn">&#10094;</button>
        <button class="carousel-btn next-btn">&#10095;</button>
    </div>

    <script>
        const duration = 5000;
        let current = 0;
        let isPaused = false;
        let startTime, remaining = duration,
            $progress;

        function createProgressBars() {
            const count = $('.story').length;
            const $barContainer = $('.progress-bars').empty();
            for (let i = 0; i < count; i++) {
                $barContainer.append(`<div class="progress-bar"><div class="progress"></div></div>`);
            }
        }

        function animateProgressBar(index, fromWidth = 0, time = duration) {
            const $allProgress = $('.progress-bar .progress');
            $progress = $allProgress.eq(index);
            $progress.stop().css('width', fromWidth + '%').animate({
                width: '100%'
            }, time, 'linear', () => {
                if (!isPaused) nextStory();
            });
            startTime = Date.now();
            remaining = time;
        }

        function showStory(index) {
            const $stories = $('.story');
            const $currentStory = $stories.eq(index);
            const bgImage = $currentStory.css('background-image');

            $stories.removeClass('active');
            $currentStory.addClass('active');

            $('.progress-bar .progress').each(function(i) {
                $(this).stop().css('width', i < index ? '100%' : '0%');
            });

            $('.blurred-bg').css('background-image', bgImage);

            animateProgressBar(index);
        }

        function nextStory() {
            current = (current + 1) % $('.story').length;
            showStory(current);
        }

        function prevStory() {
            current = (current - 1 + $('.story').length) % $('.story').length;
            showStory(current);
        }

        function pauseStory() {
            isPaused = true;
            $progress.stop();
            const elapsed = Date.now() - startTime;
            remaining -= elapsed;
        }

        function resumeStory() {
            isPaused = false;
            const currentWidth = parseFloat($progress.css('width')) / $progress.parent().width() * 100;
            animateProgressBar(current, currentWidth, remaining);
        }

        $(document).ready(function() {
            createProgressBars();
            showStory(current);

            $('.next-btn').on('click', function() {
                $progress.stop();
                isPaused = false;
                nextStory();
            });

            $('.prev-btn').on('click', function() {
                $progress.stop();
                isPaused = false;
                prevStory();
            });

            $('.pause-area').on('click', function() {
                if (isPaused) {
                    resumeStory();
                } else {
                    pauseStory();
                }
            });
        });
    </script>


     
   
 
 
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
 
 
 
 
 
 <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/688b0250c001281928a1bdea/1j1fg23l4';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
 
 
 
 
 
 
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>-->
    <script src="https://growindiaexport.com/assets/css/bootstrap.bundle.min.js"></script>
 
</body>

</html>