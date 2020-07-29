<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
table, th, td {
     border: 4px solid black;
	border-collapse: collapse;
	 vertical-align: bottom;
	 
	 

}

img {
	max-height: 100px;
	max-height: 100px;
	
}

body{
    margin-left: 70px;
    margin-right: 70px;
    text-align: justify;
}

p{
    text-align:right;
}

</style>
</head>
<body>

<html>
<?php
$servername = "103.83.81.144";
$username = "pixeldes_webmast";
$password = 'hafeezuddin@';
$dbname = "pixeldes_admin_software";
$rn = $_POST['rn'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT name, ay, fn, rn, br, dob, degree, yr FROM ccc_details where rn = '$rn'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
          echo "<br>";
            echo "<br>";
              echo "<br>";
                echo "<br>";
                  echo "<br>";
                    echo "<br>";
                      echo "<br>";
                        echo "<br>";
                          echo "<br>";
                            echo "<br>";
        echo "<br>   Dr. D.V.Ravi Shankar ";
          echo "<br>   &nbsp;   &nbsp;   &nbsp;   &nbsp;  &nbsp;   &nbsp;       M.Tech, Ph.D. ";
		echo "<br>Principal. ";
		echo "<br>  (9949665436) ";

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo "<br><b>   &nbsp;   &nbsp;  &nbsp;&nbsp;   &nbsp;   &nbsp;   &nbsp;  &nbsp;   &nbsp;  &nbsp;&nbsp;   &nbsp;   &nbsp;   &nbsp;  &nbsp;   &nbsp;  &nbsp;&nbsp;   &nbsp;   &nbsp;   &nbsp;  &nbsp;   &nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;      COURSE COMPLETION CERTIFICATE </b>";

echo "<br>";
                        echo "<br>";
                          echo "<br>";
                            echo "<br>";


        echo "<br> &nbsp;&nbsp;   &nbsp;   &nbsp;   &nbsp;  &nbsp;   &nbsp;  This is to certify that Mr/Ms &nbsp;<strong>". $row["name"]." </strong> S/D/O Mr <strong>". $row["fn"]. " </strong> with roll Number &nbsp;<strong>" . $row["rn"] .    "</strong> studied in the Branch of &nbsp; <strong> ". $row["br"]. "</strong> of this Institution from the year <strong> ". $row["ay"]. "</strong>   <br>";


 echo "<br>";
                            echo "<br>";



        echo "<br> &nbsp;&nbsp;   &nbsp;   &nbsp;   &nbsp;  &nbsp;   &nbsp;  His/Her date of birth is <strong> ". $row["dob"]. ".</strong> He/She has completed the final semester of <strong>". $row["degree"]. "</strong> in the month of <strong>" . $row["yr"] .    " </strong> and is waiting for Provisional Certificate. While the candidates was studying in the Institution his/her conduct was <strong> satisfactory </strong>   <br>";

echo "<br>";
                            echo "<br>";echo "<br>";
                            echo "<br>";


 echo "<br>&nbsp;&nbsp;   &nbsp;   &nbsp;   &nbsp;  &nbsp;   &nbsp;  &nbsp;&nbsp;   &nbsp;   &nbsp;   &nbsp;  &nbsp;   &nbsp;  &nbsp;&nbsp;   &nbsp;   &nbsp;   &nbsp;  &nbsp;   &nbsp;  &nbsp;&nbsp;   &nbsp;   &nbsp;   &nbsp;  &nbsp;   &nbsp;  &nbsp;&nbsp;   &nbsp;   &nbsp;   &nbsp;  &nbsp;   &nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;   &nbsp;   &nbsp;  &nbsp;   &nbsp;  &nbsp;&nbsp;   &nbsp;   &nbsp;   &nbsp;  &nbsp;   &nbsp;  &nbsp;&nbsp;   &nbsp;   &nbsp;   &nbsp;  &nbsp;   &nbsp;  &nbsp;&nbsp;   &nbsp;   &nbsp;   &nbsp;  &nbsp;   &nbsp;      <p> Principal </p>";

    }
} else {
    echo "0 results";
}



$conn->close();
?>
</html>