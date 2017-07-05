<?php

/**
 * Created by PhpStorm.
 * User: artem.vasilev
 * Date: 7/5/2017
 * Time: 7:17 AM
 */
namespace CMS;

class JoomlaCMS
{
    public function GetData()
    {
        global $dbLogin, $dbHost, $dbPassword, $dbName;

        $file = $_SERVER['DOCUMENT_ROOT'] . '/configuration.php';
        if ($dbconn = file_exists($file)) {
            @include($file);
            echo 'the file is mine';
            $jconfig = (array)(new JConfig);
            $dbLogin = $jconfig['user'];
            $dbHost = $jconfig['host'];
            $dbPassword = $jconfig['password'];
            $dbName = $jconfig['db'];
        } else {
            echo 'oh sorry';
        }
    }
}
