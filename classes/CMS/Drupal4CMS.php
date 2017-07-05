<?php
/**
 * Created by PhpStorm.
 * User: artem.vasilev
 * Date: 7/5/2017
 * Time: 7:17 AM
 */
namespace CMS;

class Drupal4CMS
{
    public function GetData()
    {
        global $dbLogin, $dbHost, $dbPassword, $dbName;

        $file = $_SERVER['DOCUMENT_ROOT'] . '/sites/default/settings.php';
        if ($dbconn = file_exists($file)) {
            unset($_SERVER['HTTP_HOST']);
            @include($file);
            echo 'the file is mine';
            $db = parse_url($db_url);
            $dbLogin = $db['user'];
            $dbHost = $db['host'];
            $dbPassword = $db['pass'];
            $dbName = GetRightTableName($db['path']);
        } else {
            echo 'oh sorry';
        }
    }
}