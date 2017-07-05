<?php
/**
 * Created by PhpStorm.
 * User: artem.vasilev
 * Date: 7/5/2017
 * Time: 7:20 AM
 */
namespace CMS;

class MadeSimpleCMS
{
    public function GetData()
    {
        global $dbLogin, $dbHost, $dbPassword, $dbName;

        $file = $_SERVER['DOCUMENT_ROOT'] . '/config.php';
        if ($dbconn = file_exists($file)) {
            @include($file);
            echo 'the file is mine';
            $dbLogin = $config['db_username'];
            $dbHost = $config['db_hostname'];
            $dbPassword = $config['db_password'];
            $dbName = $config['db_name'];
        } else {
            echo 'oh sorry';
        }
    }
}