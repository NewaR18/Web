<?php
 $server='localhost';
 $username='root';
 $password='';
 $db='Employees';
 $conn=mysqli_connect($server,$username,$password,$db);
 if(!$conn){
     die("Connection failed".mysqli_connect_error());
 }
 //$checkBox = implode(',', $_POST['Days']);
 $sql="create table codreg(first_name varchar(40),
 middle_name varchar(40),
 last_name varchar(40),
 father_first_name varchar(40),
 father_middle_name varchar(40),
 father_last_name varchar(40),
 mother_first_name varchar(40),
 mother_middle_name varchar(40),
 mother_last_name varchar(40),
 emergency_contact_number varchar(40),
 emergency_contact_relation varchar(40),
 emergency_contact_country varchar(40),
 DOB_in_BS_Year int,
 DOB_in_BS_Month varchar(10),
 DOB_in_BS_Day int,
 DOB_in_AD_Year int,
 DOB_in_AD_Month varchar(10),
 DOB_in_AD_Day int,
 profile_pic varchar(255),
 email varchar(40),
 UNIQUE(email),
 phone_code varchar(10),
 phone varchar(30),
 gender varchar(20),
 language varchar(100),
 experience int,
 rank varchar(5),
 country varchar(40),
 street varchar(40),
 city varchar(30),
 state varchar(30),
 zip bigint,
 passport_no bigint,
 passport_issue_year int,
 passport_issue_month varchar(5),
 passport_issue_day int,
 passport_issuing_authority varchar(80),
 passport_expiry_year int,
 passport_expiry_month varchar(5),
 passport_expiry_day int,
 passport_front varchar(255),
 passport_back varchar(255));";
 $res=mysqli_query($conn,$sql);
 if(!$res){
     die("Table not created".mysqli_error($conn));
 }
 echo "Table Created";
 ?>