<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mydb";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
die("connection failed".$conn->connect_error);
}
else
{
echo "connection succesfull";
}
?>

<html>
<head>
<title></title>
</head>
<body>
<form action="mysql conn.php" method="POST">
Please Enter name :<input type="text" name="name"> <br> <br>
Please Grade :<input type="text" name="grade">
<input type="submit" name="submit">
</form>
</body>
</html>

<?php
if (isset($_POST['submit']))
{
	$name=$_POST['name'];
	$grade=$_POST['grade'];
	$sql="INSERT INTO `name`(abin,gade) VALUES ('$name','$grade')";
	$result= mysqli_query($conn,$sql);
	if($result)
	{
		echo "data added succesfully";
	}
	else{
		 echo "Error: " . $sql . "<br>" . $conn->error;

	}
}
$conn->close();

?>

<?php
$conn=mysqli_connect("localhost","root","","mydb");
$query="select * from name";
$res=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($res))
{
	echo $row['abin'];
	echo  " ".$row['gade'];
	echo  "<br>";
	
}
?>