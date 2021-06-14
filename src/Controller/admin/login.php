<?php



//require $_SERVER['DOCUMENT_ROOT']."/cms_ucv2/src/Repository/admin/AdminRepository.php";
require "{$_SERVER['DOCUMENT_ROOT']}/cms_ucv2/vendor/autoload.php";
use App\Repository\admin\AdminRepository;
$admin = new AdminRepository();

$login = $admin->loginAdmin($_POST['email'], $_POST['pass']);

if ($login) {
    //session_start();
    //echo session_id();
    $_SESSION['admin'] = $_POST['email'];
    echo "true";
}else{
    echo "false";
}

//$post = $admin->registrar_admin($_)
