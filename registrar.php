<?php
include ("conect.php");
if (isset($_POST['enviar'])){
    if (strlen($_POST['txt_nombre']) >= 1 &&
    strlen($_POST['txt_dirrecion']) >= 1 &&
    strlen($_POST['txt_telefono']) >= 1){
        $nombre=trim($_POST['txt_nombre']);
        $dirrecion=trim($_POST['txt_dirrecion']);
        $telefono=trim($_POST['txt_telefono']);

        $consulta = "INSERT INTO datos(nombre, dirrecion, telefono) VALUES ('$nombre','$dirrecion','$telefono')";
        $resultado = mysqli_query($conex,$consulta) or die ("error de conexion");
        if ($resultado){
            ?>
            <h3 class="ok">!te has inscrito correctamnete!</h3>
            <?php
        }
    }

}

?>
