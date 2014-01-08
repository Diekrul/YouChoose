<?php
    $fp = fopen('../DataBase/usuarios.txt', 'r');
	if ($fp) {
		while (($bufer = fgets($fp, 4096)) !== false) {
			$nombre = $bufer.split("~")[0];
			$clave = $bufer.split("~")[2];
			if($_POST['nombre']==$nombre && $_POST["clave"]==$clave){
				echo "asd";
				return 1;
			}
		}
		echo "~";
		return 1;
		if (!feof($gestor)) {
			echo "Error: fallo inesperado de fgets()\n";
		}
		fclose($fp);

	}
 ?>

