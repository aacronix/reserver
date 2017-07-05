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

class ModxRevolutionCMS
{
    public function GetData()
    {
        $file = $_SERVER['DOCUMENT_ROOT'] . '/core/config/config.inc.php';
        if ($dbconn = file_exists($file)) {
            @include($file);
            return new DatabaseAccessData($database_user, $database_server, $database_password, $dbase);
        } else {
            echo 'oh sorry';
        }
    }
}