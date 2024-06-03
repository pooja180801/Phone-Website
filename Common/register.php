<?php
session_start();
include '../Common/config.php';

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirmPassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
    $tel_num = mysqli_real_escape_string($conn, $_POST['telephone']);

    $select_users = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'") or die('query failed');

    if (mysqli_num_rows($select_users) > 0) {
        echo '<script>alert("User already exists!")</script>';
    } else {
        if ($password != $confirmPassword) {
            echo '<script>alert("Confirm password does not match!")</script>';
        } else {
            mysqli_query($conn, "INSERT INTO users (name, email, password, tel_num, user_type) VALUES ('$name', '$email', '$password', '$tel_num', 'user')") or die('query failed' . mysqli_error($conn));
            echo '<script>alert("Registered successfully!")</script>';
        }
    }
    header('location:../Common/login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Admin</title>
    <link rel="stylesheet" href="../CSS/home.css">
    <link href="https://fonts.cdnfonts.com/css/samsung-logo-font" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="validation.js" defer></script>
</head>
<body>

<section class="form_container">
   

    <form action="" class="form" method="post" onsubmit="return validateForm()">
    <h2>Register Now</h2>
    <div class="input">
    <input type="text" name="name" id="name" placeholder="Enter your name" required>
    
    </div>
    

    <div class="input">
    <input type="email" name="email" id="email" placeholder="Enter your Email" required>
   
    </div>

    <div class="input">
    <input type="password" name="password" id="password" placeholder="Enter the password" required>
    

    </div>

    <div class="input">
    <input type="password" name="cpassword" id="cpassword" placeholder="Confirm your password" required>
    
    </div>

    <div class="input">
    <input type="text" name="telephone" id="telephone"  placeholder="Enter your Tel-Number:07XXXXXXXX" required>
    
    
    </div>


    <input type="submit"   name="submit" value="Register" class="btn">
<p class="login">Already have an account? <a href="login.php">Login here</a></p>

    </form>
   
</section>  
</body>
</html>
