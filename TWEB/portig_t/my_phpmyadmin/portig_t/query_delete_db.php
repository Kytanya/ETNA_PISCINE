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
    $bdd->useDatabase($dbname);
    $bdd->deleteDatabase();
    header("Location: index.php");
?>