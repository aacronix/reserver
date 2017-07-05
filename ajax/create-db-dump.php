<?php
/**
 * Created by PhpStorm.
 * User: artem.vasilev
 * Date: 7/5/2017
 * Time: 6:19 PM
 */
include_once(dirname(__FILE__) . '/../classes/system/DatabaseAccessData.php');
include_once(dirname(__FILE__) . '/../libs/Ifsnop/Mysqldump/Mysqldump.php');

if(isset($_POST['host']) && isset($_POST['login']) && isset($_POST['password']) && isset($_POST['dbName'])) {
    $login = $_POST['login'];
    $host = $_POST['host'];
    $password = $_POST['password'];
    $dbName = $_POST['dbName'];

    $dbAccessData = new DatabaseAccessData($login, $host, $password, $dbName);

    $dump = new Ifsnop\Mysqldump\Mysqldump($dbAccessData->GetMySqlUrl(), $dbAccessData->login, $dbAccessData->password);
    $dump->start(dirname(__FILE__) . '/../done/dump_sql.sql');
}