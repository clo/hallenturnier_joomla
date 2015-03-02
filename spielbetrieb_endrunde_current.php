<?php
require 'spielbetrieb_endrunde.inc.php';

//active	  
if (!empty($activeCol)){
  $group = $objPHPExcel->getActiveSheet()->getCell($colGroup.$activeCol)->getCalculatedValue();
  $format = $objPHPExcel->getActiveSheet()->getStyle($colTime.$activeCol)->getNumberFormat()->getFormatCode();
  $time = PHPExcel_Style_NumberFormat::toFormattedString($objPHPExcel->getActiveSheet()->getCell($colTime.$activeCol)->getCalculatedValue(),$format);
  $homeTeam = $objPHPExcel->getActiveSheet()->getCell($colTeamHome.$activeCol)->getCalculatedValue();
  $guestTeam = $objPHPExcel->getActiveSheet()->getCell($colTeamGuest.$activeCol)->getCalculatedValue();
  $homeGoal = $objPHPExcel->getActiveSheet()->getCell($colGoalHomeTeam.$activeCol)->getCalculatedValue();
  $guestGoal = $objPHPExcel->getActiveSheet()->getCell($colGoalGuestTeam.$activeCol)->getCalculatedValue();
  //print $group." ".$time." ".$homeTeam." : ".$guestTeam." ".$homeGoal." : ".$guestGoal . EOL; 
}
?>