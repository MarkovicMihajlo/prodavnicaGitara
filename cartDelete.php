<?php

    include 'app/config/config.php';
    $idKorpa = $_GET['korpa_id'];

    $sql = "DELETE FROM korpa WHERE korpa_id = :idKorpa";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':idKorpa', $idKorpa);
    $stmt->execute();


    header("Location:cart.php");

?>