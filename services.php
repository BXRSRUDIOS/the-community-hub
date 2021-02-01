<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "includes/head.php"?>
</head>
<body>
	<?php include "includes/navbar.php"?>

	<h1><br><br><br>Here are a list of our services</h1>

	<table class="styled-table">
	    <thead>
	        <tr>
	            <th>Company</th>
	            <th>Community Program</th>
	        </tr>
	    </thead>
	    <tbody>
	        <tr>
	            <td>Skipstorm</td>
	            <td>Teaching</td>
	        </tr>
	        <tr class="active-row">
	            <td>Photobug</td>
	            <td>Community Grants</td>
	        </tr>
	         <tr>
	            <td>Quire</td>
	            <td>Teaching Support</td>
	        </tr>
	        <tr class="active-row">
	            <td>Nlounge</td>
	            <td>Teaching</td>
	        </tr>
	         <tr>
	            <td>Wordpedia</td>
	            <td>Community Grants</td>
	        </tr>
	        <tr class="active-row">
	            <td>Zoomzone</td>
	            <td>Teaching</td>
	        </tr>
	        <tr>
	            <td>Dynabox</td>
	            <td>Community Resource Support</td>
	        </tr>
	        <tr class="active-row">
	            <td>Buzzshare</td>
	            <td>Teaching</td>
	        </tr>
	        <tr>
	            <td>Babbleopia</td>
	            <td>Playground Builds</td>
	        </tr>
	        <tr class="active-row">
	            <td>Kare</td>
	            <td>Community Grants</td>
	        </tr>
	        <tr>
	            <td>Browsedrive</td>
	            <td>Community Resource Support</td>
	        </tr>
	        <tr class="active-row">
	            <td>Twitterbeat</td>
	            <td>Community Resource Support</td>
	        </tr>
	        <tr>
	            <td>Jabbertype</td>
	            <td>Community Grants</td>
	        </tr>
	        <tr class="active-row">
	            <td>Photolist</td>
	            <td>Teaching Support</td>
	        </tr>
	        <tr>
	            <td>Mudo</td>
	            <td>Community Grants</td>
	        </tr>
	        <tr class="active-row">
	            <td>Skyble</td>
	            <td>Teaching Support</td>
	        </tr>
	        <tr>
	            <td>Edgepulse</td>
	            <td>Teaching</td>
	        </tr>
	        <tr class="active-row">
	            <td>Rhynyx</td>
	            <td>Teaching</td>
	        </tr>
	        <tr>
	            <td>Skipfire</td>
	            <td>Community Resource Support</td>
	        </tr>
	        <tr class="active-row">
	            <td>Vodafone</td>
	            <td>School Education Tasks</td>
	        </tr>
	        <tr>
	            <td>O2</td>
	            <td>Social Responsibility</td>
	        </tr>
	    </tbody>
	</table>

	<style>
		.styled-table {
	    	border-collapse: collapse;
	    	margin: 25px 0;
	    	font-size: 0.9em;
	    	font-family: sans-serif;
	    	min-width: 400px;
	    	box-shadow: 2 2 30px rgba(0, 0, 0, 0.5);
		}

		.styled-table thead tr {
	    	background-color: #182628;
	    	color: #ffffff;
	    	text-align: left;
	    	box-shadow: 2 2 30px rgba(0, 0, 0, 0.5);
		}

		.styled-table th,
		.styled-table td {
	    	padding: 12px 15px;
		}
		.styled-table tbody tr {
    		border-bottom: 1px solid #dddddd;
		}

		.styled-table tbody tr:nth-of-type(even) {
    		background-color: #f3f3f3;
		}

		.styled-table tbody tr:last-of-type {
    		border-bottom: 2px solid #3B945E;
		}

		.styled-table tbody tr.active-row {
    		font-weight: bold;
    		color: #3B945E;
		}
	</style>

	<?php include "includes/footer.php" ?>
	<?php include "includes/scripts.php" ?>
</body>
</html>