<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <link rel="stylesheet" href="https://growindiaexport.com/assets/css/megadrop.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://growindiaexport.com/assets/css/style.css">
        <link rel="stylesheet" href="https://growindiaexport.com/assets/vendor/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="https://growindiaexport.com/assets/vendor/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
        <script src="https://growindiaexport.com/assets/vendor/OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js"></script>
        <script src="https://growindiaexport.com/assets/vendor/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>

        <style>
                body {
                      background-color: #e4e4e46e !important;
                        font-family: "Roboto", sans-serif;
                }
                 a{
                    text-decoration:none !important;
                }
                

        </style>
</head>

<body>

     <!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <link rel="stylesheet" href="https://growindiaexport.com/assets/css/megadrop.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!--<link rel="stylesheet" href="assets/css/bootstrap.min.css">-->
        <link rel="stylesheet" href="https://growindiaexport.com/assets/css/style.css">
        <link rel="stylesheet" href="https://growindiaexport.com/assets/vendor/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="https://growindiaexport.com/assets/vendor/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
        <script src="https://growindiaexport.com/assets/vendor/OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js"></script>
        <script src="https://growindiaexport.com/assets/vendor/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>

        <style>
                body {
                        background-color: #fdfdfd !important;
                        font-family: "Roboto", sans-serif;
                }
                 a{
                    text-decoration:none !important;
                }
                
.item_cat{
    height: 200px;
    align-items: center;
    display: flex;
 aspect-ratio: 0 / 1;
     justify-content: center;
}

.form_bg{
    background:#2e508a;
}
        </style>
</head>

<body>

     <?php include "navbar.php"; ?>
  <div class="container mt-5">
        <div class="row">
            <!-- style="background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);"-->
           
            <div class="col-12 p-3 rounded py-4 form_bg" >
             
                <h4 class="text-white py-5">POST YOUR BUY REQUIREMENT</h4>
            
            <form action="" method="post">
                    <div class="row  text-capitalize">
                        <div class="col-12 col-md-6 col-lg-4 my-3 ">
                            <label for="" class="text-white mb-2 fw-bold fs-6">Buyer Name</label>
                            <input type="text" require name="name" class="form-control q">
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 my-3">
                            <label for="" class="text-white mb-2 fw-bold fs-6">Buyer Number</label>
                            <input type="number" require name="number" class="form-control">
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 my-3">
                            <label for="" class="text-white mb-2 fw-bold fs-6">Buyer email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 my-3">
                            <label for="" class="text-white mb-2 fw-bold fs-6">Product Name</label>
                            <input type="text" name="pro_name" class="form-control q">
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 my-3">
                            <label for="" class="text-white mb-2 fw-bold fs-6">Product QTY</label>
                            <input type="text" name="qty" class="form-control q">
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 my-3">
                            <label for="" class="text-white mb-2 fw-bold fs-6">Product Unit</label>
                            <input type="text" name="unit" class="form-control q">
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 my-3">
                            <label for="" class="text-white mb-2 fw-bold fs-6">City</label>
                            <input type="text" name="city" class="form-control q">
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 my-3">
                            <label for="" class="text-white mb-2 fw-bold fs-6">state Name</label>
                            <input type="text" name="state" class="form-control q">
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 my-3">
                            <label for="" class="text-white mb-2 fw-bold fs-6">country Name</label>
                            <input type="text" name="country" class="form-control q">
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 my-3">
                            <label for="" class="text-white mb-2 fw-bold fs-6">Zip code / pin code</label>
                            <input type="number" name="pin_code" class="form-control q">
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 my-3">
                            <label for="" class="text-white mb-2 fw-bold fs-6">Product Type</label>
                            <select name="product_type" class="form-control" id="">
                                <option value=""> ----select ----</option>
                                <option value="re-selling">Re-Selling</option>
                                <option value="self use">Self Use</option>
                            </select>
                        </div>
                          <div class="col-12">
                                                                             <div class="g-recaptcha" data-sitekey="6LccliwrAAAAAF0XH-A1i7sbSyoKh-UG9LT6mkhy"></div>
                                                                        </div>
                    </div>
                    
                    <input type="submit" name="submit" class="mt-3 btn   w-25" style="background:#e77702;color:white">
                    <input type="reset" name="submit" class="mt-3 btn btn-primary ">
                </form>
            </div>
        </div>
    </div>
<?php include "footer.php"; ?>


<?php
// Database connection
include_once "config.php";

if (isset($_POST['submit'])) {
    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

    // Initialize variables from form data
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $pro_name = $_POST['pro_name'];
    $qty = $_POST['qty'];
    $unit = $_POST['unit'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $pin_code = $_POST['pin_code'];
    $product_type = $_POST['product_type'];


// mail
 $to = $email;
    $subject = "Enquiry From Grow India Export";
    $message = "<img src='logo/logo.png' alt='Grow India Export'> <br>   Name: $name <br> Email: $email <br> Phone Number: $number <br> Message: $pro_name ";

   $headers = "From: ritikamaheshonly@gmail.com\r\n";
    $headers .= "Reply-To: ritikamaheshonly@gmail.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
    // Send email
    $retval = mail($to, $subject, $message, $headers);

if ($retval == true) {
       // SQL query to insert data into database
    $sql = "INSERT INTO `requirement` (`name`, `number`, `email`, `pro_name`, `qty`, `unit`, `city`, `state`, `country`, `pin_code`, `product_type`)
        VALUES ('$name', '$number', '$email', '$pro_name', '$qty', '$unit', '$city', '$state', '$country', '$pin_code', '$product_type')";

    // Execute SQL query
    if (mysqli_query($con, $sql)) {
        echo "<script> alert('Record inserted successfully')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}


  

    // Close database connection
    mysqli_close($con);
}
?>



<script>
    // Get all elements with class 'q' (the three input fields)
    const inputs = document.getElementsByClassName('q');

    // Special characters to check for
    const specialCharacters = ['<', '>', '#', '^',   '*', '!', '~', '`', '$',  '(', ')'];

    // Function to validate input and alert if special characters are detected
    function validateInput(event) {
        const inputValue = event.target.value;

        // Check if any special character is found in the input
        for (let char of specialCharacters) {
            if (inputValue.includes(char)) {
                alert("Special character detected!");
                event.target.value = ""; // Clear the input value
                break; // Stop after the first special character is found
            }
        }
    }

    // Add event listener to all inputs
    for (let input of inputs) {
        input.addEventListener('input', validateInput);
    }
</script>

