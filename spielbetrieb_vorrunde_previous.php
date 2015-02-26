<?php
require 'spielbetrieb.inc.php';

//active	  
if (!empty($previousCol)){
  $group = $objPHPExcel->getActiveSheet()->getCell($colGroup.$previousCol)->getCalculatedValue();
  $format = $objPHPExcel->getActiveSheet()->getStyle($colTime.$previousCol)->getNumberFormat()->getFormatCode();
  $time = PHPExcel_Style_NumberFormat::toFormattedString($objPHPExcel->getActiveSheet()->getCell($colTime.$previousCol)->getCalculatedValue(),$format);
  $homeTeam = $objPHPExcel->getActiveSheet()->getCell($colTeamHome.$previousCol)->getCalculatedValue();
  $guestTeam = $objPHPExcel->getActiveSheet()->getCell($colTeamGuest.$previousCol)->getCalculatedValue();
  $homeGoal = $objPHPExcel->getActiveSheet()->getCell($colGoalHomeTeam.$previousCol)->getCalculatedValue();
  $guestGoal = $objPHPExcel->getActiveSheet()->getCell($colGoalGuestTeam.$previousCol)->getCalculatedValue();
  //print $group." ".$time." ".$homeTeam." : ".$guestTeam." ".$homeGoal." : ".$guestGoal . EOL; 
}
?>