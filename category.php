
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

<?php
                                                include "config.php";
                                                $cat_id = $_GET['cat_id'];
                                                $select = "SELECT * from `category` where `cat_id`='$cat_id'";
                                                $qu = mysqli_query($con, $select);
                                                $s_no = 1;
                                                while ($row = mysqli_fetch_array($qu)) {
                                                              $cat_id1 = $row['cat_id'];
                                                               $_SESSION['seo_status'] = $row['seo_status']; // Save to session
                                                                  $_SESSION['seo_content'] = $row['seo_content']; // Optional: Save content too
                                                                $cat_name = $row['cat_name'];
                                                                $seo_status = $row['seo_status'];
                                                                $seo_content = $row['seo_content'];
                                                                $slug1 = slugify($cat_name);
                                                ?>
                                                       

                                                <?php } ?>


<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
 <link rel="icon" type="image/x-icon" href="https://growindiaexport.com/image/favicon.png">
    <link rel="mask-icon" href="https://growindiaexport.com/image/favicon.png">
    
      <title><?php echo str_replace("-"," " , $slug1) ; ?> | growindiaexport</title>
        <link rel="canonical" href="https://growindiaexport.com/supplier-in-india/<?php echo $cat_id1 . '-' . $slug1 ?>">
        
        <!-- seo must ceck table-->
        
        <?php
        if($seo_status == "0"){
            echo $seo_content ;
        }
        
        ?>
        
        <!-- seo must ceck table-->
        
        
        
        
        
        
        


        <link rel="stylesheet" href="https://growindiaexport.com/assets/css/megadrop.css">
        <link rel="stylesheet" href="https://growindiaexport.com/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://growindiaexport.com/assets/css/style.css">
        <link rel="stylesheet" href="https://growindiaexport.com/assets/vendor/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="https://growindiaexport.com/assets/vendor/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
        <script src="https://growindiaexport.com/assets/vendor/OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js"></script>
        <script src="https://growindiaexport.com/assets/vendor/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>

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
   <?php include "navbar.php"; ?>
    <div class="container-fluid my-2">
                <div class="row">
                        <div class="col-12">
                                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                                <li class="breadcrumb-item"><a href="https://growindiaexport.com/all-category.php">Browes Category</a></li>

                                                <!--  -->
                                                <?php
                                                include "config.php";
                                                $cat_id = $_GET['cat_id'];
                                                $select = "SELECT * from `category` where `cat_id`='$cat_id'";
                                                $qu = mysqli_query($con, $select);
                                                $s_no = 1;
                                                while ($row = mysqli_fetch_array($qu)) {
                                                        //      $sub_id = $row['sub_id']; 
                                                ?>
                                                        <li class="breadcrumb-item"><a href="#"><?php echo $row['cat_name'] ?></a></li>

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


<div class="container-fluid">
    <div class="row">
        <?php
        include "config.php";
        $cat_id = $_GET['cat_id'];
        $select = "SELECT * from `sub_cat` where `cat_id`='$cat_id' ";
        $qu = mysqli_query($con, $select);
        $s_no = 1;
        while ($row = mysqli_fetch_array($qu)) {
            $sub_id = $row['sub_id'];

        ?>
            <div class="col-12 col-md-12 col-lg-4">
                <div class="card p-3 mt-4">
                    <div class="d-flex align-items-center ">
                        <img src="https://growindiaexport.com/admin/<?php echo $row['sub_cat_image'] ?>"  class="rounded border border-2 border-dark" height="100px" style="object-fit:cover" width="100px" alt="">
                        <div class="cat_container w-75   mx-1  " style="text-align:  ;">
                            <div class="mx-3  ">
                                <p class="text-center m-0"><?php echo $row['sub_cat_name'] ?></p>
                            </div>
                        </div>
                    </div>
                     <ul class="p-0 m-0 mt-2">
                                <div class="accordion " id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne<?php echo $s_no ?>" aria-expanded="true" aria-controls="collapseOne">
                                           Products List
                                            </button>
                                        </h2>
                                        <div id="collapseOne<?php echo $s_no ?>" class="accordion-collapse collapse   w-100 p-2" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <?php
                                                include "config.php";
                                                $select1 = "SELECT * from `micro` where `sub_id`='$sub_id' limit 5";
                                                $qu1 = mysqli_query($con, $select1);
                                                
                                                while ($row1 = mysqli_fetch_array($qu1)) {
                                                    $micro_id = $row1['micro_id'];
                                                    $micro_name = $row1['micro_name'];
                                                ?>

                                                    <li class="mt-1"><a href="https://growindiaexport.com/manufacturer/<?php echo $row1['micro_id'] . "-".strtolower(str_replace(" ", "-", $micro_name)) ?>" class="text-decoration-none"><?php echo $row1['micro_name'] ?></li>


                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </ul>
                            <div class="text-end mt-2 " style="visibility: hidden;">
                                <a href="#" class="btn btn-sm btn-danger  w-100 py-2" style="color: white !important;"></a>
                            </div>
                </div>
            </div>
        <?php $s_no++;
        } ?>
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
<?php include "footer.php"; ?>