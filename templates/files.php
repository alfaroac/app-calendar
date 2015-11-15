<div class="col-lg-13">
	<div class="input-group">
	  <input type="text" class="form-control" placeholder="Buscar">
	  <span class="input-group-btn glyphicon glyphicon-search">
	    <button class="btn btn-default" type="button">Buscar</button>
	  </span>
	</div>
</div>

<br>
<div class="" id="events" >
  <table class="table table-striped table-condenced table-hover">
    <tr>
      <th>Nombre</th>
      <th>Descripcion</th>
      <th>Fecha</th>
      <th>Institucion</th>
      <th>Opciones</th>
    </tr>

  <?php
    include('../conexion.php');
    $registro=mysql_query('SELECT * FROM files ORDER BY IdFiles ASC');
    while ($registro2=mysql_fetch_array($registro)) {
    echo '<tr>
      <td>'.$registro2['name'].'</td>
      <td>'.$registro2['description'].'</td>
      <td>'.$registro2['date'].'</td>
      <td>'.$registro2['IdInstitution'].'</td>
      <td><a href="#">Editar</a><a href="#">Delete</a></td>
    </tr>';
    }
  ?>
  </table>
<div>



<div>			
	<button type="submit" class="btn btn-info form-control" data-toggle="modal" data-target="#mimodal">
	    <span class="glyphicon glyphicon-plus-sign" aria-hidden="true">Agregar</span>
	</button>
</div>

<div class="modal fade" id="mimodal" tabindex="-1" role="dialog" aria-labelledby="mymodallabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">                    
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="col-sm-offset-4">Add Users</h3>
            </div>
           <form name="fe" action="../php/add_users.php" class="form-horizontal" method="post">
			
				<div class="form-group">
					<label for="nombre" class="control-label col-md-3">Nombre:</label>
					<div class="col-md-8">
						<input type="file" class="form-control" id="nombre" name="nombre"  >
					</div>
				</div>
				<div class="form-group">
					<label for="descripcion" class="control-label col-md-3">Descripcion:</label>
					<div class="col-md-8">
						<input type="text" class="form-control" id="descripcion" name="descripcion"  placeholder="Descripcion">
					</div>
				</div>
				<div class="form-group">
					<label for="fecha" class="control-label col-md-3">Fecha:</label>
					<div class="col-md-8">
						<input type="date" class="form-control" id="fecha" name="fecha"  placeholder="Fecha">
					</div>
				</div>
				<div class="form-group">
					<label for="institucion" class="control-label col-md-3">Institucion:</label>
					<div class="col-md-8">
						<select class="form-control" name="institucion" id="option">
							<option value="1">Miguel grau</option>
							<option value="1">Andres</option>
						</select>
					</div>
				</div>
				
				<div class="form-group">			
					<div class="col-md-8 col-md-offset-3">
						<input class="btn btn-primary" type="submit" name="btn1" value="Buscar">
						<input class="btn btn-primary" type="submit" name="btn1" value="Nuevo">
						<input class="btn btn-primary" type="submit" name="btn1" value="Agregar">
						<input class="btn btn-primary" type="submit" name="btn1" value="Eliminar">
					</div>
				</div>
				</fieldset>
			</form>
        </div>
    </div>
</div>



