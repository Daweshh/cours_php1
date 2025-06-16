<!-- - Backend: -->

<?php
require 'connexion.php';

$id = $_GET['id'];

$stmt = $pdo->prepare("DELETE FROM clients WHERE id = ?");
$stmt->execute([$id]);

echo "Client supprimé.";
?>

<!-- - Frontend: -->

<a href="read.php">Retour à la liste</a>
