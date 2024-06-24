<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="public/images/android-chrome-512x512.png">
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/homePage.css">
    <link rel="stylesheet" type="text/css" href="public/css/navigation.css">
    <link rel="stylesheet" type="text/css" href="public/css/footer.css">

    <title>Mobile Shop</title>
</head>
<body>

    <!--Main menu -->
    <?php
        require_once ('inc/navigation.php');
        
    ?>

    <div class="hero">
        <div class="container">
            <h1><span class="highlighted">WELCOME</span> TO THE BEST MOBILE PHONE STORE</h1>
        </div>
    </div>

    <div class="slider-section">
        <h2>This is the <span class="highlighted">right</span> time to buy a <span class="highlighted">mobile phone</span></h2>

        <div class="slider-container">
            <div class="slider">
                <div class="slide"><img src="public/images/product-img-1.jpg" alt="Product1"></div>
                <div class="slide"><img src="public/images/product-img-2.jpg" alt="Product2"></div>
                <div class="slide"><img src="public/images/product-img-3.jpg" alt="Product3"></div>
                <div class="slide"><img src="public/images/product-img-4.jpg" alt="Product4"></div>
                <div class="slide"><img src="public/images/product-img-5.jpg" alt="Product5"></div>
                <div class="slide"><img src="public/images/product-img-6.jpg" alt="Product6"></div>
                <div class="slide"><img src="public/images/product-img-7.jpg" alt="Product7"></div>
            </div>
        </div>

        <div class="see-our-products">
            <h2>See our</h2>
            <button class="productBtn"><a href="http://localhost/ecommerce/eCommerce/products.php">Products</a></button>
        </div>
    </div>

    <!-- Footer -->

    <?php 
        require_once("inc/footer.php") 
    ?>

    <script src="public/js/hamburger.js"></script>
</body>
</html>