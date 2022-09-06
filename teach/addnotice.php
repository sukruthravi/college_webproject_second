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

$sql = "select * from notices where nid='".$_POST["nid"]."'";

$res=$conn->query($sql);

if($res->num_rows >0 )
{
		header('Location: noticeerror.html');
}
else
{

	// if(isset($_POST['cultural']))
	// $selected_val = $_POST['cultural'];  // Storing Selected Value In Variable


	$sql = "insert into notices values ('" .$_POST["nid"] ."','" .$_POST["name"] ."','" .$_POST["ndate"] ."','" .$_POST["title"] ."','" .$_POST["description"] ."','" .$_POST["cat"] ."')";

	if ($conn->query($sql)==TRUE){
		header('Location: noticeadded.html');
	}
	else
	{
		echo "USERNAME DOES NOT EXIST<br><br>";
		echo "<a href='login.html'>TRY AGAIN</a>";

	}
}
?>


</h2></center>

</body>
</html>