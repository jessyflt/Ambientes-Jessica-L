<?php 
//require('p_index.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body {

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
>


<div id ="form">
<p id ='titulo1'><b>Registro de Usuarios</b></p>
<form action="p_index.php" method="post">
  <div>
    
    <label for="nombre">Nombre</label>
    <input type="text" id="nombre" name="nombre" value="">
  </div>

  <div>
    <label for="apellidos">Apellidos</label>
    <input type="text" id="apellidos" name="apellidos" value="">
  </div>  

  <div>
    
  <div>
    <div>
      <tr>
        <tr>
    <label for="edad">Edad</label>
    <select id="edad" name="edad">
      <option value="">Seleccione...</option>
      <option value="1">menos de 20 años</option>
      <option value="1">entre 20 y 29 años</option>
      <option value="1">entre 40 y 59 años</option>
      <option value="1">Mas de 60 años</option>
    </select>
  </div>  
  <div>
    <tr>
      <tr>
    <label for="peso">Peso</label>
    <input type="text" id="peso" name="peso" value="">
  </div>   

    <div>
    <label for="genero">Genero</label>
    <br />
    <input type="checkbox" name="generoF[]" value="femenino" />Femenino<br />
    <input type="checkbox" name="generoM[]" value="masculino" />Masculino<br />
    </select>
  </div>    

  <div>
    <button id="registrar" name="enviar">Registrar</button>
  </div>

</form>
</body>
</html>