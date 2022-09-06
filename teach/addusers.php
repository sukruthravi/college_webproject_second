<!DOCTYPE html>
<html>

<body>
<center><h2>
<?php
$conn = new mysqli("localhost","root","","nmit");

if($conn->connect_error)
{
die("Connection failed:".$conn->connect_error);
}

$sql = "select * from admin where pswd='".$_POST["apassword"]."'";

$res=$conn->query($sql);

if($res->num_rows <1 )
{
		header('Location: noticeerror.html');
}
else
{

	// if(isset($_POST['cultural']))
	// $selected_val = $_POST['cultural'];  // Storing Selected Value In Variable


	$sql = "insert into users values ('" .$_POST["name"] ."','" .$_POST["password"] ."')";

	if ($conn->query($sql)==TRUE){
		header('Location: useradded.html');
	}
	else
	{
		echo "Error<br><br>";
		echo "<a href='login.html'>TRY AGAIN</a>";

	}
}
?>


</h2></center>

</body>
</html>