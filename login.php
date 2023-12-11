<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
        }
        body{   
        height: 100vh;
        width: 100%;
        background: linear-gradient(225deg, #F575D5, #7F3D6F, 
        #572A4B, #D164B6);
        color: white;
        }

        h1{
            font-weight: bolder;
            font-size: 40px;
            background: rgba(0, 0, 0, 0.6);
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
<?php 
    $login = $_REQUEST["login"];
    $password = $_REQUEST["senha"];

    $email = "teste@teste.com.br";
    $senha = "teste123";

    if($login == $email && $password == $senha )
    {
        //acessa o SISTEMA
    }else{
        header('location: loginerro.html');
    }
?>

<h1>Olá seja bem vindo ao sistema</h1>
</body>
</html>