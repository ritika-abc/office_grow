  
  <h6 class="mt-2">Trending Products</h6>
   <?php
                                include "config.php";
                                $sel = "SELECT * FROM `product`  limit 20";
                                $q = mysqli_query($con, $sel);
                                while ($row = mysqli_fetch_array($q)) {
                                ?>
                                        <a href="https://growindiaexport.com/search-product.php?searchType=product&query=<?php echo $row['product_name'] ?>" class="btn text-capitalize btn-light bg-outline-light border m-1 btn-sm"><?php echo $row['product_name'] ?></a>



 <?php } ?>