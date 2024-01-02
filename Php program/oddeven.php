<html>
<head> <b> <h1> <u> ODD OR EVEN </u> </h1> <b> </head>
<body>
<form action="oddeven.php" method="POST">
Please enter Number:<input type="text" name="txt1">
<input type="submit" name="submit">
</form>
</body>
</html>


<?php
echo"<b><u>NUMBER IS ODD OR EVEN </u></b><br>";
$n=$_POST['txt1'];
if($n%2==0)
echo "$n is even";
else
echo "$n is odd";
?>