#! /usr/bin/python
import RPi.GPIO as GPIO ## Import GPIO library
GPIO.setmode(GPIO.BOARD) ## Use board pin numbering
GPIO.setup(18, GPIO.OUT) ## Setup GPIO Pin 7 to OUT
GPIO.output(18,False) ## Turn on GPIO pin 7