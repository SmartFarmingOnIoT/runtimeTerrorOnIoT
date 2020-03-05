<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iotfarming";
if(isset($_GET['button1'])){
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$button1status=$_GET['button1'];
$sql = "UPDATE motor SET button1='$button1status' WHERE id=1";

if ($conn->query($sql) === TRUE) {
    $data['status']=$button1status;
    echo json_encode($data);
} else {
    echo "Error updating record: " . $conn->error;
}
$conn->close();
}
if(isset($_GET['button2'])){
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $button2status=$_GET['button2'];
    $sql = "UPDATE motor SET button2='$button2status' WHERE id=1";
    
    if ($conn->query($sql) === TRUE) {
        $data['status2']=$button2status;
        echo json_encode($data);
    } else {
        echo "Error updating record: " . $conn->error;
    }
    $conn->close();
    }

?>