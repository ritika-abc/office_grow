<?php
   include "config.php";

    $id = $_GET['id'];

    $sql = "SELECT* FROM `faq` WHERE `id`='$id'";
    $query = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($query)) {
        # to select all the data
        $qus = $row['qus'];
        $ans = $row['ans'];
        $type= $row['type'];
    }

    ?>
  <?php

//  update
 
if (isset($_POST['submit'])) {

    $id = $_GET['id'];
    $qus = $_POST['qus'];
    $ans = $_POST['ans'];
    $type = $_POST['type'];
    

 
  
    $sql1 = "UPDATE `faq` SET `qus`='$qus',`ans`='$ans',`type`='$type' WHERE `id`='$id'";
        $query1 = mysqli_query($con, $sql1) or die( "dgdgdfgdfg");
        // The die() function prints a message and exits the current script
        if ($query) {
            header("location:https://growindiaexport.com/admin/add-faq.php");
        }
 
}
?>




 

<?php


include_once "include/header.php";

?>


<!-- new data -->
<div class="right_col" role="main">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4>Update FAQ</h4>
             <form action="" method="post" enctype="multipart/form-data">
                <label for="">Qus</label>
       <textarea class="form-control"   name="qus"><?php echo $qus  ?></textarea>
       <label for="" class="mt-4">Ans</label>
       <textarea  class="form-control "  name="ans"><?php echo $ans  ?></textarea>
    <label for="" class="mt-4">Type</label>
       <select name="type" class="form-control mt-1 ">
                    <option value="not-active">-----select----</option>
                   <option value="0" <?php if ($type == 0) echo 'selected'; ?>>Buyer</option>
                   <option value="1" <?php if ($type == 1) echo 'selected'; ?>>Seller</option>
                  
                  
                </select>
         <input type="submit" class="btn btn-danger" name="submit">

     </form>
            </div>
        </div>
    </div>
</div>




<!-- /page content -->
<?php
include_once "include/footer.php";
?>


 