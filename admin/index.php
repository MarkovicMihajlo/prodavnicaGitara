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

    <title>Guitar Store</title>
</head>
<body>

    <?php 

        require_once('../inc/adminNavigation.php');

        include '../app/config/config.php';
        
        
        $korisnik = $_SESSION['ime_prezime'];
        $role = $_SESSION['uloga_id'];
    ?>

    <div class="container columnPositioning" style="margin: 10px auto;">
        <div class="heading">
            <h1><span class="highlighted">Welcome</span> back <span class="highlighted">admin</span></h1>
        </div>

        <div class="profileInfo">
            <h2><?php echo $korisnik ?></h2>
            <h2><?php 
                if($role == 1) {
                    echo "Administrator";
                } else {
                    echo "Korisnik";
                }
            ?></h2>
        </div>
    </div>

    <?php 
        require_once('../inc/adminFooter.php');
    ?>

    <script src="../public/js/hamburger.js"></script>
</body>
</html>