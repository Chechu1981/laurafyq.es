<script type="text/javascript" src="./js/oposiciones.js"></script>
<script type="text/javascript" src="./js/bolas.js" ></script>
<div class="row">
    <div class="col-sm-2  align-self-center">
        <button type="button" id="oposicionesAtras" class="btn btn-secondary "><img
                src="./img/arrow_back_ios_new-black-18dp.svg" alt="atras" /></button>
    </div>
    <div class="col-sm-6 align-self-center">
        <div class="row-align-items-strat">
            <div class="col-sm-10">
                <p class="h1">Bolas de oposición</p>
            </div>

        </div>

    </div>
    <div class="col-sm-4 text-center">
        <div class="col-sm">
            Temas preparados<input value="11" class="form-control form-control-lg" style="text-align:center;width:100px;margin:auto" id="temlearn" type="number" id="temas"></input>
        </div>
        <div class="col-sm">
            <h1 id="prob">55,82398%</h1> 

        </div>
    </div>

</div>
</div>
<div class="row text-center align-items-center" style="margin-top:50px;margin-bottom:50px">
    <div class="col-sm-3 m-s-1">
        <div class="row" style="text-align:center;margin:auto">
            <div class="col-sm">
                <input value="75" class="form-control form-control-lg" style="text-align:center;width:100px;margin:auto"
                       type="number" id="temas"></input>
                <div class="col-sm">Número de temas</div>
            </div>
        </div>
    </div>
    <div class="col-sm-6" id="extract">
        <a name="Sacar Bolas" class="btn btn-secondary" href="#" role="button">Sacar bolas</a>
    </div>
    <div class="col-sm-3 m-s-1">
        <div class="row" id="nbolas">
            <div onclick="ball(1)" class="rounded-circle bg-secondary m-1" id="ball1"
                 style="width:30px;height:30px;cursor:pointer" value="1">1</div>
            <div onclick="ball(2)" class="rounded-circle bg-secondary m-1" id="ball2"
                 style="width:30px;height:30px;cursor:pointer" value="2">2</div>
            <div onclick="ball(3)" class="rounded-circle bg-secondary m-1" id="ball3"
                 style="width:30px;height:30px;cursor:pointer" value="3">3</div>
            <div onclick="ball(4)" class="rounded-circle bg-secondary m-1" id="ball4"
                 style="width:30px;height:30px;cursor:pointer" value="4">4</div>
            <div onclick="ball(5)" class="rounded-circle bg-info m-1" id="ball5"
                 style="width:30px;height:30px;cursor:pointer" value="5">5</div>
        </div>
        <div class="row">
            <div class="col-sm-9">Número de bolas</div>
        </div>
    </div>


</div>
<div style="clear: both"></div>
<div class="container" id="container">
    <div class="row" id="balls">
    <?php
    for($i=1;$i<=5;$i++){
        ?>
<div class="card mx-auto bg-secondary text-white" style="width:350px" id="b<?php echo $i; ?>">
            <div class="card-img-top p-3">
                <div class="esfera shadow"></div>
                <div class="card-body">
                    <div class="card-title" id="name<?php echo $i; ?>"></div>
                </div>
            </div>
        </div>
        <?php
    }
     ?>
    </div>
</div>