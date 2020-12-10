<?php
session_start();
/*
if (!isset($_SESSION['login']) || $_SESSION['login'] != "OK") {
    require_once('librerias/cabezera.php');
} else {
    if ($_SESSION['id_nivel'] == 1) {
        require_once('librerias/cabezera-admin.php');
    } else if ($_SESSION['id_nivel'] == 2) {
        require_once('librerias/cabezera-user.php');
    }
}*/

require_once('librerias/conexionBDD.php');

$sql = "SELECT U.ID_USUARIO, U.USUARIOS, D.ID_DOC, U.PASSWORD,R.ID_ROL
        FROM usuarios U,doctores D, roles R
	        WHERE U.ID_DOC = D.ID_DOC AND U.ID_ROL = R.ID_ROL";
$result =  $conn->query($sql);
$usuarios = array();
while ($fila =  $result->fetch_array()) {
    $usuarios[] = $fila;
}

require_once('librerias/cabecera.php');
?>
<!-- contenido central -->
<!--  -->
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Usuarios</h1>
            <p>
                <a href="usuarios-edit.php" class="btn btn-success">Nuevo</a>
            </p>
            <table class="table table-striped">
                <tr class="text-light">
                    <th>Id</th>
                    <th>Usuario</th>
                    <th>Doctor</th>
                    <th>password</th>
                    <th>rol</th>
                    <th></th>
                </tr>
                <?php foreach ($usuarios as $item) : ?>
                    <tr>
                        <td><?= $item['ID_USUARIO'] ?></td>
                        <td><?= $item['USUARIO'] ?></td>
                        <td><?= $item['ID_DOC'] ?></td>
                        <td><?= $item['PASSWORD'] ?></td>
                        <td><?= $item['ID_ROL'] ?></td>
                        <td>
                            <a href="usuarios-edit.php?ID_USUARIO=<?php echo $item['ID_USUARIO'] ?>" class="btn btn-primary">Editar</a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                Eliminar
                            </button>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body letras">
                ¿Estas seguro de eliminar el registro?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                <a href="usuarios-elim.php?ID_USUARIO=<?php echo $item['ID_USUARIO'] ?>" class="btn btn-danger">Eliminar</a>
            </div>
        </div>
    </div>
</div>
<?php
require_once('librerias/pie.php');
?>