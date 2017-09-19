#
# https://www.raspberrypi.org/learning/gpio-music-box/worksheet/
# 
#

import pygame.mixer
from pygame.mixer import Sound

from gpiozero import Button
from signal import pause

pygame.mixer.init()

button_sounds = {
    Button(2): Sound("samples/Kurzweil-K2000-Dual-Bass-C1.wav"),
    Button(3): Sound("samples/Kurzweil-K2000-Steel-Str-Guitar-C4.wav"),
}

#while True:
#    drum.play()

for button, sound in button_sounds.items():
    button.when_pressed = sound.play

pause()

