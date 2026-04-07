
<?php
include "config.php";

$user_email =  $_SESSION["user_email"];

$sel = "SELECT * FROM `user` where `user_email`='$user_email'";
$q = mysqli_query($con, $sel);
while ($row = mysqli_fetch_array($q)) {


?>

<div class="container-fluid mt-4 border bg-light task_list_view2">
    <div class="list_cont bg- ">
        <h5>Personal Information</h5>
    </div>
    <div class="row">
        <div class="col-lg-6 my-3  ">
            <div class="">
                <label for="" class=" text-danger">User Name</label>
                <input type="text" value="<?php echo $row["user_name"] ?>" class="form-control" disabled placeholder="User Name">
            </div>
        </div>
        <div class="col-lg-6 my-3 ">
            <div class="">
                <label for="" class=" text-danger">User Email</label>
                <input type="text" value="<?php echo $row["user_email"] ?>" class="form-control" val disabled placeholder="User Email">
            </div>
        </div>
    </div>
    <div class="row ">
        <div class="col-lg-6 my-3  ">
            <div class="">
                <label for="" class=" text-danger">Number</label>
                <input type="text" value="<?php echo $row["user_phone"] ?>" class="form-control" disabled placeholder="User Name">
            </div>
        </div>
        <div class="col-lg-6 my-3 ">
            <div class="">
                <label for="" class=" text-danger">Your Plan</label>
                <input type="text" value="<?php echo $row["plan"] ?>" class="form-control" val disabled placeholder="User plan">
            </div>
        </div>
    </div>
    <div class="row ">
        <div class="col-lg-6 my-3  ">
            <div class="">
                <label for="" class=" text-danger">Your Plan expire</label>
                <input type="text" value="<?php echo $row["expire"] ?>" class="form-control" disabled placeholder="User Name">
            </div>
        </div>
        <div class="col-lg-6 my-3 ">
            <div class="">
                <label for="" class=" text-danger">Register Date</label>
                <input type="text" class="form-control" value="<?php echo $row["date"] ?>" disabled placeholder="User Email">
            </div>
        </div>
    </div>
</div>
<?php
}

?>