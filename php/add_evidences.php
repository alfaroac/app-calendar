<?php //conexion a la base de datos
		$con=mysqli_connect("localhost","root","","agendaugel");
		if (mysqli_connect_errno()) {
			# code...
			echo "no se pudo conectar a la base de datos".mysqli_connect_error();
		}
		//opteniendo los valores del formulario
		$description=mysqli_real_escape_string($con, $_POST["description"]);
		$file=mysqli_real_escape_string($con, $_POST["file"]);
		//insertando los valores del formulario en la bd
		$sql = "INSERT INTO evidences (description, file) VALUES ('$description', '$file')";

		if (!mysqli_query($con,$sql)) {
			# code...
			die('Error: '.mysqli_error($con));
		}else{
			echo "Registro exitoso!";
		}
?>