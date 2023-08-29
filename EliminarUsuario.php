<?php if (isset($_GET['si'])) {
    include "Conexion.php";
    $cedula = $_GET['ced'];
    $q = "DELETE FROM usuarios WHERE Cedula=$cedula";
    mysqli_query($conect, $q);
} else {
    include "Conexion.php";
    $cedula = $_GET['cedula'];
    $q = "SELECT * FROM usuarios WHERE Cedula=$cedula";
    $cami = mysqli_query($conect, $q);
    $vec = mysqli_fetch_array($cami);
?>

    <form action="">
        <div class="form-group">
            <label for="">Estás seguro que deseas eliminar al Usuario <?php echo $vec[1] ?>"</label>
            <input type="submit" name="si" class="form-control" placeholder="" aria-describedby="helpId" value="Si">
            <input type="text" value="<?php echo $_GET['cedula'] ?>" name="ced">
            <input type="reset" name="no" class="form-control" placeholder="" aria-describedby="helpId" value="No">
        </div>
    </form>
<?php
}
