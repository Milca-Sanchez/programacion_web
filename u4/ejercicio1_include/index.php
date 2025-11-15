<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGINA CON INCLUDE</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

<?php 
    include ("arriba.php");
?>
<br>
<?php 
    include ("menu.php");
?>
<br>
    <div class="texto ancho margen">
        <h2 class="titulo">INDEX INCLUDE</h2>
        <br> 
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum, quod facere. Delectus debitis id deserunt quam, architecto eos rem molestias.</p>
        <br>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda vero provident a reprehenderit ut enim, accusantium harum ex, eum nihil aut sed ipsam aliquid repudiandae ad quas, qui molestias omnis reiciendis quidem. Sapiente harum ipsam ipsa eaque cum amet quidem id ipsum consequuntur, quas iste eius maiores hic dolor totam ullam saepe consectetur laboriosam velit ex? Minima tempore illum corrupti, harum a debitis ipsam cumque aliquid blanditiis cupiditate sit architecto sapiente similique tempora autem ipsum optio distinctio quae officia dolorum eius reiciendis itaque, numquam inventore. Temporibus nostrum laboriosam quas expedita.
        </p>

    </div>
    <br>
    <br>

<?php 
    include ("abajo.php");
?>
</body>
</html>