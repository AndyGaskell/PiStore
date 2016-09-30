# PiStore
Just a personal place to put bits and bobs for Pi






##Timelapse
http://www.fotosyn.com/berrycam-support/

sudo python /home/pi/berryCam.py

http://www.instructables.com/id/Simple-timelapse-camera-using-Raspberry-Pi-and-a-c/?ALLSTEPS

Autostart crontab

@reboot python /home/pi/raspiLapseCamAG1.py & 

##Images to video
cd /<your_timelapse_folder>

ls *.jpg > list.txt

sudo apt-get install mencoder

mencoder -nosound -ovc lavc -lavcopts vcodec=mpeg4:aspect=16/9:vbitrate=8000000 -vf scale=1920:1080 -o timelapse.avi -mf type=jpeg:fps=24 mf://@list.txt

mencoder -nosound -ovc lavc -lavcopts vcodec=mpeg4:aspect=16/9:vbitrate=8000000 -vf scale=2592:1944 -o timelapse.avi -mf type=jpeg:fps=24 mf://@list.txt

mencoder -nosound -ovc lavc -lavcopts vcodec=mpeg4:aspect=2592/1944:vbitrate=80000000 -vf scale=2592:1944 -o timelapse.avi -mf type=jpeg:fps=24 mf://@list.txt


##Image sizes / rates
2592x1944 pixels = ~2.4MB
###Size / images
*1GB = ~416 images
*5GB = ~2082 images
*10GB = ~4166 images
###Images / size / time
*6 images / min = 864 MB / hour
*12 images / min = 1728 MB / hour

