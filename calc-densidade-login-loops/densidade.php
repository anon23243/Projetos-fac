<style>
  .mems{
margin-left: 75px;
margin-top: 30px;
height:30px ;
width: 150px;
background:#fff;
border-bottom:solid;
border-top:none;
border-left:none;
border-right:none;
border-color: rgb(129, 129, 129);
opacity: 1;
display:block;
color: #a8a8a8;
-webkit-transition: .2s ease-in-out ;
    -moz-transition: .2s ease-in-out ;
    -o-transition: .2s ease-in-out ;
    transition: .2s ease-in-out ;
    text-align: center; 
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
<body style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; " >
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $massa = $_POST["fmassa"];
  $volume = $_POST["fvolume"];

  $massa_kg = $massa / 1000;
  $volume_m3 = $volume / 1000000;

  $densidade = $massa_kg / $volume_m3;

  echo "<div style='background-color: #3498db; width: 100%; padding:0; margin:0; height:100%; display: flex; justify-content: center; align-items: center;'>";
  echo "<div style='background-color: white; padding: 20px; border-radius: 10px; width: 300px;'>";
  echo "<h1 style='text-align: center; color: black;'>Resultado</h1>";
  echo "<p style='text-align: center; color: black;'>A densidade é: " . number_format($densidade, 2) . " kg/m³</p>";
  echo "<a href='AVAformadora3.php' class='mems'>Voltar</a>";
  echo "</div>";
  echo "</div>";
}
?>
</body>
