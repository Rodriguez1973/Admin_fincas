<!DOCTYPE html>

<?php
session_start();

?>
<html>
    <head>
        <title>Administrador de fincas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/estilos.css"/>
    </head>
    <body>
        <form name="formulario_opciones" id="formulario_opciones" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <div id="contenedor_opciones">
                <h1>Bienvenido/a <?php echo $_SESSION['usuario'];?></h1>
                <p>Los datos que ha seleccionado son:</p>º
                <br>    
                <span>Internet Comunitario:</span><?php echo $_SESSION['internet'];?>
                <br>
                <span>Empresa de jardinería:</span>
                <br>
                <?php 
                    if(isset($_SESSION['jardineria'])){
                        foreach ($_SESSION['jardineria'] as $valor){
                            echo '-' . $valor;
                        }
                    }
                ?>
                <br>
                <span>Empresa de mantenimiento:</span>
                <br>
                <?php echo '-' . $_SESSION['mantenimiento'];?>
                <br>
                <input type="button" name="volver" id="volver" value="Volver">
            </div>
        </form>
    </body>
</html>