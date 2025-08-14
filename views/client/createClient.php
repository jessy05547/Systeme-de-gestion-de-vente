<?php
include 'index.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/achat.css">
    <title>Achat</title>
</head>
<body>
    <section>
        <form action="" method="post" id="ajout">
            <div class="group-inp">
                <label for="nom" class="name-inp"> Nom :</label>
                <input type="text" id="inp-text" name="nom" placeholder="Nom du client" required>
            </div>
            <div class="group-inp">
                <label for="prenom" class="name-inp">Prénom(s) :</label>
                <input type="text" id="inp-text" name="prenom" placeholder="Prénom(s) du client" required>
            </div>
            <div class="group-inp">
                <label for="age" class="name-inp">Age :</label>
                <input type="text" id="inp-text" name="age" pattern="[0-9]{2}" title="Attention! ne saisissez que deux nombre supérieure à 18 ans." min="18" inputmode="numeric" required>
            </div>
            <div class="group-inp">
                <label for="tel" class="name-inp">Téléphone :</label>
                <input type="text" id="inp-text" name="tel" pattern="[0-9]{20}" title="Gardez le format du numéro de téléphone.">
            </div>
            <div class="group-inp">
                <label for="email" class="name-inp">Adresse e-mail :</label>
                <input type="email" id="inp-text" name="email" placeholder="exemple@gmail.com">
            </div>
            <div class="group-inp">
                <label for="adr" class="name-inp"></label>
                <input type="text" id="inp-text" name="adr" placeholder="Domicile du client">
            </div>
            <!-- plus produit -->
             
            <div class="group-inp">
                <label for="" class="name-inp"></label>
                <input type="text" id="inp-text">
            </div>
        </form>
    </section>
</body>
</html>