<?php 
      
    $cabeceras  = 'From: '.$_POST['email'] . "\r\n"; 
      
    if ( mail ("gabrieljaume@cuartotiempo.cl","Contacto cuartotiempo.cl","From: ".$_POST['nombre']."\nEmail: ".$_POST['email']."\n\n".$_POST['texto'],$cabeceras ) ){  
        echo '<SCRIPT LANGUAGE="javascript"> 
                    alert("Mail enviado con éxito."); 
                    location.href = "../index.php"; 
              </SCRIPT>'; 
    } 
?>