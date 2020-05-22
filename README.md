# PiStore
Just a personal place to put bits and bobs for Pi. More of a personal pi pastebin than anything else.



## Timelapse
http://www.fotosyn.com/berrycam-support/

sudo python /home/pi/berryCam.py

http://www.instructables.com/id/Simple-timelapse-camera-using-Raspberry-Pi-and-a-c/?ALLSTEPS

Autostart crontab

@reboot python /home/pi/raspiLapseCamAG1.py & 

## Images to video

### libav-tools / ffmpeg 

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

### mencoder

sudo apt-get install mencoder

ls *.jpg > list.txt

mencoder -nosound -ovc lavc -lavcopts vcodec=mpeg4:aspect=16/9:vbitrate=8000000 -vf scale=1920:1080 -o timelapse.avi -mf type=jpeg:fps=24 mf://@list.txt

mencoder -nosound -ovc lavc -lavcopts vcodec=mpeg4:aspect=16/9:vbitrate=8000000 -vf scale=2592:1944 -o timelapse.avi -mf type=jpeg:fps=24 mf://@list.txt

mencoder -nosound -ovc lavc -lavcopts vcodec=mpeg4:aspect=2592/1944:vbitrate=80000000 -vf scale=2592:1944 -o timelapse.avi -mf type=jpeg:fps=24 mf://@list.txt


## Image sizes / rates
2592x1944 pixels = ~2.4MB
### Size / images
* 1GB = ~416 images
* 5GB = ~2082 images
* 10GB = ~4166 images
### Images / size / time
* 6 images / min = 864 MB / hour
* 12 images / min = 1728 MB / hour

See also...
* https://github.com/ccrisan/motioneye
* http://www.fotosyn.com/berrycam-support/
* http://www.instructables.com/id/Simple-timelapse-camera-using-Raspberry-Pi-and-a-c/?ALLSTEPS
* https://www.raspberrypi.org/learning/timelapse-setup/
* https://www.raspberrypi.org/blog/tag/time-lapse/
* https://www.raspberrypi.org/blog/camera-board-project-time-lapse-video/


### Localhost from PiStore
in...
/etc/apache2/sites-available000-default.conf
...set...
DocumentRoot /home/pi/PiStore.git/trunk

## DD

sudo dd bs=4M if=retropie-buster-4.6-rpi4.img of=/dev/sdc conv=fsync

## Nature Cam

* https://mynaturewatch.net
* https://mynaturewatch.net/forum?p=post%2Fconnect-to-home-network-9770732%3Fhighlight%3Dnetwork%26trail%3D30
* https://raspberrypi.stackexchange.com/questions/13764/what-causes-enospc-error-when-using-the-raspberry-pi-camera-module
* Camera, ID: 1051437, https://www.banggood.com/Camera-Module-For-Raspberry-Pi-4-Model-B-3-Model-B-2B-B-A-p-1051437.html

pi / badgersandfoxes

Chang to use home network steps were...

You will need to be able access the raspi with either keyboard and screen or, I used ssh, ethernet over usb

REMOVE HOTSPOT AND USE HOME NETWORK

```
sudo apt-get purge dns-root-data
sudo systemctl disable hostapd
sudo systemctl disable dnsmasq
reboot
sudo apt remove dnsmasq
sudo apt remove hostapd
```

EDIT /etc/dhcpcd.conf to remove/comment static wlan and nohook wpa_supplicant lines

```
diff dhcpd.conf_before.txt dhcpd.conf_after.txt 
59c59,60
< nohook wpa_supplicant
---
> # commented out by AG
> #nohook wpa_supplicant
61,62c62,65
< static ip_address=192.168.50.10/24
< static routers=192.168.50.1
---
> # commented out by AG
> #static ip_address=192.168.50.10/24
> # commented out by AG
> #static routers=192.168.50.1
```

ADD your home network to /etc/wpa_supplicant/wpa_supplicant.conf...

```
ctrl_interface=DIR=/var/run/wpa_supplicant GROUP=netdev
update_config=1
country=GB
network={
    ssid="WIFI_NAME"
    psk="WIFI_PASSWORD"
    key_mgmt=WPA-PSK
}
```

RECONFIGURE WLAN
wpa_cli -i wlan0 reconfigure

reboot

DEBUGGING
sudo iwlist wlan0 scan 
ifconfig 

## raspistill to test camera

https://www.raspberrypi.org/documentation/usage/camera/raspicam/raspistill.md

```raspistill -o cam.jpg```


