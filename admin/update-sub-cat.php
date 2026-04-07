<?php
   include "config.php";

    $sub_id = $_GET['sub_id'];

    $sql = "SELECT* FROM `sub_cat` WHERE `sub_id`='$sub_id'";
    $query = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($query)) {
        # to select all the data
        $sub_cat_name = $row['sub_cat_name'];
      
        $sub_cat_image = $row['sub_cat_image'];
    }

    ?>
  <?php

//  update
 
if (isset($_POST['submit'])) {

    $sub_id = $_GET['sub_id'];

    $sub_cat_name = $_POST['sub_cat_name'];
    

// image
//  $_FILES is a super global variable which can be used to upload files
$sub_cat_image = $_FILES["sub_cat_image"]["name"];
$fld1 = "extra_image/" . $sub_cat_image;
// $fld2 = "upload/" . $image;
move_uploaded_file($_FILES["sub_cat_image"]['tmp_name'], $fld1);

 if($sub_cat_image == ""){
    $sql1 = "UPDATE `sub_cat` SET `sub_cat_name`='$sub_cat_name'  WHERE `sub_id`='$sub_id'";
        $query1 = mysqli_query($con, $sql1) or die( "dgdgdfgdfg");
        // The die() function prints a message and exits the current script
        if ($query) {
            header("location:add-sub-cat.php");
        }
 }else{
    $sql1 = "UPDATE `sub_cat` SET `sub_cat_name`='$sub_cat_name',`sub_cat_image`='$fld1' WHERE `sub_id`='$sub_id'";
        $query1 = mysqli_query($con, $sql1) or die( "dgdgdfgdfg");
        // The die() function prints a message and exits the current script
        if ($query) {
            header("location:add-sub-cat.php");
        }
 }
}
?>


<?php


include_once "include/header.php";

?>


<!-- new data -->
<div class="right_col" role="main">
    <div class="container mt-5">
        <div class="row  justify-content-center">
            <div class="col-8 shadow-sm p-3 mb-5 ">
                <form action="" enctype="multipart/form-data" method="post">
                    <div class="row my-3">
                        <div class="col-4 "><label for="">Sub Category Name</label></div>
                        <div class="col-8 ">
                            <input type="text" name="sub_cat_name" class="form-control  " value="<?php echo $sub_cat_name ?>" placeholder="Add Sub Category... ">
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-4 "><label for="">Sub Category Image</label></div>
                        <div class="col-8 ">
                            <input type="file" name="sub_cat_image"  value="<?php echo $sub_cat_image ?>"  class="form-control  " >
                        </div>
                    </div>
                    <div class="row my-3 " title="click the image">
                        <div class="col-4 "><label for="">Sub Category Image </label></div>
                        <div class="col-8 ">
                         <img src="<?php echo $sub_cat_image ?>" height="auto" width="30%" alt="no image"  > 
                        </div>
                    </div>
                    <button class="btn btn-success mt-2 px-3" name="submit" type="submit">Submit</button>
                     
                </form>
            </div>
        </div>
    </div>
    
</div>




<!-- /page content -->
<?php
include_once "include/footer.php";
?>