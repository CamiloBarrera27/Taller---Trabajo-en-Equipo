<!DOCTYPE html>
<html>
<head><title> Base de datos </title></head>
<body>
<?php
	mysql_connect("localhost", "root", "") or die ("error de conexion");
	mysql_select_db("colombia") or die ("Error de conexion BD");
	$result = mysql_query("SELECT id_departamento, descripcion FROM DEPARTAMENTO");
        
        ?>


<form action="index.php" method="post" onSubmit="return validarCampos()">

<table width="50%" border="1">

<thead> 

	<tr><th colspan="2">MUNICIPIOS</th></tr>
	</thead>

<tfoot>
	<tr><td colspan="2">

		<INPUT type="submit"><INPUT type="Reset">
</td> </tr>
</tfoot>

<tbody>
	<tr><td> CODIGO </td>
		<td><input type = "text" name="codigo"></td></tr>

	<tr><td> DESCRIPCION </td>
		<td><input type = "text" name="descripcion"></td></tr>

	<tr><td> DEPARTAMENTO </td>
		<td><select name="departamento">
		<?php
			while($fila=mysql_fetch_array($result)){
				echo"<option value = fila[0]> $fila[1] </option>";
			}
?>
</select>
		<option> </option>
		</td></tr>
		

	<tr><td> HABITANTES </td>
		<td><input type = "text" name="habitantes"></td></tr>
	</tbody>
</table>

</body>
</html>