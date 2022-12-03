<?php
session_start();
$connect=mysqli_connect('localhost','root','');
    mysqli_select_db($connect,'food1');

if(isset($_POST['submit']))
{
	
	$name=$_POST['name'];
	$table_number=$_POST['table_number'];	
	$food_name=$_POST['food_name'];
	
	

	 $sql="insert into food(name,table_number,food_name)
	 values('$name','$table_number','$food_name')";
	 mysqli_query($connect,$sql);
	 echo "<script>alert('Your Order successfully') </script>";

	 header('location:index.html');

	
}
?>

	