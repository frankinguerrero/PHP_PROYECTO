
<html>
<head>
<title>
    Falabella-Atencion al cliente 
</title>
</head>
<body background="2.jpg">

<!--El type es el tipo de datos,name es el nombre de  la variable -->
<!--El metodo post envia los datos de forma anonima (el usuario no ve la informacion) -->
<!--Center-centrar-->
<!--Form-Formulario-->
<!--name-nombre-->
<!--Type-Tipo-->
<!--Input-Aporte-->
<!--action-accion-->
<!--body-Cuerpo-->
<!--Title-Titulo-->
<!--head-cabeza-->
<!--background-antecedentes-Fondo-->
<center><h1>Atención  al cliente</h1></center>
<form action="Info.php" method="post">;
<center><p>Nombre:<input type="text" name="Nombre" /></p></center>
<center><p>Apellido:<input type="text" name="Apellido" /></p></center>
<center>
<label for"">CC_TI:</label>
<select name="CC_TI">
<option  value=""></option>
<option  value="ti">Tarjeta de identidad</option>
<option  value="Cedula">Cedula</option>
</select>
</center>

<center><p>N_Identificacion:<input type="text" name="N_Identificacion" /></p></center>
<center><p>Correo:<input type="text" name="Correo" /></p></center>
<center><p>Fecha de Contacto:<input type="date" name="Fecha_Contacto"/></p></center>
<center>
<label for"">Pais:</label>
<select name="Pais">
<option  value=""></option>
<option  value="Colombia">Colombia</option>
<option  value="Argentina">Argentina</option>
<option  value="Chile">Chile</option>
<option  value="Peru">Peru</option>
</select>
</center>
<br>
<center>
<label for"">Ciudad:</label>
<select name="Ciudad">
<option  value=""></option>
<option  value="Bogota">Bogota</option>
<option  value="Cali">Cali</option>
<option  value="Cartagena">Cartagena</option>
<option  value="Barranquilla">Barranquilla</option>
<option  value="Medellin">Medellin</option>
<option  value="Leticia">Leticia</option>
<option  value="Arauca">Arauca</option>
<option  value="Barranquilla">Tunja</option>
<option  value="Bogota">Manizales</option>
<option  value="Cali">Florencia</option>
<option  value="Cartagena">Yopal</option>
<option  value="Barranquilla">Popayan</option>
<option  value="Valledupar">Valledupar</option>
<option  value="Quibdo">Quibdo</option>
<option  value="Monteria">Monteria</option>
<option  value="Inirida">Inirida</option>
<option  value="San Jose del Guaviare">San Jose del Guaviare</option>
<option  value="Neiva">Neiva</option>
<option  value="Rioacha">Rioacha</option>
<option  value="Santa Marta">Santa Marta</option>
<option  value="Villavicencio">Villavicencio</option>
<option  value="San Juan de Pasto">San Juan de Pasto</option>
<option  value="Pasto">Pasto</option>
<option  value="Cucuta">Cucuta</option>
<option  value="Mocoa">Mocoa</option>
<option  value="Pereira">Pereira</option>
<option  value="San Andres">San Andres</option>
<option  value="Bucaramanga">Bucaramanga</option>
<option  value="Sincelejo">Sincelejo</option>
<option  value="Ibague">Ibague</option>
<option  value="Mitu">Mitu</option>
<option  value="Puerto Carreño">Puerto Carreño</option>
</select>
</center>




<center><p>Direccion:<input type="text" name="Direccion" /></p></center>
<center><p>Motivo de contacto:<input type="text" name="Motivo_contacto" /></p></center>
<center><p>Fecha de Incidencia:<input type="date" name="Fecha_Incidencia" /></p></center>
<center><input type="submit"  value="Enviar"></center>
<!--En las lineas anteriores se declararo ,la informacion que queremos que el cliente nos proporcione -->
</form>
<center>
<img src="1.jpg">
</center>
</body>
</html>



