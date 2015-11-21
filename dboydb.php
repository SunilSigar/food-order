<?php
// define variables and set to empty values
$dbpn = $dbn = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $oi = test_input($_POST["oi"]);
   $dbpn = test_input($_POST["dbpn"]);
   $dbn = test_input($_POST["dbn"]);
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDBB2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO dboytable (orderid, DeliveryBoyPNo, DeliveryBoyName)
VALUES ('$oi','$dbpn', '$dbn')";

if ($conn->query($sql) === TRUE) {
    echo "Details Updated";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
