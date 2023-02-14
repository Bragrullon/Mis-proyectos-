<?php
$host ="localhost";
$user ="root";
$pass ="";
$db="proyecto";

$con = mysqli_connect($host,$user,$pass,$db)or die ("Problemas al conectar");
mysqli_select_db($con,$db)or die("Problemas al conectar con la base de datos");

$Nombre=$_POST['nombre'];
$Apellido=$_POST['apellido'];
$Correo=$_POST['correo'];
$Contraseña=$_POST['contraseña'];
$Direccion=$_POST['direccion'];
$Provincia=$_POST['provincia'];
$Pago=$_POST['pago']; 



$sql="INSERT INTO registrarse VALUES('$Nombre','$Apellido','$Correo','$Contraseña','$Direccion','$Provincia','$Pago')";
$ejecutar=mysqli_query($con,$sql);

if(!$ejecutar){
    echo"Hubo algun error";
}else{
    echo"Los datos fueron ingresados";
}?>

