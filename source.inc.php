<?
if (!defined('EOL')){
  define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');
}
$file = 'src\excel\14_Spielplan_Jun_F_4x4_15M.xls';
if (!file_exists($file)) {
  exit("$file exisitiert nicht." . EOL);
}
?>