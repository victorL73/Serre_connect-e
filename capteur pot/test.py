#!/usr/bin/env python
# -*- coding: latin-1 -*-

# Le Raspberry Pi affiche à l'écran ce que lui envoie l'Arduino 
# http://electroniqueamateur.blogspot.com/2014/05/communication-par-usb-entre-raspberry.html
import MySQLdb
import serial
ser = serial.Serial('/dev/ttyACM0', 9600)
bdd = MySQLdb.connect(host="localhost",user="root",passwd="root",db="serre")  # remplacer les xxx et yyy par votre login et mdp mysql
req = bdd.cursor()
#envoi à la base de donnée
try:
	req.execute("""insert into `pot` (`Pot_1`,`Pot_2`) values (%s,%s)""",(2,54))
	print('envoie terminer !')
	bdd.commit()
except:
	bdd.rollback()
	#fermeture de la connexion
bdd.close()

while 1 :

  	print(ser.readline())
	
