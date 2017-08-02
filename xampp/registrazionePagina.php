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
            <div id="registrazione">
                <form action='../html/scripts/signup.php' method='post'>
                    <h2>REGISTRAZIONE</h2>
                      <?php
                        $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                        if(strpos($url,"error=empty") !== false){
                            echo "<span id='errortxt'>Per registrarsi è necessario completare tutto il form</span>";
                        }
                        else if(strpos($url,'error=CF')){
                            echo "<span id='errortxt'>Un utente si è già registrato con questo codice fiscale, presentarsi in segreteria per risolvere il problema</span>";
                        }
                        else if(strpos($url,"error=username") !== false){
                            echo "<span id='errortxt'>Un utente con questo username è già presente, si prega di sceglierne un altro</span>";
                        }
                        else if(strpos($url,'error=password')!==false){
							echo "<span id='errortxt'>La password deve avere un minimo di 6 caratteri</span>";
						}
                        ?>
                       <ul>
                           <li><label for='Nome'>Nome:</label><input type='text' id='nome' name='nome' value="<?php if(isset($_SESSION['nome'])){echo $_SESSION['nome'];}?>" /></li>
                           <li><label for='Cognome'>Cognome:</label><input type='text' id='cognome' name='cognome' value="<?php if(isset($_SESSION['cognome'])){echo $_SESSION['cognome'];}?>" /></li>
                           <li><label for='Data_Nascita'>Data di nascita:type='date' oppure type='text'</label><input type='date' id='data_nascita' name='data_nascita' value="<?php if(isset($_SESSION['data_nascita'])){echo $_SESSION['data_nascita'];}?>" /></li>
                           <li><label for='CF'>Codice fiscale:</label><input type='text' id='CF' name='CF' value="<?php if(isset($_SESSION['CF'])){echo $_SESSION['CF'];}?>" /></li>
                           <li><label for='Sesso'>Sesso:</label><input type='radio' id='sesso' name='sesso' value="M" <?php if(isset($_SESSION['sesso']) and $_SESSION['sesso']==0){echo "checked";}?> />
								<label for='Sesso'>Sesso:</label><input type='radio' id='sesso' name='sesso' value="F" <?php if(isset($_SESSION['sesso']) and $_SESSION['sesso']==1){echo "checked";}?>/>
                           </li>
                           <li><label for='Indirizzo'>Indirizzo:</label><input type='text' id='indirizzo' name='indirizzo' value="<?php if(isset($_SESSION['indirizzo'])){echo $_SESSION['indirizzo'];}?>" /></li>
                           <li><label for='Citta'>Città:</label><input type='text' id='citta' name='citta' value="<?php if(isset($_SESSION['citta'])){echo $_SESSION['citta'];}?>" /></li>
                           <li><label for='Peso'>Peso:</label><input type='' id='peso' name='peso' value="<?php if(isset($_SESSION['peso'])){echo $_SESSION['peso'];}?>" /></li>
                           <li><label for='Altezza'>Altezza:</label><input type='text' id='altezza' name='altezza' value="<?php if(isset($_SESSION['altezza'])){echo $_SESSION['altezza'];}?>" /></li>
                           <li><label for='Username'>Username:</label><input type='text' id='username' name='username' value="<?php if(isset($_SESSION['username'])){echo $_SESSION['username'];}?>" /></li>
                           <li><label for='Password'>Password:</label><input type='password' id='password' name='password' value='' /></li>
                           <li><button type='submit'>Registrati</button></li>
                       </ul>
                        
               </form>
			</div><!-- chiudo registrazione-->
		</div><!-- chiudo main -->

		<?php
			include 'templates/footer.txt';
		?>
	</body><!-- chiudo body -->
</html>
