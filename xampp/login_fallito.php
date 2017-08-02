<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="it" xml:lang="it">
	
	<head>
		<title>
			Login fallito - Experience Gym
		</title>
		
		<link rel="stylesheet" href="CSS/desktop.css" type="text/css" media="screen" charset="utf-8"/>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="title" content="Experience Gym" />
		<meta name="description" content="Abbonamenti del sito web Experience Gym" />
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
					<span class="blocco">
                    Abbonamenti
                    </span>
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
			<span>
				Home>>Errore di login
			</span>
		</div><!-- chiudo path -->	

		<div id="main">

			<div id="loginfallito">
                <h2>Errore nel login, riprovare</h2>
	            <form action="login.php" method="post">
	                <ul>
	                    <li><label for="username"><p>Username:</p></label><input type="text" id="username" name="username" value="" /></li>
	                    <li><label for="password"><p>Password:</p></label><input type="password" id="password" name="password" value="" /></li>
                        <li><button type="submit">Login</button></li>
	                </ul>
	            </form>
	            </div><!-- chiudo login -->
        </div><!-- chiudo main -->
            


		<?php
			include 'templates/footer.txt';
		?>
	</body><!-- chiudo body -->
</html>
