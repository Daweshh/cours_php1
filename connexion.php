<?php
try {
    // on crée une variable $pdo dans laquelle on se connecte à la base de données avec pdo en définissant l'adresse, le format de caractère et les creds pour la connexion 
    $pdo = new PDO('mysql:host=localhost;dbname=entreprise;charset=utf8', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo ("connexion à la base de données réussie ");
    // echo "Nom du serveur : " . $_SERVER["SERVER_NAME"] . "<br>";
} catch (Exception $e) {
    // affiche un message en cas d'erreur de connexion
    die('Erreur de connexion : ' . $e->getMessage());
}
