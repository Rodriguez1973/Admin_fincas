<!DOCTYPE html>

<?php
require_once 'Idioma.php';

session_start();
if(isset($_POST['volver'])){
    header("Location: Opciones.php");
}
?>
<html>
    <head>
        <title>Administrador de fincas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/Estilos.css"/>
    </head>
    <body>
        <form name="formulario_voto" id="formulario_voto" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div id="contenedor_voto">
                <h1><?php echo $idioma[$_SESSION['idioma']][0] . " " . $_SESSION['usuario']; ?></h1>
                <span id="datos"><?php echo $idioma[$_SESSION['idioma']][8];?></span>
                <br>
                <br>
                <span><?php echo $idioma[$_SESSION['idioma']][1];?> </span><?php echo $_SESSION['internet']; ?>
                <br>
                <br>
                <span><?php echo $idioma[$_SESSION['idioma']][4];?> </span>
                <br>
                <?php
                if (isset($_SESSION['jardineria'])) {
                    foreach ($_SESSION['jardineria'] as $valor) {
                        echo '- ' . $valor . '<br>';
                    }
                }else{
                    echo $idioma[$_SESSION['idioma']][9]. '<br>';
                }
                ?>
                <br>
                <span><?php echo $idioma[$_SESSION['idioma']][5];?></span>
                <br>
                <?php echo '- ' . $_SESSION['mantenimiento']; ?>
                <br>
                <br>
                <input type="submit" name="volver" id="volver" value="<?php echo $idioma[$_SESSION['idioma']][10];?>">
            </div>
        </form>
    </body>
</html>