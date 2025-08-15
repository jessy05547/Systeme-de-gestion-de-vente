<?php
include 'views/index.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de création</title>
    <link rel="stylesheet" href="/public/client.css">
</head>
<body>
    <h2>Créer un nouvel client</h2>
    <form action="/client/create" method="POST" id="form">
        <div class="clt">
            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="inp" required>
        </div>
        <div class="clt">
            <label for="prenom">Prénom(s) :</label>
            <input type="text" name="prenom" id="inp" required>
        </div>
        <div class="clt">
            <label for="tel">Téléphone :</label>
            <input type="tel" name="tel" id="inp" required>
        </div>
        <div class="clt">
            <label for="email">Adresse mail :</label>
            <input type="email" name="email" id="inp" required>
        </div>
        <div class="clt">
            <label for="adr">Adresse :</label>
            <input type="text" name="adr" id="inp" required>
        </div>
        <div class="clt">
            <label for="net_a_payer">Net à payer</label>
            <input type="text" name="net_a_payer" id="inp" required>
        </div>
        <div class="btn_val">
            <input type="submit" value="Créer" id="val">
            <a href="index.php" class="annul">Annuler</a>
        </div>
    </form>
</body>
</html>
