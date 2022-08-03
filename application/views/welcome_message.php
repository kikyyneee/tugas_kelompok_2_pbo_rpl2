<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Intro CodeIgniter 3</title>
	<style>
		/* fonts */
		@import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');

		* {
			font-family: 'Josefin Sans', sans-serif;
		}

		html {
			scroll-behavior: smooth;
		}

		table, tr, td, th {
			border: 1px solid black;
			border-collapse: collapse;
		}

		ul, li, a{
			list-style: none;
			display: inline-block;
			margin-right: 15px;
			color: #f4e1cc;
			text-decoration: none;
		}

		ul, li, a:hover{
			list-style: none;
			display: inline-block;
			margin-right: 15px;
			color: #9b4d37;
			text-decoration: none;
		}

		.content {
			height: 150vh;
			background-color: #f4e1cc;
		}
	</style>
</head>
<body>
	<center>
	<table width="80%">
		<tr style="background-color: #9b4d37;">
			<td>
				<center>
					<b><p style="color: #f4e1cc;">CODE IGNITER 3</p></b>
				</center>
			</td>
		</tr>
		<tr style="background-color: #403333;">
			<td>
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#footer">About</a></li>
					<li><a href="#footer">Contact</a></li>
				</ul>
			</td>
		</tr>
		<tr class="content">
			<td>
				<center>
				<p>Kelompok 2 | XII RPL 2</p>
				<p>Muhammad Rizky Maulana Darmawan</p>
				<p>Dinda Azzahra</p>
				<p>____________________________________________________________</p>
				<p>Check welcome_message.php</p>
				</center>
			</td>
		</tr>
		<tr id="footer" style="background-color: #9b4d37;">
			<td style="padding-top: 15px; padding-bottom: 15px;">
				<center>
					<b style="color: #f4e1cc;"><i>Copyright &copy 2022</i></b>
				</center>
			</td>
		</tr>
	</table>
</body>
</html>
