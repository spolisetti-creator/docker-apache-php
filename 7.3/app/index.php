<?php
//Step1
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', 'root');
DEFINE ('DB_HOST', '172.17.0.2');
DEFINE ('DB_NAME', 'mysql');
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME,3306)
 or die('Error connecting to MySQL server.');
?>

<html>
 <head>
 </head>
 <body>
 <h1>PHP connect to MySQL To denonstrate multi kubernetes containers and helm </h1>
 <h2> Querying from Persons table</h2>
</body>
<?php
//Step2
$query = "SELECT * FROM Persons";
mysqli_query($conn, $query) or die('Error querying database.');

$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
while ($row = mysqli_fetch_array($result)) {
 echo $row['PersonID'] . ' ' . $row['LastName'] . ': ' . $row['FirstName'] . ' ' . $row['City'] .'<br />';
}
?>

</body>
</html>

