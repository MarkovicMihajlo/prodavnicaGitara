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
    <title>Guitar Store</title>
</head>
<body>
    <?php 
        require_once('../inc/adminNavigation.php');
        
        $upit = $pdo->prepare("SELECT * FROM tip");
        $upit->execute();
        $tipovi = $upit->fetchAll(PDO::FETCH_ASSOC);

        $gitaraId = $_GET['gitara_id'];
        $sql ="SELECT * FROM gitara WHERE gitara_id = :gitaraId";
        $stmt = $pdo -> prepare($sql);
        $stmt -> bindParam(':gitaraId', $gitaraId);
        $stmt -> execute();

        $gitaraForEdit = $stmt -> fetch(PDO::FETCH_ASSOC);
    ?>
    <section class="add-products">
        <div class="container-input">
            <div class="admin-product-form-container">
                <form action="updateProduct.php" method="POST">
                    <h3>Edit Product</h3>
                    <input type="text" name="gitara_id" hidden value="<?php echo $gitaraId ?>">
                    <input type="text" name="name" value="<?php echo $gitaraForEdit['ime']; ?>" class="box">
                    <input type="text" name="price" value="<?php echo $gitaraForEdit['cena']; ?>" class="box">
                    <select name="tip" id="tip" class="box">
                        <?php
                            foreach($tipovi as $tip){

                                $selected = "";
                                if($tip['tip_id'] == $gitaraForEdit['tip_id']) {
                                    $selected = "selected";
                                }
                        ?>
                        <option <?php echo $selected ?> value="<?php echo $tip['tip_id'] ?>"><?php echo $tip['tip']?></option>
                        <?php
                            }
                        ?>
                    </select>
                    <button type="submit" name="addProduct" class="add-button">Edit product</button>
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