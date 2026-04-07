 <!-- all-buyleads -->
 
 
 
 <div class="btn-group">
 <?php echo ($status == '1') ? ' <a href="trending-buyleads.php" class="btn btn-info">  Trending   Buyleads</a> ' : '<a href="trending-not-active-buyleads.php" class="btn btn-info"> Trending       Buyleads</a> '; ?>
     <!-- <a href="../register-user/view-buyleads.php" class="btn btn-info">Show Buyleads</a> -->
     <a href="../register-user/show-buyleads.php" class="btn btn-info">Access Buyleads</a>
     <a href="../register-user/refund-buylead.php" class="btn btn-info">Refund Buylead</a>
     <div class="btn-info">
         <div class="dropdown dropleft">
             <button type="button" class="btn btn-info  dropdown-toggle" data-toggle="dropdown">Manage Products</button>
             <div class="dropdown-menu">
                 <a class="dropdown-item" href="../register-user/add-product.php">Add Products</a>
                 <a class="dropdown-item" href="../register-user/view-product.php">View Products</a>
                
             </div>
         </div>
     </div>
 </div>


 <!-- <div class="dropdown_section">
     <div class="dropdown dropleft">
         <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Dropright button</button>
         <div class="dropdown-menu">
             <a class="dropdown-item" href="#">Dropdown link</a>
             <a class="dropdown-item" href="#">Dropdown link</a>
             <a class="dropdown-item" href="#">Dropdown link</a>
         </div>
     </div>
 </div> -->