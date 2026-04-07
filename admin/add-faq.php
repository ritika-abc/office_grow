<?php
//  isert and check the details

include "config.php";
include_once "include/header.php";



?>
<?php


if (isset($_POST['submit'])) {
    $qus = $_POST['qus'];
    $ans = $_POST['ans'];
    $type = $_POST['type'];
    
    
        $ins = "INSERT INTO `faq`(`qus`,`ans`,`type`) VALUES ('$qus','$ans','$type') ";
        $qu = mysqli_query($con, $ins);
        
}

?>


<!-- new data -->
<div class="right_col" role="main">
    <div class="container mt-5">
        <div class="row  justify-content-center">
            <div class="col-7">
                <form action="" enctype="multipart/form-data" method="post">
                    <div class="my-3">
                        <label for="">Question </label>
                        <!--<input type="text" name="qus" class="form-c ontrol  "  >-->
                        <textarea name="qus" class="form-control  " style="height:100px"></textarea>
                    </div>
                    <div class="my-3">
                        <label for="">Answer </label>
                        <!--<input type="text" name="ans" class="form-control  " >-->
                        <textarea name="ans" class="form-control  " style="height:100px"></textarea>
                    </div>
                     <label for="">Type </label>
                    <select name="type" class="form-control">
                        <option>----Select----</option>
                        <option value="0">Buyer</option>
                        <option value="1">Seller</option>
                    </select>
                    
                    <button class="btn btn-success mt-2 px-3" name="submit" type="submit">Submit</button>
                    <button class="btn btn-success mt-2 px-3" type="reset">Reset</button>
                </form>
            </div>
            <table class="table table-bordered table-white   my-5">
                <thead>
                <tr>
                  <th>S no</th>
                  <th>Question </th>
                  <th>Answer</th>
                  <th>Type</th>
                  <th>Edit</th>
                   
                </tr>
                </thead>
                <tbody>
                    <?php 
                    include "config.php";
                     $sno = 1;
                    $sel= "SELECT * from `faq` ORDER BY id DESC";
                    $q = mysqli_query($con,$sel);
                   
                    while($row=mysqli_fetch_array($q)){
                        $type = $row['type'];
                    ?>
                <tr>
                  <td><?php echo  $sno ?></td>
                   
                  <td><?php echo $row['qus'] ?></td>
                  <td><?php echo $row['ans'] ?></td>
                  <td><?php echo ($type == 1) ? 'Seller' : 'Buyer' ?></td>
                  
                  <td><a href="update-faq.php?id=<?php echo $row['id'] ?>" class="btn btn-sm  btn-success"><i class="fa-solid fa-pen-to-square"></i></a> <a href="delete-faq.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a></td>
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