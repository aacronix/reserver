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

class Drupal4CMS
{
    public function GetData()
    {
        $file = $_SERVER['DOCUMENT_ROOT'] . '/sites/default/settings.php';
        if ($dbconn = file_exists($file)) {
            unset($_SERVER['HTTP_HOST']);
            @include($file);
            $db = parse_url($db_url);
            return new DatabaseAccessData($db['user'], $db['host'], $db['pass'], GetRightTableName($db['path']));

        } else {
            echo 'oh sorry';
        }
    }
}