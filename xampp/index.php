<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="it" xml:lang="it">
	
	<head>
		<title>
			Home - Experience Gym
		</title>
		
		<link rel="stylesheet" href="CSS/desktop.css" type="text/css" media="screen" charset="utf-8"/>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="title" content="Experience Gym" />
		<meta name="description" content="Home page del sito web Experience Gym" />
		<meta name="keywords" content="Experience Gym, palestra, corsi, body" />
		<meta name="language" content="italian it" />
		<meta name="author" content="Experience Gym" />

	</head>

	<body>		
		<?php
		include 'templates/header.php';
		?>
		<div id="nav">
			<ul>
				<li>
					<span xml:lang="en" class="blocco">
						Home
					</span>
				</li>
				<li>
					<a href="informazioni_generali.php">
						Informazioni generali
					</a>
				</li>
				<li>
					<a href="abbonamenti.php">
						Abbonamenti
					</a>
				</li>
				<li>
					<a href="orari.php">
						Orari
					</a>
				</li>
				<li>
					<a href="corsi.php">
						Corsi
					</a>
				</li>
				<li>
					<a href="staff.php">
					<span xml:lang="en">
						Staff
					</span>
					</a>
				</li>
				<li>
					<a href="news.php">
						<span xml:lang="en">
							News
						</span>
					</a>
				</li>
				<li>
					<a href="faq.php">
						<span xml:lang="en">
							FAQ
						</span>
					</a>
				</li>
				<li>
					<a href="contatti.php">
						Contatti
					</a>
				</li>
			</ul>
		</div><!-- chiudo nav -->
		
		<div id="path"><!-- apro path NB io ho scambiato la posizione nella STRUTTURA  con "nav" (prima:1=path, 2=nav ; ora 1=nav, 2=path -->	
			<span>
				Ti trovi in:
			</span>
			<span xml:lang="en">
				Home
			</span>
		</div><!-- chiudo path -->	

		<div id="main">

			
				<div class="articolo">
					<h1>
						BENVENUTI
					</h1>
						<p>
							Volete mantenervi in forma, tonificare i vostri muscoli o ritrovare il vostro benessere? 
							Allora Newline Fitness Center è il posto adatto a voi. Moderne attrezzature e ottimi istruttori saranno al vostro servizio.
						</p>
				</div><!-- chiudo articolo -->
			<?php
            include 'scripts/newsShort.php';
            ?>

		</div><!-- chiudo main -->

		<?php
			include 'templates/footer.txt';
		?>
	</body><!-- chiudo body -->
</html>
