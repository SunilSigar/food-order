<?php
// define variables and set to empty values
$dbpn = $dbn = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $un = test_input($_POST["un"]);
   $pwd = test_input($_POST["pwd"]);
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

$sql = "SELECT username, password FROM login WHERE  username='" . $un . "' and password='" . $pwd . "'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	
        echo "";	
		
?>
<h3 align="center">
<a href='insertForm.php'><br><br><br><br><font color="Green">Make Order</font></a></br></br>
<a href='sbyid.php'><font color="Green">Search Order by Id</font></a></br></br></h3>

<?php
}
else
{
     echo "Username or Password is incorrect.";
	 }
$conn->close();
?>
