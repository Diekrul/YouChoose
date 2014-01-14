<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>You Choose</title>
<meta name="keywords" content="shoes store, free template, ecommerce, online shop, website templates, CSS, HTML" />
<meta name="description" content="Shoes Store is a free ecommerce template provided by templatemo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="js/login.js"></script>

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
    	<div id="site_title">
            <h1>
                <a href="#" rel="nofollow"></a>
            </h1>
        </div>
        <div id="header_right" style="float:right">
        	<p>
	        <a href="#">Hola <?php echo $_GET["name"] ?></a> | <a href="#">Mi perfil</a> | <a href="http://localhost:8000/sitios/YouChoose/prototipo/login.html">Cerrar sesión</a></p>
		</div>
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_header -->
    
    <div id="templatemo_menubar">
    	<div id="top_nav" class="ddsmoothmenu">
            <ul>
                <li><a href="index.php<?php url() ?>" class="selected">Inicio</a></li>
                <li><a href="crear-iniciativa.php<?php url() ?>">Comenzar Iniciativa</a></li>
                <li><a href="#">Acerca de</a>
            </ul>
            <br style="clear: left" />
        </div> <!-- end of ddsmoothmenu -->
        <div id="templatemo_search" style="margin-top:4px;">
            <form action="#" method="get">
                <input type="text" value=" " name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                <input type="submit" name="Search" value=" " alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
            </form>
        </div>
    </div> <!-- END of templatemo_menubar -->
    
    <div id="templatemo_main">
        <div id="content" style="margin:0 auto;">
        	<div id="slider-wrapper">
                <div id="slider" class="nivoSlider">
                    <img src="images/slider/04.jpg" alt="" />
                    <a href="#"><img src="images/slider/03.jpg" alt=""></a>
                    <img src="images/slider/02.jpg" alt="" />
                    <img src="images/slider/01.jpg" alt="" />
                </div>
            </div>
            <script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
            <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
            <script type="text/javascript">
            $(window).load(function() {
                $('#slider').nivoSlider();
            });
            </script>
			
        	<h1>Adhesiones abiertas</h1>			
            <div class="product_box">
	            <h3>Pantalla LG 84LM9600</h3>
            	<a href="#"><img src="images/product/01.jpg" alt="Shoes 1" /></a>
                <p>El producto se cierra en : 1 dias.</p>
                  <p class="product_PB">Personas adheridas = 134</p>
      <p class="product_price">Precio actual = $ 88.000</p>
                <a href="shoppingcart-LG84.php?name=<?php echo $_GET["name"] ?>" class="addtocart" style="margin-left:120px"></a>

            </div>        	
            <div class="product_box">
            	<h3>Microondas MS2540SR</h3>
            	<a href="#"><img src="images/product/02.jpg" alt="Shoes 2" /></a>
                <p>El producto se cierra en : 2 dias </p>
        <p class="product_PB">Personas adheridas = 300</p>
      <p class="product_price">Precio actual = $ 58.000</p>
                <a href="shoppingcart-Microondas.php?name=<?php echo $_GET["name"] ?>" class="addtocart" style="margin-left:120px"></a>
            </div>        	
            <div class="product_box no_margin_right">
            	<h3>Pantalla LG W2353v-PF</h3>
            	<a href="#"><img src="images/product/03.jpg" alt="Shoes 3" /></a>
                <p>El producto se cierra en : 4 dias</p>
                <p class="product_PB">Personas adheridas = 10</p>
                <p class="product_price">Precio actual = $ 108.000</p>
                <a href="shoppingcart-LGKS.php?name=<?php echo $_GET["name"] ?>" class="addtocart" style="margin-left:120px"></a>
            </div>   
            
            <div class="cleaner"></div>
                 	
            <div class="product_box">
            	<h3>Calular LG Optimus X4</h3>
               	<a href="#"productdetail.php?name=<?php echo $_GET["name"] ?>""><img src="images/product/04.jpg" alt="Shoes 4" /></a>
                <p>El producto se cierra en : 4 dias </p>
                <p class="product_PB">Personas adheridas = 220</p>
                <p class="product_price">Precio actual = $ 50.000</p>
                <a href="shoppingcart-Celular.php?name=<?php echo $_GET["name"] ?>" class="addtocart" style="margin-left:120px"></a>
            </div>        	
            <div class="product_box">
	            <h3>Notebook LG S510-X</h3>
            	<a href="#"><img src="images/product/05.jpg" alt="Shoes 5" /></a>
                <p>El producto se cierra en : 8 dias </p>
                <p class="product_PB">Personas adheridas = 30</p>
                <p class="product_price">Precio actual = $ 150.000</p>
                <a href="shoppingcart-Notebook.php?name=<?php echo $_GET["name"] ?>" class="addtocart" style="margin-left:120px"></a>
            </div>        	
            <div class="product_box no_margin_right">
            	<h3>Camara SONY Cybershot DSC-H100</h3>
            	<a href="#"><img src="images/product/06.jpg" alt="Shoes 6" /></a>
                <p>El producto se cierra en : 13 dias</p>
                <p class="product_PB">Personas adheridas = 9</p>
                <p class="product_price">Precio actual = $ 258.000</p>
                <a href="shoppingcart-Camara.php?name=<?php echo $_GET["name"] ?>" class="addtocart" style="margin-left:120px"></a>
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