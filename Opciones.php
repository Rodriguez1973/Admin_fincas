<!DOCTYPE html>

<?php
require_once 'Idioma.php';

session_start();
if (isset($_POST['votar'])) {
    $_SESSION['internet'] = $_POST['internet'];
    $_SESSION['jardineria'] = $_POST['jardineria'];
    $_SESSION['mantenimiento'] = $_POST['mantenimiento'];
    header("Location: Voto.php");
} else if (isset($_POST['salir'])) {
    session_destroy();
    header("Location: Login.php");
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
        <form name="formulario_opciones" id="formulario_opciones" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div id="contenedor_opciones">
                <h1><?php echo $idioma[$_SESSION['idioma']][0] . " " . $_SESSION['usuario']; ?></h1>
                <!--Internet comunitario-->
                <label for="internet"><?php echo $idioma[$_SESSION['idioma']][1]; ?></label>
                <input type="radio" name="internet" id="internet" 
                <?php
                //Chequeo
                if ((!isset($_SESSION['internet'])) || (isset($_SESSION['internet']) && $_SESSION['internet'] === $idioma[$_SESSION['idioma']][2])) {
                    echo "checked";
                }
                ?> value="<?php echo $idioma[$_SESSION['idioma']][2]; ?>">
                <?php echo $idioma[$_SESSION['idioma']][2];?>
                <input type="radio" name="internet" id="internet"
                <?php
                //Chequeo
                if ((isset($_SESSION['internet']) && $_SESSION['internet'] === $idioma[$_SESSION['idioma']][3])) {
                    echo "checked";
                }
                ?> value = "<?php echo $idioma[$_SESSION['idioma']][3];?>">
                <?php echo $idioma[$_SESSION['idioma']][3];?>
                <br>
                <br>
                <!--Empresa de jardinería-->
                <label for="jardineria[]"><?php echo $idioma[$_SESSION['idioma']][4]; ?></label><br>
                <?php
                foreach ($idioma[$_SESSION['idioma']]['jardineria'] as $clave1 => $valor) {
                    echo "<input type='checkbox' name='jardineria[]' id='jardineria[]' value='".$clave1."'";
                    //Si está establecida la variable de sesión la chequea si es preciso.
                    if(isset($_SESSION['jardineria'])){
                        foreach ($_SESSION['jardineria'] as $clave2) {
                            if($clave1===$clave2){
                                echo "checked";
                            }
                        }
                    }
                    echo ">". $clave1 ." (".$valor.")";
                    echo "<br>";
                }
                ?>
                <br>
                <!--Empresa de mantenimiento-->
                <label for="mantenimiento"><?php echo $idioma[$_SESSION['idioma']][5]; ?></label>
                <br>
                <select name="mantenimiento">
                <?php
                    foreach ($idioma[$_SESSION['idioma']]['mantenimiento'] as $clave => $valor) {
                        echo "<option value='".$clave."'";
                    //Si está establecida la variable de sesión la chequea si es preciso.
                    if(isset($_SESSION['mantenimiento'])){
                        if($_SESSION['mantenimiento']===$clave){
                            echo "selected";
                        }
                    }
                    echo ">" . $clave ." (".$valor.")</option>";
                }
                ?>
                </select>
                <br><br>
                <input type="submit" name="votar" id="votar" value="<?php echo $idioma[$_SESSION['idioma']][6]; ?>">
                <input type="submit" name="salir" id="salir" value="<?php echo $idioma[$_SESSION['idioma']][7]; ?>">
            </div>
        </form>
    </body>
</html>