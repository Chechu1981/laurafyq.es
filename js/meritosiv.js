$(document).ready(function () {

    function cargarDatos() {
        //RECOJO DATOS
        var p11 = $('#p11').val();
        var p121 = $('#p121').val();
        var p122 = $('#p122').val();
        var p123 = $('#p123').val();
        var p124 = $('#p124').val();
        var p125 = $('#p125').val();
        var p3 = $('#p3').val();
        var p311 = $('#p311').val();
        var p312 = $('#p312').val();
        var p313 = $('#p313').val();
        var p314 = $('#p314').val();
        var p315 = $('#p315').val();
        var p316a = $('#p316a').val();
        var p316b = $('#p316b').val();
        var p316c = $('#p316c').val();
        var p316d = $('#p316d').val();
        var p316e = $('#p316e').val();
        var p32a1 = $('#p32a1').val();
        var p32a2 = $('#p32a2').val();
        var p32a3 = $('#p32a3').val();
        var p32a4 = $('#p32a4').val();
        var p32a5 = $('#p32a5').val();
        var p32a6 = $('#p32a6').val();
        var p32b1 = $('#p32b1').val();
        var p32b2 = $('#p32b2').val();
        var p32b3 = $('#p32b3').val();
        var p322 = $('#p322').val();
        var p323 = $('#p323').val();
        var p331 = $('#p331').val();
        var p332 = $('#p332').val();
        var p333 = $('#p333').val();
        var p334 = $('#p334').val();

        //CALCULO DATOS
        var total1 = p11 * 0.5;
        var total2 = p121 * 0.25;
        total2 += p122 * 0.2;
        total2 += p123 * 0.1;
        total2 += p124 * 0.1;
        total2 += p125 * 0.2;
        var total3 = p3 * 0.1;
        var suma1 = 0;
        var suma3 = 0;
        var total31 = (p311 * 1) + (p312 * 1) + (p313 * 0.5);
        var total35 = p315 * 0.75;
        var total316a = p316a * 0.5;
        var total316b = p316b * 0.5;
        var total316c = p316c * 0.2;
        var total316d = p316d * 0.2
        var total316e = p316e * 0.2;

        //COMPRUEBO LOS EXCEDENTES

        if (total1 > 4) {
            total1 = 4;
        }
        if (total2 > 2.5) {
            total2 = 2.5;
        }
        suma1 = total1 + total2;
        if (suma1 > 5.5) {
            suma1 = 5.5;
        }
        if (total3 > 3) {
            total3 = 3;
        }
        if (total31 > 1.5) {
            total31 = 1.5;
        }
        var suma316 = total316a + total316b + total316c + total316d + total316e;
        var suma32ab = (p32a1 * 0.5) + (p32a2 * 0.25) + (p32a3 * 0.20) + (p32a4 * 0.15) + (p32a5 * 0.1) + (p32a6 * 0.05) + (p32b1 * 0.05) + (p32b2 * 0.05) + (p32b3 * 0.05) + (p322 * 0.5) + (p323 * 0.5);
        if (suma32ab > 1.5) {
            suma32ab = 1.5;
        }
        var total33 = (p331 * 0.3) + (p332 * 0.6) + (p333 * 0.9);
        var total34 = p334 * 0.4;
        var total314 = p314 * 0.75;
        suma3 = total31 + total314 + total35 + suma316 + suma32ab + total33 + total34;
        if (suma3 > 3) {
            suma3 = 3;
        }
        var total = suma1 + total3 + suma3;

        //ESCRIBO DATOS

        $(t11).val(Math.round(total1 * 1000) / 1000);
        $(t12).val(Math.round(total2 * 1000) / 1000);
        $(t1).val(Math.round(suma1 * 1000) / 1000);
        $(t21).val(Math.round(total3 * 1000) / 1000);
        $(t2).val(Math.round(total3 * 1000) / 1000);
        $(t3).val(Math.round(suma3 * 1000) / 1000);
        $(t31).val(Math.round(total31 * 1000) / 1000);
        $(t314).val(Math.round(total314 * 1000) / 1000);
        $(t315).val(Math.round(total35 * 1000) / 1000);
        $(t316).val(Math.round(suma316 * 1000) / 1000);
        $(t32).val(Math.round(suma32ab * 1000) / 1000);
        $(t33).val(Math.round(total33 * 1000) / 1000);
        $(t34).val(Math.round(total34 * 1000) / 1000);
        $('#total').val(Math.round(total * 1000) / 1000);
    }


    $('#p11').change(function () {
        cargarDatos();
    });
    $('#p121').change(function () {
        cargarDatos();
    });
    $('#p122').change(function () {
        cargarDatos();
    });
    $('#p123').change(function () {
        cargarDatos();
    });
    $('#p124').change(function () {
        cargarDatos();
    });
    $('#p125').change(function () {
        cargarDatos();
    });
    $('#p3').change(function () {
        cargarDatos();
    });
    $('#p311').change(function () {
        cargarDatos();
    });
    $('#p312').change(function () {
        cargarDatos();
    });
    $('#p313').change(function () {
        cargarDatos();
    });
    $('#p314').change(function () {
        cargarDatos();
    });
    $('#p315').change(function () {
        cargarDatos();
    });
    $('#p316a').change(function () {
        cargarDatos();
    });
    $('#p316b').change(function () {
        cargarDatos();
    });
    $('#p316c').change(function () {
        cargarDatos();
    });
    $('#p316d').change(function () {
        cargarDatos();
    });
    $('#p316e').change(function () {
        cargarDatos();
    });
    $('#p32a1').change(function () {
        cargarDatos();
    });
    $('#p32a2').change(function () {
        cargarDatos();
    });
    $('#p32a3').change(function () {
        cargarDatos();
    });
    $('#p32a4').change(function () {
        cargarDatos();
    });
    $('#p32a5').change(function () {
        cargarDatos();
    });
    $('#p32a6').change(function () {
        cargarDatos();
    });
    $('#p32b1').change(function () {
        cargarDatos();
    });
    $('#p32b2').change(function () {
        cargarDatos();
    });
    $('#p32b3').change(function () {
        cargarDatos();
    });
    $('#p322').change(function () {
        cargarDatos();
    });
    $('#p323').change(function () {
        cargarDatos();
    });
    $('#p331').change(function () {
        cargarDatos();
    });
    $('#p332').change(function () {
        cargarDatos();
    });
    $('#p333').change(function () {
        cargarDatos();
    });
    $('#p334').change(function () {
        cargarDatos();
    });
});
