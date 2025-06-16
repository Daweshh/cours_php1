<!-- - Backend: -->

<?php

require('connexion.php');

// $id = $_GET['id'];
$id = $_GET["id"] ?? null; // null coalescent façon d'écrire plus courte

// $id = $_GET["id"] ? $_GET["id"] : null // ternaire façon d'écrire différente

if ($id === null) { // "===" compare le type de valeur en plus de la valeur
    echo "Erreur : aucun identifiant de client n’a été fourni."; 
    exit;
}

echo "Client n° " . $id;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $email = $_POST["email"];

    $stmt = $pdo->prepare("UPDATE clients SET nom = ?, email = ? WHERE id = ?");
    $stmt->execute([$nom, $email, $id]);

    echo "Client modifié.";
}

$stmt = $pdo->prepare("SELECT * FROM clients WHERE id = ?");
$stmt->execute([$id]);
$client = $stmt->fetch();

?>


<!-- - Frontend -->

<form method="post">
    Nom : <input type="text" name="nom" value="<?= $client['nom'] ?>"><br>
    Email : <input type="email" name="email" value="<?= $client['email'] ?>"><br>
    <input type="submit" value="Modifier">
</form>
