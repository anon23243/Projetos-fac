<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['fmatricula']; 
    $senha = $_POST['fsenha']; 

    $login_correto = "23109452";
    $senha_correta = "161257";

    if ($login == $login_correto && $senha == $senha_correta) {
        $mensagem =  "Usuário Autenticado com Sucesso";
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
        .a {
            display: block;
            margin-top: 20px;
            margin-bottom:10px;
            text-decoration: none;
            color: #3498db;
            transition:0.2s; 
            border-bottom:solid 2px;
            
        }

        .a:hover{

      color:black;


        }
        .mems{
margin-left: 0px;
margin-top: 30px;
height:50px ;
width: 150px;
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
text-decoration:none;


font-family: "helvetica";
font-weight: 600;
cursor: pointer;

    
}

.mems:hover{

color:rgb(29, 29, 29);

border-color:rgb(29, 29, 29)











}
    </style>
</head>
<body>
    
  
   
   
    <div class="container">
    
        <?php  
        if($mensagem =='Usuário Autenticado com Sucesso'){

          echo  '<img src="R.png" style="width:200px; border-radius:50%; height:200px; margin-bottom:25px;">';
        }
         else{
            echo  '<img src="bad.png" style="width:200px; border-radius:50%; height:200px; margin-bottom:25px;">';

         }
        


    ?>
    <h2>
        <?php echo $mensagem; 
         ?>
    </h2>
        <a class="mems" href="AVAformadora2.php">Voltar para o formulário de login</a>
    </div>
</body>
</html>

