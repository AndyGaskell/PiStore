# Import GPIO
import RPi.GPIO as GPIO

# Import sleep
from time import sleep

# Set the GPIO mode
GPIO.setmode(GPIO.BCM)

# Define GPIO pins
#MotorNeg = 27
#MotorPos = 24
#MotorEnable = 5

#MotorNeg = 22
#MotorPos = 6
#MotorEnable = 17

#MotorNeg = 16
#MotorPos = 23
#MotorEnable = 12

MotorNeg = 18
MotorPos = 13
MotorEnable = 25


# Set up defined GPIO pins
GPIO.setup(MotorNeg,GPIO.OUT)
GPIO.setup(MotorPos,GPIO.OUT)
GPIO.setup(MotorEnable,GPIO.OUT)

# We then tell the code to turn certain pins on or off to make the motor move:

# Turn the motor on
GPIO.output(MotorNeg,GPIO.HIGH) # GPIO high to send power to the + terminal
GPIO.output(MotorPos,GPIO.LOW) # GPIO low to ground the - terminal
GPIO.output(MotorEnable,GPIO.HIGH) # GPIO high to enable this motor

# Leave the motor on for 3 seconds
sleep(3)

# Stop the motor by 'turning off' the enable GPIO pin
GPIO.output(MotorEnable,GPIO.LOW)

# Always end this script by cleaning the GPIO
GPIO.cleanup() 