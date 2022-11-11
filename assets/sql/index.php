<?php
require_once './vendor/autoload.php';
use PDO;

$bd = new PDO('mysql:host=localhost;dbname=biblioteca','root', '');
$comando->execute();
$generos = $comando->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
</head>
<body>
    <table>
        <tr>
            <th>Id</th>
            <th>Nome</th>
        </tr>
        <?php foreach($generos as $g): ?>
            <tr>
                <td><?= $g['id'] ?></td>
                <td><?= $g['nome'] ?></td>
            </tr>
            <?php endforeach ?>
    </table>
</body>
</html>