<!DOCTYPE html>
<html dir="ltr" lang="">
<head>  

    <title>PAW</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="robots" content="index, follow">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		
	   </style>        
</head>
<body>
<form>
Počet opakování: <input name="pocet" value="3"/> </br>
Slovo k opakování: <input name="brum" value="Tři" /></p>
Co bys rád? </br>
Číslovaný seznam?<input type="radio" name="stejne" value="prvni" checked = "checked">
? <input type="radio" name="stejne" value="druha">
<input type = "submit"/>
</form>



<?php
	print $_REQUEST["pocet"];
	print $_REQUEST["brum"];
	print "</p><b><h1>Výsledek:</h1></b>";
	
	if ($_REQUEST["stejne"]=="prvni") {
		print "<ol>";
	for ($i = 0; $i<$_REQUEST["pocet"]; $i++)  { 
		print  "<li><b>".$i.$_REQUEST["brum"]."</b></li>" ;
		
	}
	print "</ol>";
	}
	else {
		print "<ul>";
		for ($i = 0; $i<$_REQUEST["pocet"]; $i++)  { 
		print  "<li>".$i.$_REQUEST["brum"]."</li>" ;
		
		
	}
	print "</ul>";
	}
	
?>
</body>
</html>

