<?php


require_once('C:\xampp\htdocs\TALLER PHP\enviroments.php');

$conexion = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (mysqli_connect_errno()) {

    echo "Fallo al conectar a BBDD";

    exit();
}

mysqli_select_db($conexion, $dbName) or die('El nombre del a DB no se cooresponde con los existentes');

mysqli_set_charset($conexion, "utf8");

/* $query = "SELECT * FROM artpildoras WHERE PAÍSDEORIGEN='ESPAÑA'"; */
/* $query = "SELECT * FROM artpildoras WHERE NOMBREARTíCULO LIKE 'bal%'"; */

$query = "SELECT * FROM artpildoras";
/* $query = "SELECT * FROM users"; */

$results = mysqli_query($conexion, $query);


while ($fila = mysqli_fetch_row($results)) {



    for ($i = 0; $i < 6; $i++) {
        echo "<td>" ;
        echo $fila[$i] . "</td>"; 
    };

    echo "</tr><tr>";

}

/* $fila = mysqli_fetch_array($results, MYSQL_ASSOC);

    echo $fila[ID] . " ";
    echo $fila[ITEM] . " ";
    echo $fila[PAISDEORIGEN] . " ";
    echo $fila[PRECIO] . " ";
    echo $fila[4] . " ";
    echo $fila[5] . " " . "<hr>"; */

?>