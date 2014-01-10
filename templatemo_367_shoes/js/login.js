function redireccionar(str){
  window.locationf="str";
}

function nuevo_usuario(){
	var _nick = $('#usuario-nick').val();
	var _clave = $('#usuario-clave').val();
	var _nombre = $('#usuario-nombre').val();
	var datos = {nick: _nick, nombre: _nombre ,clave: _clave};
    $.ajax({
        type: "POST",
        data: datos,
        url: "php/nuevo_usuario.php" ,
        dataType: 'text',
        success: function (data)
        {
			if(data == "1"){
				alert("Cliente agregado con exito!");
				/*INSERTAR CODIGO redirigir a inicio de sesion*/
			}else{
				alert("El nombre de usuario ya está en uso.");
			}
        }
    });
};
function nuevo_cliente(){
	var _nick = $('#cliente-nick').val();
	var _clave = $('#cliente-clave').val();
	var _nombre = $('#cliente-nombre').val();
	var datos = {nick: _nick, nombre: _nombre ,clave: _clave};
    $.ajax({
        type: "POST",
        data: datos,
        url: "php/nuevo_cliente.php" ,
        dataType: 'text',
        success: function (data)
        {
			if(data == "1"){
				alert("Cliente agregado con exito!");
				/*INSERTAR CODIGO redirigir a inicio de sesion*/
			}else{
				alert("El nombre de usuario ya está en uso.");
			}
        }
    });
};

function login(){
	var _nick = $('#log-nick').val();
	var _clave = $('#log-clave').val();
	var datos = {nick: _nick, clave: _clave};
	var _url="php/login_usuario.php";
	var cliente_o_usuario = $("#checkbox-login").attr("checked");
	if(cliente_o_usuario){
		_url="php/login_cliente.php";
	}
    $.ajax({
        type: "POST",
        data: datos,
        url: _url ,
        dataType: 'text',
        success: function (data)
        {
			if(data.length > 2){
				alert("Bienvenido "+data);
				if(cliente_o_usuario){
					//soy empresa
					window.location="#";
				}else{
					window.location="http://localhost:8080/sitios/YouChoose/templatemo_367_shoes?name=Mario";
				}
				
			}else{
				alert("Combinacion erronea de usuario y contraseña");
			}
        }
    });
};
