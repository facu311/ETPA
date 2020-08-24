


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
$archivo1 ="../1.1.1.1.1/contador1.txt";
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
echo "% de los lectores tomó la misma decisión";
?>
		</font>
		</td>
		
	</tr>
</table>
<!-- mostrar porcentaje -->

<script type="text/javascript">

window.location.hash="no-back-button";
window.location.hash="Again-No-back-button";//esta linea es necesaria para chrome
window.onhashchange=function(){window.location.hash="no-back-button";}
</script>
<!-- TEXTO PRINCIPAL -->
	
</HEAD>
<BODY background="tren.jpg">
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
	
Ah! tu eres ese joven!. Me preguntaba por que no habias aparecido, yo soy el encargado de las entrevistas. Parece que te has esforzado mucho para llegar, asi que voy a darte otra oportunidad. Sin embargo, estás muy desalineado, y mi turno ya ha terminado. Tendrás que volver mañana por la mañana, vestido impecablemente. Entonces podremos hablar del trabajo.
El muchacho agradeció sin disimular su alegria, mientras aquel hombre se alejaba pedaleando. Al volver a su casa se sintió esperanzado, mañana tendria otra chance, una nueva oportunidad, todo seria distinto.
<br>
<center>
.........FIN.........
</center>
		</font>
		</td>
		
	</tr>
</table>
<!-- TEXTO PRINCIPAL -->












<!-- toma el dejavu anterior y lo asigna a una variable-->

<?php

function actualizador()
{
$viejo ="../dejavu1.1.1.1.txt";
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




<!-- toma el dejavu anterior y lo asigna a una variable-->






<!-- dejavu -->
<?php
if ($porcentaje>50) {
	# code...

function contdeja1()
{
$archideja ="dejavu1.1.1.1.2.txt";
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
$archideja ="dejavu1.1.1.1.2.txt";
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


<!-- boton para volver al inicio -->

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

<!-- boton para volver al inicio -->



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


$refrescar= (fopen("../dejavu1.1.1.1.txt", "w"));

if ($refrescar) {
	fputs($refrescar,0);	
}
fclose($refrescar);	
?>
<!-- reseteador y actualizador final -->