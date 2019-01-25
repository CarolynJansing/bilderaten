<?php




?>
<style>
body {
background-image: url("wp.jpg");
background-size: cover;}
.myButton {height: 100px; width: 200px;
	-moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
	-webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
	box-shadow:inset 0px 1px 0px 0px #ffffff;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #f9f9f9), color-stop(1, #e9e9e9));
	background:-moz-linear-gradient(top, #f9f9f9 5%, #e9e9e9 100%);
	background:-webkit-linear-gradient(top, #f9f9f9 5%, #e9e9e9 100%);
	background:-o-linear-gradient(top, #f9f9f9 5%, #e9e9e9 100%);
	background:-ms-linear-gradient(top, #f9f9f9 5%, #e9e9e9 100%);
	background:linear-gradient(to bottom, #f9f9f9 5%, #e9e9e9 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f9f9f9', endColorstr='#e9e9e9',GradientType=0);
	background-color:#f9f9f9;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #dcdcdc;
	display:inline-block;
	cursor:pointer;
	color:#666666;
	font-family:Arial;
	font-size:55px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #ffffff;position:relative
	; left:600px; top:180px;
}
.myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #e9e9e9), color-stop(1, #f9f9f9));
	background:-moz-linear-gradient(top, #e9e9e9 5%, #f9f9f9 100%);
	background:-webkit-linear-gradient(top, #e9e9e9 5%, #f9f9f9 100%);
	background:-o-linear-gradient(top, #e9e9e9 5%, #f9f9f9 100%);
	background:-ms-linear-gradient(top, #e9e9e9 5%, #f9f9f9 100%);
	background:linear-gradient(to bottom, #e9e9e9 5%, #f9f9f9 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#e9e9e9', endColorstr='#f9f9f9',GradientType=0);
	background-color:#e9e9e9;
}


</style>

<style type="text/css">
.mycss
{
text-shadow:-2px 1px 12px rgba(255,255,255,0.9);font-weight:normal;color:#000000;border: 5px dashed #8C8C8C;letter-spacing:2pt;word-spacing:7pt;font-size:70px;text-align:center;font-family:comic sans, comic sans ms, cursive, verdana, arial, sans-serif;line-height:1;
}
</style>

<body>
<br>
<br>
<br>
<p class="mycss"> Such ein Bild aus !</p>
</body>
</html>

<body>

<input type="button" name="page" value="Bild1" onclick="window.location.href='bildraten.php'"  class="myButton"/>
<input type="button" name="page" value="Bild2" onclick="window.location.href='bildraten2.php'" class="myButton"/>
<input class="myButton" name="page" type="button" value="Bild3" onclick="window.location.href='bildraten3.php'" />
</body>
