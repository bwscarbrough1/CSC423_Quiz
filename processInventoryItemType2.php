<?php

$PageTitle="Quiz 2 Problem 2";

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

mysqli_query($connect,"SELECT FROM InventoryItemType (ItemTypeName, BarcodePrefix, AgeSensitive, ValidityDays, Notes, Status)
VALUES ('$ItemTypeName', '$BarcodePrefix', '$AgeSensitive', '$ValidityDays', '$Notes', '$Status')";

if (mysqli_query($conn, $sql)) 
	{
		echo "New record created successfully";
	} 
	else 
	{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}

mysqli_close($conn);
?>

 <?php 
<?php

$PageTitle="Quiz 2 Problem 2";

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

mysqli_query($connect,"SELECT FROM InventoryItemType (ItemTypeName, BarcodePrefix, AgeSensitive, ValidityDays, Notes, Status)
VALUES ('$ItemTypeName', '$BarcodePrefix', '$AgeSensitive', '$ValidityDays', '$Notes', '$Status')";

if (mysqli_query($conn, $sql)) 
	{
		echo "New record created successfully";
	} 
	else 
	{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}

mysqli_close($conn);
?>

 <?php 
      if( $result->num_rows==0 ){
        echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }
	  
	  else{
 ?>
		
<form method="POST" action="processInventoryItem2.php" name="processOrder2" id="processOrder2" >
<table border="2">
  <thead>
    <tr>
	  <th></th>
      <th>Item Type Name</th>
      <th>Barcode Prefix</th>
      <th>Age Sensitive</th>
      <th>Validity Days</th>
	  <th>Notes</th>
	  <th>Status</th>
    </tr>
  </thead>
  <tbody>
  
<?php 
        while( $row = mysqli_fetch_array($result) ){
			
			$ItemTypeName= $row['ItemTypeName'];
			$BarcodePrefix = $row['BarcodePrefix'];
			$AgeSensitive = $row['AgeSensitive'];
			$Notes = $row['Notes'];
			$Status = $row['Status'];	
    }
  
  $conn->close();
  }
}
}
?>
