
gpio -g mode 22 out
gpio -g mode 6 out
gpio -g mode 17 out

gpio -g write 22 1
gpio -g write 6 0
gpio -g write 17 1

sleep 2

gpio -g write 17 0

