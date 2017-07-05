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

class Typo3Ver7CMS
{
    public function GetData()
    {
        $file = $_SERVER['DOCUMENT_ROOT'] . '/typo3conf/LocalConfiguration.php';
        if ($dbconn = file_exists($file)) {
            $data = @include($file);
            return new DatabaseAccessData($data['DB']['username'], $data['DB']['host'], $data['DB']['password'], $data['DB']['database']);
        } else {
            echo 'oh sorry';
        }
    }
}