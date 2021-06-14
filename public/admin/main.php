<?php

//include $_SERVER['DOCUMENT_ROOT']."/cms_ucv2/dirs.php";
require_once "{$_SERVER['DOCUMENT_ROOT']}/cms_ucv2/vendor/autoload.php";

use App\Entity\admin\{Administrador as admin};

$obj = new admin("ricardo","bueno");

echo $obj->getUser();
echo "<br>";

echo "ROOT_PATH -> ".ROOT_PATH;
?>
<div class="temario_container" style="margin-top: 1em; background: none; border: none">
    <div class="sixteen wide column">
        <h2>Vista General</h2>
    </div>
</div>

<!--<div class="temario_container">
    <h2 class="margin-bottom">Mantenimiento Post</h2>
    <div class="ui grid" style="margin-bottom: 2em;">
        <div class="ui link">
            <div class="card card-post blog" style="width:100%">

            </div>
        </div>
    </div>
</div>-->

<!--<div class="ui grid card_graphics" style="width: 80%; margin: 0 auto;">
    <div class="four wide column" style="background: #cccccc">1</div>
    <div class="four wide column" style="background: aliceblue">2</div>
    <div class="four wide column" style="background: antiquewhite">3</div>
    <div class="four wide column" style="background: aqua">4</div>

        <div class="row">
            <div class="column">1</div>
            <div class="column">2</div>
            <div class="column">3</div>
            <div class="column">4</div>
        </div>
        <div class="row">
            <div class="column">5</div>
            <div class="column">6</div>
            <div class="column">7</div>
            <div class="column">8</div>
        </div>

        <div class="four wide column" style="background: red">1</div>
        <div class="four wide column">2</div>
        <div class="four wide column">3</div>
        <div class="four wide column">4</div>
        <div class="four wide column">5</div>
        <div class="four wide column">6</div>
        <div class="four wide column">7</div>
        <div class="four wide column">8</div>
</div>-->

<div class="ui two column grid" style="width: 82%;margin: 0 auto;">
    <div class="column">
        <div class="ui segment">
            <!--<canvas id="myChart" width="400" height="400"></canvas>-->
            <!--<img src="http://localhost/web/cms_cursos/res/img/ed.svg" alt="CREARQ" class="img">-->
            <h3>Categorías con mayor votación </h3>
            <div id="chartdivcategorias" style="width: 100%;height: 350px"></div>
        </div>
    </div>
    <div class="column">
        <div class="ui segment">
            <h3>Posts mas Vistos </h3>
            <div id="chartdivposts" style="width: 100%;height: 350px"></div>
        </div>
    </div>
</div>
