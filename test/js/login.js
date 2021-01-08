$('#registrarse').click(function (e) {
    $('#tablaReg').load('');
});
$('#aceptarL').click(function (e) {
    var usuario = $('#usuario').val();
    var clave = $('#pas').val();
    $('*').load('./login/controller_login.php', {usuario: usuario, pas: clave, entrar: "entrar"});
});
$('#aceptarR').click(function (e) {
    var usuario = $('#usuario').val();
    var clave = $('#pas').val();
    $('#tablaReg').load('./login/controller_login.php', {usuario: usuario, pas: clave, registrarse: "registrarse"});
});
$(document).ready(function(){
   $('#usuario').focus(); 
});