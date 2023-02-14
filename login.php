<?php
//conectar con el servidor
$host="localhost";
$user="root";
$pass="";
$db="proyecto";

//funcion llamada conexion con (dominio, usuarios, contrasena, bd)
$con=mysqli_connect($host,$user,$pass,$db) or die("Problemas al conectar");
mysqli_select_db($con,$db) or die("Problemas al conectar con la base de datos");

$nombre=$_POST['nombre'];
$clave=$_POST['clave0'];


$query = mysqli_query($con, "SELECT * FROM login5 WHERE nombre = '".$nombre."' and clave = '".$clave."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
    //header("Location: registro.html")
    echo "Bienvenido" .$nombre;
}

else if ($nr == 0)
{
    echo "No es valido";
}
?> 