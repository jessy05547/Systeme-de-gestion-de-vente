<?php
require_once 'views/index.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/ajout.produit.css">
    <title>Document</title>
</head>
<body>
    <section class="formulaire">
        <h3 class="title-form">Enregistrement des Produit(s)</h3>
        <form action="/produit/nouveau" method="post">
            <div class="prod">
                <div class="gr">
                    <label for="nom">Nom du produit :</label>
                    <input type="text" name="nom" id="inp-txt" required>
                </div>
                <div class="gr">
                    <label for="cat">Catégorie :</label>
                    <input type="text" name="cat" id="inp-txt">
                </div>
                <div class="gr">
                    <label for="prix">Prix unitaire :</label>
                    <input type="text" name="prix" id="inp-txt" required>
                </div>
                <div class="gr">
                    <label for="date">Date d'arrivage :</label>
                    <input type="date" name="date" id="inp-txt" pattern="dd/mm/yyyy" title="Garder le format" required>
                </div>
                <div class="gr">
                    <label for="stock">Stock</label>
                    <input type="text" name="stock" id="inp-txt">
                </div>
                <div class="gr">
                    <label for="dt">Date d'enregistrement :</label>
                    <input type="date" name="dt" id="inp-txt" pattern="dd/mm/yyyy" title="Garder le format" required>
                </div>
                <div class="btn_valide">
                    <input type="submit" value="Enregistrer" name="submit">
                    <a href="/produit/affiche" class="retour">Affichage</a>
                </div>
            </div>
        </form>
    </section>
</body>
</html>