# PiStore
Just a personal place to put bits and bobs for Pi. More of a personal pi pastebin than anything else.



##Timelapse
http://www.fotosyn.com/berrycam-support/

sudo python /home/pi/berryCam.py

http://www.instructables.com/id/Simple-timelapse-camera-using-Raspberry-Pi-and-a-c/?ALLSTEPS

Autostart crontab

@reboot python /home/pi/raspiLapseCamAG1.py & 

##Images to video

###libav-tools / ffmpeg 

sudo apt-get install libav-tools

or

wget https://github.com/ccrisan/motioneye/wiki/precompiled/ffmpeg_3.1.1-1_armhf.deb

sudo dpkg -i ffmpeg_3.1.1-1_armhf.deb

From https://github.com/ccrisan/motioneye/wiki/Install-On-Raspbian

cat *.jpg | avconv -f image2pipe -r 1 -vcodec mjpeg -i - -vcodec libx264 out.mp4

cat *.jpg | avconv -f image2pipe -r 24 -vcodec mjpeg -i - -vcodec libx264 -s 648x468 -b 5000k out5.mp4

cat *.jpg | avconv -f image2pipe -r 24 -vcodec mjpeg -i - -vcodec libx264 -s 1296x972 -b 10M out6.mp4

cat *.jpg | ffmpeg -f image2pipe -r 24 -vcodec mjpeg -i - -vcodec libx264 -s 1296x972 -b 10M out6.mp4

cat *.jpg | ffmpeg -f image2pipe -r 24 -vcodec mjpeg -i - -vcodec libx264 -s 1296x972 -b:v 20M out8f.mp4

###mencoder

sudo apt-get install mencoder

ls *.jpg > list.txt

mencoder -nosound -ovc lavc -lavcopts vcodec=mpeg4:aspect=16/9:vbitrate=8000000 -vf scale=1920:1080 -o timelapse.avi -mf type=jpeg:fps=24 mf://@list.txt

mencoder -nosound -ovc lavc -lavcopts vcodec=mpeg4:aspect=16/9:vbitrate=8000000 -vf scale=2592:1944 -o timelapse.avi -mf type=jpeg:fps=24 mf://@list.txt

mencoder -nosound -ovc lavc -lavcopts vcodec=mpeg4:aspect=2592/1944:vbitrate=80000000 -vf scale=2592:1944 -o timelapse.avi -mf type=jpeg:fps=24 mf://@list.txt


##Image sizes / rates
2592x1944 pixels = ~2.4MB
###Size / images
* 1GB = ~416 images
* 5GB = ~2082 images
* 10GB = ~4166 images
###Images / size / time
* 6 images / min = 864 MB / hour
* 12 images / min = 1728 MB / hour

#See also...
* https://github.com/ccrisan/motioneye
* http://www.fotosyn.com/berrycam-support/
* http://www.instructables.com/id/Simple-timelapse-camera-using-Raspberry-Pi-and-a-c/?ALLSTEPS
* https://www.raspberrypi.org/learning/timelapse-setup/
* https://www.raspberrypi.org/blog/tag/time-lapse/
* https://www.raspberrypi.org/blog/camera-board-project-time-lapse-video/


###Localhost from PiStore
in...
/etc/apache2/sites-available000-default.conf
...set...
DocumentRoot /home/pi/PiStore.git/trunk



