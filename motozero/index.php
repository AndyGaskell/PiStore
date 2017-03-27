<?php
/*
red -> +
http://weepie/motozero/?action=motor1

*/
?>

<form action="http://weepi/motozero/" method="get">

<b>Motor 1</b><br/>
<input type="radio" name="motor1" value="0" /> Off<br/>
<input type="radio" name="motor1" value="1" checked /> Forward<br/>
<input type="radio" name="motor1" value="2" /> Reverse<br/>
<br/>

<b>Motor 2</b><br/>
<input type="radio" name="motor2" value="0" /> Off<br/>
<input type="radio" name="motor2" value="1" checked /> Forward<br/>
<input type="radio" name="motor2" value="2" /> Reverse<br/>
<br/>

<b>Motor 3</b><br/>
<input type="radio" name="motor3" value="0" checked /> Off<br/>
<input type="radio" name="motor3" value="1" /> Forward<br/>
<input type="radio" name="motor3" value="2" /> Reverse<br/>
<br/>

<b>Motor 4</b><br/>
<input type="radio" name="motor4" value="0" checked /> Off<br/>
<input type="radio" name="motor4" value="1" /> Forward<br/>
<input type="radio" name="motor4" value="2" /> Reverse<br/>
<br/>

<b>Time</b><br/>
<input type="text" name="time" value="2" /> Run for x seconds
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

echo "motor1: " . $motor1 . " <br/>";
echo "motor2: " . $motor2 . " <br/>";
echo "motor3: " . $motor3 . " <br/>";
echo "motor4: " . $motor4 . " <br/>";
echo "time: " . $time . " <br/>";

if ($time) {
	echo "spin_motors.sh<br/>";
	echo shell_exec("bash spin_motors.sh $motor1 $motor2 $motor3 $motor4 $time");
}


/*
$action = $_GET['action'];

echo shell_exec("pwd") . "<br/>";

if ( $action == "motor1" ) {
	echo "spin_motor_1<br/>";
	echo shell_exec("bash spin_motor_1.sh");
}
if ( $action == "motor2" ) {
	echo "spin_motor_2<br/>";
	echo shell_exec("bash spin_motor_2.sh");
}
if ( $action == "motors" ) {
	echo "spin_motor_2<br/>";
	echo shell_exec("bash spin_motor_1_and_2.sh");
}
*/





?>