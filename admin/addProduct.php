<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../public/images/android-chrome-512x512.png">
    <link rel="stylesheet" type="text/css" href="../public/css/style.css">
    <link rel="stylesheet" type="text/css" href="../public/css/navigation.css">
    <link rel="stylesheet" type="text/css" href="../public/css/footer.css">
    <link rel="stylesheet" type="text/css" href="../public/css/adminPanel.css">
    <link rel="stylesheet" type="text/css" href="../public/css/adminProducts.css">
    <link rel="stylesheet" type="text/css" href="../public/css/addProducts.css">
    <title>Mobile Store</title>
</head>
<body>
    <?php 
        require_once('../inc/adminNavigation.php'); 
    ?>
    <?php
        $upit = $pdo->prepare("SELECT * FROM tip");
        $upit->execute();
        $tipovi = $upit->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <section class="add-products">
        <div class="container-input">
            <div class="admin-product-form-container">
                <form action="addNewProduct.php" method="POST">
                    <h3>Add a new product</h3>
                    <input type="text" name="name" placeholder="Enter product name" class="box">
                    <input type="text" name="price" placeholder="Enter price" class="box">
                    <select name="tip" id="tip" class="box">
                        <?php
                            foreach($tipovi as $tip){
                        ?>
                        <option value="<?php echo $tip['tip_id']?>"><?php echo $tip['tip']?></option>
                        <?php
                            }
                        ?>
                    </select>
                    <button type="submit" name="addProduct" class="add-button">Add product on shop</button>
                </form>
            </div>
        </div>
    </section>
    <?php 
        require_once('../inc/adminFooter.php');
    ?>
    <script src="public/js/hamburger.js"></script>
</body>
</html>