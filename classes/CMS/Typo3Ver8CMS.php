<?php
/**
 * Created by PhpStorm.
 * User: artem.vasilev
 * Date: 7/5/2017
 * Time: 7:21 AM
 */
namespace CMS;

class Typo3Ver8CMS
{
    public function GetData()
    {
        global $dbLogin, $dbHost, $dbPassword, $dbName;

        $file = $_SERVER['DOCUMENT_ROOT'] . '/manager/includes/config.inc.php';
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