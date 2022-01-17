<?php
$server='localhost';
$username='root';
$password='';
$db='Employees';
$conn=mysqli_connect($server,$username,$password,$db);
if(!$conn){
    die("Connection failed".mysqli_connect_error());
}
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$country=$_POST['country'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$sql="insert into employee(fname,mname,lname,email,country,phone,password,gender) values ('$fname','$mname','$lname','$email','$country','$phone','$password','$gender')";
$res=mysqli_query($conn,$sql);
if(!$res){
    die("NOT INSERTED<br>".mysqli_error($conn));
}
header('location:signin.php?register=success');
?>