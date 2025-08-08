<?php
    include '../models/config.php';
    $name_page = 'Gestion de vente';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/style.css">
    <title>Gestion de vente</title>
</head>
<body>
    <header class="tronc">
        <!-- entete de page -->
        <nav class="menu">
            <h4 class="page"><?php htmlspecialchars($name_page); ?></h4>
            <form action="" method="get" class="src_conte">
                <input type="text" name="query" id="search" placeholder="Rechrercher...">
                <img src="../public/img/8666693_search_icon.png" alt="" class="search-icon">
            </form>
        </nav>
        <!-- menu à gauche de page -->
        <div class="left">
            <div class="logo">
                <img src="../public/img/cosmos-removebg-preview.png" alt="" class="logo-img">
            </div>
            <ul id="list">
                <a href="" class="menu-item">
                    <img src="../public/img/dashboard_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.png" alt="" class="icon-menu">
                    <h6 class="menu_name">Dashboard</h6>
                </a>
                <a href="" class="menu-item">
                    <img src="../public/img/dashboard_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.png" alt="" class="icon-menu">
                    <h6 class="menu_name">Dashboard</h6>
                </a>
                <a href="" class="menu-item">
                    <img src="../public/img/dashboard_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.png" alt="" class="icon-menu">
                    <h6 class="menu_name">Dashboard</h6>
                </a>
                <a href="" class="menu-item">
                    <img src="../public/img/dashboard_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.png" alt="" class="icon-menu">
                    <h6 class="menu_name">Dashboard</h6>
                </a>
                <a href="" class="menu-item">
                    <img src="../public/img/dashboard_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.png" alt="" class="icon-menu">
                    <h6 class="menu_name">Dashboard</h6>
                </a>
            </ul>
            <div class="profil">
                <img src="../public/img/9057332_profile_icon.png" alt="" class="profil-img">
                <div class="name">
                    <h6 class="profil-name"><?php htmlspecialchars($_SESSION['']); ?></h6>

                    <p class="first-name"><?php htmlspecialchars($_SESSION['']); ?></p>
                </div>
                
            </div>
        </div>
        <div class="right"></div>
    </header>
</body>
</html>