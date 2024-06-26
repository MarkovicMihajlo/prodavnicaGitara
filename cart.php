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
    <link rel="stylesheet" type="text/css" href="public/css/cart.css">
    <title>Guitar Store</title>
</head>
<body>
    <?php
        require_once('inc/userNavigation.php');
        $idUser = $_SESSION['user_id'];
        $sql = "SELECT korpa.korpa_id,
               korpa.kolicina,
               gitara.ime,
               gitara.cena
        FROM korpa
        LEFT JOIN gitara on korpa.gitara_id = gitara.gitara_id
        WHERE user_id = :idUser";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':idUser', $idUser);
        $stmt->execute();
        $stavkeIzKorpe = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $suma = 0;
        foreach($stavkeIzKorpe as $stavka){
            $racun = $stavka['kolicina'] * $stavka['cena'];
            $suma += $racun;
    ?>

    <div class="guitar-box cart-box">
        <div class="guitarId">
            <h3 class="guitar-header">Cart ID</h3>
            <h3 class="dinamicItem"><?php echo $stavka['korpa_id']?></h3>
        </div>
        <div class="guitarName">
            <h3 class="guitar-header">Quantity</h3>
            <h3 class="dinamicItem"><?php echo $stavka['kolicina']?></h3>
        </div>
        <div class="guitarId">
            <h3 class="guitar-header">Guitar Name</h3>
            <h3 class="dinamicItem"><?php echo $stavka['ime']?></h3>
        </div>
        <div class="guitarId">
            <h3 class="guitar-header">Guitar price</h3>
            <h3 class="dinamicItem"><?php echo $stavka['cena']?>€</h3>
        </div>
        <div class="guitarId">
            <h3 class="guitar-header">Price</h3>
            <h3 class="dinamicItem"><?php echo $racun?>€</h3>
        </div>
        <div class="aktivnosti">
            <button class="delete"><a href="cartDelete.php?korpa_id=<?php echo $stavka['korpa_id'] ?>">Delete</a></button>
        </div>


    </div>
    <?php }?>
    <div class="container position">
        <h3><span class="highlighted">TOTAL SUM:</span> <?php echo $suma?>€</h3>
    </div>
    <?php
        
        require_once('inc/userFooter.php');

    ?>
    <script src="public/js/hamburger.js"></script>
</body>
</html>