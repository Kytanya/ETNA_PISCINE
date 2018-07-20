<?php
include "deleteFromSql.php";

function getOverrideArray()
{
	$numberLine = $_POST['numberLine'];

	$override = array();
	for ($i = 1; $i <= $numberLine; $i++)
	{
		$paletteId = $_POST['paletteId' . $i];
		$boxId = $_POST['boxId' . $i];
		$productId = $_POST['productId' . $i];
		$quantity = $_POST['quantity' . $i];

		$isDuplicate = false;
		for ($j = 0; isset($override[$j]); $j++)
		{
			if ($paletteId == $override[$j][0] &&
				$boxId == $override[$j][1] &&
				$productId == $override[$j][2])
			{
				$override[$j][3] += $quantity;
				$isDuplicate = true;
			}
		}
		if ($isDuplicate == false)
		{
	 		$override[] = [ 'paletteId' => $paletteId, 'boxId' => $boxId, 'productId' => $productId, 'quantity' => $quantity ];
		}
	}
	return $override;
}

function checkOverride($overrideArray)
{
	$overrideArray = getOverrideArray();

	foreach ($overrideArray as $elem)
	{
		try
		{
		    $bdd = new PDO('mysql:host=localhost;dbname=boxdata;charset=utf8', 'root', '');
		}
		catch (Exception $e)
		{
	        die('Erreur : ' . $e->getMessage());
		}

		$response = $bdd->query("SELECT paletteId, boxId, productId, quantity FROM boxdata WHERE paletteId = '".$elem['paletteId']."' && boxId = '".$elem['boxId']."' &&  productId = '".$elem['productId']."'");
		$tab = $response->fetchALL(PDO::FETCH_ASSOC);

		if (!isset($tab) ||
			$tab['quantity'] < $elem['quantityId'])
		{
			$response->closeCursor();
			return (false);
		}
	}

	$response->closeCursor();
	return (true);
}

if (!empty($_GET['algo_result']))
{
  $treeViewArray = $_GET['algo_result'];
}

$overrideArray = getOverrideArray();
if (checkOverride($overrideArray) == true)
{
	$location = 'apply.php?from=override&algo_result='.$treeViewArray;
}
else
{
	$location = 'override.php?error=true&algo_result='.$treeViewArray;
}

header('Location: ' . $location);
?>