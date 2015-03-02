<?
if (!defined('EOL')){
  define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');
}
$file = 'src\13_Spielplan_Jun_E_4x4_15M.xls';
if (!file_exists($file)) {
  exit("$file exisitiert nicht." . EOL);
}
?>