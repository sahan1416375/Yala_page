<?php
$con=mysqli_connect('localhost','root','','yalaTable');
if (isset($_POST['submit']) {
	$name=$_POST['Name'];
	$email=$_POST['Email'];
	$countryarr=$_POST['country'];
	$xxx=$_POST['xxx'];

	$insert_table="INSERT INTO user (Name, Email, Country, Xxx) VALUES ('$name','$email','$countryarr','$xxx')";
	$insert_query=mysqli_query($con, $insert_table);

	if ($insert_query) {
		echo "Inserted!!!!!";
	}
}

?>