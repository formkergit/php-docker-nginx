<?php
$idUser = $_GET['id'] ?? null;

if (! is_numeric($idUser)  ) {
    dd("Ce conducteur n'existe pas !!!");
}

require 'pages/views/user-view.php';
?>
