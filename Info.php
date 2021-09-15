<?php
echo "<h2>Gracias Frankin Guerrero por tu consulta</h2>";
$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$CC_TI = $_POST['CC_TI'];
$N_Identificacion = $_POST['N_Identificacion'];
$Fecha_contacto = $_POST['Fecha_Contacto'];
$Correo = $_POST['Correo'];
$Pais = $_POST['Pais'];
$Ciudad = $_POST['Ciudad'];
//post-metodo
//echo genera texto en la pagina
//br salto de pagina
//$ indica la variable
//mediante el codigo echo ,llamamos en la pagina "Info" la informacion que proporciono el cliente
$Direccion = $_POST['Direccion'];
$Motivo_contacto = $_POST['Motivo_contacto'];
$Fecha_Incidencia = $_POST['Fecha_Incidencia'];
echo "El nombre recibido es: $Nombre <br>";
echo "El apellido recibido es: $Apellido <br>";
echo "El tipo de documento es: $CC_TI <br>";
echo "El numero de identificacion es: $N_Identificacion <br>";
echo "El Correo electronico del cliente es: $Correo <br>";
echo "La fecha del solicitud es: $Fecha_contacto <br>";
echo "El pais donde se ocasiono la incidenia es: $Pais <br>";
echo "La ciudad es: $Ciudad <br>";
echo "La direccion del cliente es: $Direccion <br>";
echo "El motivo del contacto es: $Motivo_contacto <br>";
echo "La fecha de la incidencica fue el : $Fecha_Incidencia ";
?>