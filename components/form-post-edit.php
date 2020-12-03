<form action="guardar.php" method="post">
    <div class="form-group">
        <label for="titulo">Título</label>
        <input type="text" readonly="readonly" class="form-control" id="title" name="title" value="<?= $_GET['nombre'];?>">
    </div>
    <div class="form-group">
        <label for="post">Descripción</label>
        <input type="textarea" class="form-control" id="description" name="description" value="<?= edit_post($_GET['nombre']);?>">
    </div>
    <div class="form-group">
        <input type="submit" value="Guardar">
    </div>
</form>