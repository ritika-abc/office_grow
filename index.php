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
        <title>Document</title>

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
                body {
                        background-color: #fdfdfd !important;
                        font-family: "Roboto", sans-serif;
                }

                a {
                        text-decoration: none !important;
                }

                .item_cat {
                        height: 200px;
                        align-items: center;
                        display: flex;
                        aspect-ratio: 0 / 1;
                        justify-content: center;
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
                                                <ul class="nav py-2">
                                                        <!--<li class="nav-item"><a href="supplier-login.php" class="btn btn-dark mt-1"> Login Supplier </a></li>-->
                                                        <div class="btn-group">
                                                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        <i class="fa-brands fa-facebook"></i> Login Here
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="supplier-login.php"> Login Supplier</a></li>
                                                                        <li><a class="dropdown-item" href="admin/index.php">Login User</a></li>

                                                                </ul>
                                                        </div>
                                                        <li class="nav-item   w-50"><a href="" class="nav-link text-white">
                                                                        <marquee behavior="" direction="">Lorem, ipsum dolor sit amet consectetur adipisicing
                                                                                elit. Quisquam, et.</marquee>
                                                                </a></li>
                                                        <li class="nav-item ms-auto "><a href="4" class="nav-link  text-white">+91 7686*****</a></li>
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
                                                                        <li><a class="dropdown-item" href="buyleads.php">New Buyleads </a></li>
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
                                <li class="nav-item me-auto"><a href="/" class="nav-link"><img src="logo/logo.png" height="75px" width="256px" alt="https://growindiaexport.com/"></a></li>
                                <li class="nav-item mt-3">
                                        <form action="search-product.php" method="GET">
                                                <div class="input_box   ">
                                                        <input type="search" placeholder="Search Here By Product Name / Company Name" name="query" class="p-2 px-3 border-end">
                                                        <button class="px-2" type="submit">Submit</button>
                                                </div>
                                        </form>
                                </li>
                                <li class="nav-item  "><a href="" class="nav-link"> <a href="post-requirement.php" class="btn btn-primary px-3 mx-2 rounded-pill">Post Your Buy Requirement</a></a></li>
                        </ul>
                </div>
        </section>
        <!-- logo here -->

        <!-- sm mobile nav start here -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary d-flex d-sm-flex d-md-flex d-lg-none">
                <div class="container-fluid">
                        <a class="navbar-brand" href="/"><img src="logo/logo.png" height="70px" width="200px" alt="http://growindiaexport.com/"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                                        <!-- <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="/">Home</a>
                                        </li> -->
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
                                                <a class="nav-link dropdown-toggle" style="color: rgb(11 46 135);" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        For Suppliers
                                                </a>
                                                <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="https://growindiaexport.com/supplier-register.php"><i class="fa-solid fa-bullhorn"></i> Sell your Product</a></li>
                                                        <li><a class="dropdown-item" href="https://growindiaexport.com/buyleads.php"><i class="fa-solid fa-tag"></i> Latest Buy Leads</a></li>
                                                        <li>
                                                                <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a class="dropdown-item text-danger" href="https://growindiaexport.com/supplier-register.php">Create Account</a></li>
                                                        <li><a class="dropdown-item text-success" href="https://growindiaexport.com/supplier-login.php">Login Here</a></li>
                                                </ul>
                                        </li>
                                        <hr>
                                        <li class="nav-item">
                                                <a class="nav-link  " href="/" style="color: rgb(11 46 135);">Home</a>
                                        </li>
                                        <li class="nav-item">
                                                <a class="nav-link  " href="about.php" style="color: rgb(11 46 135);"> Contact Us</a>
                                        </li>
                                        <li class="nav-item">
                                                <a class="nav-link  " href="contact.php" style="color: rgb(11 46 135);"> Advertise with Us</a>
                                        </li>
                                </ul>
                                <form action="search-product.php" method="GET" class="d-flex" role="search">
                                        <input class="form-control me-2" type="search" placeholder="Search Here By Product Name / Company Name" name="query">
                                        <button class="btn btn-outline-success" type="submit">Search</button>
                                </form>
                        </div>
                </div>
        </nav>
        <!-- sm mobile nav end here -->
        <!-- lg nav bar start here -->
        <section class="browse-cat-sec d-none d-sm-none d-md-none d-lg-block">
                <div class="fw">
                        <div class="browse-cat fo">
                                <aside class="sidebar">
                                        <div>
                                                <div class="bcs-header">
                                                        <img src="" width="22" height="13" title="Browse Category" loading="lazy" decoding="async" fetchpriority="low" />Browse Categories
                                                </div>
                                                <ul class="mc-list">
                                                        <li class="mcl-iteam">
                                                                <a href="/industry/home-supplies.htm"><img src=" " class="svg_icon" alt="HomeSupplies" width="22" height="22" loading="lazy" decoding="async" fetchpriority="low" />Home
                                                                        Supplies </a>
                                                                <ul class="mcsc" id="sub_cat_11948">
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/dinnerware-tableware.htm">Dinnerware,
                                                                                                Tableware and Serving Utensils</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/casserole.htm">Casserole</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/casserole-set.htm">Casserole
                                                                                                        Set</a></li>
                                                                                        <li><a href="/indian-suppliers/stainless-steel-dinner-set.htm">Stainless
                                                                                                        Steel Dinner Set</a></li>
                                                                                        <li><a href="/indian-suppliers/bowls.htm">Bowls</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/hot-case.htm">Hot
                                                                                                        Case</a></li>
                                                                                        <li><a href="/indian-manufacturers/dinnerware-tableware.htm" class="silver ts0">View More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/incense-incensory.htm">Incense,
                                                                                                Incensory & Pooja Articles</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/camphor.htm">Camphor</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/incense-sticks.htm">Incense
                                                                                                        Sticks</a></li>
                                                                                        <li><a href="/indian-suppliers/shankh.htm">Shankh</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/hanuman-kavach.htm">Hanuman
                                                                                                        Kavach</a></li>
                                                                                        <li><a href="/indian-manufacturers/incense-incensory.htm" class="silver ts0">View More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/cleaning-supplies.htm">Home
                                                                                                Cleaning Products</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/squeegees.htm">Squeegees</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/white-phenyl-compound.htm">White
                                                                                                        Phenyl Compound</a></li>
                                                                                        <li><a href="/indian-suppliers/vacuum-purifier.htm">Vacuum
                                                                                                        Purifier</a></li>
                                                                                        <li><a href="/indian-suppliers/washing-brushes.htm">Washing
                                                                                                        Brushes</a></li>
                                                                                        <li><a href="/indian-manufacturers/cleaning-supplies.htm" class="silver ts0">View More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/soaps-detergents.htm">Soaps
                                                                                                & Detergents</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/sodium-bicarbonate.htm">Sodium
                                                                                                        Bicarbonate</a></li>
                                                                                        <li><a href="/indian-suppliers/sodium-sulphate.htm">Sodium
                                                                                                        Sulphate</a></li>
                                                                                        <li><a href="/indian-suppliers/soda-ash.htm">Soda
                                                                                                        Ash</a></li>
                                                                                        <li><a href="/indian-suppliers/detergent.htm">Detergent</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-manufacturers/soaps-detergents.htm" class="silver ts0">View
                                                                                                        More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/baby-products.htm">Child
                                                                                                & Baby Care Products</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/bio-oil.htm">Bio
                                                                                                        Oil</a></li>
                                                                                        <li><a href="/indian-suppliers/baby-bath-tub.htm">Baby
                                                                                                        Bath Tub</a></li>
                                                                                        <li><a href="/indian-suppliers/baby-carrier.htm">Baby
                                                                                                        Carrier</a></li>
                                                                                        <li><a href="/indian-suppliers/baby-cradle.htm">Baby
                                                                                                        Cradle</a></li>
                                                                                        <li><a href="/indian-manufacturers/baby-products.htm" class="silver ts0">View
                                                                                                        More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/smoking-accessories.htm">Smoking
                                                                                                Accessories</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/lighters.htm">Lighters</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/ashtrays.htm">Ashtray</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/bongs.htm">Bongs</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/cigarette-filter.htm">Cigarette
                                                                                                        Filter</a></li>
                                                                                        <li><a href="/indian-manufacturers/smoking-accessories.htm" class="silver ts0">View More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/bags.htm">Suitcase,
                                                                                                Briefcases, Portfolio & Laptop Bags</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/laptop-bags.htm">Laptop
                                                                                                        Bags</a></li>
                                                                                        <li><a href="/indian-suppliers/backpacks.htm">Backpacks</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/luggage-bags.htm">Luggage
                                                                                                        Bags</a></li>
                                                                                        <li><a href="/indian-suppliers/suitcase.htm">Suitcase</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/trekking-bag.htm">Trekking
                                                                                                        Bags</a></li>
                                                                                        <li><a href="/indian-manufacturers/bags.htm" class="silver ts0">View
                                                                                                        More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                </ul>
                                                        </li>
                                                        <li class="mcl-iteam">
                                                                <a href="/industry/agriculture.htm"><img src=" " class="svg_icon" alt="Agriculture" width="22" height="22" loading="lazy" decoding="async" fetchpriority="low" />Agriculture </a>
                                                                <ul class="mcsc" id="sub_cat_10001">
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/fruits.htm">Fruits</a>
                                                                                </p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/apple.htm">Fresh
                                                                                                        Apple</a></li>
                                                                                        <li><a href="/indian-suppliers/blackberry.htm">Blackberry
                                                                                                        Fruit</a></li>
                                                                                        <li><a href="/indian-suppliers/mango.htm">Mango</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/dragon-fruit.htm">Dragon
                                                                                                        Fruit</a></li>
                                                                                        <li><a href="/indian-manufacturers/fruits.htm" class="silver ts0">View
                                                                                                        More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/irrigation-watering.htm">Irrigation
                                                                                                Equipment & Systems</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/drip-irrigation.htm">Drip
                                                                                                        Irrigation</a></li>
                                                                                        <li><a href="/indian-suppliers/sprinkler-system.htm">Sprinkler
                                                                                                        System</a></li>
                                                                                        <li><a href="/indian-suppliers/drip-irrigation-system.htm">Drip
                                                                                                        Irrigation System</a></li>
                                                                                        <li><a href="/indian-suppliers/thresher.htm">Agricultural
                                                                                                        Thresher</a></li>
                                                                                        <li><a href="/indian-manufacturers/irrigation-watering.htm" class="silver ts0">View More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/f-grains.htm">Food
                                                                                                Grains & Cereals</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/oats.htm">Oats</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/rice.htm">Rice</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/wheat.htm">Wheat</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/barley.htm">Barley</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/jaggery.htm">Gud
                                                                                                        Jaggery</a></li>
                                                                                        <li><a href="/indian-suppliers/sugar.htm">Sugar</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-manufacturers/f-grains.htm" class="silver ts0">View
                                                                                                        More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/flowers-plant.htm">Fresh
                                                                                                Flowers and Plants</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/rose-flower.htm">Rose
                                                                                                        Flower</a></li>
                                                                                        <li><a href="/indian-suppliers/red-rose.htm">Red
                                                                                                        Rose</a></li>
                                                                                        <li><a href="/indian-suppliers/mango-tree.htm">Mango
                                                                                                        Tree</a></li>
                                                                                        <li><a href="/indian-suppliers/lotus-flower.htm">Lotus
                                                                                                        Flower</a></li>
                                                                                        <li><a href="/indian-suppliers/lily-flower.htm">Lily
                                                                                                        Flower</a></li>
                                                                                        <li><a href="/indian-manufacturers/flowers-plant.htm" class="silver ts0">View
                                                                                                        More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/tractor.htm">Tractor
                                                                                                & Tractor Parts</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/power-tiller.htm">Power
                                                                                                        Tiller</a></li>
                                                                                        <li><a href="/indian-suppliers/mini-tractor.htm">Mini
                                                                                                        Tractor</a></li>
                                                                                        <li><a href="/indian-suppliers/combine-harvester.htm">Combine
                                                                                                        Harvester</a></li>
                                                                                        <li><a href="/indian-suppliers/tiller.htm">Tiller</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-manufacturers/tractor.htm" class="silver ts0">View
                                                                                                        More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/dry-fruits.htm">Dry
                                                                                                Fruits & Nuts</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/peanut.htm">Peanut</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/walnuts.htm">Walnuts</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/prunes.htm">Prunes</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/almonds.htm">Almond</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-manufacturers/dry-fruits.htm" class="silver ts0">View
                                                                                                        More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/vegetables.htm">Fresh,
                                                                                                Dried & Preserved Vegetables</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/celery.htm">Celery</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/broccoli.htm">Broccoli</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/tomato.htm">Tomato</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/spinach.htm">Spinach</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/cucumber.htm">Cucumber</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-manufacturers/vegetables.htm" class="silver ts0">View
                                                                                                        More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/agrochemicals.htm">Pesticides
                                                                                                & Insecticides</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/sulphur.htm">Sulphur</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/insecticides.htm">Insecticides</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/permethrin.htm">Permethrin</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/chlorpyrifos.htm">Chlorpyrifos</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-manufacturers/agrochemicals.htm" class="silver ts0">View
                                                                                                        More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/agriculture-equipment.htm">Agriculture
                                                                                                Equipment and Supplies</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/agricultural-implements.htm">Agricultural
                                                                                                        Implements</a></li>
                                                                                        <li><a href="/indian-suppliers/seed-drill.htm">Seed
                                                                                                        Drill</a></li>
                                                                                        <li><a href="/indian-suppliers/agriculture-tools.htm">Agriculture
                                                                                                        Tools</a></li>
                                                                                        <li><a href="/indian-suppliers/pickaxe.htm">Pickaxe</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-manufacturers/agriculture-equipment.htm" class="silver ts0">View More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                </ul>
                                                        </li>
                                                        <li class="mcl-iteam">
                                                                <a href="/industry/food-beverages.htm"><img src=" " class="svg_icon" alt="FoodProductBeverages" width="22" height="22" loading="lazy" decoding="async" fetchpriority="low" />Food Product & Beverages
                                                                </a>
                                                                <ul class="mcsc" id="sub_cat_10988">
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/vegetables.htm">Fresh,
                                                                                                Dried & Preserved Vegetables</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/celery.htm">Celery</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/broccoli.htm">Broccoli</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/tomato.htm">Tomato</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/spinach.htm">Spinach</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/cucumber.htm">Cucumber</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/garlic.htm">Garlic</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-manufacturers/vegetables.htm" class="silver ts0">View
                                                                                                        More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/fruits.htm">Fruits</a>
                                                                                </p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/apple.htm">Fresh
                                                                                                        Apple</a></li>
                                                                                        <li><a href="/indian-suppliers/blackberry.htm">Blackberry
                                                                                                        Fruit</a></li>
                                                                                        <li><a href="/indian-suppliers/mango.htm">Mango</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/dragon-fruit.htm">Dragon
                                                                                                        Fruit</a></li>
                                                                                        <li><a href="/indian-suppliers/pomegranate.htm">Pomegranate</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/avocado.htm">Avocado</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-manufacturers/fruits.htm" class="silver ts0">View
                                                                                                        More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/dairy-products.htm">Dairy
                                                                                                Products</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/ice-cream.htm">Ice
                                                                                                        Cream</a></li>
                                                                                        <li><a href="/indian-suppliers/milk.htm">Milk</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/tofu.htm">Tofu</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/paneer.htm">Paneer</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/butter.htm">Butter</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/yoghurt.htm">Curd</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-manufacturers/dairy-products.htm" class="silver ts0">View
                                                                                                        More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/beverages.htm">Beverages</a>
                                                                                </p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/apple-cider-vinegar.htm">Apple
                                                                                                        Cider Vinegar</a></li>
                                                                                        <li><a href="/indian-suppliers/ice.htm">Ice</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/coconut-water.htm">Coconut
                                                                                                        Water</a></li>
                                                                                        <li><a href="/indian-suppliers/distilled-water.htm">Distilled
                                                                                                        Water</a></li>
                                                                                        <li><a href="/indian-suppliers/drinking-water.htm">Drinking
                                                                                                        Water</a></li>
                                                                                        <li><a href="/indian-manufacturers/beverages.htm" class="silver ts0">View
                                                                                                        More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/confectionery.htm">Confectionery
                                                                                                & Bakery Products</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/birthday-cakes.htm">Cakes</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/candy.htm">Candy
                                                                                                        & Jelly</a></li>
                                                                                        <li><a href="/indian-suppliers/peanut-butter.htm">Peanut
                                                                                                        Butter</a></li>
                                                                                        <li><a href="/indian-suppliers/bread.htm">Bread
                                                                                                        & Buns</a></li>
                                                                                        <li><a href="/indian-suppliers/hot-dog.htm">Hot
                                                                                                        Dog</a></li>
                                                                                        <li><a href="/indian-manufacturers/confectionery.htm" class="silver ts0">View
                                                                                                        More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/sweets-namkeen.htm">Sweets
                                                                                                & Namkeen</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/moong-dal-halwa.htm">Moong
                                                                                                        Dal Halwa</a></li>
                                                                                        <li><a href="/indian-suppliers/nachos.htm">Nachos</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/sabudana-vada.htm">Sabudana
                                                                                                        Vada</a></li>
                                                                                        <li><a href="/indian-suppliers/vada.htm">Vada</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/popcorn.htm">Popcorn</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-manufacturers/sweets-namkeen.htm" class="silver ts0">View
                                                                                                        More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/dry-fruits.htm">Dry
                                                                                                Fruits & Nuts</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/peanut.htm">Peanut</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/walnuts.htm">Walnuts</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/prunes.htm">Prunes</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/almonds.htm">Almond</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-manufacturers/dry-fruits.htm" class="silver ts0">View
                                                                                                        More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/seafood.htm">Seafood</a>
                                                                                </p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/fish.htm">Fish</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/octopus.htm">Octopus</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/squid.htm">Squid</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/fish-fry.htm">Fish
                                                                                                        Fry</a></li>
                                                                                        <li><a href="/indian-suppliers/lobster.htm">Lobster</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-manufacturers/seafood.htm" class="silver ts0">View
                                                                                                        More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/spices.htm">Cooking
                                                                                                Spices and Masala</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/cinnamon.htm">Cinnamon</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/ginger.htm">Ginger</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/turmeric.htm">Turmeric</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/saffron.htm">Saffron</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/coriander.htm">Coriander</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-manufacturers/spices.htm" class="silver ts0">View
                                                                                                        More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                </ul>
                                                        </li>
                                                        <li class="mcl-iteam">
                                                                <a href="/industry/fashion-apparel.htm"><img src=" " class="svg_icon" alt="ApparelFashion" width="22" height="22" loading="lazy" decoding="async" fetchpriority="low" />Apparel
                                                                        & Fashion </a>
                                                                <ul class="mcsc" id="sub_cat_10086">
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/winter-clothing.htm">Winter
                                                                                                Clothing & Accessories</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/blazers.htm">Blazers</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/sweater.htm">Sweater</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/sweatshirt.htm">Sweatshirt</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/thermal-wear.htm">Thermal
                                                                                                        Wear</a></li>
                                                                                        <li><a href="/indian-suppliers/winter-jackets.htm">Winter
                                                                                                        Jackets</a></li>
                                                                                        <li><a href="/indian-manufacturers/winter-clothing.htm" class="silver ts0">View
                                                                                                        More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/kids-clothes.htm">Kids
                                                                                                Dresses & Clothing</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/fancy-dress.htm">Fancy
                                                                                                        Dress</a></li>
                                                                                        <li><a href="/indian-suppliers/baby-dresses.htm">Baby
                                                                                                        Dresses</a></li>
                                                                                        <li><a href="/indian-suppliers/kids-lehenga.htm">Kids
                                                                                                        Lehenga</a></li>
                                                                                        <li><a href="/indian-suppliers/tutu-dress.htm">Tutu
                                                                                                        Dress</a></li>
                                                                                        <li><a href="/indian-suppliers/kids-frocks.htm">Kids
                                                                                                        Frocks</a></li>
                                                                                        <li><a href="/indian-manufacturers/kids-clothes.htm" class="silver ts0">View
                                                                                                        More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/innerwear.htm">Undergarments
                                                                                                and Inner Wear</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/bikinis.htm">Bikini</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/ladies-bra.htm">Ladies
                                                                                                        Bra</a></li>
                                                                                        <li><a href="/indian-suppliers/backless-bra.htm">Backless
                                                                                                        Bra</a></li>
                                                                                        <li><a href="/indian-suppliers/panties.htm">Panties</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/thong.htm">Thong</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-manufacturers/innerwear.htm" class="silver ts0">View
                                                                                                        More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/womens-clothing.htm">Womens
                                                                                                Clothing</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/anarkali-suits.htm">Anarkali
                                                                                                        Suits</a></li>
                                                                                        <li><a href="/indian-suppliers/anarkali-dress.htm">Anarkali
                                                                                                        Dress</a></li>
                                                                                        <li><a href="/indian-suppliers/pakistani-suits.htm">Pakistani
                                                                                                        Suits</a></li>
                                                                                        <li><a href="/indian-suppliers/designer-blouses.htm">Designer
                                                                                                        Blouses</a></li>
                                                                                        <li><a href="/indian-suppliers/salwar-kameez.htm">Salwar
                                                                                                        Kameez</a></li>
                                                                                        <li><a href="/indian-manufacturers/womens-clothing.htm" class="silver ts0">View
                                                                                                        More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/footwear.htm">Men,
                                                                                                Women & Kids Footwear</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/nike-shoes.htm">Nike
                                                                                                        Shoes</a></li>
                                                                                        <li><a href="/indian-suppliers/shoes.htm">Shoes</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/adidas-shoes.htm">Adidas
                                                                                                        Shoes</a></li>
                                                                                        <li><a href="/indian-suppliers/puma-shoes.htm">Puma
                                                                                                        Shoes</a></li>
                                                                                        <li><a href="/indian-manufacturers/footwear.htm" class="silver ts0">View
                                                                                                        More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/leather-clothing.htm">Leather
                                                                                                Clothing</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/leather-jacket.htm">Leather
                                                                                                        Jacket</a></li>
                                                                                        <li><a href="/indian-suppliers/leather-gloves.htm">Leather
                                                                                                        Gloves</a></li>
                                                                                        <li><a href="/indian-suppliers/leather-pants.htm">Leather
                                                                                                        Pants</a></li>
                                                                                        <li><a href="/indian-suppliers/ladies-leather-jackets.htm">Ladies
                                                                                                        Leather Jackets</a></li>
                                                                                        <li><a href="/indian-suppliers/girls-leather-jacket.htm">Girls
                                                                                                        Leather Jacket</a></li>
                                                                                        <li><a href="/indian-suppliers/leather-jeans.htm">Leather
                                                                                                        Jeans</a></li>
                                                                                        <li><a href="/indian-manufacturers/leather-clothing.htm" class="silver ts0">View
                                                                                                        More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/mens-clothing.htm">Mens
                                                                                                Clothing</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/pathani-suit.htm">Pathani
                                                                                                        Suit</a></li>
                                                                                        <li><a href="/indian-suppliers/cargo-pants.htm">Cargo
                                                                                                        Pants</a></li>
                                                                                        <li><a href="/indian-suppliers/men-shirts.htm">Men
                                                                                                        Shirts</a></li>
                                                                                        <li><a href="/indian-suppliers/lungi.htm">Lungi</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/suitstuxedo.htm">Mens
                                                                                                        Suits</a></li>
                                                                                        <li><a href="/indian-manufacturers/mens-clothing.htm" class="silver ts0">View
                                                                                                        More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                </ul>
                                                        </li>
                                                        <li class="mcl-iteam">
                                                                <a href="/industry/chemicals.htm"><img src=" " class="svg_icon" alt="Chemicals" width="22" height="22" loading="lazy" decoding="async" fetchpriority="low" />Chemicals </a>
                                                                <ul class="mcsc" id="sub_cat_10474">
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/industrial-gases.htm">Medical
                                                                                                and Industrial Gases</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/oxygen.htm">Oxygen</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/natural-gas.htm">Natural
                                                                                                        Gas</a></li>
                                                                                        <li><a href="/indian-suppliers/hydrogen.htm">Hydrogen</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/nitric-oxide.htm">Nitric
                                                                                                        Oxide</a></li>
                                                                                        <li><a href="/indian-manufacturers/industrial-gases.htm" class="silver ts0">View
                                                                                                        More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/petroleum-products.htm">Petrochemicals
                                                                                                & Petroleum Products</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/diesel.htm">Diesel</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/crudeoil.htm">Crude
                                                                                                        Oil</a></li>
                                                                                        <li><a href="/indian-suppliers/fossil-fuels.htm">Fossil
                                                                                                        Fuels</a></li>
                                                                                        <li><a href="/indian-suppliers/bitumen.htm">Bitumen</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/gasoline.htm">Petrol</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/kerosene.htm">Kerosene</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-manufacturers/petroleum-products.htm" class="silver ts0">View More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/agrochemicals.htm">Pesticides
                                                                                                & Insecticides</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/sulphur.htm">Sulphur</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/insecticides.htm">Insecticides</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/permethrin.htm">Permethrin</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/chlorpyrifos.htm">Chlorpyrifos</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/malathion.htm">Malathion</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/trichoderma.htm">Trichoderma</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-manufacturers/agrochemicals.htm" class="silver ts0">View
                                                                                                        More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/dyes-pigments.htm">Dyes
                                                                                                & Pigments</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/methyl-orange.htm">Methyl
                                                                                                        Orange</a></li>
                                                                                        <li><a href="/indian-suppliers/titanium-dioxide.htm">Titanium
                                                                                                        Dioxide</a></li>
                                                                                        <li><a href="/indian-suppliers/china-clay.htm">China
                                                                                                        Clay</a></li>
                                                                                        <li><a href="/indian-suppliers/anthocyanin.htm">Anthocyanin</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-manufacturers/dyes-pigments.htm" class="silver ts0">View
                                                                                                        More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/textile-chemicals.htm">Textile
                                                                                                Chemicals</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/enzymes.htm">Enzymes</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/viscose.htm">Viscose</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/lead-acetate.htm">Lead
                                                                                                        Acetate</a></li>
                                                                                        <li><a href="/indian-suppliers/malachite-green.htm">Malachite
                                                                                                        Green</a></li>
                                                                                        <li><a href="/indian-suppliers/foaming-agent.htm">Foaming
                                                                                                        Agent</a></li>
                                                                                        <li><a href="/indian-suppliers/sequestering-agent.htm">Sequestering
                                                                                                        Agent</a></li>
                                                                                        <li><a href="/indian-manufacturers/textile-chemicals.htm" class="silver ts0">View More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                </ul>
                                                        </li>
                                                        <li class="mcl-iteam">
                                                                <a href="/industry/industrial-supply.htm"><img src=" " class="svg_icon" alt="IndustrialSupplies" width="22" height="22" loading="lazy" decoding="async" fetchpriority="low" />Industrial Supplies </a>
                                                                <ul class="mcsc" id="sub_cat_11220">
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/acoustic-window-enclosures.htm">Acoustic
                                                                                                Window & Enclosures</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/acoustic-enclosure.htm">Acoustic
                                                                                                        Enclosure</a></li>
                                                                                        <li><a href="/indian-suppliers/acoustic-foam.htm">Acoustic
                                                                                                        Foam</a></li>
                                                                                        <li><a href="/indian-suppliers/sound-proof-glass.htm">Sound
                                                                                                        Proof Glass</a></li>
                                                                                        <li><a href="/indian-suppliers/acoustic-panels.htm">Acoustic
                                                                                                        Panel</a></li>
                                                                                        <li><a href="/indian-suppliers/room-acoustics.htm">Room
                                                                                                        Acoustics</a></li>
                                                                                        <li><a href="/indian-suppliers/sound-proof-windows.htm">Sound
                                                                                                        Proof Windows</a></li>
                                                                                        <li><a href="/indian-manufacturers/acoustic-window-enclosures.htm" class="silver ts0">View More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/bearing.htm">Bearings
                                                                                                and Bearing Components</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/ball-bearing.htm">Ball
                                                                                                        Bearing</a></li>
                                                                                        <li><a href="/indian-suppliers/plummer-block.htm">Plummer
                                                                                                        Block</a></li>
                                                                                        <li><a href="/indian-suppliers/needle-bearing.htm">Needle
                                                                                                        Bearing</a></li>
                                                                                        <li><a href="/indian-suppliers/bimetal-bearings.htm">Bimetal
                                                                                                        Bearings</a></li>
                                                                                        <li><a href="/indian-manufacturers/bearing.htm" class="silver ts0">View
                                                                                                        More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/cable-wire.htm">Electrical
                                                                                                Cables & Wires</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/transmission-line.htm">Transmission
                                                                                                        Line</a></li>
                                                                                        <li><a href="/indian-suppliers/polycab-cables.htm">Polycab
                                                                                                        Submersible Cable</a></li>
                                                                                        <li><a href="/indian-suppliers/tv-cable.htm">TV
                                                                                                        Cable</a></li>
                                                                                        <li><a href="/indian-suppliers/power-cables.htm">Power
                                                                                                        Cables</a></li>
                                                                                        <li><a href="/indian-manufacturers/cable-wire.htm" class="silver ts0">View
                                                                                                        More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/compressors.htm">Air
                                                                                                Compressors, Accessories & Parts</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/air-compressors.htm">AIR
                                                                                                        Compressor</a></li>
                                                                                        <li><a href="/indian-suppliers/scroll-compressor.htm">Scroll
                                                                                                        Compressor</a></li>
                                                                                        <li><a href="/indian-suppliers/car-air-compressor.htm">Car
                                                                                                        AIR Compressor</a></li>
                                                                                        <li><a href="/indian-suppliers/reciprocating-air-compressor.htm">Reciprocating
                                                                                                        AIR Compressor</a></li>
                                                                                        <li><a href="/indian-suppliers/copeland-compressor.htm">Copeland
                                                                                                        Compressor</a></li>
                                                                                        <li><a href="/indian-manufacturers/compressors.htm" class="silver ts0">View
                                                                                                        More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/fasteners.htm">Nuts
                                                                                                Bolts and Fasteners</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/rivets.htm">Rivets</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/anchor-fasteners.htm">Anchor
                                                                                                        Fasteners</a></li>
                                                                                        <li><a href="/indian-suppliers/bolts.htm">Bolts</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/turnbuckle.htm">Turnbuckle</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/d-shackle.htm">D
                                                                                                        Shackle</a></li>
                                                                                        <li><a href="/indian-suppliers/shackle.htm">Shackle</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-manufacturers/fasteners.htm" class="silver ts0">View
                                                                                                        More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/adhesives-sealants.htm">Adhesives
                                                                                                & Sealants</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/m-seal.htm">M
                                                                                                        Seal</a></li>
                                                                                        <li><a href="/indian-suppliers/fevikwik.htm">Fevikwik</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/glue.htm">Glue</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/adhesives.htm">Adhesives</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/dextrin.htm">Dextrin</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-manufacturers/adhesives-sealants.htm" class="silver ts0">View More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/springs.htm">Compression
                                                                                                Springs & Air Springs</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/helical-spring.htm">Helical
                                                                                                        Spring</a></li>
                                                                                        <li><a href="/indian-suppliers/coil-spring.htm">Coil
                                                                                                        Spring</a></li>
                                                                                        <li><a href="/indian-suppliers/shock-absorbers.htm">Shock
                                                                                                        Absorbers</a></li>
                                                                                        <li><a href="/indian-suppliers/disc-spring.htm">Disc
                                                                                                        Spring</a></li>
                                                                                        <li><a href="/indian-suppliers/tension-spring.htm">Tension
                                                                                                        Spring</a></li>
                                                                                        <li><a href="/indian-manufacturers/springs.htm" class="silver ts0">View
                                                                                                        More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/pumpsei.htm">Pumps,
                                                                                                Pumping Machines & Parts</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/petrol-pump.htm">Petrol
                                                                                                        Pump</a></li>
                                                                                        <li><a href="/indian-suppliers/reciprocating-pump.htm">Reciprocating
                                                                                                        Pump</a></li>
                                                                                        <li><a href="/indian-suppliers/gear-pump.htm">Gear
                                                                                                        Pump</a></li>
                                                                                        <li><a href="/indian-suppliers/tullu-pump.htm">Tullu
                                                                                                        Pump</a></li>
                                                                                        <li><a href="/indian-manufacturers/pumpsei.htm" class="silver ts0">View
                                                                                                        More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                </ul>
                                                        </li>
                                                        <li class="mcl-iteam">
                                                                <a href="/industry/realestate-construction.htm"><img src=" " class="svg_icon" alt="ConstructionRealEstate" width="22" height="22" loading="lazy" decoding="async" fetchpriority="low" />Construction & Real Estate
                                                                </a>
                                                                <ul class="mcsc" id="sub_cat_10660">
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/prefab-portable-building.htm">Prefabricated
                                                                                                & Portable Buildings</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/greenhouse.htm">Greenhouse</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/polyhouse.htm">Polyhouse</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/prefabricated-structures.htm">Prefabricated
                                                                                                        Structures</a></li>
                                                                                        <li><a href="/indian-suppliers/tensile-structures.htm">Tensile
                                                                                                        Structures</a></li>
                                                                                        <li><a href="/indian-suppliers/portable-cabins.htm">Portable
                                                                                                        Cabins</a></li>
                                                                                        <li><a href="/indian-suppliers/prefabricated-houses.htm">Prefabricated
                                                                                                        Houses</a></li>
                                                                                        <li><a href="/indian-manufacturers/prefab-portable-building.htm" class="silver ts0">View More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/sanitary-ware-fittings.htm">Sanitary
                                                                                                Ware & Fittings</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/wash-basin.htm">Wash
                                                                                                        Basin</a></li>
                                                                                        <li><a href="/indian-suppliers/bidets.htm">Bidet</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/kitchen-sink.htm">Kitchen
                                                                                                        Sink</a></li>
                                                                                        <li><a href="/indian-suppliers/bio-toilet.htm">Bio
                                                                                                        Toilet</a></li>
                                                                                        <li><a href="/indian-suppliers/toilet-accessories.htm">Toilet
                                                                                                        Accessories</a></li>
                                                                                        <li><a href="/indian-suppliers/water-closet.htm">Water
                                                                                                        Closet</a></li>
                                                                                        <li><a href="/indian-manufacturers/sanitary-ware-fittings.htm" class="silver ts0">View More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/construction-machinery.htm">Construction
                                                                                                Machinery & Equipment</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/construction-equipment.htm">Construction
                                                                                                        Equipment</a></li>
                                                                                        <li><a href="/indian-suppliers/brick-making-machine.htm">Brick
                                                                                                        Making Machine</a></li>
                                                                                        <li><a href="/indian-suppliers/jaw-crusher.htm">Jaw
                                                                                                        Crusher</a></li>
                                                                                        <li><a href="/indian-suppliers/fly-ash-brick-making-machine.htm">Fly
                                                                                                        Ash Brick Making Machine</a></li>
                                                                                        <li><a href="/indian-suppliers/hot-mix-plant.htm">Hot
                                                                                                        Mix Plant</a></li>
                                                                                        <li><a href="/indian-manufacturers/construction-machinery.htm" class="silver ts0">View More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/building-materials.htm">Bricks
                                                                                                & Construction Materials</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/plaster-of-paris.htm">Plaster
                                                                                                        Of Paris</a></li>
                                                                                        <li><a href="/indian-suppliers/gravel.htm">Gravel</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/cement-bricks.htm">Cement
                                                                                                        Bricks</a></li>
                                                                                        <li><a href="/indian-suppliers/hollow-bricks.htm">Hollow
                                                                                                        Bricks</a></li>
                                                                                        <li><a href="/indian-suppliers/lightweight-concrete.htm">Lightweight
                                                                                                        Concrete</a></li>
                                                                                        <li><a href="/indian-manufacturers/building-materials.htm" class="silver ts0">View More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/bath-toilet-appliances.htm">Faucet,
                                                                                                Showers & Bathroom Fittings</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/bathroom-fittings.htm">Bathroom
                                                                                                        Fittings</a></li>
                                                                                        <li><a href="/indian-suppliers/faucet.htm">Faucet</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/bathtub.htm">Bathtub</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/health-faucet.htm">Health
                                                                                                        Faucet</a></li>
                                                                                        <li><a href="/indian-suppliers/bib-cock.htm">Bib
                                                                                                        Cock</a></li>
                                                                                        <li><a href="/indian-suppliers/bathroom-taps.htm">Bathroom
                                                                                                        Taps</a></li>
                                                                                        <li><a href="/indian-manufacturers/bath-toilet-appliances.htm" class="silver ts0">View More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/doors-windows.htm">Doors
                                                                                                & Windows</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/upvc-windows.htm">UPVC
                                                                                                        Windows</a></li>
                                                                                        <li><a href="/indian-suppliers/flush-doors.htm">Flush
                                                                                                        Doors</a></li>
                                                                                        <li><a href="/indian-suppliers/sliding-doors.htm">Sliding
                                                                                                        Doors</a></li>
                                                                                        <li><a href="/indian-suppliers/wooden-doors.htm">Wooden
                                                                                                        Doors</a></li>
                                                                                        <li><a href="/indian-suppliers/french-window.htm">French
                                                                                                        Window</a></li>
                                                                                        <li><a href="/indian-suppliers/upvc-doors.htm">UPVC
                                                                                                        Doors</a></li>
                                                                                        <li><a href="/indian-manufacturers/doors-windows.htm" class="silver ts0">View
                                                                                                        More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                </ul>
                                                        </li>
                                                        <li class="mcl-iteam">
                                                                <a href="/industry/furniture.htm"><img src=" " class="svg_icon" alt="Furniture" width="22" height="22" loading="lazy" decoding="async" fetchpriority="low" />Furniture </a>
                                                                <ul class="mcsc" id="sub_cat_13686">
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/metal-furnitures.htm">Metal
                                                                                                Furniture Suppliers</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/steel-furniture.htm">Steel
                                                                                                        Furniture</a></li>
                                                                                        <li><a href="/indian-suppliers/recliner-chair.htm">Recliner
                                                                                                        Chair</a></li>
                                                                                        <li><a href="/indian-suppliers/steel-table.htm">Steel
                                                                                                        Table</a></li>
                                                                                        <li><a href="/indian-suppliers/steel-almirah.htm">Steel
                                                                                                        Almirah</a></li>
                                                                                        <li><a href="/indian-suppliers/wrought-iron-furniture.htm">Wrought
                                                                                                        Iron Furniture</a></li>
                                                                                        <li><a href="/indian-suppliers/iron-table.htm">Iron
                                                                                                        Table</a></li>
                                                                                        <li><a href="/indian-manufacturers/metal-furnitures.htm" class="silver ts0">View
                                                                                                        More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/furniture-accessories.htm">Furniture
                                                                                                Hardware & Fittings</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/table-top.htm">Table
                                                                                                        Top</a></li>
                                                                                        <li><a href="/indian-suppliers/back-rest.htm">Backrest</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/bed-frames.htm">Bed
                                                                                                        Frames</a></li>
                                                                                        <li><a href="/indian-suppliers/furniture-hardware.htm">Furniture
                                                                                                        Hardware</a></li>
                                                                                        <li><a href="/indian-manufacturers/furniture-accessories.htm" class="silver ts0">View More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/living-furniture.htm">Living
                                                                                                Room and Plastic Furniture</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/sofa-set.htm">Sofa
                                                                                                        Set</a></li>
                                                                                        <li><a href="/indian-suppliers/cupboard.htm">Cupboard</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/tv-unit.htm">TV
                                                                                                        Unit</a></li>
                                                                                        <li><a href="/indian-suppliers/chairs.htm">Chairs</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/bean-bags.htm">Bean
                                                                                                        Bags</a></li>
                                                                                        <li><a href="/indian-manufacturers/living-furniture.htm" class="silver ts0">View
                                                                                                        More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/bed-room-furniture.htm">Bedroom,
                                                                                                Bathroom & Kids Furniture</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/almirah.htm">Almirah</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/double-bed.htm">Double
                                                                                                        Bed</a></li>
                                                                                        <li><a href="/indian-suppliers/beds.htm">Beds</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/folding-bed.htm">Folding
                                                                                                        Bed</a></li>
                                                                                        <li><a href="/indian-suppliers/bunk-beds.htm">Bunk
                                                                                                        Bed</a></li>
                                                                                        <li><a href="/indian-suppliers/foldable-wardrobe.htm">Foldable
                                                                                                        Wardrobe</a></li>
                                                                                        <li><a href="/indian-manufacturers/bed-room-furniture.htm" class="silver ts0">View More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                </ul>
                                                        </li>
                                                        <li class="mcl-iteam">
                                                                <a href="/industry/health-beauty.htm"><img src=" " class="svg_icon" alt="HealthBeauty" width="22" height="22" loading="lazy" decoding="async" fetchpriority="low" />Health
                                                                        & Beauty </a>
                                                                <ul class="mcsc" id="sub_cat_11132">
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/essential-oils.htm">Aromatic
                                                                                                & Essential Oils</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/castor-oil.htm">Castor
                                                                                                        Oil</a></li>
                                                                                        <li><a href="/indian-suppliers/tea-tree-oil.htm">Tea
                                                                                                        Tree Oil</a></li>
                                                                                        <li><a href="/indian-suppliers/argan-oil.htm">Argan
                                                                                                        Oil</a></li>
                                                                                        <li><a href="/indian-suppliers/mentha-oil.htm">Mentha
                                                                                                        Oil</a></li>
                                                                                        <li><a href="/indian-suppliers/neem-oil.htm">Neem
                                                                                                        Oil</a></li>
                                                                                        <li><a href="/indian-manufacturers/essential-oils.htm" class="silver ts0">View
                                                                                                        More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/makeup.htm">Cosmetics,
                                                                                                Hair Care & Beauty Products</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/nail-polish.htm">Nail
                                                                                                        Polish</a></li>
                                                                                        <li><a href="/indian-suppliers/lipstick.htm">Lipstick</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/hair-dryer.htm">Hair
                                                                                                        Dryer</a></li>
                                                                                        <li><a href="/indian-suppliers/cosmetics.htm">Cosmetics</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-manufacturers/makeup.htm" class="silver ts0">View
                                                                                                        More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/health-care-products.htm">Health
                                                                                                Care Products</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/female-condom.htm">Female
                                                                                                        Condom</a></li>
                                                                                        <li><a href="/indian-suppliers/methylcobalamin.htm">Methylcobalamin</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/saccharomyces-boulardii.htm">Saccharomyces
                                                                                                        Boulardii</a></li>
                                                                                        <li><a href="/indian-suppliers/adult-diapers.htm">Adult
                                                                                                        Diapers</a></li>
                                                                                        <li><a href="/indian-manufacturers/health-care-products.htm" class="silver ts0">View More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="/indian-manufacturers/m-equipment.htm">Medical
                                                                                                Equipment & Supplies</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="/indian-suppliers/glucometer.htm">Glucometer</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/sphygmomanometer.htm">Sphygmomanometer</a>
                                                                                        </li>
                                                                                        <li><a href="/indian-suppliers/cpap-machine.htm">CPAP
                                                                                                        Machine</a></li>
                                                                                        <li><a href="/indian-suppliers/holter-monitor.htm">Holter
                                                                                                        Monitor</a></li>
                                                                                        <li><a href="/indian-manufacturers/m-equipment.htm" class="silver ts0">View
                                                                                                        More</a></li>
                                                                                </ul>
                                                                        </li>
                                                                </ul>
                                                        </li>

                                                </ul>
                                                <div class="all-cl">
                                                        <a href="/industry/" class="all-cl-iteam">
                                                                <img class="all-cl-img" src=" " alt="All Categories" width="22" height="22" decoding="async" fetchpriority="low">
                                                                All Categories
                                                        </a>
                                                </div>
                                        </div>
                                </aside>
                                <div class="banner">
                                        <div id="carouselExample" class="carousel slide">
                                                <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                                <img src="image/banner/banner.jpg" height="" class="d-block w-100" alt="...">
                                                        </div>
                                                        <div class="carousel-item">
                                                                <img src="image/banner/banner.jpg" height="" class="d-block w-100" alt="...">
                                                        </div>
                                                        <div class="carousel-item">
                                                                <img src="image/banner/banner.jpg" height="" class="d-block w-100" alt="...">
                                                        </div>
                                                </div>
                                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Next</span>
                                                </button>
                                        </div>
                                </div>
                        </div>
                </div>
        </section>
        <!-- lg nav bar end here -->
        <!-- sm banner -->

        <div class=" d-block d-sm-block d-md-block d-lg-none">
                <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                                <div class="carousel-item active">
                                        <img src="image/banner/banner.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                        <img src="image/banner/banner.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                        <img src="image/banner/banner.jpg" class="d-block w-100" alt="...">
                                </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                        </button>
                </div>
        </div>
        <!-- Trending Categories -->
        <div class="container-fluid margin">
                <div class="row">
                        <div class="col-12 ">
                                <div class="py-4 px-3  bg-white shadow-lg rounded">
                                        <h5 class="mb-3">Trending Categories</h5>
                                        <!-- owl carousel -->
                                        <div class="owl-carousel owl-theme bg-white">
                                                <?php
                                                include "config.php";
                                                $select1 = "SELECT * from `category`";
                                                $qu1 = mysqli_query($con, $select1);
                                                $s_no = 1;
                                                while ($row1 = mysqli_fetch_array($qu1)) {
                                                        // $micro_id = $row1['micro_id'];
                                                ?>
                                                        <a href="category.php?cat_id=<?php echo $row1['cat_id'] ?>">
                                                                <div class="item item_cat border rounded shadow-sm ">
                                                                        <div class="cat_box cat_responsive_cards">
                                                                                <div class="w-75 m-auto  ">
                                                                                        <img src="./admin/<?php echo $row1['cat_image'] ?>" height="100px" style="object-fit:cover;" width="100%" alt="category image">
                                                                                        <div class="px-2 pt-2 border-top  text-center">
                                                                                                <p class="text-dark mt-2"><?php echo $row1['cat_name'] ?></p>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </a>
                                                <?php } ?>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>

        <!--  -->


        <!-- cat  name -->
        <?php



        include "config.php"; // Assuming this file connects to your database ($con)

        // Check if connection to database was successful
        if (!$con) {
                die("Connection failed: " . mysqli_connect_error());
        }

        $select = "SELECT 
            c.cat_name, c.cat_id,
            s.sub_id, s.sub_cat_name, s.sub_cat_image,
            GROUP_CONCAT(CONCAT_WS(':', i.inner_cat_id, i.inner_cat_name) SEPARATOR '|') AS inner_categories
        FROM 
            category c
        LEFT JOIN 
            sub_cat s ON c.cat_id = s.cat_id
        LEFT JOIN 
            inner_cat i ON s.sub_id = i.sub_id
        GROUP BY 
            c.cat_id, s.sub_id";

        $result = mysqli_query($con, $select);

        if (!$result) {
                die("Query failed: " . mysqli_error($con));
        }

        $categories = array(); // Array to store categories and their subcategories

        while ($row = mysqli_fetch_array($result)) {
                $cat_name = $row['cat_name'];
                $cat_id = $row['cat_id'];
                $sub_id = $row['sub_id'];
                $sub_cat_name = $row['sub_cat_name'];
                $sub_cat_image = $row['sub_cat_image']; // Fetch sub_cat_image
                $inner_categories_raw = explode('|', $row['inner_categories']); // Convert string to array

                $inner_categories = array();
                foreach ($inner_categories_raw as $inner_cat_string) {
                        list($inner_cat_id, $inner_cat_name) = explode(':', $inner_cat_string);
                        $inner_categories[] = array(
                                'inner_cat_id' => $inner_cat_id,
                                'inner_cat_name' => $inner_cat_name
                        );
                }

                // Store subcategories and inner categories grouped by categories and subcategories
                if (!isset($categories[$cat_name])) {
                        $categories[$cat_name] = array();
                }

                $categories[$cat_name][] = array(
                        'cat_id' => $cat_id,
                        'sub_id' => $sub_id,
                        'sub_cat_name' => $sub_cat_name,
                        'sub_cat_image' => $sub_cat_image,
                        'inner_categories' => $inner_categories
                );
        }
        // foreach
        $count1 = 0;
        foreach ($categories as $category => $subcategories) {
        ?> <div class="container-fluid margin m-auto my-5 " style="width: 98%;">
                        <div class="row cat_container ">
                                <div class="col-12 border py-3 px-3  bg-white rounded shadow-lg">
                                        <a href="category.php?cat_id=<?php echo $subcategories[0]['cat_id'] ?>">
                                                <h4 class=""><?php echo $category ?></h4>
                                        </a>
                                        <div class="row mt-3">
                                                <div class="col-12 col-md-12">
                                                        <div class="row">
                                                                <!-- sub cat -->

                                                                <?php $count = 0;
                                                                foreach ($subcategories as $subcategory) { ?>
                                                                        <div class="col-12 col-md-6 col-lg-3 my-3">
                                                                                <div class="card cat_responsive_cards p-3">
                                                                                        <a href="sub-cat.php?sub_id=<?php echo  $subcategory['sub_id'] ?>" class="text-decoration-none" style="color: black !important;">
                                                                                                <p class="pb-0 fs-6   w-100 overflow-hidden"><?php echo $subcategory['sub_cat_name'] ?></p>
                                                                                        </a>
                                                                                        <div class="row">
                                                                                                <div class="col-7">
                                                                                                        <!-- inner cat -->
                                                                                                        <?php
                                                                                                        $count2 = 0;
                                                                                                        foreach ($subcategory['inner_categories'] as $innercategory) {
                                                                                                        ?>
                                                                                                                <p class=" p-0 my-1 d-block"><a href="product.php?inner_cat_id=<?php echo $innercategory['inner_cat_id'] ?>" class="text-decoration-none p-0 m-0">
                                                                                                                                <?php echo $innercategory['inner_cat_name'] ?></a></p>
                                                                                                                <!-- end -->
                                                                                                        <?php $count2++;
                                                                                                                if ($count2 >= 3) {
                                                                                                                        break;
                                                                                                                };
                                                                                                        } ?>

                                                                                                </div>
                                                                                                <div class="col-5 align-self-start border rounded ">

                                                                                                        <img src="./admin/<?php echo  $subcategory['sub_cat_image']  ?>" class="rounded p-2" height="100px" style="object-fit:cover;" width="100%" alt="">
                                                                                                </div>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                <?php $count++;
                                                                        if ($count >= 8) {
                                                                                break;
                                                                        };
                                                                } ?>
                                                                <!-- sub cat end -->
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        <?php $count1++;
                if ($count1 >= 4) {
                        break;
                };
        } ?>

        <div class="container margin alert alert-primary">
                <div class="row">
                        <div class="col-12">
                                <div class="owl-carousel owl-theme">
                                        <div class="item">
                                                <img src="image/brand/images.webp" height="auto" width="100%" style="object-fit: cover;" alt="">
                                        </div>
                                        <div class="item">
                                                <img src="image/brand/download.webp" height="auto" width="100%" style="object-fit: cover;" alt="">
                                        </div>
                                        <div class="item">
                                                <img src="image/brand/elixer-jeans-logo.webp" height="auto" width="100%" style="object-fit: cover;" alt="">
                                        </div>
                                        <div class="item">
                                                <img src="image/brand/plasto.jpg" height="auto" width="100%" style="object-fit: cover;" alt="">
                                        </div>
                                        <div class="item">
                                                <img src="image/brand/UNIQUE.webp" height="auto" width="100%" style="object-fit: cover;" alt="">
                                        </div>


                                </div>
                        </div>
                </div>
        </div>


        <!--products-->
        <div class="container-fluid bg-light  bg-icon my-5 py-6   p-5">
                <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                        <h1 class="display-5 mb-3"> Featured Products</h1>
                        <p>We are committed to sustainability and environmental stewardship. By implementing eco-friendly
                                farming practices and minimizing waste throughout our operations, </p>
                </div>
                <div class="row justify-content-center ">
                        <div class="col-12 border wow fadeInUp" data-wow-delay="0.3s">
                                <div class="owl-carousel owl-carousel owl-theme  ">
                                        <?php
                                        include "config.php";
                                        $select1 = "SELECT * from `product`";
                                        $qu1 = mysqli_query($con, $select1);
                                        $s_no = 1;
                                        while ($row  = mysqli_fetch_array($qu1)) {

                                        ?>
                                                <div class="item   ">

                                                        <div class="product_card bg-white  my-2   p-1 rounded shadow-sm">
                                                                <div class="img_card p-1">
                                                                        <img src="./admin/<?php echo $row['product_image1'] ?>" class="  mb-3 rounded" height="150px" width="100%" style="object-fit: cover;" alt="">
                                                                        <hr>
                                                                </div>
                                                                <p style="height: 6rem;"><small><?php echo $row['product_name'] ?></small><i> <a href="">read More</a></i></p>
                                                                <a href="single-product.php?pro_id=<?php echo $row['pro_id'] ?>" class="btn btn-dark w-100">Detals</a>
                                                        </div>

                                                </div>
                                        <?php } ?>
                                </div>
                        </div>
                </div>
        </div>

        <div class="container margin">

                <div class="row mt-5">
                        <p class="fs-4">Popular Ctegory</p>
                        <div class="col-12 d-flex flex-wrap ">
                                <?php
                                include "config.php";
                                $sel = "SELECT * FROM `category`";
                                $q = mysqli_query($con, $sel);
                                while ($row = mysqli_fetch_array($q)) {
                                ?>
                                        <a href="category.php?cat_id=<?php echo $row['cat_id'] ?>" class="btn btn-light bg-outline-light border m-1 btn-sm"><?php echo $row['cat_name'] ?></a>
                                <?php } ?>
                        </div>
                </div>
        </div>

        <div class="container">
                <div class="row">
                        <div class="col-12">
                                <?php
                                include "config.php";
                                $sel = "SELECT * FROM `states`";
                                $q = mysqli_query($con, $sel);
                                while ($row = mysqli_fetch_array($q)) {
                                ?>
                                        <a href="states.php?state_name=<?php echo $row['state_name'] ?>" class="btn btn-light bg-outline-light border m-1 btn-sm"><?php echo $row['state_name'] ?></a>



                                <?php } ?>
                        </div>
                </div>
        </div>
        <style>
                .cards_container {
                        width: 100%;
                        /* border: 1px solid red; */
                        height: 150px;
                        position: relative;
                        background-color: #10697c;
                }

                .round {
                        height: 130px;
                        width: 130px;
                        border: 5px solid white;
                        border-radius: 50%;
                        position: absolute;
                        top: 55%;
                        left: 31%;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        background-color: #10697c;
                }
        </style>
        <div class="container-fluid">
                <div class="row  align-items-end">
                        <div class="col-lg-3 col-md-6 my-4">
                                <div class="main_card_container border rounded shadow-lg">
                                        <div class="cards_container">
                                                <div class="prosition_cards text-capitalize">
                                                        <div class="top_cards text-center">
                                                                <h3 class="text-white py-2" style="background-color: #2c92a7;">₹ Prime</h3>
                                                        </div>
                                                        <div class="round text-center text-white">
                                                                <h5 class="">₹23,999/ <br> <small class="fw-bold" style="font-size: 15px;">Year</small></h5>
                                                        </div>
                                                </div>

                                        </div>
                                        <div class="about_cards   mt-5 p-3">
                                                <p class="p-0 m-0 my-2 border-bottom text-muted">   400 Pages- Display No. of</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted">  Products/Services on Portal</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted">  30 Pages-Display No. of</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted"> 10- Buy Leads Everymonth</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted">  Domain & Hosting</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted">  Seo friendly Website</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted">  Business Inquiry Access</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted">  Google Listing</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted"> Social Media Linking</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted"> Link Your Website on Whatsapp</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted"> Website Maintenance</p>

                                        </div>
                                </div>
                        </div>
                        <div class="col-lg-3 col-md-6 my-4">
                                <div class="main_card_container border rounded shadow-lg">
                                        <div class="cards_container" style="background:#c25263;">
                                                <div class="prosition_cards" >
                                                        <div class="top_cards text-center" >
                                                                <h3 class="text-white py-2" style="background-color: #7f2230;">₹ Prime Pro</h3>
                                                        </div>
                                                        <div class="round text-center text-white" style="background-color: #c25263;">
                                                                <h5 class="">₹40,999/ <br> <small class="fw-bold" style="font-size: 15px;">Year</small></h5>
                                                        </div>
                                                </div>

                                        </div>
                                        <div class="about_cards   mt-5 p-3">
                                                <p class="p-0 m-0 my-2 border-bottom text-muted">   400 Pages-Display No. of</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted">  Products/Services on Portal</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted">  100 Pages-Display No. of</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted">  Products/Services on Website</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted">  30-Buy Leads Everymonth</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted"> Domain & Hosting</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted"> Seo friendly Website</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted"> SSL Certificate Google Listing</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted">  Customer Support Executive</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted">  Social Media Linking</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted"> Link Your Website on Whatsapp</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted"> Mobile Responsive Website</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted"> Website Maintenance</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted"> Import Export Manager</p>

                                        </div>
                                </div>
                        </div>
                        <div class="col-lg-3 col-md-6 my-4">
                                <div class="main_card_container border rounded shadow-lg">
                                        <div class="cards_container" style="background-color: #6fd23e;">
                                                <div class="prosition_cards">
                                                        <div class="top_cards text-center">
                                                                <h3 class="text-white py-2" style="background-color: #2d6f0d;">₹   Ultra</h3>
                                                        </div>
                                                        <div class="round text-center text-white" style="background-color: #6fd23e;">
                                                                <h5 class="">₹80,999/ <br> <small class="fw-bold" style="font-size: 15px;">Year</small></h5>
                                                        </div>
                                                </div>

                                        </div>
                                        <div class="about_cards   mt-5 p-3">
                                                <p class="p-0 m-0 my-2 border-bottom text-muted">  400 Pages-Display No. of</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted">  Products/Services on Portal</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted"> 150 Pages-Display No. of</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted"> Products/Services on Website</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted">  60-Buy Leads Everymonth</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted">  Domain & Hosting</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted"> SSL Certificate</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted"> Business Inquiry Access</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted"> Seo friendly Website</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted"> Customer Support Executive</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted">Google Listing</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted">Mobile Responsive Website</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted">Trusted Seller Certificate</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted">Social Media Linking</p>     
                                                <p class="p-0 m-0 my-2 border-bottom text-muted">Link Your Website on Whatsapp</p>     
                                                <p class="p-0 m-0 my-2 border-bottom text-muted">Website Maintenance</p>     
                                                <p class="p-0 m-0 my-2 border-bottom text-muted">Import Export Manager Flipbook</p>     
                                                <p class="p-0 m-0 my-2 border-bottom text-muted">Control Panel of Website</p>     

                                        </div>
                                </div>
                        </div>
                        <div class="col-lg-3 col-md-6 my-4">
                                <div class="main_card_container border rounded shadow-lg">
                                        <div class="cards_container" style="background-color: #400853;">
                                                <div class="prosition_cards">
                                                        <div class="top_cards text-center">
                                                                <h3 class="text-white py-2" style="background-color: #6c0d8c;">₹ Ultra Pro</h3>
                                                        </div>
                                                        <div class="round text-center text-white" style="background-color: #400853;">
                                                                <h5 class="">₹1,00,999/ <br> <small class="fw-bold" style="font-size: 15px;">Year</small></h5>
                                                        </div>
                                                </div>

                                        </div>
                                        <div class="about_cards   mt-5 p-3">
                                                <p class="p-0 m-0 my-2 border-bottom text-muted">   400 Pages-Display No. of on Portal</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted">  200 Pages-Display No. of</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted">  Products/Services on Website</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted"> 90-Buy Leads Everymonth</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted">  Domain & Hosting</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted"> Business Inquiry Access</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted">  Seo friendly Website</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted"> SSL Certificate</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted"> Google Listing</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted">Customer Support Executive</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted"> Social Media Linking</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted"> Link Your Website on Whatsapp</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted"> Mobile Responsive Website</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted"> Website Maintenance</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted"> Import Export Manager</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted"> Control Panel of Website</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted"> Blogs</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted"> Flipbook</p>
                                                <p class="p-0 m-0 my-2 border-bottom text-muted"> Trusted Seller Certificate</p>

                                        </div>
                                </div>
                        </div>
                </div>
        </div>
        <script>
                $(document).ready(function() {
                        $('.owl-carousel').owlCarousel({
                                loop: true,
                                margin: 10,
                                responsive: {
                                        0: {
                                                items: 1
                                        },
                                        576: {
                                                items: 1
                                        },
                                        768: {
                                                items: 3
                                        },
                                        992: {
                                                items: 6
                                        }
                                }
                        })
                })
        </script>
        <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>-->
        <script src="assets/css/bootstrap.bundle.min.js"></script>
</body>

</html>