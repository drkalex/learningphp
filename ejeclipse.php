<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title> Prueba de PHP </title>
</head>
<body background="cs_bg_champions.png" >
<!--  Pues practicando el PHP -->
<font color="white">
<?php echo '<p>Hola Mundo</p>'; ?>
<center> <h1> :) :P PAaCAa XP :-)  </h1> </center>
 <pre> <h4> Hi que
 	tal, como
 		te va en las PractiCas </h4> </pre>
 <br>
 <hr>
 <p> Los GUIDs de logos fueron reemplazados con URIs de datos, por lo que desactivar ahora expose_php no tiene efecto sobre el resutaldo de phpinfo(). Los créditos ahora también han sido embebidos en la salida misma en vez mediante enlaces. </p>
 <p> Se añadió la información del "Fichero de configuración cargado", mientras que anteriormente solo existía "Ruta del fichero de configuración (php.ini). </p>
 <br>
 <hr>
 <table border="5">

 <tr> <td> <font color="white"> hola </font> </td>
 		<td> <font color="white"> Que tal </font> </td>
 </tr>
 <tr> <td> <font color="white"> Bien y tu </font> </td>
 		<td> <font color="white"> Pues muy bien </font> </td>
 </tr>

 </table>
 <hr>

 <table border="2" align="center">

  <tr>
  	<td> <font color="white"> Nombre </font> </td>
 	 <td><input name="nombre" type="text" size="35" maxlength="35">
 </tr>
 <tr>
   <td> <font color="white"> Apellido Paterno </font> </td>
   <td><input name="apellidoP" type="text" size="35" maxlength="35">
</tr>
<tr>
   <td> <font color="white"> Apellido Materno </font> </td>
  <td><input name="apellidoM" type="text" size="35" maxlength="35">
</tr>
<tr>
   <td> <font color="white"> E-mail </font> </td>
   <td><input name="email" type="text" size="35" maxlength="35">
</tr>
<tr>
   <td> <font color="white"> Edad </font> </td>
   <td><input name="edad" type="text" size="2" maxlength="2">
</tr>
<tr >
   <td> <font color="white"> Sexo </font> </td>
   <td>
  	 <input  type="radio" name="rd">Masculino
  	 <input type="radio" name="rd">Femenino
   	<input type="button" name="enviar" title="enviar" value="Enviar">
   </td>
</tr>

</table>
   <br>
   <hr>
   <form method=post action="formulario">

<center> <h3> Registro de un usuario </h3> </center>
<br>
<center>
<table border=2>
<tr>
<td> <font color="white"> Apellido </font> </td>
<td>
<input type=text name="apellido">
</td>
</tr>

<tr>
<td> <font color="white"> Nombre </font> </td>
<td>
<input type=text name="nombre">
</td>
</tr>

<tr>
<td> <font color="white"> Género </font> </td>
<td>
<font color="white">Hombre</font>:
<font color="white">Mujer</font>: <input type=radio name="género" value="M">
<br><font color="white">Mujer</font>: <input type=radio name="género" value="F">
</td>
</tr>

<tr>
<td> <font color="white">Ocupación </font></td>
<td>
<select name="ocupación">
<option VALUE="profesor"> Profesor</option>
<option VALUE="estudiante"> Estudiante</option>
<option VALUE="ingeniero"> Ingeniero</option>
<option VALUE="jubilado"> Jubilado</option>
<option VALUE="otro"> Otro</option>
</select>
</td>
</tr>
<tr>
<td> <font color="white">Comentarios </font></td>
<td>
<textarea rows="3" name="comentarios">
Escriba aquí sus comentarios</textarea>
</td>
</tr>
<tr>
<td COLSPAN=2>
<input type="submit" value="Enviar">
</td>
</tr>
</table>
</center>

</form>
</font>
 </body>
</html>
