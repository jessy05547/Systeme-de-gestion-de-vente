<?php
include 'index.php';

$req = "SELECT * FROM produit";
$stmt = $conn->prepare($req);
$stmt->execute();
$res = $stmt->fetchAll();
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
    <article>

    </article>
</body>
</html>