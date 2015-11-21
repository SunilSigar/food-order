<?php
// define variables and set to empty values
$cm = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $id = test_input($_POST["id"]);
  
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
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

$sql = "SELECT * FROM dboytable WHERE  orderid='" . $id . "'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	
    {while($row = $result->fetch_assoc()) {
	?>
	<TABLE ALIGN="left" BORDER CELLSPACING="0" CELLPADDING="0">
<CAPTION><B></br></br>Order Details</B></CAPTION>
<TH>Order Id</TH>
<TH>Delivery Boy Name</TH>
<TH>Delivery Boy Mobile No</TH>

 <?PHP
 echo '<tr ALIGN="CENTER"><td>'.$row["orderid"].'</td><td>'.$row["DeliveryBoyName"].'</td><td>'.$row["DeliveryBoyPNo"].'</td></tr>';
		
    }
    }
} else {
    echo "PLEASE WAIT, YOUR ORDER IN PROCESS";
}
$conn->close();
?>
</table>