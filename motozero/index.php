<?php
/*
red -> +
http://localhost/motozero/?action=motor1

*/

echo "MotoZero Contoller<br/>";

$action = $_GET['action'];

echo shell_exec("pwd") . "<br/>";

if ( $action == "motor1" ) {
	echo "spin_motor_1<br/>";
	#exec("/usr/bin/python3 /home/pi/PiStore.git/trunk/motozero/spin_motor_1.py");
	shell_exec("/usr/bin/python3 /home/pi/PiStore.git/trunk/motozero/spin_motor_1.py");

}






?>