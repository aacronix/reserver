<?php
/**
 * Created by PhpStorm.
 * User: artem.vasilev
 * Date: 7/5/2017
 * Time: 7:17 AM
 */
namespace CMS;

class WordPressCMS
{
    public function GetData()
    {
        global $dbLogin, $dbHost, $dbPassword, $dbName;

        $file = $_SERVER['DOCUMENT_ROOT'] . '/wp-config.php';
        if ($dbconn = file_exists($file)) {
            @include($file);
            echo 'the file is mine';
            $dbLogin = DB_USER;
            $dbHost = DB_HOST;
            $dbPassword = DB_PASSWORD;
            $dbName = DB_NAME;
        } else {
            echo 'oh sorry';
        }
    }
}