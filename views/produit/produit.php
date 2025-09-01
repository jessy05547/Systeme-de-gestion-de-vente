<?php
require __DIR__ . '/../index.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/produit.css">
    <title>Document</title>
</head>
<body>
    <section class="operation">
        <table border="1">
            <thead>
                <tr>
                    <th>Nom du produit</th>
                    <th>Catégorie</th>
                    <th>date d'arrivage</th>
                    <th>Quantité de stock</th>
                    <th>Prix unitaire</th>
                    <th>Date d'enregistrement</th>
                </tr>
            </thead>
            <tbody>
                <?php //echo $pro; ?>

                <?php foreach($pro as $row){ ?>
                <tr>
                    <td><?php echo $row['nom_p']; ?></td>
                    <td><?php echo $row['categorie']; ?></td>
                    <td><?php echo $row['dt_arrivage']; ?></td>
                    <td><?php echo $row['stock']; ?></td>
                    <td><?php echo $row['prix_unitaire']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                </tr>
                <?php } ;?>
            </tbody>
        </table>
    </section>
</body>
</html>