<?php
/*
red -> +
http://weepie/motozero/?action=motor1


To let apache run the camera, you may need to run
sudo chmod a+rw /dev/vchiq

*/
?>
<hrml>
	<head>
		<title>MotoZero Bot</title>
		<style>
			body {
				font-family: sans-serif;
			}
			.motor {
				display: inline-block;
				width: 24%;
			}
		</style>
	</head>
	<body>

<form action="http://weepi/motozero/" method="get">

<div class="motor">
<b>Motor 1</b><br/>
<input type="radio" name="motor1" value="0" /> Off<br/>
<input type="radio" name="motor1" value="1" checked /> Forward<br/>
<input type="radio" name="motor1" value="2" /> Reverse<br/>
</div>

<div class="motor">
<b>Motor 2</b><br/>
<input type="radio" name="motor2" value="0" /> Off<br/>
<input type="radio" name="motor2" value="1" checked /> Forward<br/>
<input type="radio" name="motor2" value="2" /> Reverse<br/>
</div>

<div class="motor">
<b>Motor 3</b><br/>
<input type="radio" name="motor3" value="0" checked /> Off<br/>
<input type="radio" name="motor3" value="1" /> Forward<br/>
<input type="radio" name="motor3" value="2" /> Reverse<br/>
</div>

<div class="motor">
<b>Motor 4</b><br/>
<input type="radio" name="motor4" value="0" checked /> Off<br/>
<input type="radio" name="motor4" value="1" /> Forward<br/>
<input type="radio" name="motor4" value="2" /> Reverse<br/>
</div>

<b>Time</b><br/>
<input type="text" name="time" value="0.5" /> Run for x seconds
<br/>
<b>Photo</b><br/>
<input type="checkbox" name="photo" value="1" /> Take a photo
<br/>

<input type="submit" value="Send" />

</form>



<?php
echo "MotoZero Contoller<br/>";

$motor1 = $_GET['motor1'];
$motor2 = $_GET['motor2'];
$motor3 = $_GET['motor3'];
$motor4 = $_GET['motor4'];
$time = $_GET['time'];
$photo = $_GET['photo'];

echo "<small>";
echo "motor1: " . $motor1 . " <br/>";
echo "motor2: " . $motor2 . " <br/>";
echo "motor3: " . $motor3 . " <br/>";
echo "motor4: " . $motor4 . " <br/>";
echo "time: " . $time . " <br/>";
echo "photo: " . $photo . " <br/>";
echo "</small>";

if ($time) {
	echo "spin_motors.sh<br/>";
	echo shell_exec("bash spin_motors.sh $motor1 $motor2 $motor3 $motor4 $time $photo");
}

if ( $photo ) {
	echo "<img src=\"camera_still.jpg\" />";
}



?>
		
	</body>
</html>