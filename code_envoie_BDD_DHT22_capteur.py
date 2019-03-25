import Adafruit_DHT
import MySQLdb
import datetime
sensor = Adafruit_DHT.DHT22
pin = 21


humidity, temperature = Adafruit_DHT.read_retry(sensor, pin)
date = datetime.datetime.now()

if humidity is not None and temperature is not None:
    print('Temp={0:0.1f}*C  Humidity={1:0.1f}%'.format(temperature, humidity))

	
else:
    print('Echec de lecture. Essayez encore!')
	
bdd = MySQLdb.connect(host="localhost",user="root",passwd="root",db="serre")  # remplacer les xxx et yyy par votre login et mdp mysql
req = bdd.cursor()
#envoi à la base de donnée
try:
	req.execute("""insert into `Mesure` (`Température`,`Humidité`) values (%s,%s)""",(temperature,humidity))
	print('envoie terminer !')
	bdd.commit()
except:
	bdd.rollback()
	#fermeture de la connexion
bdd.close()
str(date)
print (date)