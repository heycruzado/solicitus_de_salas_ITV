<?php
$numero_control = $_SESSION["numero_control"];
$sql="SELECT nombre FROM alumno WHERE numero_control = '$numero_control'"; 
$query=mysqli_query($conexion,$sql);
$ver4 = mysqli_fetch_array($query);
?>