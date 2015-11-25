<?php
require('c_index.php');
?>
<?php
echo "<html>";
echo '<meta charset="utf-8">';
echo "<title> </title> ";
echo '<style>';
echo "body{     
background-color:#EFF1F6;
color :#0E385F;
text-align:center;
}
#form { 
width: 500px;
height: 500px;
 
  position: absolute;
  top: 20%;
  left:35%;
}
#titulo1{
	
	text-align:left;
	color :#0E385F;
	font-size:20px;
}
#enlance{
	color :#3B59AE;
	font-size:13px;
}
#btnRegistrar{
	
	background-color:#669E51;
	color:white;
	width:150;
	height:35;
}
#txtBox
{
	border-color:#6D83B2;
	border-style:solid;
	width:300;
	height:35;
}
.selectSexo{
  width: 140px;
  position:relative;
}
}
"
;
echo '</style>';
echo '<body>';
echo '<div id ="form">';
echo "<p id ='titulo1'><b>Registro de Usuarios</b></p>";
echo "<form action='c_index.php' method='POST'>";
echo '<table>';
echo '<tr>';
echo '<td>';
echo 'Email';
echo '</td>';
echo '<td>';
echo '<input type="email" id="email" value="" name="email">';
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>';
echo '<p> Contraseña <br>
          </p>';
echo '</td>';
echo '<td>';
echo '<input type="password" id="contrasena" value="" name="contrasena">';
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>';
echo '<p> Verificar <br>
          contraseña</p>';
echo '</td>';
echo '<td>';
echo '<input type="password" id="verificarContrasena" value="" name="verificarContrasena">';
echo '</td>';
echo '</tr>';

echo '<table>';
echo '<br>';
echo '<button  id="btnRegistrar" name="registrar"> Registrate</button>';
echo '</form>';
echo '</div>';
echo '</body>';
echo "</html>";
?>