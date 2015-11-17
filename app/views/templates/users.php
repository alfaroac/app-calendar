<div class="col-lg-12">
	<div class="input-group">
	  <input type="text" class="form-control" placeholder="Buscar">
	  <span class="input-group-btn glyphicon glyphicon-search">
	    <button class="btn btn-default" type="button">Buscar</button>
	  </span>
	</div>
</div>


<br><br>
<div class="" id="users" >
  <table class="table table-striped table-condenced table-hover">
    <tr>
      <th>Usuario</th>
      <th>Nombres</th>
      <th>Apellidos</th>
      <th>DNI</th>
      <th>Sexo</th>
      <th>Direccion</th>
      <th>Telefono</th>
      <th>Correo</th>
      <th>Estado</th>
      <th>Imagen</th>
      <th>Rol</th>
      <th>Opciones</th>
    </tr>

  <?php
    include('../../model/conexion.php');
    $registro=mysql_query('SELECT * FROM users ORDER BY IdUsers ASC');
    while ($registro2=mysql_fetch_array($registro)) {
    echo '<tr>
      <td>'.$registro2['username'].'</td>
      <td>'.$registro2['name'].'</td> 
      <td>'.$registro2['lastname'].'</td>      
      <td>'.$registro2['dni'].'</td> 
      <td>'.$registro2['sex'].'</td> 
      <td>'.$registro2['address'].'</td>
      <td>'.$registro2['telephone'].'</td>
      <td>'.$registro2['email'].'</td>  
      <td>'.$registro2['state'].'</td>
      <td>'.$registro2['image'].'</td> 
      <td>'.$registro2['role'].'</td> 
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
            <form name="fe" action="controller/php/add_users.php" class="form-horizontal" method="post">
				<fieldset ><!--disabled--> 
				
				<div class="form-group has-success">
					<label for="usuario" class="control-label col-md-3">Usuario:</label>
					<div class="col-md-8">
						<input type="text" class="form-control" id="usuario" name="usuario"  placeholder="Usuario"><!--value="<?php //echo $var?>"-->
					</div>
				</div>
				<div class="form-group has-warning">
					<label for="password" class="control-label col-md-3">Contraseña:</label>
					<div class="col-md-8">
						<input type="password" class="form-control" id="password1" name="password" placeholder="Password">
					</div>
				</div>
				<div class="form-group has-warning">
					<label for="password" class="control-label col-md-3">Contraseña:</label>
					<div class="col-md-8">
						<input type="password" class="form-control" id="password2" name="password" placeholder="Repeat Password">
					</div>
				</div>
				<div class="form-group has-success">
					<label for="nombre" class="control-label col-md-3">Nombre:</label>
					<div class="col-md-8">
						<input type="text" class="form-control" id="nombre" name="nombre"  placeholder="Nombre">
					</div>
				</div>
				<div class="form-group has-success">
					<label for="apellidos" class="control-label col-md-3">Apellidos:</label>
					<div class="col-md-8">
						<input type="text" class="form-control" id="apellidos" name="apellidos"  placeholder="Apellidos">
					</div>
				</div>
				<div class="form-group has-success">
					<label for="dni" class="control-label col-md-3">DNI:</label>
					<div class="col-md-8">
						<input type="text" class="form-control" id="dni" name="dni"  placeholder="DNI">
					</div>
				</div>
				<div class="form-group has-success">
					<label for="sexo" class="control-label col-md-3">Sexo:</label>
					<div class="col-md-8">
						<select class="form-control" name="sexo" id="option">
							<option value="Masculino">Masculino</option>
							<option value="Femenino">Femenino</option>
						</select>
					</div>
				</div>
				<div class="form-group has-success">
					<label for="direccion" class="control-label col-md-3">Direccion:</label>
					<div class="col-md-8">
						<input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion">
					</div>
				</div>
				<div class="form-group has-success">
					<label for="telefono" class="control-label col-md-3">Telefono:</label>
					<div class="col-md-8">
						<input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono">
					</div>
				</div>
				<div class="form-group has-success">
					<label for="correo" class="control-label col-md-3">Correo:</label>
					<div class="col-md-8">
						<input type="text" class="form-control" id="correo" name="correo" placeholder="Correo" >
					</div>
				</div>
				
				<div class="form-group has-success">
					<label for="foto" class="control-label col-md-3">Foto:</label>
					<div class="col-md-8">
						<input type="file" class="form-control btn" id="foto" name="foto" placeholder="Foto">
					</div>
				</div>
				<div class="form-group has-success">
					<label for="rol" class="control-label col-md-3">Rol:</label>
					<div class="col-md-8">
						<input type="text" class="form-control" id="rol" name="rol" placeholder="Rol">
					</div>
				</div>
				<div class="form-group has-success">
			    	<label for="estado" class="control-label col-md-3">Estado</label>
			    		<div class="col-md-8">
			    			<div class="radio-inline">
			            	<label for="radio1"><input type="radio" name="estado" id="radio1" value="1" >Activo</label>
			            	</div>
			            	<div class="radio-inline">
			                <label for="radio2"><input type="radio" name="estado" id="radio2" value="0">Desactivo</label>
			        		</div>
			    		</div>            		
			    </div>
				<div class="form-group">			
					<div class="col-md-8 col-md-offset-2">
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





