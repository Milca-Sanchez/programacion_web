<?php 
  $carrera    = $_POST["carrera"];
  $semestre   = $_POST["semestre"];
  $materia    = $_POST["materia"];
  $comentarios= $_POST["comentarios"];

  
  if ($carrera == "sistemas") {
    $carrera = "Ing. Sistemas";
  } elseif ($carrera == "docencia") {
    $carrera = "Docencia";
  } elseif ($carrera == "contaduria") {
    $carrera = "Contaduría";
  } elseif ($carrera == "gastronomia") {
    $carrera = "Gastronomía";
  } elseif ($carrera == "psicologia") {
    $carrera = "Psicología";
  } else {
    $carrera = "SIN SELECCIÓN";
  } 

  if ($semestre === "")    { $semestre = "vacío"; }
  if ($materia === "")     { $materia = "vacío"; }
  if ($comentarios === "") { $comentarios = "vacío"; }


  //echo "<b>Formulario guardado:</b><br><br>";
  //echo "Carrera: " . $carrera . "<br>";
  //echo "Semestre: " . $semestre . "<br>";
  //echo "Materia: " . $materia . "<br>";
  //echo "Comentarios: " . $comentarios . "<br>";


require "conexion.php";

$insertar = "INSERT INTO registros (carrera, semestre, materia, comentarios)
             VALUES ('$carrera', '$semestre', '$materia', '$comentarios')";

$query = mysqli_query($conectar, $insertar);

if ($query) {
    echo '
    <script>
        alert("SI SE GUARDO CORRECTAMENTE");
        location.href="index.php";
    </script>
    ';
} else {
    echo '
    <script>
        alert("NO SE GUARDO CORRECTAMENTE");
        location.href="index.php";
    </script>
    ';
}
?>
