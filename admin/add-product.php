<?php
// session_start();

// if (!isset($_SESSION["password"])) {
//     header("Location:index.php");
// }
?>
<?php


include_once "include/header.php";
include "config.php";

?>
<!-- insert query -->

<?php
if (isset($_POST['submit'])) {
    $product_name = $_POST['product_name'];
    
    // $product_image2 = $_POST['product_image2'];
    // $product_image3 = $_POST['product_image3'];
    $cat_id = $_POST['cat_id'];
    $sub_id = $_POST['sub_id'];
    $micro_id = $_POST['micro_id'];
    $inner_cat_id = $_POST['inner_cat_id'];
    $product_description = $_POST['product_description'];
    $price = $_POST['price'];
    $moq = $_POST['moq'];
    $feature = $_POST['feature'];
    $packaging_type = $_POST['packaging_type'];
    $product_life = $_POST['product_life'];
    $state_name = $_POST['state_name'];

    $company_name = $_POST['company_name'];
    $company_experience = $_POST['company_experience'];
    $iec = $_POST['iec'];
    $gst = $_POST['gst'];
    $website = $_POST['website'];
    $long_dec = $_POST['long_dec'];
    $client_name = $_POST['client_name'];
    // $company_logo = $_POST['company_logo'];
 


    $product_image1 = $_FILES["product_image1"]["name"];
    $fld1 = "extra_image/" . $product_image1;
    // $fld2 = "upload/" . $image;
    move_uploaded_file($_FILES["product_image1"]['tmp_name'], $fld1);

    $company_logo = $_FILES["company_logo"]["name"];
    $fld2 = "extra_image/" . $company_logo;
    // $fld2 = "upload/" . $image;
    move_uploaded_file($_FILES["company_logo"]['tmp_name'], $fld2);

    $insert="INSERT INTO `product`(`product_name`,`price`,`product_description`,`moq`, `packaging_type`, `product_life`, `feature`,  `cat_id`, `sub_id`,`micro_id`,`inner_cat_id`,`product_image1`,`state_name`,`company_name`,`company_experience`,`iec`,`gst`,`website`,`company_logo`,`long_dec`,`client_name`) VALUES ('$product_name','$price','$product_description','$moq','$product_life','$feature','$product_name','$cat_id','$sub_id','$micro_id','$inner_cat_id','$fld1','$state_name','$company_name','$company_experience','$iec','$gst','$website','$fld2','$long_dec','$client_name')";

    $query = mysqli_query($con,$insert);
    
}
?>








<style>
    input[type='file'] {
        opacity: 0
    }
</style>
<div class="right_col" role="main">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 bg-white p-4">
                <form action="" method="post" enctype="multipart/form-data" class="text-capitalize">
                    <h5>Add products</h5>
                    <div class="row">
                        <div class="col-12 col-lg-6 my-2">
                            <label for="" class=" ">product name</label>
                            <input type="text" name="product_name" class="form-control">
                        </div>
                        <div class="col-12 col-lg-6 my-2">
                            <label for=""> Product image (Min 1 Product image)</label>
                            <div class="row">
                                <div class="col-4">
                                    <div class="border">
                                        <input class="form-control" name="product_image1" type="file" id="formFile">
                                    </div>
                                </div>
                                <!-- <div class="col-4">
                                    <div class="border">
                                        <input class="form-control" name="product_image1" type="file" id="formFile">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="border">
                                        <input class="form-control" name="product_image1" type="file" id="formFile">
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 my-2 text-capitalize">
                            <label for=""> add Category</label>
                            <select name="cat_id" class="form-control" id="category-dropdown">
                                <option value="">------ Select Category -----</option>
                                <?php
                                $sel = "SELECT * FROM `category`";
                                $query = mysqli_query($con, $sel);
                                while ($row = mysqli_fetch_array($query)) {
                                    // $cat_id = $row['cat_id'];
                                ?>
                                    <option value="<?php echo $row['cat_id'] ?>" class="text-capitalize"> <?php echo $row['cat_name']  ?> </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-12 col-lg-6 my-2">
                            <label for=""> add Sub Category</label>
                            <select name="sub_id" class="form-control" id="sub-category-dropdown">
                                <option value="">------ Select Sub Category -----</option>
                                <?php
                                // $_SESSION['cat_id'] = $cat_id;

                                $sel = "SELECT * FROM `sub_cat` ";

                                $query = mysqli_query($con, $sel);
                                while ($row = mysqli_fetch_array($query)) {
                                ?>
                                    <option value="<?php echo $row['sub_id'] ?>" class="text-capitalize"><?php echo $row['sub_cat_name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-12 col-lg-6 my-2">
                            <label for="">add micro Category</label>
                            <select name="inner_cat_id" class="form-control" id="inner-category-dropdown">
                                <option value="">------ Select Inner Category -----</option>
                                <?php
                                $sel = "SELECT * FROM `inner_cat`";
                                $query = mysqli_query($con, $sel);
                                while ($row = mysqli_fetch_array($query)) {
                                ?>
                                    <option value="<?php echo $row['inner_cat_id'] ?>" class="text-capitalize"><?php echo $row['inner_cat_name'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-12 col-lg-6 my-2">
                            <label for="">add micro Category</label>
                            <select name="micro_id" class="form-control" id="micro-category-dropdown">
                                <option value="">------ Select Micro Category -----</option>
                                <?php
                                $sel = "SELECT * FROM `micro`";
                                $query = mysqli_query($con, $sel);
                                while ($row = mysqli_fetch_array($query)) {
                                ?>
                                    <option value="<?php echo $row['micro_id'] ?>" class="text-capitalize"><?php echo $row['micro_name'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-12 col-lg-6 my-2">
                            <label for="">add micro Category</label>
                            <select name="state_name" class="form-control" id="micro-category-dropdown">
                                <option value="">------   states  -----</option>
                                <?php
                                $sel = "SELECT * FROM `states`";
                                $query = mysqli_query($con, $sel);
                                while ($row = mysqli_fetch_array($query)) {
                                ?>
                                    <option value="<?php echo $row['state_name'] ?>" class="text-capitalize"><?php echo $row['state_name'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>

                        <div class="col-12">
                            <hr>
                        </div>
                        <h5 class="mt-3">Product Details</h5>
                        <div class="col-12 my-2">
                            <div class="row">
                                <div class="col-6">
                                    <label for="">Shrot Details in table (min 3)</label>
                                    <textarea name="product_description" rows="5" class="form-control" id=""><tr><th></th>  <td></td></tr></textarea>

                                </div>
                                <div class="col-6">
                                    <label for="">Product Details </label>
                                    <textarea name="long_dec" rows="5" class="form-control" id=""><tr><th></th>  <td></td></tr></textarea>

                                </div>
                            </div>
                        </div>
                        <!--<div class="col-12 col-md-2 my-2">-->
                        <!--    <label for="">Product Price </label>-->
                        <!--    <input class="form-control   " name="price" type="text" id="formFile">-->
                        <!--</div>-->
                        <!--<div class="col-12 col-md-2 my-2">-->
                        <!--    <label for="">Product moq</label>-->
                        <!--    <input class="form-control   " name="moq" type="text" id="formFile">-->
                        <!--</div>-->
                        <!--<div class="col-12 col-md-3 my-2">-->
                        <!--    <label for="">Product Feature</label>-->
                        <!--    <input class="form-control   " name="feature" type="text" id="formFile">-->
                        <!--</div>-->
                        <!--<div class="col-12 col-md-3 my-2">-->
                        <!--    <label for=""> packaging type</label>-->
                        <!--    <input class="form-control   " name="packaging_type" type="text" id="formFile">-->
                        <!--</div>-->
                        <!--<div class="col-12 col-md-2 my-2">-->
                        <!--    <label for="">Product life</label>-->
                        <!--    <input class="form-control   " name="product_life" type="text" id="formFile">-->
                        <!--</div>-->
                    </div>
                    <hr>
                    <div class="row my-4 border border-warning p-3 rounded">
                        <div class="col-12">
                            <h5>Company Details  </h5>
                            <div class="col-12 col-md-3 my-2">
                                <label for="">Company Name</label>
                                <input class="form-control   " name="company_name" type="text" id="formFile">
                            </div>
                            <div class="col-12 col-md-3 my-2">
                                <label for="">Client Name</label>
                                <input class="form-control   " name="client_name" type="text" id="formFile">
                            </div>
                            <div class="col-12 col-md-3 my-2">
                                <label for="">company Experience</label>
                                <input class="form-control   " name="company_experience" type="text" id="formFile">
                            </div>
                            <div class="col-12 col-md-3 my-2">
                                <label for="">IEC Code</label>
                                <div class="border">
                                    <input class="form-control   " name="iec" type="text" id="formFile">

                                </div>
                            </div>
                            <div class="col-12 col-md-3 my-2">
                                <label for="">GST Number</label>
                                <div class="border">
                                    <input class="form-control   " name="gst" type="text" id="formFile">

                                </div>
                            </div>
                             
                            <div class="col-12 col-md-3 my-2">
                                <label for="">website Link</label>
                                <div class="border">
                                    <input class="form-control" name="website" type="text" id="formFile">
                                </div>
                            </div>
                            <div class="col-12 col-md-3 my-2">
                                <label for="">Company Logo*</label>
                                <div class="border">
                                    <input class="form-control" name="company_logo" type="file" id="formFile">
                                </div>
                            </div>
                            
                          
                        </div>
                    </div>
                    <input type="submit" name="submit" class="btn btn-danger  w-25">
                    <input type="reset" name="submit" class="btn btn-warning   ">
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('#category-dropdown').on('change', function() {
            var cat_id = this.value;

            // alert(cat_id);

            $.ajax({
                url: "subcategory-by-category.php",
                type: "POST",
                data: {
                    cat_id: cat_id
                },
                cache: false,
                success: function(result) {
                    $("#sub-category-dropdown").html(result);
                    // alert(result);
                }
            });

        });
        // $('#sub-category-dropdown').on('change', function() {
        //     var sub_id = this.value;

        //     alert(sub_id);

        //     $.ajax({
        //         url: "subcategory-by-category.php",
        //         type: "POST",
        //         data: {
        //             sub_id: sub_id
        //         },
        //         cache: false,
        //         success: function(result) {
        //             $("#micro-category-dropdown").html(result);
        //             alert(result);
        //         }
        //     });

        // });
    });


    // $(document).ready(function() {
    //     $('#sub-category-dropdown').on('change', function() {
    //         var sub_id = this.value;

    //         // alert(sub_id);

    //         $.ajax({
    //             url: "subcategory-by-category.php",
    //             type: "POST",
    //             data: {
    //                 sub_id: sub_id
    //             },
    //             cache: false,
    //             success: function(result) {
    //                 $("#micro-category-dropdown").html(result);
    //                 // alert(result);
    //             }
    //         });

    //     });
    // });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function() {
    // Live search for Category dropdown
    $('#searchCategory').on('input', function() {
        var query = $(this).val();

        $.ajax({
            url: 'search_categories.php',
            type: 'POST',
            data: { query: query },
            success: function(response) {
                $('#category-dropdown').html(response);
            }
        });
    });

    // Live search for Sub Category dropdown
    $('#searchSubCategory').on('input', function() {
        var query = $(this).val();

        $.ajax({
            url: 'search_subcategories.php',
            type: 'POST',
            data: { query: query },
            success: function(response) {
                $('#sub-category-dropdown').html(response);
            }
        });
    });

    // Live search for Inner Category dropdown
    $('#searchInnerCategory').on('input', function() {
        var query = $(this).val();

        $.ajax({
            url: 'search_innercategories.php',
            type: 'POST',
            data: { query: query },
            success: function(response) {
                $('#inner-category-dropdown').html(response);
            }
        });
    });

    // Live search for Micro Category dropdown
    $('#searchMicroCategory').on('input', function() {
        var query = $(this).val();

        $.ajax({
            url: 'search_microcategories.php',
            type: 'POST',
            data: { query: query },
            success: function(response) {
                $('#micro-category-dropdown').html(response);
            }
        });
    });

    // Live search for State Name dropdown
    $('#searchStateName').on('input', function() {
        var query = $(this).val();

        $.ajax({
            url: 'search_states.php',
            type: 'POST',
            data: { query: query },
            success: function(response) {
                $('#state-name-dropdown').html(response);
            }
        });
    });
});
</script>
<!-- /page content -->
<?php
include_once "include/footer.php";
?>

<!-- <div class="container">
    <div class="row">
        <div class="col-12 col-lg-3">
            <img src="" height="auto" width="100%" alt="">
            <h3>abc</h3>
        </div>
        <div class="col-12 col-lg-3">
            <img src="" height="auto" width="100%" alt="">
            <h3>abc</h3>
        </div>
        <div class="col-12 col-lg-3">
            <img src="" height="auto" width="100%" alt="">
            <h3>abc</h3>
        </div>
    </div>
</div> -->