<!DOCTYPE html>

<?php
session_start();
if(isset($_POST['votar'])){
    header("Location: Voto.php");
}else if(isset($_POST['salir'])) {
    session_destroy();
    header("Location: Login.php");
}
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
                
                <label for="internet">Internet Comunitario: </label>
                <input type="radio" name="internet" id="idioma" checked value="sí">Sí
                <input type="radio" name="internet" id="idioma" value="no">No
                <br>
                <br>
                <label for="jardineria[]">Empresa de jardineria: </label><br>
                <input type="checkbox" name="jardineria[]" id="jardineria[]" value="Empresa1">Empresa1 (2500€)<br>
                <input type="checkbox" name="jardineria[]" id="jardineria[]" value="Empresa2">Empresa2 (2460€)<br>
                <input type="checkbox" name="jardineria[]" id="jardineria[]" value="Empresa3">Empresa3 (2300€)<br>
                <br>
                <label for="mantenimiento">Empresa de mantenimiento: </label>
                <br>
                <select name="mantenimiento">
                    <option value="EmpresaA">EmpresaA (3280€)</option>
                    <option value="EmpresaB">EmpresaB (2420€)</option>
                    <option value="EmpresaC">EmpresaC (3700€)</option>
                </select>
                <br><br>
                <input type="button" name="votar" id="votar" value="Votar">
                <input type="button" name="salir" id="salir" value="Salir">
            </div>
        </form>
    </body>
</html>