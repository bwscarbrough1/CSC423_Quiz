<!DOCTYPE html>
<html>
	<head>
		<title> Quiz 2 Problem 1 </title>
		
		<script type="text/javascript">
		function validateData()
		{
			validateItemType();
			validateBarcode();
			validateUnits();
			validateReorder();
			validateValidity();
		}
		
		function validateItemType()
                {
                        var charRegExp = /^[0-9a-zA-z][0-9a-zA-z .]*$/
                        var it = document.getElementById("ItemType").value;
                        if (it.search(charRegExp)!=0)
                        {
                                alert("Invalid characters entered for Item Type Name");
                        }
                }
		
		function validateBarcode()
                {
                        var charRegExp = /^[0-9]/
                        var bc = document.getElementById("Barcode").value;
                        if (bc.search(charRegExp)!=0)
                        {
                                alert("Invalid characters entered for Barcode");
                        }
                }

		function validateUnits()
                {
                        var charRegExp = /^[1-9][0-9]*$/
                        var ut = document.getElementById("Units").value;
                        if (ut.search(charRegExp)!=0)
                        {
                                alert("Invalid characters entered for Units");
                        }
                }

		function validateReorder()
                {
                        var charRegExp = /^[1-9][0-9.]*$/
                        var ro = document.getElementById("Reorder").value;
                        if (ro.search(charRegExp)!=0)
                        {
                                alert("Invalid characters entered for Reorder");
                        }
                }

		function validateValidity()
                {
                        var charRegExp = /^[1-9][0-9]*$/
                        var vt = document.getElementById("Validity").value;
                        if (vt.search(charRegExp)!=0)
                        {
                                alert("Invalid characters entered for Validity");
                        }
                }
		</script>	
	</head>
<!-- Open the body here, close the body in footer -->
<body bgcolor="#87CEEB">
	<h4 align='center' style="color:#8C001A;">ADD AN INVENTORY ITEM TYPE<h4>
		<form  method="POST" action="processInventoryItemType.php" name="processType" id="processType" >
	<table cellspacing='25' align='center'>
		<tr><td>Item Type Name:</td><td><input type="text" name="itemType"/></td><td>Barcode Prefix:</td><td><input type="text" name="barcodePrefix"/></td></tr>
		<tr><td>Units:</td><td><input type="text" name="units"/></td><td>Units Measure:</td><td><input type="text" name="unitsMeasure"/></td></tr>
		<tr><td>Reorder Point:</td><td><input type="text" name="reorderPoint"/></td></tr>
		<tr><td>Age Sensitive:</td><td><input type="radio" name="Radio1" id="Radio1" value="" style="width: 25px;" />Yes
		<input type="radio" name="Radio2" id="Radio2" value="" checked style="width: 25px;" />No</td></tr>
		<tr><td>Validity Days:</td><td><input type="text" name="validityDays" value="-1" /></td></tr>
		<tr><td>Notes:</td><td><textarea rows="6" cols="19" name="notes"/></textarea></td></tr>
		<tr align='center'><td></td><td><input type='submit' name="submit" value="Submit"/><input type='reset' name="reset" value="Reset"/></tr>
	</table>
   
    <input type="hidden" name="processType">
	</form>
</body>
</html>
