<?php
ob_start();
include_once "include/header.php";
include "config.php";

// Fetch existing news record
$id = $_GET['id'] ?? '';
$id = mysqli_real_escape_string($con, $id);

$sql = "SELECT * FROM `news` WHERE `id`='$id'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($query);

if (!$row) {
    die('Record not found');
}

$heading = $row['heading'];
$short_para = $row['short_para'];
$long_para = $row['long_para'];
$about_image = $row['about_image'];
$image = $row['image'];

if (isset($_POST['submit'])) {
    $heading = mysqli_real_escape_string($con, $_POST['heading']);
    $short_para = mysqli_real_escape_string($con, $_POST['short_para']);
    $long_para = mysqli_real_escape_string($con, $_POST['long_para']);
    $about_image = mysqli_real_escape_string($con, $_POST['about_image']);

    $new_image_path = $image; // Default to the old image path

    if (!empty($_FILES['image']['name'])) {
        $image = $_FILES["image"]["name"];
        $new_image_path = "news/" . $image;
        move_uploaded_file($_FILES["image"]['tmp_name'], $new_image_path);
    }

    $sql1 = "UPDATE `news` SET 
        `heading`='$heading',
        `short_para`='$short_para',
        `long_para`='$long_para',
        `about_image`='$about_image',
        `image`='$new_image_path' 
        WHERE `id`='$id'";

    $query1 = mysqli_query($con, $sql1);

    if ($query1) {
        header("Location: https://growindiaexport.com/admin/add-news.php");
        exit;
    } else {
        die("Update failed: " . mysqli_error($con));
    }
}
?>
<!-- page content -->
<div class="right_col text-capitalize bg-white" role="main">
    <!-- top tiles -->
    <h3 class="my-3">Please update news information</h3>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-12 col-md-12 my-3 text-capitalize">
                        <label for="heading">Heading</label>
                        <input type="text" name="heading" value="<?php echo htmlspecialchars($heading); ?>" class="form-control mt-1">
                    </div>
                    <div class="col-12 col-md-12 my-3 text-capitalize">
                        <label for="heading">about_image</label>
                        <input type="text" name="about_image" value="<?php echo htmlspecialchars($about_image); ?>" class="form-control mt-1">
                    </div>
                    <div class="col-12 col-md-12 my-3 text-capitalize">
                        <label for="short_para">Short Paragraph</label>
                        <textarea name="short_para" class="form-control mt-1" style="height:100px"><?php echo htmlspecialchars($short_para); ?></textarea>
                    </div>
                    <div class="col-12 col-md-12 my-3 text-capitalize">
                        <label for="long_para">Long Paragraph</label>
                        <textarea name="long_para" class="form-control mt-1" style="height:100px"><?php echo htmlspecialchars($long_para); ?></textarea>
                    </div>
                    <div class="col-12 col-md-12 my-3 text-capitalize">
                        <div>
                            <img src="<?php echo htmlspecialchars($image); ?>" height="auto" width="100%" alt="image"><br>
                        </div>
                        <input type="file" name="image" class="form-control mt-1">
                    </div>
                </div>
            </div>
        </div>
        <input type="submit" class="btn btn-success mt-4" name="submit" value="Update">
    </form>
</div>
<br />
<?php
include_once "include/footer.php";
ob_end_flush();
?>
