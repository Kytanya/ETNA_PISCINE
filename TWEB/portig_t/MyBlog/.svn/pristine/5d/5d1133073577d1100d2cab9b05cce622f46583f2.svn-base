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

$login = '';
$psw = '';
$description = '';
$Titre = '';
$resume = '';
$error = 0;

if (!empty($_POST['titre']))
    $titre=$_POST['titre'];
  else 
    $error++;
if (!empty($_POST['resume'])) 
    $resume=$_POST['resume'];
if (!empty($_POST['description']))
    $description=$_POST['description'];
if ($error == 0)
{
  $request = "INSERT INTO `Articles` (`ID`,`description`, `titre`, `resume`) VALUES ('','".$description."', '".$titre."', '".$resume."')";

$test= $link->query($request);

header('Location:/accueil.php');
die ('redirection vers: localhost');
}

else
{
  header('Location:/articles.php');
die ('redirection vers: localhost');
}


