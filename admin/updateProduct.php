<?php 
    include '../app/config/config.php';

    $gitaraId = $_POST['gitara_id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $tip = $_POST['tip'];

    $sql = "UPDATE gitara SET tip_id = :tip, cena = :price, ime = :name WHERE gitara_id = :gitaraId";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':tip', $tip);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':gitaraId', $gitaraId);
    $stmt->execute();

    header("Location: adminProducts.php");
?>