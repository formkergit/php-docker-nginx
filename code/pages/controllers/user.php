<?php
$idUser = $_GET['id'] ?? null;

if (! is_numeric($idUser)  ) {
    dd("Ce conducteur n'existe pas !!!");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <h2>L'id user est : <?= $idUser ?></h2>
    <p><a href="/" class="btn">Retour accueil</a></p>

</body>
</html>