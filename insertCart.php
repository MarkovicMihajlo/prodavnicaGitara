<?php

    include 'app/config/config.php';

    $idUser = $_POST['idUser'];
    $idGitara = $_POST['idGitara'];
    $kolicina = $_POST['kolicina'];

    $sql = "INSERT INTO korpa (user_id, gitara_id, kolicina) 
                    VALUES (:idUser, :idGitara, :kolicina)";

    $stmt = $pdo->prepare($sql); 

    
    $stmt->bindParam(':idUser', $idUser);
    $stmt->bindParam(':idGitara', $idGitara);
    $stmt->bindParam(':kolicina', $kolicina);

    $stmt -> execute();

    header("Location:products.php?msg=uspesno");

?>