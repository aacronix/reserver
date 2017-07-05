<?php
/**
 * Created by PhpStorm.
 * User: artem.vasilev
 * Date: 7/5/2017
 * Time: 7:24 AM
 */

namespace system;
include_once(dirname(__FILE__) . '/../CMS/BitrixCMS.php');
include_once(dirname(__FILE__) . '/../CMS/Drupal4CMS.php');
include_once(dirname(__FILE__) . '/../CMS/Drupal5CMS.php');
include_once(dirname(__FILE__) . '/../CMS/Drupal6CMS.php');
include_once(dirname(__FILE__) . '/../CMS/Drupal7CMS.php');
include_once(dirname(__FILE__) . '/../CMS/Drupal8CMS.php');
include_once(dirname(__FILE__) . '/../CMS/HostCms6CMS.php');
include_once(dirname(__FILE__) . '/../CMS/JoomlaCMS.php');
include_once(dirname(__FILE__) . '/../CMS/MadeSimpleCMS.php');
include_once(dirname(__FILE__) . '/../CMS/ModxEvolutionCMS.php');
include_once(dirname(__FILE__) . '/../CMS/ModxRevolutionCMS.php');
include_once(dirname(__FILE__) . '/../CMS/Typo3Ver6CMS.php');
include_once(dirname(__FILE__) . '/../CMS/Typo3Ver7CMS.php');
include_once(dirname(__FILE__) . '/../CMS/Typo3Ver8CMS.php');
include_once(dirname(__FILE__) . '/../CMS/UmiCMS.php');
include_once(dirname(__FILE__) . '/../CMS/WordPressCMS.php');
include_once(dirname(__FILE__) . '/../CMS/UndefinedCMS.php');

use CMS;

class CMSFactory
{
    public static function Create($type)
    {
        switch ($type) {
            case "bitrix":
                return CMS\BitrixCMS::GetData();
            case "wp":
                return CMS\WordPressCMS::GetData();
            case "joomla":
                return CMS\JoomlaCMS::GetData();
            case "drupal4":
                return CMS\Drupal4CMS::GetData();
            case "drupal5":
                return CMS\Drupal5CMS::GetData();
            case "drupal6":
                return CMS\Drupal6CMS::GetData();
            case "drupal7":
                return CMS\Drupal7CMS::GetData();
            case "drupal8":
                return CMS\Drupal8CMS::GetData();
            case "ms":
                return CMS\MadeSimpleCMS::GetData();
            case "modxr":
                return CMS\ModxRevolutionCMS::GetData();
            case "modxe":
                return CMS\ModxEvolutionCMS::GetData();
            case "typo36":
                return CMS\Typo3Ver6CMS::GetData();
            case "typo37":
                return CMS\Typo3Ver7CMS::GetData();
            case "typo38":
                return CMS\Typo3Ver8CMS::GetData();
            case "umi":
                return CMS\UmiCMS::GetData();
            case "hostcms6":
                return CMS\HostCms6CMS::GetData();
            default:
                return CMS\UndefinedCMS::GetData();
        }
    }
}