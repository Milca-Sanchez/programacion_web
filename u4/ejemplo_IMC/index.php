<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>IMC</title>
  <link rel="stylesheet" href="estilo.css">
</head>
<body>
  <div class="formulario ancho">
    <form action="calcular.php" method="post">
      <h2 class="centrar ancho margen">Ingresa la siguiente información para calcular tu IMC.</h2>
      <br>
      <div class="elementos_formulario margen">
        <div class="peso">
          <input type="text" name="peso" placeholder="Ingresa tu peso" class="campos">
          <span>kg</span>
        </div>
        <div class="altura">
          <input type="text" name="altura" placeholder="Ingresa tu altura" class="campos">
          <span>mts</span>
        </div>
        <br>
        <button id="btn_validar" class="boton" type="submit">Calcular</button>
        <br>
      </div>
    </form>
  </div>
</body>
</html>
