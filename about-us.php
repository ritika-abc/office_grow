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
    
    
    <!-- meta-->
    
      <meta name="keywords" content="growindiaexport "/ >

    <meta name="description" content="growindiaexport"/>
    

    <!-- meta-->
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

    <div class="container margin">
        <div class="row">
            <div class="col-12">
                <!-- <h3>Welcome to <b> <span style="color: #e87800;">Grow</span><span style="color:#2d4e8a">India</span><span style="color: #359a00;">Export</span></b> </h3> -->
                <h5>About us

                </h5>
                <div class="about-us-content">
                    <p>Welcome to GrowIndia Export, your trusted partner in facilitating seamless connections between businesses and service providers across a wide range of industries. Since our inception, we've been driven by a clear mission: to simplify and enhance the international trade process, offering businesses a direct path to trusted providers that can help them succeed.At GrowIndia Export, we understand the complexities and challenges that come with international trade. Our platform is designed to streamline these processes, offering a user-friendly experience that connects businesses with the right service providers to meet their needs. Whether you're a small business looking to expand or a larger company seeking reliable partners, we make it easier for you to find the support you need to thrive in a global marketplace.</p>
                    <p>We are committed to providing more than just a platform. Our comprehensive suite of services and support ensures that every interaction and transaction runs smoothly. From connecting businesses with trusted providers to offering valuable market insights, we’re here to make global trade more accessible, efficient, and effective for you.</p>
                    <p>By leveraging our extensive network, advanced technology, and industry expertise, GrowIndia Export is positioned to be your go-to resource in the world of international trade. Our goal is to empower you with the tools and support necessary to expand your reach, build reliable partnerships, and source top-quality services to help your business grow.</p>
                    <p>Discover the potential with GrowIndia Export and see how we can transform the way you approach global trade by connecting you with the right service providers to help you succeed.</p>
                    <p><u>Growindia Export is a brand owned and operated</u> by <b>Webinfoco Nxt Bharat Private Limited</b>, our parent firm. By engaging with Growindia Export, you are interacting with a business entity under the umbrella of Webinfoco Nxt Bharat Private Limited.</p>

                </div>
            </div>
        </div>
    </div>
    <style>
        .about-bg {
            /* background-image: linear-gradient(black,black),url(aerial-view-cargo-ship-cargo-container-harbor.jpg); */
            padding: 2rem 0rem;
            background-size: cover;
            /* background-attachment: fixed; */
            /* background-color: #e87800; */
            background-color: #2d4f8b;
        }
    </style>
    <div class="about-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-11 col-md-12 col-lg-12">
                    <div class="row my-4 align-items-center bg-white rounded">
                        <div class="col-lg-7 my-2">
                            <h5>Our Mission</h5>
                            <p><q>At GrowIndia Export, our mission is to simplify and enhance international trade by offering businesses direct access to reliable service providers. We recognize the challenges of cross-border transactions and aim to offer a platform that makes these processes straightforward, efficient, and accessible for businesses of all sizes. Our goal is to ensure that every business can thrive and grow with the right providers at their side.</q></p>
                        </div>
                        <div class="col-lg-5 my-2">
                            <img src="image/banner/mission.jpg" class="border border-3 border-dark p-2 rounded" height="auto" width="100%" alt="">
                        </div>
                    </div>
                    <div class="row my-4 align-items-center bg-white rounded">
                        <div class="col-lg-5 my-2">
                            <img src="image/banner/vision.png" class="border border-3 border-dark p-2 rounded" height="auto" width="100%" alt="">
                        </div>
                        <div class="col-lg-7 my-2">
                            <h5>Our Vision</h5>
                            <p><q>Our vision at GrowIndia Export is to revolutionize the global trade landscape by creating a world where businesses of all sizes can seamlessly connect with trusted service providers. We strive to be the leading platform that empowers businesses to grow, collaborate, and innovate by offering the highest quality services and fostering a network of reliable, global partners.</q></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <?php include "footer.php"; ?>