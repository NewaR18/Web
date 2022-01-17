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
    <link rel="stylesheet"  media="all" href="main.css" type="text/css">
</head>
<style>
    .bg{
        position:absolute;
        width: 100%;
        height:auto;
        top:0;
        left:0;
        opacity:0.1;
    }
    .bg2{
        position:absolute;
        width: 100%;
        height:505px;
        top: 1070px;
        left:0;
        opacity:0.1;
    }
</style>
<body>
<?php
$server='localhost';
$username='root';
$password='';
$db='Employees';
$conn=mysqli_connect($server,$username,$password,$db);
if(!$conn){
    die("Connection failed".mysqli_connect_error());
}
if(isset($_POST["submit"]))
{
    $var1 = rand(1111,9999); 
    $var2 = rand(1111,9999);
    $var3 = $var1.$var2; 
    $var3 = md5($var3);  
    $fnm = $_FILES["image"]["name"];  
    $dst = "./all_images/".$var3.$fnm; 
    $dst_db = "all_images/".$var3.$fnm;
    move_uploaded_file($_FILES["image"]["tmp_name"],$dst); 
    $var1 = rand(1111,9999); 
    $var2 = rand(1111,9999);
    $var3 = $var1.$var2; 
    $var3 = md5($var3);  
    $fnm = $_FILES["image2"]["name"];  
    $dst = "./all_images/".$var3.$fnm; 
    $dst_db2 = "all_images/".$var3.$fnm;
    move_uploaded_file($_FILES["image2"]["tmp_name"],$dst); 
    $var1 = rand(1111,9999); 
    $var2 = rand(1111,9999);
    $var3 = $var1.$var2; 
    $var3 = md5($var3);  
    $fnm = $_FILES["image3"]["name"];  
    $dst = "./all_images/".$var3.$fnm; 
    $dst_db3 = "all_images/".$var3.$fnm;
    move_uploaded_file($_FILES["image3"]["tmp_name"],$dst); 
    $language = implode(',', $_POST['lang']);
    $sql="insert into pubgreg(
first_name,
 middle_name,
 last_name,
 father_first_name,
 father_middle_name,
 father_last_name,
 mother_first_name,
 mother_middle_name,
 mother_last_name,
 emergency_contact_number,
 emergency_contact_relation,
 emergency_contact_country,
 DOB_in_BS_Year,
 DOB_in_BS_Month,
 DOB_in_BS_Day,
 DOB_in_AD_Year,
 DOB_in_AD_Month,
 DOB_in_AD_Day,
 profile_pic,
 email,
 phone_code,
 phone,
 gender,
 language,
 experience,
 rank,
 country,
 street,
 city,
 state,
 zip,
 passport_no,
 passport_issue_year,
 passport_issue_month,
 passport_issue_day,
 passport_issuing_authority,
 passport_expiry_year,
 passport_expiry_month,
 passport_expiry_day,
 passport_front,
 passport_back
 ) VALUES
 ('$_POST[fname]',
 '$_POST[mname]',
 '$_POST[lname]',
 '$_POST[ffname]',
 '$_POST[fmname]',
 '$_POST[flname]',
 '$_POST[mfname]',
 '$_POST[mmname]',
 '$_POST[mlname]',
 '$_POST[ecn]',
 '$_POST[ecr]',
 '$_POST[ecc]', 
 $_POST[BYear],
'$_POST[BMonth]',
 $_POST[BDay],
 $_POST[AYear],
 '$_POST[AMonth]',
 $_POST[ADay],
 '$dst_db',
 '$_POST[email]',
 '$_POST[phone_code]',
 '$_POST[phone]',
 '$_POST[gender]',
 '$language',
 $_POST[exp],
 '$_POST[rank]',
 '$_POST[country]',
 '$_POST[street]',
 '$_POST[city]',
 '$_POST[state]',
 $_POST[zip],
 '$_POST[pno]',
 $_POST[IYear],
'$_POST[IMonth]',
 $_POST[IDay],
 '$_POST[pia]',
 $_POST[EYear],
'$_POST[EMonth]',
 $_POST[EDay],
 '$dst_db2',
 '$dst_db3'
 )";
    $res=mysqli_query($conn,$sql);
    if(!$res){
        die("Data not inserted".mysqli_error($conn));
    }
    header('location:certificate3.php?email='.$_POST['email']);
}
    ?>
    <img class="bg" src="3mid2.jpg" alt="photo">
    <img class="bg2" src="3mid3.jpg" alt="photo">

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
            <li><a href="maintry.php#hatake" id="contact">Contact Us</a></li>
        </ul>
    </header>
    <section>
        <ul id="amate">
            <li class="a1">
                <h3>Rules To Follow:-</h3><hr>
                <p>Every participant has to behave with respect towards the representatives of the PartnerShip Company, press, viewers, partners and other players. The participants are requested to represent esports, and their Sponsors honorably. This applies to behavior in-game and also in chats, messengers, comments and other media. We expect players to conduct themselves according to the following values:</br></br>
                    Compassion: Treat others as you would be treated.</br></br>
                    Integrity: Be honest, be committed, play fair.</br></br>
                    Respect: Show respect all other humans, including teammates, competitors, and event staff.</br></br>
                    Courage: Be courageous in competition and in standing up for what is right.</br></br>
                    Participants must not engage in harassment or hate speech in any form.</br>
                    If you are ready to respect and follow all the rules mentioned above then proceed to fill up the form on the right side carefully.
                </p><hr>
            </li>
            <li class="a2">
                <br>
                <h><b>Registration form for PlayerUnknown's Battlegrounds(PUBG) Players:-</b></h></br></br><hr>
                    <p class="add">Personal Information:</p>
                    <form id="frm" method= "POST" enctype="multipart/form-data">
                    <div class="namez">
                        <div class="fn">
                        First Name:</br>
                        <input type= "text" name= "fname" class="" id="name" placeholder="Enter your first name" size="25" maxlength="30" required> </br></br>
                        </div>
                        <div class="fn">
                        Middle Name:</br>
                        <input type= "text" name= "mname" class="" id="name" placeholder="Enter your middle name" size="25" maxlength="30"> </br></br>
                        </div>
                        <div class="fn">
                        Last Name:</br>
                        <input type= "text" name= "lname" class="" id="name" placeholder="Enter your last name" size="25" maxlength="30" required></br></br>
                        </div>
                    </div>
                    <div class="namez">
                        <div class="fn">
                        Father's First Name:</br>
                        <input type= "text" name= "ffname" class="" id="name" placeholder="Enter your father's first name" size="25" maxlength="30" required> </br></br>
                        </div>
                        <div class="fn">
                        Father's Middle Name:</br>
                        <input type= "text" name= "fmname" class="" id="name" placeholder="Enter your father's middle name" size="25" maxlength="30"> </br></br>
                        </div>
                        <div class="fn">
                        Father's Last Name:</br>
                        <input type= "text" name= "flname" class="" id="name" placeholder="Enter your father's last name" size="25" maxlength="30" required></br></br>
                        </div>
                    </div>
                    <div class="namez">
                        <div class="fn">
                        Mother's First Name:</br>
                        <input type= "text" name= "mfname" class="" id="name" placeholder="Enter your mother's first name" size="25" maxlength="30" required> </br></br>
                        </div>
                        <div class="fn">
                        Mother's Middle Name:</br>
                        <input type= "text" name= "mmname" class="" id="name" placeholder="Enter your mother's middle name" size="25" maxlength="30"> </br></br>
                        </div>
                        <div class="fn">
                        Mother's Last Name:</br>
                        <input type= "text" name= "mlname" class="" id="name" placeholder="Enter your mother's last name" size="25" maxlength="30" required></br></br>
                        </div>
                    </div>
                    <div class="namez">
                            <div class="fn">
                            Emergency Contact number:</br>
                            <input type= "number" name= "ecn" class="" id="name" placeholder="Enter your emergency contact nmber" size="25" maxlength="30" required> </br></br>
                            </div>
                            <div class="fn">
                            Emergency Contact Relation:</br>
                            <input type= "text" name= "ecr" class="" id="name" placeholder="Enter your relation" size="25" maxlength="30"> </br></br>
                            </div>
                            <div class="fn">
                            Emergency Contact Country:</br>
                            <input type= "text" name= "ecc" class="" id="name" placeholder="Enter your emergency contact country" size="25" maxlength="30"> </br></br>
                            </div>
                        </div>
                    <div class="namez">
                        <div class="fn">
                            Date of Birth(BS):</br>
                            <select name= "BYear" class="cs"  id="name2">
                                <option value="Year">Year</option>
                                <option value="2030">2030</option>
                                <option value="2031">2031</option>
                                <option value="2032">2032</option>
                                <option value="2033">2033</option>
                                <option value="2034">2034</option>
                                <option value="2035">2035</option>
                                <option value="2036">2036</option>
                                <option value="2037">2037</option>
                                <option value="2038">2038</option>
                                <option value="2039">2039</option>
                                <option value="2040">2040</option>
                                <option value="2041">2041</option>
                                <option value="2042">2042</option>
                                <option value="2043">2043</option>
                                <option value="2044">2044</option>
                                <option value="2045">2045</option>
                                <option value="2046">2046</option>
                                <option value="2047">2047</option>
                                <option value="2048">2048</option>
                                <option value="2049">2049</option>
                                <option value="2050">2050</option>
                                <option value="2051">2051</option>
                                <option value="2052">2052</option>
                                <option value="2053">2053</option>
                                <option value="2054">2054</option>
                                <option value="2055">2055</option>
                                <option value="2056">2056</option>
                                <option value="2057">2057</option>
                                <option value="2058">2058</option>
                                <option value="2059">2059</option>
                                <option value="2060">2060</option>
                                <option value="2060">2061</option>
                                <option value="2060">2062</option>
                            </select>
                            <select name= "BMonth" class="cs"  id="name2">
                                <option value="Month">Month</option>
                                <option value="Baisakh">Baisakh</option>
                                <option value="Jeth">Jeth</option>
                                <option value="Asar">Asar</option>
                                <option value="Shrawan">Shrawan</option>
                                <option value="Bhadra">Bhadra</option>
                                <option value="Asoj">Asoj</option>
                                <option value="Kartik">Kartik</option>
                                <option value="Mangsir">Mangsir</option>
                                <option value="Paush">Paush</option>
                                <option value="Magh">Magh</option>
                                <option value="Falgun">Falgun</option>
                                <option value="Chaitra">Chaitra</option>
                            </select>
                            <select name= "BDay" class="cs"  id="name2">
                                <option value="Day">Day</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                            </br></br>
                        </div>
                        <div class="fn">
                            Date of Birth(AD):</br>
                            <select name= "AYear" class="cs"  id="name2">
                            <option value="1940">1940</option>
                                <option value="1941">1941</option>
                                <option value="1942">1942</option>
                                <option value="1943">1943</option>
                                <option value="1944">1944</option>
                                <option value="1945">1945</option>
                                <option value="1946">1946</option>
                                <option value="1947">1947</option>
                                <option value="1948">1948</option>
                                <option value="1949">1949</option>
                                <option value="1950">1950</option>
                                <option value="1951">1951</option>
                                <option value="1952">1952</option>
                                <option value="1953">1953</option>
                                <option value="1954">1954</option>
                                <option value="1955">1955</option>
                                <option value="1956">1956</option>
                                <option value="1957">1957</option>
                                <option value="1958">1958</option>
                                <option value="1959">1959</option>
                                <option value="1960">1960</option>
                                <option value="1961">1961</option>
                                <option value="1962">1962</option>
                                <option value="1963">1963</option>
                                <option value="1964">1964</option>
                                <option value="1965">1965</option>
                                <option value="1966">1966</option>
                                <option value="1967">1967</option>
                                <option value="1968">1968</option>
                                <option value="1969">1969</option>
                                <option value="1970">1970</option>
                                <option value="1971">1971</option>
                                <option value="1972">1972</option>
                                <option value="1973">1973</option>
                                <option value="1974">1974</option>
                                <option value="1975">1975</option>
                                <option value="1976">1976</option>
                                <option value="1977">1977</option>
                                <option value="1978">1978</option>
                                <option value="1979">1979</option>
                                <option value="1980">1980</option>
                                <option value="1981">1981</option>
                                <option value="1982">1982</option>
                                <option value="1983">1983</option>
                                <option value="1984">1984</option>
                                <option value="1985">1985</option>
                                <option value="1986">1986</option>
                                <option value="1987">1987</option>
                                <option value="1988">1988</option>
                                <option value="1989">1989</option>
                                <option value="1990">1990</option>
                                <option value="1991">1991</option>
                                <option value="1992">1992</option>
                                <option value="1993">1993</option>
                                <option value="1994">1994</option>
                                <option value="1995">1995</option>
                                <option value="1996">1996</option>
                                <option value="1997">1997</option>
                                <option value="1998">1998</option>
                                <option value="1999">1999</option>
                                <option value="2000">2000</option>
                                <option value="2001">2001</option>
                                <option value="2002">2002</option>
                                <option value="2003">2003</option>
                            </select>
                            <select name= "AMonth" class="cs"  id="name2">
                                <option value="Month">Month</option>
                                <option value="Jan">Jan</option>
                                <option value="Feb">Feb</option>
                                <option value="Mar">Mar</option>
                                <option value="Apr">Apr</option>
                                <option value="May">May</option>
                                <option value="Jun">Jun</option>
                                <option value="July">July</option>
                                <option value="Aug">Aug</option>
                                <option value="Sept">Sept</option>
                                <option value="Oct">Oct</option>
                                <option value="Nov">Nov</option>
                                <option value="Dec">Dec</option>
                            </select>
                            <select name= "ADay" class="cs"  id="name2">
                            <option value="Day">Day</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                            </br></br>
                        </div>
                        <div class="fn">
                            User image: <br/>
                            <input type="file" accept="image/*" name="image" id="name" style="margin: 15px -2px 0px 0;">
                        </div>
                    </div>
                    <div class="namez">
                        <div class="fn">
                            Email:</br> 
                            <input type= "email" name= "email" class="" id="name" placeholder="Enter your email" size="50" maxlength="30" required></br></br>
                        </div>
                        <div class="fn">
                            PhoneNo: <br><select name="phone_code" id="name2">
                                <option value= "Choose Coutry">Choose Country</option>
                                <option value="213">DZA(+213)</option>
                                <option value="376">AND(+376)</option>
                                <option value="244">AGO(+244)</option>
                                <option value="1264">AIA(+1264)</option>
                                <option value="54">ARG(+54)</option>
                                <option value="374">ARM(+374)</option>
                                <option value="297">ABW(+297)</option>
                                <option value="61">AUS(+61)</option>
                                <option value="43">AUT(+43)</option>
                                <option value="994">AZE(+994)</option>
                                <option value="1242">BHS(+1242)</option>
                                <option value="973">BHR(+973)</option>
                                <option value="880">BGD(+880)</option>
                                <option value="1246">BRB(+1246)</option>
                                <option value="375">BLR(+375)</option>
                                <option value="32">BEL(+32)</option>
                                <option value="501">BLZ(+501)</option>
                                <option value="229">BEN(+229)</option>
                                <option value="1441">BMU(+1441)</option>
                                <option value="975">BTN(+975)</option>
                                <option value="591">BOL(+591)</option>
                                <option value="387">BIH(+387)</option>
                                <option value="267">BWA(+267)</option>
                                <option value="55">BVT(+55)</option>
                                <option value="673">BRN(+673)</option>
                                <option value="359">BGR(+359)</option>
                                <option value="226">BFA(+226)</option>
                                <option value="257">BDI(+257)</option>
                                <option value="855">KHM(+855)</option>
                                <option value="237">CMR(+237)</option>
                                <option value="1">CAN(+1)</option>
                                <option value="1345">CYM(+1345)</option>
                                <option value="236">CAF(+236)</option>
                                <option value="56">CHL(+56)</option>
                                <option value="86">CHN(+86)</option>
                                <option value="57">COL(+57)</option>
                                <option value="269">COM(+269)</option>
                                <option value="242">COG(+242)</option>
                                <option value="682">COK(+682)</option>
                                <option value="506">CRI(+506)</option>
                                <option value="385">HRV(+385)</option>
                                <option value="53">CUB(+53)</option>
                                <option value="90392">CYP(+90392)</option>
                                <option value="357">CYP(+357)</option>
                                <option value="42">CZE(+42)</option>
                                <option value="45">DNK(+45)</option>
                                <option value="253">DJI(+253)</option>
                                <option value="1809">DOM(+1809)</option>
                                <option value="593">ECU(+593)</option>
                                <option value="20">EGY(+20)</option>
                                <option value="503">SLV(+503)</option>
                                <option value="240">GNQ(+240)</option>
                                <option value="291">ERI(+291)</option>
                                <option value="372">EST(+372)</option>
                                <option value="251">ETH(+251)</option>
                                <option value="500">FLK(+500)</option>
                                <option value="298">FRO(+298)</option>
                                <option value="679">FJI(+679)</option>
                                <option value="358">FIN(+358)</option>
                                <option value="33">FRA(+33)</option>
                                <option value="594">GUF(+594)</option>
                                <option value="689">PYF(+689)</option>
                                <option value="241">GAB(+241)</option>
                                <option value="220">GMB(+220)</option>
                                <option value="49">DEU(+49)</option>
                                <option value="233">GHA(+233)</option>
                                <option value="350">GIB(+350)</option>
                                <option value="30">GRC(+30)</option>
                                <option value="299">GRL(+299)</option>
                                <option value="1473">GRD(+1473)</option>
                                <option value="590">GLP(+590)</option>
                                <option value="671">GUM(+671)</option>
                                <option value="502">GTM(+502)</option>
                                <option value="224">GIN(+224)</option>
                                <option value="245">GNB(+245)</option>
                                <option value="592">GGUY(+592)</option>
                                <option value="509">HTI(+509)</option>
                                <option value="504">HND(+504)</option>
                                <option value="852">HKG(+852)</option>
                                <option value="36">HUN(+36)</option>
                                <option value="354">ISL(+354)</option>
                                <option value="91">IND(+91)</option>
                                <option value="62">IDN(+62)</option>
                                <option value="98">IRN(+98)</option>
                                <option value="964">IRQ(+964)</option>
                                <option value="353">IRL(+353)</option>
                                <option value="972">ISR(+972)</option>
                                <option value="39">ITA(+39)</option>
                                <option value="1876">JAM(+1876)</option>
                                <option value="81">JPN(+81)</option>
                                <option value="962">JOR(+962)</option>
                                <option value="7">KAZ(+7)</option>
                                <option value="254">KEN(+254)</option>
                                <option value="686">KIR(+686)</option>
                                <option value="850">KOR(+850)</option>
                                <option value="82">PRK(+82)</option>
                                <option value="965">KWT(+965)</option>
                                <option value="996">KGZ(+996)</option>
                                <option value="856">LAO(+856)</option>
                                <option value="371">LVA(+371)</option>
                                <option value="961">LBN(+961)</option>
                                <option value="266">LSO(+266)</option>
                                <option value="231">LBR(+231)</option>
                                <option value="218">LBY(+218)</option>
                                <option value="417">LIE(+417)</option>
                                <option value="370">LTU(+370)</option>
                                <option value="352">LUX(+352)</option>
                                <option value="853">MAC(+853)</option>
                                <option value="261">MDG(+261)</option>
                                <option value="265">MWI(+265)</option>
                                <option value="60">MYS(+60)</option>
                                <option value="960">MDV(+960)</option>
                                <option value="223">MLI(+223)</option>
                                <option value="356">MLT(+356)</option>
                                <option value="692">MHL(+692)</option>
                                <option value="596">MTQ(+596)</option>
                                <option value="222">MRT(+222)</option>
                                <option value="269">MYT(+269)</option>
                                <option value="52">MEX(+52)</option>
                                <option value="691">FSM(+691)</option>
                                <option value="373">MDA(+373)</option>
                                <option value="377">MCO(+377)</option>
                                <option value="976">MNG(+976)</option>
                                <option value="1664">MMSR(+1664)</option>
                                <option value="212">MAR(+212)</option>
                                <option value="258">MOZ(+258)</option>
                                <option value="95">MMR(+95)</option>
                                <option value="264">NAM(+264)</option>
                                <option value="674">NRU(+674)</option>
                                <option value="977">NPL(+977)</option>
                                <option value="31">NLD(+31)</option>
                                <option value="687">NCL(+687)</option>
                                <option value="64">NZL(+64)</option>
                                <option value="505">NIC(+505)</option>
                                <option value="227">NER(+227)</option>
                                <option value="234">NGA(+234)</option>
                                <option value="683">NIU(+683)</option>
                                <option value="672">NFK(+672)</option>
                                <option value="670">MNP(+670)</option>
                                <option value="47">NOR(+47)</option>
                                <option value="968">OMN(+968)</option>
                                <option value="680">PLW(+680)</option>
                                <option value="507">PAN(+507)</option>
                                <option value="675">PNG(+675)</option>
                                <option value="595">PRY(+595)</option>
                                <option value="51">PER(+51)</option>
                                <option value="63">PHL(+63)</option>
                                <option value="48">POL(+48)</option>
                                <option value="351">PRT(+351)</option>
                                <option value="1787">PRI(+1787)</option>
                                <option value="974">QAT(+974)</option>
                                <option value="262">REU(+262)</option>
                                <option value="40">ROU(+40)</option>
                                <option value="7">RUS(+7)</option>
                                <option value="250">RWA(+250)</option>
                                <option value="378">SMR(+378)</option>
                                <option value="239">STP(+239)</option>
                                <option value="966">SAU(+966)</option>
                                <option value="221">SEN(+221)</option>
                                <option value="381">SRB(+381)</option>
                                <option value="248">SYC(+248)</option>
                                <option value="232">SLE(+232)</option>
                                <option value="65">SGB(+65)</option>
                                <option value="386">SVN(+386)</option>
                                <option value="677">SLB(+677)</option>
                                <option value="252">SOM(+252)</option>
                                <option value="27">ZAF(+27)</option>
                                <option value="34">ESP(+34)</option>
                                <option value="94">LKA(+94)</option>
                                <option value="290">SHN(+290)</option>
                                <option value="1869">KNA(+1869)</option>
                                <option value="1758">LCA(+1758)</option>
                                <option value="249">SDN(+249)</option>
                                <option value="597">SUR(+597)</option>
                                <option value="46">SWE(+46)</option>
                                <option value="41">CHE(+41)</option>
                                <option value="963">SYR(+963)</option>
                                <option value="886">TWN(+886)</option>
                                <option value="7">TJK(+7)</option>
                                <option value="66">THA(+66)</option>
                                <option value="228">TGO(+228)</option>
                                <option value="676">TON(+676)</option>
                                <option value="1868">TTO(+1868)</option>
                                <option value="216">TUN(+216)</option>
                                <option value="90">TUR(+90)</option>
                                <option value="7">TKM(+7)</option>
                                <option value="993">TKM(+993)</option>
                                <option value="1649">TCA(+1649)</option>
                                <option value="688">TUV(+688)</option>
                                <option value="256">UGA(+256)</option>
                                <option value="44">UK (+44)</option>
                                <option value="380">UKR(+380)</option>
                                <option value="971">ARE(+971)</option>
                                <option value="598">URY(+598)</option>
                                <option value="1">USA(+1)</option>
                                <option value="7">UZB(+7)</option>
                                <option value="678">VUT(+678)</option>
                                <option value="379">VTC(+379)</option>
                                <option value="58">VEN(+58)</option>
                                <option value="84">VNM(+84)</option>
                                <option value="84">VGB(+1284)</option>
                                <option value="84">VIR(+1340)</option>
                                <option value="681">WLF(+681)</option>
                                <option value="969">YEM(+969)</option>
                                <option value="967">YEM(+967)</option>
                                <option value="260">ZMB(+260)</option>
                                <option value="263">ZWE(+263)</option>
                            </select><input type="number" name="phone"  id="name" style="width:186px"required ></br></br>
                        </div>
                        <div class="fn">
                            Gender:</br>
                            <div class="gend">
                            <input type= "radio" name= "gender" class="gen" id="male" value="Male">&nbsp <span> Male</span>
                            <input type= "radio" name= "gender" class="gen" id="female" value="Female">&nbsp <span>Female</span>
                            <input type= "radio" name= "gender" class="gen" id="other" value="Other">&nbsp <span>Other</span></br></br>
                            </div>
                        </div>
                    </div>
                    <div class="namez2">
                        <div class="fn">
                        Known Language:</br></br>
                        <input type="checkbox" name="lang[]" id="checkbox" value="English" required>&nbsp <span> English</span>&nbsp&nbsp&nbsp
                        <input type="checkbox" name="lang[]" id="checkbox" value="Nepali">&nbsp <span> Nepali</span>&nbsp&nbsp&nbsp
                        <input type="checkbox" name="lang[]" id="checkbox" value="Hindi">&nbsp <span> Hindi</span>&nbsp&nbsp&nbsp 
                        <input type="checkbox" name="lang[]" id="checkbox" value="Japanese">&nbsp <span> Japanese</span>&nbsp&nbsp&nbsp
                        <input type="checkbox" name="lang[]" id="checkbox" value="Korean">&nbsp <span> Korean</span></br></br>
                        </div>
                        </div>
                    <div class="namez2">
                        <div class="fn">
                        Gaming Experience:</br></br>
                        <input type= "radio" name= "exp" class="" id="exp" value="1">&nbsp <span> Beginner</span>&nbsp&nbsp&nbsp
                        <input type= "radio" name= "exp" class="" id="exp" value="2">&nbsp <span>Moderate</span>&nbsp&nbsp&nbsp
                        <input type= "radio" name= "exp" class="" id="exp" value="3">&nbsp <span>Pro</span>&nbsp&nbsp&nbsp
                        <input type= "radio" name= "exp" class="" id="exp" value="4">&nbsp <span>Expert</span>&nbsp&nbsp&nbsp
                        <input type= "radio" name= "exp" class="" id="exp" value="5">&nbsp <span>Legendary</span></br></br>
                        </div>
                        <div class="fn fn2">
                            Competitive Rank:</br>
                            <select name= "rank" class="cs" id="name2">
                            <option value="con">Conqueror</option>
                                <option value="ace">Ace</option>
                                <option value="crown1">Crown I</option>
                                <option value="crown2">Crown II</option>
                                <option value="crown3">Crown III</option>
                                <option value="crown4">Crown IV</option>
                                <option value="crown5">Crown V</option>
                                <option value="diamond1">Diamond I</option>
                                <option value="diamond2">Diamond II</option>
                                <option value="diamond3">Diamond III</option>
                                <option value="diamond4">Diamond IV</option>
                                <option value="diamond5">Diamond V</option>
                                <option value="platinum1">Platinum I</option>
                                <option value="platinum2">Platinum II</option>
                                <option value="platinum3">Platinum III</option>
                                <option value="platinum4">Platinum IV</option>
                                <option value="platinum5">Platinum V</option>
                                <option value="gold1">Gold I</option>
                                <option value="gold2">Gold II</option>
                                <option value="gold3">Gold III</option>
                                <option value="gold4">Gold IV</option>
                                <option value="gold5">Gold V</option>
                                <option value="silver1">Silver I</option>
                                <option value="silver2">Silver II</option>
                                <option value="silver3">Silver III</option>
                                <option value="silver4">Silver IV</option>
                                <option value="silver5">Silver V</option>
                                <option value="bronze1">Bronze I</option>
                                <option value="bronze2">Bronze II</option>
                                <option value="bronze3">Bronze III</option>
                                <option value="bronze4">Bronze IV</option>
                                <option value="bronze5">Bronze V</option>
                            </select></br></br>
                            </div>    
                        </div>
                    <br/><hr><br/>
                    <div class="add">
                        Address:
                        <div class="namez">
                            <div class="fn">
                            Country:</br>
                            <input type= "text" name= "country" class="" id="name" placeholder="Enter your country" size="25" maxlength="30" required> </br></br>
                            </div>
                            <div class="fn">
                            Street Address:</br>
                            <input type= "text" name= "street" class="" id="name" placeholder="Enter your street address" size="25" maxlength="30"> </br></br>
                            </div>
                            <div class="fn">
                            City:</br>
                            <input type= "text" name= "city" class="" id="name" placeholder="Enter your city" size="25" maxlength="30" required></br></br>
                            </div>
                        </div>
                        <div class="namez2">
                            <div class="fn">
                            State:</br>
                            <input type= "text" name= "state" class="" id="name3" placeholder="Enter your state" size="25" maxlength="30" required> </br></br>
                            </div>
                            <div class="fn">
                            ZIP code:</br>
                            <input type= "text" name= "zip" class="" id="name" placeholder="Enter your zip code" size="25" maxlength="30"> </br></br>
                            </div>
                        </div>
                    </div>
                    <br/><hr><br/>
                    <div class="add">
                        Passport details:
                        <div class="namez">
                            <div class="fn">
                            Passport number:</br>
                            <input type= "number" name= "pno" class="" id="name" placeholder="Enter your passport number" size="25" maxlength="30" required> </br></br>
                            </div>
                            <div class="fn">
                                Issue date:</br>
                                <select name= "IYear" class="cs"  id="name2">
                                    <option value="Year">Year</option>
                                    <option value="1940">1940</option>
                                    <option value="1941">1941</option>
                                    <option value="1942">1942</option>
                                    <option value="1943">1943</option>
                                    <option value="1944">1944</option>
                                    <option value="1945">1945</option>
                                    <option value="1946">1946</option>
                                    <option value="1947">1947</option>
                                    <option value="1948">1948</option>
                                    <option value="1949">1949</option>
                                    <option value="1950">1950</option>
                                    <option value="1951">1951</option>
                                    <option value="1952">1952</option>
                                    <option value="1953">1953</option>
                                    <option value="1954">1954</option>
                                    <option value="1955">1955</option>
                                    <option value="1956">1956</option>
                                    <option value="1957">1957</option>
                                    <option value="1958">1958</option>
                                    <option value="1959">1959</option>
                                    <option value="1960">1960</option>
                                    <option value="1961">1961</option>
                                    <option value="1962">1962</option>
                                    <option value="1963">1963</option>
                                    <option value="1964">1964</option>
                                    <option value="1965">1965</option>
                                    <option value="1966">1966</option>
                                    <option value="1967">1967</option>
                                    <option value="1968">1968</option>
                                    <option value="1969">1969</option>
                                    <option value="1970">1970</option>
                                    <option value="1971">1971</option>
                                    <option value="1972">1972</option>
                                    <option value="1973">1973</option>
                                    <option value="1974">1974</option>
                                    <option value="1975">1975</option>
                                    <option value="1976">1976</option>
                                    <option value="1977">1977</option>
                                    <option value="1978">1978</option>
                                    <option value="1979">1979</option>
                                    <option value="1980">1980</option>
                                    <option value="1981">1981</option>
                                    <option value="1982">1982</option>
                                    <option value="1983">1983</option>
                                    <option value="1984">1984</option>
                                    <option value="1985">1985</option>
                                    <option value="1986">1986</option>
                                    <option value="1987">1987</option>
                                    <option value="1988">1988</option>
                                    <option value="1989">1989</option>
                                    <option value="1990">1990</option>
                                    <option value="1991">1991</option>
                                    <option value="1992">1992</option>
                                    <option value="1993">1993</option>
                                    <option value="1994">1994</option>
                                    <option value="1995">1995</option>
                                    <option value="1996">1996</option>
                                    <option value="1997">1997</option>
                                    <option value="1998">1998</option>
                                    <option value="1999">1999</option>
                                    <option value="2000">2000</option>
                                    <option value="2001">2001</option>
                                    <option value="2002">2002</option>
                                    <option value="2003">2003</option>
                                    <option value="2004">2004</option>
                                    <option value="2005">2005</option>
                                    <option value="2006">2006</option>
                                    <option value="2007">2007</option>
                                    <option value="2008">2008</option>
                                    <option value="2009">2009</option>
                                    <option value="2010">2010</option>
                                    <option value="2011">2011</option>
                                    <option value="2012">2012</option>
                                    <option value="2013">2013</option>
                                    <option value="2014">2014</option>
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                </select>
                                <select name= "IMonth" class="cs"  id="name2">
                                    <option value="Month">Month</option>
                                    <option value="Jan">Jan</option>
                                    <option value="Feb">Feb</option>
                                    <option value="Mar">Mar</option>
                                    <option value="Apr">Apr</option>
                                    <option value="May">May</option>
                                    <option value="Jun">Jun</option>
                                    <option value="July">July</option>
                                    <option value="Aug">Aug</option>
                                    <option value="Sept">Sept</option>
                                    <option value="Oct">Oct</option>
                                    <option value="Nov">Nov</option>
                                    <option value="Dec">Dec</option>
                                </select>
                                <select name= "IDay" class="cs"  id="name2">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                </select>
                                </br></br>
                            </div>
                            <div class="fn">
                            Passport Issuing Authority:</br>
                            <input type= "text" name= "pia" class="" id="name" placeholder="Enter your Passport Issuing Authority" size="25" maxlength="100" required></br></br>
                            </div>
                        </div>
                        <div class="namez">
                            <div class="fn">
                            Expiry date:</br>
                                <select name= "EYear" class="cs"  id="name2">
                                    <option value="Year">Year</option>
                                    <option value="1940">1940</option>
                                    <option value="1941">1941</option>
                                    <option value="1942">1942</option>
                                    <option value="1943">1943</option>
                                    <option value="1944">1944</option>
                                    <option value="1945">1945</option>
                                    <option value="1946">1946</option>
                                    <option value="1947">1947</option>
                                    <option value="1948">1948</option>
                                    <option value="1949">1949</option>
                                    <option value="1950">1950</option>
                                    <option value="1951">1951</option>
                                    <option value="1952">1952</option>
                                    <option value="1953">1953</option>
                                    <option value="1954">1954</option>
                                    <option value="1955">1955</option>
                                    <option value="1956">1956</option>
                                    <option value="1957">1957</option>
                                    <option value="1958">1958</option>
                                    <option value="1959">1959</option>
                                    <option value="1960">1960</option>
                                    <option value="1961">1961</option>
                                    <option value="1962">1962</option>
                                    <option value="1963">1963</option>
                                    <option value="1964">1964</option>
                                    <option value="1965">1965</option>
                                    <option value="1966">1966</option>
                                    <option value="1967">1967</option>
                                    <option value="1968">1968</option>
                                    <option value="1969">1969</option>
                                    <option value="1970">1970</option>
                                    <option value="1971">1971</option>
                                    <option value="1972">1972</option>
                                    <option value="1973">1973</option>
                                    <option value="1974">1974</option>
                                    <option value="1975">1975</option>
                                    <option value="1976">1976</option>
                                    <option value="1977">1977</option>
                                    <option value="1978">1978</option>
                                    <option value="1979">1979</option>
                                    <option value="1980">1980</option>
                                    <option value="1981">1981</option>
                                    <option value="1982">1982</option>
                                    <option value="1983">1983</option>
                                    <option value="1984">1984</option>
                                    <option value="1985">1985</option>
                                    <option value="1986">1986</option>
                                    <option value="1987">1987</option>
                                    <option value="1988">1988</option>
                                    <option value="1989">1989</option>
                                    <option value="1990">1990</option>
                                    <option value="1991">1991</option>
                                    <option value="1992">1992</option>
                                    <option value="1993">1993</option>
                                    <option value="1994">1994</option>
                                    <option value="1995">1995</option>
                                    <option value="1996">1996</option>
                                    <option value="1997">1997</option>
                                    <option value="1998">1998</option>
                                    <option value="1999">1999</option>
                                    <option value="2000">2000</option>
                                    <option value="2001">2001</option>
                                    <option value="2002">2002</option>
                                    <option value="2003">2003</option>
                                    <option value="2004">2004</option>
                                    <option value="2005">2005</option>
                                    <option value="2006">2006</option>
                                    <option value="2007">2007</option>
                                    <option value="2008">2008</option>
                                    <option value="2009">2009</option>
                                    <option value="2010">2010</option>
                                    <option value="2011">2011</option>
                                    <option value="2012">2012</option>
                                    <option value="2013">2013</option>
                                    <option value="2014">2014</option>
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                    <option value="2027">2027</option>
                                    <option value="2028">2028</option>
                                    <option value="2029">2029</option>
                                    <option value="2030">2030</option>
                                    <option value="2031">2031</option>
                                    <option value="2032">2032</option>
                                </select>
                                <select name= "EMonth" class="cs"  id="name2">
                                    <option value="Month">Month</option>
                                    <option value="Jan">Jan</option>
                                    <option value="Feb">Feb</option>
                                    <option value="Mar">Mar</option>
                                    <option value="Apr">Apr</option>
                                    <option value="May">May</option>
                                    <option value="Jun">Jun</option>
                                    <option value="July">July</option>
                                    <option value="Aug">Aug</option>
                                    <option value="Sept">Sept</option>
                                    <option value="Oct">Oct</option>
                                    <option value="Nov">Nov</option>
                                    <option value="Dec">Dec</option>
                                </select>
                                <select name= "EDay" class="cs"  id="name2">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                </select>
                                </br></br>
                            </div>
                            <div class="fn">
                            Passport document(front):</br>
                            <input type="file" accept="image/*" name="image2" id="name" style="margin: 15px -2px 0px 0;"> </br></br>
                            
                            </div>
                            <div class="fn">
                            Passport document(back):</br>
                            <input type="file" accept="image/*" name="image3" id="name" style="margin: 15px -2px 0px 0;"></br></br>
                            </div>
                        </div>
                    </div>
                    <div class="conc">
                    <input type= "checkbox" required>I hereby declare that the information provided is true and correct. I also understand that any willful dishonesty may render for refusal of this application or immediate termination of employment.</br></br>
                    </div>
                    <div id="sub">
                    <input type="submit" id="submit" name="submit" value="Register" id="submit">
                    </div>
            </li>
        </ul>
    </section>
</body>
</html>
    <?php
}
else{
    header('location:../signin.php?sign=login');
}
?>
