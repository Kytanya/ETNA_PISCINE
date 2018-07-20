<?php
require_once "bdd.php";
    if (isset($_POST['dbname']))
        $dbname = $_POST['dbname'];
    else
    {
        error($_POST['dbname']);
        die();
    }
    if (isset($_POST['dbnewname']))
        $dbnewname = $_POST['dbnewname'];
    else
    {
        error($_POST['dbnewname']);
        die();
    }
    echo $dbname;
    $bdd->useDatabase($dbname);
    $bdd->renameDatabase($dbnewname);
    header("Location: index.php");
?>