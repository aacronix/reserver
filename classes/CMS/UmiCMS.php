<?php
/**
 * Created by PhpStorm.
 * User: artem.vasilev
 * Date: 7/5/2017
 * Time: 7:22 AM
 */

namespace CMS;
include_once(dirname(__FILE__) . '/../system/DatabaseAccessData.php');

use DatabaseAccessData;

class UmiCMS
{
    public function GetData()
    {
        $file = $_SERVER['DOCUMENT_ROOT'] . '/config.ini';
        if ($dbconn = file_exists($file)) {
            $ini_array = parse_ini_file($file, true);
            return new DatabaseAccessData($ini_array['connections']['core.login'], $ini_array['connections']['core.host'], $ini_array['connections']['core.password'], $ini_array['connections']['core.dbname']);
        } else {
            echo 'oh sorry';
        }
    }
}