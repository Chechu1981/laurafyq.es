$(document).ready(function () {

    function cargarDatos() {
        //RECOJO DATOS
        var p11 = $('#p11').val();
        var p12 = $('#p12').val();
        var p13 = $('#p13').val();
        var p14 = $('#p14').val();
        var p211 = $('#p211').val();
        var p212 = $('#p212').val();
        var p221 = $('#p221').val();
        var p222 = $('#p222').val();
        var p223 = $('#p223').val();
        var p231 = $('#p231').val();
        var p232 = $('#p232').val();
        var p24a = $('#p24a').val();
        var p24b = $('#p24b').val();
        var p24c = $('#p24c').val();
        var p24d = $('#p24d').val();
        var p24e = $('#p24e').val();
        var p31 = $('#p31').val();
        var p32 = $('#p32').val();
        var p33 = $('#p33').val();
        var p34 = $('#p34').val();
        var p35 = $('#p35').val();
        var p36 = $('#p36').val();
        var p371 = $('#p371').val();
        var p372 = $('#p372').val();
        var p373 = $('#p373').val();


        //CALCULO DATOS

        var total1 = p11 * 0.7;
        total1 += p12 * 0.35;
        total1 += p13 * 0.15;
        total1 += p14 * 0.1;

        var total2 = p211 * 1;
        total2 += p212 * 1.5;

        var total3 = p221 * 1;
        total3 += p222 * 1;
        total3 += p223 * 0.5;

        var total231 = p231 * 1;
        var total232 = p232 * 1;
        var total24 = p24a * 0.5;
        total24 += p24b * 0.5;
        total24 += p24c * 0.2;
        total24 += p24d * 0.2;
        total24 += p24e * 0.2;

        var suma2 = total2 + total3 + total231 + total232 + total24;
        var total31 = p31 * 0.035;
        var total32 = p32 * 0.07;
        var total33 = p33 * 0.5;
        if (total33 > 0.5) {
            total33 = 0.5;
        }
        var total34 = p34 * 0.4;
        var total35 = p35 * 1;
        if (total35 > 1) {
            total35 = 1;
        }
        var total36 = p36 * 1;
        if (total36 > 1) {
            total36 = 1;
        }
        var total371 = p371 * 0.3;
        var total372 = p372 * 0.6;
        var total373 = p373 * 0.9;
        var suma3 = total31;
        suma3 += total32;
        suma3 += total33;
        suma3 += total34;
        suma3 += total35;
        suma3 += total36;
        suma3 += total371;
        suma3 += total372;
        suma3 += total373;
        var total37 = total371;
        total37 += total372;
        total37 += total373;

        //COMPRUEBO LOS EXCEDENTES

        if (total1 > 7) {
            total1 = 7;
        }
        if (suma2 > 5) {
            suma2 = 5;
        }
        if (suma3 > 2) {
            suma3 = 2;
        }

        var total = total1 + suma2 + suma3;
        //ESCRIBO DATOS

        $(t1).val(Math.round(total1 * 1000) / 1000);
        $(t2).val(Math.round(suma2 * 1000) / 1000);
        $(t3).val(Math.round(suma3 * 1000) / 1000);
        $(t11).val(Math.round(total1 * 1000) / 1000);
        $(t21).val(Math.round(total2 * 1000) / 1000);
        $(t22).val(Math.round(total3 * 1000) / 1000);
        $(t231).val(Math.round(total231 * 1000) / 1000);
        $(t232).val(Math.round(total232 * 1000) / 1000);
        $(t24).val(Math.round(total24 * 1000) / 1000);
        $(t31).val(Math.round(total31 * 1000) / 1000);
        $(t32).val(Math.round(total32 * 1000) / 1000);
        $(t33).val(Math.round(total33 * 1000) / 1000);
        $(t34).val(Math.round(total34 * 1000) / 1000);
        $(t35).val(Math.round(total35 * 1000) / 1000);
        $(t36).val(Math.round(total36 * 1000) / 1000);
        $(t37).val(Math.round(total37 * 1000) / 1000);
        $('#total').val(Math.round(total * 1000) / 1000);
    }
    $('#p11').change(function () {
        cargarDatos();
    });
    $('#p12').change(function () {
        cargarDatos();
    });
    $('#p13').change(function () {
        cargarDatos();
    });
    $('#p14').change(function () {
        cargarDatos();
    });
    $('#p211').change(function () {
        cargarDatos();
    });
    $('#p212').change(function () {
        cargarDatos();
    });
    $('#p221').change(function () {
        cargarDatos();
    });
    $('#p222').change(function () {
        cargarDatos();
    });
    $('#p223').change(function () {
        cargarDatos();
    });
    $('#p231').change(function () {
        cargarDatos();
    });
    $('#p232').change(function () {
        cargarDatos();
    });
    $('#p24a').change(function () {
        cargarDatos();
    });
    $('#p24b').change(function () {
        cargarDatos();
    });
    $('#p24c').change(function () {
        cargarDatos();
    });
    $('#p24d').change(function () {
        cargarDatos();
    });
    $('#p24e').change(function () {
        cargarDatos();
    });
    $('#p31').change(function () {
        cargarDatos();
    });
    $('#p32').change(function () {
        cargarDatos();
    });
    $('#p33').change(function () {
        cargarDatos();
    });
    $('#p34').change(function () {
        cargarDatos();
    });
    $('#p35').change(function () {
        cargarDatos();
    });
    $('#p36').change(function () {
        cargarDatos();
    });
    $('#p371').change(function () {
        cargarDatos();
    });
    $('#p372').change(function () {
        cargarDatos();
    });
    $('#p373').change(function () {
        cargarDatos();
    });
});

function imprSelec(historial) {
    var ficha = document.getElementById(historial);
    var ventimp = window.open(' ', 'popimpr');
    ventimp.document.write(document.getElementById('recusrsos').innerHTML + ficha.innerHTML);
    ventimp.document.close();
    ventimp.print();
    ventimp.close();
}
$('#imprimir').click(function () {
    imprSelec('puntos');
});