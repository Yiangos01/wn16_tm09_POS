<!DOCTYPE html>
<html>
<head>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pos";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `order`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br> id: ". $row["id"]. " - Time: ". $row["time"]. " Date:" . $row["date"] . " CustomerId: ". $row["customerId"] . "<br>";
     }
} else {
     echo "0 results";
}

$conn->close();
?>

</head>
<body>
</body>
</html>