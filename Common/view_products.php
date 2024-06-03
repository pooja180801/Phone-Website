<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/home.css">
   <link href="https://fonts.cdnfonts.com/css/samsung-logo-font" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
<div class="heading" style="background: rgba(0,0,0,0.5)url(../Uploaded_Images/coverphoto.jpg);background-repeat:no-repeat; background-size:cover;background-blend-mode: darken;" >
        <h3>"Welcome to the Samsung Phone Store - Discover the latest innovations and cutting-edge technology that redefine the smartphone experience."</h3>
         </div>
<main>

<?php
while($row= mysqli_fetch_assoc($all_items)){

?> 
    <div class="part">
    <div class="image">
        <img src="../Uploaded_Images/<?php echo $row['product_image']; ?>" alt="">
        
    </div>

    <div class="caption">
        <p class="productname"><?php echo $row['product_name']; ?></p>
       
        <div class="price">
            <p >Rs.<?php echo $row['product_price']; ?></p>
        </div>
       
    <div class="description">
        <p>Warranty: <br>
        <?php echo $row['product_discription']; ?>
           </p>
    </div>
    </div>
    </div>

    <?php
}
    ?>
    </main>
</body>
</html>
