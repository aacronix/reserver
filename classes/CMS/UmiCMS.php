<?php
/**
 * Created by PhpStorm.
 * User: artem.vasilev
 * Date: 7/5/2017
 * Time: 7:22 AM
 */
namespace CMS;

class UmiCMS
{
    public function GetData()
    {
        global $dbLogin, $dbHost, $dbPassword, $dbName;

        $file = $_SERVER['DOCUMENT_ROOT'] . '/config.ini';
        if ($dbconn = file_exists($file)) {
            $ini_array = parse_ini_file($file, true);
            echo 'the file is mine';
            $dbLogin = $ini_array['connections']['core.login'];
            $dbHost = $ini_array['connections']['core.host'];
            $dbPassword = $ini_array['connections']['core.password'];
            $dbName = $ini_array['connections']['core.dbname'];
        } else {
            echo 'oh sorry';
        }
    }
}