<?php
session_start();
include 'connection.php';
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM utente_registrato WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);
if(!$row = mysqli_fetch_assoc($result))
{
    header("Location: ../login_fallito.php");
}
else
{
    $_SESSION['id'] = $row['ID_PERSONA'];
    $_SESSION['username'] = $row['username']; 
    $ID= $_SESSION['id'];
    $sqlsession = "SELECT * FROM persona WHERE ID_UTENTE = '$ID'";
    $row2 = mysqli_fetch_assoc($sqlsession);
    $_SESSION['nome'] = $row['NOME'];
	$_SESSION['cognome'] = $row['COGNOME'];
	$_SESSION['data_nascita'] = $row['DATA_NASCITA'];
	$_SESSION['CF'] = $row['CODICE_FISCALE'];
	$_SESSION['sesso'] = $row['sesso'];
	$_SESSION['indirizzo'] = $row['indirizzo'];
	$_SESSION['citta'] = $row['citta'];
	$_SESSION['peso'] = $row['peso'];
	$_SESSION['altezza'] = $row['altezza'];
    
    header("Location: ../profilo.php");
}

?>
