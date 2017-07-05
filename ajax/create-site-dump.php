<?php
/**
 * Created by PhpStorm.
 * User: artem.vasilev
 * Date: 7/5/2017
 * Time: 10:19 PM
 */
include_once(dirname(__FILE__) . '/../libs/cust/dirZip/dirZip.php');

use function cust\dirZip\zipData;

zipData(dirname(__FILE__) . '\..\..\\', dirname(__FILE__) . '\..\done\dump.zip');