<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Главная</title>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');

		html, body {
			background: linear-gradient(45deg, #EECFBA, #C5DDE8);
			background-size: cover;
			height: 1%;
			text-align: center;
			color: #0000FF;
			font-size: 18px;
		}
		::-webkit-scrollbar { /*убрать полосу прокрутки*/
  		width: 0;
		}
		h1 {
			color: #C27375;
			font-family: 'Dosis', sans-serif;
		}
		table {
			width: 900px;
			margin: auto;
			margin-top: 90px;
		}
		tr {
			text-align: center;
			font-size: 20px;
			color: #5072A7;
			height: 20px;
		}
		form > p > input, textarea {
			font-size: 16px;
			background: #FDF5E6;
			margin: 3px;
		}
		form {
			padding: 10px;
		}
		input, textarea {
			padding: 8px;
			width: 300px;
			font-family: 'Dosis', sans-serif;
			-webkit-border-radius: 12px;
 			-moz-border-radius: 12px;
 			border-radius: 12px; 
 			border: 2px solid #DE4170;
		}
		.button {
			background: #5072A7;
			color: white;
			font-size: 20px;
			border: 0px;
			border-radius: 30px; 
			width: 250px;
			height: 50px;
			margin: 20px;
			box-shadow: 5px 5px 20px rgba(0,0,0,0.4), -5px -10px 20px rgba(255,255,255,0.5);
		}
		
	</style>
</head>
<body>
	<?php include 'views/'.$content_view; ?>
</body>
</html>