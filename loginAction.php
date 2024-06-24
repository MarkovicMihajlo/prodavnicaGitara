<?php 
    if(isset($_POST['email'], $_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])) {
        include 'app/config/config.php';

        $email = $_POST['email'];
        $password = $_POST['password'];

        $aktivan = 1;

        $upit = $pdo -> prepare("SELECT * FROM user WHERE email = :email AND password_hash = :password AND is_active = :aktivan");

        $upit -> bindParam(':email', $email);
        $upit -> bindParam(':password', $password);
        $upit -> bindParam(':aktivan', $aktivan);

        $upit -> execute();

        $result = $upit -> fetch(PDO::FETCH_ASSOC);

        if(!$result){
            header('Location: login.php?error=2');
            exit();
        } else {
            session_start();

            $_SESSION['user_id'] = $result['user_id'];
            $_SESSION['ime_prezime'] = $result['ime_prezime'];
            $_SESSION['uloga_id'] = $result['uloga_id'];

            if($_SESSION['uloga_id'] == 1) {
                header('Location: admin/index.php');
                exit();
            }

            if($_SESSION['uloga_id'] == 2) {
                header('Location: userPanel.php');
                exit();
            }
        
        }
    } else {
        header('Location: login.php?error=1');
        exit();
    }
?> 