<?php
if (isset($_POST['search'])) {
    // Retrieve the search query
    $search_query = $_POST["search_query"];

    // Connect to your database (replace these variables with your actual database credentials)
    include "config.php";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>growindiaexport</title>
 <link rel="icon" type="image/x-icon" href="image/favicon.png">
    <link rel="mask-icon" href="image/favicon.png">
<link rel="canonical" href="https://growindiaexport.com/buyer-faq.php">

    <link rel="stylesheet" href="https://growindiaexport.com/assets/css/megadrop.css">
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://growindiaexport.com/assets/css/style.css">
    <link rel="stylesheet" href="https://growindiaexport.com/assets/vendor/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://growindiaexport.com/assets/vendor/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
    <script src="https://growindiaexport.com/assets/vendor/OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js"></script>
    <script src="https://growindiaexport.com/assets/vendor/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="fontawesome-free-6.5.2-web/css/all.min.css">
    <style>
        .about-us-content p {
            color: #333;
            text-align: justify;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <?php include "navbar.php"; ?>
    <div class="container my-5">
        <div class="row">
            <h2>Buyer's FAQ </h2>
            <div class="col-lg-12 my-3">

                <div class="faq_part  ">
                    <div class="accordion" id="accordionExample">
                        <?php
                        include "config.php";

                        $sel = "SELECT * FROM `faq` where `type`='0'";
                        $q = mysqli_query($con, $sel);
                        $sno  = 1;
                        while ($row = mysqli_fetch_array($q)) {

                        ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" style="background-color: #8080800d;" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $sno ?>">
                                        <b class="text-capitalize"><?php echo $sno ?>. <?php echo $row['qus'] ?></b>
                                    </button>
                                </h2>
                                <div id="collapse<?php echo $sno ?>" class="accordion-collapse collapse <?php echo ($sno == 1) ? 'show' : ''; ?>" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p><?php echo $row['ans'] ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php $sno++;
                        } ?>
                    </div>
                </div>

            </div>

        </div>
    </div>


    <?php include "footer.php"; ?>