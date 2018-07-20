<?php
include 'deleteFromSql.php';

if (!empty($_GET['algo_result']))
{
  $array = json_decode(str_replace("'", '"', $_GET['algo_result']));
}

if (!empty($_GET['from']) && $_GET['from'] == "algo")
{
	deleteFromSql($array);
}
else if (!empty($_GET['from']) && $_GET['from'] == "override")
{
	deleteFromSql($array);
}

header('Location: command.php?success=true');
?>