<?php
require 'src/Db.php';


//Retrieving Total Number of visitors all

$sql = "SELECT * FROM `analytics`";
$result = $conn->query($sql);
$visitors = $result->num_rows ."<br>";


 // output data of Countries
 if ($result->num_rows > 0) { 
    while($row = $result->fetch_assoc()) {
    $countries = $row["country_name"]. "<br>";
   
    }
  } 




 // output data of Countries Regions

if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
        $country_region = $row["region_name"]. "<br>";
    }
  } 





 // output data of Countries Cities

 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $country_city = $row["country_city"]. "<br>";
   }
 } 




 
 // Output data of Visitors Internet Protocal Versions 4 (IPV4)

 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $ipv4 = $row["ipv4"]. "<br>";
   }
 } 




 
 // Output data of Visitors Dates

 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $dates = $row["visited_at"]. "<br>";
   }
 } 
 






?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--Bootstrap-->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
    <br>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">Visitors</a>
  <a href="#">Countries</a>
  <a href="#">Region</a>
  <a href="#">City</a>
  <a href="#">IPV4</a>
  <a href="#">Date Visted</a>
  </div>

<div id="main">
  <h2>Simple Web Analytics</h2>
  <p>A simple web analytics to view the total number of people who visited your website in a specific month including their Country, Region, City and IP Addresses. </p>

</p>
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>

<hr>
<div class="row">
<div class="col-xs-12 col-md-4 col-sm-4 col-lg-4 shadow p-3 mb-5 bg-white rounded">
VISITORS <hr>

<div class="btn btn-primary"><?php echo $visitors;?></div>


</div>


<div class="col-xs-12 col-md-4 col-sm-4 col-lg-4 shadow p-3 mb-5 bg-white rounded">
COUNTRIES <hr>
<div class="btn btn-primary" >VIEW</div>
</div>


<div class="col-xs-12 col-md-4 col-sm-4 col-lg-4 shadow p-3 mb-5 bg-white rounded">
REGION <hr>
<div class="btn btn-primary">VIEW</div>
</div>


</div>

<br>
  
<div class="row">
<div class="col-xs-12 col-md-4 col-sm-4 col-lg-4 shadow p-3 mb-5 bg-white rounded">
CITY <hr>
<div class="btn btn-primary">VIEW</div>
</div>


<div class="col-xs-12 col-md-4 col-sm-4 col-lg-4 shadow p-3 mb-5 bg-white rounded">
IPV4 <hr>
<div class="btn btn-primary">VIEW</div>
</div>


<div class="col-xs-12 col-md-4 col-sm-4 col-lg-4 shadow p-3 mb-5 bg-white rounded">
DATES VISITED <hr>
<div class="btn btn-primary">VIEW</div>
</div>


</div>
  


<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
   
</body>
</html> 
