
<?php
	$conn = mysqli_connect("localhost", "root", "","school");
	if($conn)
	{
		//echo "connection done";
	}
	else
	{
		echo "connection not done";
	}
	$name=$_POST['name'];
	//echo "$name";
	//die();
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$city=$_POST['city'];
	$sql = "INSERT INTO `user_data`( `name`, `email`, `phone`, `city`) 
	VALUES ('$name','$email','$phone','$city')";
	
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>
 