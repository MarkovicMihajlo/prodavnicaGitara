<?php 
    include '../app/config/config.php';
    include '../app/config/sessionChecker.php';
        
    $korisnik = $_SESSION['ime_prezime'];
    $idUser = $_SESSION['user_id'];  
?>

<header>
    <nav>
        <div class="container positioning">
            <div class="logo">
                <a href="index.php"><img src="../public/images/gitaraShopstore.png" alt="LOGO"></a>
            </div>
            <div class="navigation">
                <div class="hamburger-menu">
                <svg width="32" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.25 15.75C0.25 14.9216 0.921573 14.25 1.75 14.25L33.7492 14.25C34.5776 14.25 35.2492 14.9216 35.2492 15.75C35.2492 16.5784 34.5776 17.25 33.7492 17.25H1.75C0.921573 17.25 0.25 16.5784 0.25 15.75ZM6.81614 29.75C6.81614 28.9216 7.48771 28.25 8.31614 28.25L33.75 28.25C34.5784 28.25 35.25 28.9216 35.25 29.75C35.25 30.5784 34.5784 31.25 33.75 31.25L8.31614 31.25C7.48771 31.25 6.81614 30.5784 6.81614 29.75ZM18.1937 1.75C18.1937 0.921574 18.8653 0.250001 19.6937 0.250001L33.75 0.25C34.5784 0.25 35.25 0.921574 35.25 1.75C35.25 2.57843 34.5784 3.25 33.75 3.25L19.6937 3.25C18.8653 3.25 18.1937 2.57843 18.1937 1.75Z" fill="white"/>
                </svg>

                </div>
                <ul class="menu">
                    <li><a class="navLinks" href="adminProducts.php">Products</a></li>
                    <li><a class="navLinks" href="adminUsers.php">Users</a></li>
                    <li><img src="../public/images/user-icon.svg"><?php echo $korisnik?></li>
                    <li><button class="menuBtn"><a href="../logOut.php">Log out</a></button></li>
                </ul>
            </div>
        </div>  
    </nav>
</header>