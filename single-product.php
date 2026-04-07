<!doctype html>
<html lang="en">
 
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
<link rel="icon" type="image/x-icon" href="https://growindiaexport.com/image/favicon.png">
    <link rel="mask-icon" href="https://growindiaexport.com/image/favicon.png">

        <link rel="stylesheet" href="https://growindiaexport.com/assets/css/megadrop.css">
             <link rel="stylesheet" href="https://growindiaexport.com/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://growindiaexport.com/assets/css/style.css">
        <link rel="stylesheet" href="https://growindiaexport.com/assets/vendor/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="https://growindiaexport.com/assets/vendor/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
        <script src="https://growindiaexport.com/assets/vendor/OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js"></script>
        <script src="https://growindiaexport.com/assets/vendor/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
<link rel="stylesheet" href="https://growindiaexport.com/fontawesome-free-6.5.2-web/css/all.min.css">


<!-- for seo-->
<link rel="canonical" href="https://growindiaexport.com/single-product.php?pro_id=<?php echo $_GET['pro_id']  ?>"/>
<!-- for seo-->




        <style>
                body {
                        background-color: #fdfdfd !important;
                        font-family: "Roboto", sans-serif;
                }
                 a{
                    text-decoration:none !important;
                }
                
.item_cat{
    height: 200px;
    align-items: center;
    display: flex;
 aspect-ratio: 0 / 1;
     justify-content: center;
}
        </style>
</head>

<body>

      <?php include "navbar.php"; ?>
    <?php
    include "config.php";
    $pro_id = $_GET['pro_id'];
    $select = "SELECT * from `product` where `pro_id`='$pro_id'  ";


    $qu = mysqli_query($con, $select);
    $s_no = 1;
    while ($row = mysqli_fetch_array($qu)) {
 $title = $row['title'];
                            $product_name = $row['product_name'];
$plan = $row['plan'];
  $logoPath = $row['company_logo'];
    ?>
        <div class="container border text-capitalize  shadow-lg p-3 rounded my-3">
            <div class="row">
                <div class="col-12 "> 
                    <div class="row ">
                        <div class="col-12 col-lg-8 border-end border-3 ">
                            <div class="row  ">
                                <div class="col-12 col-lg-6">
                                    <img src="./admin/<?php echo $row['product_image1'] ?>" class="rounded border border-3 border-dark" style="object-fit: cover;" height="auto" width="100%" alt="">
                                      </div>
                                <div class="col-12 col-lg-6">
                                    <div class="p-3">
                                        <h5 style="color:#0d4e9e"><?php echo $row['title'] ?></h5>
                                        <h5><?php echo $row['product_name'] ?></h5>
                                        <p>Listing ID #<?php echo $row['pro_id'] ?></p>
                                        <p> <button class="btn btn-outline-primary rounded-pill px-5"> <?php echo $row['price'] ?> <?php echo $row['unit'] ?></button>  </p>
                                        <hr>
                                        <table class="table  table-borderless table-light">
                                            <?php echo $row['product_description'] ?> 
                                        </table>
                                        
                                    </div>
                                </div>
                            </div>
                             <div class="row my-3">
                    <div class="col-12">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="btn  active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Product Specifications</button>
                            </li>
                            <li class="nav-item" role="presentation">
                               
                                <button class="btn " id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Company Details</button>
                            </li>
                         

                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                <div class="container  border-top  border-1">
                                    <div class="row">
                                        <div class="col-12  ">
                                            <div class="border p-3 bg-  ">
                                                <h5 class="text-danger">Product Specifications</h5>
                                                <!--<table class="table table-borderless text-capitalize table-light table-hover table-striped">-->
                                                <!--<?php //echo $row['long_dec'] ?>-->
                                                <!--</table>-->
                                                 <ul class="text-capitalize list- ">
                                                        <li class="my-2">MOQ : <b class=""><?php echo $row['moq'] ?></b></li>
                                                        <li class="my-2">packaging type : <b><?php echo $row['packaging_type'] ?></b></li>
                                                        <li class="my-2">product life : <b><?php echo $row['product_life'] ?></b></li>
                                                        <li class="my-2">feature : <b><?php echo $row['feature'] ?></b></li>
                                                        <li class="my-2">Type : <b><?php echo $row['business_type'] ?></b></li>
                                                    </ul>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                                <div class="container  border-top  border-1">
                                    <div class="row">
                                        <div class="col-12  ">
                                            <div class="border p-3 bg-light">
                                                <h5 class="text-danger">Company Details</h5>
                                                <table class="table table-borderless table-light table-hover table-striped">
                                                    <tr calss="text-capitalize ">
                                                        <th class="text-muted ">Comapny Name</th>
                                                        <td ><?php echo $row['company_name'] ?></td>
                                                    </tr>
                                                    <tr calss="text-capitalize ">
                                                        <th class="text-muted">Stablish</th>
                                                        <td><?php echo $row['company_experience'] ?></td>
                                                    </tr>
                                                    <tr calss="text-capitalize ">
                                                        <th class="text-muted">Owner Name</th>
                                                        <td><b><?php echo $row['client_name'] ?></b></td>
                                                    </tr>
                                                    <tr calss="text-capitalize ">
                                                        <th class="text-muted">Address</th>
                                                        <td><?php echo $row['company_address'] ?></td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <th class="text-muted">IEC</th>
                                                        <td>--<?php echo $row['iec'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-muted">GST Code</th>
                                                        <td>--<?php echo $row['gst'] ?></td>
                                                    </tr>
                                                </table>
                                                <hr>

                                                <div class="row text-capitalize">
                                                    <div class="col-12 col-lg-8">
                                                          <?php
                                            if ($plan == "prime-user") {
                                                echo "<img src='image/plan1.jpg' height='70px' width='190px' >";
                                            } else if($plan == "star-user"){
                                                 echo "<img src='image/plan2.jpg' height='70px' width='190px' >";
                                            }else if($plan == "galaxy-user"){
                                                 echo "<img src='image/plan3.jpg' height='70px' width='190px' >";
                                            }else{
                                                echo "";
                                            }
                                            ?>  
                                                        <h5 class="mt-5 mb-3"><?php echo $row['company_name'] ?></h5>
                                                        <p style="text-align: justify;"><?php echo $row['about_company'] ?></p>
                                                    </div>
                                                    <div class="col-4 d-none d-sm-none d-md-none d-lg-flex">
                                                        <img src="./admin/<?php echo $row['company_logo'] ?>" class="border border-3 border-dark rounded" height="200px" style="object-fit: cover;" width="100%" alt="company logo">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">2</div>
                            <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">3 </div>
                        </div>
                    </div>
                </div>
                        </div>
                        <div class="col-12 col-lg-4 ">
                            <div class="company_card rounded     w-100 p-4  " style="background: #f1f1f1;height:100%">
                                <div class="box_container text-center">
                                  <div class="   text-center mb-2 "  >
                                      
                                        <img src="./admin/<?php echo $row['company_logo'] ?>" height="100px" width="200px" style="object-fit: cover;" alt="Company logo">
                                  </div>

                                    <h5><?php echo $row['company_name'] ?> </h5>
                              
                      <h4 class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo  $s_no ?>">Enquiry  </h4>
                       <div class="modal fade" id="exampleModal<?php echo  $s_no ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                             <a target="_blank" href="/"> <img src="http://growindiaexport.com/logo/logo.png" height="60px" width="200px" alt="Logo"  ></a>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form action="" method="post" onsubmit="return checkCaptcha();"> <!-- Move form tag here -->
                                                            <div class="modal-body">
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <div class="col-lg-4">
                                                                            <img src="http://growindiaexport.com/admin/<?php echo $row['product_image1'] ?>" class="rounded" height="200px" width="100%" style="object-fit: cover;" alt="">
                                                                        </div>
                                                                        <div class="col-lg-8">

                                                                            <input type="text" placeholder="Name" name="buyer_name" class="form-control my-2 q" required>
                                                                            <input type="email" name="buyer_email" placeholder="Email" class="form-control my-2 " required>
                                                                            <input type="number" name="buyer_phone" placeholder="Number" class="form-control my-2" required>
                                                                             <input type="text" name="unit" placeholder="Unit" class="form-control my-2 q">
                                                                        <input type="text" readonly name="enquiry_for" placeholder="Enquiry Product Name" value="<?php echo $product_name ?>" class="form-control   disable-in-click my-2">
                                                                        </div>
                                                                        <div class="col-12">
                                                                             <div class="g-recaptcha" data-sitekey="6LccliwrAAAAAF0XH-A1i7sbSyoKh-UG9LT6mkhy"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                
                                                                <button type="submit" name="submit" class="btn btn-primary">Send Enquiry</button>
                                                                
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                               
                                    <div class=" t ">
                                        
                                        <p class="mt-2  "> <img src="image/icon/owner.png" height="40px" width="40px" alt=""> Client Name : <b><?php echo $row['client_name'] ?></b></p>
                                        <p class="mt-2  "> <i class="fa-solid fa-location-dot fa-fade mx-2" style="color: #13a01c;"></i> <small>  <?php echo $row['company_address'] ?> </small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tabs start here -->
               
            </div>
        </div>
    <?php } ?>
    
    
    
    
    <?php
include "config.php";
    if (isset($_POST['submit'])) {
        $buyer_name = $_POST['buyer_name'];
        $buyer_email = $_POST['buyer_email'];
        $buyer_phone = $_POST['buyer_phone'];
        $enquiry_for = $_POST['enquiry_for'];
        $unit = $_POST['unit'];
        $ins = "INSERT INTO `enquiry`(`buyer_name`,`buyer_email`,`buyer_phone`,`enquiry_for`,`unit`) values ('$buyer_name','$buyer_email','$buyer_phone','$enquiry_for','$unit')";
        $q = mysqli_query($con, $ins);
        
    }
    ?>
    
     <script>
        // Get all elements with class 'q' (the three input fields)
        const inputs = document.getElementsByClassName('q');
    
        // Special characters to check for
        const specialCharacters = ['<', '>', '#', '^', ',', '*' ,'!','~','`','$','/','(',')'];
    
        // Function to validate input and alert if special characters are detected
        function validateInput(event) {
            const inputValue = event.target.value;
    
            // Check if any special character is found in the input
            for (let char of specialCharacters) {
                if (inputValue.includes(char)) {
                    alert("Special character detected!");
                    event.target.value = "";  // Clear the input value
                    break;  // Stop after the first special character is found
                }
            }
        }
    
        // Add event listener to all inputs
        for (let input of inputs) {
            input.addEventListener('input', validateInput);
        }
    </script>

    <?php include "footer.php"; ?>