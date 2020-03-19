<html>
<body>

<?php 
$nm= $_POST["name"];
$pas= $_POST["pass"]; 
//echo $nm ;

$p= file_get_contents('c.txt','a');
//echo $p;

if ($pas==$p)
{
echo "success";
}
else
{
	echo "wrong password";
}
?>

</body>
</html>
