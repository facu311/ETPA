
<?php
function contador()
{
$archivo ="contador.txt";

$f= fopen($archivo, "r");
$contador= fread($f, filesize($archivo));

	return $contador;
}

function contador2()
{
$archivo ="contador2.txt";

$f= fopen($archivo, "r");
$contador2= fread($f, filesize($archivo));

	return $contador2;
}
$visitante=contador2();
$n=contador();
$result= $visitante*100/($visitante + $n);
$resultentero= (int)$result;
echo "Tu decisión fue igual a la del ".$resultentero;
echo "% de los lectores";
$dejavu= 0;
if ($n>50) {
	$dejavu++;
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<br>
<meter style=" height:20%"  min="0"
max="100"  optimum="20" low="33" high="66"   value="<?php echo($result)?>">
</meter>
<br>
<?php echo "el nivel de dejavu es de ".$dejavu;
?>
</body>
</html>