<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "formcollection";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $formcollection);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
echo "Connected successfully";

$sql = "INSERT INTO FormCollection (ID,Name,Age,Date of Birth,Email,Phone)
VALUES ('101', 'James', '35', ' 10/08/1980', 'james@gmail.com', '4589765821')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>