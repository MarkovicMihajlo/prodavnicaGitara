<?php 
    include 'app/config/config.php';

    $imePrezime = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $idUloge = 2;
    $aktivan = 0;

    $sql = "INSERT INTO user (ime_prezime, uloga_id, email, password_hash, is_active)
                        VALUES (:imePrezime, :idUloge, :email, :password, :aktivan)";

    $stmt = $pdo -> prepare($sql);
    $stmt -> bindParam(':imePrezime', $imePrezime);
    $stmt -> bindParam(':idUloge', $idUloge);
    $stmt -> bindParam(':email', $email);
    $stmt -> bindParam(':password', $password);
    $stmt -> bindParam(':aktivan', $aktivan);

    $stmt -> execute();

    header("Location: login.php?registracija=1");
                        
?>