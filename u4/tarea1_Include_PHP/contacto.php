<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contacto</title>
    <link rel="stylesheet" href="estilo.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
</head>
<body>
<?php 
    include ("arriba.php");
?>


    <!--CONTACTO-->
    <div class="request ancho margen centrar">
        <h1>Request now</h1>
    </div>

    <div class="certific ancho margen centrar">
        <p class="gift">Beautifully designed, print-ready massage gift certificate</p>
        <p class="leave">Leave your personal data, phone, select the desirable service <br> and suitable time. Leave a request and check the email.</p>
    </div>
<br><br>
    <div class="formulario ancho margen centrar">
        <form action="loquesea.html" method="get" id="formulario" name="formulario">
        
        <div class="izquierda">
            <input type="email" name="email"  id="email" placeholder="Enter your email:" class="campos">
            <br>            
            <input type="text" name="services" id="services" placeholder="Select services:" class="campos">
        </div>
        <div class="derecha">
            <input type="tel" name="telefono"  pattern="[0-9]{10}" placeholder="Enter your phone:" id="telefono" class="campos">
            <br>
            <input type="text" name="time" id="time" placeholder="Select time:" class="campos">
            </select>
        </div>
        <br><br>
        <button type="button" class="btn" id="enviar">Leave a Request</button>
    </form>
</div>

    <br><br>
<?php 
    include ("abajo.php");
?>


    </div>
    <script type="text/javascript">
                $("#enviar").click(function () {
            
                if (!$("#email")[0].checkValidity()) {
                    alert("Escribe corectamente tu email");
                    $("#email").focus();
                    return 0;  
                    }

                 //verifica que no esté vacio   
                if ($("#email").val().trim()=="") {
                    alert("Escribe tu email");
                    $("#email").focus();
                    return 0;  
                    }

                if (!$("#telefono")[0].checkValidity()) {
                    alert("Escribe corectamente un telefono");
                    $("#telefono").focus();
                    return 0;  
                    }  
                
                //verifica que no esté vacio 
                if ($("#telefono").val().trim()=="") {
                    alert("Escribe tu telefono");
                    $("#telefono").focus();
                    return 0;  
                    }
  
                //verifica que no esté vacio 
                if ($("#services").val().trim()=="") {
                    alert("Escribe tu servicio");
                    $("#services").focus();
                    return 0;  
                    }

                //verifica que no esté vacio 
                if ($("#time").val().trim()=="") {
                    alert("Escribe tu tiempo");
                    $("#time").focus();
                    return 0;  
                    }
                
                document.getElementById("formulario").submit();
                 
                });           
        </script>
</body>
</html>