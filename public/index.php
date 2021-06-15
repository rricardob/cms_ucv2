<?php /*require 'user/controller/app_top_users.php';*/
session_start();
require '../src/helper/View.php';
require "{$_SERVER['DOCUMENT_ROOT']}/cms_ucv2/vendor/autoload.php";
//require $_SERVER['DOCUMENT_ROOT'].'/cms_ucv2/src/Impl/post/PostImpl.php';

use App\helper\View;
use App\Impl\post\PostImpl;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
    <link href="https://file.myfontastic.com/mie5bpaSEK4AC4TPTHLHvQ/icons.css" rel="stylesheet">
    <link rel="stylesheet" href="../resources/css/style.css">
    <link rel="shurtcon icon" href="../resources/img/logo.jpg">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <title>Administrador</title>
</head>
<body>
<?php

//luego corregir
if (isset($_SESSION['admin'])) {
    View::loadView("admin/nav");
} ?>
<?php

// con el $_GET['section'] se recupera la seccion de la url en la que estamos posicionados
if (!isset($_SESSION['admin'])) {
    //require 'admin/login.php';
    View::loadView("admin/login");
} elseif (isset($_SESSION['admin']) &&
    !isset($_GET['section'])) {
    View::loadView("admin/main");
} elseif (isset($_SESSION['admin']) &&
    isset($_GET['section']) &&
    $_GET['section'] == "main") {
    View::loadView("admin/main");
} elseif (isset($_SESSION['admin']) &&
    isset($_GET['section']) &&
    $_GET['section'] == "posts") {
    $obj = new PostImpl();
    $data = $obj->getAllPost();
    View::loadView("post/posts", $data);
}
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"
        integrity="sha512-dqw6X88iGgZlTsONxZK9ePmJEFrmHwpuMrsUChjAw1mRUhUITE5QU9pkcSox+ynfLhL15Sv2al5A0LVyDCmtUw=="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>
<!--<script src="https://cdn.jsdelivr.net/npm/chart.js@3.2.1/dist/chart.min.js"></script>-->
<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/spiritedaway.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
<script src="../resources/js/app.js"></script>
<script src="../resources/js/script.js"></script>
<script src="../resources/js/post/posts.js"></script>
</body>
</html>
