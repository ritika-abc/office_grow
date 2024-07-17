<?php
include "config.php"; // filter  country

// Check if POST data exists and sanitize it
if(isset($_POST['selectedOption'])) {
    $selectedOption = mysqli_real_escape_string($con, $_POST['selectedOption']);

    // Query to fetch buyleads based on selectedOption
    $sel = "SELECT * FROM `buyleads` WHERE 	 country = '$selectedOption' or `state` = '$selectedOption'";
    $q = mysqli_query($con, $sel);

    // Check if there are results
    if(mysqli_num_rows($q) > 0) {
        // Loop through results and generate HTML for each buylead
        while($row = mysqli_fetch_array($q)) {
            echo '<div class="buyleads_cards p-3 shadow-lg  bg-white my-3 rounded text-capitalize">';
            echo '<h5 style="color :#2f3394;font-weight: bold;"  class=" text-capitalize">' . htmlspecialchars($row['queiry_for']) .' <i>' . $selectedOption . '</i> <i class="fa-solid fa-check"></i></h5>';
            echo '<ul class="nav justify-content-between">';
            echo '<li class="nav-item">' . htmlspecialchars($row['buyer_name']) . '</li>';
            echo '<li class="nav-item">' . htmlspecialchars($row['quantity']) . '</li>';
            echo '</ul>';
            echo '<div class="row mt-3 table-borderless">';
            echo '<div class="col-lg-6">';
            echo '<table class="table p-0 m-0 table-borderless">';
            echo '<tr><th>Buyer Name</th><td>: ' . htmlspecialchars($row['buyer_name']) . '</td></tr>';
            echo '<tr><th>Quantity</th><td>: ' . htmlspecialchars($row['quantity']) . '</td></tr>';
            echo '<tr><th>Mobile Number</th><td>: *******498 '  .'</td></tr>';
            echo '</table></div>';
            echo '<div class="col-lg-6">';
            echo '<table class="table p-0 m-0 table-borderless">';
            echo '<tr><th>Requirement</th><td>: ' . htmlspecialchars($row['queiry_for']) . '</td></tr>';
            echo '<tr><th>Email</th><td>:  *****@gmail.com' .  '</td></tr>';
            
            echo '</table></div></div>';
            echo '<div class="d-block mt-5 mb-3" style="border-top: 2px dotted gray;"></div>';
            echo '<a href="supplier-register.php" class="btn btn-secondary text-center" style="width:200px;"  >Send Requirement</a>';
            echo '</div>';
        }
    } else {
        echo '<p>No buy leads found for ' . htmlspecialchars($selectedOption) . '</p>';
    }
} else {
    echo '<p>Error: No option selected</p>';
}
?>

<img src="./register-user/" alt="">