<!DOCTYPE html>
<html>
<head>
	<title>Demo of Styling Table Using CSS3</title>
	<meta name="description" content="xamples of applying CSS 3 in HTML 5 table. Provided with ready-to-use code make it easy to implement">

	<style type="text/css">
		/* SITE */
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		.main-wrapper a {
			text-decoration: none;
			color: #3586b7;
		}
		.main-wrapper a.text-link:hover {
			border-bottom: 1px dashed #CCCCCC;
		}
		.tutorial-link-wrapper {
			text-align: center;
		}
		header {
			padding: 10px 30px 7px 30px;
			border-bottom: 2px solid #636b71;
			background: #343d44;
		}
		footer {   
			background: #343d44;
			padding: 10px 0 7px 30px;
			color: #b9bfc3;
			font-size: 13px;
		}
		footer a {
			color: #b9bfc3;
			text-decoration: none;
			margin-left: 10px;
		}
		.link-header {
			margin-top: 10px;
		}
		.link-header a {
			font-size: 15px;
			color: #b9bfc3;
			text-decoration: none;
			margin: 0;
		}
		.link-header a.home:hover {
			color: #b9bfc3;
		}
		.main-wrapper {
			padding: 25px 0;
		}
		.link-header {
			float: right;
		}
		.clearfix {
			clear: both;
		}
		@media screen and (max-width: 450px) {
			header,
			footer {
				text-align: center;
			}
			.link-header {
				float: none;
				margin: 0;
			}
		}
		
		/* TABLE */
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		.table-wrapper {
			overflow: auto;
		}
		.main-wrapper {
			padding: 20px;
		}
		.main-wrapper a:hover {
			border-bottom: 1px dashed #CCCCCC;
		}
		
		/* Table */
		.demo-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.demo-table th, 
		.demo-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.demo-table caption {
			margin: 7px;
		}

		/* Table Header */
		.demo-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.demo-table tbody td {
			color: #353535;
		}
		.demo-table tbody td:first-child,
		.demo-table tbody td:nth-child(4),
		.demo-table tbody td:last-child {
			text-align: right;
		}
		
		.demo-table tbody td:empty {
			background-color: #ffcccc !important;
			border-color: #ffcccc !important;
		}

		.demo-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.demo-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.demo-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.demo-table tfoot th:first-child {
			text-align: left;
		}
		.demo-table tbody td:empty
		{
			background-color: #ffcccc;
		}
		
		/* Table 2 */
		.demo-table2 {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 536px;
		}

		.demo-table2 th, 
		.demo-table2 td {
			padding: 7px 17px;
		}
		.demo-table2 caption {
			margin: 7px;
		}

		.demo-table2 thead th:last-child,
		.demo-table2 tfoot th:last-child,
		.demo-table2 tbody td:last-child {
			border: 0;
		}

		/* Table Header */
		.demo-table2 thead th {
			border-right: 1px solid #c7ecc7;
			text-transform: uppercase;
		}

		/* Table Body */
		.demo-table2 tbody td {
			color: #353535;
			border-right: 1px solid #c7ecc7;
		}
		.demo-table2 tbody tr:nth-child(odd) td {
			background-color: #f4fff7;
		}
		.demo-table2 tbody tr:nth-child(even) td {
			background-color: #dbffe5;
		}
		.demo-table2 tbody td:nth-child(4),
		.demo-table2 tbody td:first-child,
		.demo-table2 tbody td:last-child {
			text-align: right;
		}
		.demo-table2 tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.demo-table2 tfoot th {
			border-right: 1px solid #c7ecc7;
			text-align: right;
		}
	</style>
</head>
<body data-gr-c-s-loaded="true">
<header>
	<a href="http://webdevzoom.com"><img src="img/logo.png" alt="WebDevZoom.com" title="JadoWebDev.com"></a>
	<div class="link-header">
		<a class="home" href="http://webdevzoom.com" title="WebDevZoom.com" alt="WebDevZoom.com">« Back to home</a>
		<div class="clearfix"></div>
	</div>
</header>
<div class="main-wrapper">
	<div class="tutorial-link-wrapper">
		Tutorial: <a href="http://webdevzoom.com/styling-table-using-css-3/">Styling Table Using CSS 3</a>
	</div>
	<h1>Table 1</h1>
	<div class="table-wrapper">
	<?php
echo "<table class = demo_table style='border: solid 1px black;'>";
 echo "<tr><th>User Name</th><th>Score</th></tr>";

class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
} 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT  FROM report"); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>
	</div>

	<h1>Table 2</h1>
	<div class="table-wrapper">
	<table class="demo-table2" >
		<caption class="title">Table 1. Sales Data of Electronics Division</caption>
		<thead>
			<tr>
				<th>No</th>
				<th>Customer</th>
				<th>Item</th>
				<th>Date</th>
				<th>Amount</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>Anthony</td>
				<td>Television</td>
				<td>September 07, 2016</td>
				<td>250</td>
			</tr>
			<tr>
				<td>2</td>
				<td>Bryan</td>
				<td>Washing Machine</td>
				<td>July 10, 2016</td>
				<td>150</td>
			</tr>
			<tr>
				<td>3</td>
				<td>Cherly</td>
				<td>Water Dispenser</td>
				<td>August 11, 2016</td>
				<td>95</td>
			</tr>
			<tr>
				<td>4</td>
				<td>Dean</td>
				<td>Refrigerator</td>
				<td>September 15, 2016</td>
				<td>175</td>
			</tr>
			<tr>
				<td>5</td>
				<td>Esryl</td>
				<td>Wall Fan</td>
				<td>Oktober 11, 2016</td>
				<td>45</td>
			</tr>
			<tr>
				<td>6</td>
				<td>Franky</td>
				<td>Steam Iron</td>
				<td>October 17, 2016</td>
				<td></td>
			</tr>
			<tr>
				<td>7</td>
				<td>Gerry</td>
				<td>Air Conditioner</td>
				<td>November 17, 2016</td>
				<td>325</td>
			</tr>
		</tbody>
		<tfoot>
			<tr>
				<th colspan="4">Total</th>
				<th>1040</th>
			</tr>
		</tfoot>
	</table>
	</div>
</div>
<footer>Copyright © 2016<a href="http://localhost/" alt="WebDevZoom.com">WebDevZoom.com</a></footer>
</body>
</html>