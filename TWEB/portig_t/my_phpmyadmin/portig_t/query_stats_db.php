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
    $bdd->statsDatabase();
    header("Location: index.php?ctrl=stats_db_show&dbname=".$dbname);
?>