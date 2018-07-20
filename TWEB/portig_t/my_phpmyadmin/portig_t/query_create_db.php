<?php
require_once "bdd.php";
    if (isset($_POST['dbname']))
        $dbname = $_POST['dbname'];
    else
    {
        error($_POST['dbname']);
        die();
    }
    echo $dbname;
    $bdd->createDatabase($dbname);
    header("Location: index.php");
?>