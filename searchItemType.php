<!DOCTYPE html>
<html>
	<head>
		<title> Quiz 2 Problem 2 </title>
	</head>
<!-- Open the body here, close the body in footer -->
<body bgcolor="#87CEEB">
	<h4 align='center' style="color:#8C001A;">SEARCH FOR AN INVENTORY ITEM TYPE<h4>
		<form  method="POST" action="processInventoryItemType2.php" name="processType" id="processType" >
	<table cellspacing='5' align='center'>
		<tr><td><h4 align='center' style="color:#0000A0;">Leave all the fields empty to list all item types.<h4></td></tr>
		<tr><td>Item Type Name: &emsp; <input type="text" name="itemType"/></td></tr>
		<tr><td>Barcode Prefix: &emsp; &ensp; <input type="text" name="barcodePrefix"/></td></tr>
	</table>
	<table cellspacing='5' align='center'>
		<tr align='center'><td><input type='submit' name="submit" value="Submit"/><input type='reset' name="reset" value="Reset"/></tr>
	</table>
   
    <input type="hidden" name="processType2">
	</form>
</body>
</html>
