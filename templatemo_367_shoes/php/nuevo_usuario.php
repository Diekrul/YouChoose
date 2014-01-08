<?php
    $fp = fopen('../DataBase/usuarios.txt', 'a+');
	$s = "\n".$_POST['nick']."~".$_POST['nombre']."~".$_POST['clave'];
	fwrite($fp, $s);
	fclose($fp);
    echo "1";
 ?>