<?php
			$Nombre = $_POST['userName'];
			$Email = $_POST['userEmail'];
			$Tel = $_POST['userPhone'];
			$Mensaje = $_POST['userMsg'];

			$puerto= "localhost";
			$usuario = "root";
			$contraseña = "bautista";

			$conexion = mysql_connect($puerto, $usuario, $contraseña);
			mysql_select_db("tecnologiasweb",$conexion);
			$sql = "INSERT INTO contact(nombre,email,tel,mensaje) VALUES ('$Nombre', '$Email', '$Tel', '$Mensaje')";
			mysql_query($sql);

			header("location: contact.php");


?>