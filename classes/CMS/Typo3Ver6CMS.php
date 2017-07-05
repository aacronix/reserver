<?php
/**
 * Created by PhpStorm.
 * User: artem.vasilev
 * Date: 7/5/2017
 * Time: 7:21 AM
 */
namespace CMS;

class Typo3Ver6CMS
{
    public function GetData()
    {
        global $dbLogin, $dbHost, $dbPassword, $dbName;

        $file = $_SERVER['DOCUMENT_ROOT'] . '/typo3conf/LocalConfiguration.php';
        if ($dbconn = file_exists($file)) {
            $data = @include($file);
            echo 'the file is mine';
            $dbLogin = $data['DB']['username'];
            $dbHost = $data['DB']['host'];
            $dbPassword = $data['DB']['password'];
            $dbName = $data['DB']['database'];
        } else {
            echo 'oh sorry';
        }
    }
}