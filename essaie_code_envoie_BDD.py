import MySQLdb
bdd = MySQLdb.connect(host="localhost",user="root",passwd="root",db="serre")  # remplacer les xxx et yyy par votre login et mdp mysql
req = bdd.cursor()
#envoi à la base de donnée
try:
	req.execute("""insert into `test` (`Température`,`Humidité`) values (%s,%s)""",(26,54,))
	bdd.commit()
except:
	bdd.rollback()
	#fermeture de la connexion
bdd.close()