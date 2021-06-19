<?php
    if(isset($_POST['submit2']))
    {
        include_once('config2.php');

       $email2 =$_POST['email2'];
       $senha2 =$_POST['senha2'];

       $result = mysqli_query($conexao, "INSERT INTO usuario2(email2,senha2) VALUES ('$email2','$senha2')");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div>
        <h1>Login</h1>
        <form action="registro.php" method="post">
        <input type="text" name="email2" placeholder="Email">
        <br><br>
        <input type="password" placeholder="Senha">
        <br><br>
        <input type="submit" id="submit2" name="submit">
        </form>
    </div>
</body>
</html>