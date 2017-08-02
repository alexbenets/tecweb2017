<?php
session_start();
include 'connection.php';
$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$username = $_POST['username'];
$password = $_POST['password'];
$data_nascita = $_POST['data_nascita'];
$CF = $_POST['CF'];
$sesso = $_POST['sesso'];
$indirizzo = $_POST['indirizzo'];
$citta = $_POST['citta'];
$peso = $_POST['peso'];
$altezza = $_POST['altezza'];

$_SESSION['nome'] = $nome;
$_SESSION['cognome'] = $cognome;
$_SESSION['username'] = $username;
$_SESSION['data_nascita'] = $data_nascita;
$_SESSION['CF'] = $CF;
$_SESSION['sesso'] = $sesso;
$_SESSION['indirizzo'] = $indirizzo;
$_SESSION['citta'] = $citta;
$_SESSION['peso'] = $peso;
$_SESSION['altezza'] = $altezza;
if(empty($nome) or empty($cognome) or empty($username) or empty($password) or empty($data_nascita) or empty($CF) or empty($sesso) or empty($indirizzo) or empty($citta) or empty($peso) or empty($altezza)){
	header("Location: ../registrazionePagina.php?error=empty");
    exit();
}
if(strlen($password)<6)
{
    header("Location: ../registrazionePagina.php?error=password");
    exit();
}
$sqlCF = "SELECT CODICE_FISCALE from persona WHERE CODICE_FISCALE='$CF'";
$checkCF = mysqli_query($conn,$sqlCF);
if (mysqli_num_rows($checkCF) > 0){
  header("Location: ../registrazionePagina.php?error=CF");
  exit();
 }
$sqlusername = "SELECT username FROM utente_registrato WHERE username='$username'";    
$checkusername = mysqli_query($conn,$sqlusername);
if (mysqli_num_rows($checkusername) > 0){
  header("Location: ../registrazionePagina.php?error=username");
  exit();
 }
$sqlpersona = "INSERT into persona (NOME,COGNOME,DATA_NASCITA,CODICE_FISCALE,sesso,indirizzo,citta,peso,altezza) VALUES ('$nome','$cognome','$data_nascita','$CF','$sesso','$indirizzo','$citta','$peso','$altezza') ";
$resultpersona = mysqli_query($conn,$sqlpersona);
$sqlID = "SELECT ID_PERSONA FROM persona WHERE CODICE_FISCALE='$CF'";
$resultID = mysqli_query($conn,$sqlID);
$row = mysqli_fetch_array($resultID);
$ID = $row['ID_PERSONA'];
$sqlcliente = "INSERT into utente_registrato (ID_PERSONA,username, password) VALUES ('$ID','$username','$password')";
$resultcliente = mysqli_query($conn,$sqlcliente);
unset($_SESSION['nome'],
$_SESSION['cognome'],
$_SESSION['data_nascita'],
$_SESSION['CF'],
$_SESSION['sesso'] ,
$_SESSION['indirizzo'],
$_SESSION['citta'] ,
$_SESSION['peso'],
$_SESSION['altezza']);

include 'login.php';

?>
