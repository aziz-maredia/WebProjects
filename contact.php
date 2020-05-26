<?php 


$con=mysqli_connect('localhost','root');

if($con)
{
	echo "Connection Successfull";
}
else
{	
	echo "Database not found.";	
}

mysqli_select_db($con,'Contacus');

$name=$_POST['name'];
$email=$_POST['email'];
$msg=$_POST['msg'];

$query="insert into contactdata(name,email,msg) values ('$name','$email','$msg')";
$result = mysqli_query($con,$query);

if (!$result) 
{
    die('Invalid query: ' . mysqli_error($con));
}
else
{
    header('location:index.php');
}
 ?>