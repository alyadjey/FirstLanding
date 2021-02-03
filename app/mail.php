<?php

var_dump($_POST);
// $to = "MEz <dev.mezzling@gmail.com>";
$subject = "Lets begin";


$snowColor = '#91ddf0';
$stormColor = '#fdde35';
$twisterColor = '#b2c9d2';

$snowBG = 'https://static.tildacdn.com/tild3661-3564-4230-b166-396233393238/snowflakes-clip-art-.png';
$stormBG = 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/8a/Electric_bolt_%28example%29.svg/1200px-Electric_bolt_%28example%29.svg.png';
$twisterBG = 'img/pngwing.com.png';


$bgColor = '';
$bgImg = '';

switch ($_POST['weather']) {
	case 'snow':
		$bgColor = '#91ddf0';
		$bgImg = 'https://static.tildacdn.com/tild3661-3564-4230-b166-396233393238/snowflakes-clip-art-.png';
		break;
	case 'storm':
		$bgColor = '#fdde35';
		$bgImg = 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/8a/Electric_bolt_%28example%29.svg/1200px-Electric_bolt_%28example%29.svg.png';
		break;
	case 'twister':
		$bgColor = '#b2c9d2';
		$bgImg = 'http://mezzling.temp.swtest.ru/pngwing.com.png';
		break;
	default:
		
		break;
}


// <link rel="preconnect" href="https://fonts.gstatic.com">
// <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500&display=swap" rel="stylesheet"> 
$message = '
<html>
	<head>
		<title>Weather</title>
		
		<style>
			@import url(https://fonts.googleapis.com/css?family=Langar);
			th {
				font-family: Langar;
			}			
			@media screen and (-webkit-min-device-pixel-ratio:0) {
				th {
					font-family: Langar;
				}
			}
		</style>
	</head>
	<body>
		<table 
			width="800" border="0" align="center" cellpadding="25" cellspacing="0"
			style="
				
				background-image: url('.$bgImg.');				
			    background-position: right bottom;
			    background-repeat: no-repeat;
			    background-color: '.$bgColor.';
			    background-size: contain;
		    "
			>
			<tr>
				<th style="height: 65px; font-size: 22px;" colspan="4">Welcome</th>
			</tr>
			<tr style="background-color: rgba(255, 255, 255, 0.7); font-size: 18px;">
				<td style="font-family: Arial; font-weight: 900;">Name</td><td style="font-family: Helvetica; font-weight: 600;">'.$_POST['login'].'</td><td></td><td></td>
			</tr>
			<tr style="background-color: rgba(255, 255, 255, 0.7); font-size: 18px;">
				<td style="font-family: Arial; font-weight: 900;">Age</td><td style="font-family: Helvetica; font-weight: 600;">'.$_POST['age'].'</td><td></td><td></td>
			</tr>
			<tr style="background-color: rgba(255, 255, 255, 0.7); font-size: 18px;">
				<td style="font-family: Arial; font-weight: 900;">Phone</td><td style="font-family: Helvetica; font-weight: 600;">'.$_POST['tel'].'</td><td></td><td></td>
			</tr>
			<tfoot style="background-color: #000000; color: #ffffff; font-size: 20px;">
				<tr>
					<td><span style="color: rgb(238, 88, 58); font-family: Arial; font-weight: 900">Wild</span><span style="font-family: Arial; font-weight: 600;">Weather</span> company</td><td></td><td>2020</td><td style="color: rgb(238, 88, 58)">8 (999) 666-35-41</td>
				</tr> 
			</tfoot>
		</table>
	</body>
</html>
';

$headers= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";


$headers .= "From: Wild Weather <wildweather@example.com>\r\n";
$headers .= "Cc: wildweather@example.com\r\n";
$headers .= "Bcc: wildweather@example.com\r\n";

if(mail($_POST['email'], $subject, $message, $headers)){
	echo "Submited!";
}else{
	echo "Something wrong...";
}


?>