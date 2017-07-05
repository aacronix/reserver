<?php
/**
 * Created by PhpStorm.
 * User: artem.vasilev
 * Date: 7/5/2017
 * Time: 7:24 AM
 */

namespace system;

use CMS;

class CMSFactory
{
    public static function Create($type)
    {
        switch ($type) {
            case "bitrix":
                new CMS\BitrixCMS;
//            case "wp":
//                return new WordPressCMS();
//            case "joomla":
//                return new JoomlaCMS();
//            case "drupal4":
//                return new Drupal4CMS();
//            case "drupal5":
//                return new Drupal5CMS();
//            case "drupal6":
//                return new Drupal6CMS();
//            case "drupal7":
//                return new Drupal7CMS();
//            case "drupal8":
//                return new Drupal8CMS();
//            case "ms":
//                return new MadeSimpleCMS();
//            case "modxr":
//                return new ModxRevolutionCMS();
//            case "modxe":
//                return new ModxEvolutionCMS();
//            case "typo36":
//                return new Typo3Ver6CMS();
//            case "typo37":
//                return new Typo3Ver7CMS();
//            case "typo38":
//                return new Typo3Ver8CMS();
//            case "umi":
//                return new UmiCMS();
//            case "hostcms6":
//                return new HostCms6CMS();
//            default:
//                return new UndefinedCMS();
        }
    }
}