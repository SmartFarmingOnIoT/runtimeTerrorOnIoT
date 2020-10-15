<?php
$servername = "root";
$username = "root";
$password = "";
$dbname = "root";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT button1,button2 FROM motor WHERE id=1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $response['button1']=$row['button1'];
        $response['button2']=$row['button2'];
        echo json_encode($response);
    }
} else {
    echo "0 results";
}
$conn->close();
?>
