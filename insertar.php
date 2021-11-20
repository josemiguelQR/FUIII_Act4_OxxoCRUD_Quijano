<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$Nombre=$_POST['Nombre'];
$Apellidos=$_POST['Apellidos'];
$Direccion=$_POST['Direccion'];
$Fechadenacimiento=$_POST['Fechadenacimiento'];
$Numerodetelefono=$_POST['Numerodetelefono'];

$sql="INSERT INTO `empleados`(`id`, `Nombre`, `Apellidos`, `Direccion`, `Fecha de nacimiento`, `Numero de telefono`) VALUES('$id','$Nombre','$Apellidos','$Direccion','$Numerodetelefono','$Fechadenacimiento')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: empleados.php");
    
}else {
}
?>