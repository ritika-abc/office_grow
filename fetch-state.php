<?php
include "config.php"; // filter  country

// Check if POST data exists and sanitize it
if(isset($_POST['selectedOption'])) {
    $selectedOption = mysqli_real_escape_string($con, $_POST['selectedOption']);

    // Query to fetch buyleads based on selectedOption
    $sel = "SELECT * FROM `buyleads` WHERE 	 state = '$selectedOption'";
    $q = mysqli_query($con, $sel);

    // Check if there are results
    if(mysqli_num_rows($q) > 0) {
        // Loop through results and generate HTML for each buylead
        while($row = mysqli_fetch_array($q)) {
            echo '<div class="buyleads_cards p-3 shadow-lg bg-white rounded text-capitalize">';
            echo '<h5>Buy Lead <i class="fa-solid fa-check"></i></h5>';
            echo '<ul class="nav justify-content-between">';
            echo '<li class="nav-item">' . htmlspecialchars($row['buyer_name']) . '</li>';
            echo '<li class="nav-item">' . htmlspecialchars($row['quantity']) . '</li>';
            echo '</ul>';
            echo '<div class="row mt-3 table-borderless">';
            echo '<div class="col-lg-6">';
            echo '<table class="table p-0 m-0">';
            echo '<tr><th>Buyer Name</th><td>: ' . htmlspecialchars($row['buyer_name']) . '</td></tr>';
            echo '<tr><th>Quantity</th><td>: ' . htmlspecialchars($row['quantity']) . '</td></tr>';
            echo '<tr><th>Mobile Number</th><td>: ' . htmlspecialchars($row['mobile_number']) . '</td></tr>';
            echo '</table></div>';
            echo '<div class="col-lg-6">';
            echo '<table class="table p-0 m-0">';
            echo '<tr><th>Requirement</th><td>: ' . htmlspecialchars($row['requirement']) . '</td></tr>';
            echo '<tr><th>Buyer Email</th><td>: ' . htmlspecialchars($row['buyer_email']) . '</td></tr>';
            echo '</table></div></div>';
            echo '<div class="d-block mt-5 mb-3" style="border-top: 2px dotted gray;"></div>';
            echo '<button type="submit" class="btn btn-secondary text-center" style="width:200px;" name="submit">Send Requirement</button>';
            echo '</div>';
        }
    } else {
        echo '<p>No buy leads found for ' . htmlspecialchars($selectedOption) . '</p>';
    }
} else {
    echo '<p>Error: No option selected</p>';
}
?>
