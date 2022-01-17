<?php
$server='localhost';
$username='root';
$password='';
$db='Employees';
$conn=mysqli_connect($server,$username,$password,$db);
if(!$conn){
    die("Connection failed".mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Partnership</title>
    </head>
    <link rel="stylesheet" type="text/css" href="signin1.css">
    <body class="body">
        <div class="box">
            <div class="sign">
                <span class="left" id="scroll">
                    <div class="content">
                        <p style= font-size:30px><b>Welcome to Partnership Company.</b></p>
                        <p>This Company was established in 2021. Our company motive is to make everyones life easy.</p>
                        <p>In todays world most of the works are done digitally, so by focusing on that part we developed this site.</p>
                        <p>And also after covid-19, we all are aware how important it is to work digitally and how easy can it be.</p>
                        <p style= font-size:20px><b>NEW TO THIS SITE?</b></p>
                        <p>We are happy to have you here. Check the details below and register your account on the right side to gain access in this company</p>
                        <p>Once you have created your account successfully. Fill your information carefully.</p>
                        <p style= font-size:30px><b>Details:-</b></p>
                        <p>Our Company is all about gaming. As we all know gaming is important part of everyones life in todays world.</p>
                        <p>We develop a range of branded and original games for mobile,microsoft and console.</p>
                        <p>We support all gaming platforms like: PC, Console and mobile. We also manage gaming tournaments of all platforms.</p>
                        <p>We allow gamers to participate in tournaments of various games such as: COD,PUBG,FIFA,CS etc.</p>
                        <p>We also do live commentary of gaming tournaments in various langauges.</p>
                        <p>We broadcast gameplay video through Twitch and Youtube.</p>
                        <p style="font-size:30px"><b>Our Company Overview:-</b></p> <hr>
                        <p style="font-size:20px"><b>Company Name:</b> Partnership Company</p>
                        <p style="font-size:20px"><b>Founded Year:</b> 2021</p>
                        <p style="font-size:20px"><b>Location:</b> Nepal, Kathmandu</p>
                        <p style="font-size:20px"><b>Funding:</b> USD 100M</p>
                        <p style="font-size:20px"><b>Founders:</b> Mr.Sudip Shrestha, Mr.Pratik Khadka</p>
                        <p style="font-size:20px"><b>Operating Status:</b> Active</p>
                    </div> 
                    <div class="last">
                        <p>For more information contact us:- blahblah10@gmail.com</p>
                        <p>Tel no:- 01-2345678</p>
                        </body>
                    </div>
                </span>
                <span class="right">
                    <h1 class="first">SIGN IN</h1>
                    <table class="table"  cellpadding="50px" align="center">
                    <tr>
                        <td style="padding:10%">
                            <form method="post" action="check.php">
                                <?php
                                    if(isset($_GET['status'])){
                                        echo "<p class='comment'>Invalid Credentials</p><br>";
                                    }
                                    if(isset($_GET['logout'])){
                                        echo "<p class=\"comment\">Logged out</p><br>";
                                    }
                                    if(isset($_GET['register'])){
                                        echo "<p class='comment'>Registered</p><br>";
                                    }
                                    if(isset($_GET['sign'])){
                                        echo "<p class='comment'>You have to login first</p><br>";
                                    }
                                ?>
                                Email: <input type="text" name="email" size="40" required><br><br><br>
                                Password: <input type="password" name="password" size="40" required><br><br><br>
                                <div class="mid">
                                <input class="submit1" type="Submit" value="Log in"></div>
                                <br><br><br>
                                <p style= font-size:12px>Don't have an account?</p>
                                <div class="register">
                                    <a style="color:#94228a; text-decoration:none" href="register.php">Register</a>
                                </div>
                                    
                            </form>
                        </td>
                    </tr>
                    </table>
                </span>
                
            </div>
        </div>
    </body>
    
    </html>
    