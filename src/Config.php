<?php
namespace ChandaChewe\Webanalytics;
require 'Db.php';




 $usersIP='165.56.184.54';//$_SERVER['REMOTE_ADDR'];
 
 
 $IP = curl_init();
 curl_setopt_array($IP, array(
  CURLOPT_URL => 'https://api.freegeoip.app/json/'.$usersIP.'?apikey=c8a369a0-3426-11ec-998c-473b46832dcc',
  CURLOPT_RETURNTRANSFER => true,
),
);
 $IP_TRACKED = curl_exec($IP);
 $cloneUrl = curl_close($IP);
 $ipDataObject=json_decode($IP_TRACKED,true);


 //Capture Analytics
$country_name = $ipDataObject['country_name']; 
$country_code = $ipDataObject['country_code'];
$region_name = $ipDataObject['region_name'];
$region_code = $ipDataObject['region_code'];
$country_city = $ipDataObject['city'];
$zip_code = $ipDataObject['zip_code'];
$latitude = $ipDataObject['latitude'];
$longitude = $ipDataObject['longitude'];
$timezone = $ipDataObject['time_zone'];
$ipv4 = $usersIP;    



$sql = "INSERT INTO analytics (country_name, country_code, region_name, region_code, country_city, zip_code, latitude, longitude, timezone, ipv4)
VALUES ('$country_name', '$country_code', '$region_name', '$region_code', '$country_city', 12, '$latitude', '$longitude', '$timezone','$ipv4' )";


  if ($conn->query($sql) === TRUE) {
   echo "User Captured Successfully";
  } else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
  }
   
    $conn->close();




class Config{
  public function __construct(){

  }
}



?>

