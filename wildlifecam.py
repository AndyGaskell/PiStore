# from https://www.electromaker.io/tutorial/blog/build-a-wildlife-camera-using-a-raspberry-pi-and-pijuice

from picamera import PiCamera
from gpiozero import MotionSensor
from datetime import datetime
from time import sleep

sensor = MotionSensor(14)
camera = PiCamera()

print("Waiting for sensor to settle")
sensor.wait_for_no_motion() print("Ready")

while True:
    sensor.wait_for_motion()
    filename = datetime.now().strftime("%H.%M.%S_%Y-%m-%d.jpg")
    camera.capture(filename)
    print("Motion sensed")
    sleep(2)
