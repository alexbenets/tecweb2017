<?php

$conn = mysqli_connect("localhost","root","","gym");     //aggiungere i parametri del database. server a cui connettersi, user, pwd, nome del database
if(!$conn)
{
    die("Connessione fallita: ".mysqli_connect_error()); //usare mysqli_connect_error solo per testing
}
?>
