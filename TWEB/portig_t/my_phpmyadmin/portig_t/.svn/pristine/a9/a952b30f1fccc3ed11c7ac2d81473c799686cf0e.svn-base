<!doctype html>
<html>
<head>
    <title> praise my_admin </title>
    <meta charset="utf-8"> </meta>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
require_once "bdd.php";

if (isset ( $_GET['return_error'])) {
    $r_error = htmlentities($_GET['return_error']);
    echo '<div class="alert alert-danger">.yes_error::'. $r_error .'</div>';
} else {
    echo '<div class="alert alert-success">no_error</div>';
}
?>
<div class="header">
    <nav class="navbar navbar-light">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item"><a class="nav-link" href="?ctrl=create_db">create_database</a></li>
        <li class="nav-item"><a class="nav-link" href="?ctrl=rename_db">rename_database</a></li>
        <li class="nav-item"><a class="nav-link" href="?ctrl=delete_db">delete_database</a></li>
        <li class="nav-item"><a class="nav-link" href="?ctrl=stats_db">stats_database</a></li>
        </ul>
    </nav>
</div>
<hr>
<div class="jumbotron">
<h1>My_Admin</h1>
<?php
    if (isset($_GET['ctrl']))
        $ctrl = htmlentities($_GET['ctrl']);
    else
        $ctrl = "default";
        switch ($ctrl) {
            case 'create_db':
                include_once "form_create_db.php";
                break;
            case 'rename_db':
            include_once "form_rename_db.php";
                break;
            case 'delete_db':
            include_once "form_delete_db.php";
                break;
            case 'stats_db':
            include_once "form_stats_db.php";
                break;
            case 'stats_db_show':
            if (isset($_GET['dbname']))
            {
                $dbname = htmlentities($_GET['dbname']);
                $bdd->useDatabase($dbname);
                $bdd->statsDatabase();
            }
            if (!isset($_GET['dbname']))
            {
                error("DB NAME UNDEFINED ".$dbname);
            }
                break;
            case 'stats_dbs':
            $bdd->statsDatabases();
                break;
            default:
                ?>
                    <p class="lead">mini clonde de phpmyadmin</p>
                    <p><a class="btn btn-lg btn-success" href="info.php">Information PHP</a></p>
                    <p><a class="btn btn-lg btn-info" href="?ctrl=stats_dbs">Statistiques des base de données</a></p>
                <?php
            break;
        }
?>
</div>
</body>
<script src="js/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/script.js"></script>
</html>