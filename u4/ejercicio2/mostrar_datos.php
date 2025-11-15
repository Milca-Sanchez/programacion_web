<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio2</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <h2 class="ancho margen centrar">INSTITUTO TECNOLOGÍCO DE MÉRIDA</h2>
    <div class="ancho margen centrar logo">
        <img src="imagenes/logo_tec.png" alt="">
    </div>
    <div class="ancho margen contenedor_formulario">
            <h2 class="centrar roja">Registro Materias</h2>
            <br>
            <p class="centrar">Llene el siguiente formulario con los datos  para el registro de las carreras</p>
        <br>
    <div class="contenedor_elementos">
            <form action="recibir_info.php" method="post" name="formulario">
                <select name="carrera" class="campos" id="carrera" >
                        <option value="">Escoge tu carrera</option> 
                        <option value="sistemas">Ing. Sistemas</option>
                        <option value="docencia">Docencia</option>
                        <option value="contaduria">Contaduría</option>
                        <option value="gastronomia">Gastronomía</option>
                        <option value="psicologia">Psicología</option>
                </select>
                <br>
                <input type="text" name="semestre" id="semestre" placeholder="numero de semestre" class="campos" >
                <br>
                <input type="text" name="materia"id="materia"   placeholder="nombre de la materia" class="campos">
                <br>
                <textarea name="comentarios" id="enviar" placeholder="Dejanos tus comentarios" class="campos comentarios"></textarea>
        </div>
        <br>
            <button class="boton" type="submit">Guardar</button> 
        </form>
        <br>
        <br>

        <div class="contenedor">
            <button class="boton" type="submit">Registros</button> 
        </div>

            <?php 
                require"conexion.php";

                $datos 0 "SELECT * FROM registros ORDER BY id ASC";

                $resultado = mysql_query($conectar, $datos);

                if (mysql_num_rows($resultado) > 0)  { // al menos consultaste un dato
                    //mostrar datos

                    while ($fila = msqli_fetch_assoc ($resultado)) {
                        echo "ID : " + $fila["id"] + "<br>";
                    }
                }
                    else {
                        echo "<br> <p class='rojo'> no hay datos</p>"
                    }
            ?>


    </div>
</body>
</html>