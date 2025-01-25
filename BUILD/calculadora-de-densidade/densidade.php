<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $massa = $_POST["massa"];
  $volume = $_POST["volume"];

  $massa_kg = $massa / 1000;
  $volume_m3 = $volume / 1000000;

  $densidade = $massa_kg / $volume_m3;

  echo "<div style='background-color: #3498db; width: 100%; height: 100vh; display: flex; justify-content: center; align-items: center;'>";
  echo "<div style='background-color: white; padding: 20px; border-radius: 10px; width: 300px;'>";
  echo "<h1 style='text-align: center; color: #3498db;'>Resultado</h1>";
  echo "<p style='text-align: center; color: #3498db;'>A densidade é: " . number_format($densidade, 2) . " kg/m³</p>";
  echo "<a href='ex3.html' style='display: block; text-align: center; color: #3498db; text-decoration: none;'>Voltar</a>";
  echo "</div>";
  echo "</div>";
}
?>