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
      <th>Codigo</th>
      <th>Nombres</th>
      <th>Direccion</th>
      <th>Estado</th>
      <th>Opciones</th>
    </tr>

  <?php
    include('../../model/conexion.php');
    $registro=mysql_query('SELECT * FROM institution ORDER BY IdInstitution ASC');
    while ($registro2=mysql_fetch_array($registro)) {
    echo '<tr>
      <td>'.$registro2['code'].'</td>
      <td>'.$registro2['name'].'</td>      
      <td>'.$registro2['address'].'</td>
      <td>'.$registro2['state'].'</td>
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
				<fieldset ><!--disabled--> 
				<div class="form-group">
					<label for="codigo" class="control-label col-md-3">Codigo:</label>
					<div class="col-md-8">
						<input type="text" class="form-control" id="codigo" name="codigo" placeholder="Codigo">
					</div>
				</div>
				
				<div class="form-group">
					<label for="nombre" class="control-label col-md-3">Nombre:</label>
					<div class="col-md-8">
						<input type="text" class="form-control" id="nombre" name="nombre"  placeholder="Nombre">
					</div>
				</div>
				
				<div class="form-group">
					<label for="direccion" class="control-label col-md-3">Direccion:</label>
					<div class="col-md-8">
						<input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion">
					</div>
				</div>
				
				<div class="form-group" disabled>
					<label for="latitud" class="control-label col-md-3">Latitud:</label>
					<div class="col-md-8">
						<input type="text" class="form-control" id="latitud" name="latitud" placeholder="Latitud">
					</div>
				</div>
				<div class="form-group" disabled="true">
					<label for="longitud" class="control-label col-md-3">Longitud:</label>
					<div class="col-md-8">
						<input type="text" class="form-control" id="longitud" name="longitud" placeholder="Longitud">
					</div>
				</div>
				<div class="form-group ">
			    	<label for="estado" class="control-label col-md-3">Estado</label>
			    		<div class="col-md-8 has-success">
			    			<div class="radio-inline">
			            	<label for="radio1"><input type="radio" name="estado" id="radio1" value="1" >Activo</label>
			            	</div>
			            	<div class="radio-inline">
			                <label for="radio3"><input type="radio" name="estado" id="radio3" value="0">Desactivo</label>
			        		</div>
			    		</div>            		
			    </div>
				<div class="form-group ">			
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


