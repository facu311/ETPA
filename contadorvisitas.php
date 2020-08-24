<?php

function contador()
{
$archivo ="contador.txt";
$contador = 0;
$f= fopen($archivo, "r");

if ($f) {
	$contador= fread($f, filesize($archivo));
	$contador++;
	fclose($f);
}
$f= fopen($archivo, "w+");
if ($f) {
	fwrite($f, $contador);
	fclose($f);
}
	return $contador;
}
$visitante=contador();
echo "eres el visitante :".$visitante;
?>
</!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
funciona combinado?
<?php 
echo "eres el visitante :".$visitante;
?>

</body>
</html>