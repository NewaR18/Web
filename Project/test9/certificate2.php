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
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>  
    <link rel="stylesheet"  media="all" href="cscert.css" type="text/css">
</head>
<style>
    .bg{
        position:absolute;
        width: 100%;
        height:1130px;
        top:0;
        left:0;
        opacity:0.1;
    }
</style>
<body>
    <img class="bg" src="2mid2.jpg" alt="photo">
        <?php
        $server='localhost';
        $username="root";
        $password="";
        $database='employees';
        $conn=mysqli_connect($server,$username,$password,$database);
        if(!$conn){
            die("Connection failed".mysqli_connect_error());
        }
        $email=$_GET['email'];
        $sql="Select* from codreg where email='".$email."'";
        $res=mysqli_query($conn,$sql);
        if(mysqli_num_rows($res)>0){
            while($row=mysqli_fetch_assoc($res)){
                echo "<h2> Your Information</h2>";
                echo "<div class='cert'>";
                echo "<p>Personal Information</p>";
                echo "Name: ".$row['first_name']. " ".$row['middle_name']." ".$row['last_name'] ."<br/>";
                echo "Father's Name: ".$row['father_first_name']. " ".$row['father_middle_name']." ".$row['father_last_name']."<br/>" ;
                echo "Mother's Name: ".$row['mother_first_name']. " ".$row['mother_middle_name']." ".$row['mother_last_name']."<br/>" ;
                echo "Emergency Contact: ".$row['emergency_contact_relation'].":-".$row['emergency_contact_number']."-".$row['emergency_contact_country']."<br/>";
                echo "Date of Birth(BS): ".$row['DOB_in_BS_Month']." ".$row['DOB_in_BS_Day'].",".$row['DOB_in_BS_Year']."<br/>";
                echo "Date of Birth(AD): ".$row['DOB_in_AD_Month']." ".$row['DOB_in_AD_Day'].",".$row['DOB_in_AD_Year']."<br/>";
                echo "Email: ".$row['email']."<br/>";
                echo "Phone number: +".$row['phone_code']." ".$row['phone']."<br/>";
                echo "Gender: ".$row['gender']."<br/>";
                echo "Language: ".$row['language']."<br/>";
                if($row['experience']==5){
                    echo "Experience: Legendary"."<br/>";
                }elseif($row['experience']==4){
                    echo "Experience: Expert"."<br/>";
                }elseif($row['experience']==3){
                    echo "Experience: Pro"."<br/>";               
                }elseif($row['experience']==2){
                    echo "Experience: Moderate"."<br/>";
                }else{
                    echo "Experience: Beginner"."<br/>";
                }
                $x=$row['rank'];
                echo "Rank: ".strtoupper($x)."<br/>";
                echo "Address: ".$row['street'].", ".$row['city'].", ".$row['state']." ".$row['zip'].", ".$row['country']."<br/><br/><br/>";
                echo "<p>Passport Details</p>";
                echo "<div class='pport'>";
                    echo "<div class='fn'>";
                        echo "Passport number: </br>";
                        echo $row['passport_no'];
                    echo "</div>";
                    echo "<div class='fn'>";
                        echo "Passport Issue Date: </br>";
                        echo $row['passport_issue_month']." ".$row['passport_issue_day'].",".$row['passport_issue_year'];
                    echo "</div>";
                    echo "<div class='fn'>";
                        echo "Passport Issuing Authority: </br>";
                        echo $row['passport_issuing_authority'];
                    echo "</div>";
                echo "</div></br></br>";
                echo "<div class='pport'>";
                    echo "<div class='fn'>";
                        echo "Passport Expiry Date: </br>";
                        echo $row['passport_expiry_month']." ".$row['passport_expiry_day'].",".$row['passport_expiry_year'];
                    echo "</div>";
                    echo "<div class='fn'>";
                        echo "Passport front: </br>";
                    echo "</div>";
                    echo "<div class='fn'>";
                        echo "Passport Back: </br>";
                    echo "</div>";
                echo "</div>";
                echo "<br><br><br><br>";
                echo "<br><br><br><br>";
                echo "<br><br><br><br>";
                echo "<p style='font-size:15px; color:#444444;'>If any of this information is not correct the you can refill the form in two days after your application gets rejected. </p>";
                echo "<p style='font-size:15px; color:#444444;'>We will provide you following game id card after your information is verified. </p><br>";
                echo "<a style='padding:5px;
                background-color:#012970;
                color:white; margin:0px 0px 0px 1200px; position:relative;
                text-decoration: none;' href='maintry.php'>Finish</a>";
                echo "</div>";
                echo "<img class='pp' src='".$row['profile_pic']."' alt='photo'>";
                echo "<img class='pp3' src='".$row['passport_back']."' alt='photo'>";
                echo "<img class='pp2' src='".$row['passport_front']."' alt='photo'>";

            }
        }
        ?>

    </tbody>
    </table>
    <?php
}
else{
    header('location:../signin.php?sign=login');
}
?>
