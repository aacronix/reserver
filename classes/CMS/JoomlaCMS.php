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

class JoomlaCMS
{
    public function GetData()
    {
        $file = $_SERVER['DOCUMENT_ROOT'] . '/configuration.php';
        if ($dbconn = file_exists($file)) {
            @include($file);
            $jconfig = (array)(new JConfig);
            return new DatabaseAccessData($jconfig['user'], $jconfig['host'], $jconfig['password'], $jconfig['db']);
        } else {
            echo 'oh sorry';
        }
    }
}
