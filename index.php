<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    // $bdh = new PDO('mysql:host=localhost;dbname=test1;charset=utf8', 'root', '');
    // $sql = "SELECT * FROM produits";
    // if (!$bdh->query($sql))
    //     echo "pb dacces au carnet";
    // else {
    //     foreach ($bdh->query($sql) as $row)
    //         echo "" . " " . $row["id"] . " " . $row["name"] . " " . $row["description"]  . "<br>";
    // };
    require_once('connexion.php');
    require('create.php');
    require('read.php');
    require('update.php');
    require('delete.php');
    ?>

</body>

</html>