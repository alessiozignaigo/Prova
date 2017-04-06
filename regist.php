<?php
/**
 * Created by PhpStorm.
 * User: matteo
 * Date: 06/04/2017
 * Time: 10:18
 */
$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$pass = $_POST['password'];

$f = fopen("/private/db.txt", 'w');
if(!$f) die ("Errore nella operazione con il file");

fwrite($f, $nome.'\n');
fwrite($f, $cognome.'\n');
fwrite($f, $gender.'\n');
fwrite($f, $email.'\n');
fwrite($f, $password.'\n');

fclose($f);


?>