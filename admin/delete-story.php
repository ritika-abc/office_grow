<?php
include "config.php";

$id = $_GET['id'];

// Step 1: Fetch the story data first
$get_story = "SELECT `images` FROM `stories` WHERE `id` = '$id'";
$result = mysqli_query($con, $get_story);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $images_json = $row['images'];

    // Step 2: Decode the JSON to get image file paths
    $images = json_decode($images_json, true);

    if (!empty($images)) {
        foreach ($images as $img) {
            $file_path = $img['image'];

            // Step 3: Delete the image file if it exists
            if (file_exists($file_path)) {
                unlink($file_path);
            }
        }
    }

    // Step 4: Delete the record from the database
    $del = "DELETE FROM `stories` WHERE `id` = '$id'";
    $query = mysqli_query($con, $del);

    if ($query) {
        header("Location: https://growindiaexport.com/admin/view-story.php");
        exit();
    } else {
        echo "Failed to delete story from database.";
    }
} else {
    echo "Story not found.";
}
?>
