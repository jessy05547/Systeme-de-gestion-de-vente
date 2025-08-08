<?php
    include '../models/config.php';
    
    switch (basename($_SERVER['PHP_SELF'])) {
        case 'dashboard.php':
            $name_page = "Tableau de bord";
            break;
        case 'index.php':
            $name_page = "Gestion de vente";
            break;
        case 'client.php':
            $name_page = "Client";
            break;
        case 'produit.php':
            $name_page = "Produit";
            break;
        case 'read.php':
            $name_page = "Vente";
            break;
        case 'create.php':
            $name_page = "Achat";
            break;
        case 'update.php':
            $name_page = "Mise à jour";
            break;
        default:
            $name_page = "Page inconnue";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/style.css">
    <title><?php echo $name_page;?></title>
</head>
<body>
    <header class="tronc">
        <!-- entete de page -->
        <nav class="menu">
            <h4 class="page"><?php echo $name_page;?></h4>
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
                <a href="dashboard.php" class="menu-item">
                    <img src="../public/img/dashboard (2).png" alt="" class="icon-menu">
                    <h6 class="menu_name">Tableau de bord</h6>
                </a>
                <a href="client.php" class="menu-item">
                    <img src="../public/img/customer.png" alt="" class="icon-menu">
                    <h6 class="menu_name">Client</h6>
                </a>
                <a href="produit.php" class="menu-item">
                    <img src="../public/img/product-management.png" alt="" class="icon-menu">
                    <h6 class="menu_name">Produit</h6>
                </a>
                <a href="read.php" class="menu-item">
                    <img src="../public/img/trend.png" alt="" class="icon-menu">
                    <h6 class="menu_name">Vente</h6>
                </a>
                
            </ul>
            <div class="profil">
                <img src="../public/img/9057332_profile_icon.png" alt="" class="profil-img">
                <div class="name">
                    <h6 class="profil-name">RAZAFINDRAIBE</h6>

                    <p class="first-name">Jessy Roméo</p>
                </div>
                
            </div>
        </div>
        <!-- L'endroit où l'on met les différents pages -->
        <div class="right">
            <div class="content">
                
         