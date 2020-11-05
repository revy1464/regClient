<?php include("../view/includes/header.php");


if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION['correo'])) {

?>

    <div>
        <h1>Hola <?php echo $_SESSION['nombre']; ?></h1>
        <div>Ingrese sus datos personales</div>
        <form action="../controller/registrar.php" method="post">
            <div><input type="text" name="nombre" id="" placeholder="Nombre"></div>
            <div><input type="text" name="apellido" id="" placeholder="Apellido"></div>
            <div>
                <select name="tipo_documento" id="">
                    <option value="CC">Cedula</option>
                    <option value="NIT">Nit</option>
                    <option value="TI">Tarjeta de identidad</option>
                </select>
            </div>
            <div><input type="text" name="ndocumento" id="" placeholder="Numero de Documento"></div>
            <div><input type="text" name="telefono" id="" placeholder="Telefono"></div>
            <div><input type="text" name="correo" id="" placeholder="Correo"></div>
            <div><input type="password" name="contraseña" id="" placeholder="Ingresa una contraseña"></div>
            <div><input type="password" name="contrasenaCheck" id="" placeholder="Verifica tu contraseña"></div>
            <div>
                <input type="submit" value="Registrar">
            </div>
        </form>
    </div>

<?php

} else {
    header('Location: ../../regClient');
}

?>

<?php include("../view/includes/footer.php") ?>