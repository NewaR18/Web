<?php
 $server='localhost';
 $username='root';
 $password='';
 $db='Employees';
 $conn=mysqli_connect($server,$username,$password,$db);
 if(!$conn){
     die("Connection failed".mysqli_connect_error());
 }
 $sql="create table employee(fname varchar(20), mname varchar(20),lname varchar(20), email varchar(40), UNIQUE(email),country int, phone varchar(20), password varchar(20), gender varchar(20))";
 $res=mysqli_query($conn,$sql);
 if(!$res){
     die("Table not created".mysqli_error($conn));
 }
 echo "Table Created";
 ?>