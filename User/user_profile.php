<?php
  session_start();
  include '../Common/config.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>

    
    <link rel="stylesheet" href="../CSS/home.css">
    <link href="https://fonts.cdnfonts.com/css/samsung-logo-font" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

</head>
<?php
include 'user_header.php';
?>
<body>



<section class="userdetails">
   

<h2>My Profile</h2>

    <p>Username: 
        <br><span><?php echo isset($_SESSION['user_name']) ? $_SESSION['user_name'] : ''; ?></span></p>
        <hr>
    <p>Email: <br><span><?php echo isset($_SESSION['user_email']) ? $_SESSION['user_email'] : ''; ?></span></p>  

<hr>
<p>User Type: 
        <br><span><?php echo isset($_SESSION['user_type']) ? $_SESSION['user_type'] : ''; ?></span></p>
<hr>
        <p>Telephone Number: <br><span><?php echo isset($_SESSION['user_tel']) ? $_SESSION['user_tel'] : ''; ?></span></p>  
<hr>

   
</section>


    
</body>
</html>

<?php
include '../Common/footer.php';
?>