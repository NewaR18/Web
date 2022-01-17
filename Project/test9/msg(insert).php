<?php
 $server='localhost';
 $username='root';
 $password='';
 $db='Employees';
 $conn=mysqli_connect($server,$username,$password,$db);
 if(!$conn){
     die("Connection failed".mysqli_connect_error());
 }
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$sql="Insert into Messages(name,email,subject,message)values('$name','$email','$subject','$message')";
$res=mysqli_query($conn,$sql);
if(!$res){
    die("NOT INSERTED<br>".mysqli_error($conn));
}
header('location:maintry.php?message=delivered');
?>