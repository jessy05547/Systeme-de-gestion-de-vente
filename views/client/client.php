<?php
// require_once 'views/index.php';
require __DIR__ . '/../index.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>client</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom(s)</th>
                <th>téléphone</th>
                <th>E-mail</th>
                <th>Adresse</th>
                <th>Net à payer</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
             <?php foreach($liste_client as $row){ ?>
            <tr>
                <td><?=  $row['id_cl']; ?></td>
                <td><?=  $row['nom_cl']; ?></td>
                <td><?=  $row['prenom_cl']; ?></td>
                <td><?=  $row['tel']; ?></td>
                <td><?=  $row['email']; ?></td>
                <td><?=  $row['adr']; ?></td>
                <td><?=  $row['net_a_payer'];?></td>
                <td>
                    <a href=" ">Modifier</a>
                    <a href="?action=client/delete&id=<?php echo $row['id_cl']; ?>">Supprimer</a>
                </td>
            </tr>
    <?php }; ?>

        </tbody>
    </table>
</body>
</html>