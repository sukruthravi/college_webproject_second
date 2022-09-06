<!DOCTYPE html5>
<html>
<body>

<?php
$conn = new mysqli("localhost","root","","nmit");

if($conn->connect_error)
{
die("Connection failed:".$conn->connect_error);
}
$sql = "select * from admin where name='".$_POST["name"]."'";
$sql1= "select * from users where uname='".$_POST["name"]."'";

$res=$conn->query($sql);
$res1=$conn->query($sql1);

if($res->num_rows >0)
		{
			while($row=$res->fetch_assoc())
			{
				if($row["pswd"]==$_POST["pswd"])
				header('Location: login/index.php');
				else
				header('Location: loginerror.php');

			}
		}
else if($res1->num_rows >0)
		{
			while($row1=$res1->fetch_assoc())
			{
				if($row1["password"]==$_POST["pswd"])
				header('Location: teach/index.php');
				else
				header('Location: loginerror.php');

			}
		}
else	
	{
		header('Location: loginerror.php');
	}
?>

</body>
</html>