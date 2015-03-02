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
$startfield = 86;
$endfield = 109;
$colTime = 'J';
$colGroup = 'G';
$colTeamHome = 'O';
$colTeamGuest = 'AF';
$colGoalHomeTeam = 'AW';
$colGoalGuestTeam = 'AZ';
$matchLengthInMin = 11;
$widthGroup='50px';
$widthTime='50px';
$widthHomeTeam='300px';
$widthGuestTeam='300px';
$widthHomeGoal='50px';
$widthGuestGoal='50px';
$messageNoMatch='Kein Match';
$excludedCell = '/J85/';

$now = date('H:i');
$nowInMin = (date('H') * 60) + date('i');
$nextInMin = $nowInMin + $matchLengthInMin;
$previousInMin = $nowInMin - $matchLengthInMin; 

//read excel
$objPHPExcel = PHPExcel_IOFactory::load($file);
$activeCol = '';
$previousCol = '';
$nextCol = '';
for ($i=$startfield;$i<=$endfield;$i++){
    $cell = $colTime.$i;
	if (!preg_match($excludedCell,$cell)){
	  
	  $format = $objPHPExcel->getActiveSheet()->getStyle($colTime.$i)->getNumberFormat()->getFormatCode();
	  $time = PHPExcel_Style_NumberFormat::toFormattedString($objPHPExcel->getActiveSheet()->getCell($colTime.$i)->getCalculatedValue(),$format);
	  $cellTimeArr = preg_split('/:/',$time);
	  $cellTimeInMin = ($cellTimeArr[0] * 60) + $cellTimeArr[1];
	  
	  $active = '-';

	  //active
	  if ($nowInMin<($cellTimeInMin+$matchLengthInMin) && $nowInMin>=$cellTimeInMin){
	     $active = 'A';
		 $activeCol = $i;
	  }
	  //previous
	  if ($previousInMin<($cellTimeInMin+$matchLengthInMin) && $previousInMin>=$cellTimeInMin){
	     $active = 'P';
		 $previousCol = $i;
	  }
	  //next
	  if ($nextInMin<($cellTimeInMin+$matchLengthInMin) && $nextInMin>=$cellTimeInMin){
	     $active = 'N';
		 $nextCol = $i;
	  }
	  
	}
}
?>