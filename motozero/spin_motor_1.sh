
gpio -g mode 27 out
gpio -g mode 24 out
gpio -g mode 5 out

gpio -g write 27 1
gpio -g write 24 0
gpio -g write 5 1

sleep 2

gpio -g write 5 0

