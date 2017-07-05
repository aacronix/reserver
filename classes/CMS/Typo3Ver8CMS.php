<?php
/**
 * Created by PhpStorm.
 * User: artem.vasilev
 * Date: 7/5/2017
 * Time: 7:21 AM
 */

namespace CMS;
include_once(dirname(__FILE__) . '/../system/DatabaseAccessData.php');

use DatabaseAccessData;

class Typo3Ver8CMS
{
    public function GetData()
    {
        $file = $_SERVER['DOCUMENT_ROOT'] . '/manager/includes/config.inc.php';
        if ($dbconn = file_exists($file)) {
            @include($file);
            return new DatabaseAccessData($database_user, $database_server, $database_password, $dbase);
        } else {
            echo 'oh sorry';
        }
    }
}