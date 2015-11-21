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
	
    while($row = $result->fetch_assoc()) {
       // echo "Connection Successful";
?>	
<TABLE ALIGN="left" BORDER CELLSPACING="0" CELLPADDING="0">
<CAPTION><B></br></br>Order Details</B></CAPTION>
<TH>Order Id</TH>
<TH>Order Details</TH>
<TH>Payment Amount</TH>
<TH>Customer Address</TH>
<TH>Customer Mobile No</TH>

<?php
$sql = "SELECT * FROM phptable2";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	
    while($row = $result->fetch_assoc()) {
        echo '<tr ALIGN="CENTER"><td>'.$row["orderid"].'</td><td>'.$row["OrderDetails"].'</td><td>'.$row["PaymentAmount"].'</td><td>'.$row["CustomerAddress"].'</td><td>'.$row["CustomerMobile"].'</td></tr>';	
    }
?>
    <form method="post" action="dboydb.php"> 
<table ALIGN="left" style="margin-left:40px" >
   <h4><br><hr>
<text style="margin-left: 10px">Fill Details of Delivery Boy</text> 
<hr>
</h4>
   <tr><td>Order Id: </td><td> <input type="number" name="oi" maxlength="4" min="1" max="9999" required>
   <br><br></td></tr>
   
   <tr><td>Delivery Boy Name:</td><td> <input type="text" name="dbn" required>
   <br><br></td></tr>
   <tr><td>Delivery Boy Mobile Number(+91):</td><td> <input type="number" name="dbpn" maxlength="10" min="1400000000" max="9999999999" required>
   <br><br></td></tr>
   <tr><td></td><td><input type="submit" name="submit" value="Submit"> </td></tr>
   </table>
</form>
<?php
} else {
    echo "You are not authorized to access";
}
?>
</table>	
		
<?php    }
    
} else {
    echo "0 results";
}
$conn->close();
?>
