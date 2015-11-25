<?php
if($_POST){
  $email = $_POST['email'];
  $contrasena = md5($_POST['contrasena']);
  $verificarContrasena= md5($_POST['verificarContrasena']);
   
  
  if($contrasena !== $verificarContrasena){
    echo htmlentities('Las contraseñas no coinciden');
  }
else{
$conn = new mysqli('localhost' , 'root' , '', 'examen');
  if ($conn->connect_error) die($conn ->connect_error);
  
$conn2 = mysql_connect("localhost","root","");
mysql_select_db("examen",$conn2);
   
   $consulta= mysql_query("SELECT * from registro where email='$email'",$conn2) ;
  
   $fila=mysql_num_rows ($consulta);
  if ($fila==0){
  	
    $query = "INSERT INTO registo
                  (email, 
                    contrasena, 
                    verificarContrasena,
                    
                VALUES (
                  '$email',
                  '$contrasena',
                  '$verificarContrasena',
                  
                  )
  ";
  $result = $conn ->query($query);
  if (!$result) {
        
        echo htmlentities('Usuario Ingresado Correctamente');
        echo '<a href="registrocliente.php">Logout</a>'; 

  }
  	
  }
  else{
echo htmlentities('Ya existe el email en la base de datos, pruebe otro');
}
	
}
}
?>