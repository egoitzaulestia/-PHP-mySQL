<?php
// DEFINICION VALORES CONEXION
$server="localhost";   // Nuestro server mysql :puerto 
$database="employees";   // Nuestra base de datos  
$dbpass=""; //Nuestro password mysql  
$dbuser="root";    // Nuestro user mysql 
// $mysqli = @new mysqli($server, $dbuser, $dbpass, $database);
// if ($mysqli->connect_errno) {
//     echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
// } else {
//     echo $mysqli->host_info . "\n";
//     echo 'conexión correcta';
// }

$mysqli = @mysqli_connect($server, $dbuser, $dbpass, $database);
if (!$mysqli) {
    echo "Fallo al conectar a MySQL: (" . mysqli_connect_error();
    exit;
} else {
    echo $mysqli->host_info . "\n";
    echo 'conexión correcta';
}

$mysqli = @mysqli_connect($server, $dbuser, $dbpass, $database) or die("Fallo al conectar a MySQL: (" . mysqli_connect_error());

?>
