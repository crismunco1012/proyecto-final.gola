<?php 

	$conexion=mysqli_connect('localhost','root','','cristian');

 ?>


<!DOCTYPE html>
<html lang="es">

  <p style="color:white";>
<meta charset="utf-8">
<head>
	<title>mostrar datos</title>
</head>
<body>
<form>
  <div>
    <input type="search" id="miBusqueda" name="q">
    <button>Buscar</button>
  </div>
</form>

<br>

	<table border="1" >
		<tr>
			
                        <td><font color="white">ID</font></td>
			<td><font color="white">IMAGEN</font></td>
			<td><font color="white">NOMBRE</font></td>
			<td><font color="white">PRECIO</font></td>

			
		</tr>

		<?php 
		$sql="SELECT * from productos";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><font color="white"><?php echo $mostrar['ID'] ?></font></td>
		        <td><?php echo "<img src='".$mostrar['IMAGEN']."'>" ?></td>
			<td><font color="white"><?php echo $mostrar['NOMBRE'] ?></td>
			<td><font color="white"><?php echo $mostrar['PRECIO'] ?></td>
			
		</tr>
	<?php 
	}
	 ?>
<body background="01.gif">
<td><font color="red">281295</font></td>





