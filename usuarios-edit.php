<?php
session_start();

if (!isset($_SESSION['login']) || $_SESSION['login'] != "OK") {
    require_once('librerias/cabezera.php');
} else {
    if ($_SESSION['id_nivel'] == 1) {
        require_once('librerias/cabezera-admin.php');
    } else if ($_SESSION['id_nivel'] == 2) {
        require_once('librerias/cabezera-user.php');
    }
}

require_once('librerias/conexionBD.php');

$sql = "select * from nivel";
$result =  $conn->query($sql);
$nivel = array();
while ($fila =  $result->fetch_array()) {
  $nivel[] = $fila;
}

$id = 0;
$usuario = '';
$password = '';
$id_nivel = '';

/*para editar*/
if (isset($_GET['id'])) {
  require_once('librerias/conexionBD.php');
  $sql = "select * from usuarios where id = " . $_GET['id'];
  $result = $conn->query($sql);
  $fila = $result->fetch_array();

  $id = $fila['id'];
  $usuario = $fila['usuario'];
  $password = $fila['password'];
  $id_nivel = $fila['id_nivel'];
}


?>

    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1><?php echo ($id > 0) ? 'Editar' : 'Nuevo'; ?> usuario</h1>
          <form action="usuarios-procesa.php" method="post">
            <div class="form-group">
              <input type="hidden" name="id" value="<?php echo $id; ?>">
              <label for="">Usuario</label>
              <input type="text" name="usuario" value="<?php echo $usuario; ?>" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Password</label>
              <input type="text" name="password" value="<?php echo $password; ?>" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Nivel</label>
              <select name="id_nivel" class="form-control">
                <option value="">-- Seleccione --</option>
                <?php foreach ($nivel as $item) :
                  if ($item['id'] == $id_nivel) {
                ?>
                    <option value="<?= $item['id'] ?>" selected><?= $item['descripcion'] ?> </option>
                  <?php
                  } else {
                  ?>
                    <option value="<?= $item['id'] ?>"><?= $item['descripcion'] ?></option>

                <?php
                  }

                endforeach ?>
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
            <a href="usuarios.php"><input type="button" class="btn btn-danger" value="Cancelar"></a>
          </form>
        </div>
      </div>
    </div>

  
<?php
 require_once('librerias/pie.php');
?>