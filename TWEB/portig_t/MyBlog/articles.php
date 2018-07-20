<?php
session_start();
if (empty($_SESSION))
{
  header('Location:/index.php');
die ('redirection vers: localhost');
}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
    <meta charset="utf-8" />
    <title>My_Blog</title>
</head>
<body>
    <h1 id='main-title'>My_Blog</h1>

    <form action="info.php" method="post">
		<div id='menu-first'>
        	<p>Titre : <input type="text" name="titre" /></p>
        	<p>Description : <textarea type="text" name=description></textarea></p>
        	<p>Resume : <textarea rows="10" type="text" name="resume" ></textarea></p>
        	<input type="submit" value='Creation article'/>
        </div>
    </form>
</body>
</html>