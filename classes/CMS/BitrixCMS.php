<?php
/**
 * Created by PhpStorm.
 * User: artem.vasilev
 * Date: 7/5/2017
 * Time: 7:16 AM
 */

namespace CMS;
include_once(dirname(__FILE__) . '/../system/DatabaseAccessData.php');

use DatabaseAccessData;

class BitrixCMS
{
    public static function GetData()
    {
        $file = $_SERVER['DOCUMENT_ROOT'] . '/bitrix/php_interface/dbconn.php';
        if ($dbconn = file_exists($file)) {
            @include($file);
            return new DatabaseAccessData($DBLogin, $DBHost, $DBPassword, $DBName);
        } else {
            echo 'oh sorry';
        }
    }
}