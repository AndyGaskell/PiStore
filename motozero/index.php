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






?>