<!-- Nuevo producto -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Nuevo producto</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="agregar.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="codigo">Codigo:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="codigo" id="codigo">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="nombre">Nombre:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nombre" id="nombre" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="descripcion">Descripción:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" min="2" max="5" class="form-control" name="descripcion" id="descripcion" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="imagen" >Imagen: </label>
					</div>
					<div class="col-sm-10">
						<input type="" min="0" max="10" step="0.1" class="form-control" name="img" id="img">
					</div>
				</div>
        <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="categoria" >Categoría: </label>
					</div>
					<div class="col-sm-10">
						<select class="form-control" name="categoria" id="categoria">
              <option value=""></option>
              <option value="Textil">Textil</option>
              <option value="Promocional">Promocional</option>
            </select>
					</div>
				</div>
        <div class="row form-group">
          <div class="col-sm-2">
            <label class="control-label" for="precio">Precio:</label>
          </div>
          <div class="col-sm-10">
            <input type="number" class="form-control" name="precio" id="precio" required>
          </div>
        </div>
        <div class="row form-group">
          <div class="col-sm-2">
            <label class="control-label" for="existencias">Existencias:</label>
          </div>
          <div class="col-sm-10">
            <input type="number" min="0" class="form-control" name="existencias" id="existencias" required>
          </div>
        </div>
      </div>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Agregar</a>
			</form>
            </div>

        </div>
    </div>
</div>