<?php
/**
 * Created by PhpStorm.
 * User: artem.vasilev
 * Date: 7/5/2017
 * Time: 7:19 AM
 */
namespace CMS;

class Drupal8CMS
{
    public function GetData()
    {
        global $dbLogin, $dbHost, $dbPassword, $dbName;

        $file = $_SERVER['DOCUMENT_ROOT'] . '/sites/default/settings.php';
        if ($dbconn = file_exists($file)) {
            @include($file);
            echo 'the file is mine';
            $dbLogin = $databases['default']['default']['username'];
            $dbHost = $databases['default']['default']['host'];
            $dbPassword = $databases['default']['default']['password'];
            $dbName = $databases['default']['default']['database'];
        } else {
            echo 'oh sorry';
        }
    }
}