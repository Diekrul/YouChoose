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
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

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
                <li><a href="index.php<?php url() ?>">Inicio</a></li>
                <li><a href="crear-iniciativa.php<?php url() ?>"  class="selected">Comenzar Iniciativa</a>
                </li>
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
     

    <div id="form_container">
        <h1><a>Crear una iniciativa de compra</a></h1>
        <form id="form_774091" class="appnitro" enctype="multipart/form-data" method="post" action="index.php<?php url() ?>">
                    <div class="form_description">
            <p>En esta sección podra crear postular el producto que usted desea!. Solo complete el formulario y su producto pasara a ser revisado por You Choose.</p>
        </div>                      
            <ul >
            
                    <li id="li_6" >
        <label class="description" for="element_6">Seleccione el tipo de iniciativa </label>
        <span>
            <input id="element_6_1" name="element_6" class="element radio" type="radio" value="1" />
<label class="choice" for="element_6_1">Producto</label>
<input id="element_6_2" name="element_6" class="element radio" type="radio" value="2" />
<label class="choice" for="element_6_2">Servicio</label>

        </span> 
        </li>       <li id="li_1" >
        <label class="description" for="element_1" style="margin-top:20px">Nombre de la iniciativa </label><br/>
        <div>
            <input id="element_1" name="element_1" class="element text medium" type="text" maxlength="255" value=""/> 
        </div> 
        </li>       <li id="li_2" >
        <label class="description" for="element_2">Precio propuesto para la iniciativa </label><br/>
        <div>
            <input id="element_2" name="element_2" class="element text medium" type="text" maxlength="255" value=""/> 
        </div> 
        </li>       <li id="li_3" >
        <label class="description" for="element_3">Link asociado al producto </label><br/>
        <div>
            <input id="element_3" name="element_3" class="element text medium" type="text" maxlength="255" value=""/> 
        </div> 
        </li>       <li id="li_4" >
        <label class="description" for="element_4">Descripción del producto </label><br/>
        <div>
            <input id="element_4" name="element_4" class="element text medium" type="text" maxlength="255" value=""/> 
        </div> 
        </li>       <li id="li_5" >
        <label class="description" for="element_5">Fotografia asociada al producto </label><br/>
        <div>
            <input id="element_5" name="element_5" class="element file" type="file"/> 
        </div>  
        </li>
            
                    <li class="buttons">
                <input type="hidden" name="form_id" value="774091" />
                
                <input id="saveForm" class="button_text" type="submit" name="submit" value="Enviar Iniciativa" />
        </li>
            </ul>
        </form> 
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