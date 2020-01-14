<?php

session_start();
if (!isset($_SESSION['username'])) {

    header('location:index.html');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>GATE FORUM</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body style="background-image: url(image/30-300619_kimi-no-nawa-wallpaper-iphone-source-your-name.png); background-repeat: no-repeat;background-size:cover;">
<?php include 'nav.php'; ?>
<br><br><br><br>
<div>
<h1  style="text-align: center; color: white;font-size: 50px;"> <b><u>WHAT IS GATE EXAM ?</u></b></h1><br><br>
<h3 style="text-align: center; color: #000000;font-size: 30px;"><b><i>
	GATE is an online national level examination conducted for Master<br><br>
	of Engineering (ME), Masters in Technology (MTech) and direct PhD<br><br>
	admissions to Indian Institutes of Technology (IITs), National   <br><br>
	Institutes of Technology (NITs), Indian Institutes of Information<br><br>
	Technology (IIITs) and other institutes/universities across India.<br><br>
	The exam is jointly conducted by IIT Bombay, IIT Delhi, IIT Guwahati,<br><br>
	IIT Kanpur, IIT Kharagpur, IIT Madras, IIT Roorkee and Indian Institute<br><br>
	for Science, Bangalore (IISC Bangalore), on a rotational basis on <br>	<br>
	behalf of the National Coordination Board (NCB - GATE), Department<br><br>
	of Higher Education, Ministry of Human Resource & Development (MHRD),<br><br>
	Government of India.</i></b></h3>
</div>
</body>
</html>