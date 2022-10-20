<home>
<body>
 
<?php 
$dbhost = "localhost";
$dbuser = "root";
$dbpass = ""; 
$db = "practice"; 
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
if(!$conn) { die("Connect failed: " . mysqli_connect_error()); } 
echo "established";
?>
</body>
</home>