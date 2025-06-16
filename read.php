<!-- - Backend: -->

<?php
#nécessite une connexion en php
require('connexion.php');
require('create.php');
$stmt = $pdo->query("SELECT * FROM clients");
$clients = $stmt->fetchAll();
?>


<!-- - Frontend: -->

<h2>Liste des clients</h2>
<table border="1">
    <tr><th>ID</th><th>Nom</th><th>Email</th><th>Actions</th></tr>
    <?php foreach ($clients as $client): ?>
        <tr>
            <td><?= $client['id'] ?></td>
            <td><?= $client['nom'] ?></td>
            <td><?= $client['email'] ?></td>
            <td>
                <a href="update.php?id=<?= $client['id'] ?>">Modifier</a> |
                <a href="delete.php?id=<?= $client['id'] ?>" onclick="return confirm('Supprimer ce client ?')">Supprimer</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
