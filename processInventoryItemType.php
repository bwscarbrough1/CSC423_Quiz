<?php

$PageTitle="Quiz 2 Problem 1";

$servername = "csdb.brockport.edu";
$username = "bscar1";
$password = "_fal16_0";
$dbname = "fal16_csc423_bscar1";

if(isset($_POST['submit'])){
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_query($connect,"INSERT INTO InventoryItemType (ItemTypeName, Units, UnitMeasure, ValidityDays, BarcodePrefix, ReorderPoint, AgeSensitive, Notes, Status)
VALUES ('$ItemTypeName', '$Units', '$UnitMeasure','$ValidityDays', '$BarcodePrefix', '$ReorderPoint', '$AgeSensitive', '$Notes', '$Status')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

mysqli_close($conn);
?>

<!-- Body Content Goes Here -->
 <h2 align='center'>Successfully Entered Data Into InventoryItemTable</h2>
 <hr/>
 <table align='center'>
    <tr>
       <td>
           <a href="http://www.itss.brockport.edu/~bscar1/CSC423Quiz2/enterItemType.php" class="button">Back To Previous Page</a>
       </td>
    </tr>
</table>



