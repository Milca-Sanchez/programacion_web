<?php 
  $peso = $_POST["peso"]; //varible $peso
  $altura = $_POST["altura"];  

  $imc = $peso / ($altura * $altura);

  echo "<b>Tu IMC es:</b>".$imc."<br><br>";

  if ($imc > 40) {
    echo "<h3 class='diagnostico'>Problema de OBESIDAD III</h3>";
  } elseif ($imc > 34.99) {
    echo "<h3 class='diagnostico'>Problema de OBESIDAD II</h3>";
  } elseif ($imc > 29.99) {
    echo "<h3 class='diagnostico'>Problema de OBESIDAD I</h3>";
  } elseif ($imc > 24.99) {
    echo "<h3 class='diagnostico'>Problema de SOBREPESO</h3>";
  } elseif ($imc > 18.49) {
    echo "<h3 class='diagnostico'>Peso SALUDABLE</h3>";
  } else {
    echo "TE ENCUENTRAS POR DEBAJO DE LOS PARAMETROS NORMALES:(";
  } 
?>
