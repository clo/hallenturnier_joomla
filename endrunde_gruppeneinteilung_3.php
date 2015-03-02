<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
date_default_timezone_set('Europe/Zurich');
if (!defined('EOL')){
  define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');
}

/** Include PHPExcel_IOFactory */
//require_once dirname(__FILE__) . 'PHPExcel\Classes\PHPExcel\IOFactory.php';
require_once 'src\PHPExcel\Classes\PHPExcel\IOFactory.php';
require 'src\source.inc.php';

//definition
$startfield = 78;
$endfield = 81;
$colRang = 'F';
$colTeam = 'H';
$colGroup = 'B';
//$colPunkte = 'P';
//$colTore = 'S';
//$colGegenTore = 'V';
//$colDiff = 'X';
$excludedCell = '//';

if (!file_exists($file)) {
  exit("$file exisitiert nicht." . EOL);
}
//read excel
$objPHPExcel = PHPExcel_IOFactory::load($file);
?>