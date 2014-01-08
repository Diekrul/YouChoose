<?php
    $fp = fopen('../DataBase/usuarios.txt', 'r');
	if ($fp) {
		$flag = false;
		while (($bufer = fgets($fp, 4096)) !== false) {
		    $valores = explode("~",$bufer);
			$usuario = $valores[0];
			$nombre = $valores[1];
			$clave = $valores[2];			
			if($_POST['nick']==$usuario && $_POST["clave"]==$clave){
				echo $nombre."!";
				$flag=true;
			}
		}
		if(!$flag){
			echo "";
		}
		if (!feof($fp)) {
			echo "Error: fallo inesperado de fgets()\n";
		}
		fclose($fp);

	}
 ?>

