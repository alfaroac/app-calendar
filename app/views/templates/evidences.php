
<div class="col-lg-12">
	<div class="input-group">
	  <input type="text" class="form-control" placeholder="Buscar">
	  <span class="input-group-btn glyphicon glyphicon-search">
	    <button class="btn btn-default" type="button">Buscar</button>
	  </span>
	</div>
</div>
<br><br>

<div class="evidences" id="add-evidences" >
  <table class="table table-striped table-condenced table-hover">
    <tr>
      <th>Id</th>
      <th>Descripción</th>
      <th>Archivos</th>
      <th>Opciones</th>
    </tr>

  <?php
    include('../../model/conexion.php');
    $registro=mysql_query('SELECT * FROM evidences ORDER BY IdEvidences ASC');
    while ($registro2=mysql_fetch_array($registro)) {
    echo '<tr>
      <td>'.$registro2['IdEvidences'].'</td>
      <td>'.$registro2['description'].'</td>
      <td>'.$registro2['file'].'</td>
      <td><a href="#">Editar</a><a href="#">Delete</a></td>
    </tr>';
    }
  ?>
  </table>
<div>

<div>			
	<button id="btn-agregar-evid" class="btn btn-info form-control">
	    <span class="glyphicon glyphicon-plus-sign">Agregar</span>
	</button>
</div>


<div class="modal fade" id="evidmodal" tabindex="-1" role="dialog" aria-labelledby="mymodallabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">                    
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="col-sm-offset-4">Add Evidences</h3>
            </div>
            
            <form id="formEvidences" ng-submit="guardaResgitro()" class="form form-horizontal" onsubmit="return modificaRegistro();">
			<div class="modal-body">				
				<div class="form-group">
					<label for="description"  class="control-label col-md-3">Descripcion:</label>
					<div class="col-md-8">
						<input type="text" required="required" maxlength="100" class="form-control" id="description" name="description"  placeholder="Descripcion"><!--value="<?php //echo $var?>"-->
					</div>
				</div>

				<div class="form-group">
					<label for="file" class="control-label col-md-3">Archivo:</label>
					<div class="col-md-8">
						<input type="file" class="form-control btn" id="file" name="file" >
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-8" id="mensaje"></div>
				</div>
			</div>
			<div class="modal-footer">
				<div class="form-group">			
					<div class="col-md-8 col-md-offset-3">
						<input class="btn btn-success" type="submit" name="submit" value="Agregar" id="addform">
						<input class="btn btn-primary" type="submit" name="btn1" value="Guardar" id="editform">
						<input class="btn btn-danger" type="submit" name="btn1" value="Cancelar" id="editform">
					</div>
				</div>
			</div>
			</form>
        </div>
    </div>
</div>

<div id="demo">Esto es un demo</div>
<script src="../js/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#demo").click(function(){
        $(this).hide();
    });
    $("#btn-agregar-evid").click(function() {
    	$("#demo").show();
    	$("#evimodal").show();
    });
});
</script>