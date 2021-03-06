<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="it" xml:lang="it">
	
	<head>
		<title>
			Contatti - Experience Gym
		</title>
		
		<link rel="stylesheet" href="CSS/desktop.css" type="text/css" media="screen" charset="utf-8"/>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="title" content="Experience Gym" />
		<meta name="description" content="Contatti del sito web Experience Gym" />
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
					<span xml:lang="en">
						<a href="index.php">Home</a>
					</span>
				</li>
				<li>
					<a href="informazioni_generali.php">Informazioni generali</a>
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
					<span class="blocco">
                        Contatti
                    </span>
				</li>
			</ul>
		</div><!-- chiudo nav -->
		
		<div id="path"><!-- apro path NB io ho scambiato la posizione nella STRUTTURA  con "nav" (prima:1=path, 2=nav ; ora 1=nav, 2=path -->	
			<span>
				Ti trovi in:
			</span>
			<span>
				Home>>Contatti
			</span>
		</div><!-- chiudo path -->	

		<div id="main">

			<div id="content">
				<h2>CONTATTI</h2>
					<dl>
						<dt>Mail</dt>
							<dd>experience.gym@mail.com</dd>
						<dt>Telefono</dt>
							<dd>+39 041102013</dd>
						<dt>Fax</dt>
							<dd>+39 041102013</dd>
						<dt>Indirizzo</dt>
							<dd>Via F.felice 300/A, Thalassa, Italia</dd>
						<dt>Partita IVA</dt>
							<dd>0764352056C</dd>
					</dl>			
			</div><!-- chiudo contenuto -->


		</div><!-- chiudo main -->

		<?php
			include 'templates/footer.txt';
		?>
	</body><!-- chiudo body -->
</html>
