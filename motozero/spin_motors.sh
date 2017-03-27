#!/bin/bash



motor1=$1
motor2=$2
motor3=$3
motor4=$4
time=$5


if [ $motor1 != "0" ]; then
	# motor 1
	gpio -g mode 27 out
	gpio -g mode 24 out
	gpio -g mode 5 out
	echo "motor1 set"	


	if [ $motor1 = "1" ]; then
		echo "forward"	
		gpio -g write 27 1
		gpio -g write 24 0
	else 
		echo "backwards"
		gpio -g write 27 0
		gpio -g write 24 1
	fi
fi

if [ $motor2 != "0" ]; then
	# motor 2
	gpio -g mode 22 out
	gpio -g mode 6 out
	gpio -g mode 17 out
	

	if [ $motor2 = "1" ]; then
		gpio -g write 22 1
		gpio -g write 6 0
	else 
		gpio -g write 22 0
		gpio -g write 6 1
	fi

fi

if [ $motor1 != "0" ]; then
	echo "motor1 go"
	gpio -g write 5 1
fi


if [ $motor2 = "1" ]; then
	# motor 2
	gpio -g write 17 1
fi



sleep $time


if [ $motor1 != "0" ]; then
	echo "motor1 stop"
	gpio -g write 5 0
fi


if [ $motor2 = "1" ]; then
	# motor 2
	gpio -g write 17 0
fi
