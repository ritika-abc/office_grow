<?php
ob_start();
include_once "include/header.php";
include "config.php";

$user_id = $_GET['user_id'];

// Fetch current user details
$sql = "SELECT * FROM `user` WHERE `user_id`=?";
$stmt = $con->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

if ($row) {
    // Store user details in variables
    $user_name = $row['user_name'];
    $user_email = $row['user_email'];
    $user_phone = $row['user_phone'];
    $company_name = $row['company_name'];
    $plan = $row['plan'];
    $status = $row['status'];
    $expire = $row['expire'];
    $company_address = $row['company_address'];
    $state = $row['state'];
    $city = $row['city'];
    $gst = $row['gst'];
    $image = $row['image'];
    $start_date = $row['start_date'];
    $cat_access = $row['cat_access'];
    $password = $row['password']; // Old password, in case we don't want to change it
    $user_type = $row['user_type'];
}

// Update user details if the form is submitted
if (isset($_POST['submit'])) {
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_phone = $_POST['user_phone'];
    $company_name = $_POST['company_name'];
    $plan = $_POST['plan'];
    $status = $_POST['status'];
    $expire = $_POST['expire'];
    $company_address = $_POST['company_address'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $gst = $_POST['gst'];
    $start_date = $_POST['start_date'];
    $cat_access = $_POST['cat_access'];
    $user_type = $_POST['user_type'];
    $password = $_POST['password'];
 
    // Handle file upload (image)
    if ($_FILES["image"]["name"]) {
        $image = $_FILES["image"]["name"];
        $target_dir = "logo/";
        $target_file = $target_dir . basename($image);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if the file is an image
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check === false) {
            die("Error: File is not an image.");
        }

        // Move the uploaded file to the target directory
        if (!move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            die("Error: There was an issue uploading the file.");
        }
    } else {
        // If no new image, retain the old image
        $target_file = $image;
    }

    // Prepare the SQL query to update the user details
    $sql_update = "UPDATE `user` SET 
        `user_name` = ?, 
        `user_email` = ?, 
        `user_phone` = ?, 
        `company_name` = ?, 
        `plan` = ?, 
        `status` = ?, 
        `expire` = ?, 
        `company_address` = ?, 
        `state` = ?, 
        `city` = ?, 
        `gst` = ?, 
        `start_date` = ?, 
        `user_type` = ?, 
        `image` = ?, 
        `cat_access` = ?, 
        `password` = ? 
        WHERE `user_id` = ?";

    // Prepare the SQL statement
    $stmt_update = $con->prepare($sql_update);
    $stmt_update->bind_param(
        "ssssssssssssssssi", 
        $user_name, $user_email, $user_phone, $company_name, $plan, $status, 
        $expire, $company_address, $state, $city, $gst, $start_date, 
        $user_type, $target_file,$cat_access, $password, $user_id
    );

    if ($stmt_update->execute()) {
        header("Location: view-user.php");
        exit;
    } else {
        echo "Error updating record: " . $stmt_update->error;
    }
}
?>

<!-- Page content -->
<div class="right_col text-capitalize bg-white" role="main">
    <h3 class="my-3">Please Update User / Supplier Information</h3>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-12 col-md-4 my-3 text-capitalize">
                <label for="user_name">Name</label>
                <input type="text" name="user_name" value="<?php echo htmlspecialchars($user_name); ?>" class="form-control mt-1">
            </div>
            <div class="col-12 col-md-4 my-3 text-capitalize">
                <label for="user_email">User Email</label>
                <input type="email" name="user_email" value="<?php echo htmlspecialchars($user_email); ?>" class="form-control mt-1">
            </div>
            <div class="col-12 col-md-4 my-3 text-capitalize">
                <label for="user_phone">User Phone Number</label>
                <input type="text" name="user_phone" value="<?php echo htmlspecialchars($user_phone); ?>" class="form-control mt-1">
            </div>
            <div class="col-12 col-md-4 my-3 text-capitalize">
                <label for="company_name">Company Name</label>
                <input type="text" name="company_name" value="<?php echo htmlspecialchars($company_name); ?>" class="form-control mt-1">
            </div>
            <div class="col-12 col-md-4 my-3 text-capitalize">
                 <label for="company_name">Paid & Un-Paid </label>
                <select name="user_type" class="form-control">
                    <option value="Un-Paid" <?php if ($user_type == 'Un-Paid') echo "selected"; ?>>Un-Paid</option>
                    <option value="Paid" <?php if ($user_type == 'Paid') echo "selected"; ?>>Paid</option>
                </select>
            </div>
            <div class="col-12 col-md-4 my-3 text-capitalize">
                <label for="company_name">Catalogue Detail</label>
                <select name="cat_access" class="form-control">
                    <option value="0" <?php if ($cat_access == '0') echo "selected"; ?>>Catalogue is not Active </option>
                    <option value="1" <?php if ($cat_access == '1') echo "selected"; ?>>Catalogue is Active</option>
                </select>
            </div>
            <div class="col-12 col-md-4 my-3 text-capitalize">
                <label for="password">Password</label>
                <input type="text" name="password" value="<?php echo $row['password'] ?>" class="form-control mt-1" placeholder="Leave empty to keep current password">
            </div>
            <div class="col-12 col-md-4 my-3 text-capitalize">
                <label for="plan">Plan</label>
                <select name="plan" class="form-control mt-1">
                    <option value="not active" <?php if ($plan == 'not active') echo "selected"; ?>>Not Active</option>
                    <option value="prime-user" <?php if ($plan == 'prime-user') echo "selected"; ?>>Prime User</option>
                    <option value="star-user" <?php if ($plan == 'star-user') echo "selected"; ?>>Star User</option>
                    <option value="galaxy-user" <?php if ($plan == 'galaxy-user') echo "selected"; ?>>Galaxy User</option>
                  
                </select>
            </div>
            <div class="col-12 col-md-4 my-3 text-capitalize">
                <label for="status">Status</label>
                <select name="status" class="form-control">
                    <option value="1" <?php if ($status == '1') echo "selected"; ?>>Active</option>
                    <option value="0" <?php if ($status == '0') echo "selected"; ?>>Not Active</option>
                </select>
            </div>
            <div class="col-12 col-md-2 my-3 text-capitalize">
                <label for="start_date">Plan Start Date</label>
                <input type="date" name="start_date" value="<?php echo $start_date; ?>" class="form-control mt-1">
            </div>
            <div class="col-12 col-md-2 my-3 text-capitalize">
                <label for="expire">Plan Expire Date</label>
                <input type="date" name="expire" value="<?php echo $expire; ?>" class="form-control mt-1">
            </div>
            <div class="col-12 col-md-4 my-3 text-capitalize">
                <label for="company_address">Company Address</label>
                <input type="text" name="company_address" value="<?php echo $company_address; ?>" class="form-control mt-1">
            </div>
            <div class="col-12 col-md-4 my-3 text-capitalize">
                <label for="state">State</label>
                <input type="text" name="state" value="<?php echo $state; ?>" class="form-control mt-1">
            </div>
            <div class="col-12 col-md-4 my-3 text-capitalize">
                <label for="city">City</label>
                <input type="text" name="city" value="<?php echo $city; ?>" class="form-control mt-1">
            </div>
            <div class="col-12 col-md-4 my-3 text-capitalize">
                <label for="gst">GST</label>
                <input type="text" name="gst" value="<?php echo $gst; ?>" class="form-control mt-1">
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-6">
                <img src="<?php echo $image; ?>" height="auto" width="100%" class="my-2" alt=""> <br>
            </div>
            <div class="col-6">
                <label for="image">Logo Image</label><br>
                <input type="file" name="image" class="form-control">
            </div>
        </div>
        <input type="submit" class="btn btn-success mt-4" name="submit">
        <a class="btn btn-success mt-4" href="https://growindiaexport.com/admin/view-user.php">Go Back</a>
    </form>
</div>

<?php include_once "include/footer.php"; ?>
