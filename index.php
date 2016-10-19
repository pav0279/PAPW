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
<input type = "submit"/></br>
Zadejte text oddělený mezerou: <textarea name="text1">
</textarea>
</form>



<?php
	print $_REQUEST["pocet"];
	print $_REQUEST["brum"];
	print "<p>".$_REQUEST["text1"]."</p>";
	$pocet_znaku = strlen($_REQUEST["text1"]);
	$pieces =explode(" ",$_REQUEST["text1"]);
	print "<h2>"."Druhý znak:"."</h2>";
	print "<p>".$pieces[1]."</p>";
	print "<h2>"."Počet znaků:"."</h2>";
	echo $pocet_znaku;
	
	print "<h2>"."Tučná Ostrava: "."</h2>";
	foreach ($pieces as $value)  { 
		if ($value=="Ostrava") {
		print  "<h3>".$value."</h3>";
		
		}
	}
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

