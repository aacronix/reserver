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

class HostCms6CMS
{
    public function GetData()
    {
        $file = $_SERVER['DOCUMENT_ROOT'] . '/modules/core/config/database.php';
        if ($dbconn = file_exists($file)) {
            $data = @include($file);
            return new DatabaseAccessData($data['default']['username'], $data['default']['host'], $data['default']['password'], $data['default']['database']);
        } else {
            echo 'oh sorry';
        }
    }
}