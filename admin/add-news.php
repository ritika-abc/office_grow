<style>
    .editor1, .editor2 {
        width: 100%;
        height: 300px;
        border: 1px solid #ccc;
        padding: 10px;
        overflow-y: auto;
        font-family: Arial, sans-serif;
        line-height: 1.5;
        background-color: #f9f9f9;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .toolbar1, .toolbar2 {
        margin-bottom: 10px;
    }

    .toolbar1 button, .toolbar2 button {
        padding: 8px 12px;
        font-size: 14px;
        background-color: #f0f0f0;
        border: 1px solid #ccc;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.2s, border-color 0.2s;
        margin-right: 4px;
    }

    .toolbar1 button:hover, .toolbar2 button:hover {
        background-color: #ddd;
        border-color: #aaa;
    }

    .toolbar1 button:active, .toolbar2 button:active {
        background-color: #ccc;
        border-color: #888;
    }

    .toolbar1 button:focus, .toolbar2 button:focus {
        outline: none;
        box-shadow: 0 0 5px rgba(0, 0, 255, 0.2);
    }

    .output-textarea1, .output-textarea2 {
        width: 100%;
        height: 200px;
        margin-top: 10px;
        padding: 10px;
        border: 1px solid #ccc;
        font-family: Arial, sans-serif;
        font-size: 14px;
        white-space: pre-wrap;
        background-color: #fff;
    }
</style>


<?php
//  isert and check the details

include "config.php";
include_once "include/header.php";



?>
<?php

function i($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $heading = i($_POST['heading']);
    $short_para = $_POST['short_para'];
    $long_para = $_POST['long_para'];
    $about_image = i($_POST['about_image']);
     // image
    //  $_FILES is a super global variable which can be used to upload files
    $image = time()."-".$_FILES["image"]["name"];
    $fld1 = "news/" . $image;
    // $fld2 = "upload/" . $image;
    move_uploaded_file($_FILES["image"]['tmp_name'], $fld1);
    
    
      $stmt = $con->prepare("INSERT INTO  news ( heading ,  short_para , long_para , image , about_image) value (? , ?,  ?,  ? , ?)");
    $stmt->bind_param('sssss',  $heading  ,  $short_para ,  $long_para ,    $fld1 , $about_image);

    $stmt->execute();
    
    // Close the statement and connection
    $stmt->close();
    
    
        // $ins = "INSERT INTO `news`(`heading`,`short_para`,`long_para`,`about_image`,`image`) VALUES ('$heading','$short_para','$long_para','$about_image','$fld1') ";
        // $qu = mysqli_query($con, $ins);
        
}

?>


<!-- new data -->
<div class="right_col" role="main">
    <div class="container mt-5">
        <div class="row  justify-content-center">
            <div class="col-7">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data" method="post">
                    <div class="my-3">
                        <label for="">Heading</label>
                        <input type="text" name="heading" class="form-control  "  >
                    </div>
                    <div class="my-3">
                        <label for="">Image</label>
                        <input type="file" name="image" class="form-control  "  >
                    </div>
                    <div class="my-3">
                        <label for="">About Image </label>
                        <input type="text" name="about_image" class="form-control  " >
                    </div>
                    <div class="my-3 d-none">
                        <label for="">Short Content </label>
                        <textarea name="short_para" class="w-100" id="" ></textarea>
                    </div>
                    <div class="my-3">
                        <label for="">Long para </label>
                        <textarea name="long_para" row="50" class="w-100" id=""></textarea>
                    </div>
                    
                    <button class="btn btn-success mt-2 px-3" name="submit" type="submit">Submit</button>
                    <button class="btn btn-success mt-2 px-3" type="reset">Reset</button>
                </form>
            </div>
            <table class="table table-bordered table-white   my-5">
                <thead>
                <tr>
                  <th>S no</th>
                  <th>Image</th>
                  <th>Heading</th>
                  <th>Short Data</th>
                  <th>Long Data</th>
                  <th>About Image</th>
                  <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                    <?php 
                    include "config.php";
                     $sno = 1;
                    $sel= "SELECT * from `news` ORDER BY id DESC";
                    $q = mysqli_query($con,$sel);
                   
                    while($row=mysqli_fetch_array($q)){
                    ?>
                <tr>
                  <td><?php echo  $sno ?></td>
                  <td><a href="<?php echo $row['image'] ?>"> <img src="<?php echo $row['image'] ?>" height="100px" width="100px"> </a></td>
                
                  <td><?php echo $row['heading'] ?></td>
                  <td><?php echo $row['short_para'] ?></td>
                  <td><textarea  style="height:100px"><?php echo $row['long_para'] ?></textarea></td>
                  <td><?php echo $row['about_image'] ?></td>
                  <td>edit</td>
                  <td><a href="update-news.php?id=<?php echo $row['id']  ?>" class="btn btn-sm btn-success">Edit</a> <a href="delete-news.php?id=<?php echo $row['id']  ?>" class="btn btn-sm btn-danger">Delete</a></td>
                </tr>
                <?php $sno++ ;  } ?>
                </tbody>
              </table>
          </div>
    </div>
 </div>




<!-- /page content -->
<?php
include_once "include/footer.php";
?>