# PiStore
Just a personal place to put bits and bobs for Pi





http://www.fotosyn.com/berrycam-support/
sudo python /home/pi/berryCam.py

http://www.instructables.com/id/Simple-timelapse-camera-using-Raspberry-Pi-and-a-c/?ALLSTEPS

cd /<your_timelapse_folder>
ls *.jpg > list.txt
sudo apt-get install mencoder

mencoder -nosound -ovc lavc -lavcopts vcodec=mpeg4:aspect=16/9:vbitrate=8000000 -vf scale=1920:1080 -o timelapse.avi -mf type=jpeg:fps=24 mf://@list.txt

mencoder -nosound -ovc lavc -lavcopts vcodec=mpeg4:aspect=16/9:vbitrate=8000000 -vf scale=2592:1944 -o timelapse.avi -mf type=jpeg:fps=24 mf://@list.txt
timelapse_01.avi

mencoder -nosound -ovc lavc -lavcopts vcodec=mpeg4:aspect=2592/1944:vbitrate=80000000 -vf scale=2592:1944 -o timelapse.avi -mf type=jpeg:fps=24 mf://@list.txt
