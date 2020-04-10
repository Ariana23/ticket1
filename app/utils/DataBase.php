<?php

namespace App\Utils;


class DataBase
{
    private function __construct()
    {
    }

    /**
     * @return false|mysqli
     */
    public static function getConnection()
    {
        return mysqli_connect(
            'localhost',
            'root',
            '',
            'php_mysql_crud'
        );
    }
}