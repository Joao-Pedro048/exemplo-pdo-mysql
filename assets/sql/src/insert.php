<?php
    require_once './vendor/autoload.php';
    use ExemploPDOMySQL\MySQLConnection;

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $bd = new MySQLConnection();
         $comando = $bd->prepare('INSERT INTO genero(nome) VALUES(:nome)');
         $comando->execute([':nome' => $_POST['nome']]);

         header('location:/index.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Gênero</title>
</head>
<body>
    <a href="insert.php">Novo Gênero</a>
    <h1>Novo Gênero</h1>
    <form action="insert.php" method="post">
        <label for="nome">Nome do Gênero</label>
        <input type="text" required name="nome" />
        <button type="submit">Salvar</button>
    </form>
</body>
</html>