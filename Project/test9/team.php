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
    <title>My team</title>
</head>
<body>
    <link href='https://css.gg/phone.css' rel='stylesheet'>
    <link rel="stylesheet" href="about.css">
    <script src="https://kit.fontawesome.com/309c0fe451.js" crossorigin="anonymous"></script>
</head>
<style>
    body{
        background-size: 1420px 1440px;
    }
    #logo2{
        margin-left: 15px;
    }
    #box2a{
        margin-left: -25px;
    }
    #box2a li{
        margin: 10px 0px;
    }
    #box4a{
        margin-left: -25px;
    }
    #box4a li{
        margin: 10px 0px;
        
    }
</style>
<body>
    <header>
        <ul id="logo">
        <img src="loho2.png" alt="logo">
        <span ><br/>PARTNERSHIP COMPANY</span>
        </ul>  
        <ul>
            <li><a href="maintry.php" class="anim">Home</a></li>
            <li><a href="about.php" class="anim">About</a></li>
            <li><a href="pressrelease.php" class="anim">Investors</a></li>
            <li><a href="team.php" class="anim">Team</a></li>
            <li><a href="maintry.php#hatake" id="contact">Contact Us</a></li>
        </ul>
    </header>
        <div class="myteam1">
            <p style="color: Blue">TEAM</p>
            <h3 style="color:#012970">Our Hard Working Team</h3>
        </div>
        <ul class="img1">
            <img src="team.jpg" alt="photo" id="midpic1">
        </ul><hr>
        <div class="myteam2">
            <b style="color: blue">&nbsp&nbspSudip Shrestha</b>
            <ul>
                <li>Co-chief Executive Officer</li>
                <li>Chief Operating Officer</li>
            </ul>
            <b style="color: blue">&nbsp&nbspPratik Khadka</b>
            <ul>
                <li>Co-chief Executive Officer</li>
                <li>Chief Financial Officer</li>
            </ul>
            <b style="color: blue">&nbsp&nbspBoard of Directors</b>
            <ol>
                <li><p>Anil Kumal:</p><p style='color:#444444;font-size:16px;'> President,CEO and Director, Android,Inc. ; Director, Linux Corp;</p></li>
                <li><p>Anish Karki:</p><p style='color:#444444;font-size:16px;'> President,CEO and Chairman, Union of European Football Associations ; Manager, Manchester United;</p></li>
                <li><p>Aabhash Shahi:</p><p style='color:#444444;font-size:16px;'> Founder, CEO and Director, 1X Corp N.V. ; Manager, Paris Saint-Germain Football Club;</p></li>
                <li><p>Subash Budathoki:</p><p style='color:#444444;font-size:16px;'> Chairman, CFO and co-founder, Tencent Holdings Ltd. ; Manager, Argentina Football Club;</p></li>
            </ol><hr>
        </div>
        <div class="box"> 
            <div class="box1">
                <ul id="logo2">
                    <img src="loho2.png" alt="logo">
                    <span ><br/>PARTNERSHIP COMPANY</span>
                </ul>
                <p>This Company was established in 2021. Our company motive is to make everyones life easy.
                    </p>
                <div id="icons"> 
                    <div id="fb">
                    <a href="https://www.facebook.com/profile.php?id=100069893213576">
                        <i class="fab fa-facebook book"></i>
                    </a>
                </div>
                <div id="ins">
                    <a href="https://www.instagram.com/sudip_.shrestha/">
                        <i class="fab fa-instagram book"></i>
                    </a>
                </div>
                <div id="twi">
                    <a href="https://twitter.com/sudipsh24828223">
                        <i class="fab fa-twitter book"></i>
                    </a>
                </div>
                <div id="yt">
                    <a href="https://www.youtube.com/channel/UCbPaQGLMGe1bPRV5fX-XBxQ">
                    <i class="fab fa-youtube book fa-2x"></i> 
                    </a>
                </div>
            </div>
               
            </div>
            <div class="box2">USEFUL LINKS
                <ul id="box2a"> 
                    <li><a href="maintry.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="team.php">Team</a></li>
                    <li><a href="pressrelease.php">Investors</a></li>
                </ul>
               </div>
            <div class="box3">REGISTRATION LINK
                <ul id="box2a"> 
                    <li><a href="csgo.php">Counter Strike:GO</a></li>
                    <li><a href="cod.php">Call Of Duty</a></li>
                    <li><a href="pubg.php">PUBG</a></li>
                </ul>
               </div>
            <div class="box4">CONTACT US 
                <ul id="box4a">
                   <li>Ward 17 Tarakeshwor,</li> 
                   <li>Kathmandu, Nepal 44600</li> 
                   <li><b>Phone: </b>012345678</li> 
                   <li><b>Email: </b>PartnerShipCompany@gmail.com</li> 
                </ul>
            </div>
            
            
        </div>    
     <p class="copyright">
            &copy; Copyright <strong><span style="color:#012970">PartnerShipCompany.</span></strong> All Rights Reserved </p>
    
</body>
</html>

    <?php
}
else{
    header('location:../signin.php?sign=login');
}
?>
