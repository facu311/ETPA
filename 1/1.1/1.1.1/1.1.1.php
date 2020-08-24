
<!-- Resetea el siguiente dejavu -->
<?php

$refrescar3= (fopen("1.1.1.1/dejavu1.1.1.1.txt", "w"));

if ($refrescar3) {
	fputs($refrescar3,0);	
}
fclose($refrescar3);



$refrescar4= (fopen("1.1.1.2/dejavu1.1.1.2.txt", "w"));

if ($refrescar4) {
	fputs($refrescar4,0);	
}
fclose($refrescar4);
?>


<!-- Resetea el siguiente dejavu -->

<!-- CONTADOR -->
<?php

function contador1()
{
$archivo1 ="contador1.txt";
$contador1 = 0;
$f= fopen($archivo1, "r");

if ($f) {
	$contador1= fread($f, filesize($archivo1));
	$contador1++;
	fclose($f);
}
$f= fopen($archivo1, "w+");
if ($f) {
	fwrite($f, $contador1);
	fclose($f);
}
	return $contador1;
}
$visitante=contador1();

?>
<!-- CONTADOR -->


<!-- Lee el valor de la otra opcion -->
<?php

function contador2()
{
$archivo2 ="../1.1.2/contador2.txt";
$contador2 = 0;
$f= fopen($archivo2, "r");

if ($f) {
	$contador2= fread($f, filesize($archivo2));

	fclose($f);
}
	return $contador2;
}
$visitante2=contador2();

?>

<!-- Lee el valor de la otra opcion -->





<!-- porcentaje -->
<?php

$porcen= $visitante*100/($visitante+$visitante2);
$porcentaje= (intdiv(($visitante*100), ($visitante+$visitante2)));

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
echo "% de los lectores tomó la misma decisión";
?>
		</font>
		</td>
		
	</tr>
</table>
<!-- mostrar porcentaje -->





<!-- TEXTO PRINCIPAL -->
	
</HEAD>
<BODY background="pizzeria.jpg">
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
	
Ja! el hombre solto una carcajada burlona.- "No me gustan nada los lambiscones, y reconozco uno a kilometros. No se necesita mucho para trabajar en este lugar, pero tienes que ser honesto, y tu no lo eres. No hay sitio para ti aqui"-
<br>
Luego se dio vuelta y volvió a ocuparse de la registradora.
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
height:140px;
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




	

<li> <a href="http://localhost/cuento/1/1.1/1.1.1/1.1.1.1/1.1.1.1.php" class="classname">Ir en bicicleta</a></li>
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
width:300px;
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

<li> <a href="http://localhost/cuento/1/1.1/1.1.1/1.1.1.2/1.1.1.2.php" class="classname">Ir en tren</a> </li>
</center>
<!-- botones -->



<!-- toma el dejavu anterior-->

<?php

function actualizador()
{
$viejo ="../dejavu1.1.txt";
$actualizador = 0;
$f= fopen($viejo, "r");

if ($f) {
	$actualizador= fread($f, filesize($viejo));

	fclose($f);
}
	return $actualizador;
}
$valoranterior=actualizador();

?>




<!-- toma el dejavu anterior -->






<!-- dejavu -->
<?php
if ($porcentaje>50) {
	# code...

function contdeja1()
{
$archideja ="dejavu1.1.1.txt";
$contdeja1 =0;
$f= fopen($archideja, "r");

if ($f) {
	$contdeja1= fread($f, filesize($archideja));
	$contdeja1++;
	
	fclose($f);
}
$f= fopen($archideja, "w+");
if ($f) {
	fwrite($f, $contdeja1);
	fclose($f);
}
	return $contdeja1;
}
}



if ($porcentaje<51) {
	function contdeja1()
{
$archideja ="dejavu1.1.1.txt";
$contdeja1 = 0;
$f= fopen($archideja, "r");

if ($f) {
	$contdeja1= fread($f, filesize($archideja));
	
	fclose($f);
}
$f= fopen($archideja, "w+");
if ($f) {
	fwrite($f, $contdeja1);
	fclose($f);
}
	return $contdeja1;
}
	
}
$dejavu=contdeja1();
$deja= $dejavu + $valoranterior;

?>


<!-- dejavu -->






</BODY>
</center>
<!-- medidor -->
<br>
<meter style=" height:20%"  min="0"
max="5"  optimum="1" low="2" high="4"   value="<?php echo($deja)?>">
</meter>
<br>
<!-- medidor -->
</HTML>





<!-- reseteador y actualizador final -->
<?php

$refrescar2= (fopen("dejavu1.1.1.txt", "w"));

if ($refrescar2) {
	fputs($refrescar2,$deja);	
}
fclose($refrescar2);	


$refrescar= (fopen("../dejavu1.1.txt", "w"));

if ($refrescar) {
	fputs($refrescar,0);	
}
fclose($refrescar);	
?>
<!-- reseteador y actualizador final -->