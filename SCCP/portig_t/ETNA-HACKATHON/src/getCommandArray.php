<?php
function getCommandArray()
{
	$numberLine = $_POST['numberLine'];

	$command = array();
	for ($i = 1; $i <= $numberLine; $i++)
	{
		$productId = $_POST['productId' . $i];
		$quantity = $_POST['quantity' . $i];

		$isDuplicate = false;
		for ($j = 0; isset($command[$j]); $j++)
		{
			if ($productId == $command[$j][0])
			{
				$command[$j][1] += $quantity;
				$isDuplicate = true;
			}
		}
		if ($isDuplicate == false)
		{
	 		$command[] = [$productId, $quantity];
		}
	}
	return $command;
}
?>