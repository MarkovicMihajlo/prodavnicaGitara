<?php 
    include '../app/config/config.php';

    $idUser = $_GET['user_id'];
    $statusAktivacije = $_GET['status'];

    $upit = "UPDATE user SET is_active = :is_active WHERE user_id = :idUser";

    $stmt = $pdo -> prepare($upit);
    $stmt -> bindParam(':idUser', $idUser);
    $stmt -> bindParam(':is_active', $statusAktivacije);
    $stmt -> execute();

    header("Location: adminUsers.php");
?>