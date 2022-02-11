<?php
require 'src/Db.php';
## current year
$current_year = date('Y');


## Retrieving Total Number of visitors in January for the current year
$january = "SELECT * FROM `analytics` WHERE `month`='January' AND `year`= $current_year";
$jan = $conn->query($january);
$january_visitors = $jan->num_rows;



## Retrieving Total Number of visitors in February for the current year
$february = "SELECT * FROM `analytics` WHERE `month`='February' AND `year`= $current_year";
$feb = $conn->query($february);
$february_visitors = $feb->num_rows;




## Retrieving Total Number of visitors in March for the current year 
$march = "SELECT * FROM `analytics` WHERE `month`='March' AND `year`= $current_year";
$mar = $conn->query($march);
$march_visitors = $mar->num_rows;




## Retrieving Total Number of visitors in April for the current year 
$april = "SELECT * FROM `analytics` WHERE `month`='April' AND `year`= $current_year";
$apr = $conn->query($april);
$april_visitors = $apr->num_rows;





## Retrieving Total Number of visitors in May for the current year 
$may = "SELECT * FROM `analytics` WHERE `month`='May' AND `year`= $current_year";
$my = $conn->query($may);
$may_visitors = $my->num_rows;





## Retrieving Total Number of visitors in June for the current year 
$june = "SELECT * FROM `analytics` WHERE `month`='June' AND `year`= $current_year";
$jne = $conn->query($june);
$june_visitors = $jne->num_rows;





## Retrieving Total Number of visitors in July for the current year 
$july = "SELECT * FROM `analytics` WHERE `month`='July' AND `year`= $current_year";
$jly = $conn->query($july);
$july_visitors = $jly->num_rows;





## Retrieving Total Number of visitors in August for the current year 
$august = "SELECT * FROM `analytics` WHERE `month`='August' AND `year`= $current_year";
$aug = $conn->query($august);
$august_visitors = $aug->num_rows;






## Retrieving Total Number of visitors in September for the current year 
$september = "SELECT * FROM `analytics` WHERE `month`='September' AND `year`= $current_year";
$sep = $conn->query($september);
$september_visitors = $sep->num_rows;




## Retrieving Total Number of visitors in October for the current year 
$october = "SELECT * FROM `analytics` WHERE `month`='October' AND `year`= $current_year";
$oct = $conn->query($october);
$october_visitors = $oct->num_rows;





## Retrieving Total Number of visitors in November for the current year 
$november = "SELECT * FROM `analytics` WHERE `month`='November' AND `year`= $current_year";
$nov = $conn->query($november);
$november_visitors = $nov->num_rows;





## Retrieving Total Number of visitors in December for the current year 
$december = "SELECT * FROM `analytics` WHERE `month`='December' AND `year`= $current_year";
$dec = $conn->query($december);
$december_visitors = $dec->num_rows;


?>







<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {
var current_year = <?php Print(date('Y')); ?>;
var january =<?php Print($january_visitors); ?>;
var february =<?php Print($february_visitors); ?>;
var march = <?php Print($march_visitors); ?>;
var april = <?php Print($april_visitors); ?>;
var may = <?php Print($may_visitors); ?>;
var june = <?php Print($june_visitors); ?>;
var july = <?php Print($july_visitors); ?>;
var august = <?php Print($august_visitors); ?>;
var september = <?php Print($september_visitors); ?>;
var october = <?php Print($october_visitors); ?>;
var november = <?php Print($november_visitors); ?>;
var december = <?php Print($december_visitors); ?>;




var chart = new CanvasJS.Chart("chartContainer", {
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	animationEnabled: true,
	title:{
		text: "Site trafic for "+current_year,   
	},
	axisX: {
		interval: 1,
		intervalType: "month",
		valueFormatString: "MMM"
	},
	axisY:{
		title: "Number of Visitors",
		includeZero: true,
		valueFormatString: "#0"
	},
	data: [{        
		type: "line",
		markerSize: 12,
		xValueFormatString: "MMM, YYYY",
		yValueFormatString: "###.#",
		dataPoints: [        
			{ x: new Date(current_year, 00, 1), y: january, indexLabel: "January Visitors", markerType: "triangle",  markerColor: "#6B8E23" },
			{ x: new Date(current_year, 01, 1), y: february, indexLabel: "February Visitors", markerType: "triangle",  markerColor: "#6B8E23" },
			{ x: new Date(current_year, 02, 1), y: march, indexLabel: "March Visitors", markerType: "triangle",  markerColor: "#6B8E23" },
			{ x: new Date(current_year, 03, 1), y: april, indexLabel: "April Visitors", markerType: "triangle",  markerColor: "#6B8E23" },
			{ x: new Date(current_year, 04, 1), y: may, indexLabel: "May Visitors", markerType: "triangle",  markerColor: "#6B8E23" },
			{ x: new Date(current_year, 05, 1), y: june, indexLabel: "June Visitors", markerType: "triangle",  markerColor: "#6B8E23" },
			{ x: new Date(current_year, 06, 1), y: july, indexLabel: "July Visitors", markerType: "triangle",  markerColor: "#6B8E23" },
			{ x: new Date(current_year, 07, 1), y: august, indexLabel: "August Visitors", markerType: "triangle",  markerColor: "#6B8E23" },
			{ x: new Date(current_year, 08, 1), y: september, indexLabel: "September Visitors", markerType: "triangle",  markerColor: "#6B8E23" },
			{ x: new Date(current_year, 09, 1), y: october, indexLabel: "October Visitors", markerType: "triangle",  markerColor: "#6B8E23" },
			{ x: new Date(current_year, 10, 1), y: november, indexLabel: "November Visitors", markerType: "triangle",  markerColor: "#6B8E23" },
			{ x: new Date(current_year, 11, 1), y: december, indexLabel: "December Visitors", markerType: "triangle",  markerColor: "#6B8E23" },
			
		]
	}]
});
chart.render();

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>