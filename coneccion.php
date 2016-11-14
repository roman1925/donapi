<?php
		$link = new mysqli("localhost", "root", "bautista", "tecnologiasweb");


			/* comprobar la conexión */
			if ($link->connect_errno)
			{
			    echo "Falló la conexión ".$link->connect_error."<br/>";
			    exit();
			}



	?>