
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles1.css">
    <title>World1</title>
</head>
<body  style="background-color: red;">
<?php
$servername = "localhost";
$username = "zarkius";
$password = "11211121";
$dbname = "worldUno";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    # echo "Connected successfully"; COMENTAR EN PRODUCCIÓN

$sql = "SELECT * FROM SaludDelMundo LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of first row
    $row = $result->fetch_assoc();
    echo "La Esperanza esta en : " . $row["medidorDeEsperanza"]; // Reemplaza "nombre_de_la_columna" con el nombre de la columna que deseas mostrar
} else {
    echo "0 resultados";
}
?>  
    <p>Hola Guerrero!</p>  
</body>
</html>