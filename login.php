<!DOCTYPE HTML> 
<html>
<head>
</head>
<body> 
<h4>
<text style="margin-left: 200px">Fill Details</text> 
<hr>
</h4>

<form method="post" action="logindb.php"> 
<table style="margin-left:40px" >
<tr><td>User Name: </td><td><input type="text" name="un" pattern="[^'\!@#$%&*+_x22]+" title="Special Char '\!@#$%&*+_ not allowed." required>
   <br><br></td></tr>
   <tr><td>Age:</td><td><input type="number" maxlength="2" name="age" min="18" max="99" required > 
   <br><br></td></tr>
   <tr><td>Email:</td><td> <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
   <br><br></td></tr>
   
   <tr><td>Password:</td><td> <input type="password" name="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
   <br><br></td></tr>
   <tr><td>Mobile Number(+91):</td><td> <input type="number" name="mobno" maxlength="10" min="1400000000" max="9999999999" required>
   <br><br></td></tr>
   <tr><td>Current Address:</td><td><textarea rows="4" cols="25" name="address" required></textarea>
   <br><br></td></tr>
   
   <tr><td></td><td><input type="submit" name="submit" value="Submit"> </td></tr>
   </table>
</form>
<script>

</script>



</body>
</html>