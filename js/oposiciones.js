
$('#cyl').click(function (e) {
    $('#tablaReg').load('./oposiciones/cyl.php', {meritos: "noBarra"});
});
$('#iv').click(function (e) {
    $('#tablaReg').load('./oposiciones/anexoIV.php', {meritos: "noBarra"});
});
$('#iii').click(function (e) {
    $('#tablaReg').load('./oposiciones/anexoIII.php', {meritos: "noBarra"});
});
$('#cam').click(function (e) {
    $('#tablaReg').load('./oposiciones/anexoIV.php', {meritos: "noBarra"});
});
$('#oposicionesAtras').click(function (e) {
    $('#tablaReg').load('./oposiciones/oposiciones.php', {meritos: "noBarra"});
});
$('#cylAtras').click(function (e) {
    $('#tablaReg').load('./oposiciones/cyl.php', {meritos: "noBarra"});
});