<html>
<head> <b> <h1> <U> Fibonacci series </u> </h1> <b> </head>
<body>
<form action="fibonacci series.php" method="GET">
Please Enter fibonacci limit :<input type="text" name="txt">
<input type="submit" name="submit">
</form>
</body>
</html>


<?php
if(isset($_GET["submit"]))
{
    $num=$_GET['txt'];
    $a=0;
    $b=1;
    echo "fibonacci series for ".$num." element are:</br>";
    echo $a.'  '.$b;
    $i=0;
    while($i<$num-2)
    {
        $next=$a+$b;
        echo '  '.$next;
        $a=$b;
        $b=$next;
        $i++;
    }
}
?>