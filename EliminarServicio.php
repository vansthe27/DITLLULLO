<?php if (isset($_GET['si'])) {
    include "Conexion.php";
    $cedula = $_GET['id'];
    $query = "DELETE FROM servicios WHERE Id=$id";
    mysqli_query($conect, $query);
} else {
    include "Conexion.php";
    $id = $_GET['id'];
    $q = "SELECT * FROM servucios WHERE Id=$id";
    $cami = mysqli_query($conect, $q);
    $vec = mysqli_fetch_array($cami);
?>

    <form action="">
        <div class="form-group">
            <label for="">Estas seguro que deseas eliminar el servicio <?php echo $vec[1] ?>"</label>
            <input type="submit" name="si" class="form-control" placeholder="" aria-describedby="helpId" value="Si">
            <input type="text" value="<?php echo $_GET['id'] ?>" name="id">
            <input type="reset" name="no" class="form-control" placeholder="" aria-describedby="helpId" value="No">
        </div>
    </form>
<?php
}
