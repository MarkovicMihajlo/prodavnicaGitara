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

    <title>Guitar Store</title>
</head>
<body>

    <!--Main menu -->
    <?php
        require_once ('inc/userNavigation.php');
        
    ?>

    <div class="hero">
        <div class="container">
            <h1><span class="highlighted">WELCOME</span> TO THE BEST GUITAR STORE</h1>
        </div>
    </div>

    <div class="slider-section">
        <h2>This is the <span class="highlighted">right</span> time to buy a <span class="highlighted">guitar</span></h2>

        <div class="slider-container">
            <div class="slider">
                <div class="slide"><img src="public/images/product-img-1.png" alt="Product1"></div>
                <div class="slide"><img src="public/images/product-img-2.png" alt="Product2"></div>
                <div class="slide"><img src="public/images/product-img-3.png" alt="Product3"></div>
                <div class="slide"><img src="public/images/product-img-4.png" alt="Product4"></div>
                <div class="slide"><img src="public/images/product-img-5.png" alt="Product5"></div>
                <div class="slide"><img src="public/images/product-img-6.png" alt="Product6"></div>
                <div class="slide"><img src="public/images/product-img-7.png" alt="Product7"></div>
            </div>
        </div>

        <div class="see-our-products">
            <h2>See our</h2>
            <button class="productBtn"><a href="products.php">Products</a></button>
        </div>
    </div>

    <!-- Footer -->

    <?php 
        require_once("inc/userFooter.php") 
    ?>

    <script src="public/js/hamburger.js"></script>
</body>
</html>