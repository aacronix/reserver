<?php
include_once(dirname(__FILE__) . '/libs/Ifsnop/Mysqldump/Mysqldump.php');
include_once(dirname(__FILE__) . '/libs/cust/dirZip/dirZip.php');
include_once(dirname(__FILE__) . '/classes/system/CMSFactory.php');

use system\CMSFactory;

define('MAX_FILESIZE', 50000000); // 50Mb

error_reporting(E_ALL);

ini_set('max_execution_time', 600);
ini_set('memory_limit', '1024M');
// Start the backup!
// Here the magic happens :)

$dbAccessData = CMSFactory::Create('bitrix');

var_dump($dbAccessData);

//$dump = new Ifsnop\Mysqldump\Mysqldump('mysql:host=u476246.mysql.masterhost.ru;dbname=u476246', 'u476246', '.ApiDesT7L');
//$dump->start(dirname(__FILE__).'/done/dump_sql.sql');

//cust\dirZip\zipData(dirname(__FILE__), dirname(__FILE__) . '/done/dump.zip');