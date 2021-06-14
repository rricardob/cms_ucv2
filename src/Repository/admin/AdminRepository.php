<?php

namespace App\Repository\admin;
//require "{$_SERVER['DOCUMENT_ROOT']}/cms_ucv2/config/DbProvider.php";
//require "{$_SERVER['DOCUMENT_ROOT']}/cms_ucv2/vendor/autoload.php";
use Medoo\Medoo;
use Db\DbProvider;

class AdminRepository
{

    private $database;

    public function __construct()
    {
        $this->database = DbProvider::getConnection();
    }

    public function loginAdmin($username_email, $pass): bool
    {
        //global $database;

        $data = $this->database->select("admin", [
            "password"
        ], [
            "OR" => [
                "username" => $username_email,
                "email" => $username_email
            ]
        ]);

        $password_db = $data[0]["password"];

        if ($pass == $password_db) {
            session_start();
            return true;
        } else {
            return false;
        }
    }
}
