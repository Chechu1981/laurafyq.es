$(document).ready(function () {
    $(inicio).click(function (e) {
        var sessionId = $('#sessionId').val();
        window.location.assign("", {id: sessionId});
    });
    $('#oposiciones').click(function (e) {
        $(menu).hide();
        $('#tablaReg').load('./oposiciones/oposiciones.php');
    });
    $('#salir').click(function (e) {
        $('body').load('./login/controller_login.php', {salir: "salir"});
    });
    $('#alumnos').click(function (e) {
        $(menu).show();
        $('#tablaReg').load('./alumnos/tabla.php');
    });
    $('#2em').click(function (e) {
        $('#tablaReg').load('./cursos/tabla.php', {curso: "2º ESO", cursoid: "2ESO"});
    });
    $('#3em').click(function (e) {
        $('#tablaReg').load('./cursos/tabla.php', {curso: "3º ESO", cursoid: "3ESO"});
    });
    $('#4em').click(function (e) {
        $('#tablaReg').load('./cursos/tabla.php', {curso: "4º ESO", cursoid: "4ESO"});
    });
    $('#1bm').click(function (e) {
        $('#tablaReg').load('./cursos/tabla.php', {curso: "1º Bachillerato", cursoid: "1BAC"});
    });
    $('#2bm').click(function (e) {
        $('#tablaReg').load('./cursos/tabla.php', {curso: "2º Bachillerato", cursoid: "2BAC"});
    });
    $('#2e').click(function (e) {
        $('#tablaReg').load('./cursos/tabla.php', {curso: "2º ESO", cursoid: "2ESO"});
    });
    $('#3e').click(function (e) {
        $('#tablaReg').load('./cursos/tabla.php', {curso: "3º ESO", cursoid: "3ESO"});
    });
    $('#4e').click(function (e) {
        $('#tablaReg').load('./cursos/tabla.php', {curso: "4º ESO", cursoid: "4ESO"});
    });
    $('#1b').click(function (e) {
        $('#tablaReg').load('./cursos/tabla.php', {curso: "1º Bachillerato", cursoid: "1BAC"});
    });
    $('#2b').click(function (e) {
        $('#tablaReg').load('./cursos/tabla.php', {curso: "2º Bachillerato", cursoid: "2BAC"});
    });
    $('#edicion').click(function (e) {
        $(menu).show();
        $('#tablaReg').load('./backend/nuevoTema.php');
    });
    $('#logearse').click(function (e) {
        $(menu).show();
        $('#tablaReg').load('./login/logearse.php');
    });
    $(document).on('click', '#atras', function () {
        window.location.assign("");
    });
    $menu = $('#menu').find('ul').find('li');
    $menu.hover(function () {
        $(this).children('ul').stop();
        $(this).children('ul').slideDown();
    }, function () {
        $(this).children('ul').stop();
        $(this).children('ul').slideUp();
    });
});

var url = "./backend/editar.php";
function editar(id) {
    $("#fichero").hide();
    var frame = $("#edicionModal");
    frame.attr('src', url + '?cursoid=' + id).show();
}

function tema(curso, tema) {
    var titulo = "";
    switch (curso) {
        case "2ESO":
            titulo = "2º ESO";
            break;
        case "3ESO":
            titulo = "3º ESO";
            break;
        case "4ESO":
            titulo = "4º ESO";
            break;
        case "1BAC":
            titulo = "1º Bachillerato";
            break;
        case "2BAC":
            titulo = "2º Bachillerato";
            break;
    }
    $('#tablaReg').load('./cursos/tabla.php', {curso: titulo, cursoid: curso, tema: tema});

}

class Sac {
    nbll;
    Sac1 = [];
    constructor(num) {
        this.nbll = num;
        for (let i = 0; i < num; i++)
            this.Sac1[i] = i + 1;
    }
        outBall() {
            let rnd = Math.floor(Math.random() * this.nbll);
            while (this.Sac1[rnd] == null) {
                rnd = Math.floor(Math.random() * this.nbll);
            }
            let bll = this.Sac1[rnd];
            this.Sac1[rnd] = null;
            return bll;
        }
    }
