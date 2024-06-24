<?php 

    include '../app/config/config.php';

    $naziv = $_POST['name'];
    $cena = $_POST['price'];
    $tip = $_POST['tip'];

    $upit = "INSERT INTO gitara (tip_id, cena, ime)
                         VALUES (:tip, :cena, :naziv)";
    $stmt = $pdo -> prepare($upit);
    $stmt -> bindParam(':tip', $tip);
    $stmt -> bindParam(':cena', $cena);
    $stmt -> bindParam(':naziv', $naziv);
    $stmt -> execute();

    header("Location: adminProducts.php");
?>