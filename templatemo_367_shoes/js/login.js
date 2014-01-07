function nuevo_usuario(){
    $.ajax({
        type: "POST",
        data: { nick : "perrito", nombre:"Perrin" ,clave:"perrines"},
        url: "php/nuevo_usuario.php" ,
        dataType: 'text',
        success: function (data)
        {
            alert(data); // overflow
            //alert(data.key);   // value
        }
    });
};
$(document).ready(function(){
    nuevo_usuario();
});
