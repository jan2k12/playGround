<?php
/**
 * Make a lots of Pharn!
 * 
 * @author Jan-David Siegl <jan@siegl-netz.de>
 * @since 09.08.2015
 */
$srcRoot="src/";
$buildRoot="build/";

$phar=new Phar($buildRoot."/pharTest.phar",  FilesystemIterator::CURRENT_AS_FILEINFO | FilesystemIterator::KEY_AS_FILENAME,"pharTest.phar");
$phar['index.php']=  file_get_contents($srcRoot."index.php");
$phar['AppManager.php']=  file_get_contents($srcRoot."AppManager.php");
$phar->setStub($phar->createDefaultStub('index.php'));

copy($srcRoot."config.ini", $buildRoot."config.ini");