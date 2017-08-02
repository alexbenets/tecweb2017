<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
session_start();
?>
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
            <h2>PROFILO</h2>
            <?php
            if(isset($_SESSION['id'])){
            //inizializzare le variabili $corsi(array di tutti i corsi fatti dall'utente), abbonamento ecc
            if($_SESSION['sesso']==0){
				$sesso = "M";
			}
			else{
				$sesso = "F";
			}
            foreach($corsi as $corso){
				$listacorsi.= "<li><a href = 'corsi#.$corso'>$corso</a></li>\n";
			}
			echo "
            <div id='DatiProfilo'>
				<form action = 'modificaDati.php'>
					<ul>
						<li>Nome: ".$_SESSION['nome']."</li>
						<li>Cognome: ".$_SESSION['cognome']."</li>
						<li>Data di anscita: ".$_SESSION['data_nascita']."</li>
						<li>Codice fiscale: ".$_SESSION['CF']."</li>
						<li>Sesso: ".$sesso."</li>
						<li>Indirizzo: ".$_SESSION['indirizzo']."</li>
						<li>Citta: ".$_SESSION['citta']."</li>
						<li>Peso: ".$_SESSION['peso']."</li>
						<li>Altezza: ".$_SESSION['altezza']."</li>
						<li><button>Modifica dati</button></li>
					</ul>
				</form>
            </div>
			<div id='DatiCorsi'>
				<form action = 'schedaPersonale.php'>
					<ul>
						<li>Tipo Abbonamento: ".$abbonamento."</li>
						<li>Scadenza: </li>
						<li>Corsi:</li>
						<li><button type = 'submit'>Vedi scheda allenamento</button></li>
						
						<li><a href = 'storico.txt'>Storici abbonamenti e schede</a></li>
					</ul>
				</form>
			
			</div>";}
			else
			echo "Devi essere loggato per accedere ai dati del profilo";
			?>
		</div><!-- chiudo main -->
		<?php
			include 'templates/footer.txt';
		?>
	</body><!-- chiudo body -->
</html>
