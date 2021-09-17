<?php
//Texto de inicio de la pagina
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
echo "La fecha de la incidencica fue el : $Fecha_Incidencia <br> <br>";
?>
<strong>Punto de atencion disponible</strong>
<br>
<?php
//Aqui hacemos el uso de los condicionales ,con los cuales depende de la respuesta del usuario,le arrojara un resultado
if ($Ciudad == 'Bogota'){
echo " cuenta con un punto fisco ,para atender sus peticiones ";
 } elseif ($Ciudad == 'Cali'){
  echo "No cuenta con un punto de Atencion al cliente";
 }elseif ($Ciudad == 'Cartagena'){
echo "cuenta con un punto fisco ,para atender sus peticiones";
} elseif ($Ciudad == 'Barranquilla'){
echo "cuenta con un punto fisco ,para atender sus peticiones";
 }elseif ($Ciudad == 'Medellin'){
echo "cuenta con un punto fisco ,para atender sus peticiones";
}elseif ($Ciudad == 'Leticia'){
echo "No cuenta con un punto de Atencion al cliente";
}elseif ($Ciudad == 'Arauca'){
 echo "No cuenta con un punto de Atencion al cliente";
}elseif ($Ciudad == 'Tunja'){
echo "No cuenta con un punto de Atencion al cliente";
}elseif ($Ciudad == 'Manizales'){
echo "No cuenta con un punto de Atencion al cliente";
}elseif ($Ciudad == 'Florencia'){
echo "No cuenta con un punto de Atencion al cliente";
}elseif ($Ciudad == 'Yopal'){
echo "No cuenta con un punto de Atencion al cliente";
}elseif ($Ciudad == 'Popayan'){
echo "No cuenta con un punto de Atencion al cliente";
}elseif ($Ciudad == 'Valledupar'){
echo "No cuenta con un punto de Atencion al cliente";
}elseif ($Ciudad == 'Quibdo'){
echo "No cuenta con un punto de Atencion al cliente";
}elseif ($Ciudad == 'Monteria'){
echo "No cuenta con un punto de Atencion al cliente";
}elseif ($Ciudad == 'Inirida'){
echo "No cuenta con un punto de Atencion al cliente";
}elseif ($Ciudad == 'San Jose del Guaviare'){
echo "No cuenta con un punto de Atencion al cliente";
}elseif ($Ciudad == 'Neiva'){
echo "No cuenta con un punto de Atencion al cliente";
}elseif ($Ciudad == 'Rioacha'){
echo "No cuenta con un punto de Atencion al cliente";
}elseif ($Ciudad == 'Santa Marta'){
echo "No cuenta con un punto de Atencion al cliente";
}elseif ($Ciudad == 'Villavicencio'){
echo "No cuenta con un punto de Atencion al cliente";
}elseif ($Ciudad == 'San Juan de Pasto'){
echo "No cuenta con un punto de Atencion al cliente";
}elseif ($Ciudad == 'Pasto'){
echo "No cuenta con un punto de Atencion al cliente";
}elseif ($Ciudad == 'Cucuta'){
echo "No cuenta con un punto de Atencion al cliente";
}elseif ($Ciudad == 'Mocoa'){
echo "No cuenta con un punto de Atencion al cliente";
}elseif ($Ciudad == 'Pereira'){
echo "No cuenta con un punto de Atencion al cliente";
}elseif ($Ciudad == 'San Andres'){
echo "No cuenta con un punto de Atencion al cliente";
}elseif ($Ciudad == 'Bucaramanga'){
echo "No cuenta con un punto de Atencion al cliente";
}elseif ($Ciudad == 'Sincelejo'){
echo "No cuenta con un punto de Atencion al cliente";
}elseif ($Ciudad == 'Ibague'){
echo "No cuenta con un punto de Atencion al cliente";
}elseif ($Ciudad == 'Mitu'){
echo "No cuenta con un punto de Atencion al cliente";
}elseif ($Ciudad == 'Puerto Carreño'){
echo "No cuenta con un punto de Atencion al cliente";
}else {
  echo "No se encuentra en el punto indicado";
}
?>
<br>
<br>
<!--Texto en negrilla-->
<strong>Eres apto para hacer la solicitud?</strong><br>
<?php
//Uso de condicionales para determinar si el usuario es apto o no para realizar una queja ,segun su tipo de documento
if ($CC_TI == 'Cedula'){
    echo "Puedes continuar con el proceso";
}elseif ($CC_TI == 'ti'){
    echo "No eres apto para realizar una queja";
}else {
    echo "No puedes continuar con el proceso ,porque no seleccionaste ningun campo";
  }
?>
<br>
<br>
<!--Texto en negrilla-->
<strong>Tiendas disponibles</strong>
<br>
<?php
//Uso de condicionales para determinar el numero de tiendas disponibles en el pais seleccionado
if ($Pais == 'Colombia'){
    echo "Colombia cuenta con 52 tiendas, donde puedes dirigirte para realizar cualquier compra o reclamo";
}elseif ($Pais == 'Argentina'){
    echo "Argentina cuenta con 78 tiendas, donde puedes dirigirte para realizar cualquier compra o reclamo";
}elseif ($Pais == 'Chile'){
    echo "Chile cuenta con 62 tiendas, donde puedes dirigirte para realizar cualquier compra o reclamo";
}elseif ($Pais == 'Peru'){
    echo "Peru cuenta con 31 tiendas, donde puedes dirigirte para realizar cualquier compra o reclamo";
}else {
    echo "No se encontraron  tiendas disponibles";
  }
?>

<br>
<br>
<!--Texto en negrilla-->
<strong>Tiempo de respuesta</strong>
<br>
<?php
$Fecha_contacto = date("n");
$num1 =1; 
echo "Recibira una respuesta, a no mas tardar en el mes";
echo  date("n")+ $num1; 
?>