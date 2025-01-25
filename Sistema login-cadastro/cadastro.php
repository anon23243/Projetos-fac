<html>


<?php

require('cadastrosql.php');
error_reporting(E_ALL ^ E_WARNING);


?>

    <style>

    html,body {
overflow:auto;
padding:0;
margin: 0;  

justify-content: center;
height: 100vh;
width:100%;
text-rendering: optimizeLegibility;






font-family: helvetica;
font-size:17px;
color:#8b8888;
font-weight: 600;


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

        img{ 


        }

.sneako{width:350px;
    height: 39px;
    border: none;
    outline: none;
    color: #505050;
    background: #FFFFFF;
    cursor: auto;
    position: relative;
    margin-top:-15px ;
    margin-left: 0px;
    
background-position: 8px 5px; 
  background-repeat: no-repeat;
  background-size: 20px 22px;
    padding: 3px 10px;
   
font-size:18px;
border-style: solid;
border-color: #d9d9d9;
border-width:none;
-webkit-transition: .1s ease-in-out border-color;
    -moz-transition: .1s ease-in-out border-color;
    -o-transition: .1s ease-in-out border-color;
    transition: .1s ease-in-out border-color;
    font-family: "helvetica";
font-weight: 200;

    z-index: 0;
    border-radius: 10000px; 
}

.sneako:focus{


    border-color: #504d4d;







    


}

.button-for-test:hover {
 background-color: #8585ad;

 
 

 
 
}
.mems{
margin-left: 0px;
margin-top: 40px;
height:50px ;
width: 160px;
background:#fff;
border-bottom:solid;
border-top:none;
border-left:none;
border-right:none;
border-color: #ffffff;
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

input:focus::placeholder {
  color: transparent;
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

.target {
    height:200px; width:200px; background-color:#fff; display:none; margin-top:1px; 
    border-radius:5px;
    box-shadow:1px 5px  15px 0px #818181;
    outline: none;
    
    
}


</style>
    <head>
        <script >
            
            function validaForm() {
                if(document.frm.fname.value.length  <= 15){
                alert("Insira um nome com pelo menos 15 linhas.")
                event.preventDefault()
                document.frm.fname.focus()
                return false
               }
               if(document.frm.username.value.length != 6){
                alert("O Login deve ter exatamente 6 digitos.")
                event.preventDefault()
                document.frm.username.focus()
                return false
                }
            
               if(document.frm.dtnasc.value == "" ){
                alert("indique sua Data de Nascimento.")
                event.preventDefault()
                document.frm.dtnasc.focus()
                return false
                }

                if(document.frm.mobilenumber.value.length <= 8 ||
                document.frm.mobilenumber.value.indexOf("21") == -1  
                ){
                    event.preventDefault()
                alert("O numero do celular está incorreto ou não está usando o DDD correto (+21).")
                document.frm.mobilenumber.focus()
                return false
                }

                if(document.frm.password.value.length <= 7 ){
                    event.preventDefault()
                alert("indique uma senha com 8 ou mais digitos ")
                document.frm.password.focus()
                return false
                }
                if(document.frm.password_confirm.value == "" ){
                    event.preventDefault()
                alert("Repita a mesma senha")
                document.frm.password_confirm.focus()
                return false
                }

                if(document.frm.password_confirm.value != document.frm.password.value){
                    event.preventDefault()
                alert("As senhas precisam ser identicas")
                document.frm.password_confirm.focus()
                return false
                }
                return true
            
               

            //o campo e-mail precisa de conter: "@", "." e não pode estar vazio
            if(document.frm.email.value.indexOf("@") == -1 ||
              document.frm.email.valueOf.indexOf(".") == -1 ||
              document.frm.email.value == "" ||
              document.frm.email.value == null) {
                alert("Por favor, indique um e-mail válido.")
                document.frm.email.focus()
                return false
            }
        }
        
        function clearinputs(){
     document.getElementById('mform').reset();
        }
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
        
        <script src="">
            
function checkUsernameAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'username='+$("#username").val(),
type: "POST",
success:function(data){
$("#username-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){
}
});
}
</script>
<script src="jquery-3.7.1.min.js">
    
function checkEmailAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'email='+$("#email").val(),
type: "POST",
success:function(data){
$("#email-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){
 event.preventDefault();
}
});
}

        </script>
    </head>
    


    


<body>
    <header style="height:50px; background-color:#111; margin:0; text-align:right;">
  <button class="button"  id="menu" type="button" style="display:block; margin-left:50px;" onclick="togglemenu()">MENU</button>
  <div class="target" id="menu2">
  </div>
  

    </header>

<div align="center" >
    <img src="images/cool.png"width="150" height="150" style="border-radius:50%;
position:relative;
margin-bottom: 30px;
margin-top:30px;">
<form  method="post" name="frm" id="mform" onsubmit="sucesso.php">
    <p>Nome completo</p>
     <input class="sneako" type="text" name="fname" id="fname" /></p>
     <p>Login</p>
     <input class="sneako" type="text" name="username" id="username" placeholder="Deve ter exatamente 6 caracteres" /></p>
     <input name="foo"type="radio" style="margin-left:12px;" value="masculino"/>Masculino</p> 
     <input type="radio" name="foo" value="feminino" />Feminino</p> 
    
     <p>Data de nascimento</p>
   <input class="sneako"  style="text-align:center"  type="date" name="dtnasc" id="dtnasc" /></p>
   <p>Celular</p>
   <input class="sneako" type="tel"  style="text-align:center; " name="mobilenumber" id="mobilenumber" placeholder="(+21)XX-XXXXXXXX" /></p>
   <p>Senha</p>
     <input class="sneako"type="password" name="password" id="password"  /></p>
     <p>Repita a Senha</p>
    <input class="sneako"type="password" name="password_confirm" id="password_confirm" /></p>
    <p>Email</p>
   <input class="sneako"type="email" name="email" id="email" onBlur="checkEmailAvailability()" /></p>
   <?php
   include('check_availability.php');
   


   ?>
   <br>
 
  
  <input class="button-for-test"type="submit" name="signup" value="Enviar" onclick="validaForm()"/><br>
  <a href="login.php">
  <button class="mems" type="button">Voltar para Login</button>
  </a>
  <button class="mems" type="button" onclick="clearinputs()">Limpar</button>


</div>
  </form>
</form>
</body>
</html>
