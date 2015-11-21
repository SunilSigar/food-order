<?php
// define variables and set to empty values
$od = $pa = $ca = $cm = $dbpn = $dbn = $price = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $od = test_input($_POST["od"]);
   $pa = test_input($_POST["pa"]);
   $ca = test_input($_POST["ca"]);
   $cm = test_input($_POST["cm"]);
   if($od=="Pizza")
   { 
        $price = 350*$pa;
		}
	else if($od=="Burger")
   { 
        $price = 50*$pa;
		}
	else if($od=="Cakes")
   { 
        $price = 500*$pa;
		}
		
		echo "<br>You order is successful. <br>";
		echo "You have to pay Rs:" .$price. " on delivery.<br>";
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

$sql = "INSERT INTO phptable2 (OrderDetails, PaymentAmount, CustomerAddress, CustomerMobile)
VALUES ('$od', '$pa', '$ca', '$cm')";

if ($conn->query($sql) === TRUE) {
    
	echo "Your order id is: ";
	$sql = "SELECT orderid FROM phptable2 WHERE  CustomerMobile='" . $cm . "'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	
    {
	while($row = $result->fetch_assoc()) {
        echo $row["orderid"];
		
    }
    }
}
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
