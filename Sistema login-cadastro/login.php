<!DOCTYPE html>
<html>
<head>
    <?php
require('loginsql.php');


?>
<style>


html,body {
overflow:hidden;
padding:0;
margin: 0;  

justify-content: center;
height: 100vh;
width:100%;
text-rendering: optimizeLegibility;
background:#fffdfd




}







.button-for-test{width:300px;
    height: 50px;
    border: none;
    outline: none;
    color: #fff;
    background: #111;
    cursor: pointer;
    position: relative;
    margin-top: 20px;
    -webkit-transition: .2s ease-in-out background-color;
    -moz-transition: .2s ease-in-out background-color;
    -o-transition: .2s ease-in-out background-color;
    transition: .2s ease-in-out background-color;
    


    font-family: "helvetica";
font-weight: 600;



    z-index: 0;
    border-radius: 10000px;
    



}

.button-for-test:hover {
 background-color: #8585ad;

 
 

 
 
}




input[type=password]{width:270px;
    height: 29px;
    border: none;
    outline: none;
    color: #111;
    background: #FFFFFF;
    cursor: auto;
    position: relative;
    margin-top:15px ;
    margin-left: 0px;
   
background-position: 8px 5px; 
  background-repeat: no-repeat;
  background-size: 20px 22px;
    padding: 3px 35px;
    background-image:url(images/OIP.jpg);
font-size:20px;
border-style: solid;
border-color: #d9d9d9;
border-width:none;
-webkit-transition: .1s ease-in-out border-color;
    -moz-transition: .1s ease-in-out border-color;
    -o-transition: .1s ease-in-out border-color;
    transition: .1s ease-in-out border-color;


    z-index: 0;
    border-radius: 100px; 
}
img{ 

border-radius: 50%;
position:relative;
margin-bottom: 30px;
margin-top:30px






}

input[type=text]{width:270px;
    height: 29px;
    border: none;
    outline: none;
    color: #242424;
    background: #ffffff;
    cursor: auto;
    position: relative;
margin-top: 20px;
margin-left: 0px;
padding: 3px 35px;
font-family: "helvetica";
background-image:url(images/R.png);
-webkit-transition: .1s ease-in-out border-color;
    -moz-transition: .1s ease-in-out border-color;
    -o-transition: .1s ease-in-out border-color;
    transition: .1s ease-in-out border-color;
    

    text-decoration: none;
border-style: solid;
border-color: #d9d9d9;
border-width:none;

background-position: 5px 7px; 
  background-repeat: no-repeat;
  background-size: 24px 22px;
    font-size:17px;

    z-index: 0;
    border-radius: 100px; 
}

.centered-wrapper {
    position: relative;
    text-align: center;
}

.centered-content {
   
    vertical-align: middle;
}


.test{width:450px ;
    height: 560px;
   box-shadow:2px 2px 35px 1px #aaa8a8;
    outline: none;
    color: #444444;
    background: #FFFFFF;
    cursor: auto;
    position: relative;
    z-index:0;
    display:inline-block;
    vertical-align:center;
    


    margin: none;
    border-radius: 10px;

}

input[type=text]:focus{
    border-color: #504d4d;


   
  
}

input[type=password]:focus{
    border-color: #504d4d;


   
  
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
border-color: #ffffff;
opacity: 1;
position:relative;
color: #a8a8a8;


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
.ceo{




background-color:#111;
width: 100vh;
height: 50px;
position: relative;
}

@font-face {
    font-family:"Veramono";
    src: url(VeraMono-webfont.ttf);
}


.target {
    height:200px; width:200px; background-color:#fff; display:none; margin-top:1px; 
    border-radius:5px;
    box-shadow:1px 5px  15px 0px #818181;
    outline: none;
    
    
}
.button{


color:white;  margin-top:0px; margin-right:0px; background-color:rgb(23, 23, 23);; border:none;
transition:0.3s;
width:100px;
height:50px;
cursor:pointer;


}
.button:hover{


background-color: gray;
}



</style>
<script>
function togglemenu(){

var menubox = document.getElementById("menu2");
if (menubox.style.display == "none"){
    menubox.style.display = "block";
}
else {
    menubox.style.display = "none";
}
   }

</script>
</head>
<header style="height:50px; background-color:#111; margin-bottom:150px; text-align:right;">
    <button class="button"  id="menu" type="button" style="display:block; margin-left:50px;" onclick="togglemenu()">MENU</button>
    <div class="target" id="menu2">

<body class="centered-wrapper">
 
  

<div class="centered-content">
   


    </header>
    
    
    <div class="test">
        
      <img src="images/cool.png" width="200px" height="200px">  
    <form method="post" action="" id="loginform">
        
        <label for="fname"></label>
        
        <input type="text" id="username" name="username" placeholder="" required autocomplete="off">
        <input type="password" name="password" id="password" required>
                
 
    
        <button class="button-for-test"
        type="submit" name="login">Login</button>
        </form>
        <a href="cadastro.php">
        <button class="mems" type="button">Cadastre-se</button></a>        
</div>



</body>
</html>