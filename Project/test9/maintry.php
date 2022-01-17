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
    <title>Partnership</title>
    <link href='https://css.gg/phone.css' rel='stylesheet'>
    <link rel="stylesheet" href="maintry5.css">
    <script src="https://kit.fontawesome.com/309c0fe451.js" crossorigin="anonymous"></script>
</head>
<style>
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
    <?php
        if(isset($_GET['message'])){
        echo "<script>alert('We received your message. We will soon look into it. Have a great day')</script><br>";
        }
    ?>
    <header>
        <ul id="logo">
     <!-- <img id="logo" src="1.jpg"  alt="logo">-->  
        <img src="loho2.png" alt="logo">
        <span ><br/>PARTNERSHIP COMPANY</span>
        </ul>  
        <ul>
            <li><a href="maintry.php" class="anim">Home</a></li>
            <li><a href="about.php" class="anim">About</a></li>
            <li><a href="pressrelease.php" class="anim">Investors</a></li>
            <li><a href="team.php" class="anim">Team</a></li>
            <li><a href="#hatake" id="contact">Contact Us</a></li>
        </ul>
    </header>
    <section>
        <div id="cent">
        <ul class="img">
            <div>
            <h1>We Provide Exceptional Services For Expanding Your Gaming Experiences</h1>
            <h2>We are a squad with experience who operate closely with the players to encourage them, recognize their strengths, and make sure they are playing at their finest.</h2>
            <div id="link">
                <a href="#bars" style="color:white">GET STARTED <span>&#8594;</span></a>
            </div>
        </ul>
        <ul class="img">
        <img src="5.jpg" alt="photo" id="midpic">
        </ul>
    </div>
        <ul id="bars">
            <li class="amz">
                <img src="1mid1.jpg" alt="pic"><br/>
                <h3>Counter-Strike:Global Offensive</h3>
                <p class="text">Counter-Strike:Global Offensive is a multiplayer first-person shooter developed by Valve and Hidden Path Entertainment. It is the fourth game in the Counter-Strike series.The game pits two teams, Terrorists and Counter-Terrorists, against each other in different objective-based game modes.</p>
                <br/>
                <div>
                    <a href="csgo.php">GET STARTED <span>&#8594;</span></a>
                </div>
            </li>
            <li class="amz">
                <img src="mid2.jpg" alt="pic">
                <h3>Call of Duty: Modern Warfare</h3>
                <p class="text">Call of Duty is a first-person shooter video game franchise published by Activision. Starting out in 2003, it first focused on games set in World War II, futuristic worlds, and outer space. Over time, the series has seen games set in the midst of the Cold War. Popular COD titles are Modern Warfare, Blackops.</p>
                <br/>
                <div>
                    <a href="cod.php">GET STARTED <span>&#8594;</span></a>
                </div>
            </li>
            <li class="amz">
                <img src="mid3.jpg" alt="pic">
                <h3>PlayerUnknown's Battleground</h3>
                <p class="text">PUBG is a player versus player shooter game in which up to one hundred players fight in a battle royale, a type of large-scale last man standing deathmatch where players fight to remain the last alive. Players can choose to enter the match solo, duo, or with a small team of up to four people.</p>
                <br/>
                <div>
                    <a href="pubg.php">GET STARTED <span>&#8594;</span></a>
                </div>
            </li>
        </ul>
        <br/>
        <div>
            <p class="lastalxi"> </p>
            <p class="alxi" id="hatake">Contact us</p>
        <div>
            <ul id="ery1">
                <li class="ery i1">
                    <i class="fas fa-map-marker-alt"></i><br/>
                    <h3>Address</h3>
                    <p>Ward 17 Tarakeshwor,</p>
                    <p>Kathmandu, Nepal 44600</p>
                </li>
                <li class="ery i2">
                    <i class="fas fa-phone-alt"></i>
                    <h3>Call Us</h3>
                    <p>+977 986-1141726</p>
                    <p>+977 986-5389789</p>
                </li>
                <li class="ery i3">
                    <form method= "POST" action="msg(insert).php">
                        <input type= "text" name= "name" class="naruto itachi" id="name" placeholder="Your Name" required> 
                        <input type= "text" name= "email" class="naruto itachi" id="email"placeholder="Your Email" required></br>
                        <input type= "text" name= "subject" class="naruto gai" id="subject"placeholder="Subject" required></br>
                        <textarea name="message"  class="naruto gai" rows="6" id="message" placeholder="Message" required></textarea></br>
                        <div id="center">
                            <input type= "submit" value= "Send Message" class="naruto kakashi">
                        </div>
                    </form>
                </li>
                <li class="ery i4">
                    <i class="fas fa-envelope"></i><br/>
                    <h3>Email Us</h3>
                    <p>sudipshrestha960@gmail.com</p>
                    <p>khadkapratikk10@gmail.com</p>
                </li>
                <li class="ery i5">
                    <i class="far fa-clock"></i><br/>
                    <h3>Open hours</h3>
                    <p>Sunday - Friday</p>
                    <p>7:00AM - 9:00PM</p>
                </li>
            </ul>
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
    </section>
    <footer>
        <div id="scroll-up"><a href="#logo">
            <i class="fa fa-arrow-up hold" aria-hidden="true" style="color:white"></i>
            </a>
        </div>
    </footer>
    
    
</body>
</html>
    <?php
}
else{
    header('location:../signin.php?sign=login');
}
?>
