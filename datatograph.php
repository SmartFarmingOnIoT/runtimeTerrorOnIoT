<?php
header("Access-Control-Allow-Origin: *");
header("content-type:Application/json;charset=UTF-8");
$tosend= array();
   // Create connection
   // Database configuration
   $dbHost     = "localhost";
   $dbUsername = "root";
   $dbPassword = "";
   $dbName     = "iotfarming";

   // Create database connection
   $mysqli = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

   // Check connection
   if ($mysqli -> connect_errno) {
        echo "-10";
        exit();
        }
   $query=$mysqli -> query("SELECT * FROM fromdevice ORDER BY id DESC LIMIT 1");
   if($query){
      $result=$query->fetch_array();
      $tosend["area"]=$result['area'];
      $tosend["light"]=$result['light'];
      $tosend["temp"]=$result['temp'];
      $tosend["hum"]=$result['hum'];
      $tosend["moisture"]=$result['soil_moisture'];
      $tosend["time_stamp"]=$result['time_stamp'];
      echo json_encode($tosend);
   }else {
   echo json_encode("No new data");
}
?>
