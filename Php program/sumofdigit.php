<html>
<head> <b> <h1> <U> SUM OF  A NUMBER </u> </h1> <b> </head>
<body>
<form action="sumofdigit.php" method="GET">
Please Enter Number:<input type="text" name='txt'>
<input type="submit" name="submit">
</form>
</body>
</html>


<?php
if(isset($_GET["submit"]))
{
    $text=$_GET['txt'];
    $num=$text;
    $sum=0;
    for($i=0;$i<=strlen($text);$i++,$text/=10)
    {
        $sum=$sum+$text%10;
    }
    echo"sum of digit $num is $sum";
}
?>