<!DOCTYPE HTML> 
<html>
<head>
</head>
<body> 
<h4>
<text style="margin-left: 200px">Fill Details</text> 
<hr>
</h4>

<form method="post" action="insertDB.php"> 
<table style="margin-left:40px" >
   <tr><td>Food:</td><td> <select name = "od">
 <option value="Pizza">Pizza(Rs:350)</option>
 <option value="Burger">Burger(Rs:50)</option>
 <option value="Cakes">Cakes(Rs:500)</option>
 </select><br><br></td></tr>
 
   <tr><td>Quantity of Food:</td><td><input type="number" maxlength="2" name="pa" min="1" max="10" required > 
   <br><br></td></tr>
   <tr><td>Email:</td><td> <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
   <br><br></td></tr>
   <tr><td>Mobile Number(+91):</td><td> <input type="number" name="cm" maxlength="10" min="1400000000" max="9999999999" required>
   <br><br></td></tr>
   <tr><td>Current Address:</td><td><textarea rows="4" cols="25" name="ca" required></textarea>
   <br><br></td></tr>
   <tr><td></td><td><input type="submit" name="submit" value="Submit" > </td></tr>
   </table>
</form>

</body>
</html>