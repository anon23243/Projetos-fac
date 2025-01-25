<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema 1</title>
</head>
<style>
    * { margin: 0;
        padding:0;





       }

       a:link {
      text-decoration: none;
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
   body{

overflow:auto;



   }    
  .button{


   color:white; float:left; margin-top:0px; margin-right:0px; background-color:rgb(23, 23, 23);; border:none;
   transition:0.3s;
   width:100px;
   height:60px;
  cursor:pointer;


  }             
.button:hover{


background-color: gray;



}
.bunda{
position:relative;
align-items:center;
text-align:center;

}
input:focus{





}

a{

    color:white;
    

}
.centered-wrapper {
    position: relative;
    text-align: center;
}

.centered-content {
   
    vertical-align: middle;
}

input:focus::placeholder {
  color: transparent;
}
.baton{

    -webkit-transition: .2s ease-in-out background-color;
    -moz-transition: .2s ease-in-out background-color;
    -o-transition: .2s ease-in-out background-color;
    transition: .2s ease-in-out background-color;
    border:solid 1px; border-radius:15px; width:150px; height:30px; transition: 0.3s; background-color:black; color:white; margin-top:20px;
    cursor:pointer;

}
.baton:hover {
 background-color: #8585ad;
}
.mems{
margin-left: 0px;
margin-top: 30px;
height:50px ;
width: 150px;
background:#fff;
border-bottom:solid;
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
</style>


<header style="background-color:rgb(23, 23, 23); height:60px; padding:0px;  font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; ">
   <img src="download.png" style="border-radius:50%; height:50px; width: 60px; margin-top:5px; float:left; margin-left:10px; margin-right:10px">
   <a href="index.php">
   <button class="button" type="button">HOME</button></a>
   <button class="button">PROBLEMA 1</button>
   <a href="AVAformadora2.php">
   <button class="button">PROBLEMA 2</button></a>
   <a href="AVAformadora3.php">
   <button class="button">PROBLEMA 3</button></a>
   
   </header>

   <body class="centered-wrapper">
   <?php
 
   

 
 









   ?>
   <div class="centered-content">
   <h4 style="margin-top:20px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Problema 1</h4>  
   <h1 style="margin-top:20px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">REPETIDOR DE NOME E SOBRENOME</h1>
   <h4 style="margin-top:20px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Digite as informações conforme abaixo...</h4>
   <form   action="Repetições.php" method="POST">
   <input type="text"  name="fnome" placeholder="Nome" required autocorrect="off" spellcheck="false" autocomplete="off"  style="width:200px; height:35px; border-radius:20px; padding-left:10px; margin-top:50px;margin-bottom:0px;  border:solid 2px gray; background-color:white; text-align:left;  font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size:15px; "></input>
   <br>
   <input type="text"   name="fsobrenome"  placeholder="Sobrenome"  required style="width:200px; height:35px; border-radius:20px; padding-left:10px; margin-top:10px;margin-bottom:0px; border:solid 2px gray; background-color:white; text-align:left;  font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size:15px;  "></input>
   <br>
   <input type="text" name="floop"   placeholder="Numero de vezes em loop" required style="width:200px; height:35px; border-radius:20px; padding-left:10px; margin-top:10px;margin-bottom:0px; border:solid 2px gray; background-color:white; text-align:left;  font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size:15px;  "></input>

<br>   

<input type="submit" name="baton" class="baton"></input>

</form>

<a href="index.php">
        <button class="mems" type="button">Inicio</button></a>
        <?php
        
        
        
        
        
        
        
        
        
        
        ?>
        
</body>

</html>