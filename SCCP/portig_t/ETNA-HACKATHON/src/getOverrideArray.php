<?php
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
?>