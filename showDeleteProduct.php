<?php
include_once 'configDB.php';

$sql = "SELECT * FROM products;";
$result = mysqli_query($conn, $sql);
$resultCheck= mysqli_num_rows($result);
	if( $resultCheck > 0 ){
		while($row = mysqli_fetch_assoc($result)){ 
		include("deleteProductForm.php");
		}
	}
						
?>