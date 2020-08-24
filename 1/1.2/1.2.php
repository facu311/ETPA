<!-- CONTADOR -->
<?php

function contador2()
{
$archivo2 ="contador2.txt";
$contador2 = 0;
$f= fopen($archivo2, "r");

if ($f) {
	$contador2= fread($f, filesize($archivo2));
	$contador2++;
	fclose($f);
}
$f= fopen($archivo2, "w+");
if ($f) {
	fwrite($f, $contador2);
	fclose($f);
}
	return $contador2;
}
$visitante=contador2();

?>



<!-- CONTADOR -->


<!-- Lee el valor de la otra opcion -->
<?php

function contador1()
{
$archivo1 ="../1.1/contador1.txt";
$contador1 = 0;
$f= fopen($archivo1, "r");

if ($f) {
	$contador1= fread($f, filesize($archivo1));

	fclose($f);
}
	return $contador1;
}
$visitante1=contador1();

?>

<!-- Lee el valor de la otra opcion -->





<!-- porcentaje -->
<?php

$porcen= $visitante*100/($visitante+$visitante1);
$porcentaje= (intdiv(($visitante*100), ($visitante+$visitante1)));

?>

<!-- porcentaje -->




<!-- mostrar porcentaje -->

<style type="text/css">
.porcent {
	<?php if ($porcentaje<51): ?>
		border-color: green;
	<?php endif ?>
	<?php if ($porcentaje>50): ?>
		border-color: red;
	<?php endif ?>
	width: 50px;
     padding: 5px;
     font-size: 16px;
     border-width: 6px;
     
     background-color: #000000;
     color: #f8eded;
     border-style: solid;
     border-radius: 14px;
     box-shadow: 0px 0px 5px rgba(66,66,66,.75);
     text-shadow: 0px 0px 5px rgba(66,66,66,.67);
}
 .css-input:focus {
     outline:none;
}
</style>


<table class="porcent" width="50%">
	<tr>
		
		<td>
			
		<font face="Helvetica" color="white">
	<?php

echo "El ".$porcentaje;
echo "% de los lectores tomó la misma desición";
?>
		</font>
		</td>
		
	</tr>
</table>
<!-- mostrar porcentaje -->





<!-- TEXTO PRINCIPAL -->
	
</HEAD>
<BODY background="puerta.jpg">
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

	<center>

<style type="text/css">
.css-input {
     padding: 5px;
     font-size: 16px;
     border-width: 6px;
     border-color: #cccccc;
     background-color: #000000;
     color: #f8eded;
     border-style: solid;
     border-radius: 14px;
     box-shadow: 0px 0px 5px rgba(66,66,66,.75);
     text-shadow: 0px 0px 5px rgba(66,66,66,.67);
}
 .css-input:focus {
     outline:none;
}
</style>

<table class="css-input" width="50%">
	<tr>
		
		<td>
			
		<font face="Helvetica" color="white">
	va a ir a la Ir a la concesionaria, pero no sabes como
		</font>
		</td>
		
	</tr>
</table>
<!-- TEXTO PRINCIPAL -->



<!-- botones -->
<style type="text/css">
.classname {
	background-color:#44c767;
	-webkit-border-top-left-radius:28px;
	-moz-border-radius-topleft:28px;
	border-top-left-radius:28px;
	-webkit-border-top-right-radius:28px;
	-moz-border-radius-topright:28px;
	border-top-right-radius:28px;
	-webkit-border-bottom-right-radius:28px;
	-moz-border-radius-bottomright:28px;
	border-bottom-right-radius:28px;
	-webkit-border-bottom-left-radius:28px;
	-moz-border-radius-bottomleft:28px;
	border-bottom-left-radius:28px;
text-indent:0;
	border:1px solid #18ab29;
	display:inline-block;
	color:#ffffff;
	font-family:arial;
	font-size:15px;
	font-weight:bold;
	font-style:normal;
height:50px;
	line-height:50px;
width:140px;
	text-decoration:none;
	text-align:center;
	text-shadow:1px 1px 0px #2f6627;
}.classname:hover {
	background-color:#5cbf2a;
}.classname:active {
	position:relative;
	top:1px;
}</style>
<center>




	

<li> <a href="http://localhost/cuento/1/1.php" class="classname">Ropa formal</a> </li>
</center>
<style type="text/css">
.classname {
	background-color:#44c767;
	-webkit-border-top-left-radius:28px;
	-moz-border-radius-topleft:28px;
	border-top-left-radius:28px;
	-webkit-border-top-right-radius:28px;
	-moz-border-radius-topright:28px;
	border-top-right-radius:28px;
	-webkit-border-bottom-right-radius:28px;
	-moz-border-radius-bottomright:28px;
	border-bottom-right-radius:28px;
	-webkit-border-bottom-left-radius:28px;
	-moz-border-radius-bottomleft:28px;
	border-bottom-left-radius:28px;
text-indent:0;
	border:1px solid #18ab29;
	display:inline-block;
	color:#ffffff;
	font-family:arial;
	font-size:15px;
	font-weight:bold;
	font-style:normal;
height:50px;
	line-height:50px;
width:170px;
	text-decoration:none;
	text-align:center;
	text-shadow:1px 1px 0px #2f6627;
}.classname:hover {
	background-color:#5cbf2a;
}.classname:active {
	position:relative;
	top:1px;
}</style>
<center>

<li> <a href="1.HTML" class="classname">Ropa informal</a> </li>
</center>
<!-- botones -->









<!-- dejavu -->
<?php
if ($porcentaje>50) {
	# code...

function contdeja2()
{
$archideja2 ="dejavu1.2.txt";
$contdeja2 = 0;
$f= fopen($archideja2, "r");

if ($f) {
	$contdeja2= fread($f, filesize($archideja2));
	$contdeja2++;
	fclose($f);
}
$f= fopen($archideja2, "w+");
if ($f) {
	fwrite($f, $contdeja2);
	fclose($f);
}
	return $contdeja2;
}
}

if ($porcentaje<51) {
	function contdeja2()
{
$archideja ="dejavu2.txt";
$contdeja2 = 0;
$f= fopen($archideja, "r");

if ($f) {
	$contdeja2= fread($f, filesize($archideja));
	
	fclose($f);
}
$f= fopen($archideja, "w+");
if ($f) {
	fwrite($f, $contdeja2);
	fclose($f);
}
	return $contdeja2;
}
	
}
$dejavu2=contdeja2();


?>


<!-- dejavu -->












</BODY>
</center>
<!-- medidor -->
<br>
<meter style=" height:20%"  min="0"
max="10"  optimum="1" low="3" high="7"   value="<?php echo($dejavu2)?>">
</meter>
<br>
<!-- medidor -->
</HTML>
