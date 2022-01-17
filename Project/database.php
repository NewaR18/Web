<?php
 $server='localhost';
 $username='root';
 $password='';
 $conn=mysqli_connect($server,$username,$password);
 if(!$conn){
     die("Connection failed".mysqli_connect_error());
 }
 $sql="create database Employees";
 $res=mysqli_query($conn,$sql);
 if(!$res){
     die("Database not created".mysqli_error($conn));
 }
 echo "Database Created";
 ?>