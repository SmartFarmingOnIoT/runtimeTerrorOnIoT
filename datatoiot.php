<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "iotfarming";

// Create database connection
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
if($_GET['area']&&$_GET['temp']&&$_GET['hum']&&$_GET['soil_moisture']&&$_GET['light']&&$_GET['motor_status']){
  $area=$_GET['area'];
  $temp=$_GET['temp'];
  $hum=$_GET['hum'];
  $soil=$_GET['soil_moisture'];
  $light=$_GET['light'];
  $motor_status=$_GET['motor_status'];
$sql = "INSERT INTO fromdevice (area,temp,hum,soil_moisture,light,motor_status)
VALUES ('$area', '$temp','$hum', '$soil','$light', '$motor_status')";

if ($conn->query($sql) === TRUE) {
  $response['status']="done";
   echo json_encode($response);
} else {
   $response['status']="error";
   echo json_encode($response);
}
}
else{
  $response['status']="datamissing";
  echo json_encode($response);
}

$conn->close();
?>
