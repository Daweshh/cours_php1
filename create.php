<!-- le fichier create.php permet de créer un nouveau client -->

<!-- - Backend: -->
<!-- on fait une requête en SQL pour ajouter des clients à la base de donnée en définissant leurs noms et leurs emails -->
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $email = $_POST["email"];

    // on crée la variable $stmt dans laquelle on crée la variable $pdo dans laquelle on ajoute le résultat de la requête SQL qui ajoute les noms et emails de chaque client à la base de donnée 
    $stmt = $pdo->prepare("INSERT INTO clients (nom, email) VALUES (?, ?)");
    $stmt->execute([$nom, $email]);
    // affiche une confirmation si l'ajout a fonctionné
    echo "Client ajouté avec succès.";
}
?>


<!-- - Frontend: -->
<!-- on affiche des formulaires pour permettre d'entrer un nom, un email et appuyer sur ajouter pour submit -->
<form method="post">
    Nom : <input type="text" name="nom"><br>
    Email : <input type="email" name="email"><br>
    <input type="submit" value="Ajouter">
</form>
