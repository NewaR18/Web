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
if(isset($_SESSION['email'])){
    echo "Hello there!!!<br>";
    echo "Welcome to new page!!!<br>";
    echo "<a href=logout.php>Log out</a>";
}
else{
    header('location:signin.php?sign=login');
}
?>
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
if(isset($_SESSION['email'])){?>
    echo "Hello there!!!<br>";
    echo "Welcome to new page!!!<br>";
    echo "<a href=logout.php>Log out</a>";
    <?php
}
else{
    header('location:../signin.php?sign=login');
}