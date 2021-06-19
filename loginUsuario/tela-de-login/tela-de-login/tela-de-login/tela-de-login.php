<?php
    if(isset($_POST['submit']))
    {
        include_once('config.php');

       $nome =$_POST['nome'];
       $senha =$_POST['senha'];

       $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha) VALUES ('$nome' , '$senha')");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <h1>Login</h1>
        <form action="tela-de-login.php" method="post">
        <input type="text" name="nome" placeholder="Email">
        <br><br>
        <input type="password" placeholder="Senha">
        <br><br>
        <input type="submit" id="submit" name="submit">
        <br><br>
        <a href="registro.php">Registre-se</a>
        </form>
    </div>
</body>
</html>