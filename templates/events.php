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
      <th>Titulo</th>
      <th>Descripcion</th>
      <th>Lugar</th>
      <th>Inicio</th>
      <th>Fin</th>
      <th>Tipo</th>
      <th>Opciones</th>
    </tr>

  <?php
    include('../conexion.php');
    $registro=mysql_query('SELECT * FROM events ORDER BY IdEvents ASC');
    while ($registro2=mysql_fetch_array($registro)) {
    echo '<tr>
      <td>'.$registro2['title'].'</td>
      <td>'.$registro2['description'].'</td>
      <td>'.$registro2['place'].'</td>
      <td>'.$registro2['start'].'</td>
      <td>'.$registro2['end'].'</td>
      <td>'.$registro2['type'].'</td>
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
					<label for="titulo" class="control-label col-md-3">Titulo:</label>
					<div class="col-md-8">
						<input type="text" class="form-control" id="titulo" name="titulo"  placeholder="Titulo"><!--value="<?php //echo $var?>"-->
					</div>
				</div>
				
				<div class="form-group">
					<label for="descripcion" class="control-label col-md-3">Descripcion:</label>
					<div class="col-md-8">
						<input type="text" class="form-control" id="descripcion" name="descripcion"  placeholder="Descripcion">
					</div>
				</div>
				<div class="form-group">
					<label for="lugar" class="control-label col-md-3">Lugar:</label>
					<div class="col-md-8">
						<input type="text" class="form-control" id="lugar" name="lugar"  placeholder="Lugar">
					</div>
				</div>
				<div class="form-group">
					<label for="inicio" class="control-label col-md-3">Inicio:</label>
					<div class="col-md-8">
						<input type="date" class="form-control" id="inicio" name="inicio"  placeholder="Inicio">
					</div>
				</div>
				<div class="form-group">
					<label for="fin" class="control-label col-md-3">Fecha fin:</label>
					<div class="col-md-8">
						<input type="date" class="form-control" id="fin" name="fin"  placeholder="Fecha fin">
					</div>
				</div>
				<div class="form-group">
					<label for="tipo" class="control-label col-md-3">Tipo:</label>
					<div class="col-md-8">
						<select class="form-control" name="tipo" id="tipo">
							<option value="Importante">Importante</option>
							<option value="Opcional">Opcional</option>
						</select>
					</div>
				</div>	
				<div class="form-group">
					<label for="usuario" class="control-label col-md-3">Usuario:</label>
					<div class="col-md-8">
						<select class="form-control" name="usuario" id="usuario">
							<option value="1">Miguel</option>
							<option value="3">Javier</option>
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
