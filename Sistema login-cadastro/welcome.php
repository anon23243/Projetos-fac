<?php
session_start();
include('config.php');
if(strlen($_SESSION['userlogin'])==0)
{
    header('location:index.php');
}
else{

// Validating Session
?>
<!DOCTYPE html>
<style>
.mems{
margin-left: 0px;
margin-top: 40px;
height:50px ;
width: 160px;
background:#f1f1f1;
border-bottom:solid;
border-top:none;
border-left:none;
border-right:none;
border-color: #c7c7c7;
opacity: 1;
position:relative;
color: #a8a8a8;
text-decoration: none;

font-family: "helvetica";
font-weight: 600;
cursor: pointer;
-webkit-transition: .3s ease-in-out color;
    -moz-transition: .3s ease-in-out color;
    -o-transition: .3s ease-in-out color;
    transition: .3s ease-in-out color;
    -webkit-transition: .3s ease-in-out border-color;
    -moz-transition: .3s ease-in-out border-color;
    -o-transition: .3s ease-in-out border-color;
    transition: .3s ease-in-out border-color;

    
}

.mems:hover{

color:rgb(129, 129, 129);

border-color:rgb(129, 129, 129)

}


</style>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PDO | Welcome Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
    <style type="text/css">
          .center {text-align: center; margin-left: auto; margin-right: auto; margin-bottom: auto; margin-top: auto;}
    </style>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="span12">
      <div class="hero-unit center">
<?php
// Code for fecthing user full name on the bassis of username or email.
$username=$_SESSION['userlogin'];
$query=$dbh->prepare("SELECT  FullName FROM userdata WHERE (UserName=:username || UserEmail=:username)");
      $query->execute(array(':username'=> $username));
       while($row=$query->fetch(PDO::FETCH_ASSOC)){
        $username=$row['FullName'];
       }
       ?>
          <h1>Olá <font face="Tahoma" color="red"><?php echo $username;?>  </font></h1>
          <br />
          <p>Infelizmente não deu tempo suficiente para completar todo o projeto e por isso estou mandando está mensagem!
            <br>
            Porem se está vendo esta mensagem o login foi feito com sucesso!
          </p>
          <br>
          <a href="logout.php" class="btn btn-large btn-info"><i class="icon-home icon-white"></i> Logout</a>
          <br>

          <a href="login.php">
            <button class="mems" type="button">Voltar para Login</button>
            </a>
        </div>
        
        <br />
       
      </div>
        <br />
        
    </div>
  </div>
</div>
<script type="text/javascript">
</script>
</body>
</html>
<?php } ?>