<?php
/**
 * Created by PhpStorm.
 * User: artem.vasilev
 * Date: 7/5/2017
 * Time: 7:22 AM
 */
namespace CMS;

class HostCms6CMS
{
    public function GetData()
    {
        global $dbLogin, $dbHost, $dbPassword, $dbName;

        $file = $_SERVER['DOCUMENT_ROOT'] . '/modules/core/config/database.php';
        if ($dbconn = file_exists($file)) {
            $data = @include($file);
            echo 'the file is mine';
            $dbLogin = $data['default']['username'];
            $dbHost = $data['default']['host'];
            $dbPassword = $data['default']['password'];
            $dbName = $data['default']['database'];
        } else {
            echo 'oh sorry';
        }
    }
}