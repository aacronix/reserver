<?php
/**
 * Created by PhpStorm.
 * User: artem.vasilev
 * Date: 7/5/2017
 * Time: 7:19 AM
 */

namespace CMS;
include_once(dirname(__FILE__) . '/../system/DatabaseAccessData.php');

use DatabaseAccessData;

class Drupal7CMS
{
    public function GetData()
    {
        $file = $_SERVER['DOCUMENT_ROOT'] . '/sites/default/settings.php';
        if ($dbconn = file_exists($file)) {
            @include($file);
            return new DatabaseAccessData($databases['default']['default']['username'], $databases['default']['default']['host'], $databases['default']['default']['password'], $databases['default']['default']['database']);
        } else {
            echo 'oh sorry';
        }
    }
}