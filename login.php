<?php
session_start();

if (!isset($_SESSION['login']) || $_SESSION['login'] != "OK") {
    require_once('librerias/cabezera-login.php');
} else {
    if ($_SESSION['id_nivel'] == 1) {
        require_once('librerias/cabezera-admin.php');
    } else if ($_SESSION['id_nivel'] == 2) {
        require_once('librerias/cabezera-user.php');
    }
}
?>

<div class="container-center">
    <div class="row">
        <div class="col-sm-6 col-md-12 col-md-offset-4">
            <form class="login" action="login-procesa.php" method="post" autocomplete="off">
                <h1 class="login-title">Login</h1>
                <label for="" class="sr-only">Usuario</label>
                <input type="text" name="usuario" class="login-input" placeholder="Usuario" autofocus>
                <label for="" class="sr-only">Password</label>
                <input type="password" name="password" class="login-input" placeholder="Password">
                <button class="btn btn-lg btn-primary btn-block" style="background-color: #211C5C;" type="submit">Ingresar</button>
                <p class="login-lost"><a href="">Forgot Password?</a></p>
            </form>
        </div>
    </div>
</div>
<?php
require_once('librerias/pie.php');
?>