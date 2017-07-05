<?php
include_once(dirname(__FILE__) . '/libs/Ifsnop/Mysqldump/Mysqldump.php');
include_once(dirname(__FILE__) . '/libs/cust/dirZip/dirZip.php');
include_once(dirname(__FILE__) . '/classes/system/CMSFactory.php');

use system\CMSFactory;

error_reporting(E_ALL);

ini_set('max_execution_time', 600);
ini_set('memory_limit', '1024M');

$dbAccessData = CMSFactory::Create('bitrix');

var_dump($dbAccessData);

$dump = new Ifsnop\Mysqldump\Mysqldump($dbAccessData->GetMySqlUrl(), $dbAccessData->login, $dbAccessData->password);
$dump->start(dirname(__FILE__).'/done/dump_sql.sql');

//cust\dirZip\zipData(dirname(__FILE__), dirname(__FILE__) . '/done/dump.zip');