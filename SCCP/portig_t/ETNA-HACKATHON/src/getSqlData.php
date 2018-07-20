<?php
function getSqlData($command)
{
	try
	{
	    $bdd = new PDO('mysql:host=localhost;dbname=boxdata;charset=utf8', 'root', '');
	}
	catch (Exception $e)
	{
        die('Erreur : ' . $e->getMessage());
	}

	$tab = array();
	foreach ($command as $elem)
	{
		$response = $bdd->query("SELECT paletteId, boxId, productId, quantity FROM boxdata WHERE productId = '".$elem[0]."'");
		$tab[] = $response->fetchALL(PDO::FETCH_ASSOC);
	}

	$response->closeCursor();

	$newTab = array();
	for ($k = 0; isset($tab[$k]); $k++)
	{
		for ($i = 0; isset($tab[$k][$i]); $i++)
		{
			$isDuplicate = false;
			for ($j = 0; isset($newTab[$j]); $j++)
			{
				if ($tab[$k][$i]['boxId'] == $newTab[$j]['boxId'])
				{
					$newTab[$j]['products'][] = [ $tab[$k][$i]['productId'], $tab[$k][$i]['quantity'] ];
					$isDuplicate = true;
				}
			}
			if ($isDuplicate == false)
			{
				$products = array();
				$products[] = [ $tab[$k][$i]['productId'], $tab[$k][$i]['quantity'] ];
				$newTab[] = [ 'paletteId' => $tab[$k][$i]['paletteId'], 'boxId' => $tab[$k][$i]['boxId'], 'products' => $products ];
			}
		}
	}
	return $newTab;
}
?>