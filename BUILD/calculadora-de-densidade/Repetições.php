<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Resultado</title>
<style>
    body {
        background-color:  #46a5c5; 
        text-align: center;
    }
    .resultado {
        background-color: #FFFFFF; 
        padding: 20px;
        border-radius: 10px;
        margin-top: 50px;
        display: inline-block;
    }
</style>
</head>
<body>

<div class="resultado">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $repeticoes = $_POST["repeticoes"];

        for ($i = 0; $i < $repeticoes; $i++) {
            if ($i % 2 == 0) {
                echo "<p>$nome</p>";
            } else {
                echo "<p>$sobrenome</p>";
            }
        }
    } else {
        echo "Erro ao processar o formulário.";
    }
    ?>
    <a href="ex1.html">Voltar</a>
</div>

</body>
</html>