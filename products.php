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
    <link rel="stylesheet" type="text/css" href="public/css/adminPanel.css">
    <link rel="stylesheet" type="text/css" href="public/css/adminProducts.css">
    <link rel="stylesheet" type="text/css" href="public/css/productsUser.css">
    <title>Guitar Store</title>
</head>
<body>
    <?php
        require_once('inc/userNavigation.php');

        $idUser = $_SESSION['user_id'];

        $sql = "SELECT gitara.gitara_id, gitara.ime, gitara.cena, tip.tip
                FROM gitara
                LEFT JOIN tip on gitara.tip_id = tip.tip_id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $gitare = $stmt -> fetchAll();

        foreach($gitare as $gitara){
    ?>

    <div class="phone-box">
        <div class="phoneId">
            <h3 class="phone-header">Guitar ID</h3>
            <h3 class="dinamicItem"><?php echo $gitara['gitara_id']?></h3>
        </div>
        <div class="phoneName">
            <h3 class="phone-header">Guitar Name</h3>
            <h3 class="dinamicItem"><?php echo $gitara['ime']?></h3>
        </div>
        <div class="phoneId">
            <h3 class="phone-header">Guitar Price</h3>
            <h3 class="dinamicItem"><?php echo $gitara['cena']?>€</h3>
        </div>
        <div class="phoneId">
            <h3 class="phone-header">Guitar type</h3>
            <h3 class="dinamicItem"><?php echo $gitara['tip']?></h3>
        </div>
        
        <form method="POST" action="insertCart.php">
            <input type="number" name="kolicina" placeholder="Enter number of guitars" class="field">
            <input type="number" hidden name="idUser" value="<?php echo $idUser?>">
            <input type="number" hidden name="idGitara" value="<?php echo $gitara['gitara_id']?>">
            <button type="submit" class="menuBtn" style=" color: white; width:165px; text-transform:uppercase; font-size: 18px; font-weight: 700;">Add to cart</button>
        </form>

    </div>

    <?php
        }
        require_once('inc/userFooter.php');

    ?>
    <script src="public/js/hamburger.js"></script>
</body>
</html>