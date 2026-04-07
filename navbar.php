
  
   <section class="d-none d-sm-none d-md-none d-lg-block">
                <div class="top_nav">
                        <div class="container-fluid">
                                <div class="row">
                                        <div class="col-12">
                                                <ul class="nav py-2">
                                                      
                                                       
                                                       
                                                        <li class="nav-item  "><a href="tell:+91-9211078505" class="nav-link  text-white "><SMALL><i class="fa-solid fa-phone fa-shake"></i> Toll Free: +91-9211078505</SMALL></a></li>
                                                        <li class="nav-item  "><a href="mailto:support@growindiaexport.com" class="nav-link text-white  "><small><i class="fa-solid fa-envelope fa-bounce"></i>   support@growindiaexport.com</small></a></li>
                                                        <!--<li class="nav-item   w-50"><a href="https://growindiaexport.com/advertise.php" class="nav-link text-white">-->
                                                        <!--                <marquee behavior="" direction="">-->
                                                        <!--                    <p class="p-0 m-0"><span>Advertise With Us</span> || Prime || Prime Pro || Ultra || Ultra Pro</p>-->
                                                        <!--                </marquee>-->
                                                        <!--        </a></li>-->
                                                        <!--<li class="nav-item  "><a href="4" class="nav-link  text-white">+91 7686*****</a></li>-->
                                                        <li class="nav-item dropdown ms-auto">
                                                                <a class="nav-link dropdown-toggle fw-bold text-white" style="background: #e77702;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        For Buyers
                                                                </a>
                                                                <ul class="dropdown-menu">
                                                                        <!--<li><a class="dropdown-item" href="https://growindiaexport.com/post-requirement.php">Post Requirement</a></li>-->
                                                                        <li><a class="dropdown-item" href="https://growindiaexport.com/all-category.php">Browse Suppliers</a></li>
                                                                        <li>
                                                                                <hr class="dropdown-divider">
                                                                        </li>
                                                                        <li><a class="dropdown-item" href="https://growindiaexport.com/buyer-faq.php">Buyer's FAQ</a></li>
                                                                </ul>
                                                        </li>
                                                        <li class="nav-item dropdown">
                                                                <a class="nav-link dropdown-toggle fw-bold text-white mx-1" style="background: #e77702;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        For Seller
                                                                </a>
                                                                <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="https://growindiaexport.com/supplier-register.php">Sell Your Product / <small class="text-danger">Register Now</small></a></li>
                                                                         
                                                                        <li>
                                                                                <hr class="dropdown-divider">
                                                                        </li>
                                                                        <li><a class="dropdown-item" href="https://growindiaexport.com/seller-faq.php">Seller FAQ</a></li>
                                                                </ul>
                                                        </li>
                                                        <li class="nav-item  ">
                                                                <a class="nav-link   fw-bold text-white mx-1" style="background: #e77702;" href="https://growindiaexport.com/supplier-login.php"  >
                                                                    <i class="fa-regular fa-user fa-bounce"></i>  Login Here
                                                                </a>
                                                               
                                                        </li>
                                                        
                                                </ul>
                                        </div>
                                </div>
                        </div>
                </div>
                <!-- top nav end here -->

                <!-- logo here -->
                <!--<div class="header_top bg-white">-->
                <!--        <ul class="nav p-3 border shadow-sm">-->
                <!--                <li class="nav-item me-auto"><a href="/" class="nav-link"><img src="logo/logo.png" height="75px" width="256px" alt="https://growindiaexport.com/"></a></li>-->
                <!--                <li class="nav-item mt-3">-->
                <!--                        <form action="search-product.php" method="GET">-->
                <!--                                <div class="input_box   ">-->
                <!--                                        <input type="search" placeholder="Search Here By Product Name / Company Name" name="query" class="p-2 px-3 border-end">-->
                <!--                                        <button class="px-2" type="submit">Submit</button>-->
                <!--                                </div>-->
                <!--                        </form>-->
                <!--                </li>-->
                <!--                <li class="nav-item  "><a href="" class="nav-link"> <a href="post-requirement.php" class="btn btn-primary px-3 mx-2 rounded-pill">Post Your Buy Requirement</a></a></li>-->
                <!--         </ul>-->
                <!--</div>-->
                <?php 
                $nav_id = 1;
                
                ?>
                 <div class="header_top bg-white py-3 shadow-sm  <?php echo $nav_id  ?>" id="">
                        <div class="container-fluid">
                                <div class="row align-items-center">
                                        <div class="col-3">
                                                <a href="/" class="nav-link"><img src="https://growindiaexport.com/logo/logo.png" height="75px" width="250px" alt="https://growindiaexport.com/"></a>
                                        </div>
                                        <div class="col-6">
                                                <!--<form action="search-product.php" class="mobile-search hidedesktop  ajex_search    " id="liveSearchForm">-->
                                                <!--        <select id="searchType" class="border-end   border-secondary" required>-->
                                                              
                                                <!--                <option value="product">Products</option>-->
                                                <!--                  <option value="buyleads">Buyleads</option>-->
                                                <!--        </select>-->
                                                <!--        <input type="search" class=" form-control" style="width:  ;" name="query" id="searchQuery" placeholder="Search..." required>-->
                                                <!--        <button class="  " type="submit"><i class="icon-search"></i> Search</button>-->
                                                <!--</form>-->
                                                 <div class="position-relative">
                                                    <form action="https://growindiaexport.com/search1.php" class="mobile-search hidedesktop ajex_search" id="liveSearchForm" method="GET">
                                                        <select id="searchType" class="border-end border-secondary" required>
                                                            <option value="product">Products</option>
                                                            <option value="buyleads">Buyleads</option>
                                                           
                                                        </select>
                                                        <input type="search" autocomplete="off" class="form-control" name="query" id="searchQuery" placeholder="Search..." required>
                                                        <button class="searchResultItem" type="submit"><i class="icon-search"></i> Search</button>
                                                    </form>
                            
                                                    <div class="position-absolute bg_inclick mx-4 px-4 w-100 top-100     " style=" overflow-y:auto;z-index:15;height:0px">
                            <div id="searchResults">

                                                                                        
                              <?php
                              include "tranding_pro.php";
                              
                              ?></div>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="col-3  ">
                                        
                                            <a href="#" class="btn btn-primary px-3  rounded-pill">Frequently Asked Questions</a>
                                            
                                             
                                         
                                        </div>
                                </div>
                        </div>
                </div>
        </section>
        <!-- logo here -->

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