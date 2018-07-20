<?php
include 'createTreeView.php';
include 'getCommandArray.php';
include 'getSqlData.php';
include 'algo.php';

if (!empty($_GET['algo_result']))
{
	$json = $_GET['algo_result'];
	$result_algo = json_decode(str_replace("'", '"', $json));
	$treeViewArray = arrayToTreeView($result_algo);
}
else
{
	$commandArray = getCommandArray();
	$parseArray = getSqlData($commandArray);
	$result_algo = algo($parseArray, $commandArray);
	$treeViewArray = arrayToTreeView($result_algo);

	if ($treeViewArray == false)
	{
		header('Location: command.php?error=true');
	}

	$json = str_replace('"', "'", json_encode($result_algo));
}
?>

<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="../css/treeView.css" />
		<link rel="stylesheet" type="text/css" href="../css/pageStyle.css" />
	</head>

	<body>

		<h1>RESULTAT DE L'ALGORITHME</h1>

		<?php
			echo '<div id="content" class="general-style1">';
			displayTreeView($treeViewArray, 0);
			echo '</div>';
		?>

    	<div id="nav-button">
        	<a class="button" href="command.php"><input type="button" value="Annuler" /></a>
        	<?php echo '<a class="button" href="override.php?from=algo&algo_result='.$json.'"><input type="button" value="Override" /></a>'; ?>
        	<?php echo '<a class="button" href="apply.php?from=algo&algo_result='.$json.'"><input type="button" value="Valider" /></a>'; ?>
      	</div>

    	<footer>
      		<a href="https://slack.com/intl/fr-fr" ><img src="../img/slack_logo.png" class="logo_slack" /></a>
      		<img src="../img/logo_vp.jpg" class="logo_vp"/>
    	</footer>
	</body>
</html>