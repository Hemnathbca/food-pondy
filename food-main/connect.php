<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'food');

if(isset($_POST['ordernow'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $text=$_POST['foodname'];
    $address=$_POST['address'];
    $sql="insert into order(name,email,number,foodname,address)
    values('$name', '$email', '$number', '$text', '$address')";
    $s=mysqli_query($con,$sql);
    header('location:index.html');
}

  ?>