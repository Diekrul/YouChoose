<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shoes Store - Product Detail</title>
<meta name="keywords" content="shoes store, product detail, free template, ecommerce, online shop, website templates, CSS, HTML" />
<meta name="description" content="Shoes Store, Product Detail, free ecommerce template provided by templatemo.com" />
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

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "top_nav", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

<script type="text/javascript" src="js/jquery-1-4-2.min.js"></script> 
<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="js/slimbox2.js"></script> 


</head>

<body>

<div id="templatemo_body_wrapper">
<div id="templatemo_wrapper">

	<div id="templatemo_header">
    	<div id="site_title"><h1><a href="http://www.templatemo.com" rel="nofollow">Online Shoes Store</a></h1></div>
        <div id="header_right">
        	<p>
	        <a href="#">Hola <?php echo $_GET["name"] ?></a> | <a href="#">Mi perfil</a> | <a href="http://localhost:8080/sitios/YouChoose/templatemo_367_shoes/login.html">Cerrar sesión</a></p>
            <p>
            	Shopping Cart: <strong>3 items</strong> ( <a href="shoppingcart.html">Show Cart</a> )
			</p>
		</div>
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_header -->
    
    <div id="templatemo_menubar">
        <div id="top_nav" class="ddsmoothmenu">
            <ul>
                <li><a href="inicio.html">Inicio</a></li>
                <li><a href="#"  class="selected">Adhesiones </a>
                </li>
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
    	<div id="sidebar" class="float_l">
        </div>
        <div id="content" style="margin: 0px auto">
        	<h1>Detalle del producto</h1>
            <div class="content_half float_l">
        	<a  rel="lightbox[portfolio]" href="images/product/10_l.jpg"><img src="images/product/10.jpg" alt="image" /></a>
            </div>
            <div class="content_half float_r">
                <table>
                    <tr>
                        <td width="160">Precio:</td>
                        <td>$100</td>
                    </tr>
                    <tr>
                        <td>Modelo:</td>
                        <td>Product 14</td>
                    </tr>
                    <tr>
                        <td>Manofacturado:</td>
                        <td>Apple</td>
                    </tr>
                    <tr>
                    	<td>Cantidad</td>
                        <td><input type="text" value="1" style="width: 20px; text-align: right" /></td>
                    </tr>
                </table>
                <div class="cleaner h20"></div>

                <a href="shoppingcart.html" class="addtocart"></a>

			</div>
            <div class="cleaner h30"></div>
            
            <h5>Déscripción del producto</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur semper quam sit amet turpis rhoncus id venenatis tellus sollicitudin. Fusce ullamcorper, dolor non mollis pulvinar, turpis tortor commodo nisl, et semper lectus augue blandit tellus. Quisque id bibendum libero. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow">CSS</a>.</p>	
            
          <div class="cleaner h50"></div>
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