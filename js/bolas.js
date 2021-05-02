var gira = false;
var bal;
var temas;
var saco;
var int1, int2, int3, int4, int5;
var f = [];

//if (gira) {
//document.getElementById('ball1').onclick = "";
//document.getElementById('ball2').onclick = "";
//    document.getElementById('ball3').onclick = "";
//    document.getElementById('ball4').onclick = "";
//    document.getElementById('ball5').onclick = "";
//}else{
//    document.getElementById('ball1').onclick = "ball(1)";
//    document.getElementById('ball2').onclick = "ball(2)";
//    document.getElementById('ball3').onclick = "ball(3)";
//    document.getElementById('ball4').onclick = "ball(4)";
//    document.getElementById('ball5').onclick = "ball(5)";
//}

function clearClass() {
    for (var i = 1; i <= 5; i++) {
        document.getElementById('ball' + i).className = "rounded-circle bg-secondary m-1";
    }
}

function clearBalls() {
    var balls = document.getElementById('balls');
    var container = document.getElementById('container');
    container.removeChild(balls);
}

function ball(num) {
    bolas = num;
    clearClass();
    var template = document.getElementById("container");
    document.getElementById("ball" + num).className = "rounded-circle bg-info m-1";
    clearBalls();
    var container = document.getElementById('container');
    container.innerHTML = '<div class="row" id="balls"></div>';
    var balls = document.getElementById('balls');
    for (i = 0; i < num; i++) {
        balls.innerHTML += '<div class="card mx-auto bg-secondary text-white" style="width:350px" id="b' + i + 1 + '"><div class="card-img-top p-3"><div class="esfera shadow"></div><div class="card-body"><div class="card-title" id="name'+(i+1)+'"></div></div></div></div>';
    }
    actualizarProbabilidad();
}

class Sac {
    nbll;
    Sac = [];
    constructor(num) {
        this.nbll = num;
        for (let i = 0; i < num; i++)
            this.Sac[i] = i + 1;
    }
        outBall() {
            let rnd = Math.floor(Math.random() * this.nbll);
            while (this.Sac[rnd] == null) {
                rnd = Math.floor(Math.random() * this.nbll);
            }
            let bll = this.Sac[rnd];
            this.Sac[rnd] = null;
            return bll;
        }
    }

function bola1() {
    int1 = setInterval(function () {
        bal[0].innerHTML = Math.floor(Math.random() * temas + 1);
    }, 100);
    setTimeout(function () {
        clearInterval(int1);
        var num = saco.outBall();
        bal[0].innerHTML = num;
        nombreTema('name1',num);
        gira = false;
    }, 2000);
}
function bola2() {
    int2 = setInterval(function () {
        bal[1].innerHTML = Math.floor(Math.random() * temas + 1);
    }, 100);
    setTimeout(function () {
        clearInterval(int2);
        var num = saco.outBall();
        bal[1].innerHTML = num;
        nombreTema('name2',num);
        gira = false;
    }, 4000);

}
function bola3() {
    int3 = setInterval(function () {
        bal[2].innerHTML = Math.floor(Math.random() * temas + 1);
    }, 100);
    setTimeout(function () {
        clearInterval(int3);
        var num = saco.outBall();
        bal[2].innerHTML = num;
        nombreTema('name3',num);
        gira = false;
    }, 6000);
}
function bola4() {
    int4 = setInterval(function () {
        bal[3].innerHTML = Math.floor(Math.random() * temas + 1);
    }, 100);
    setTimeout(function () {
        clearInterval(int4);
        var num = saco.outBall();
        bal[3].innerHTML = num;
        nombreTema('name4',num);
        gira = false;
    }, 8000);
}
function bola5() {
    int5 = setInterval(function () {
        bal[4].innerHTML = Math.floor(Math.random() * temas + 1);
    }, 100);
    setTimeout(function () {
        clearInterval(int5);
        var num = saco.outBall();
        bal[4].innerHTML = num;
        nombreTema('name5',num);
        gira = false;
    }, 10000);
}

function disabled() {
    var nbolas = document.getElementById('nbolas').style.display = "none";
    var btn = document.getElementById('extract').style.display = "none";
    var ntemas = document.getElementById('temas').disabled = true;
}

function enabled() {
    var nbolas = document.getElementById('nbolas').style.display = "";
    var btn = document.getElementById('extract').style.display = "inline-block";
    var ntemas = document.getElementById('temas').disabled = false;
}


var btn = document.getElementById('extract');
btn.onclick = function () {
    gira = true;
    temas = document.getElementById('temas').value;
    bal = document.getElementsByClassName('esfera');
    if (isNaN(temas)) {
        temas = 63;
    }
    if (bal.length > temas) {
        temas = bal.length;
    }
    saco = new Sac(temas);
    disabled();
    for(i=1;i<=bal.length;i++){
        var nid = "name"+i;
        document.getElementById(nid).innerHTML = "";
    }
    setTimeout(function () {
        enabled();
    }, bal.length * 2000)
    if (bal.length == 1) {
        bola1();
    } else if (bal.length == 2) {
        bola1();
        bola2();
    } else if (bal.length == 3) {
        bola1();
        bola2();
        bola3();
    } else if (bal.length == 4) {
        bola1();
        bola2();
        bola3();
        bola4();
    } else if (bal.length == 5) {
        bola1();
        bola2();
        bola3();
        bola4();
        bola5();
    }
}

var inp = document.getElementById('temlearn');
inp.onchange = function () {
    actualizarProbabilidad();
}

var btnTemas = document.getElementById('temas');
btnTemas.onchange = function () {
    actualizarProbabilidad();
}

function actualizarProbabilidad() {
    var percent = document.getElementById('prob');
    percent.innerHTML = CalculaEstadistiSac();
}

function factorial(n) {

    if (n === 0 || n === 1) {
        return 1;
    }

    if (n < 0) {
        return 0;
    }

    if (f[n] > 0) {
        return f[n];
    }

    f[n] = factorial(n - 1) * n;

    return f[n];
}

const nombreTema = (number,num) =>{
    var frmd = new FormData();
    frmd.append('num',num);
    var objXMLHttpRequest = new XMLHttpRequest();
    objXMLHttpRequest.open('POST', './oposiciones/nameUnit.php');
    objXMLHttpRequest.send(frmd);
    objXMLHttpRequest.onreadystatechange = function() {
      if(objXMLHttpRequest.readyState === 4) {
        if(objXMLHttpRequest.status === 200) {
            document.getElementById(number).innerHTML = objXMLHttpRequest.responseText;
        } else {
              alert('Error Code: ' +  objXMLHttpRequest.status);
              alert(objXMLHttpRequest.statusText);
        }
      }
    }    
}

function CalculaEstadistiSac() {

    // recojo datos del formulario
    var ntemas = document.getElementById('temas').value;
    estudiados = document.getElementById('temlearn').value;
    bolas = document.getElementsByClassName('esfera').length;
    var bolaobtenida;
    var temasrestantes = ntemas - estudiados;
    var factest, facttrest, facttodos, porcentaje, e1, e2, e3, bls;

    factest = factorial(estudiados);
    facttrest = factorial(temasrestantes);
    facttodos = factorial(ntemas);

    porcentaje = 0;

    for (bls = 0; bls < bolas; bls++) {
        bolaobtenida = bolas - bls - 1;

        if ((factorial(bls + 1) * factorial(estudiados - bls - 1)) != 0)
            e1 = factest / (factorial(bls + 1) * factorial(estudiados - bls - 1));
        else
            e1 = 1;

        e2 = facttrest / (factorial(bolaobtenida) * factorial(temasrestantes - bolaobtenida));

        e3 = facttodos / (factorial(bolas) * factorial(ntemas - bolas));

        porcentaje += e1 * e2 / e3;
    }

    //var res = document.createTextNode("Las posibilidades de que te salga un tema habiendo estudiado " + estudiados + " son del " + Math.round(porcentaje*100000)/1000  +"%");  
    //document.createElement("p").setAttribute("id","resultado");
    let solucion = Math.round(porcentaje * 10000000) / 100000 + "%";
    return solucion.replace('.', ',');
}

//GUARDO LOS TEMAS ESTUDIADOS
function temasEstudiados(num){
    var frmd = new FormData();
    frmd.append('num',num);
    var objXMLHttpRequest = new XMLHttpRequest();
    objXMLHttpRequest.open('POST', './oposiciones/temasEstudiados.php');
    objXMLHttpRequest.send(frmd);
    objXMLHttpRequest.onreadystatechange = function() {
      if(objXMLHttpRequest.readyState === 4) {
        if(objXMLHttpRequest.status === 200) {
            document.getElementById('temlearn').innerHTML = objXMLHttpRequest.responseText;
        } else {
              alert('Error Code: ' +  objXMLHttpRequest.status);
              alert(objXMLHttpRequest.statusText);
        }
      }
    }    
}