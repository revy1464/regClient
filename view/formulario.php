<?php include("../view/includes/header.php");
include("../Metodos.php");


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
        <div><button onclick="flotante(1)"> Mostrar Datos</button></div>
    </div>
    <!-Pantalla flotante ->
        <div id="contenedor" style="display:none">
            <div id="flotante">
                <div>
                    <?php $consulta = new Metodos(); ?>
                    <table class="egt">
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>TDoc</th>
                            <th>Numero Documento</th>
                            <th>Telefono</th>
                            <th>Correo</th>
                        </tr>
                        <?php
                        if (isset($_SESSION['correo'])) {
                            $Clientes = $consulta->getClientbyCorreo($_SESSION['correo']);
                            if ($Clientes != null) {
                                foreach ($Clientes as $Cliente) {
                        ?>
                                    <tr>
                                        <td><?php echo $Cliente['nombre'] ?></td>
                                        <td><?php echo $Cliente['apellido'] ?></td>
                                        <td><?php echo $Cliente['tipo_documento'] ?></td>
                                        <td><?php echo $Cliente['numero_documento'] ?></td>
                                        <td><?php echo $Cliente['telefono'] ?></td>
                                        <td><?php echo $Cliente['correo'] ?></td>
                                    </tr>
                        <?php
                                }
                            }
                        }
                        ?>
                    </table>
                </div>
                <div>
                    <button onclick="flotante(2)">Ok</button>
                </div>
            </div>
            <div id="fondo">
                <h1>este es el fondito</h1>
            </div>
        </div>
    <?php

} else {
    header('Location: ../../regClient');
}
    ?>
    <?php include("../view/includes/footer.php") ?>