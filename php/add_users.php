<?php //conexion a la base de datos
		$con=mysqli_connect("localhost","root","","agendaugel");
		if (mysqli_connect_errno()) {
			# code...
			echo "no se pudo conectar a la base de datos".mysqli_connect_error();
		}
		//opteniendo los valores del formulario

		$usuario=mysqli_real_escape_string($con, $_POST["usuario"]);
		$password=mysqli_real_escape_string($con, $_POST["password"]);
		$nombre=mysqli_real_escape_string($con, $_POST["nombre"]);
		$apellidos=mysqli_real_escape_string($con, $_POST["apellidos"]);
		$dni=mysqli_real_escape_string($con, $_POST["dni"]);
		$sexo=mysqli_real_escape_string($con, $_POST["sexo"]);
		$direccion=mysqli_real_escape_string($con, $_POST["direccion"]);
		$telefono=mysqli_real_escape_string($con, $_POST["telefono"]);
		$correo=mysqli_real_escape_string($con, $_POST["correo"]);
		$foto=mysqli_real_escape_string($con, $_POST["foto"]);
		$rol=mysqli_real_escape_string($con, $_POST["rol"]);
		$estado=mysqli_real_escape_string($con, $_POST["estado"]);


		//insertando los valores del formulario en la bd
		$sql = "INSERT INTO users (username, password,name,lastname,dni,sex,address,telephone, email, state,image, role) VALUES ('$usuario','$password','$nombre','$apellidos','$dni','$sexo','$direccion','$telefono','$correo','$estado','$foto','$rol') ";
		if (!mysqli_query($con,$sql)) {
			# code...
			die('Error: '.mysqli_error($con));
		}else{
			echo "Registro exitoso!";
		}
?>