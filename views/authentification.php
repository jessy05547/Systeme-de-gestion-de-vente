<?php
include "../models/config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification</title>
</head>

<body>
    <h1>Authentification</h1>
    <form action="process_auth.php" method="post">
        <label for="registration_number">Registration number:</label>
        <input type="text" id="registration_number" name="registration_number" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <input type="submit" value="Login">
    </form>
</body>

</html>