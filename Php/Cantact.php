<?php
$con=mysqli_connect("localhost","root","","yalatable");
if (isset($_POST['sumbit'])) {
	$name=$_POST['Name'];
	$email=$_POST['Email'];
	$countryarr=$_POST['country'];
	$a=implode(",", $countryarr);
	$xxx=$_POST['xxx'];
	$b=implode(",", $xxx);


	$insert_table="INSERT INTO user(Name, Email, Country, Xxx) VALUES ('$name','$email','$a','$b')";
	$insert_query=mysqli_query($con, $insert_table);

	if ($insert_query) {
		echo "Inserted!!!!!";
	}
	else{
		echo "wrong!!!";
	}

}

?>