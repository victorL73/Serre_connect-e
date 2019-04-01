<!DOCTYPE HTML>
<!--
	Dimension by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Serre autonome By Victor Lerivray</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="logo">
							<span class="icon fa-diamond"></span>
						</div>
						<div class="content">
							<div class="inner">
								<h1>Bienvenue sur le site de la serre connectée</h1> 

								<?php
									try
									{
										// On se connecte à MySQL
										$bdd = new PDO('mysql:host=localhost;dbname=serre;charset=utf8', 'root', 'root');
									}
									catch(Exception $e)
									{
										// En cas d'erreur, on affiche un message et on arrête tout
											die('Erreur : '.$e->getMessage());
									}

									// Si tout va bien, on peut continuer

									// On récupère tout le contenu de la table jeux_video
									$reponse = $bdd->query('SELECT * FROM   Mesure WHERE  ID_Mesure=(SELECT MAX(ID_Mesure) FROM Mesure)');

									// On affiche chaque entrée une à une
									while ($donnees = $reponse->fetch())
									{
								?>
								<p>Mesure N° <?php echo $donnees['ID_Mesure']; ?> Faite le <?php echo $donnees['Date_de_mesure']; ?>  Temperature : <?php echo $donnees['Température']; ?>°C   Humidité : <?php echo $donnees['Humidité']; ?>% </p>
								<?php
}

									$reponse->closeCursor(); // Termine le traitement de la requête

									?>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="#passwd">tableau de bord</a></li>
								<li><a href="#work">Travaille</a></li>
								<li><a href="#last">last hours</a></li>
								<li><a href="#contact">Contact</a></li>
								<li><a href="#elements">Elements</a></li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- tableau de bord -->
							<article id="TB">
								<h2 class="major">tableau de bord</h2>
								<span class="image main"><img src="images/pic08.png" alt="" /></span>
										<h4>Activation : </h4>
									<div class="table-wrapper">
										<table>
											<thead>
												<tr>
													<th>Boutons</th>
													<th>ON</th>
													<th>OFF</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>lumieres</td>
													<form action="lumieres.php" method="post">
													<td><input type="submit" name="executer" value="ON" class="button primary" id="ON"></td>
													<td><input type="submit" name="executer" value="OFF" class="button primary" id="OFF"></td></form>
												</tr>
												<tr>
													<td>pompe</td>
													<form action="pompe.php" method="post">
													<td><input type="submit" name="executer" value="ON" class="button primary" id="ON"></td>
													<td><input type="submit" name="executer" value="OFF" class="button primary" id="OFF"></td></form>
												</tr>
												<tr>
													<td>chauffage</td>
													<form action="chauffage.php" method="post">
													<td><input type="submit" name="executer" value="ON" class="button primary" id="ON"></td>
													<td><input type="submit" name="executer" value="OFF" class="button primary" id="OFF"></td></form>
												</tr>
												<tr>
													<td>Ventilos</td>
													<form action="ventilo.php" method="post">
													<td><input type="submit" name="executer" value="ON" class="button primary" id="ON"></td>
													<td><input type="submit" name="executer" value="OFF" class="button primary" id="OFF"></td></form>
												</tr>
											</tbody>
										</table>
									</div>
								
								</article>

						<!-- Work -->
							<article id="work">
								<h2 class="major">Travaille</h2>
								<span class="image main"><img src="images/travaille.png" alt="" /></span>
								<p>ici vous pouvez retrouver tout mes codes ainci que les plants de la serre.<br><br></p>
								
								
									<li><a href="#elec" class="button primary">partie éléctronique</a></li><br>
									<li><a href="#info" class="button primary">partie informatique</a></li><br>
									<li><a href="documents\documents.rar" class="button primary icon fa-download">Télécharger HTML de la page web</a></li><br>
									<li><a href="https://github.com/victorL73/Serre_connect-e" class="button primary">mon github</a></li><br>


							</article>
							
							<!-- partie electronique -->
							<article id="elec">
								<h2 class="major">éléctronique</h2>
								<span class="image main"><img src="images/elec.png" alt="" /></span>
								<p>ici toute la partie éléctronique : </p>
								<li><a href="#capteur1" class="button primary">montage du capteur température/humidité</a></li><br>
								<li><a href="#relai" class="button primary">montage de la pompe</a></li>

							</article>
							<!-- password -->
							<article id="passwd">
								<h2 class="major">mot de passe </h2>
								<span class="image main"><img src="images/elec.png" alt="" /></span>
								<p>Veuillez entrer le mot de passe pour obtenir les codes d'accès au serveur de la serre</p>
								<form action="secret.php" method="post">
								<p>
								<input type="password" name="mot_de_passe" />
								<input type="submit" value="Valider" />
								</p>
								</form>
							</article>
							<!-- partie informatique -->
							<article id="info">
								<h2 class="major">informatique</h2>
								<span class="image main"><img src="images/info.png" alt="" /></span>
								<p>ici toute la partie informatique : </p>
								<li><a href="#WEB" class="button primary">creation et configuration du serveur apache2 </a></li><br>
								<li><a href="#BDD" class="button primary">creation et configuration de la Base de Données </a></li><br>
								<li><a href="#auto" class="button primary">automatisation des données </a></li><br>
								<li><a href="#secu" class="button primary">securisation de l'acces a la gestion</a></li><br>


							</article>
							<!-- securisation -->
							<article id="secu">
								<h2 class="major">securisation de l'acces a la gestion</h2>
								<span class="image main"><img src="images/info.png" alt="" /></span>
								<p>tout ca est bien beau mais pour ne pas que tout le monde puisse jouer avec votre serre nous allons mettre un mot de passe. pour se faire nous allons ajouter un <code> < form> </code>avec un espace pour mettre le mdp ainci qu'un bouton pour valider : </p>
								<pre><code>< form action="secret.php" method="post">
< p>
< input type="password" name="mot_de_passe" />
< input type="submit" value="Valider" />
< /p>
< /form> </code></pre>
<p>ce programe redirige vers un programe secondaire "secret.php" qui contien la verrification du mot de passe </p>

								<pre><code>< !DOCTYPE html>
< html>
	< head>
		< title>Serre autonome By Victor Lerivray< /title>
		< meta charset="utf-8" />
		< meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		< link rel="stylesheet" href="assets/css/main.css" />
		< noscript>< link rel="stylesheet" href="assets/css/noscript.css" />< /noscript>
	< /head>
	< body class="is-preload">
    
        < ?php
    if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "tonmotdepasse") // Si le mot de passe est bon
    {
    // On affiche les codes
    ?>
        < h1>clic ici pour acceder au site < /h1>
		< li>< a href="index.php#TB" class="button primary">site !< /a>< /li>
        < ?php
    }
    else // Sinon, on affiche un message d'erreur
    {
        echo '< p>Mot de passe incorrect< /p>';
    }
    ?>
    
        
    < /body>
< /html>
							</code></pre>

							</article>
						<!-- Last hour -->
							<article id="last">
								<h2 class="major">12 dernières données</h2>
								<span class="image main"><img src="images/pic07.png" alt="" /></span>
								<p> 12 dernières données </p>
								<?php
									try
									{
										// On se connecte à MySQL
										$bdd = new PDO('mysql:host=localhost;dbname=serre;charset=utf8', 'root', 'root');
									}
									catch(Exception $e)
									{
										// En cas d'erreur, on affiche un message et on arrête tout
											die('Erreur : '.$e->getMessage());
									}

									// Si tout va bien, on peut continuer

									// On récupère tout le contenu de la table jeux_video
									$reponse = $bdd->query('SELECT * FROM Mesure ORDER BY `ID_Mesure` DESC LIMIT 0, 12');

									// On affiche chaque entrée une à une
									while ($donnees = $reponse->fetch())
									{
								?>
								<p>Mesure N° <?php echo $donnees['ID_Mesure']; ?> Faite le <?php echo $donnees['Date_de_mesure']; ?>  Temperature : <?php echo $donnees['Température']; ?>°C   Humidité : <?php echo $donnees['Humidité']; ?>% </p>
								<?php
}

									$reponse->closeCursor(); // Termine le traitement de la requête

									?>
								
								
							</article>
							
							<!-- serveur WEB -->
							<article id="WEB">
								<h2 class="major">Serveur WEB Apache2</h2>
								<span class="image main"><img src="images/apache2.png" alt="" /></span>
								<p>pour povoir afficher nos donnees partout dans le monde nous allons cree un serveur apache2 sur nore raspberry :</p>
								<p>pour cela ouvrer le terminal et telecharger apache2 via la commande <code>apt-get install apache2</code></p>
								<p>et voila votre site est operationel dans le registre <code>/var/www/html</code></p>
								<p>vous pouver y placer les fichier de ce site situer dans ce <a href="documents\documents.rar">document rar</a> </p>

							</article>
						<!-- Base de données -->
							<article id="BDD">
								<h2 class="major">Base de données</h2>
								<span class="image main"><img src="images/pic05.png" alt="" /></span>
								<p>alors pour pouvoir stoquer, taiter et afficher nos données nous allons crée une BDD (Base De Données)  </p>
								<p>pour commencer nous allons telecharger plusieurs choses grace a la commande <code>apt-get install :</code></p>
									<ul>
									<li>mysql-server</li>
									<li>phpmyadmin</li>
									<li>php</li>
									</ul>
								<p>maintenant vous pouver vous connecter a votre serveur via votre navigateur en tapant <code>http://localhost/phpmyadmin/</code> ou <code>http://votreip/phpmyadmin/</code> si vous etes pas directement sur la raspberry</p>
								<p>vous etes donc sur la page d'administration de phpmyadmin, connecter vous avec vos identifiants</p>
								<p>puis cree votre BDD ainsi que votre table avec le nom de vos données</p>
								<p>votre BDD est donc finit et prete a etre exploitée</p>
							</article>
							
							<!-- automatisation -->
							<article id="auto">
								<h2 class="major">automatisation des données </h2>
								<span class="image main"><img src="images/pic06.png" alt="" /></span>
								<p>pour avoir une mise a joure reguliere de données il faut automatiser le lancement des scripts des <a href="#elec">differents capteurs ou relais</a></p>
								<p>nous allons donc taper la commande <code>crontab -e</code>pour acceder au crontab (parametre pour lancer des programes avec une recurence)</p>
								<p>et placer le code suivant pour l'executer toutes les heurs </p>
								<pre><code>0 */1 * * * python3  /home/pi/Documents/code_envoie_BDD_DHT22_capteur.py</code></pre>
								<p>pour executer le scripte de recuperation des données du capteur DHT22 toutes les heurs ou bien :</p>
								<pre><code>0 7 * * * python3  /home/pi/Documents/relais/lumiere/lumieres_on.py</code></pre>
								<p> pour allumer (ou eteindre) la lumiere toutes les jours a 7h </p>
								<p>( <a href="https://www.domo-blog.fr/editer-la-crontab-du-raspberry/">ici pour avoir plus de documentation sur crontab</a>)</p>


							</article>
						
						<!-- capteur AM2302-DHT22 -->
							<article id="capteur1">
								<h2 class="major">capteur AM2302</h2>
								<span class="image main"><img src="images/pic04.png" alt="" /></span>
								<p>mon premier capteur est un AM2302 capteur d'humidité et de température :</p>								
								<span class="image main"><img src="images/DHT22-AM2302.jpg" alt="" /></span>
								<p>avec son cablage :</p>								
								<span class="image main"><img src="images/DHT22_cablage.jpg" alt="" /></span>
								
								<p>code qui recupere les donner du capteur hygrometrique et les envoie sur le serveur MySQL :</p>
								<p>lien pour telecharger la library <a href="https://github.com/adafruit/Adafruit_Python_DHT"> adafruit </a> </p>
								<p> et MySQLdb avec la commande : <code>apt-get install python-mysqldb</code></p>
								<pre><code>import Adafruit_DHT
import MySQLdb

sensor = Adafruit_DHT.DHT22


pin = 21


humidity, temperature = Adafruit_DHT.read_retry(sensor, pin)


if humidity is not None and temperature is not None:
    print('Temp={0:0.1f}*C  Humidity={1:0.1f}%'.format(temperature, humidity))

	
else:
    print('Echec de lecture. Essayez encore!')
	
bdd = MySQLdb.connect(host="localhost",user="root",passwd="root",db="serre")  # remplacer les xxx et yyy par votre login et mdp mysql
req = bdd.cursor()
#envoi à la base de donnée
try:
	req.execute("""insert into `test` (`Température`,`Humidité`) values (%s,%s)""",(temperature,humidity))
	print('envoie terminer !')
	bdd.commit()
except:
	bdd.rollback()
	#fermeture de la connexion
bdd.close()</code></pre>
							</article>
							
							<!-- relai -->
							<article id="relai">
								<h2 class="major">Relais</h2>
								<span class="image main"><img src="images/pic04.png" alt="" /></span>
								<p>pour arroser,eclairer, ventiler ou bien rechaufer nos jolies plantes, nous allons utiliser un relai c'est un interupteur commander electroniquement. </p>								
								<span class="image main"><img src="images/relai.jpg" alt="" /></span>
								<p>avec les branchemants suivant pour chaques objets: <p>
								<span class="image main"><img src="images/cablage_relai.png" alt="" /></span>
								<p>apres avoir brancher notre relai sur la raspberry nous allons faire un petit programme en python pour allumer ou eteindre ce relais : </p>
								<pre><code>#! /usr/bin/python
import RPi.GPIO as GPIO ## Import GPIO library
GPIO.setmode(GPIO.BOARD) ## Use board pin numbering
GPIO.setup(7, GPIO.OUT) ## Setup GPIO Pin 7 to OUT
GPIO.output(7,False) ## Turn on GPIO pin 7</code></pre>
								<p> et remplacer le <code>False</code> par un <code>True</code> pour pouvoir etteindre le relai</p>
								<p><a href="https://blog.bandinelli.net/index.php?post/2015/07/18/Raspberry-Pi%2C-un-relai%2C-quelques-branchements-%3A-interrupteur-intelligent"> petit blog avec pas mal de petites fonction  </a> </p>
								<p>tout ce si est bien beau mais maintenant commant allons nous interagire avec lui par notre page web ? </p>
								<p>je vous laisse donc la magnifique site ainsi que sa video de notre cher Tommy Desrochers <a href="https://td72pro.com/tutoriel-controle-des-gpio-du-raspberry-pi-a-partir-dune-page-web/">sur le sujet </a></p>
								ainsi que mon code personelle : (j'ai juste mis le tout dans un tableau) 
								
								<pre><code>
< td>lumieres< /td>
< form action="lumieres.php" method="post">
< td>< input type="submit" name="executer" value="ON" class="button primary" id="ON">< /td>
< td>< input type="submit" name="executer" value="OFF" class="button primary" id="OFF">< /td>
< /form>
< /tr > </code></pre>
							</article>
							
						<!-- Contact -->
							<article id="contact">
								<h2 class="major">Contact</h2>
								<form method="post" action="#">
									<div class="fields">
										<div class="field half">
											<label for="name">Name</label>
											<input type="text" name="name" id="name" />
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" />
										</div>
										<div class="field">
											<label for="message">Message</label>
											<textarea name="message" id="message" rows="4"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="primary" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</form>
								<ul class="icons">
									<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
								</ul>
							</article>

						<!-- Elements -->
							<article id="elements">
								<h2 class="major">Elements</h2>

								<section>
									<h3 class="major">Text</h3>
									<p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
									This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
									This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.</p>
									<hr />
									<h2>Heading Level 2</h2>
									<h3>Heading Level 3</h3>
									<h4>Heading Level 4</h4>
									<h5>Heading Level 5</h5>
									<h6>Heading Level 6</h6>
									<hr />
									<h4>Blockquote</h4>
									<blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
									<h4>Preformatted</h4>
									<pre><code>i = 0;

while (!deck.isInOrder()) {
    print 'Iteration ' + i;
    deck.shuffle();
    i++;
}

print 'It took ' + i + ' iterations to sort the deck.';</code></pre>
								</section>

								<section>
									<h3 class="major">Lists</h3>

									<h4>Unordered</h4>
									<ul>
										<li>Dolor pulvinar etiam.</li>
										<li>Sagittis adipiscing.</li>
										<li>Felis enim feugiat.</li>
									</ul>

									<h4>Alternate</h4>
									<ul class="alt">
										<li>Dolor pulvinar etiam.</li>
										<li>Sagittis adipiscing.</li>
										<li>Felis enim feugiat.</li>
									</ul>

									<h4>Ordered</h4>
									<ol>
										<li>Dolor pulvinar etiam.</li>
										<li>Etiam vel felis viverra.</li>
										<li>Felis enim feugiat.</li>
										<li>Dolor pulvinar etiam.</li>
										<li>Etiam vel felis lorem.</li>
										<li>Felis enim et feugiat.</li>
									</ol>
									<h4>Icons</h4>
									<ul class="icons">
										<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
									</ul>

									<h4>Actions</h4>
									<ul class="actions">
										<li><a href="#" class="button primary">Default</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
									<ul class="actions stacked">
										<li><a href="#" class="button primary">Default</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
								</section>

								<section>
									<h3 class="major">Table</h3>
									<h4>Default</h4>
									<div class="table-wrapper">
										<table>
											<thead>
												<tr>
													<th>Name</th>
													<th>Description</th>
													<th>Price</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Item One</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Two</td>
													<td>Vis ac commodo adipiscing arcu aliquet.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Three</td>
													<td> Morbi faucibus arcu accumsan lorem.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Four</td>
													<td>Vitae integer tempus condimentum.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Five</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td colspan="2"></td>
													<td>100.00</td>
												</tr>
											</tfoot>
										</table>
									</div>

									<h4>Alternate</h4>
									<div class="table-wrapper">
										<table class="alt">
											<thead>
												<tr>
													<th>Name</th>
													<th>Description</th>
													<th>Price</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Item One</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Two</td>
													<td>Vis ac commodo adipiscing arcu aliquet.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Three</td>
													<td> Morbi faucibus arcu accumsan lorem.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Four</td>
													<td>Vitae integer tempus condimentum.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Five</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td colspan="2"></td>
													<td>100.00</td>
												</tr>
											</tfoot>
										</table>
									</div>
								</section>

								<section>
									<h3 class="major">Buttons</h3>
									<ul class="actions">
										<li><a href="#" class="button primary">Primary</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
									<ul class="actions">
										<li><a href="#" class="button">Default</a></li>
										<li><a href="#" class="button small">Small</a></li>
									</ul>
									<ul class="actions">
										<li><a href="#" class="button primary icon fa-download">Icon</a></li>
										<li><a href="#" class="button icon fa-download">Icon</a></li>
									</ul>
									<ul class="actions">
										<li><span class="button primary disabled">Disabled</span></li>
										<li><span class="button disabled">Disabled</span></li>
									</ul>
								</section>

								<section>
									<h3 class="major">Form</h3>
									<form method="post" action="#">
										<div class="fields">
											<div class="field half">
												<label for="demo-name">Name</label>
												<input type="text" name="demo-name" id="demo-name" value="" placeholder="Jane Doe" />
											</div>
											<div class="field half">
												<label for="demo-email">Email</label>
												<input type="email" name="demo-email" id="demo-email" value="" placeholder="jane@untitled.tld" />
											</div>
											<div class="field">
												<label for="demo-category">Category</label>
												<select name="demo-category" id="demo-category">
													<option value="">-</option>
													<option value="1">Manufacturing</option>
													<option value="1">Shipping</option>
													<option value="1">Administration</option>
													<option value="1">Human Resources</option>
												</select>
											</div>
											<div class="field half">
												<input type="radio" id="demo-priority-low" name="demo-priority" checked>
												<label for="demo-priority-low">Low</label>
											</div>
											<div class="field half">
												<input type="radio" id="demo-priority-high" name="demo-priority">
												<label for="demo-priority-high">High</label>
											</div>
											<div class="field half">
												<input type="checkbox" id="demo-copy" name="demo-copy">
												<label for="demo-copy">Email me a copy</label>
											</div>
											<div class="field half">
												<input type="checkbox" id="demo-human" name="demo-human" checked>
												<label for="demo-human">Not a robot</label>
											</div>
											<div class="field">
												<label for="demo-message">Message</label>
												<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
											</div>
										</div>
										<ul class="actions">
											<li><input type="submit" value="Send Message" class="primary" /></li>
											<li><input type="reset" value="Reset" /></li>
										</ul>
									</form>
								</section>

							</article>

					</div>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>

