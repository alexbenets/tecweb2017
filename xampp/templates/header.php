<div id="header">

			<div  id="login">
            <?php 
                if(isset($_SESSION['id'])){
                    if($_SESSION['sesso']==0){
                        $sesso = 'o, ';
                        }
                    else{
                            $sesso = 'a, ';
                        }
                    $logout = "<a href='../html/scripts/logout.php'>Log out</a>";
                    echo"Benvenut".$sesso.$_SESSION['username']."! ".$logout; 
                } //username oppure nome reale
                else {echo "
                <form action = '../html/scripts/login.php' method = 'post'>
	                <ul>
                    <li><label for='username'>Username:</label><input type='text' id='username' name='username' value='' /></li>
                    <li><label for='password'>Password:</label><input type='password' id='password' name='password' value='' /></li>
                    <li><button type='submit'>Login</button></li>
                    <a href= '../html/registrazionePagina.php'>Registrati</a>
	                </ul>
	            </form>
                
	                ";
	            }
            ?>
	        </div><!-- chiudo login -->

			<div id="banner">
				<div id="logo">
				<a href="index.html"><img src="style/immagini/logo.png" alt="logo"></a>
				</div><!-- chiudo logo -->

				<h1>
					<span xml:lang="eng">
						EXPERIENCE GYM
					</span>
				</h1>

				<h2>
					<span xml:lang="eng">
						Learn to be buff
					</span>
				</h2>	
			</div><!-- chiudo banner -->
			
		</div><!-- chiudo header -->
