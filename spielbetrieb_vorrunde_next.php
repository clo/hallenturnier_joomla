<?php
require 'spielbetrieb.inc.php';

//active	  
if (!empty($nextCol)){
  $group = $objPHPExcel->getActiveSheet()->getCell($colGroup.$nextCol)->getCalculatedValue();
  $format = $objPHPExcel->getActiveSheet()->getStyle($colTime.$nextCol)->getNumberFormat()->getFormatCode();
  $time = PHPExcel_Style_NumberFormat::toFormattedString($objPHPExcel->getActiveSheet()->getCell($colTime.$nextCol)->getCalculatedValue(),$format);
  $homeTeam = $objPHPExcel->getActiveSheet()->getCell($colTeamHome.$nextCol)->getCalculatedValue();
  $guestTeam = $objPHPExcel->getActiveSheet()->getCell($colTeamGuest.$nextCol)->getCalculatedValue();
  $homeGoal = $objPHPExcel->getActiveSheet()->getCell($colGoalHomeTeam.$nextCol)->getCalculatedValue();
  $guestGoal = $objPHPExcel->getActiveSheet()->getCell($colGoalGuestTeam.$nextCol)->getCalculatedValue();
  //print $group." ".$time." ".$homeTeam." : ".$guestTeam." ".$homeGoal." : ".$guestGoal . EOL; 
}
?>