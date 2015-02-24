<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
date_default_timezone_set('Europe/Zurich');
define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');

/** Include PHPExcel_IOFactory */
//require_once dirname(__FILE__) . 'PHPExcel\Classes\PHPExcel\IOFactory.php';
require_once 'PHPExcel\Classes\PHPExcel\IOFactory.php';

//definition
$file = 'Zeitplan_Essen_2014.xlsx';
$startfield = '12';
$endfield = '26';
$colTime = 'A';
$colGroup = 'E';
$excludedCell = '/A11/';
if (!file_exists($file)) {
  exit("$file exisitiert nicht." . EOL);
}

//read excel
$objPHPExcel = PHPExcel_IOFactory::load($file);

for ($i=$startfield;$i<=$endfield;$i++){
    $cell = $colTime.$i;
	if (!preg_match($excludedCell,$cell)){
	  print $colTime.$i.": ";
	  $format = $objPHPExcel->getActiveSheet()->getStyle($colTime.$i)->getNumberFormat()->getFormatCode();
	  $calcTime = $objPHPExcel->getActiveSheet()->getCell($colTime.$i)->getCalculatedValue();
	  $time = date($format,$calcTime);
	  print $time . '('.$calcTime .')'.' | ';
	  print $objPHPExcel->getActiveSheet()->getCell($colGroup.$i)->getCalculatedValue() . EOL;
	}
}

//get correct line


?>