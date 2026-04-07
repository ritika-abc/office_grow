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

    <title> Business Directory in India || No 1 Grow India Export </title>
    <meta name="description" content="Grow India - Best B2B Marketplace for Manufacturers exporters Suppliers and Importers for Your Products, Domestic and international level in All Countries, now. ">
    <meta name="keywords" content=" B2b Marketplace , Manufacturers Directory , business directory in india , Best B2b Marketplace , import export in india , B2B Business Marketplace " />
    <link rel="canonical" href="https://www.growindiaexport.com/index.php" />

    <meta property="og:title" content=" Business Directory in India || No 1 Grow India Export " />
    <meta property="og:description" content="Grow India - Best B2B Marketplace for Manufacturers exporters Suppliers and Importers for Your Products, Domestic and international level in All Countries, now." />
    <meta property="og:site_name" content="Grow india Export " />
    <meta property="og:type" content=" website" />
    <meta property="og:url" content="https://www.growindiaexport.com/index.php" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:image" content="https://growindiaexport.com/image/banner/3.jpg" />
    <meta name="robots" content="index, follow" />

    <link rel="icon" type="image/x-icon" href="image/favicon.png">
    <link rel="mask-icon" href="image/favicon.png">

    <meta name="google-site-verification" content="vq39ko9F7nT8ziS9lYdYZfJUE82Mgx_LmHX-Ngl6K9s" />


    <meta name="twitter:card" content="summary">

    <meta name="twitter:title" content=" Business Directory in India || No 1 Grow India Export ">
    <meta name="twitter:description" content="Grow India - Best B2B Marketplace for Manufacturers exporters Suppliers and Importers for Your Products, Domestic and international level in All Countries, now. ">
    <meta name="twitter:url" content="https://www.growindiaexport.com/ ">



    <link rel="stylesheet" href="https://growindiaexport.com/assets/css/megadrop.css">

    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://growindiaexport.com/assets/css/style.css">
    <link rel="stylesheet" href="https://growindiaexport.com/assets/vendor/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://growindiaexport.com/assets/vendor/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
    <script src="https://growindiaexport.com/assets/vendor/OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js"></script>
    <script src="https://growindiaexport.com/assets/vendor/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="fontawesome-free-6.5.2-web/css/all.min.css">
    <script src="https://growindiaexport.com/assets/js/map1.js"></script>
    <script src="https://growindiaexport.com/assets/js/map2.js"></script>

    <style>
    
    
    
    
    .story_contai{
        height: 400px;
       
         
    }
    
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

        .text-primary {
            color: rgb(46 80 138) !important;
        }

        .carousel_img {
            height: 100px !important;
            width: 100px !important;

        }

        .port {
            background-image: url(image/port.jpg);
            width: 100%;
            height: 100%;
            background-size: cover;
            padding: 5rem 0rem;
            /* background-attachment: fixed; */
            animation: w 15s infinite linear;
        }



        @keyframes w {
            0% {
                background-position: right;
            }

            100% {
                background-position: left;


            }
        }

        .mcsc-iteam .mcsc-heading a {
            color: #e77702;
            text-decoration: none;
            font-weight: 700;
        }
    </style>
    <style>
        .owl-prev {
            position: absolute;
            top: 40%;
            transform: translate(-50%, -50%);
            left: 0%;

            height: 50px;
            width: 50px;
        }

        .owl-next {
            position: absolute;
            top: 40%;
            transform: translate(-50%, -50%);
            left: 100% !important;

            height: 50px;
            width: 50px;
        }

        .owl-next i,
        .owl-prev i {
            background-color: rgba(50, 123, 206, 0.43);
            padding: 10px;
            font-size: 30px;
            color: white;
            height: 50px;
            width: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
        }

        .owl-theme .owl-nav [class*=owl-]:hover {
            background: rgb(42, 170, 255);
            color: #FFF;
            text-decoration: none;
            border-radius: 50%;
        }

        .owl-theme .owl-dots .owl-dot span {
            width: 10px;
            height: 10px;
            margin: 5px 7px;
            background: rgba(50, 123, 206, 0.21);
            display: block;
            -webkit-backface-visibility: visible;
            transition: opacity .2s ease;
            border-radius: 30px;
        }

        .owl-theme .owl-dots .owl-dot.active span,
        .owl-theme .owl-dots .owl-dot:hover span {
            background: rgb(50, 123, 206);
        }
        
       
    </style>
</head>

<body>
    <?php include "navbar.php"; ?>
    <style>
        .megadropdown_list .bcs-header {

            padding: 10px !important;
            display: block;
            margin-top: -10px;
        }

        .megadropdown_list .bcs-header:hover .mc-list {
            display: block !important;
        }

        .pre {
            font-family: sans-serif;
        }

        .main_ul_box {
            overflow-x: auto;
        }
    </style>

    <section class="d-none d-lg-block ">
        <div class="main_nav_box ">


            <section class="browse-cat-sec d-none d-sm-none d-md-none d-lg-block ">
                <div class="fw ">
                    <div class="browse-cat fo ">
                        <aside class="sidebar ">
                            <div class="megadropdown_list">
                                <div class="bcs-header   p-0">
                                    <ul>
                                        <li class="text-white"> Browse
                                            Categories
                                        </li>
                                    </ul>

                                    <ul class="mc-list position-absolute bg-white d-none px-3" style="z-index: 30;margin-top:-5px ">
                                        <li class="mcl-iteam">
                                            <a href="https://growindiaexport.com/category.php?cat_id=18"><img
                                                    src="image/icon/home.png" class="svg_icon" alt="HomeSupplies" width="22"
                                                    height="22" loading="lazy" decoding="async" fetchpriority="low" />Home
                                                Supplies </a>

                                        </li>
                                        <li class="mcl-iteam">
                                            <a href="https://growindiaexport.com/category.php?cat_id=10"><img
                                                    src="https://growindiaexport.com//image/icon/agriculture.png" class="svg_icon"
                                                    alt="Agriculture image " width="22" height="22" />Agriculture </a>

                                        </li>
                                        <li class="mcl-iteam">
                                            <a href="https://growindiaexport.com/category.php?cat_id=16"><img
                                                    src="https://growindiaexport.com//image/icon/food_product.png" class="svg_icon"
                                                    alt="Food Product Beverages" width="22" height="22" loading="lazy"
                                                    decoding="async" fetchpriority="low" />Food Product & Beverages
                                            </a>

                                        </li>
                                        <li class="mcl-iteam">
                                            <a href="https://growindiaexport.com/category.php?cat_id=11"><img
                                                    src="https://growindiaexport.com//image/icon/clothes.png" class="svg_icon"
                                                    alt="ApparelFashion" width="22" height="22" loading="lazy" decoding="async"
                                                    fetchpriority="low" />Apparel
                                                & Fashion </a>

                                        </li>
                                        <li class="mcl-iteam">
                                            <a href="https://growindiaexport.com/category.php?cat_id=19"><img
                                                    src="https://growindiaexport.com//image/icon/experiment.png" class="svg_icon"
                                                    alt="Chemicals product jpg" width="22" height="22" loading="lazy"
                                                    decoding="async" fetchpriority="low" />Chemicals </a>

                                        </li>
                                        <li class="mcl-iteam">
                                            <a href="https://growindiaexport.com/category.php?cat_id=22"><img
                                                    src="https://growindiaexport.com//image/icon/breakdown.png" class="svg_icon"
                                                    alt="IndustrialSupplies" width="22" height="22" loading="lazy" decoding="async"
                                                    fetchpriority="low" />Industrial Supplies </a>

                                        </li>
                                        <li class="mcl-iteam">
                                            <a href="/"><img src="https://growindiaexport.com//image/icon/estate.png"
                                                    class="svg_icon" alt="ConstructionRealEstate" width="22" height="22"
                                                    loading="lazy" decoding="async" fetchpriority="low" />Construction & Real Estate
                                            </a>

                                        </li>
                                        <li class="mcl-iteam">
                                            <a href="/"><img src="https://growindiaexport.com//image/icon/furniture.png"
                                                    class="svg_icon" alt="Furniture" width="22" height="22" loading="lazy"
                                                    decoding="async" fetchpriority="low" />Furniture </a>

                                        </li>
                                        <li class="mcl-iteam">
                                            <a href="/"><img src="https://growindiaexport.com//image/icon/health.png"
                                                    class="svg_icon" alt="HealthBeauty" width="22" height="22" loading="lazy"
                                                    decoding="async" fetchpriority="low" />Health
                                                & Beauty </a>

                                        </li>

                                    </ul>

                                </div>
                            </div>
                        </aside>

                    </div>
                </div>
            </section>




            <ul class=" main_ul_box" style="margin-bottom: 0px;">
                <li class="hoov px-3"><a href="https://growindiaexport.com/category.php?cat_id=18">
                        <pre class="pre"> Home Supplies </pre>
                    </a>
                    <div class="megadrop">
                        <ul class="px-4 pt-2 pb-4">
                            <li class="my-2"><a href="https://growindiaexport.com/sub-cat.php?sub_id=26" style="color:rgba(3, 2, 26, 0.8)"> <span>Home Cleaning Products</span> </a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=91" style="">White Phenyl Compound</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=92">Washing Brushes</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=145">Squeegees</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=146">Vacuum Purifier</a></li>


                        </ul>
                        <ul class="px-4 pt-2 pb-4">
                            <li class="my-2"><a href="https://growindiaexport.com/sub-cat.php?sub_id=27" style="color:rgba(3, 2, 26, 0.8)"> <span>Buckets, Mugs & Storage Bins</span> </a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=93" style="">Kitchen Corner Basket</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=94">Cutlery Drawer Basket</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=429">Fruit Baskets</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=430">Plate Basket</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=431">Metal Wire Basket</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=96">Swing Dustbin</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=97">Dust Pans</a></li>

                        </ul>
                        <ul class="px-4 pt-2 pb-4">
                            <li class="my-2"><a href="https://growindiaexport.com/sub-cat.php?sub_id=28" style="color:rgba(3, 2, 26, 0.8)"> <span>Artificial Plants & Flowers</span> </a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=98" style="">Artificial Flower Bushes</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=99">Artificial Roses</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=480">Silk Flowers</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=481">Artificial Sunflower</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=482">Artificial Orchid</a></li>


                        </ul>
                        <ul class="px-4 pt-2 pb-4">
                            <li class="my-2"><a href="https://growindiaexport.com/sub-cat.php?sub_id=30" style="color:rgba(3, 2, 26, 0.8)"> <span>Mops, Brooms & Dusters</span> </a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=110" style="">Floor Cleaning Brushes</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=111">Household Brushes</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=112">Wooden Brush</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=439">Bottle Cleaning Brush</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=440">Sink Brush</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=441">Cloth Washing Brush</a></li>


                        </ul>

                    </div>
                </li>
                <li class="hoov px-3"><a href="https://growindiaexport.com/category.php?cat_id=10">
                        <pre class="pre"> Agriculture</pre>
                    </a>
                    <div class="megadrop">
                        <ul class="px-4 pt-2 pb-4">
                            <li class="my-2"><a href="https://growindiaexport.com/sub-cat.php?sub_id=10" style="color:rgba(3, 2, 26, 0.8)"> <span>Fresh Flowers and Plants</span> </a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=6" style="">Mango Plants</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=9">Banana Plants</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=18">Dragon Fruit Plant</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=483">Guava Plant</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=484">Apple Plants</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=485">Papaya Plant</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=7">Neem Tree</a></li>
                        </ul>
                        <ul class="px-4 pt-2 pb-4">
                            <li class="my-2"><a href="https://growindiaexport.com/sub-cat.php?sub_id=11" style="color:rgba(3, 2, 26, 0.8)"> <span>Irrigation Equipment & Systems</span> </a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=20" style="">Combine Harvester</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=21">Power Reaper</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=210">Rice Harvester</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=499">Reaper Binder</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=500">Harvesting Equipment</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=501">Mini Harvester</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=22">Sprinkler Irrigation System</a></li>
                        </ul>
                        <ul class="px-4 pt-2 pb-4">
                            <li class="my-2"><a href="https://growindiaexport.com/sub-cat.php?sub_id=25" style="color:rgba(3, 2, 26, 0.8)"> <span>Soil Additives & Fertilizers</span> </a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=83" style="">Vermicompost</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=84">Humic Acid</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=85">Cow Dung</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=510">Potassium Humate</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=511">Natural Organic Fertilizer</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=512">Seaweed Extract Fertilizers</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=89">Plant Nutrient</a></li>
                        </ul>
                        <ul class="px-4 pt-2 pb-4">
                            <li class="my-2"><a href="https://growindiaexport.com/sub-cat.php?sub_id=33" style="color:rgba(3, 2, 26, 0.8)"> <span>Seeds & Plant Saplings</span> </a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=131" style="">Onion Seeds</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=132">Pumpkin Seeds</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=224">Moringa Seeds</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=522">Bean Seeds</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=523">Brinjal Seeds</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=524">Drumstick Seeds</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=143">Sunflower Seed</a></li>
                        </ul>

                    </div>
                </li>
                <li class="hoov px-3"><a href="https://growindiaexport.com/category.php?cat_id=16">
                        <pre class="pre"> Food Products</pre>
                    </a>
                    <div class="megadrop">
                        <ul class="px-4 pt-2 pb-4">
                            <li class="my-2"><a href="https://growindiaexport.com/sub-cat.php?sub_id=17" style="color:rgba(3, 2, 26, 0.8)"> <span>Tea & Coffee</span> </a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=35" style="">Flower Tea</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=36">Lemon Tea</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=37">Masala Tea</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=38">Ginger Tea</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=39">Cardamom Tea</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=41">Lemongrass Tea</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=42">Mint Tea</a></li>
                        </ul>
                        <ul class="px-4 pt-2 pb-4">
                            <li class="my-2"><a href="https://growindiaexport.com/sub-cat.php?sub_id=18" style="color:rgba(3, 2, 26, 0.8)"> <span>Dry Fruits & Nuts</span> </a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=30" style="">Mango</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=103">Apple</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=105">Bananas</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=106">Mangosteen</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=107">Cashew Nuts</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=108">Raisin</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=22">Almonds</a></li>
                        </ul>
                        <ul class="px-4 pt-2 pb-4">
                            <li class="my-2"><a href="https://growindiaexport.com/sub-cat.php?sub_id=19" style="color:rgba(3, 2, 26, 0.8)"> <span>Food Grains, Cereals & Flour</span> </a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=27" style="">Wheat Flour</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=28">Gram Flour</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=29">Organic Flour</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=58">Banana Flour</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=59">Basmati Rice</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=60">Non Basmati Rice</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=61">Brown Rice</a></li>
                        </ul>
                        <ul class="px-4 pt-2 pb-4">
                            <li class="my-2"><a href="https://growindiaexport.com/sub-cat.php?sub_id=20" style="color:rgba(3, 2, 26, 0.8)"> <span>Cooking Spices and Masala</span> </a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=26" style="">Turmeric</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=68">Dry Red Chilli</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=37">Cumin Seeds</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=379">Coriander Seeds</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=380">Fenugreek Seed</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=381">Cinnamon</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=382">Ajwain</a></li>
                        </ul>

                    </div>
                </li>
                <li class="hoov px-3"><a href="https://growindiaexport.com/category.php?cat_id=11">
                        <pre class="pre">Apparel & Fashion</pre>
                    </a>
                    <div class="megadrop">
                        <ul class="px-4 pt-2 pb-4">
                            <li class="my-2"><a href="https://growindiaexport.com/sub-cat.php?sub_id=13" style="color:rgba(3, 2, 26, 0.8)"> <span>Men, Women & Kids Footwear</span> </a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=23" style="">Men Leather Shoes</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=24">Ladies Leather Shoes</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=248">Leather Moccasin</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=557">Leather Loafer Shoes</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=558">Suede Shoes</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=559">Rexine Shoes</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=25">Ladies Slippers</a></li>
                        </ul>
                        <ul class="px-4 pt-2 pb-4">
                            <li class="my-2"><a href="https://growindiaexport.com/sub-cat.php?sub_id=13" style="color:rgba(3, 2, 26, 0.8)"> <span>Womens Clothing</span> </a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=75" style="">Silk Saree</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=336">Cotton Saree</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=337">Chanderi Saree</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=569">Georgette Saree</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=261">Anarkali Suits</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=262">Punjabi Suits</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=262">Punjabi Suits</a></li>
                        </ul>
                        <ul class="px-4 pt-2 pb-4">
                            <li class="my-2"><a href="https://growindiaexport.com/sub-cat.php?sub_id=24" style="color:rgba(3, 2, 26, 0.8)"> <span>Industrial Clothing & Safety Wear</span> </a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=79" style="">Safety Gloves</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=80">Poly Gloves</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=264">Rubber Gloves</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=578">Cold Resistant Gloves</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=81">PVC Helmets</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=82">Ultra Helmets Rice</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=266">Safety Shirt</a></li>
                        </ul>
                        <ul class="px-4 pt-2 pb-4">
                            <li class="my-2"><a href="https://growindiaexport.com/sub-cat.php?sub_id=29" style="color:rgba(3, 2, 26, 0.8)"> <span>Leather Bags & Handbags</span> </a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=100" style="">Fashion Leather Handbag</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=275">Suede Handbags</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=276">Leather Hobo Handbag</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=102">Leather Phone Case</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=277">Leather Key Cases</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=278">Leather Document Case</a></li>
                            <li class="my-2"><a href="https://growindiaexport.com/micro-category.php?micro_id=272">Leather Trolley Bag</a></li>
                        </ul>

                    </div>
                </li>



            </ul>
        </div>
    </section>
    <style>
        .main_nav_box {
            display: flex;
            list-style: none;
            width: 100%;
            /* background-image: linear-gradient(337deg, rgb(255 255 255) 29%, rgb(46 101 13) 22%); */
            /* background-image: linear-gradient(337deg, rgb(255 255 255) 29%, rgb(228 96 133) 22%); */
            /* background-image: linear-gradient(360deg, rgb(118 7 10) 18%, rgb(221 8 6) 78%); */
            /* background-image: linear-gradient(360deg, rgb(231 119 2) 18%, rgb(221 8 6) 78%); */
            background-color: #e77702;
            justify-content: space-around;
            position: relative;
            height: 50px;
        }

        .main_nav_box>ul {
            display: flex;
            list-style: none;

        }

        .main_nav_box>ul>li>a {
            padding: 10px;
            display: block;
            color: white !important;
        }

        .megadrop {
            position: absolute;
            display: flex;
            z-index: 10;
            width: 80%;
            left: 50%;
            top: 100%;
            /* top: 100%; */
            /* box-shadow: 2px 2px 5px gray; */
            background-color: rgba(255, 255, 255, 0.93);

            transform: translate(-50%, 0%);
            display: none;


        }

        .hoov:hover .megadrop {


            display: flex;
        }

        .megadrop li {
            list-style: none;
        }

        .main_nav_box>ul>li>a {
            color: white;
            /* font-weight: bold; */
            letter-spacing: 1px;
            text-transform: capitalize;
        }

        .megadrop>ul:nth-child(odd) {
            background-color: #f7f7f7;
        }

        .megadrop>ul:nth-child(even) {
            background-color: rgb(255, 255, 255);
        }

        .megadrop>ul>li>a>b {
            color: rgb(231 119 2);
        }

        .megadrop>ul>li>a {
            color: rgba(3, 2, 26, 0.5);
            text-transform: capitalize;
        }

        .megadrop>ul>li>a>span {
            color: #e77702;

        }

        .megadrop>ul {
            width: 30%;

        }

        .main_ul_box {
            justify-content: space-evenly;
        }

        /* .main_ul_box>li {
                position: relative;
                 
                    margin: 1px;
           }
           .main_ul_box>li>a>span{
                position: absolute;
                display: block;
                 
                height: 70%;
                border-right: 1px solid white;
                left: 100%;
                top:50%;
                transform: translate(-50%,-50%);
           } */
        .main_ul_box>li {
            background-color: transparent;
            transition: 0.6s;
            /* border-radius: 10px; */
        }

        .main_ul_box>li:hover {
            background-color: white;

        }

        .main_ul_box>li:hover>a {
            color: #e77702 !important;
        }
    </style>

   <div class="  ">
        <div id="carouselExampleIndicators" class="carousel slide "   data-bs-ride="carousel">

        <!--<div class="carousel-indicators">-->
        <!--    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>-->
        <!--    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>-->
        <!--    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>-->
        <!--</div>-->
        <div class="carousel-inner">
            
            <div class="carousel-item  active" data-bs-interval="1000">
                <img src="image/banner/b1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="1000">
                <img src="image/banner/b3.jpg" class="d-block w-100" alt="...">
            </div>
              <div class="carousel-item" data-bs-interval="1000">
                <img src="image/banner/b5.jpg" class="d-block w-100" alt="...">
            </div>
 <div class="carousel-item" data-bs-interval="1000">
                <img src="image/banner/b2.jpg" class="d-block w-100" alt="...">
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

    <!--<div class=" d-block d-sm-block d-md-block d-lg-none">-->
    <!--        <div id="carouselExampleIndicators" class="carousel slide">-->
    <!--                <div class="carousel-indicators">-->
    <!--                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>-->
    <!--                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>-->
    <!--                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>-->
    <!--                </div>-->
    <!--                <div class="carousel-inner">-->
    <!--                        <div class="carousel-item active">-->
    <!--                                <img src="image/banner/4 (2).jpg" class="d-block w-100" alt="banner 4 jpg image">-->
    <!--                        </div>-->
    <!--                        <div class="carousel-item">-->
    <!--                                <img src="image/banner/3.jpg" class="d-block w-100" alt="banner 3 jpg image">-->
    <!--                        </div>-->
    <!--                        <div class="carousel-item">-->
    <!--                                <img src="image/banner/4.jpg" class="d-block w-100" alt="banner jpg image">-->
    <!--                        </div>-->
    <!--                </div>-->
    <!--                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">-->
    <!--                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
    <!--                        <span class="visually-hidden">Previous</span>-->
    <!--                </button>-->
    <!--                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">-->
    <!--                        <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
    <!--                        <span class="visually-hidden">Next</span>-->
    <!--                </button>-->
    <!--        </div>-->
    <!--</div>-->
    <!-- Trending Categories -->






    <div class="container-fluid margin  ">
        <!--<div class="row justify-content-center">-->
        <!--    <div class="col-lg-3">-->
        <!--         <div class="text-center">-->
        <!--     <img src="image/banner/ship.png" class="ship" height="auto" width="50%">-->
        <!-- </div>-->
        <!--    </div>-->
        <!--</div>-->



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
?>

<div class="row justify-content-center">
    <div class="col-11">
        <div class="py-4 px-3 bg-white shadow-lg rounded">
            <a href="https://growindiaexport.com/all-category.php" class="mb-3 fs-4 text-dark mb-2 d-block"> Trending Categories</a>
            <div class="owl-carousel owl owl-theme bg-white">
                <?php
                include "config.php";
                $select1 = "SELECT * FROM `category`";
                $qu1 = mysqli_query($con, $select1);
                while ($row1 = mysqli_fetch_array($qu1)) {
                    $cat_id = $row1['cat_id'];
                    $cat_name = $row1['cat_name'];
                    $slug = slugify($cat_name);
                ?>
                    <a href="https://growindiaexport.com/supplier-in-india/<?php echo $cat_id . '-' . $slug ?>">
                        <div class="item item_cat border rounded shadow-sm d-block m-auto py-2">
                            <div class="d-block">
                                <div class="m-auto">
                                    <img src="https://growindiaexport.com/admin/<?php echo $row1['cat_image'] ?>" style="object-fit:cover;border-radius:50%;height:110px !important;width:110px !important" class="d-block m-auto border border-2 border-dark mb-2" alt="<?php echo $row1['cat_image'] ?>">
                                    <div class="px-2 pt-1 border-top text-center mb-auto">
                                        <p class="text-dark mt-2"><?php echo $cat_name ?></p>
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
  <section class="bg-white py-3 d-none">
     <div class="container">
         <div class="row">
             <div class="col-6 col-lg-4  my-3">
                 <img src="image/banner/ind.gif" class="border border-2 rounded shadow-lg p-2" height="auto" width="100%" alt="img">
             </div>
             <div class="col-6 col-lg-4  my-3">
                 <img src="image/banner/jan.gif" class="border border-2 rounded shadow-lg p-2" height="auto" width="100%" alt="img">
             </div>
             <div class="col-lg-4 my-3  col-lg-4">
                   <div class="row g-0 justify-content-center ">
            <div class="col-12   wow fadeInUp" data-wow-delay="0.3s">
                <div class="row ">
                    <?php
                    include "config.php";
                    $select1 = "SELECT * FROM `product` ORDER BY `pro_id` DESC LIMIT 4 ";
                    $qu1 = mysqli_query($con, $select1);
                    $s_no = 1;
                    while ($row  = mysqli_fetch_array($qu1)) {
                        $product_name = $row['product_name'];
                    ?>
                        <div class="col-6  col-sm-6 mb-3   ">

                            <div class="  bg-white      p-1 rounded shadow-sm">
                                <div class="  p-1">
                                    <img src="./admin/<?php echo $row['product_image1'] ?>" class="border border-3 border-dark   mb-3 rounded" height="150px" width="100%" style="object-fit: cover;" alt="<?php echo $row['product_image1'] ?>">
                                  
                                </div>
                                <!--<p  > <a class="text-center" href="single-product.php?pro_id=<?php echo $row['pro_id'] ?>">Get Best Price</a></i></p>-->
                                <a href="single-product.php?pro_id=<?php echo $row['pro_id'] . strtolower(str_replace(" ", "+", $product_name)) ?>" class="btn btn-dark btn-sm w-100" style="background:#2e508a  !important;">Details</a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
             </div>
         </div>
     </div>
 </section>

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
            'cat_name' => $cat_name,
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
                                   <a href="supplier-in-india/<?php echo $subcategories[0]['cat_id'] . '-' . strtolower(
                                        preg_replace('~-+~', '-', 
                                            trim(
                                                preg_replace('~[^-\w]+~', '', 
                                                    iconv('utf-8', 'us-ascii//TRANSLIT', 
                                                        preg_replace('~[^\pL\d]+~u', '-', $subcategories[0]['cat_name'])
                                                    )
                                                ), 
                                                '-'
                                            )
                                        )
                                    ); ?>">
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
                                            <a href="sub-cat/<?php echo  $subcategory['sub_id'] .   '-' . strtolower(
                                        preg_replace('~-+~', '-', 
                                            trim(
                                                preg_replace('~[^-\w]+~', '', 
                                                    iconv('utf-8', 'us-ascii//TRANSLIT', 
                                                        preg_replace('~[^\pL\d]+~u', '-', $subcategory['sub_cat_name'])
                                                    )
                                                ), 
                                                '-'
                                            )
                                        )
                                    );  ?>" class="text-decoration-none" style="color: black !important;">
                                                <p class="pb-0 fs-6   w-100 overflow-hidden"><?php echo $subcategory['sub_cat_name'] ?></p>
                                            </a>
                                            
                                            <div class="row">
                                                <div class="col-7">
                                                    <!-- inner cat -->
                                                    <?php
                                                    $count2 = 0;
                                                    foreach ($subcategory['inner_categories'] as $innercategory) {
                                                    ?>
                                                        <p class=" p-0 my-1 d-block"><a href="product.php?inner_cat_id=<?php echo $innercategory['inner_cat_id'] ?>" class="text-decoration-none text-orange p-0 m-0">
                                                                <?php echo $innercategory['inner_cat_name'] ?></a></p>
                                                        <!-- end -->
                                                    <?php $count2++;
                                                        if ($count2 >= 3) {
                                                            break;
                                                        };
                                                    } ?>

                                                </div>
                                                <div class="col-5 align-self-start border rounded ">

                                                    <img src="./admin/<?php echo  $subcategory['sub_cat_image']  ?>" class="rounded p-2" height="100px" style="object-fit:cover;" width="100%" alt="<?php echo  $subcategory['sub_cat_image']  ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php $count++;
                                    if ($count >= 4) {
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

    <!--<div class="container margin alert alert-primary">-->
    <!--        <div class="row">-->
    <!--                <div class="col-12">-->
    <!--                        <div class="owl-carousel owl-theme">-->
    <!--                                <div class="item">-->
    <!--                                        <img src="image/brand/images.webp" height="auto" width="100%" style="object-fit: cover;" alt="">-->
    <!--                                </div>-->
    <!--                                <div class="item">-->
    <!--                                        <img src="image/brand/download.webp" height="auto" width="100%" style="object-fit: cover;" alt="">-->
    <!--                                </div>-->
    <!--                                <div class="item">-->
    <!--                                        <img src="image/brand/elixer-jeans-logo.webp" height="auto" width="100%" style="object-fit: cover;" alt="">-->
    <!--                                </div>-->
    <!--                                <div class="item">-->
    <!--                                        <img src="image/brand/plasto.jpg" height="auto" width="100%" style="object-fit: cover;" alt="">-->
    <!--                                </div>-->
    <!--                                <div class="item">-->
    <!--                                        <img src="image/brand/UNIQUE.webp" height="auto" width="100%" style="object-fit: cover;" alt="">-->
    <!--                                </div>-->


    <!--                        </div>-->
    <!--                </div>-->
    <!--        </div>-->
    <!--</div>-->
    <!--products-->





    <section style="background:#ffd6ee;">

        <div class="container">
            <div class="row  justify-content-center">
                <div class="col-lg-8 ">
                    <img src="image/service.png" height="auto" width="100%">
                </div>

            </div>
        </div>
    </section>






    <div class="container-fluid bg-light  bg-icon my-5 py-6   p-5">
        <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h2 class="display-5 mb-3"> Featured Products</h2>
            <p>We are committed to sustainability and environmental stewardship. By implementing eco-friendly
                farming practices and minimizing waste throughout our operations, </p>
        </div>
        <div class="row justify-content-center ">
            <div class="col-12 border wow fadeInUp" data-wow-delay="0.3s">
                <div class="owl-carousel owl owl-carousel owl-theme  ">
                    <?php
                    include "config.php";
                    $select1 = "SELECT * from `product` limit 15";
                    $qu1 = mysqli_query($con, $select1);
                    $s_no = 1;
                    while ($row  = mysqli_fetch_array($qu1)) {
                        $product_name = $row['product_name'];
                    ?>
                        <div class="item   ">

                            <div class="product_card bg-white  my-2   p-1 rounded shadow-sm">
                                <div class="img_card p-1">
                                    <img src="./admin/<?php echo $row['product_image1'] ?>" class="border border-3 border-dark  mb-3 rounded" height="150px" width="100%" style="object-fit: cover;" alt="<?php echo $row['product_image1'] ?>">
                                    <hr>
                                </div>
                                <p style="height: 6rem;"><small><?php echo $row['product_name'] ?></small><i> <a href="single-product.php?pro_id=<?php echo $row['pro_id'] ?>">Read More</a></i></p>
                                <a href="single-product.php?pro_id=<?php echo $row['pro_id'] . strtolower(str_replace(" ", "+", $product_name)) ?>" class="btn btn-dark w-100" style="background:#2e508a !important">Details</a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-12">
                <h3>Trending Products</h3>
            </div>
        </div>
        <div class="row justify-content-center ">
            <div class="col-12 border wow fadeInUp" data-wow-delay="0.3s">
                <div class="owl-carousel owl-carousel owl owl-theme  ">
                    <?php
                    include "config.php";
                    $select1 = "SELECT * FROM `product` ORDER BY `pro_id` DESC LIMIT 10 ";
                    $qu1 = mysqli_query($con, $select1);
                    $s_no = 1;
                    while ($row  = mysqli_fetch_array($qu1)) {
                        $product_name = $row['product_name'];
                    ?>
                        <div class="item   ">

                            <div class="product_card bg-white  my-2   p-1 rounded shadow-sm">
                                <div class="img_card p-1">
                                    <img src="./admin/<?php echo $row['product_image1'] ?>" class="border border-3 border-dark   mb-3 rounded" height="150px" width="100%" style="object-fit: cover;" alt="<?php echo $row['product_image1'] ?>">
                                    <hr>
                                </div>
                                <p style="height: 6rem;"><small><?php echo $row['product_name'] ?></small><i> <a href="single-product.php?pro_id=<?php echo $row['pro_id'] ?>">Read More</a></i></p>
                                <a href="single-product.php?pro_id=<?php echo $row['pro_id'] . strtolower(str_replace(" ", "+", $product_name)) ?>" class="btn btn-dark w-100" style="background:#2e508a  !important;">Details</a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <style>
        .bg_flxed_image {
            background-image: url(./image/banner/banner.jpg);
            width: 100%;
            background-size: cover;
            padding: 5rem 0rem;
            background-attachment: fixed;
        }

        .contect_about-us button {
            border: none;
            background: #2e508a;
            padding: 10px 30px;
            border-radius: 30px;
            color: white;
        }
    </style>
    <section>

        <div class="bg_flxed_image">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-11 col-lg-11  shadow-lg my-3 bg-white py-5 rounded">
                        <div class="row ">
                            <div class="col-lg-6 my-4">
                                <div class="port h-100 border border-dark shadow-lg  rounded"></div>
                            </div>
                            <div class="col-lg-6 my-4">
                                <div class="contect_about-us p-3">
                                    <h1 style="color:#e77e0f;"> Welcome to <span class="text-primary fw-bold"> GrowIndia Export </span> </h1>
                                    <p style="text-align:justify;">Welcome to GrowIndia Export, your trusted partner in facilitating seamless connections between businesses and service providers across a wide range of industries. Since our inception, we've been driven by a clear mission: to simplify and enhance the international trade process, offering businesses a direct path to trusted providers that can help them succeed.At GrowIndia Export, we understand the complexities and challenges that come with international trade. Our platform is designed to streamline these processes, offering a user-friendly experience that connects businesses with the right service providers to meet their needs. Whether you're a small business looking to expand or a larger company seeking reliable partners, we make it easier for you to find the support you need to thrive in a global marketplace.</p>
                                    <p style="text-align:justify;">We are committed to providing more than just a platform. Our comprehensive suite of services and support ensures that every interaction and transaction runs smoothly. From connecting businesses with trusted providers to offering valuable market insights, we’re here to make global trade more accessible, efficient, and effective for you.</p>

                                    <a href="https://growindiaexport.com/about-us.php"> <button>Read More</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- sm news + md none-->
<section class="container-fluid mt-4  d-block d-md-none" style="height:600px;overflow:hidden">
     <div class="card-header d-block d-md-none">
                        <h4 class="text-center alert alert-dark">Latest News</h4>
                    </div>
    <marquee direction= "up" onmouseover="this.stop();" onmouseout="this.start();" class="h-100 border p-1"  >
   <div class="row">
       <div class="col-12   ">
             
                    <?php
                    
                    
                    
                    
                    
                    include "config.php";
                    $select = "SELECT * FROM  `news` ORDER BY id DESC limit 40";
                    $q = mysqli_query($con, $select);
                    $sno1 = 1;
                    while ($row = mysqli_fetch_array($q)) {

 $heading = slugify($row['heading']);
                    ?>

                        <div class="card p-4 my-3 shadow-lg">
                            <div class="row">
                                <div class="col-12 ">
                                    <p><small><i class="fa-solid fa-calendar-days" style="color: #000b72;"></i> <?php echo $row['date'] ?> </small></p>

                                    <div class="row">
                                        <div class="col-12">
                                            <img src="./admin/<?php echo  $row['image']  ?>" class="border border-2 border-dark rounded" width="100%" height="100px" style="object-fit: cover;" alt="<?php echo  $row['image']  ?>">
                                            <cite><?php echo $row['about_image'] ?></cite>
                                        </div>
                                        <div class="col-12">
                                            <div class="text">
                                                <h3 style="color: #000b72;" class="fs-5 fw-bold  text-muted mb-2"><?php echo $row['heading'] ?> </h3>
                                                <a href="https://growindiaexport.com/news/<?php echo $row['id']."-".$heading ?>">
                                                    <p style="color: #000b72;" class=" "><?php echo substr($row['long_para'], 0, 200) . '...'; ?></p>
                                                </a>
                                                <!--<p style="color: #000b72;" class=" "><?php // echo substr($row['long_para'],0,100).'...'; 
                                                                                            ?></p>-->
                                            </div>
                                        </div>
                                    </div>

                                    <!--<div class="text-start text-lg-end">-->
                                    <!--    <a href="single-news.php?id=<?php echo $row['id'] ?>">-->
                                    <!--        <button style="border: none; background: linear-gradient(to right, #ff9d08, #ff5b2e); color: white;" class="p-2 mt-2">Read More </button>-->
                                    <!--    </a>-->
                                    <!--</div>-->
                                </div>
                            </div>
                        </div>

                    <?php $sno1++;
                    } ?>
              
            </div>
   </div>
   </marquee>
</section>



    <!-- news start here-->
    <div class="container-fluid mt-20 pb-20 my-5  " style="height:600px;overflow:hidden">
        <div class="row d-none d-md-flex">
            <div class="col-8">
                <h4 class="text-center alert alert-dark">Latest News</h4>
            </div>
            <div class="col-4">
                <a href="https://growindiaexport.com/buyleads.php"><h4 class="text-center alert alert-dark">Trending Buyleads</h4></a>
            </div>
        </div>
        <div class="card-header d-block d-md-none">
                         <a href="https://growindiaexport.com/buyleads.php"><h4 class="text-center alert alert-dark">Trending Buyleads</h4></a>
                    </div>

       <marquee direction= "up" class="h-100" onmouseover="this.stop();" onmouseout="this.start();" >
        <div class="row ">
            <div class="col-12 col-lg-8 col-md-8 col-sm-12 d-none d-md-block">
             
                    <?php
                    include "config.php";
                    $select = "SELECT * FROM  `news` ORDER BY id DESC limit 40";
                    $q = mysqli_query($con, $select);
                    $sno1 = 1;
                    while ($row = mysqli_fetch_array($q)) {


                    ?>

                        <div class="card p-4 my-3">
                            <div class="row">
                                <div class="col-12 ">
                                    <p><small><i class="fa-solid fa-calendar-days" style="color: #000b72;"></i> <?php echo $row['date'] ?> </small></p>

                                    <div class="row">
                                        <div class="col-3">
                                            <img src="./admin/<?php echo  $row['image']  ?>" class="border border-2 border-dark rounded" width="100%" height="100px" style="object-fit: cover;" alt="<?php echo  $row['image']  ?>">
                                            <cite><?php echo $row['about_image'] ?></cite>
                                        </div>
                                        <div class="col-9">
                                            <div class="text">
                                                <h3 style="color: #000b72;" class="fs-5 fw-bold  text-muted mb-2"><?php echo $row['heading'] ?> </h3>
                                                <a href="https://growindiaexport.com/news/<?php echo $row['id']."-".$heading ?>">
                                                    <p style="color: #000b72;" class=" "><?php echo substr($row['long_para'], 0, 200) . '...'; ?></p>
                                                </a>
                                                <!--<p style="color: #000b72;" class=" "><?php // echo substr($row['long_para'],0,100).'...'; 
                                                                                            ?></p>-->
                                            </div>
                                        </div>
                                    </div>

                                    <!--<div class="text-start text-lg-end">-->
                                    <!--    <a href="single-news.php?id=<?php echo $row['id'] ?>">-->
                                    <!--        <button style="border: none; background: linear-gradient(to right, #ff9d08, #ff5b2e); color: white;" class="p-2 mt-2">Read More </button>-->
                                    <!--    </a>-->
                                    <!--</div>-->
                                </div>
                            </div>
                        </div>

                    <?php $sno1++;
                    } ?>
              
            </div>

            <div class="col-12 col-lg-4 col-md-4 col-sm-12">
                <div class="card mt-3 p-2" style="height: 100%; overflow:hidden;">
                    <div class="card-header">
                        <a href="https://growindiaexport.com/buyleads.php"> <h4>Trending Buyleads</h4></a>
                    </div>

                   
                        <?php
                        include "config.php";
                        $select = "SELECT  * FROM buyleads  whare  ORDER BY buyleads_id DESC limit 40";
                        $q = mysqli_query($con, $select);
                        while ($row = mysqli_fetch_array($q)) {
                            $product_name = $row['product_name'];

                            $str_search =  strtolower(str_replace(" ", "+", $product_name));
                        ?>
                            <a href="https://growindiaexport.com/buyleads-category.php" title="<?php echo $row['heading'] . "-" . $row['date'] ?>" class="text-decoration-none ">
                                <div class="card p-3 my-2 shadow-lg">
                                    <div class="row">

                                        <div class="col-12  ">
                                            <div class="text">
                                                <h3 style="color: black;" class="fs-6 text-dark fw-bold my-2 text-capitalize"><?php echo  $row['product_name'] ?> </h3>
                                                <div class="row  mt-3 table-borderless">
                                                    <div class="col-lg-12  ">
                                                        <div class="row   border-top text-capitalize">
                                                            <div class="col-6 text-capitalize">
                                                                <p class="m-0 p-0" style="color: #055faf;"><b><small>Shipping Mode:</small> </b></p>
                                                            </div>
                                                            <div class="col-6 ">
                                                                <p class="m-0 p-0 text-dark"> <?php echo $row['shipping_mode'] ?> </p>
                                                            </div>
                                                        </div>
                                                        <div class="row  border-top  text-capitalize">
                                                            <div class="col-6">
                                                                <p class="m-0 p-0" style="color: #055faf;"><b><small>Quantity:</small> </b></p>
                                                            </div>
                                                            <div class="col-6">
                                                                <p class="m-0 p-0 text-dark"> <?php echo $row['quantity'] ?> </p>
                                                            </div>
                                                        </div>
                                                        <div class="row  border-top  text-capitalize">
                                                            <div class="col-6">
                                                                <p class="m-0 p-0" style="color: #055faf;"><b><small>Mode Of Payment:</small> </b></p>
                                                            </div>
                                                            <div class="col-6">
                                                                <p class="m-0 p-0 text-dark"> <?php echo $row['payment_mode'] ?> </p>
                                                            </div>
                                                        </div>
                                                        <!--  -->
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        <?php   } ?>
                   


                </div>
                <a href="https://growindiaexport.com/image/about.mp4"> <video src="image/about.mp4" type="video/mp4" autoplay muted loop height="auto" style="object-fit:cover" class="my-3" width="100%"></video></a>

            </div>
        </div>
        </marquee>
    </div>
    <!-- news start here-->
    <?php
    include "map.php";
    ?>
    


<div class="container-fluid bg-light  bg-icon my-5 py-6   p-5">
        
        <div class="row justify-content-center ">
             <div class="col-12 mb-4">
                <h4 class="text-center">Browse By States</h4>
            </div>
            <div class="col-12   wow fadeInUp" data-wow-delay="0.3s">
                <div class="owl-carousel owl-state owl-carousel owl-theme  ">
                     <?php
                        include "config.php";
                        $sel = "SELECT * FROM `states`";
                        $q = mysqli_query($con, $sel);
                        while ($row = mysqli_fetch_array($q)) {
                        ?>
                        <div class="item   m-auto">

                             <a href="states.php?state_name=<?php echo $row['state_name'] ?>">
                                <div class="card  m-auto rounded border border-dark p-1 shadow-lg text-center" style="width: 210px;height:220px">
                                    <img src="image/<?php echo $row['img'] ?>" height="150px" class="rounded" width="200px" style="object-fit: cover;" alt="States Image">
                                    <!--<hr>-->
                                    <p class="w- "> <?php echo $row['state_name'] ?> </p>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
      
       
    </div>



















 <style>
    .gallery {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }

    .play-image {
     
      height: 300px;
      object-fit: cover;
      cursor: pointer;
      border: 2px solid #ccc;
      border-radius: 10px;
    }

    .modal_box {
      display: none;
      position: fixed;
      z-index: 1000;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.8);
      justify-content: center;
      align-items: center;
    }

    .modal_box-content {
      position: relative;
      max-width: 80%;
      background: #000;
      border-radius: 10px;
    }

    .modal_box video {
      width: 100%;
      height: auto;
    }

    .close {
      position: absolute;
      top: 10px;
      right: 15px;
      font-size: 30px;
      color: white;
      cursor: pointer;
      z-index: 1001;
    }
     .test-bg{
         background: url(image/banner/test.jpg);
         background-size: cover;
     }
  </style>


 
 <!-- Video Gallery Section -->
<div class="container bg-light bg-icon my-5 py-6 p-5 test-bg">
    <div class="card-header">
        <h4 class="text-center">Testimonials</h4>
    </div>
    <div class="row justify-content-center">
        <div class="col-12   wow py-2 fadeInUp" data-wow-delay="0.3s">
            <div class="shorts owl-carousel owl-theme gallery">
 
                    
                    <div class="shorts-banner alert alert-warning" style="border-color: #e77701 !important;">
                        <video src="image/video/test-v1.mp4" type="video/mp4" class="play-image border border-3 shadow-lg m-auto   rounded"   data-video="image/video/test-v1.mp4" autoplau muted loop></video>
                     </div>
                    <div class="shorts-banner alert alert-warning" style="border-color: #e77701 !important;">
                        <video src="image/video/test-2.mp4" type="video/mp4" class="play-image border border-3 shadow-lg m-auto   rounded"   data-video="image/video/test-2.mp4" autoplau muted loop></video>
                     </div>
                    <div class="shorts-banner alert alert-warning" style="border-color: #e77701 !important;">
                        <video src="image/video/3.mp4" type="video/mp4" class="play-image border border-3 shadow-lg m-auto   rounded"   data-video="image/video/3.mp4" autoplau muted loop></video>
                     </div>
              

            </div>
        </div>
    </div>
</div>

<!-- Video Modal -->
<div id="videomodal_box" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closemodal_box()">&times;</span>
        <video id="modal_boxVideo" controls>
            <source src="" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</div>

<!-- Styles -->
<style>
.modal {
    display: none;
    position: fixed;
    z-index: 9999;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.8);
    justify-content: center;
    align-items: center;
}

.modal-content {
    position: relative;
    background: #000;
    padding: 0;
    border-radius: 10px;
    max-width: 80%;
    width: 80%;
}

.modal video {
    width: 100%;
    height: auto;
}

.close {
    position: absolute;
    top: 10px;
    right: 15px;
    font-size: 30px;
    color: white;
    cursor: pointer;
    z-index: 1001;
}

.play-image {
    width: 100%;
    
    margin: 10px;
    border: 2px solid #ccc;
    border-radius: 10px;
    cursor: pointer;
}
</style>

<!-- JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const modal_box = document.getElementById('videomodal_box');
    const video = document.getElementById('modal_boxVideo');
    const thumbnails = document.querySelectorAll('.play-image');

    thumbnails.forEach(thumb => {
        thumb.addEventListener('click', () => {
            const videoSrc = thumb.getAttribute('data-video');
            video.querySelector('source').src = videoSrc;
            video.load();
            modal_box.style.display = 'flex';
            video.play();
        });
    });

    window.closemodal_box = function () {
        modal_box.style.display = 'none';
        video.pause();
        video.currentTime = 0;
    };

    // Close when clicking outside video
    window.addEventListener('click', function (e) {
        if (e.target === modal_box) {
            closemodal_box();
        }
    });
});
</script>














        <div class="container-fluid margin">
                <div class="row justify-content-center">
                        <div class="col-12">
                                <div class="py-4 px-3 bg-white shadow-lg rounded">
                                        <a href="https://growindiaexport.com/all-category.php" class="mb-3 fs-4 text-dark mb-2 d-block">Our story</a>

                                        <div class="owl-carousel story bg-white">
                                                <?php
                                                $sql = "SELECT * FROM `stories` ORDER BY `id` DESC";
                                                $result = $con->query($sql);

                                                if ($result->num_rows > 0) {
                                                        while ($row = $result->fetch_assoc()) {
                                                                $images = json_decode($row['images'], true); // decode JSON to PHP array
                                                                $s = 1;
                                                                foreach ($images as $item) {
                                                                        echo '<div class="item rounded border p-2 position-relative story_contai text-center">';
                                                                        echo '<a href="singal-story.php?id=' . $row['id'] . '">';
                                                                        echo '<img src="https://growindiaexport.com/admin/' . $item['image'] . '" class=" rounded  mb-2" style="height:400px; object-fit:cover;" alt="https://growindiaexport.com/admin/' . $item['image'] . '">';
                                                                        echo '</a>';
                                                                      echo '<p class="mb-0 position-absolute w-100 pb-2 px-1 text-center bottom-0 text-white"><span class="d-block w-75 m-auto text-center">' . htmlspecialchars(substr($item['caption'], 0, 50)) . '' . '</span></p>';

                                                                        // echo '<p class="mb-0">' . htmlspecialchars($item['caption']) . '</p>';
                                                                        echo '</div>';

                                                                        if ($s == 1) break;
                                                                        $s++;
                                                                }
                                                        }
                                                } else {
                                                        echo "No stories found.";
                                                }
                                                ?>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>

 <script>
                // Related carousel
                $(".story").owlCarousel({
                        autoplay: true,
                        smartSpeed: 1000,
                        margin: 10,
                        dots: true,
                        loop: true,
                        nav: true,
                        navText: [
                                '<i class="fa fa-angle-left "  ></i>',
                                '<i class="fa fa-angle-right"  ></i>'
                        ],
                        responsive: {
                                0: {
                                        items: 1
                                },
                                576: {
                                        items: 3
                                },
                                768: {
                                        items: 4
                                }
                        }
                });
        </script>





















    <div class="container margin">

        <div class="row mt-5">
            <p class="fs-4">Popular Category</p>
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
            <p class="fs-4">Popular States</p>
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

    <script>
        $(document).ready(function() {
            $('.owl').owlCarousel({


                loop: true,
                margin: 10,
                autoplay: true,
                nav: true,
                navText: [
                    '<i class="fa fa-angle-left "  ></i>',
                    '<i class="fa fa-angle-right"  ></i>'
                ],
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
    <script>
        $(document).ready(function() {
            $('.owl-state').owlCarousel({


                loop: true,
                margin: 10,
                autoplay: true,
                nav: true,
                 dots: false, // Disable dots here
                navText: [
                    '<i class="fa fa-angle-left "  ></i>',
                    '<i class="fa fa-angle-right"  ></i>'
                ],
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
                        items: 4
                    }
                }
            })
        })
    </script>
    
    

    
    
    
    <script>
                $(document).ready(function() {
                        $('.shorts').owlCarousel({


                                loop: true,
                                margin: 10,
                               
                                nav: true,
                                navText: [
                                        '<i class="fa fa-angle-left "  ></i>',
                                        '<i class="fa fa-angle-right"  ></i>'
                                ],
                                responsive: {
                                        0: {
                                                items: 1
                                        },
                                        576: {
                                                items: 2
                                        } 
                                }
                        })
                })
        </script>
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>-->
    <?php include "footer.php"; ?>
    
    
    