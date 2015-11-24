<?php
if($_POST){
  $nombre = $_POST['nombre'];
  $apellidos = $_POST['apellidos'];
  $email = $_POST['email'];
  $email2 = $_POST['email2'];
  $clave = md5($_POST['clave']);
  $clave2 = md5($_POST['clave2']);
  $sexo = $_POST['sexo'];
  $dia = $_POST['dia'];
  $mes = $_POST['mes'];
  $year = $_POST['year'];
  
  
  if($clave!== $clave2){
    echo htmlentities('Las contraseñas no coinciden');
  }
else{
$conn = new mysqli('localhost' , 'root' ,'', 'sistema');
  if ($conn->connect_error) die($conn ->connect_error);
  mysql_select_db('sistema');
   
   $consulta= "SELECT * from 'usuarios' where email='$email'" ;
   $query2=mysqli_query($conn,$consulta) ;
   $fila=mysqli_num_rows ($query2);
  if ($fila){
  	header('Location: pagina2.php');
  	echo htmlentities('Ya existe el email en la base de datos, pruebe otro');
  }
  else{
$query = "INSERT INTO usuarios
                  (nombre, 
                    apellidos, 
                    email, 
                    email2, 
                    clave, 
                    clave2,
                    sexo, 
                    dia, 
                    mes, 
                    year)
                VALUES (
                  '$nombre',
                  '$apellidos',
                  '$email',
                  '$email2',
                  '$clave',
                  '$clave2',
                  '$sexo',
                  $dia,
                  $mes,
                  $year
                  )
  ";
  $result = $conn ->query($query);
  if (!$result) die($conn ->error);
}
	
}
}
?>
