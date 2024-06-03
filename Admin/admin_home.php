<?php
  

  include '../Common/config.php';

$all_items = mysqli_query($conn,"SELECT * FROM products") or die('query failed');
   

  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home Page</title>


   <link href="https://fonts.cdnfonts.com/css/samsung-logo-font" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

</head>

<?php
include 'admin_header.php';
?>

<body>

<?php
include '../Common/view_products.php';
?>
</body>

</html>
<?php
include '../Common/footer.php';
?>