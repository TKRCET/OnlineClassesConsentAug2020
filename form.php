
<?php
$name=$_POST['name'];
$rn=$_POST['rn'];
$yearid=$_POST['yearid'];
$semid=$_POST['semid'];
$branch=$_POST['branch'];
$section=$_POST['section'];
$degree=$_POST['degree'];
$OnlineClasses=$_POST['OnlineClasses'];
$BRDBNDGRTR4MBPS=$_POST['BRDBNDGRTR4MBPS'];
$BRDBNDLESS4MBPS=$_POST['BRDBNDLESS4MBPS'];
$_2G=$_POST['_2G'];
$_3G=$_POST['_3G'];
$_4G=$_POST['_4G'];
$Desktop=$_POST['Desktop'];
$Laptop=$_POST['Laptop'];
$Ipad=$_POST['Ipad'];
$androidtablet=$_POST['androidtablet'];
$smartphone=$_POST['smartphone'];
$residence=$_POST['residence'];


$dbc=mysqli_connect('serverip', 'dbusername', 'dbpass', 'dbname') or die('Error In Database Conection');
$query="insert into OnlineClassesConsentAug2020 (name, rn, yearid, semid, branch, section, degree, OnlineClasses, BRDBNDGRTR4MBPS, BRDBNDLESS4MBPS, _2G, _3G, _4G, Desktop, Laptop , Ipad, androidtablet, smartphone, residence)
values('$name', '$rn', '$yearid', '$semid','$branch','$section','$degree','$OnlineClasses', '$BRDBNDGRTR4MBPS', '$BRDBNDLESS4MBPS', '$_2G', '$_3G', '$_4G', '$Desktop', '$Laptop', '$Ipad', '$androidtablet', '$smartphone', '$residence')";
$result=mysqli_query($dbc,$query) or die('<br>  </img> <p style="text-align:center; font-size:35px"><img src="logo.png" height="115px" width="800px" ><br><br>Response Already Recorded (or) Your Rolls are not in DATABASE <br> CONTACT WEBMASTER TKRCET <br>EMAIL: webmaster@tkrcet.com +91-8686561232</p>');
mysqli_close($dbc);
echo '<p style="text-align:center; font-size:35px"> <img src="logo.png" height="115px" width="800px" > <br><br>Your Response has been recorded successfully</p>';
?>
