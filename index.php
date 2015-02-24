<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>Erich Zbinden Hallenturnier 2015</title> 
<script>

var i=0;
var webpageArray = [
"http://localhost/joomla_hallenturnier/index.php/impressionen",
"http://localhost/joomla_hallenturnier/index.php/spielbetrieb",
"http://localhost/joomla_hallenturnier/index.php/rangliste-vorrunde",
"http://localhost/joomla_hallenturnier/index.php/essensplan",
]
setInterval(openUrl, 10000); // Wait 10 seconds
function openUrl(){
   console.log('i=' + i + ' = ' + webpageArray[i]);
   if (i>=webpageArray.length){
     i=0;
   }
   var iframe = document.getElementById("myframe");
   iframe.src = webpageArray[i];
   //setTimeout(openUrl(i,webpageArray),5000);
   i++;
   return false;
}

/*function loadNextPage(dir) {   
	cnt+=dir;
	if (cnt<0) cnt=webpageArray.length-1; // wrap
	else if (cnt>= webpageArray.length) cnt=0; // wrap
	var iframe = document.getElementById("myframe"); 
	iframe.src = webpageArray[cnt]; 
	return false; // mandatory!
} */

</script>

</head>
<body>
  <iframe seamless="seamless" style="overflow:hidden;" scrolling="no" height='100%' width='100%' id='myframe' src="http://localhost/joomla_hallenturnier" />
</body>
</html>