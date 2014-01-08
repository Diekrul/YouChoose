<?php

	$fp = fopen('../DataBase/usuarios.txt', 'r');
	if ($fp) {
		$flag = false;
		while (($bufer = fgets($fp, 4096)) !== false) {
		    $valores = explode("~",$bufer);
			$usuario = $valores[0];
			$nombre = $valores[1];
			$clave = $valores[2];			
			if($_POST['nick']==$usuario){
				$flag=true;
			}
		}
		if (!feof($fp)) {
			echo "Error: fallo inesperado de fgets()\n";
		}
		fclose($fp);
	}
	if($flag){
		echo "2";
	}else{	
		$fp = fopen('../DataBase/usuarios.txt', 'a+');
		$s = "\n".$_POST['nick']."~".$_POST['nombre']."~".$_POST['clave'];
		fwrite($fp, $s);
		fclose($fp);
		echo "1";
	}
 ?>