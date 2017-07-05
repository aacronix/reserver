<?php

namespace cust\dirZip;

include_once(dirname(__FILE__) . '/../../../core/defines.php');

use ZipArchive;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;

ini_set('max_execution_time', 600);
ini_set('memory_limit','1024M');

/*
 * PHP Recursive Backup-Script to ZIP-File
 * (c) 2012: Marvin Menzerath. (http://menzerath.eu)
*/
// Make sure the script can handle large folders/files
// Start the backup!
// Here the magic happens :)
function zipData($source, $destination)
{
    if (extension_loaded('zip')) {
        if (file_exists($source)) {
            $zip = new ZipArchive();
            if ($zip->open($destination, ZIPARCHIVE::CREATE)) {
                $source = realpath($source);
                if (is_dir($source)) {
                    $iterator = new RecursiveDirectoryIterator($source);
                    // skip dot files while iterating
                    $iterator->setFlags(RecursiveDirectoryIterator::SKIP_DOTS);
                    $files = new RecursiveIteratorIterator($iterator, RecursiveIteratorIterator::SELF_FIRST);
                    foreach ($files as $file) {
                        $file = realpath($file);
                        if (filesize($file) > MAX_FILESIZE) {
                            echo('file with name ' . basename($file) . ' because have large size(more than 50Mb): ' . formatSizeUnits(filesize($file)) . '<br>');
                            continue;
                        }
                        if (is_dir($file)) {
                            $zip->addEmptyDir(str_replace($source . '/', '', $file . '/'));
                        } else if (is_file($file)) {
                            $zip->addFromString(str_replace($source . '/', '', $file), file_get_contents($file));
                        }
                    }
                } else if (is_file($source)) {
                    $zip->addFromString(basename($source), file_get_contents($source));
                }
            }
            return $zip->close();
        }
    }
    return false;
}
?>