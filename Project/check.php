<?php
session_start();
 $server='localhost';
 $username='root';
 $password='';
 $db='Employees';
 $conn=mysqli_connect($server,$username,$password,$db);
 if(!$conn){
     die("Connection failed".mysqli_connect_error());
 }
 $email=$_POST['email'];
 $password=$_POST['password'];
 $sql="Select email from employee where password='".$password."' and email='".$email."'";
 $res=mysqli_query($conn,$sql);
 if(mysqli_num_rows($res)==1){
     $_SESSION['email']=$email;
     header('location:test9/maintry.php?status=entered');
 }else{
    header('location:signin.php?status=invalid');
 }
 ?>
