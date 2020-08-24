

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
$archivo2 ="../1.1.2.1.2/contador2.txt";
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
<BODY background="bicicletas.jpg">
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
	
El hombre frunció el ceño y sacudió la cabeza. Mientras se montaba en la bicicleta miró al joven fijamente y dijo -"No puedo entender a las nuevas generaciones no tienen disciplina. Desafortunadamente, mi trabajo me obliga a entrevistar a muchos perdedores como tú. Hoy uno ni siquiera se dignó en venir, y fue una alegria"
Entonces comenzó a pedalear, mientras se alejaba, recibia por unica respuesta una señal grosera con el dedo.
<br>

El joven comenzó a pedalear con violencia, con suerte, llegaria a la pizzeria antes que otro candidato.
<br>
<center>
.........FIN.........
</center>
		</font>
		</td>
		
	</tr>
</table>
<!-- TEXTO PRINCIPAL -->






<!-- toma el dejavu anterior-->

<?php

function actualizador()
{
$viejo ="../dejavu1.1.2.1.txt";
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
$archideja ="dejavu1.1.2.1.1.txt";
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
$archideja ="dejavu1.1.2.1.1.txt";
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

<style type="text/css">


.myButton {
	background:linear-gradient(to bottom, #000000 5%, #b3b3b3 100%);
	background-color:#000000;
	border-radius:28px;
	border:1px solid #0fb000;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Courier New;
	font-size:17px;
	padding:16px 31px;
	text-decoration:none;
	text-shadow:0px 1px 0px #000000;
}
.myButton:hover {
	background:linear-gradient(to bottom, #b3b3b3 5%, #000000 100%);
	background-color:#b3b3b3;
}
.myButton:active {
	position:relative;
	top:1px;
}

</style>


<a href="http://localhost/cuento/index2.php" class="myButton">VOLVER AL INICIO</a>





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



$refrescar= (fopen("../dejavu1.1.2.1.txt", "w"));

if ($refrescar) {
	fputs($refrescar,0);	
}
fclose($refrescar);	
?>
<!-- reseteador y actualizador final -->