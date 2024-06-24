<?php 
    include '../app/config/config.php';

    $gitaraId = $_GET['gitara_id'];
    $sql = "DELETE FROM gitara WHERE gitara_id = :gitaraId";

    $stmt = $pdo -> prepare($sql);
    $stmt = $pdo->prepare($sql);
    $stmt -> bindParam(':gitaraId', $gitaraId);
    $stmt -> execute();

    header("Location: adminProducts.php");
?>