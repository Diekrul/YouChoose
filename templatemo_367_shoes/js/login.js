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
			}else{
				alert("El username de cliente ya existe");
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
			}else{
				alert("El username de cliente ya existe");
			}
        }
    });
};


function login_usuario(){
	var _nick = $('#usuario-log-nick').val();
	var _clave = $('#usuario-log-clave').val();
	var datos = {nick: _nick, clave: _clave};
    $.ajax({
        type: "POST",
        data: datos,
        url: "php/login_usuario.php" ,
        dataType: 'text',
        success: function (data)
        {
			if(data != ""){
				alert("Bienvenido!"+data);
			}else{
				alert("Combinacion erronea de usuario y contraseña");
			}
        }
    });
};

function login_cliente(){
	var _nick = $('#cliente-log-nick').val();
	var _clave = $('#cliente-log-clave').val();
	var datos = {nick: _nick, clave: _clave};
    $.ajax({
        type: "POST",
        data: datos,
        url: "php/login_cliente.php" ,
        dataType: 'text',
        success: function (data)
        {
			if(data != ""){
				alert("Bienvenido!");
			}else{
				alert("Combinacion erronea de usuario y contraseña");
			}
        }
    });
};
