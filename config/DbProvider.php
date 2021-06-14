<?php

namespace Db;

require "{$_SERVER['DOCUMENT_ROOT']}/cms_ucv2/vendor/autoload.php";

use Medoo\Medoo;
use PDOException;

class DbProvider{
    private static $_db;

    public static function getConnection() {
        if (!self::$_db) {
            try {
                $database = new Medoo([
                    // [required]
                    'type' => 'mysql',
                    'host' => 'localhost',
                    'database' => 'ucv_project',
                    'username' => 'root',
                    'password' => ''
                ]);
                self::$_db = $database;
            } catch (PDOException $e) {
                echo "No se pudo conectar a la base de datos Error -> {$e}";
            }
        }

        return self::$_db;
    }

}
