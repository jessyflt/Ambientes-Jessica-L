
<html>

<head>
<meta charset="utf-8">

  <title>Deber</title>
  <link rel="stylesheet" type="text/css" href="formato.css">
</head>
<body>

<div id="cuerpo">
<fieldset>
<legend>Conversor de monedas</legend>
<form action="deber5.php" method="post" >

<div id="txtValor">
<label> Valor en USD: </label>
<input type="text" id="dolares" name="dolares"value="">

<label>&nbsp;&nbsp; Convertir a :</label>
<select name="tipo">
<option value="1"> Euros</option>
<option value="2"> Pesos Colombia</option>
</select>

</div>
<br>
<br>
<br>
<div id="btnConvertir">
    <button id="cambiar" name="cambiar">Convertir</button>
  </div>
<br>
<hr>
<br>
<br>
<label id="resultado"> Resultado : </label>
<br>
<br>
<?php

 if (isset($_POST['cambiar'])){

if($_POST)
{
$dolares=$_POST['dolares'];

$tipo=$_POST['tipo'];

switch($tipo)
{
case 1:
$valor=$dolares*0.919583; 
echo "$dolares"." USD equivale a "."$valor"." Euros ";
break;
case 2:
$valor=$dolares*2.253;
echo "$dolares"." USD equivale a "."$valor"." Pesos Colombianos";
break;
}
}
 }
?>

</div>



</form>
</div>
</fieldset>


<body>



</html>