<?php
 $server='localhost';
 $username='root';
 $password='';
 $db='Employees';
 $conn=mysqli_connect($server,$username,$password,$db);
 if(!$conn){
     die("Connection failed".mysqli_connect_error());
 }
 $sql="create table Messages(name varchar(40), email varchar(40), subject varchar(40), message varchar(200))";
 $res=mysqli_query($conn,$sql);
 if(!$res){
     die("Table not created".mysqli_error($conn));
 }
 echo "Table Created";
 ?>