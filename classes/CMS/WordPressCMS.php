<?php
/**
 * Created by PhpStorm.
 * User: artem.vasilev
 * Date: 7/5/2017
 * Time: 7:17 AM
 */

namespace CMS;
include_once(dirname(__FILE__) . '/../system/DatabaseAccessData.php');

use DatabaseAccessData;

class WordPressCMS
{
    public function GetData()
    {
        $file = $_SERVER['DOCUMENT_ROOT'] . '/wp-config.php';
        if ($dbconn = file_exists($file)) {
            @include($file);
            return new DatabaseAccessData(DB_USER, DB_HOST, DB_PASSWORD, DB_NAME);
        } else {
            echo 'oh sorry';
        }
    }
}