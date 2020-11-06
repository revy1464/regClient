<?php
include("../view/includes/header.php");
include("../Metodos.php");

if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION['correo'])) {
    $consulta = new Metodos();
?>
    <div class="container">
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
                if($_SESSION['correo']=="admin@admin.com"){
                    $Clientes = $consulta->getClients();
                }else{
                    $Clientes = $consulta->getClientbyCorreo($_SESSION['correo']);
                }
                              
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

<?php
} else {
    header('Location: ../../regClient');
}
?>
<?php include("../view/includes/footer.php") ?>