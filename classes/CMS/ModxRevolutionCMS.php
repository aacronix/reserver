<?php
/**
 * Created by PhpStorm.
 * User: artem.vasilev
 * Date: 7/5/2017
 * Time: 7:20 AM
 */
namespace CMS;

class ModxRevolutionCMS
{
    public function GetData()
    {
        global $dbLogin, $dbHost, $dbPassword, $dbName;

        $file = $_SERVER['DOCUMENT_ROOT'] . '/core/config/config.inc.php';
        if ($dbconn = file_exists($file)) {
            @include($file);
            echo 'the file is mine';
            $dbLogin = $database_user;
            $dbHost = $database_server;
            $dbPassword = $database_password;
            $dbName = $dbase;
        } else {
            echo 'oh sorry';
        }
    }
}