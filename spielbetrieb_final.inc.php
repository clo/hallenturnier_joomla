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

//definition
$file = 'src\spielbetrieb.xls';
$cells[0]= [ '1. Halbfinale',          'J91','O91',   'AF91',  'AW91',  'AZ91'];
$cells[1]= [ '2. Halbfinale',          'J95','O95',   'AF95',  'AW95',  'AZ95'];
$cells[2]= [ 'Spiel um Platz 3 und 4', 'J99','O99',   'AF95',  'AW99',  'AZ99'];
$cells[3]= [ 'Endspiel',               'J103','O103', 'AF103', 'AW103', 'AZ103'];

if (!file_exists($file)) {
  exit("$file exisitiert nicht." . EOL);
}
//read excel
$objPHPExcel = PHPExcel_IOFactory::load($file);
?>