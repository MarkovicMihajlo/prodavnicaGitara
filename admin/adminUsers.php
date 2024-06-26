<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../public/images/android-chrome-512x512.png">
    <link rel="stylesheet" type="text/css" href="../public/css/style.css">
    <link rel="stylesheet" type="text/css" href="../public/css/navigation.css">
    <link rel="stylesheet" type="text/css" href="../public/css/footer.css">
    <link rel="stylesheet" type="text/css" href="../public/css/adminPanel.css">
    <link rel="stylesheet" type="text/css" href="../public/css/adminUser.css">

    <title>Guitar Store</title>
</head>

<body>

    <?php 
        require_once('../inc/adminNavigation.php'); 
        $sql = "SELECT * FROM user WHERE user_id != :idUser";

        $stmt = $pdo -> prepare($sql);
        $stmt -> bindParam(':idUser', $idUser);
        $stmt -> execute();

        $users = $stmt -> fetchAll();

        foreach ($users as $count => $user) {
            $count++;
    ?>

    <div class="userBox">
        <div class="userId">
            <h3 class="headingUser">User Id</h3>
            <h3 class="dinamicItem"><?php echo $user['user_id'] ?></h3>
        </div>

        <div class="nameBox">
            <h3 class="headingUser">Name and Lastname</h3>
            <h3 class="dinamicItem"><?php echo $user['ime_prezime'] ?></h3>
        </div>

        <div class="emailBox">
            <h3 class="headingUser">Email</h3>
            <h3 class="dinamicItem"><?php echo $user['email'] ?></h3>
        </div>


        <div class="actions">
            <?php 
                if($user['is_active'] == 0) {
            ?>
            <button class="active"><a href="activate.php?status=1&user_id=<?php echo $user['user_id']?>">Activate</a></button>
            <?php 
                }
                if($user['is_active'] == 1) {
            ?>
            <button class="deactive"><a href="activate.php?status=0&user_id=<?php echo $user['user_id']?>">Deactivate</a></button>
            <?php 
                }
            ?>
        </div>
    </div>



    <?php 
        }
        require_once('../inc/adminFooter.php');
    ?>

    <script src="public/js/hamburger.js"></script>
</body>
</html>