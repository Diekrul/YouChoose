<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shoes Store - Shopping Cart</title>
<meta name="keywords" content="shoes store, shopping cart, free template, ecommerce, online shop, website templates, CSS, HTML" />
<meta name="description" content="Shoes Store, Shopping Cart, online store template by templatemo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js"></script>
<?php
	function url(){
		if (!array_key_exists("name", $_GET  )){
			echo "";
		}else{
			echo "?name=".$_GET["name"];
		}
	}
	if (!array_key_exists("name", $_GET  )){
		echo "<script type='text/javascript'>location.href='http://localhost:8000/sitios/YouChoose/prototipo/login.html';</script>";
	}
 ?>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "top_nav", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

</head>

<body>

<div id="templatemo_body_wrapper">
<div id="templatemo_wrapper">

	<div id="templatemo_header">
    	<div id="site_title"><h1><a href="#" rel="nofollow"></a></h1></div>
        <div id="header_right">
            <p>
            <a href="#">Hola <?php echo $_GET["name"] ?></a> | <a href="#">Mi perfil</a> | <a href="http://localhost:8000/sitios/YouChoose/prototipo/login.html">Cerrar sesión</a></p>
        </div>
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_header -->
    
    <div id="templatemo_menubar">
        <div id="top_nav" class="ddsmoothmenu">
            <ul>
                <li><a href="empresa.php<?php url() ?>" class="selected">Inicio</a></li>
                <li><a href="#">Mis subastas</a></li>
                <li><a href="#">Estadísticas</a></li>
                <li><a href="#">Acerca de</a>
            </ul>
            <br style="clear: left" />
        </div> <!-- end of ddsmoothmenu -->
        <div id="templatemo_search"  style="margin-top:4px;">
            <form action="#" method="get">
                <input type="text" value=" " name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                <input type="submit" name="Search" value=" " alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
            </form>
        </div>
    </div> <!-- END of templatemo_menubar --> <!-- END of templatemo_menubar -->   
    <div id="templatemo_main">
        <div id="content" style="margin:0 auto;">
        	<h1>Adhesión a Subasta</h1>
 <table width="680px" cellspacing="0" cellpadding="5">
                      <tr bgcolor="#ddd">
                            <th width="220" align="left">Imagen </th> 
                            <th width="180" align="left">Descripción </th> 
                            <th width="60" align="right">Precio </th>
                            <th width="60" align="right">Personas adheridas</th>  
                            <th width="90"> </th>
                            
                      </tr>
                        <tr>
                            <td><img src="images/product/06.jpg" alt="image 1" /></td> 
                            <td>Televisor Full Hd </td> 
                            <td align="right">$258.000 </td> 
                            <td align="right">9</td>
                            <td align="center"> <a href="#"><img src="images/remove_x.gif" alt="remove" /><br />Entrar a la subasta</a> </td>
                        </tr>
                    </table>
                    <div class="cleaner h30"></div>
                        <h5>Descripción del producto</h5>
                        <p>Tipo Cámara Fotográfica Color Negra<br/>Megapixeles 16,1<br/>Calidad de Video HD y VGA<br/>Resolución máxima 1280x720 30 fps<br/>Memoria interna<br/>Tipo tarjeta memoria SD o Memory stick
                        <br/>Memoria Expandible Hasta 32 GB<br/>Zoom Óptico 21x<br/>Zoom digital Imagen clara de 2X<br/>Distancia enfoque normal 2 cm<br/>Velocidad del obturador<br/>Grabador de video con audio
                        <br/>Tipo de pantalla LCD ClearPhoto<br/>Detección de sonrisas<br/>Detección de rostros<br/>Balance de blancos<br/>Flash</p> 
                    <div style="float:right; width: 215px; margin-top: 20px;">
                    <p><a href="javascript:history.back()">Volver</a></p>
                    	
                    </div>
			</div>
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->
    
    <div id="templatemo_footer">

        Copyright © 2013 <a href="#"> Magdi - You Choose </a> 
    </div> <!-- END of templatemo_footer -->
</div> <!-- END of templatemo_wrapper -->
</div> <!-- END of templatemo_body_wrapper -->


<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>