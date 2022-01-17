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
    <title>About us</title>
</head>
<body>
    <link href='https://css.gg/phone.css' rel='stylesheet'>
    <link rel="stylesheet" href="about.css">
    <script src="https://kit.fontawesome.com/309c0fe451.js" crossorigin="anonymous"></script>
</head>
<style>
    body{
        background-size: 1420px 1050px;
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
                <div class= "description">
                    <ul class="img">
                        <img src="company.jpg" alt="photo" id="midpic">
                    </ul>
                    <p style= font-size:30px><b style="color:#012970">&nbsp&nbspAbout Our Company:-</b></p>
                    <p>&nbsp&nbsp&nbspThis Company was established in 2021. Our company motive is to make everyones life easy.</p>
                    <p>&nbsp&nbsp&nbspIn todays world most of the works are done digitally, so by focusing on that part we developed this site.</p>
                    <p>&nbsp&nbsp&nbspAnd also after covid-19, we all are aware how important it is to work digitally and how easy can it be.</p>

                    <p style= font-size:20px><b style="color:#012970">&nbsp&nbspDetails:-</b></p>
                    <p>&nbsp&nbsp&nbspOur Company is all about gaming. As we all know gaming is important part of everyones life in todays &nbsp&nbsp&nbspworld.</p>
                    <p>&nbsp&nbsp&nbspWe develop a range of branded and original games for mobile,microsoft and console.</p>
                    <p>&nbsp&nbsp&nbspWe support all gaming platforms like: PC, Console and mobile. We also manage gaming tournaments of &nbsp&nbsp&nbspall platforms.</p>
                    <p>&nbsp&nbsp&nbspWe allow gamers to participate in tournaments of various games such as: COD,PUBG,CS GO etc.</p>
                    <p>&nbsp&nbsp&nbspWe also do live commentary of gaming tournaments in various langauges.</p>
                    <p>&nbsp&nbsp&nbspWe broadcast gameplay video through Twitch and Youtube.</p><hr>
                    
                    <p style="font-size:30px"><b style="color:#012970">&nbsp&nbspOur Company Overview:-</b></p> <hr>
                    <p style="font-size:20px"><b>&nbsp&nbsp&nbspCompany Name:</b> Partnership Company</p>
                    <p style="font-size:20px"><b>&nbsp&nbsp&nbspFounded Year:</b> 2021</p>
                    <p style="font-size:20px"><b>&nbsp&nbsp&nbspLocation:</b> Nepal, Kathmandu</p>
                    <p style="font-size:20px"><b>&nbsp&nbsp&nbspFunding:</b> USD 100M</p>
                    <p style="font-size:20px"><b>&nbsp&nbsp&nbspFounders:</b> Mr.Sudip Shrestha, Mr.Pratik Khadka</p>
                    <p style="font-size:20px"><b>&nbsp&nbsp&nbspOperating Status:</b> Active</p>
                <div class="last">
                    <p style="color:#012970">&nbsp&nbsp&nbspFor more information contact us:- PartnerShipCompany@gmail.com</p>
                    <p style="color:#012970">&nbsp&nbsp&nbspPhone Number:- 0123456789</p>
                    <p style="color:#012970">&nbsp&nbsp&nbspWelcome to the Future</p>
                </div>
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
                            <li> <a href="maintry.php">Home</a></li>
                            <li> <a href="about.php">About</a></li>
                            <li><a href="team.php">Team</a></li>
                            <li><a href="pressrelease.php">Investors</a></li>
                        </ul>
                       </div>
                    <div class="box3">REGISTRATION LINK
                        <ul id="box2a"> 
                            <li> <a href="csgo.php">CS:GO</a></li>
                            <li> <a href="cod.php">COD</a></li>
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
