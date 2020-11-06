<?php include("../view/includes/header.php");
include("../Metodos.php");

if (!isset($_SESSION)) {
    session_start();
}
?>
<div class="container">
    <h1>Hola <?php echo  $nuevo = empty($_SESSION['correo']) ? "Invitado" : $_SESSION['nombre']; ?></h1>
    <div>Ingrese sus datos personales</div>
    <form action="../controller/registrar.php" method="post">
        <div><input type="text" name="nombre" id="" placeholder="Nombre" required pattern="[A-Za-z\s]{3,40}"></div>
        <div><input type="text" name="apellido" id="" placeholder="Apellido" required pattern="[A-Za-z\s]{3,40}"></div>
        <div>
            <select name="tipo_documento" id="">
                <option value="CC">Cedula</option>
                <option value="NIT">Nit</option>
                <option value="TI">Tarjeta de identidad</option>
            </select>
        </div>
        <div><input type="text" name="ndocumento" id="" placeholder="Numero de Documento" required pattern="[0-9]{7,40}"></div>
        <div><input type="text" name="telefono" id="" placeholder="Teléfono" required pattern="[0-9]{7,10}"></div>
        <div>
            <input type="email" name="correo" id="" placeholder="Correo" required value=<?php echo  empty($_SESSION['correo']) ? "" : $_SESSION['correo']; ?> <?php echo  empty($_SESSION['correo']) ? "" : "readonly"; ?>>
        </div>
        <div><input type="password" name="contraseña" id="" placeholder="Ingresa una contraseña" required></div>
        <div>
            <input type="submit" value=<?php echo  empty($_SESSION['correo']) ? "Registrar" : "Modificar"; ?>>
        </div>
    </form>
    <div><button onclick="flotante(1)"> Mostrar Datos</button></div>
</div>
<!-Pantalla flotante ->
    <div id="contenedor" style="display:none">
        <div id="flotante">
            <div>
                <?php $consulta = new Metodos(); ?>
                <table>
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
            <div style="align-items:center">
                <button onclick="flotante(2)">Ok</button>
            </div>
        </div>
        <div id="fondo">
            <h1>este es el fondito</h1>
        </div>
    </div>
    <?php/*

    } else {
        header('Location: ../../regClient');
    }
    */?>
    <div style="text-align: right;">
        <?php echo  empty($_SESSION['mensaje']) ? "" : $_SESSION['mensaje']; ?>
    </div>
    <?php include("../view/includes/footer.php") ?>