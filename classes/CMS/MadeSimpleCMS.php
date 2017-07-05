<?php
/**
 * Created by PhpStorm.
 * User: artem.vasilev
 * Date: 7/5/2017
 * Time: 7:20 AM
 */

namespace CMS;
include_once(dirname(__FILE__) . '/../system/DatabaseAccessData.php');

use DatabaseAccessData;

class MadeSimpleCMS
{
    public function GetData()
    {
        $file = $_SERVER['DOCUMENT_ROOT'] . '/config.php';
        if ($dbconn = file_exists($file)) {
            @include($file);
            return new DatabaseAccessData($config['db_username'], $config['db_hostname'], $config['db_password'], $config['db_name']);
        } else {
            echo 'oh sorry';
        }
    }
}