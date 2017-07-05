<?php
/**
 * Created by PhpStorm.
 * User: artem.vasilev
 * Date: 7/5/2017
 * Time: 8:59 PM
 */
include_once(dirname(__FILE__) . '/../classes/system/CMSFactory.php');

use system\CMSFactory;

if(isset($_POST['cms_type'])) {
    $cmsType = $_POST['cms_type'];
    $dbAccessData = CMSFactory::Create($cmsType);

    echo json_encode($dbAccessData->ToArray());
}