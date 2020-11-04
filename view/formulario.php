<?php include("../view/includes/header.php") ?>
<div>
    <div>Ingrese sus datos personales</div>
    <form action="../controller/registrar.php" method="post">
        <div><input type="text" name="nombre" id="" placeholder="Nombre"></div>
        <div><input type="text" name="apellido" id="" placeholder="Apellido"></div>
        <div>
            <select name="" id="">
                <option value="CC">Cedula</option>
                <option value="NIT">Nit</option>
                <option value="TI">Tarjeta de identidad</option>
            </select>
        </div>
        <div><input type="text" name="ndocumento" id="" placeholder="Numero de Documento"></div>
        <div><input type="text" name="telefono" id="" placeholder="Telefono"></div>
        <div><input type="password" name="contrasena" id="" placeholder="Ingresa una contraseña"></div>
        <div><input type="password" name="contrasenaCheck" id="" placeholder="Verifica tu contraseña"></div>
        <div>
            <input type="submit" value="Registrar">
        </div>
    </form>
</div>
<?php include("../view/includes/footer.php") ?>