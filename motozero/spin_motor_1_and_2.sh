
# motor 1
gpio -g mode 22 out
gpio -g mode 6 out
gpio -g mode 17 out

gpio -g write 22 1
gpio -g write 6 0

# motor 2
gpio -g mode 27 out
gpio -g mode 24 out
gpio -g mode 5 out

gpio -g write 27 1
gpio -g write 24 0

# 1
gpio -g write 5 1
# 2
gpio -g write 17 1

sleep 2

# 1
gpio -g write 5 0
# 2
gpio -g write 17 0
