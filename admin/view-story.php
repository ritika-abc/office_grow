<?php
 
include_once "include/header.php";



?>
 <style>
     .float-end{
         float: right !important;
     }
 </style>

<div class="right_col" role="main">
    <div class="container mt-5">
        <a href="https://growindiaexport.com/admin/add-story.php" class="btn btn-success text-white">Add Story</a>
        <div class="row   ">
            <div class="col-lg-6">
                <?php
                include("config.php");

                $sql = "SELECT * FROM `stories` ORDER BY `id` DESC";
                $result = $con->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $images = json_decode($row['images'], true); // decode JSON to PHP array
                        $s = 1;
                        foreach ($images as $item) {
                            echo '<div class="border p-2 my-3 rounded shasow-lg">';
                                 echo '<a href="delete-story.php?id='.$row['id'] .'" class="btn float-end text-white btn-danger btn-sm"> Delete 🗑️' . ' </a>';
                            echo '<img src="' . $item['image'] . '" style="width:200px"><br>';
                            echo '<p class="my-3 h6 text-capitalize" style="color:black">  👉 ' . htmlspecialchars($item['caption']) . ' </p>';
                       
                            echo '</div>';

                            if ($s == 1) {
                                break;
                            }
                            $s++;
                        }
                    }
                } else {
                    echo "No stories found.";
                }

                $con->close();
                ?>
            </div>
        </div>
    </div>
</div>
 
<?php
include_once "include/footer.php";
?>