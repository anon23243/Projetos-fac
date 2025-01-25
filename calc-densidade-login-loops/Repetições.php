<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Resultado</title>
<style>
    body {
        background-color:  #cccccc; 
        text-align: center;
    }
    .resultado {
        background-color: #FFFFFF; 
        padding: 20px;
        border-radius: 10px;
        margin-top: 20px;
        display: inline-block;
     
    }

    .mems{
margin-left: 0px;
margin-top: 30px;
height:50px ;
width: 10px;
background:#fff;
border-bottom:solid 2px;
border-top:none;
border-left:none;
border-right:none;
border-color: rgb(129, 129, 129);
opacity: 1;
position:relative;
color: #a8a8a8;
-webkit-transition: .2s ease-in-out ;
    -moz-transition: .2s ease-in-out ;
    -o-transition: .2s ease-in-out ;
    transition: .2s ease-in-out ;
  


font-family: "helvetica";
font-weight: 600;
cursor: pointer;

    
}

.mems:hover{

color:rgb(29, 29, 29);

border-color:rgb(29, 29, 29)


}

a:visited {
      text-decoration: none;
}

a:hover {
      text-decoration: none;
}

a:active {
      text-decoration: none;
}
</style>
</head>
<body>
<h1 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">RESULTADO</h1>
<div class="resultado" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["fnome"];
        $sobrenome = $_POST["fsobrenome"];
        $repeticoes = $_POST["floop"];

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
    <a  class="mems" style="text-decoration:none;"href="AVAformadora1.php">Voltar</a>
</div>

</body>
</html>