<?php
include "config.php";
if (isset($_POST['submit'])) {

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $image_data = [];

    if (isset($_FILES['images']) && isset($_POST['captions'])) {

        $total_files = count($_FILES['images']['name']);
        $captions = $_POST['captions'];

        for ($i = 0; $i < $total_files; $i++) {
            $original_name = $_FILES['images']['name'][$i];
            $temp_name = $_FILES['images']['tmp_name'][$i];
            $caption = $captions[$i];

            // Add timestamp to filename
            $new_file_name = time() . '-' . basename($original_name);
            $target_path = 'story/' . $new_file_name;

            if ($original_name && move_uploaded_file($temp_name, $target_path)) {
                $image_data[] = [
                    "image" => $target_path,
                    "caption" => $caption
                ];
            }
        }

        if (!empty($image_data)) {
            $json_data = json_encode($image_data);
            $sql = "INSERT INTO `stories` (`images`) VALUES (?)";
            $stmt = $con->prepare($sql);
            $stmt->bind_param("s", $json_data);

            if ($stmt->execute()) {
                echo "Upload successful!";
                header("location:https://growindiaexport.com/admin/view-story.php");
                exit();
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "No valid images uploaded.";
        }

    } else {
        echo "Missing files or captions.";
    }

    $con->close();
}
?>
