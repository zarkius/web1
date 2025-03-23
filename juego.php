
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles1.css">
    <title>World1</title>
</head>
<body>
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

?>

<div id="data1" style="border: 1px,solid,red; width:260px; position: relative; left: 35%; top:15px; font-size: 1.5rem;">
<?php

$sql = "SELECT * FROM SaludDelMundo LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of first row
    $row = $result->fetch_assoc();
    echo 'La Esperanza esta en : ' . $row["medidorDeEsperanza"]; // Reemplaza "medidorDeEsperanza" con el nombre de la columna que deseas mostrar
} else {
    echo "0 resultados";
}
?>
</div>

<div id="data2" style="position: relative; border: 1px, solid,red; width:280px; top:50px; left: 35%; font-size: 1.2rem;">



<?php
$sql = "SELECT user FROM Usuarios WHERE id = 1"; // Ajusta la consulta según sea necesario
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of first row
    $row = $result->fetch_assoc();
    $nombre = $row["user"]; // Reemplaza "nombre" con el nombre de la columna que deseas mostrar
    echo 'Hola ' . $nombre . ' Bienvenido a tu pueblo';
} else {
    echo "Usuario no encontrado";
}
?>
</div>
</body>
</html>