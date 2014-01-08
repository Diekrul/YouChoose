<?php
    $fp = fopen('../DataBase/clientes.txt', 'a+');
	$s = "\n".$_POST['nick']."~".$_POST['nombre']."~".$_POST['clave'];
	fwrite($fp, $s);
	fclose($fp);
    echo "1";
 ?>