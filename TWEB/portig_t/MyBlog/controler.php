<?php

$user = 'root';
$password = 'root';
$db = 'My_Blog';
$host = '127.0.0.1';
$port = 3306;
$socket = '127.0.0.1:/Applications/MAMP/tmp/mysql/mysql.sock';

$link = mysqli_init ();
$success = mysqli_real_connect (
   $link, 
   $host, 
   $user, 
   $password,
   $db,
   $port,
   $socket
);

$error= 0;
$login = '';
$psw = '';

if (!empty($_POST['Password']) && (!empty($_POST['Login'])))
{	
  $login=$_POST['Login'];
  $psw=$_POST['Password'];
  $request = "SELECT * FROM User where Login = '$login'";
  $test= $link->query($request);
  $row=$test->fetch_assoc();
  if ($row['Password'] != $psw)
    $error++;
}
  else
    $error++;

if ($error==0)
{
	session_start();
	$_SESSION['login']=$login;
	header('Location:/accueil.php');
die ('redirection vers: localhost');
}

else
	header('Location:/index.php');
die ('redirection vers: localhost');
