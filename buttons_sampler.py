#
# https://www.raspberrypi.org/learning/gpio-music-box/worksheet/
# 
#

import pygame.mixer
from pygame.mixer import Sound

from gpiozero import Button
from signal import pause

pygame.mixer.init()

drum = Sound("samples/Kurzweil-K2000-Dual-Bass-C1.wav")

#while True:
#    drum.play()

button = Button(2)
button.when_pressed = drum.play
pause()

