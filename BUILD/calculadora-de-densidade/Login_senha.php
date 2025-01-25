<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login']; 
    $senha = $_POST['senha']; 

    $login_correto = "222000222";
    $senha_correta = "123456789";

    if ($login == $login_correto && $senha == $senha_correta) {
        $mensagem = "Usuário Autenticado com Sucesso";
    } else {
        
        $mensagem = "Falha na autenticação";
    }
} else {
    
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Autenticação</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #3498db; 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff; 
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        a {
            display: block;
            margin-top: 20px;
            text-decoration: none;
            color: #3498db; 
        }
    </style>
</head>
<body>
    <div class="container">
        <h2><?php echo $mensagem; ?></h2>
        <a href="ex2.html">Voltar para o formulário de login</a>
    </div>
</body>
</html>

?>