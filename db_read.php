<?php



    $host = "localhost";                 // host = localhost because database hosted on the same server where PHP files are hosted
    $dbname = "incubit";              // Database name
    $username = "root";        // Database username
    $password = "";	        // Database password


// Establish connection to MySQL database
$conn = new mysqli($host, $username, $password, $dbname);


// Check if connection established successfully
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

else { echo "Connected to mysql database. <br>"; }


// Select values from MySQL database table

$sql = "SELECT ID_medicion, Temperatura, Humedad, Fecha, Hora FROM medicion";  // Update your tablename here

$result = $conn->query($sql);

echo "<center>";



if ($result->num_rows > 0) {


    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<strong> ID Medición:</strong> " . $row["ID_medicion"]. "     &nbsp <strong>Temperatura:</strong> " . $row["Temperatura"]. " &nbsp <strong>Humedad:</strong> " . $row["Humedad"]. " &nbsp <strong>Fecha:</strong> " . $row["Fecha"]." &nbsp <strong>Hora:</strong>" .$row["Hora"]."<p>";
    


}
} else {
    echo "0 results";
}

echo "</center>";

$conn->close();



?>
