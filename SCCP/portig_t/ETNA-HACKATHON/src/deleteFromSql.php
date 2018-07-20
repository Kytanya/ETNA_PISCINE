<?php
function deleteFromSql($array)
{
	try
	{
	    $bdd = new PDO('mysql:host=localhost;dbname=boxdata;charset=utf8', 'root', '');
	}
	catch (Exception $e)
	{
        die('Erreur : ' . $e->getMessage());
	}

	foreach ($array as $palette)
	{
		foreach ($palette[1] as $box)
		{
			foreach ($box[1] as $product)
			{
				$response = $bdd->query("SELECT quantity FROM boxdata WHERE boxId = '".$box[0]."' && productId = '".$product[0]."'");

				$quantity = $response->fetchALL(PDO::FETCH_ASSOC);

				$newQuantity = intval($quantity[0]['quantity']) - $product[1];
				if ($newQuantity <= 0)
				{
					$bdd->query("DELETE FROM boxdata WHERE boxId = '".$box[0]."' && productId = '".$product[0]."'");
				}
				else
				{
					$bdd->query("UPDATE boxdata SET quantity = '".$newQuantity."' WHERE boxId = '".$box[0]."' && productId = '".$product[0]."'");
				}
			}
		}
	}
}

function deleteFromSqlOverride($array)
{
	try
	{
	    $bdd = new PDO('mysql:host=localhost;dbname=boxdata;charset=utf8', 'root', '');
	}
	catch (Exception $e)
	{
        die('Erreur : ' . $e->getMessage());
	}

	foreach ($array as $elem)
	{
		print_r($elem);
		$response = $bdd->query("SELECT quantity FROM boxdata WHERE boxId = '".$elem['boxId']."' && productId = '".$elem['productId']."'");

		$quantity = $response->fetchALL(PDO::FETCH_ASSOC);

		$newQuantity = intval($quantity[0]['quantity']) - $elem['quantity'];
		if ($newQuantity <= 0)
		{
			$bdd->query("DELETE FROM boxdata WHERE boxId = '".$elem['boxId']."' && productId = '".$elem['productId']."'");
		}
		else
		{
			$bdd->query("UPDATE boxdata SET quantity = '".$newQuantity."' WHERE boxId = '".$elem['boxId']."' && productId = '".$elem['productId']."'");
		}
	}
}
?>