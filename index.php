<?php include("view/includes/header.php") ?>

<div class="container">
    <div>Iniciar Sesion</div>
    <form action="controller/login.php" method="post">
        <div><input type="email" name="email" id="" placeholder="Ingrese Correo"></div>
        <div><input type="password" name="password" id="" placeholder="Contraseña"></div>
        <div> <input type="submit" value="Ingresar"></div>
    </form>
</div>
<?php include("view/includes/footer.php") ?>