<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$Nombre=$_POST['Nombre'];
$Apellidos=$_POST['Apellidos'];
$Direccion=$_POST['Direccion'];
$Fechadenacimiento=$_POST['Fechadenacimiento'];
$Numerodetelefono=$_POST['Numerodetelefono'];

$sql="UPDATE empleados SET `Nombre`='$Nombre', `Apellidos`='$Apellidos', `Direccion`='$Direccion', `Fecha de nacimiento`='$Fechadenacimiento', `Numero de telefono`='$Numerodetelefono' WHERE `id`='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleados.php");
    }
?>