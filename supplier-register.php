<?php
session_start();

// Database connection parameters
include "admin/config.php";

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Handle form submission
if (isset($_POST['submit'])) {
    // Retrieve and sanitize form data
    $user_name = test_input($_POST["user_name"]);
    $user_email = test_input($_POST["user_email"]);
    $user_phone = test_input($_POST["user_phone"]);
    $company_name = test_input($_POST["company_name"]);
    $company_address = test_input($_POST["company_address"]);
    $password = test_input($_POST["password"]);

    // Validate email format
    if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
    } else {
        // Check if the email already exists using prepared statements
        $stmt = $con->prepare("SELECT * FROM `user` WHERE `user_email` = ?");
        $stmt->bind_param("s", $user_email);
        $stmt->execute();
        $result = $stmt->get_result();
        $user_matched = $result->num_rows;
        $stmt->close();

        if ($user_matched > 0) {
            echo "You have already registered!!";
        } else {
            // Hash the password before storing it
            

            // Insert data into the database using prepared statements
            $stmt = $con->prepare("INSERT INTO `user` (`user_name`, `user_email`, `user_phone`, `password`, `company_name`, `company_address`) 
                                   VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssss", $user_name, $user_email, $user_phone, $password, $company_name, $company_address);

            if ($stmt->execute()) {
                header("Location: https://growindiaexport.com/supplier-login.php");
                exit;
            } else {
                echo "Error: " . $stmt->error;
            }
            $stmt->close();
        }
    }
}

function test_input($data) {
    $data = trim($data);
      $data = preg_replace('/\s+/', ' ', $data); // Remove all whitespace characters
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Page</title>
 
 <link rel="icon" type="image/x-icon" href="image/favicon.png">
    <link rel="mask-icon" href="image/favicon.png">
 <link rel="canonical" href="https://growindiaexport.com/supplier-register.php">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
        /* Custom CSS for positioning video background */
        .form-control{
            color: #ffffff !important; 
        }
        #video-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        .container {
            position: relative;
            z-index: 1;
        }

        form {
            box-shadow: rgba(0, 0, 0, 0.15) 0px 15px 25px, rgba(0, 0, 0, 0.05) 0px 5px 10px;
            background-color: #000000c7;
        }

        input {
            background-color: transparent !important;
            color: white;
            border: none !important;
            border: 1px solid white !important;
            border-radius: 10px !important;
        }

        input::placeholder {
            color: white !important;
        }
    </style>
</head>
<body>

<!-- Video Background -->
<video src="export_new.mp4" autoplay muted loop id="video-background"></video>

<!-- Form -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-7 col-lg-7">
            <form id="registrationForm"     method="post" class="rounded shadow-lg p-5 text-white">
                <a href="/">
                    <div class="logo text-center">
                        <img src="https://growindiaexport.com/logo/logo.png" class="rounded" alt="https://growindiaexport.com/" height="auto" width="45%">
                    </div>
                </a>
                <p class="mt-3 fs-4">Register your Company</p>
                <div class="form-group my-4">
                    <label for="name" class="text-white mb-2">Your Name</label>
                    <input type="text" class="form-control q" id="user_name" name="user_name" placeholder="Enter your name" required>
                </div>
                <div class="form-group my-4">
                    <label for="email" class="text-white mb-2">Company Name</label>
                    <input type="text" class="form-control q" name="company_name" placeholder="Enter your Company Name" required>
                </div>
                <div class="form-group my-4">
                    <label for="message" class="text-white mb-2">Number</label>
                    <input type="number" class="form-control" name="user_phone" placeholder="Enter your Number" required>
                </div>
                <div class="form-group my-4">
                    <label for="message" class="text-white mb-2">Email Address</label>
                    <input type="text" class="form-control" name="user_email" placeholder="Enter your Email" required>
                </div>
                <div class="form-group my-4">
                    <label for="message" class="text-white mb-2">Company Address</label>
                    <input type="text" class="form-control q" name="company_address" placeholder="Enter Your Company Address" required>
                </div>
                <div class="form-group my-4">
                    <label for="message" class="text-white mb-2">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter Your Password" required>
                </div>
<div class="g-recaptcha" data-sitekey="6LccliwrAAAAAF0XH-A1i7sbSyoKh-UG9LT6mkhy"></div>
                <div class="row">
                    <div class="col-12 ">
                         <input type="submit" name="submit" value="Register" class="btn btn-primary btn-lg btn-block float-end"> 
                        <span class="float-start pb-2 mt-4">Have an account? <a href="supplier-login.php">Sign in now!</a></span>
                    </div>
                </div>
                   
               
            </form>
        </div>
    </div>
</div>
 
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
<!-- Plugins JS File -->
<script src="bootstrap/js/bootstrap.min.js"></script>
 <script>
        // Get all elements with class 'q' (the three input fields)
        const inputs = document.getElementsByClassName('q');
    
        // Special characters to check for
        const specialCharacters = ['<', '>', '#', '^',    '*' ,'!','~','`','$', '(',')' , '&','{' , '[' , '}', ' ]' , '?','+'];
    
        // Function to validate input and alert if special characters are detected
        function validateInput(event) {
            const inputValue = event.target.value;
    
            // Check if any special character is found in the input
            for (let char of specialCharacters) {
                if (inputValue.includes(char)) {
                    alert("Special character detected!");
                    event.target.value = "";  // Clear the input value
                    break;  // Stop after the first special character is found
                }
            }
        }
    
        // Add event listener to all inputs
        for (let input of inputs) {
            input.addEventListener('input', validateInput);
        }
    </script>
    
    
<script>
    // // Client-side validation
    // document.getElementById('registrationForm').onsubmit = function(event) {
    //     const userEmail = document.getElementsByName('user_email')[0].value;
    //     const password = document.getElementsByName('password')[0].value;
    //     const userPhone = document.getElementsByName('user_phone')[0].value;
        
        
        
        
        
        
        
    //     // Validate email
    //     const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    //     if (!emailRegex.test(userEmail)) {
    //         alert('Please enter a valid email address.');
    //         event.preventDefault();
    //         return false;
    //     }
       

    //     // Validate phone number (optional)
    //     const phoneRegex = /^[0-9]{10}$/;
    //     if (!phoneRegex.test(userPhone)) {
    //         alert('Please enter a valid phone number (10 digits).');
    //         event.preventDefault();
    //         return false;
    //     }

    //     // Validate password length
    //     if (password.length < 6) {
    //         alert('Password must be at least 6 characters long.');
    //         event.preventDefault();
    //         return false;
    //     }

    //     return true;
    // }
    
    
</script>
<script>
document.getElementById('registrationForm').onsubmit = function(event) {
    const userEmail = document.getElementsByName('user_email')[0].value;
    const password = document.getElementsByName('password')[0].value;
    const userPhone = document.getElementsByName('user_phone')[0].value;

    // Validate email
    const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    if (!emailRegex.test(userEmail)) {
        alert('Please enter a valid email address.');
        event.preventDefault();
        return false;
    }

    // Validate phone number
    const phoneRegex = /^[0-9]{10}$/;
    if (!phoneRegex.test(userPhone)) {
        alert('Please enter a valid phone number (10 digits).');
        event.preventDefault();
        return false;
    }

    // Validate password
    if (password.length < 6) {
        alert('Password must be at least 6 characters long.');
        event.preventDefault();
        return false;
    }

    // Validate reCAPTCHA
    const captchaResponse = grecaptcha.getResponse();
    if (captchaResponse.length === 0) {
        alert("Please verify you are human.");
        event.preventDefault();
        return false;
    }

    // All checks passed
    return true;
}
</script>

</body>
</html>
